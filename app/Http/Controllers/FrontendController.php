<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Payment;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $items = Item::where('inStock','1')->get();
        $categories = Category::all();
        // dd($items);
        return view('frontend.index', compact('items','categories'));
    }

    public function itemCategory($categoryID)
    {
        // echo $categoryID;
        $items = Item::where('category_id',$categoryID)->where('inStock','1')->get();
        $categories = Category::all();
        // dd($items);
        return view('frontend.index', compact('items','categories'));

    }

    public function show($id)
    {
        // echo $id;
        $item = Item::find($id);
        $items = Item::where('category_id',$item->category_id)->where('id','!=',$id)->where('inStock','1')->limit(4)->get();
        // dd($items);
        return view('frontend.shop_item', compact('item','items'));
    }

    public function checkout()
    {
        $payments = Payment::all();
        // echo $id;
        return view('frontend.checkout', compact('payments'));
    }

    public function orderNow(Request $request)
    {
        // echo $request;
        // dd($request);

        $dataArray = json_decode($request->input('orderItems'));
        var_dump($dataArray);
        $voucherNo = strtotime(date('h:i:s'));
        echo $voucherNo;

        $fileName = time().'.'.$request->file('paymentSlip')->extension();

        $upload = $request->file('paymentSlip')->move(public_path('paymentsSlip/'),$fileName);

        foreach($dataArray as $data) {
            $order = new Order();
            $order->vocherNo = $voucherNo;
            $order->user_id = Auth::id();
            $order->item_id = $data->id;
            $order->quantity = $data->qty;
            $order->payment_id = $request->input('paymentMethod');
            $order->paymentSlip = "/paymentsSlip/".$fileName;           
            $order->status = "Pending";
            $order->save();
        }

        return "You Order Successful";
    }

    public function profileDetail($id){
        $user = User::find($id);
        dd($user);
    }
}
