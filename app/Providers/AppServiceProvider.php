<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Tablica artykułów
        $articles = [
            2022 => [
                ['slug' => 'wot-balcerowski', 'title' => 'Balcerowski - Wot'],
                ['slug' => 'kochman-artykul', 'title' => 'Kochman - Artykuł'],
                ['slug' => 'rosolowski-energetyka', 'title' => 'Rosołowski - Energetyka'],
                ['slug' => 'luczuk-artykul', 'title' => 'Łuczuk - Artykuł'],
                ['slug' => 'domanska-artykul', 'title' => 'Domańska - Artykuł'],
                ['slug' => 'lewandowski-sedziowie', 'title' => 'Lewandowski - Sędziowie'],
                ['slug' => 'kochan-artykul', 'title' => 'Kochan - Artykuł'],
                ['slug' => 'trabinski-artykul', 'title' => 'Trąbiński - Artykuł'],
            ],
            2023 => [
                ['slug' => 'wos-artykul', 'title' => 'Woś - Artykuł'],
                ['slug' => 'gursztyn-artykul', 'title' => 'Gursztyn - Artykuł'],
                ['slug' => 'kita-artykul', 'title' => 'Kita - Artykuł'],
                ['slug' => 'swietlik-artykul', 'title' => 'Świetlik - Artykuł'],
                ['slug' => 'balcerowski-mlodziez', 'title' => 'Balcerowski - Młodzież'],
                ['slug' => 'kochman-epbd', 'title' => 'Kochman - EPBD'],
                ['slug' => 'luczuk-artykul', 'title' => 'Łuczuk - Artykuł'],
                ['slug' => 'rosolowski-energetyka', 'title' => 'Rosołowski - Energetyka'],
                ['slug' => 'rutke-artykul', 'title' => 'Rutke - Artykuł'],
                ['slug' => 'bochenek-artykul', 'title' => 'Bochenek - Artykuł'],
                ['slug' => 'trochanowska-artykul', 'title' => 'Trochanowska - Artykuł'],
                ['slug' => 'horoszko-artykul', 'title' => 'Horoszko - Artykuł'],
                ['slug' => 'lempicka-artykul', 'title' => 'Łempicka - Artykuł'],
                ['slug' => 'okolowski-artykul', 'title' => 'Okołowski - Artykuł'],
                ['slug' => 'bruszewski-artykul', 'title' => 'Bruszewski - Artykuł'],
                ['slug' => 'giera-artykul', 'title' => 'Giera - Artykuł'],
            ],
            2024 => [
                ['slug' => 'balcerowski-wegry', 'title' => 'Balcerowski - Węgry'],
                ['slug' => 'balcerowski-nacjonalizm', 'title' => 'Balcerowski - Nacjonalizm'],
                ['slug' => 'feszler-tsue', 'title' => 'Feszler - TSUE'],
                ['slug' => 'rosolowski-atom', 'title' => 'Rosołowski - Atom'],
                ['slug' => 'slad-luczuk', 'title' => 'Ślad - Łuczuk'],
            ],
        ];

        // Udostępnij zmienną w każdym widoku
        View::share('articles', $articles);
    }
}

