@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('management.inc.sidebar')
        <div class="col-md-8">
            <i class="fas fa-hamburger"></i>Edit a Menu
            <hr>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="/management/menu/{{ $menu->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="menuName" >Menu Name</label>
                    <input type="text" name="name" value="{{ $menu->name }}" class="form-control" placeholder="Menu...">
                </div>
                <label for="menuPrice">Price</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="text" name="price" class="form-control" aria-label="Amount (to the nearest dollor)" value="{{ $menu->price }}">

                </div>


                <div class="form-group">
                    <label for="Description">Description</label>
                    <input type="text" name="description" class="form-control" placeholder="Description..." value="{{ $menu->description }}">
                </div>


                {!! Form::model($menu, ['method'=>'PATCH', 'action'=> ['Management\MenuController@update', $menu->id], 'files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('image', 'Photo:') !!}
                    {!! Form::file('image', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('category_id', 'Category:') !!}
                    {!! Form::select('category_id', [''=>'Choose Categories'] + $categories, null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Edit Menu', ['class'=>'btn btn-warning']) !!}
                </div>

                {!! Form::close() !!}




            </form>
        </div>
    </div>
</div>
@endsection
