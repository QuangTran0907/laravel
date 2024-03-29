<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Size;
use App\Models\Size_Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Cart_Product;
use App\Models\Product;
use App\Models\Media;
use App\Models\Review;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function web_index()
    {
        $products = Product::paginate(6);
        if(Auth::check())
        {
            $user = User::find(\auth()->id());
            $cart = Cart::where('user_id',$user->id)->first();
            
      
            return view('web.index',compact('products'));
        }

        
        return view('web.index',compact('products'));
    }
    public function detail($id)
    {
        $product = Product::find($id);
        $reviews = Review::where('product_id',$product->id)->get();
        $related_product = Product::where('brand_id',$product->brand_id)->paginate(10);
        $size_product = Size_Product::where('product_id',$id)->get();
        
       //dd($product->media);
        return view('web.detail',compact('product','size_product','related_product','reviews'));
    }

    public function review(Request $request,$id)
    {
        if(Auth::check())
        {
            $user = User::find(\auth()->id());
            $product = Product::find($id);
            $review = Review::create([
                'user_id'=>$user->id,
                'product_id'=>$product->id,
                'review'=>$request->input('review'),
                'rating'=>$request->input('rating')

             ]);
             $review->save();
             return back();
        }
       
    }

    
}
