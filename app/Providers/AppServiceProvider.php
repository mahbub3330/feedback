<?php

namespace App\Providers;
use App\Models\Department;
use View;
//use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
//        View::share('name','mahbub');
//        View::composer('auth.register',function ($view){
//            $view->with('user',User::pluck('department'));
//        });

        View::composer('auth.register',function ($view){
            $view->with('departments',Department::where('id','!=', 1)->pluck('name','id'));
        });
    }
}
