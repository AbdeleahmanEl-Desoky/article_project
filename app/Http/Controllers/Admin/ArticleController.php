<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleDescription;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::get();

        return view('admin.article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Article::create([
            'title_en'=>$request->title_en,
            'description_en'=>$request->description_en,
            'keywords_en'=>$request->keywords_en,
            'url_en'=>$request->url_en,
            'google_site_verification_en'=>$request->google_site_verification_en,
            'google_title_en'=>$request->google_title_en,
            'image'=>$request->image
        ]);

        return redirect()->route('admin.articles.index');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $articles = ArticleDescription::where('article_id',$id)->get();

        return view('admin.article.show',compact('articles','id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $article = Article::findOrFail($id);

        return view('admin.article.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Article::findOrFail($id);

        return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $article = Article::findOrFail($id);
       $article->delete();

       return redirect()->route('admin.articles.index');
    }
}
