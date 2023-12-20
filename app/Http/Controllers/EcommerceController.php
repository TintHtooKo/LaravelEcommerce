<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Product;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EcommerceController extends Controller
{
    public function home(){
        return view('ecommerce.home');
    }

    public function about(){
        return view('ecommerce.about');
    }

    public function content(){
        return view('ecommerce.content');
    }

    public function contentData(Request $request){
        $content = $this->getContent($request);
        Content::create($content);
        return back()->with(["success"=>"Thanks for content us"]);
    }

    public function shop(){
        $product = Product::get();
        return view('ecommerce.shop',compact('product'));
    }

    public function checkout($id){
        $check = Product::find($id);
        return view('ecommerce.checkout',compact('check'));
    }

    public function checkoutOrder(Request $request){
        $checkout = $this->getCheckout($request);
        Checkout::create($checkout);
        return redirect()->route('successPage');
    }

    public function success(){
        return view('ecommerce.success');
    }

    public function orderList(){
        $user = Auth::user()->email;   
        $orders = Checkout::where('email',$user)->get();      
        return view('ecommerce.myorderlist',compact('orders'));
    }


    private function getContent($request){
        return[
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'msg'=>$request->msg
        ];
    }

    private function getCheckout($request){
        return[
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'product'=>$request->product,
            'qty'=>$request->qty,
            'price'=>$request->price,
        ];
    }
}
