<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Article;

class ArticlesController0 extends Controller
{
    //
    public function index() {

    // Redirect to the previous page successfully
    return view('admin.articles.index');
    }
    public function store(Request $request) {
    $article_data = [
       'en' => [
           'title'       => $request->input('en_title'),
           'full_text' => $request->input('en_full_text')
       ],
       'ar' => [
           'title'       => $request->input('ar_title'),
           'full_text' => $request->input('ar_full_text')
       ],
    ];

    // Now just pass this array to regular Eloquent function and Voila!
    Article::create($article_data);

    // Redirect to the previous page successfully
    return redirect()->route('admin.articles.index');
}
}
