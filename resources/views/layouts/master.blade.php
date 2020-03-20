
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <title>@yield('title')</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>

  * {
  box-sizing: border-box;
}

body{
	background-color:#fff;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
  border:1px solid black;
  margin:10px
}

/* Clearfix (clear floats) */
/* .row::after {
  content: "";
  clear: both;
  display: table;
} */
  </style>

</head>

<body class="data-spy=" scroll" data-target=".navbar" data-offset="50"">
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top font-weight-bold" style="background:#3282B8">
      <div class="container">
      <a class="navbar-brand" href="/">BERANDA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto font-weight-bold">
          <li class="nav-item">
            <a class="nav-link" href="/profile/home">PROFIL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/organisasi/home">ORGANISASI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/uks/home">UKS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/blog ">ARTIKEL</a>
          </li>

        </ul>
        <form class="form-inline my-sm-0">
          <input class="form-control mr-sm-2" type="search" placeholder=". . . . ." aria-label="Search">
          <button class="btn btn-outline-light my-sm-0" type="submit">Search</button>
        </form>
      </div>

      @if(Auth::user())
      <form class="nav-item" action="/logout" method="post" style="padding-top:9px">
        @csrf
        <div class="row float-right">
          <div class="col-md-4">

          </div>
          <div class="col-md-4">
            <button type="submit" name="button">Logout</button>
          </div>
        </div>

      </form>
      @endif
      </div>
  </nav>






  @yield('content')


  <!-- Footer -->


    <!-- Copyright -->



    <!-- Copyright -->


  <!-- Footer -->

  <!-- <section id="footer" class="footer">
    <div class="jumbotron-fluid bg-primary text-light" >
      <div class="container text-center">
        <div class="footer-copyright text-center py-1">© 2019 Copyright :
          <a > PPMU </a>
        </div>
      </div>
    </div>
  </section> -->
</body>


</html>
