<?php

namespace App\Http\Livewire\Siswa;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;
use PhpParser\Node\Stmt\Foreach_;

class Siswa extends Component
{
    use WithPagination;
    public $currentPage = 1;

    public function render()
    {
        $data1 = json_decode(Storage::get('public/json/guru.json'), true);
        $col = $data1;
        // dd(array($col));
        dd($data1);
        return view('livewire.siswa.siswa', ['data' => $data1 ]);
    }


    public function setPage($url){
        $this->currentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function(){
            return $this->currentPage;
        });
    }

    // public function downloadjson()
    // {
    //     $json = Http::withToken('WLdZ6LQ9CD7plYq')->get('http://localhost:5774/WebService/getPesertaDidik?npsn=20263295');
    //     $data1 = $json->json('rows');
    //     $data = collect($data1)->sortBy('nama')->sortBy('nama');

    //     $data2 = json_encode($data);
    //     Storage::put('public/json/'.'data.json', $data2);
    //     return view('livewire.siswa.siswa', compact('data'));
    // }
}
