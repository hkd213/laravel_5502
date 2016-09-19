<?php

namespace App\Providers;

use App\Note;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Note::updating(function($note){
           $del = Note::find($note->id);
            if($del->img){
                unlink(public_path('profilepics/' . $del->img));
            }

        });

        Note::deleting(function($note){
            $del = Note::find($note->id);
            if($del->img){
                unlink(public_path('profilepics/' . $del->img));
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
