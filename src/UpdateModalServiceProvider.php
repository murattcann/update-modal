<?php

namespace Murattcann\UpdateModal;

use Illuminate\Support\ServiceProvider;

class UpdateModalServiceProvider extends ServiceProvider
{

    public function register(){

    }

    public function boot(){
        $this->loadViewsFrom(__DIR__.DIRECTORY_SEPARATOR.'resources/views/', 'UpdateModal');
    }

}
