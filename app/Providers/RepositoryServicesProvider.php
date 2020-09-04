<?php

namespace App\Providers;

use App\Repositorios\Arquivo\ArquivoRepositorio;
use App\Repositorios\Arquivo\IArquivo;
use App\Repositorios\Cardapio\CardapioRepositorio;
use App\Repositorios\Cardapio\ICardapio;
use App\Repositorios\Categoia\CategoriaRepositorio;
use App\Repositorios\Categoia\ICategoria;
use Illuminate\Support\ServiceProvider;

class RepositoryServicesProvider extends ServiceProvider
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
        $this->app->bind(ICategoria::class, CategoriaRepositorio::class);
        $this->app->bind(ICardapio::class, CardapioRepositorio::class);
        $this->app->bind(IArquivo::class, ArquivoRepositorio::class);
    }
}
