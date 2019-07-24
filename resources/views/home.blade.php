@extends('layouts.master')

<style>
  body {
     background: url('background.jpg');
     background-size: cover;
     background-attachment: fixed;
     background-repeat: no-repeat;
  }

    section {
      min-height: 420px;
    }

    #satu {
      position: absolute;
      left: 0px;
      top: 0px;
      z-index: -1;
    }

    #imgop {
      opacity: 0.6;
      filter: alpha(opacity=20);
      /* For IE8 and earlier */
    }


  </style>

@section('title', 'universal | Home')

@section('content')

<!-- JUMBOTRON -->
<section id="home"  class="home">
<div class="jumbotron text-center bg-transparent">
  <div class="container">
    <img src="img/logoPPMU.png" width="25%" class="rounded-circle img-thumbnail mb-4">
    <h3 class="display-5 font-weight-bold">Pondok Pesanten Mahasiswa Universal</h3>
    <p class="lead ">Jl. Desa Cipadung No.01, RT.03/RW.08, Cipadung, Cibiru, Kota Bandung, Jawa Barat 40614</p>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Hubungi kami
    </button>
      <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <ul class="list-inline social-buttons text-center mt-1">
              <li class="list-inline-item">
                <a href="https://www.facebook.com" target="_blank">
                  <i class="fab fa-facebook-f fa-1x"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com" target="_blank">
                  <i class="fab fa-instagram fa-lg"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.twitter.com" target="_blank">
                  <i class="fab fa-twitter fa-1x"></i>
                </a>
              </li>
            </ul>
          </div>
      </div>
  </div>
</div>
</section>
<!-- JUMBOTRON -->

<!-- BERITA -->
<section id="berita" class="berita">
  <div class="container pb-5" id="berita" class="berita">
    <div class="row">
      <div class="col">
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner justify-content-center">
                @foreach($artikels as $i => $artikel)
                <div class="carousel-item @if($i == 0) {{ 'active' }} @endif justify-content-center">
                  <img src="img_artikel/{{$artikel->gambar_artikel}}" class="d-block pb-5" width="100%" alt="Responsive imag">
                  <h5 style="text-align:center">{{$artikel->nama_artikel}}</h5>
                </div>
              @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="row">
          <div class="col">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- END BERITA -->


