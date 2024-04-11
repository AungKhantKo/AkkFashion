<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class FrontendController extends Controller
{
    public function index()
    {
        $items = Item::all();
        $categories = Category::all();
        // dd($items);
        return view('frontend.index', compact('items','categories'));
    }

    public function itemCategory($categoryID)
    {
        // echo $categoryID;
        $items = Item::where('category_id',$categoryID)->get();
        $categories = Category::all();
        // dd($items);
        return view('frontend.index', compact('items','categories'));

    }

    public function show($id)
    {
        // echo $id;
        $item = Item::find($id);
        // dd($item);
        return view('frontend.shop_item', compact('item'));
    }
}
