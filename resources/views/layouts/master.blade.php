<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/ckeditor/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    	<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #fff;
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
            border: 1px solid black;
            margin: 10px
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

  <!-- <div class="container-fluid text-center">
 <br>
 {{! $banners=\Laravel\Banner::all()}}
 @foreach($banners as $i => $banner)
 <img src="img_banner/{{$banner->gambar_banner}}" class="mx-auto d-block pb-1" alt="banner"  height="100px" width="80%">
@endforeach
 </div> -->

  <nav class="navbar navbar-expand-sm navbar-dark sticky-top font-weight-bold" style="background-color:#3282B8">
      <div class="container">

      <a class="navbar-brand" href="/">BERANDA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto font-weight-bold">
          <li class="nav-item px-1">
            <a class="nav-link" href="/profile/home">PROFIL</a>
          </li>
          <li class="nav-item px-1">
            <a class="nav-link" href="/organisasi/home">ORGANISASI</a>
          </li>
          <li class="nav-item px-1">
            <a class="nav-link" href="/uks/home">UKS</a>
          </li>
          <li class="nav-item px-1">
            <a class="nav-link" href="/blog ">ARTIKEL</a>
          </li>
          <li class="nav-item px-1">
            <a class="nav-link" href="/kegiatan/home">KEGIATAN</a>
          </li>
          <li class="nav-item px-1">
            <a class="nav-link" href="/galeri/home">GALERI</a>
          </li>
        </ul>
        <!-- <form class="form-inline my-sm-0">
          <input class="form-control mr-sm-2" type="search" placeholder=". . . . ." aria-label="Search">
          <button class="btn btn-outline-light my-sm-0" type="submit">Search</button>
        </form> -->
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

<!-- <body>



    <div class="">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dar" style="">

            <a class="navbar-brand" href="/">BERANDA</a>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/profile/home">PROFIL </a> </li>
                <li class="nav-item">
                    <a class="nav-link" href="/organisasi/home">ORGANISASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/uks/home">UKS 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog">ARTIKEL</a>
                </li>




            </ul>

            <form class="form-inline my-sm-0" style="" >
              <input class="form-control mr-sm-2" type="search" placeholder=". . . . ." aria-label="Search">
              <button class="btn btn-outline-light my-sm-0" type="submit">Search</button>
            </form>



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
    </nav> -->






    @yield('content')


    <!-- Footer -->


    <!-- Copyright -->



    <!-- Copyright -->


    <!-- Footer -->


</body>


</html>
