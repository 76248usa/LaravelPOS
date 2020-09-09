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
                                {!! Form::label('client_id1', 'client 1 Menu:') !!}
                                {!! Form::select('client_id1', [''=>'Client 1 Menu:'] + $menus, null, ['class'=>'form-control'])!!}
                                {!! Form::select('client_id1', [''=>'Client 1 Menu:'] + $menus, null, ['class'=>'form-control'])!!}
                            </div>

                            <div class="form-group">
                                    {!! Form::label('client_id2', 'Client 2 Menu:') !!}
                                    {!! Form::select('client_id2', [''=>'Client 2 Menu:'] + $menus, null, ['class'=>'form-control'])!!}

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



