<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $dataperiode = Periode::query()
                ->join('semester', 'semester.id', '=', 'periode.semester_id')
                ->select('periode.id', 'periode.periode', 'semester.ket_semester')
                ->get();
            $view->with('dataperiode', $dataperiode);
        });
    }
}
