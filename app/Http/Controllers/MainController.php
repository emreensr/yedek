<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\News;
use App\Models\Category;
class MainController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function news(){
        $category = Category::get();
        $author = Author::get();
        return view('News.news',compact('author','category'));
    }
    public function news_add(Request $request){
        $news = new News();
        $news->title=$request->input('title');
        $news->description=$request->input('description');
        $news->status=$request->input('status');
        $news->author_id= $request->input('author_id');
        $news->cat_id= $request->input('category_id');

        if($request->hasFile('photo')) {
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('photo')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('photo')->    storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $news->photo = $fileNameToStore;

        $news->save();
        return redirect('news');

    }
    public function news_index(){
        $news = News::with('category','author')->get();
        return view('News.list',compact('news'));
    }


    public  function  authors_add(){
        return view('Author.addauthor');
    }

    public function authors_store(Request $request){
        $authors = new Author();
        $authors->name=$request->input('name');
        $authors->status=$request->input('status');

        $authors->save();
        return redirect('authors');
    }
    public function authors_index(){
        $authors = Author::get();
        return view('Author.index',compact('authors'));
    }

    public function authors_update(Request $request){
        $id = $request->id;
        $auth = Author::find($id);
        return view('Author.update',compact('auth'));
    }
    public function authors_updatepost(Request $request){
        $id = $request->id;
        $author = Author::find($id);
        $author->name=$request->input('name');
        $author->status=$request->input('status');

        $author->save();
        return redirect('authors');
    }




    public  function  categories_add(){
        return view('Category.addcategory');
    }

    public function categories_store(Request $request){
        $categories = new Category();
        $categories->name=$request->input('name');
        $categories->number=$request->input('number');

        $categories->save();
        return redirect('categories');
    }
    public function categories_index(){
        $categories = Category::get();
        return view('Category.index',compact('categories'));
    }
    public function categories_update(Request $request){
        $id = $request->id;
        $cat = Category::find($id);
        return view('Category.update',compact('cat'));
    }
    public function categories_updatepost(Request $request){
        $id = $request->id;
        $categories = Category::find($id);
        $categories->name=$request->input('name');
        $categories->number=$request->input('number');

        $categories->save();
        return redirect('categories');
    }


    public function news_delete($id){

         $newsdelete= News::find($id);
         $newsdelete->delete();
         return redirect('news');
    }

    public function authors_delete($id){
        $authorsdelete= Author::find($id);
        $authorsdelete->delete();
        return redirect('authors');
    }
    public function categories_delete($id){
        $categories_delete= Category::find($id);
        $categories_delete->delete();
        return redirect('categories');
    }
    public function news_update(Request $request){
        $id = $request->id;
        $newsindex = News::find($id);
        $category = Category::get();
        $author = Author::get();
        return view('News.update',compact('newsindex','category','author'));
    }
    public function news_updatepost(Request $request){
        $id = $request->id;
        $news = News::find($id);
        $news ->cat_id=$request->input('category_id');
        $news ->title=$request->input('title');

        if($request->hasFile('photo')) {
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('photo')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('photo')->    storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $news->photo = $fileNameToStore;

        $news ->author_id=$request->input('author_id');
        $news ->description=$request->input('description');
        $news ->status=$request->input('status');


        $news->save();
        return redirect('news');
    }


}
