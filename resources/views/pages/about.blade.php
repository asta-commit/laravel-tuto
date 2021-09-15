@extends('app')


@section('title',' About Us |' . config('app.name'))

    

@section('content')

<img src="{{ asset('/images/imagelaravel.jpg')}}" alt="imagelaravel" class="my-12 rounded-full ">

<h2 class="mb-5 text-gray-700">
    Built with <span class="text-pink-500">&hearts;</span>by Asta.
</h2>

<p>
    <a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir vers la page d'accueil</a>
</p>
      
@endsection