<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function __construct(
        private AuthorService $authorService
    ) {}

    /**
     * Display the specified article.
     */
    public function show(string $authorSlug, string $articleSlug)
    {
        $author = $this->authorService->findBySlug($authorSlug);

        if (!$author) {
            abort(404);
        }

        // Find the article by slug within author's articles
        $article = null;
        foreach ($author->articles as $authorArticle) {
            if ($authorArticle->slug === $articleSlug) {
                $article = $authorArticle;
                break;
            }
        }

        if (!$article) {
            abort(404);
        }

        return view('articles.show', compact('author', 'article'));
    }

    /**
     * Display articles by specific author.
     */
    public function byAuthor(string $authorSlug)
    {
        $author = $this->authorService->findBySlug($authorSlug);

        if (!$author) {
            abort(404);
        }

        return view('articles.by-author', compact('author'));
    }

    /**
     * Display Lewandowski article: Analiza porównawcza systemu wyborów sędziów w Polsce i Niemczech.
     */
    public function lewandowskiSedziowie()
    {
        return $this->showArticle('lewandowski', 'analiza-por-wnawcza-systemu-wybor-w-s-dzi-w-w-polsce-i-niemczech');
    }

    /**
     * Display Rosołowski article: Zielona zmiana w polskiej energetyce.
     */
    public function rosolowskiEnergetyka()
    {
        return $this->showArticle('rosolowski', 'zielona-zmiana-w-polskiej-energetyce-w-wietle-polityki-klimatycznej-ue-i-oczekiwa-polak-w');
    }

    /**
     * Display Domańska article: Raport dotyczący badania.
     */
    public function domanskaArtykul()
    {
        return $this->showArticle('domanska', 'raport-dotycz-cy-badania-wp-yw-to-samo-ci-wsp-lnotowej-i-wiedzy-ekonomicznej-na-wybory-konsumenckie-student-w');
    }

    /**
     * Display Kochan article: Obraz Polaków w publikacjach portali internetowych.
     */
    public function kochanArtykul()
    {
        return $this->showArticle('kochan', 'obraz-polak-w-w-publikacjach-portali-internetowych');
    }

    /**
     * Display Łuczuk article: Polska suwerenność informacyjna a social media.
     */
    public function luczukArtykul()
    {
        return $this->showArticle('luczuk', 'polska-suwerenno-informacyjna-a-social-media-media-a-spo-eczno-ciowe-i-ich-rola-w-dyskursie-publicznym-jak-unikn-zamkni-cia-w-ba-ce-filtruj-cej');
    }

    /**
     * Display WOT Balcerowski article.
     */
    public function wotBalcerowski()
    {
        return $this->showArticle('balcerowski', 'wojska-obrony-terytorialnej-wot-w-latach-2016-2022-geneza-perspektywy-i-historia-kampanii-dyskredytacyjnej');
    }

    /**
     * Display Kochman article: Rozwój otoczenia instytucjonalnego polityki młodzieżowej.
     */
    public function kochmanArtykul()
    {
        return $this->showArticle('kochman', 'rozw-j-otoczenia-instytucjonalnego-polityki-m-odzie-owej-w-polsce-po-2015-roku');
    }

    /**
     * Display Ślad Łuczuk article: Jak długi cyfrowy ślad po sobie zostawiamy.
     */
    public function sladLuczuk()
    {
        return $this->showArticle('luczuk', 'jak-d-ugi-cyfrowy-lad-po-sobie-zostawiamy-i-czym-to-grozi-od-kradzie-y-to-samo-ci-po-programowanie-wyborcy');
    }

    /**
     * Display Giera article: Analiza aktywności młodzieży.
     */
    public function gieraArtykul()
    {
        return $this->showArticle('giera', 'analiza-aktywno-ci-m-odzie-y-w-ramach-spo-ecze-stwa-obywatelskiego');
    }

    /**
     * Display Łempicka article: Spieszmy się rodzić ludzi.
     */
    public function lempickaArtykul()
    {
        return $this->showArticle('lempicka-wyszynska', 'spieszmy-si-rodzi-ludzi-dlaczego-polacy-wol-by-childfree');
    }

    /**
     * Display Okołowski article: Dwa modele uniwersytetu.
     */
    public function okolowskiArtykul()
    {
        return $this->showArticle('okolowski', 'dwa-modele-uniwersytetu');
    }

    /**
     * Display Woś article: Solidarność 2023.
     */
    public function wosArtykul()
    {
        return $this->showArticle('wos', 'solidarno-2023');
    }

    /**
     * Display Bruszewski article: Rozwój Sił Zbrojnych RP.
     */
    public function bruszewskiArtykul()
    {
        return $this->showArticle('bruszewski', 'rozw-j-si-zbrojnych-rp-a-mi-dzynarodowe-geopolityczne-zmiany-z-uwzgl-dnieniem-wojny-na-ukrainie');
    }

    /**
     * Display Gursztyn article: Porażki polskiej polityki wschodniej.
     */
    public function gursztynArtykul()
    {
        return $this->showArticle('gursztyn', 'pora-ki-polskiej-polityki-wschodniej-lat-2007-2015');
    }

    /**
     * Display Rutke article: Europa murami podzielona.
     */
    public function rutkeArtykul()
    {
        return $this->showArticle('rutke', 'europa-murami-podzielona');
    }

    /**
     * Display Kita article: Francuska polityka migracyjna.
     */
    public function kitaArtykul()
    {
        return $this->showArticle('kita', 'francuska-polityka-migracyjna-i-wnioski-dla-polski');
    }

    /**
     * Display Bochenek article: Europejskie realia prawno-karne.
     */
    public function bochenekArtykul()
    {
        return $this->showArticle('bochenek', 'europejskie-realia-prawno-karne');
    }

    /**
     * Display Horoszko article: Szkoła marzeń pokolenia Z.
     */
    public function horoszkoArtykul()
    {
        return $this->showArticle('horoszko', 'szko-a-marze-pokolenia-z-o-problemach-i-potrzebach-polskich-uczni-w');
    }

    /**
     * Display Rosołowski atom article: Polski atom.
     */
    public function rosolowskiAtom()
    {
        return $this->showArticle('rosolowski', 'polski-atom-pi-tna-cie-lat-waha-trzy-lata-dzia-a');
    }

    /**
     * Display Trochanowska article: Seksualizacja dzieci.
     */
    public function trochanowskaArtykul()
    {
        return $this->showArticle('trochanowska', 'beata-trochanowska-seksualizacja-dzieci');
    }

    /**
     * Display Balcerowski młodzież article.
     */
    public function balcerowskiMlodziez()
    {
        return $this->showArticle('balcerowski', 'autorytety-a-m-odzie-analiza-przypadku-o-j-zefa-maria-boche-skiego');
    }

    /**
     * Display Kochman EPBD article.
     */
    public function kochmanEpbd()
    {
        return $this->showArticle('kochman', 'wp-yw-nowelizacji-dyrektywy-w-sprawie-efektywno-ci-energetycznej-epbd-na-sytuacj-spo-eczno-gospodarcz-w-polsce');
    }

    /**
     * Display Feszler TSUE article.
     */
    public function feszlerTsue()
    {
        return $this->showArticle('feszler', 'sprawa-c-819-21');
    }

    /**
     * Display Balcerowski Węgry article.
     */
    public function balcerowskiWegry()
    {
        return $this->showArticle('balcerowski', 'czy-polacy-potrzebuj-bia-o-czerwonego-orbana');
    }

    /**
     * Display Balcerowski nacjonalizm article.
     */
    public function balcerowskiNacjonalizm()
    {
        return $this->showArticle('balcerowski', 'o-poj-ciu-nacjonalizm-wprowadzenie-cz-i');
    }

    /**
     * Display Świetlik article: Duch Eisensteina.
     */
    public function swietlikArtykul()
    {
        return $this->showArticle('swietlik', 'duch-eisensteina');
    }

    /**
     * Display Pietr article: Specyfika działalności analitycznej CBA.
     */
    public function pietrArtykul()
    {
        return $this->showArticle('pietr', 'specyfika-dzia-alno-ci-analitycznej-centralnego-biura-antykorupcyjnego');
    }

    /**
     * Display Ratyński article: Strategiczne aspekty polskiego bezpieczeństwa żywnościowego.
     */
    public function ratynskiArtykul()
    {
        return $this->showArticle('ratynski', 'strategiczne-aspekty-polskiego-bezpiecze-stwa-ywno-ciowego');
    }

    /**
     * Display Rak article: Polska między Rosją a Niemcami.
     */
    public function rakArtykul()
    {
        return $this->showArticle('rak', 'polska-mi-dzy-rosj-a-niemcami-historia-i-wyzwania');
    }

    /**
     * Display Rowiński article: Przemija postać świata?
     */
    public function rowinskiArtykul()
    {
        return $this->showArticle('rowinski', 'przemija-posta-wiata-o-ko-cu-epoki-wojtylia-skiej');
    }

    /**
     * Display Trąbiński article: O potrzebie zachowania polskiego złotego.
     */
    public function trabinskiArtykul()
    {
        return $this->showArticle('trabinski', 'o-potrzebie-zachowania-polskiego-z-otego-przysz-o-polskiej-waluty-w-formie-cyfrowej');
    }

    /**
     * Display Dakowski article: Komunikacja wizualna.
     */
    public function dakowskiArtykul()
    {
        return $this->showArticle('dakowski', 'komunikacja-wizualna-wczoraj-i-dzi');
    }

    /**
     * Helper method to show article by author and article slugs.
     */
    private function showArticle(string $authorSlug, string $articleSlug)
    {
        $author = $this->authorService->findBySlug($authorSlug);

        if (!$author) {
            abort(404);
        }

        // Find the article by slug within author's articles
        $article = null;
        foreach ($author->articles as $authorArticle) {
            if ($authorArticle->slug === $articleSlug) {
                $article = $authorArticle;
                break;
            }
        }

        if (!$article) {
            abort(404);
        }

        return view('articles.show', compact('author', 'article'));
    }
}
