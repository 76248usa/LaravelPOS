@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row" id="table-detail"></div>




    <div class="row justified-content-center">


    <div class="col-md-6">
            <button class="btn btn-primary btn-block mb-4">Choose Client at Table</button>

            @if($table ?? '' ?? '' ?? '')
        <div class='col-md-12 mb-4' style="float:left;">


                <button class="btn btn-primary btn-block mb-4">
                <a href="cashier/createTableMenus/{{ $table->id }}">

                    <i class="fas fa-chair"></i>
                    <br>

                    <span class="badge badge-success mb-4">{{ $table->name }} Table Name</span>
                </a>

                @endif

                    <br>

                    @if($clients)
                    @foreach($clients as $client)

                    <a href="/cashier/createClientMenus/{{ $client->id }}"><span class="badge badge-warning mb-4"> <i class="fa fa-female" aria-hidden="true"></i> {{ $client->name }} Client Name</span></a>
                    @endforeach
                    @endif



                </button>

        </div>


    </div>


    </div>

</div>


@endsection







