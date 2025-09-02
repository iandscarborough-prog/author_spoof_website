@extends('layouts.default')

@section('header')
    <html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="/javascript/main.js"></script>
    </head>
    <body>
    <div id="main_header" class="main_color beige_text">
        <div class="Author_name hide_from_mobile">S.F. Cadmean</div>
        <div>
            <ul class="main_menu">
                <li id="home_link"><a href='/'>Home</a></li>
                <li id="books_link"><a href='/books'>Books</a></li>
                <li id="blog_link"><a href='/blog'>Blog</a></li>
                <li id="about_link"><a href='/about'>About</a></li>
                <li id="contact_link"><a href='/contact'>Contact</a></li>
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
                <a href='/books'>Books</a> |
                <a href='/blog'>Blog</a> |
                <a href='/about'>About</a> |
                <a href='/contact'>Contact</a>
            </div>
    </div>
    </footer>
    </body>
    </html>
@endsection
