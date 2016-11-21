<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
   private  $category;

    public function __construct(Category $category){
        $this->category = $category;
    }

    public function allCategory(){
        $categories = $this->category->orderBy('id','desc')->paginate(18);
        return view('admin.categories.index',compact('categories'));
    }

    public function  newCategory(){

        return view('admin.categories.create');
    }

    public function store(Request $request){
        $category = $this->category->fill($request->all());
        $request->session()->flash('alert-success','Product register success!');
        $category->save();
        return redirect()->route('category');

    }

    public function editCategory(Request $request, $id){
        $category = $this->category->find($id);

        return view('admin.categories.edit',compact('category'));

    }

    public function updateCategory(Request $request,$id){
        $this->category->find($id)->update($request->all());
        return redirect()->route('category');

    }
}
