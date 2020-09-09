@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="list-group">
                <a href="/maganement/category" class="list-group-item list-group-item-action"><i class="fas fa-align-justify"></i> Category</a>
                <a class="list-group-item list-group-item-action"><i class="fas fa-pizza-slice"></i> Menu</a>
                <a class="list-group-item list-group-item-action"><i class="fas fa-chair"></i> Table</a>
                <a class="list-group-item list-group-item-action"><i class="far fa-user"></i> User</a>
            </div>
        </div>

        <div class="col-md-8"><i class="fas fa-align-justify"></i> Edit Client

            <hr>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>

            @endif
            <form action="/management/client/{{$client->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="clientName">Client Name </label>
                    <input type="text" name="name" value="{{$client->name}}" class="forn-control" placeholder="Client...">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
