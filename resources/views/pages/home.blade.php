@extends('app')

@section('title','Hello city')


@section('content')
<img src="{{ asset('/images/laravelsn1.png') }}" alt="laravelsn" class="mt-12 rounded shadow-md h-32">
       

<h1 class="text-3xl font-semibold text-indigo-600">Hello from Québec</h1>

<p class="text-lg text-gray-800" >It's currently {{ date('h:i A')}}.</p>

 @endsection
