<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Enums\SpecialArticle;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = article(SpecialArticle::HOME());

        return view('front.home.index', compact('article'));
    }
}
