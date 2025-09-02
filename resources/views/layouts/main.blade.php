@extends('layouts.default')

@section('header')
    <html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div id="main_header" class="main_color beige_text">
        <div class="Author_name hide_from_mobile">S.F. Cadmean</div>
        <div>
            <ul class="main_menu">
                <li><a class="" href='/'>Home</a></li>
                <li><a class="" href='/home'>Books</a></li>
                <li><a class="" href='/home'>Bong</a></li>
                <li><a class="" href='/home'>About</a></li>
                <li><a class="" href='/home'>Contact</a></li>
            </ul>
        </div>
    </div>
    <div class='main_content'>
@endsection

@section('footer')
    </div>
    <footer>
    <div id="main_footer" class="main_color beige_text">
            <div class="footer_menu">
                <a href='/'>Home</a> |
                <a href='/home'>Books</a> |
                <a href='/home'>Blong</a> |
                <a href='/home'>About</a> |
                <a href='/home'>Contact</a> |
                <a href='/home'>Social Media</a>
            </div>
    </div>
    </footer>
    </body>
    </html>
@endsection
