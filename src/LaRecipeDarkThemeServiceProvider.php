<?php

namespace BinaryTorch\LaRecipeDarkTheme;

use BinaryTorch\LaRecipe\LaRecipe;
use Illuminate\Support\ServiceProvider;

class LaRecipeDarkThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        LaRecipe::style('LaRecipeDarkTheme', __DIR__.'/../resources/css/dark.css');
    }
}
