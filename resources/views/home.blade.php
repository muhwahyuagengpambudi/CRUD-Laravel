@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
          <div class="row justify-content-center mb-5">
            <div class="text-center mb-5">
              <h1>My Book</h1>
              <h2>cheapest and best selling books</h2>
            </div>
          </div>
    
          <div class="row icon-boxes mt-5 mb-5">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 " data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="ri-stack-line"></i></div>
                <h4 class="title" style="color: #2487ce">Novel</h4>
                <p class="description">novel adalah karangan prosa yang panjang mengandung rangkaian cerita kehidupan seseorang dengan orang di sekelilingnya dengan menonjolkan watak dan sifat pelaku.</p>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="ri-palette-line"></i></div>
                <h4 class="title" style="color: #2487ce">Kamus</h4>
                <p class="description">Kamus adalah buku rujukan yang memuat daftar kata atau gabungan kata dengan keterangan mengenai berbagai segi maknanya dan penggunaannya dalam bahasa tertentu.</p>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
              <div class="icon-box">
                <div class="icon"><i class="ri-command-line"></i></div>
                <h4 class="title" style="color: #2487ce">Komik</h4>
                <p class="description"> komik diartikan sebagai cerita bergambar (dalam majalah, surat kabar, atau bentuk buku) yang umumnya mudah dicerna dan lucu.</p>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
              <div class="icon-box">
                <div class="icon"><i class="ri-fingerprint-line"></i></div>
                <h4 class="title" style="color: #2487ce">Majalah</h4>
                <p class="description">Majalah adalah penerbitan yang dicetak menggunakan tinta pada kertas, diterbitkan berkala, misalnya mingguan, dwimingguan, atau bulanan.</p>
              </div>
            </div>
    
          </div>
        </div>
      </section>
</body>
</html>
@endsection