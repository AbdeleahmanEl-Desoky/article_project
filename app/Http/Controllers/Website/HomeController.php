<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Car;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Testimonial;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->data['articles'] = Article::get();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['article'] = Article::with(['articleDescriptions','articleDescriptions.imageArticleDescriptions'])->first();

        return view('website.manhattan.manhattan',$this->data);
    }

    public function article($title,$id)
    {
        $this->data['article'] =Article::where('id',$id)->with(['articleDescriptions','articleDescriptions.imageArticleDescriptions'])->first();
        return view('website.manhattan.manhattan',$this->data);
    }

    public function comment(Request $request)
    {
        $request->all();

        $comment = Comment::create($request->all());

        return redirect()->route('car',$request->car_id);
    }

}
