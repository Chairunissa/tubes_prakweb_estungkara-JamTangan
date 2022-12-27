@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ESTUNGKARA</title>
  <!-- {{-- contact us --}} -->
  <link rel="stylesheet" href="{{asset('style/contact.css') }}">

  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('style/ourteam.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>
  <section>
    <div class="container">
      <div class="contactinfo">
        <div class="box">
          <h2>Contact Info</h2>
          <ul class="info">
            <li>
              <span style="background-color: #DC6640 ; border-radius: 100%; display: flex; align-items: center; justify-content: center; height: 30px; width: 30px;"><img src="/img/lokasi.png"></span>
              <span>Jl. Dr. Setiabudi No.193 <br>
                Gegerkalong, Kota Bandung <br>
                Jawa Barat, 40153</span>
            </li>
            <li>
              <span style="background-color: #DC6640 ; border-radius: 100%; display: flex; align-items: center; justify-content: center; height: 30px; width: 30px;"><img src="/img/email.png"></span>
              <span>DeOrologio@gmail.com<br>
            </li>
            <li>
              <span style="background-color: #DC6640 ; border-radius: 100%; display: flex; align-items: center; justify-content: center; height: 30px; width: 30px;"><img src="/img/call.png"></span>
              <span>0831-3456-5432</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="contactForm">
        <h2>Send a Message</h2>
        <div class="inputBox w50 form">
          <input class="inpt" type="text" name="" placeholder="First Name" required>
          <span>first</span>
        </div>
        <div class="inputBox w50 form">
          <input class="inpt" type="text" name="" placeholder="Last Name" required>
        </div>
        <div class="inputBox w50 form">
          <input class="inpt" type="text" name="" placeholder="Email Address" required>
        </div>
        <div class="inputBox w50 form">
          <input class="inpt" type="text" name="" placeholder="Mobile Number" required>
        </div>
        <div class="inputBox w50 form">
          <textarea class="inpt" name="" placeholder="Write your message here.." required></textarea>
        </div>
        <div class="inputBox w100">
          <input type="submit" value="send">
        </div>
      </div>
    </div>
  </section>

  <section class="team">
    <div class="center">
      <h1>Estungkara Team</h1>
    </div>

    <div class="team-content">
      <div class="box">
        <img src="img/icha.jpeg">
        <h3>Leader</h3>
        <h5>Chairunissa Putri K</h5>
        <h5>203040048</h5>
        <div class="icons">
          <a href="#"><i class="ri-twitter-fill"></i></a>
          <a href="#"><i class="ri-facebook-box-fill"></i></a>
          <a href="#"><i class="ri-instagram-fill"></i></a>
        </div>
      </div>

      <div class="box">
        <img src="img/leni.jpg">
        <h3>Front End</h3>
        <h5>Leni Setiarini</h5>
        <h5>203040047</h5>
        <div class="icons">
          <a href="#"><i class="ri-twitter-fill"></i></a>
          <a href="#"><i class="ri-facebook-box-fill"></i></a>
          <a href="#"><i class="ri-instagram-fill"></i></a>
        </div>
      </div>

      <div class="box">
        <img src="img/rafi.png">
        <h3>Front End</h3>
        <h5>M. Rafi Ramadhan</h5>
        <h5>203040051</h5>
        <div class="icons">
          <a href="#"><i class="ri-twitter-fill"></i></a>
          <a href="#"><i class="ri-facebook-box-fill"></i></a>
          <a href="#"><i class="ri-instagram-fill"></i></a>
        </div>
      </div>

      <div class="box">
        <img src="img/nizar.png">
        <h3>Back End</h3>
        <h5>M. Nizar Albaehaqi</h5>
        <h5>203040035</h5>
        <div class="icons">
          <a href="#"><i class="ri-twitter-fill"></i></a>
          <a href="#"><i class="ri-facebook-box-fill"></i></a>
          <a href="#"><i class="ri-instagram-fill"></i></a>
        </div>
      </div>



    </div>
  </section>
</body>

</html>
@endsection