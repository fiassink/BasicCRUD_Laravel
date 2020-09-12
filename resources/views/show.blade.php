@extends("templates.template")

@section("content")
<h1 class="text-center">Visualizar</h1>

<div class="col-8 m-auto"> 
@php
      $user=$book->find( $book->id)->relUsers;
@endphp

Título: {{$book->title}}<br>
Páginas: {{$book->pages}}<br>
Preços: R${{$book->price}}<br>
Autor: {{$user->name}}<br>
E=mail: {{$user->email}}<br>

</div>
@endsection