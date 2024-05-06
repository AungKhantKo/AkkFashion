<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Http\Requests\PaymentRequest;
use App\Http\Requests\PaymentUpdateRequest;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // echo "hello";
        $payments = Payment::all();
        return view('admin.payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // echo "hello";
        return view('admin.payments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaymentRequest $request)
    {
        $payments = Payment::create($request->all());

        // file upload
        $fileName= time().'.'.$request->image->extension();
        $upload = $request->image->move(public_path('images/'), $fileName);
        if($upload){
            $payments->image = "/images/".$fileName;
        }
        $payments->save();
        return redirect()->route('backend.payments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // echo $id;
        $payment = Payment::find($id);
        // dd($payment);
        return view('admin.payments.edit',compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PaymentUpdateRequest $request, string $id)
    {
        // dd($request);
        // echo $id;
        $payment = Payment::find($id);
        $payment->update($request->all());
        if($request->hasFile('payment_image')){
            // file upload
            $fileName = time().'.'.$request->payment_image->extension();

            $upload = $request->payment_image->move(public_path('images/'), $fileName);
            if($upload) {
                $payment->image = "/images/".$fileName;
            }
        }else{
            $payment->image = $request->old_image;
        }
        $payment->save();
        return redirect()->route('backend.payments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // echo $id;
        $payment = Payment::find($id);
        $payment->delete();
        return redirect()->route('backend.payments.index');
    }
}
