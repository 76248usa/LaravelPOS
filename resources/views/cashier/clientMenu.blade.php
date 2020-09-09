@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row" id="table-detail"></div>




    <div class="row justified-content-center">


    <div class="col-md-6">
            <button class="btn btn-primary btn-block mb-4">Client Menus</button>


        <div class='col-md-12 mb-4' style="float:left;">


                <button class="btn btn-primary btn-block mb-4">
                    @if($table ?? '')
                <p>{{ $table->id }}</p>

                    <i class="fas fa-chair"></i>
                    <br>

                    <span class="badge badge-success mb-4">{{ $table->name }} Table Name</span>


                    <br>
                    @endif

                    @if($client ?? '')

                    <p><i class="fa fa-credit-card" aria-hidden="true">Total Price Payable: {{ $total }}</i></p>

                    @foreach($client->menus as $menu)

                    <div class="card mb-4">
                            <div class="card-body">
                                    <p style = "color: black;"> Name:  {{ $menu->name }} </p>

                                    <p><span class="badge badge-warning mb-4"> Menu Price:  {{ $menu->price }} </span> </p>
                            </div>
                          </div>

                    @endforeach
                    @endif



        </div>


    </div>


    </div>

</div>


@endsection







