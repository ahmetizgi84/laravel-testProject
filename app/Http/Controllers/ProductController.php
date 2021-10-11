<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function products()
    {
        $products = Products::paginate(12);
        $categories = Categories::all();
        //$products = Products::all(); // Tüm ürünleri getir.
        //$products = Products::whereId(6)->get(); // id'si 6 olan ürünü getir.
        //$products = Products::whereProductname("quia")->get(); // productName'i 'quia' olan ürünleri getir.
        //$products = Products::find(10);  // id'si 10 olan ürünü getir. array değil obje döner
        return view('front.products', ['products' => $products, 'categories' => $categories]);
    }

    public function productDetail($id)
    {
        $product = Products::find($id); // id'si belli olan veriyi find ile de bulabiliriz. Sonucu obje olarak getirir.

        //return $product->getCategory; // category bilgisi object olarak gelir.
        //return $product->getCategory->categoryName; // category adını alırız.

        return view('front.productDetail', ['product' => $product]);
    }

    public function kategoriGetir($kategoriId)
    {
        $categories = Categories::all();
        $category = Categories::find($kategoriId);
        //$categories = DB::table('categories')->get();
        return view('front.kategori', ['category' => $category, 'categories' => $categories]);
    }

}
