@extends('layouts.app')


@section('content')

<div class="row justified-content-center">


</div>

<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <h3>Create Client Menu </h3>
        <p></p>

        <form action="/cashier/storeClientMenus/{{ $client->id }} " method="POST">
            @csrf
            @method('POST')



        <div class="form-group">
            {!! Form::label('menu_id', 'Client Menu:') !!}

            {!! Form::select('menu_id1', [''=>'Client 1 Menu 1:'] + $menus ?? '', null, ['class'=>'form-control'])!!}

            {!! Form::select('menu_id2', [''=>'Client 1 Menu 2:'] + $menus ?? '', null, ['class'=>'form-control'])!!}

            {!! Form::select('menu_id3', [''=>'Client 1 Menu 3:'] + $menus ?? '', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Client Menus', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
    <div class="col-md-3">
    </div>

</div>



@stop
