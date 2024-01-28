<?php

namespace App\Providers;

use App\Models\Siswa;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer('layouts.*', function ($view) {
            $siswa = [];
            if (auth()->user() && auth()->user()->level == 'siswa') {
                $siswa = Siswa::where('user_id', auth()->user()->id)->first();
            }
            $view->with('siswa_sidebar', $siswa);
        });
    }
}
