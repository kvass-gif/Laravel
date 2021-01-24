@extends('layouts.app')

@section('title-block')Оновлення записів@endsection

@section('content')
    <h1>Сторінка оновлення</h1>



    <form action="{{route('contact-update-submit', $data->id)}}" method = "post">
    @csrf
    <div class = "form-group">
    <label for="name">Введіть ім'я</label>
    <input type="text" name = "name" value = "{{$data->name}}" placeholder="name" class = "form-control">
    </div>


    <div class = "form-group">
    <label for="email">Введіть email</label>
    <input type="text" name = "email" value = "{{$data->email}}" placeholder="email" class = "form-control">
    </div>
    <div class = "form-group">
    <label for="subject">Введіть тему повідомлення</label>
    <input type="text" name = "subject" value = "{{$data->subject}}" placeholder="subject" class = "form-control">
    </div>

    <div class = "form-group">
    <label for="massege">Повідомлення</label>
    <textarea type="text" name = "message" id="message" class = "form-control"
    placeholder="Введіть повідомлення">{{$data->message}}</textarea>
    </div>

    <button type = "submit" class = "btn btn-success">Оновити</button>

    </form>
@endsection
