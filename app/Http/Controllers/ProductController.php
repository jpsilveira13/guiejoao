<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
   private $product;
    private $category;


    public function __construct(Product $product, Category $category){
        $this->product = $product;
        $this->category = $category;
    }

    public function allProduct(){
        $products = $this->product->orderBy('id','desc')->paginate(18);
        return view('admin.products.index',compact('products'));
    }

    public function  newProduct(){
        $categories = $this->category->orderBy('name','desc')->get();
        return view('admin.products.create',compact('categories'));
    }

    public function store(Request $request){
        $product = $this->product->fill($request->all());
        $image = $request->file('url_image');

        $product->url_image = md5(date('Ymdhms').$image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
        $path = public_path().'/img/products/'.$product->url_image;
        Image::make($image->getRealPath())->resize(1094,496)->save($path);//guilherme aqui vc coloca os valores que quiser que ele ira cortar :D
        $request->session()->flash('alert-success','Product register success!');
        $product->save();
        return redirect()->route('products');

    }

    public function editProduct(Request $request, $id){
        $product = $this->product->find($id);
        $categories = $this->category->get();
        return view('admin.products.edit',compact('product','categories'));

    }

    public function updateProduct(Request $request,$id){
        $this->product->find($id)->update($request->all());
        return redirect()->route('products');

    }

}
