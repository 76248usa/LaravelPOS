@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row" id="table-detail"></div>




    <div class="row justified-content-center">


    <div class="col-md-6">
            <button class="btn btn-primary btn-block mb-4">Add Menus to Tables</button>

            @foreach($tables ?? '' as $table)
        <div class='col-md-2 mb-4' style="float:left;">


                <button class="btn btn-primary btn-block">
                <a href="cashier/createTableMenus/{{ $table->id }}">

                    <i class="fas fa-chair"></i>
                    <br>

                    <span class="badge badge-success">{{ $table->name }}</span>
                </a>
                </button>

        </div>
        @endforeach
    </div>

        <div class="col-md-6">

            <div id="list-menu" class="row mt-2"></div>

            </div>
    </div>


    <div class="row justified-content-center">


            <div class="col-md-6">
                    <button class="btn btn-primary btn-block mb-4">Choose Your Table Status</button>

                    @foreach($tables ?? '' as $table)
                <div class='col-md-2 mb-4' style="float:left;">


                        <button class="btn btn-primary btn-block">
                        <a href="cashier/singleTable/{{ $table->id }}">

                            <i class="fas fa-chair"></i>
                            <br>

                            <span class="badge badge-success">{{ $table->name }}</span>
                        </a>
                        </button>

                </div>
                @endforeach
            </div>

                <div class="col-md-6">

                    <div id="list-menu" class="row mt-2"></div>

                    </div>
            </div>









</div>



<script>


</script>

@endsection



