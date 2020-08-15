@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row text-center">
                        <div class="col-4">
                            <a href="/management">
                            <h4>Management</h4>
                            <img width = "50px" src="{{ asset('images/aggregate.png') }}">
                        </a>
                        </div>
                        <div class="col-4">
                                <a href="/cashier">
                            <h4>Casier</h4>
                            <img width = "50px" src="{{ asset('images/cashier.png') }}">
                                </a>
                        </div>
                        <div class="col-4">
                                <a href="/reports">
                            <h4>Reports</h4>
                            <img width = "50px" src="{{ asset('images/result.png') }}">
                                </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