<!-- PROFIL -->
<section id="profil" class="profil">
    <div class="container" id="profil">
      <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="row text-center mx-0">
          <div class="col">
            <div class="card-header-group bg-transparent" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#sejarah" aria-expanded="true" aria-controls="sejarah">
                  SEJARAH
                </button>
              </h2>
            </div>
          </div>
          <div class="col">
            <div class="card-header-group bg-transparent" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#visimisi" aria-expanded="false" aria-controls="visimisi">
                  Visi Misi
                </button>
              </h2>
            </div>
          </div>
          <div class="col">
            <div class="card-header-group bg-transparent" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#dasarhukum" aria-expanded="false" aria-controls="dasarhukum">
                  Dasar Hukum
                </button>
              </h2>
            </div>
          </div>
        </div>
      </div>

        <div class="card">
          <div id="sejarah" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body text-justify">
        Salah satu strategi perubahan masyarakat  yang diakui keandalannya adalah normative-reeducative strategy, yaitu strategi perubahan masyarakat  melalui pelembagaan ‘nilai dan norma’ dalam kehidupan masyarakat. Norma dan nilai tersebut termasyarakatkan melalui pendidikan (education-reeducation). Proses pendidikan yang baik dan sistematis akan  melahirkan perubahan paradigma berpikir masyarakat, yang pada gilirannya akan mempercepat proses perubahan masyarakat.  Pertumbuhan suatu masyarakat dimulai dari produktivitas individu, dan produktivitas individu diperoleh melalui pendidikan lewat efeknya pada peningkatan kemampuan manusia dan motivasi manusia untuk berprestasi.
        Tentu saja, norma, nilai, serta proses pendidikan  yang harus dikembangkan bukan semata-mata yang bersifat antroposentris (yang berorientasi pada pemenuhan kebutuhan fisik duniawi), tetapi juga harus secara seimbang mengembangkan nilai, norma, dan proses pendidikan teosentris (aspek moral, spiritual, ketuhanan). Berbagai penelitian tentang pengembangan Sumber Daya manusia menunjukkan bahwa hard skill (kemampuan intelektual, kecakapan teknis) menyumbang 15% saja bagi kesuksesan hidup seseorang. Sisanya, 85 % ditentukan oleh soft skill (akhlak, kepribadian, etos kerja, kejujuran dan sebagainya) yang antara lain dihasilkan oleh pendidikan berkarakter teosentris.
        Sejarah pendidikan Islam Indonesia telah mencatat bahwa pondok pesantren yang dikelola secara serius dan ikhlas, mempunyai keunggulan tersendiri, terutama pada sisi tradisi keilmuan dan transmisi-internalisasi nilai-nilai dan norma. Karena ia senantiasa menebarkan dan menyuarakan tata nilai dan norma-norma agama. Pola kehidupan sosial, budaya, dan keagamaan masyarakat di lingkungan pondok pesantren, umumnya memiliki dasar-dasar nilai, norma, dan tradisi keagamaan yang kuat serta membentuk pola hubungan fungsional-produktif di antara keduanya.<p>
        </p>
        Salah satu misi utama penyelenggaraan Pondok Pesantren sejak awal berdirinya adalah melakukan kegiatan kaderisasi keulamaan dalam tradisi keilmuan yang berorientasi tafaqquh fi al-din sebagai wujud kesadaran kolektif masyarakat (Islam) dalam menghadapi perubahan zaman. Karenanya Pondok Pesantren tumbuh dan berkembang selaras dengan cita agama yang akan segera hilang manakala motif dan corak keagamaan masyarakat juga hilang.
        Belakangan ini, Pondok Pesantren menyimpan banyak persoalan yang menjadikannya tertatih-tatih dalam menapaki perjalanan sejarahnya. Rasanya belum pernah Pondok Pesantren  menghadapi tantangan berat seperti sekarang. Tidak sedikit Pondok Pesantren yang hampir kehilangan modal sosial dan kulturalnya. Di tengah ketertatihannya itu, akhir-akhir ini Pondok Pesantren juga disergap oleh stigma negatif pasca rangkaian teror bom dan isu propaganda ‘Islam radikal’ yang terjadi di Indonesia.
        Padahal, pada dekade 1970-an hingga 1980-an, ketika Lembaga Swadaya Masyarakat (LSM) menjadi mainstream gerakan pemberdayaan masyarakat, Pondok Pesantren dipastikan terlibat sebagai mitra strategis dalam pembangunan masyarakat (community development). Pondok Pesantren terbukti mampu merekam sekaligus mengangkat derajat kehidupan masyarakat sekitarnya.
        Pondok Pesantren sudah selayaknya merevitalisasi kembali peran strategisnya sebagaimana pernah dilakukan pada era 70-an dan 80-an. Lebih dari sekedar itu, kini Pondok Pesantren dituntut untuk terlibat secara aktif dalam kegiatan advokasi untuk mendorong perubahan nilai dan orientasi pembangunan, termasuk dituntut mampu mengajukan konsep-konsep pembangunan alternatif.

        Berdasarkan latar belakang tersebut, dengan senantiasa memohon Bimbingan dan Pertolongan ALLAH Subhanahu Wata’ala serta mohon dukungan dari masyarakat, YAYASAN Suwargi Buwana Djati bercita-cita menjadi bagian dari upaya revitalisasi fungsi dan peran strategis Pondok Pesantren dengan membangun education based community, sebuah konsep pendidikan yang paralel dengan Pondok Pesantren sebagai community college, yakni sistem pendidikan transformatif-emansipatoris berbasis empati, toleransi, semangat perubahan dan pemberdayaan yang berorientasi mewujudkan Kemashlahatan Universal.
            </div>
          </div>
        </div>
        <div class="card">
          <div id="visimisi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div id="dasarhukum" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              •	Akta Notaris Pendirian Yayasan Nomor  25 Tanggal 08-09-2010
              •	Akta Notaris Pendirian Cabang Yayasan Nomor  09 Tanggal 10-04-2011
              •	S.K. MENKUMHAM R I Nomor AHU-4556.AH.01.04 Tahun 2010
              •	NPWP  No. 31.229.254.3-426.000
              •	Undang-Undang Dasar 1945 dan Perubahannya
              •	Undang-Undang Nomor 20 Tahun 2003 Tentang Sistem Pendidikan Nasional
              •	Peraturan Pemerintah Nomor 73 Tahun 1991 Tentang Pendidikan Luar Sekolah
              •	Peraturan Pemerintah Nomor 39 Tahun 1992 Tentang Peran serta Masyarakat dalam Pendidikan Nasional
              •	Peraturan Pemerintah Nomor 19 Tahun 2005  Tentang Standar Nasional Pendidikan
              •	Peraturan Pemerintah Nomor 55 Tahun 2007  Tentang Pendidikan Agama dan Pendidikan Keagamaan
            </div>
          </div>


      </div>
      <div class="card">
        <div class="row text-center mx-0 ">
          <div class="col">
            <div class="card-header-group bg-transparent" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#kurikulum" aria-expanded="false" aria-controls="kurikulum">
                  Kurikulum
                </button>
              </h2>
            </div>
          </div>
          <div class="col">
            <div class="card-header-group bg-transparent" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#kbm" aria-expanded="false" aria-controls="kbm">
                  K B M
                </button>
              </h2>
            </div>
          </div>
          <div class="col">
            <div class="card-header-group bg-transparent" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#sistempenilaian" aria-expanded="false" aria-controls="sistempenilaian">
                  Sistem Penilaian
                </button>
              </h2>
            </div>
          </div>
        </div>
      </div>
        <div class="card">
          <div id="kurikulum" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div id="kbm" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div id="sistempenilaian" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>

      <div class="card">
        <div class="row text-center mx-0">
          <div class="col">
            <div class="card-header-group bg-transparent" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#kompetensi" aria-expanded="false" aria-controls="kompetensi">
                  KOMPETENSI
                </button>
              </h2>
            </div>
          </div>
          <div class="col">
            <div class="card-header-group bg-transparent" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#tradisipesantren" aria-expanded="false" aria-controls="tradisipesantren">
                  TRADISI PESANTREN
                </button>
              </h2>
            </div>
          </div>
          <div class="col">
            <div class="card-header-group bg-transparent" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#fasilitas" aria-expanded="false" aria-controls="fasilitas">
                  FASILITAS
                </button>
              </h2>
            </div>
          </div>
        </div>
      </div>
        <div class="card">
          <div id="kompetensi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div id="tradisipesantren" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div id="fasilitas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>

    </div>
    </div>
</section>

<!-- END PROFIL -->

<!-- ORGANISASI $ UKS -->
<section id="organisasi" class="organisasi" >
  <div class="container">
  <div id="organisasi" class="organisasi">
    <div class="row">
      <div class="col">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" width="20%">
            <div class="carousel-item active">
                <img src="img/Slider/Slider1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/Slider/Slider2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/Slider/Slider3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" width="20%">
            <div class="carousel-item active">
                <img src="img/Slider/Slider1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/Slider/Slider2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/Slider/Slider3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
</section>







<!-- SECTION 2 -->




@endsection
