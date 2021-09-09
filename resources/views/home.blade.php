<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>hello city</title>

       
    </head>
    <body >
        <h1>Hello from Québec</h1>

        <p>It's currently {{ date('h:i A')}}.</p>

        <footer> 
         <p>&copy; Copyright 2021 &middot;<a href ="#">About us</a></p>   
    </footer>
    </body>
</html>
