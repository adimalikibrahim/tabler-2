<?php

namespace App\Http\Livewire\Siswa;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;

class Siswa extends Component
{
    use WithPagination;

    public $search = '';
    public $currentPage = 1;
    // public $active = 'active';

    public function render(){

        // $users = User::latest()->paginate();

        // if ($this->search !== null) {
        //     $users = User::where('name','like', '%' . $this->search . '%')
        //     ->latest()->paginate();
        // }
        // $this->emit('name');

        return view('livewire.siswa.siswa', [
            'total' => User::count(),
            // 'users' => $users,
            'users' => User::where(function($query){
                $query->where('name', 'like', '%'.$this->search.'%')
                    ->orWhere('username', 'like', '%'.$this->search.'%')
                    ->orWhere('email', 'like', '%'.$this->search.'%');
                })->paginate(2),
        ]);
    }

    public function setPage($url){
        $this->currentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function(){
            return $this->currentPage;
        });
    }
}
