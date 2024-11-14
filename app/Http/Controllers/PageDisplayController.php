<?php

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Repositories\PageRepository;
use Illuminate\Contracts\View\View;

class PageDisplayController extends Controller
{
    public function show(string $slug, PageRepository $pageRepository): View
    {
        $page = $pageRepository->forSlug($slug);

        if (!$page) {
            abort(404);
        }

        return view('site.page', ['item' => $page]);
    }

    public function home(): View
{
    $homepagePage = TwillAppSettings::get('homepage.homepage.page');

    if ($homepagePage !== null && $homepagePage->isNotEmpty()) {
        /** @var \App\Models\Page $frontPage */
        $frontPage = $homepagePage->first();

        if ($frontPage->published) {
            return view('site.page', ['item' => $frontPage]);
        }
    }

    abort(404);
}

}
