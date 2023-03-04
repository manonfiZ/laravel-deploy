<?php

namespace App\Providers;

use App\akEminenceGroup\Articles\Repository\ArticleRepository;
use App\akEminenceGroup\Articles\Repository\Interfaces\ArticleRepositoryInterface;
use App\akEminenceGroup\Categories\Repositories\CategoryRepository;
use App\akEminenceGroup\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\akEminenceGroup\Users\Repositories\Interfaces\UserRepositoryInterface;
use App\akEminenceGroup\Users\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class ApiRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(ArticleRepositoryInterface::class, ArticleRepository::class);
        // $this->app->bind(Ar::class, UserRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
