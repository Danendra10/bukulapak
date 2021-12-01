<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //
    public function index()
    {
        $data = Products::all();

        return view('products', ['product' => $data]);
    }
    public function detail($id)
    {

        $data = Products::find($id);
        return view('detail', ['details' => $data]);
    }
    public function search(Request $request)
    {

        $data = Products::where('name', 'like', '%' . $request->input('query') . '%')->get();
        return view('search', ['product' => $data]);

    }
    public function addToCart(Request $request)
    {
        if ($request->session()->has('users')) {
            $cart = new cart();
            $cart->users_id = $request->session()->get('users')['id'];
            $cart->products_id = $request->products_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
    public static function cartItem()
    {

        $usersId = Session::get('users')['id'];
        return cart::where('users_id', $usersId)->count();
    }
}
