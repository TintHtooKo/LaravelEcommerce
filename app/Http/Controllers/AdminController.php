<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function home(){
        $posts = Product::orderBy('created_at','desc')->paginate(4);
        return view('admin.admin_home',compact('posts'));
    }

    public function create(Request $request){
        $post = $this->getProduct($request);
        if($request->hasFile('image')){
            $filename = uniqid().$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public',$filename);
            $post['image'] = $filename;
        }
        Product::create($post);
        return back()->with(['success'=>'Product created successfully']);
    }

    public function delete($id){
        $product = Product::find($id);
        if (!empty($product->image) && Storage::disk('public')->exists($product->image)) {
            Storage::delete('public/'.$product->image);
        } 
        $product->delete();
        return redirect()->route('adminHome')->with(['delete' => 'Product deleted successfully']);
    }

    public function order(){
        $order = Checkout::get();
        return view('admin.admin_order',compact('order'));
    }

    public function deleteOrder($id){
        $orderList = Checkout::find($id);
        $orderList->delete();
        return back()->with(["delete"=>"Delete Order List Successfully"]);
    }

    private function getProduct($request){
        return[
            'p_name'=>$request->product,
            'price'=>$request->price,
            'image'=>$request->image
        ];
    }
}
