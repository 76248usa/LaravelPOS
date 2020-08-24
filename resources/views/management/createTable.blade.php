@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="list-group">
                <a href="/management/category" class="list-group-item list-group-item-action"><i class="fas fa-align-justify"></i> Category</a>
                <a class="list-group-item list-group-item-action"><i class="fas fa-pizza-slice"></i> Menu</a>
                <a class="list-group-item list-group-item-action"><i class="fas fa-chair"></i> Table</a>
                <a class="list-group-item list-group-item-action"><i class="far fa-user"></i> User</a>
            </div>
        </div>

        <div class="col-md-8"><i class="fas fa-chair"></i> Create a Table

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
        <form action="/management/table" method="POST">
            @csrf
            <div class="form-group">
                <label for="tableName">Table Name </label>
                <input type="text" name="name" class="forn-control" placeholder="Table...">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
</div>

@endsection
