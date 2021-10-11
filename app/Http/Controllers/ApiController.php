<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function getProducts()
    {
        $products = Products::all();
        return $products;
    }

    public function getCategories()
    {
        $categories = Categories::all();
        return $categories;
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required | string | email',
            'password' => 'required | string'
        ]);

        $credentials = request(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $message['token'] = $user->createToken('MyApp')->accessToken;
            $message['token_type'] = 'Bearer';
            $message['experies_at'] = Carbon::parse(Carbon::now()->addWeeks(1))->toDateTimeString();
            $message['success'] = 'Kullanıcı Girişi Başarılı';

            return response()->json(['message' => $message], $this->successStatus);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }


    }
}
