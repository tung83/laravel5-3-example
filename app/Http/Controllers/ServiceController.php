<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    /**
     * Change language.
     *
     * @param  string $lang
     * @return \Illuminate\Http\Response
     */
    public function __invoke($serviceCategory)
    {
//        $language = in_array($lang, config('app.languages')) ? $lang : config('app.fallback_locale');
//        
//        session()->set('locale', $language);

        return back();
    }
}
