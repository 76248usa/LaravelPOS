@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" id="table-detail"></div>
    <div class="row justified-content-center">


    <div class="col-md-6">
            <button class="btn btn-primary btn-block mb-4">View Your Table</button>


        <div class='col-md-3 mb-4' style="float:left;">


                <button class="btn btn-primary btn-block">
                <a href="cashier/createTableMenus/{{ $table->id }}">

                    <i class="fas fa-chair"></i>
                    <br>

                    <span class="badge badge-success">{{ $table->name }}</span>
                </a>
                </button>

        </div>

    </div>

        <div class="col-md-6">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    @if($table ?? '')
                    @foreach($table->menus as $menu)
                    <p   class="nav-items nav-link">
                        {{ $menu->name }}<br>
                        {{ $menu->price }}
                    </p>

                    @endforeach


                    @endif
                </div>
            </nav>
            <div id="list-menu" class="row mt-2"></div>

            </div>
    </div>
</div>

<script>


</script>

@endsection



