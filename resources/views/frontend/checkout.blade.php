@extends('layouts.frontend')
@section('content')

    <section class="py-5">
        <h3 class="text-center py-5">My Shopping Card</h3>
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
    </section>

@endsection