<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(){

        $orders = Order::all();
        // dd($orders);
        $voucherNoGroups = $orders->groupBy('vocherNo')->toArray();
        // dd($voucherNoGroups);
        foreach($voucherNoGroups as $voucherNo => $group) {
            $orderIDs = array_column($group, 'id');
            var_dump($orderIDs);
            $ordersWithUser[] = Order::with('user')->whereIn('id',$orderIDs)->where('status','Pending')->first();
        }
        // dd($ordersWithUser);
        // die();
        return view('admin.orders.index',compact('ordersWithUser','voucherNoGroups'));
        

    }
    public function detail($voucherNo){
        // echo $voucherNo;
        $orderFirst = Order::where('vocherNo',$voucherNo)->first();
        // dd($orderFirst);
        $orders= Order::where('vocherNo',$voucherNo)->get();
        return view('admin.orders.detail',compact('orderFirst','orders'));
    }
}
