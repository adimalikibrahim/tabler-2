<?php

namespace App\Http\Livewire\User;

use App\Models\User as ModelsUser;
use Illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;

    public $search = '';
    public $currentPage = 1;

    public function render(){

        return view('livewire.user.user', [
            'total' => ModelsUser::count(),
            'users' => ModelsUser::where(function($query){
                $query->where('name', 'like', '%'.$this->search.'%')
                    ->orWhere('username', 'like', '%'.$this->search.'%')
                    ->orWhere('email', 'like', '%'.$this->search.'%');
                })->paginate(8),
        ]);
    }

    public function setPage($url){
        $this->currentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function(){
            return $this->currentPage;
        });
    }
    
}
