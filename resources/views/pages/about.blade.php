@extends('app')


@section('title',' About Us |' . config('app.name'))

    

@section('content')
        <p>Built with &hearts;by Asta.</p>

        <p><a href="{{ route('home') }}">Revenir vers la page d'accueil</a></p>
      
@endsection