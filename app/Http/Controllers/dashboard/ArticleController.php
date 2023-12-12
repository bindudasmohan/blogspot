<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $art=Article::join('categories','articles.Category','=','categories.id')->join('tags','articles.tag1','=','tags.id')->get(['articles.id','articles.Title','articles.Description','articles.Image','categories.CategoryName','tags.TagName']);
        $arr=array('articles'=>$art);
        return view('articlelist')->with($arr);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $arr=array('category'=>Category::all(),'tags'=>Tag::all());
        return view('newarticle')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Article $art)
    {
        if(isset($request->image)){

        
            $art->Title=$request->txtName;
            $art->Description=$request->txtDesciption;
            if($request->hasfile('image'))
            {
                $file=$request->file('image');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('upload/',$filename);
                $art->Image=$filename;
                $art->Category=$request->txtCategory;
                $art->tag1=$request->txtTag1;
                $art->tag2=$request->txtTag2;
                $art->save();
            }
           
            return redirect()->route('articlelist');
            }
            else{
                $file="";
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $art=Article::find($request->getQueryString());
       // $arr['article']=$art;
        $arr=array('category'=>Category::all(),'tags'=>Tag::all(),'article'=>$art);
        return view('editarticle')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(isset($request->image)){

        $art=Article::find($request->getQueryString());
        $art->Title=$request->txtName;
        $art->Description=$request->txtDescription;
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/',$filename);
            $art->Image=$filename;
            $art->Category=$request->txtCategory;
            $art->tag1=$request->txtTag1;
            $art->tag2=$request->txtTag2;
            $art->save();
        }
       
        return redirect()->route('articlelist');
        }
        else{
            $file="";
        }
    }
    public function home()
    {
        $arr['articles']=Article::join('categories','articles.Category','=','categories.id')->join('tags','articles.tag1','=','tags.id')->get(['articles.id','articles.Title','articles.Description','articles.Image','categories.CategoryName','tags.TagName']);
       
        return view('home')->with($arr);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $art=Article::find($request->getQueryString());
        if(file_exists(public_path('upload/'.$art->Image)))
          unlink(public_path('upload/'.$art->Image));
        $art->delete();
        
        return redirect()->route('articlelist');

    }
}
