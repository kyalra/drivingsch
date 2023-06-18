@extends('layout.master')

@section('content')
 <!-- Carousel Start -->
 <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('assets/img/mengemudi.jpg')}}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-light mb-5 animated slideInDown">Belajar Mengemudi hanya di Risk Driving SCH</h1>
                                <a href="#paket" class="btn btn-primary py-sm-3 px-sm-5">Harga Paket</a>
                                <a href="#jenis" class="btn btn-light py-sm-3 px-sm-5 ms-3">Jenis Mobil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('assets/img/mengemudi2.jpg')}}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-light mb-5 animated slideInDown">Belajar Mengemudi hanya di Risk Driving SCH</h1>
                                <a href=#paket" class="btn btn-primary py-sm-3 px-sm-5">Harga Paket</a>
                                <a href="#jenis" class="btn btn-light py-sm-3 px-sm-5 ms-3">Jenis Mobil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('assets/img/mengemudi3.jpg')}}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-light mb-5 animated slideInDown">Belajar Mengemudi hanya di Risk Driving SCH</h1>
                                <a href="#paket" class="btn btn-primary py-sm-3 px-sm-5">Harga Paket</a>
                                <a href="#jenis" class="btn btn-light py-sm-3 px-sm-5 ms-3">Jenis Mobil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

 <!-- Courses Start -->
 <div id="paket" class="container-xxl courses my-6 py-6 pb-0">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase mb-2">Paket Belakar Mengemudi</h6>
            <h1 class="display-6 mb-4">Pilih Paket Sesuai keinginanmu</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">100k</div>
                        <h5 class="mb-3">Sekali Pertemuan</h5>
                        <p>Belajar mengendarai mobil selama 2 jam sudah termasuk traner</p>
                        <p>Jadwal</p>

                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>1 Kali Pertemuan</li>
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>2 Jam</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">500k</div>
                        <h5 class="mb-3">Seminggu</h5>
                        <p>Belajar mengendarai mobil selama 2 jam sudah termasuk traner setiap pertemuan</p>
                        <p>Jadwal</p>
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>7 Kali Pertemuan</li>
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>2 Jam</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$99</div>
                        <h5 class="mb-3">Instant</h5>
                        <p>Belajar mengendarai mobil selama 5 jam sudah termasuk traner</p>
                        <p>Jadwal</p>
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>1 Kali Pertemuan</li>
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>5 Jam</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div id="daftar" class="col-lg-8 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary text-center p-5">
                    <h1 class="mb-4">Daftar</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="gname" placeholder="Gurdian Name">
                                    <label for="gname">Nama</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="gmail" placeholder="Gurdian Email">
                                    <label for="gmail">Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="cname" placeholder="Child Name">
                                    <label for="cname">Type Paket</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="cage" placeholder="Child Age">
                                    <label for="cage">Jenis Mobil</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses End -->

<!-- Team Start -->
<div id="jenis" class="container-xxl py-6">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase mb-2">Jenis-Jenis Mobil</h6>
            <h1 class="display-6 mb-4">matik dan manual</h1>
        </div>
        <div class="row g-0 team-items">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('assets/img/brio.jpg')}}" alt="">
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="mt-2">Brio</h5>
                        <span>Matic</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('assets/img/raize.jpg')}}" alt="">
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="mt-2">Raize</h5>
                        <span>Matic</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('assets/img/inova.jpg')}}" alt="">
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="mt-2">Inova</h5>
                        <span>Manual</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Team Start -->
<div id="trainer" class="container-xxl py-6">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase mb-2">Trainer</h6>
            <h1 class="display-6 mb-4">Berikut trainer profesional kami</h1>
        </div>
        <div class="row g-0 team-items">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('assets/img/team-4.jpg')}}" alt="">
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="mt-2">Rizky</h5>
                        <span>traine Matic</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('assets/img/team-3.jpg')}}" alt="">
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="mt-2">Al</h5>
                        <span>traine Matic</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('assets/img/team-2.jpg')}}" alt="">
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="mt-2">Saput</h5>
                        <span>traine Manual</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('assets/img/team-1.jpg')}}" alt="">
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="mt-2">Pupu</h5>
                        <span>Traine Matik</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection