@extends('app')

@section('title','Hello city')


@section('content')
<img src="{{ asset('/images/laravelsn1.png') }}" alt="laravelsn">
       

<h1>Hello from Québec</h1>

        <p>It's currently {{ date('h:i A')}}.</p>

 @endsection
