<?php

namespace App\Http\Livewire\Siswa;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class Siswa extends Component
{
    use WithPagination;
    public $search = '';
    public $currentPage = 1;

    // public function render()
    // {
    //     $data1 = json_decode(Storage::get('public/json/guru.json'), true);
    //     $col = $data1;
    //     // dd(array($col));
    //     dd($data1);
    //     return view('livewire.siswa.siswa', ['data' => $data1 ]);
    // }


    public function setPage($url){
        $this->currentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function(){
            return $this->currentPage;
        });
    }


    // PAGINATION FROM WEB

    public function render()
    {
        // $json = Http::withToken('WLdZ6LQ9CD7plYq')->get('http://localhost:5774/WebService/getPesertaDidik?npsn=20263295');
        $json = Http::get('https://dummyjson.com/users');
        $data1 = $json->json('users');
        $s = collect($data1)->where(function($query){
            $query->where('name', 'like', '%'.$this->search.'%')
                ->orWhere('username', 'like', '%'.$this->search.'%')
                ->orWhere('email', 'like', '%'.$this->search.'%');
            });
        // dd($json);
        return view('livewire.siswa.siswa', [
            'data' => $this->paginate($data1),
            'total' => $json->json('limit'),
            's' => $s
        ]);
    }

    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
