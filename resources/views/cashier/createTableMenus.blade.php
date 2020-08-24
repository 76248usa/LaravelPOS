@extends('layouts.app')


@section('content')

    <div class="row justified-content-center">


    </div>

            <div class="row">
                <div class="col-md-3">
                </div>
                    <div class="col-md-6">
                            <h3>Create Table {{ $id ?? '' ?? '' ?? '' }}</h3>

                    {!! Form::open(['method'=>'POST', 'action'=> ['Cashier\CashierController@storeMenuTable', $id], 'files'=>true]) !!}

                     <div class="form-group">
                           {!! Form::label('menu_id', 'Choose Menu:') !!}
                           {!! Form::select('menu_id', [''=>'Choose Menu:'] + $menus, null, ['class'=>'form-control'])!!}
                       </div>



                       <div class="form-group">
                            {!! Form::label('menu_id2', 'Choose Menu 2:') !!}
                            {!! Form::select('menu_id2', [''=>'Choose Menu 2:'] + $menus, null, ['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                           {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
                        </div>

                      {!! Form::close() !!}
                    </div>
                    <div class="col-md-3">
                        </div>

               </div>



@stop



