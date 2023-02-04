<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;
    public $avatar;

    public function render()
    {
        $devices = DB::table('sessions')
        ->where('user_id', auth()->user()->id)
        ->get()
        ->reverse();
        
        return view('livewire.profile.profile', ['devices' => $devices]);
    }

    protected $avatarFolder = 'avatars';

    /**
     * Get user avatar URL
     *
     * @param $user
     * @return string
     */
    public function get($user = null)
    {
        $user = is_null($user) ? auth()->user() : $user;

        return Storage::url('public/' . $this->avatarFolder . '/' . $user->avatar);
    }

    /**
     * Upload user avatar
     *
     * @param $file
     * @return false|string
     */
    public function upload()
    {
        $this->validate([
            'avatar' => 'image|max:1024', // 1MB Max
        ]);

        $user = auth()->user();
        if ($user->avatar != null) {
            Storage::delete('public/avatars/'.$user->avatar);
        }
            // get filename name with extension
            $filename = pathinfo($this->avatar->getClientOriginalName(), PATHINFO_FILENAME);
    
            // remove unwanted characters
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
    
            // create unique file name
            $uniqueFileName = substr(md5($filename), 0, 15).'_'.time().'.'.$this->avatar->getClientOriginalExtension();
    
            // resize avatar
            $image = Image::make($this->avatar)->fit(400, null, function($constraint){
                $constraint->upsize();
            })->encode('png');
    
            // save avatar to public storage
            $success = Storage::put("public/avatars/{$uniqueFileName}", $image->__toString());
            // $success = $this->avatar->storeAs('avatars');
            // if avatar has been stored successfully
            if ($success) {
                Storage::deleteDirectory('livewire-tmp');
                User::find(auth()->user()->id)->update(['avatar'=>$uniqueFileName]);
                return redirect('profile');
            
        }
    
        return false;
    }
}
