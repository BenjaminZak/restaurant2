<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    @yield('extra-meta')
    <title>Comme Chez Vous !</title>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('extra-script')

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

      <!-- Ecommerce App CSS -->
      <link href="{{asset('css/ecommerce.css')}}" rel="stylesheet">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicons -->
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">
  </head>
  <body>
      <div id="app">
        <div class="container">
          <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
              <div class="col-4 pt-1">
                <a class="text-muted" href="{{ route('cart.index') }}">Panier <span class="badge badge-pill badge-info">{{ Cart::count() }}</span></a>
              </div>
              <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="{{ route('products.index')}}">Comme Chez Vous !</a>
              </div>
              <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="#" aria-label="Search">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                </a>
                @include('partials.auth')
              </div>
            </div>
          </header>

          <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
              <a class="p-2 text-muted" href="#">World</a>
              <a class="p-2 text-muted" href="#">U.S.</a>
              <a class="p-2 text-muted" href="#">Technology</a>
              <a class="p-2 text-muted" href="#">Design</a>
              <a class="p-2 text-muted" href="#">Culture</a>
              <a class="p-2 text-muted" href="#">Business</a>
              <a class="p-2 text-muted" href="#">Politics</a>
              <a class="p-2 text-muted" href="#">Opinion</a>
              <a class="p-2 text-muted" href="#">Science</a>
              <a class="p-2 text-muted" href="#">Health</a>
              <a class="p-2 text-muted" href="#">Style</a>
              <a class="p-2 text-muted" href="#">Travel</a>
            </nav>
          </div>

          @if (session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif

        <!-- <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
        </div> -->

          <div class="row mb-2">
              @yield('content')
          </div>
        </div>
      </div>
<footer class="blog-footer">
  <p>ZAK Benjamin<a href="https://github.com/BenjaminZak"> Mon Github</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
@yield('extra-js')
</body>
</html>
