<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Products;
use App\Http\Requests\ProductUpdateRequest;

class AdminController extends Controller
{

    public function dashboard(){
        $count = Products::all()->count();
        $usersCount = User::all()->count();
        $categoryCount = Categories::all()->count();
        return view('admin.dashboard', [
            'productsCount' => $count,
            'usersCount' => $usersCount,
            'categoryCount' => $categoryCount,
            ]);
    }

    public function products(){
        //$products = Products::paginate(10);
        $products = Products::all();
        return view('admin.products', ['products'=> $products]);
    }

    public function categories(){
        $categories = Categories::all();
        return view('admin.categories', ['categories'=> $categories]);
    }

    public function categoryDetail($id){
        $category = Categories::find($id) ?? abort(404, 'Kategori Bulunamadı');
        return view('admin.categoryDetail', ['category'=> $category]);
    }

    public function updateCategory(Request $request, $id){
        Categories::find($id) ?? abort(404, 'Kategori Bulunamadı');
        Categories::where('id', $id)->update($request->except(['_token']));
        return redirect()->route('admin.categories', $id)->withSuccess('Kategori Güncellendi');

        $category = Categories::find($id) ?? abort(404, 'Kategori Bulunamadı');
        return view('admin.categoryDetail', ['category'=> $category]);
    }

    public function newCategory(){
        return view('admin.newCategory');
    }

    public function addNewCategory(Request $request){
        // Custom request oluşturularak validation check edilebilir.
        Categories::create($request->post());
        return redirect()->route('admin.categories')->withSuccess("Kategori Eklendi");
    }

    public function changeCategoryStatus($catId){
        $category = Categories::find($catId) ?? abort(404, 'Kategori Bulunamadı');
        $status = $category->status;
        if ($status == 0){
            Categories::where('id', $catId)->update([
                'status' => 1
            ]);
        }else{
            Categories::where('id', $catId)->update([
                'status' => 0
            ]);
        }
        $categories = Categories::all();
        return view('admin.categories', ['categories'=> $categories]);
    }

    public function deleteCategory($id){
        $category = Categories::find($id) ?? abort(404, 'Kategori Bulunamadı');
        $category->delete();
        return redirect()->route('admin.categories')->withSuccess("Kategori silindi");
    }

    public function newProduct(){
        $categories = Categories::where('status', 1)->get();
        return view('admin.newProduct', ['categories' => $categories]);
    }

    public function store(Request $request){
        // Custom request oluşturularak validation check edilebilir.
        Products::create($request->post());
        return redirect()->route('admin.products')->withSuccess("Ürün Kaydedildi");
    }

    public function update($id){
        $categories = Categories::all();
        $product = Products::find($id) ?? abort(404, 'Ürün Bulunamadı');
        return view('admin.update', ['product' => $product, 'categories' => $categories]);
    }

    public function updateProduct(ProductUpdateRequest $request, $id){
        // Custom request ile validation check edildi
        Products::find($id) ?? abort(404, 'Ürün Bulunamadı');
        Products::where('id', $id)->update($request->except(['_token']));
        return redirect()->route('admin.update', $id)->withSuccess('Ürün Güncellendi');
    }

    public function delete($id){
        $product = Products::find($id) ?? abort(404, 'Ürün Bulunamadı');
        $product->delete();
        return redirect()->route('admin.products')->withSuccess("Ürün silindi");
    }

    public function users(){
        $users = User::all();
        return view('admin.users', ['users'=>$users]);
    }

    public function logout(){
        Auth::logout();
        return redirect('login')->with(['message' => 'Çıkış yapıldı!']);
    }

}
