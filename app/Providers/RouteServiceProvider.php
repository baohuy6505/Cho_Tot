<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route; 
class RouteServiceProvider extends ServiceProvider
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
        //route su dung cho admin
        Route::middleware('web')
            ->prefix('admin') 
            ->name('admin.')
            // ->middleware('auth') // có thể thêm middleware auth tại đây sau
            ->group(base_path('routes/admin.php'));

        //route su dung cho nguoi dung thuong
        Route::middleware('web')
            ->group(base_path('routes/web.php'));
    }
}
