    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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



    <nav class="navbar navbar-expand-lg " style="background-color: #d8f2b6">
      <div class="container">


      <a class="navbar-brand" href="/">
        <img src="/img/logoPPMU.png" alt="Logo" style="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="btn btn-outline-light text-dark" style="color: white" href="/">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-light text-dark" style="color: black" href="#">SEJARAH BERDIRI</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-light text-dark" style="color: black" href="#">PROFIL</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-light text-dark" style="color: black" href="#">ORAGANISASI</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-light text-dark" style="color: black" href="#">UKS</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-light text-dark" style="color: black" href="#">LITERATUR</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-light text-dark" style="color: black" href="#">KAJIAN</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-light text-dark" style="color: black " href="#">MUSLIM CENTER</a>
          </li>
        </ul>
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
