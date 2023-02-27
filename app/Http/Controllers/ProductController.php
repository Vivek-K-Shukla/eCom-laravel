<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    function index(){
        $data=Product::all();
        return view('product',['products'=>$data]);
    }

    public function detail($id){
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }

    public function search(Request $req){
        $data = Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }

    public function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    static function CartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();

    }

    public function cartList(){
        $userId=Session::get('user')['id'];
        $data = DB::table('carts')
        ->join('products','carts.product_id','products.id')
        ->select('products.*','carts.id as carts_id')
        ->where('carts.user_id',$userId)
        ->get();
        return view('cartlist',['products'=>$data]);
    }

    public function removeCart($id){
        $data=Cart::find($id);
        $data->delete();
        return redirect('cartlist');
    }
}
