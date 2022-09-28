<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
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

        // サービスプロバイダにビューコンポーザーを登録している
        View::composer(
            'hello.index',
            function ($view) {
                // view_messageという変数名で'composer message'を渡している
                $view->with('view_message', 'composer message!');
                $view->with('hoge', 'ほげほげ');
            }
        );
    }
}
