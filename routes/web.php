<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Page2;
use App\Http\Livewire\Profile\Profile;
use App\Http\Livewire\Siswa\Siswa;
use App\Http\Livewire\User\User;
use Illuminate\Support\Facades\Route;


Route::get('/', Dashboard::class);
Route::group(['middleware' => ['auth', 'role:admin && user', 'verified']], function () {
    // Route::get('/page2', Page2::class);
    Route::get('/profile', Profile::class)->name('profile');
});

Route::group(['middleware' => ['auth', 'role:admin', 'verified']], function () {
    Route::get('/siswa', Siswa::class);
    Route::get('/users', User::class);
    // -----------------------------------------------------------------------------------------------------------------
    //  Profile related routes
    // -----------------------------------------------------------------------------------------------------------------

    // Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'editProfile'])
    //     ->name('profile');

    // Route::post('/profile/avatar', [\App\Http\Controllers\ProfileController::class, 'updateAvatar'])
    //     ->name('profile.avatar');

    // Route::delete('/profile/avatar', [\App\Http\Controllers\ProfileController::class, 'removeOldAvatar'])
    //     ->name('profile.deleteavatar');

    // Route::delete('/profile/device/{id}', [\App\Http\Controllers\ProfileController::class, 'removeDevice'])
    //     ->name('profile.deletedevice');

    // Route::get('/profile/theme', function (\Illuminate\Http\Request $request) {
    //     if ($request->has('theme')) {
    //         (new \App\Actions\UserSettings)->set('user_theme', 'theme-'.$request->theme);

    //         return redirect()->back();
    //     }
    // })->name('profile.theme');


    // -----------------------------------------------------------------------------------------------------------------
    //  User management related routes
    // -----------------------------------------------------------------------------------------------------------------

    // Route::get('/users', [\App\Http\Controllers\UsersController::class, 'index'])
    //     ->name('users.index');

    // Route::get('/user/create', [\App\Http\Controllers\UsersController::class, 'create'])
    //     ->name('users.create');

    // Route::post('/user/store', [\App\Http\Controllers\UsersController::class, 'store'])
    //     ->name('users.store');

    // Route::get('/user/{user}/edit', [\App\Http\Controllers\UsersController::class, 'edit'])
    //     ->name('users.edit');

    // Route::put('/user/{user}/update', [\App\Http\Controllers\UsersController::class, 'update'])
    //     ->name('users.update');

    // Route::get('/user/{user}/change-password', [\App\Http\Controllers\UsersController::class, 'changePassword'])
    //     ->name('users.change-password');

    // Route::put('/user/{user}/update-password', [\App\Http\Controllers\UsersController::class, 'updatePassword'])
    //     ->name('users.update-password');

    // Route::delete('/user/{user}/delete', [\App\Http\Controllers\UsersController::class, 'delete'])
    //     ->name('users.delete');

    // Route::get('/user/{user}/delete-avatar', [\App\Http\Controllers\UsersController::class, 'deleteAvatar'])
    //     ->name('users.delete-avatar');

});
