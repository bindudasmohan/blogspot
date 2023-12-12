<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::join('categories','articles.Category','=','categories.id')->join('tags','articles.tag1','=','tags.id')->get(['articles.id','articles.Title','articles.Description','articles.Image','categories.CategoryName','tags.TagName']);
        $trend=Article::join('categories','articles.Category','=','categories.id')->join('tags','articles.tag1','=','tags.id')->get(['articles.id','articles.Title','articles.Description','articles.Image','categories.CategoryName','tags.TagName'])->take(5);
        $cate=Category::all();
        $arr=array('articles'=>$articles,'trending'=>$trend,'category'=>$cate);
        return view('index')->with($arr);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $arr['articles']=Article::join('categories','articles.Category','=','categories.id')->join('tags','articles.tag1','=','tags.id')->where('articles.id',$request->getQueryString())->get(['articles.id','articles.Title','articles.Description','articles.Image','categories.CategoryName','tags.TagName']);
        return view('details')->with($arr);
    }
    public function categorise(Request $request)
    {
        $arr['articles']=Article::join('categories','articles.Category','=','categories.id')->join('tags','articles.tag1','=','tags.id')->where('articles.category',$request->getQueryString())->get(['articles.id','articles.Title','articles.Description','articles.Image','categories.CategoryName','tags.TagName']);
        return view('details')->with($arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
