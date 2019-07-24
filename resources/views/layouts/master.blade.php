    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
        <style>
        .foot{
          background-color: #222b38;
          color: white;
          height: 50px;

          bottom: -100;
          position: relative;
          width: 100%;
        }
        .imgtrans{
          opacity: 1.4;

        }
        </style>

      </head>


<body class="">



  <nav class="navbar fixed-top navbar-expand-lg navbar-dark py-2 " style="background-color : #0e74c0">
    <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center " id="navbarNavAltMarkup">
      <div class="navbar-nav  font-weight-bold ">
        <a class="nav-item nav-link px-3" href="#profil">PROFIL <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link px-3" href="#organisasi" rel="page-scroll">ORGANISASI</a>
        <a class="nav-item nav-link px-3" href="#uks" rel="page-scroll">U K S</a>
        <a class="nav-item nav-link px-3" href="#dakwah" rel="page-scroll">DAKWAH</a>
        <a class="nav-item nav-link px-3" href="#kegiatan">KEGIATAN</a>
        <a class="nav-item nav-link px-3" href="#galeri">GALERI</a>

      </div>
    </div>
</div>
</nav>

        <br>

   @yield('content')
        <br>


        <footer class="foot">
          <div class="container">

            <div class="row pt-3">
              <div class="col text-center">
                <p>&copy Pesantren Mahasiswa Universal 2019.</p>
              </div>
            </div>
          </div>
        </footer>


        </body>


    </html>
