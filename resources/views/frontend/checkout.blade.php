@extends('layouts.frontend')
@section('content')

    <section class="container py-5">
        <h3 class="text-center py-5">My Shopping Card</h3>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>codeNo</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Qty</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody id="itemTbody">
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>codeNo</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Qty</th>
                        <th>Amount</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="d-grid gap-2">
            @guest
                <a href="/login" class="btn btn-primary">Login</a>
            @else
            <form action="" id="paymentForm" enctype="multipart/form-data">
                <div class="row">
                    @csrf
                    <div class="col-md-6">
                        <label for="paymentSlip">PaymentSlip</label>
                        <input type="file" class="form-control" accept="image/*" name="paymentSlip" id="paymentSlip">
                    </div>

                    <div class="col-md-6">
                        <label for="paymentMethod">PaymentMethod</label>
                        <select class="form-select" name="paymentMethod" id="paymentMethod">
                            <option value="">Choose Payment</option>
                            @foreach($payments as $payment)
                                <option value="{{$payment->id}}">{{$payment->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" id="orderNow" class=" btn btn-success my-5">Order</button>
                </div>
            </form>
            @endguest
        </div>
    </section>

    <!-- order success modal -->
    <div class="modal" tabindex="-1" id="orderSuccessModal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Order Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h1 class="text-success fs-1"><i class="bi bi-check-circle"></i></h1>
                    <p>Your Order is successful</p>
                </div>
            </div>
            <div class="modal-footer">
                
                <a href="/" type="button" class="btn btn-success">Ok</a>
            </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function(){
            // alert('hello');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // $('#orderNow').click(function(){
            //     let shopString = localStorage.getItem('shops');
            //     if(shopString){
            //         //$.post(url,data,callback)
            //         $.post("{{route('orderNow')}}",{data:shopString},function(res){
            //             console.log(res);
            //         });
            //     };
            // });

            $('#paymentForm').on('submit',function(e){
                e.preventDefault();
                let shopString = localStorage.getItem('shops');
                let formData = new FormData(this);
                // console.log(shopString,formData);
                formData.append('orderItems',shopString);

                $.ajax({
                    type: 'POST',
                    url: "{{route('orderNow')}}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response){
                        console.log(response);
                        if(response){
                            $('#orderSuccessModal').modal('show');
                            localStorage.removeItem('shops');
                        }
                    }
                })
            });
        });
    </script>
@endsection