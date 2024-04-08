<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleDescription;
use Illuminate\Http\Request;

class ArticleDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        return view('admin.article.details.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {
        $articleDescription = ArticleDescription::create([
            'article_id'=>$id,
            'title_en'=>$request->title_en,
            'description_en'=>$request->description_en,
            'style'=>$request?->style,
            'aria' => $request->aria
        ]);

        foreach ($request->images as $image) {
            $articleDescription->imageArticleDescriptions()->create([
                'image' => $image]);
        }

        return redirect()->route('admin.articles.show',$id);
    }


    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $article = ArticleDescription::findOrFail($id);

        return view('admin.article.details.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $article = ArticleDescription::findOrFail($id);

        return view('admin.article.details.edit',compact('article','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = ArticleDescription::findOrFail($id);
        $article->update([
            'title_en'=>$request->title_en,
            'description_en'=>$request->description_en,
            'aria' => $request->aria
        ]);

        return redirect()->route('admin.articles.show', $article->article_id );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = ArticleDescription::findOrFail($id);
       $article->delete();
       return redirect()->route('admin.articles.index');
    }
}
