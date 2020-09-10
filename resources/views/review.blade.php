@extends('layout')

@section('title')Добавление@endsection

@section('content_home')
    <h1>Добавить задание</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif    

    <form action="/review/check" method="POST" class="mb-4">
        @csrf
        <textarea name="message" id="message" class="form-control" placeholder="Задание" style="resize: none"></textarea><br>
        <button type="submit" class="btn btn-success">Добавить</button>
    </form>
    
@endsection