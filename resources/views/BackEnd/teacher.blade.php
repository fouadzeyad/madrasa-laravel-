@extends('BackEnd.layouts.master')

@section('content')
    <!-- Main content -->
    <section class="content">
        @foreach($name as $_data)
            <p>{{$_data}}</p>
        @endforeach
    </section>
    <!-- /.content -->
@stop
