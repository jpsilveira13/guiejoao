<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Article;
use App\ArticleCategory;
use App\Product;
use App\User;
use App\Photo;
use App\PhotoAlbum;

class DashboardController extends AdminController {
    private $products;

    public function __construct(Product $products)
    {
        $this->products = $products;
        parent::__construct();
        view()->share('type', '');
    }

	public function index()
	{
        $title = "Dashboard";

        $news = Article::count();
        $newscategory = ArticleCategory::count();
        $users = User::count();
        $photo = Photo::count();
        $photoalbum = PhotoAlbum::count();
        $countProduct = $this->products->count();

		return view('admin.dashboard.index',  compact('title','news','newscategory','photo','photoalbum','users','countProduct'));
	}
}