@extends('layout')

@section('title')Задания @endsection

@section('content_home')
    <h1 class="text-center">Все задания</h1>
    <div class="row">
        @foreach($reviews as $el)
        <div class="col-md-10 mt-2">        
            <div class="alert alert-warning">
            <h3>{{ $el->message }}</h3>
            <b>{{ $el->created_at }}</b>
            
            </div>          
        </div>
        <div class="col-md-2 d-flex  align-items-center ">
        <a class="btn btn-danger" href="{{ route('delete', $el->id) }}">Удалить</a>
        </div>
        @endforeach
    </div>
@endsection