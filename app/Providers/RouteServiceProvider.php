<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Rute default aplikasi.
     */
    public const HOME = '/home';

    /**
     * Register route aplikasi.
     */
    public function boot(): void
    {
        parent::boot();

        // Panggil semua pemetaan route
        $this->mapWebRoutes();
        $this->mapApiRoutes();
        $this->mapAdminRoutes(); // ✅ Tambahkan baris ini
    }

    /**
     * Route web utama (halaman publik)
     */
    protected function mapWebRoutes(): void
    {
        Route::middleware('web')
            ->group(base_path('routes/web.php'));
    }

    /**
     * Route API (opsional)
     */
    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->group(base_path('routes/api.php'));
    }

    /**
     * ✅ Route untuk admin (dashboard)
     * Semua file di routes/_/admin.php otomatis diprefix 'admin'
     */
    protected function mapAdminRoutes(): void
    {
        Route::middleware('web')
            ->prefix('admin')
            ->group(base_path('routes/_/admin.php'));
    }
}
