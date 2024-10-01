@extends('layouts.app')

@section('content')

<div class="container d-flex flex-column">

<h4>Modifica del Post: {{ $post->title }}</h4>

    <div class="d-flex flex-column">
        <form action="{{ route('admin.posts.update' ,$post->id)}}" method="POST">
            
            @csrf
            @method('PUT')

            <label for="id">id</label>
            <input type="text" name="id" id="id" value="{{$post->id}}">

            <br>

            <label for="title">Titolo</label>
            <input type="text" name="title" title="title" value="{{$post->title}}">

            <br>

            <label for="text">Testo</label>
            <input type="text" name="text" text="text" value="{{$post->text}}">

            <br>

            <label for="reading_time">Tempo di lettura</label>
            <input type="text" name="reading_time" reading_time="reading_time" value="{{$post->reading_time}}">

            <br>

            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option value="disable">Seleziona una categoria</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}" @if ($post->category->id == $category->id) selected @endif>{{$category->name}}</option>
                @endforeach
            </select>

            <br>

            <h5>Tecnologie:</h5>
            @foreach ($technologies as $technology)
            <div class="input-group-text">
                <input id="technology-{{$technology->id}}" class="form-check-input mt-0" type="checkbox" value="{{$technology->id}}" aria-label="Checkbox for following text input">
                <label class="form-check-label" for="technology-{{$technology->id}}" value="{{$technology->id}}" @if ($post->technology->id == $technology->id) selected @endif>
                    {{$technology->name}}
                </label>
              </div>
            @endforeach
            
            <button type="submit" class="btn btn-primary">Aggiorna</button>
        </form>

    </div>

</div>



    
@endsection