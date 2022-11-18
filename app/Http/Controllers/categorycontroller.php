<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\category;
class categorycontroller extends Controller
{
    public function index(){
        $categories = category::latest()->paginate(5);
        return view('categories.list',['categories'=>$categories]);

    }
    public function create(){
        $categories = category::all();
        return view('categories.new');

}
public function store(Request $request){
    $request->validate([
        'title' =>'required|unique:categories|max:200'
    ]);
    
   // dd($request->all());
   $category =new category;
   $category->title =$request->title;
   $category->save();
   return redirect('/')->withsuccess('new category created');

}
public function edit($id){
    //dd($id);
   $category=category::where('id',$id)->first();
   return view('categories.edit',['category'=>$category]);
}
public function update(Request $request,$id){
$category=category::where('id',$id)->first();
$category->title = $request->title;
$category->save();
return redirect('/');
}


public function destroy($id)
{
    $category= category::whereId($id)->First();
  $category->delete();
  return redirect('/');
}
}