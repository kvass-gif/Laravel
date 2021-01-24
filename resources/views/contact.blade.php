@extends('layouts.app')

@section('title-block')Сторінка контактів@endsection

@section('content')
    <h1>Сторінка контактів</h1>



    <form action="{{route('contact-form')}}" method = "post">
    @csrf
    <div class = "form-group">
    <label for="name">Введіть ім'я</label>
    <input type="text" name = "name" placeholder="name" class = "form-control">
    </div>


    <div class = "form-group">
    <label for="name">Введіть email</label>
    <input type="text" name = "email" placeholder="email" class = "form-control">
    </div>
    <div class = "form-group">
    <label for="subject">Введіть тему повідомлення</label>
    <input type="text" name = "subject" placeholder="subject" class = "form-control">
    </div>

    <div class = "form-group">
    <label for="massege">Повідомлення</label>
    <textarea type="text" name = "message" id="message" class = "form-control"
    placeholder="Введіть повідомлення"></textarea>
    </div>

    <button type = "submit" class = "btn btn-success">Відправити</button>

    </form>
@endsection
