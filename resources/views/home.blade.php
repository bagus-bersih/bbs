@extends('layouts.mainlayout')

@section('hero')
    <section id="hero">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="/images/hero.png" data-aos="fade-right" style="width: 350px; height: 350px;">
            </div>
            <div class="col-md-6 p-5">
                <h2 class="justify-content-start" data-aos="fade-left">Bagus Bersih Service</h2>
                <p style="font-size: 16px" data-aos="fade-left">Penyedia layanan jasa kebersihan terdepan di Indonesia karena dikelola secara amanah, disiplin dan profesional. Dengan didukung oleh tenaga ahli yang profesional dan berpengalaman, kami berkomitmen untuk menjadi partner Anda dalam menjaga kebersihan serta kenyamanan tempat Anda.
                </p>
                <div class="justify-content-start" data-aos="zoom-in">
                    <a href="https://wa.me/6285777530717">
                        <button type="button" class="btn btn-primary">
                            HUBUNGI KAMI
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
            <h1 class="d-flex justify-content-center" style="font-size: 20px">
                <b>ABOUT</b>
            </h1>
            <hr style="color: black;">
            <div class="row p-3">
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" data-aos="fade-right">
                        <img src="/images/cleaning.png" style="width: 150px; height: 100px;" class="card-img-top ms-5" alt="cleaning-1">
                            <div class="card-body text-center">
                                <h4>Cleaning Service</h4>
                            <p class="card-text ">Jasa Cleaning Service merupakan sebuah jasa kebersihan untuk perumahan, kantor, hotel, apartemen, sekolah, dan tempat lainnya. Kami melayani jasa cleaning service outsourcing untuk Anda yang membutuhkan jasa kebersihan harian.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" data-aos="zoom-in-up">
                        <img src="/images/house-cleaning.png" style="width: 150px; height: 127px;" class="card-img-top ms-5" alt="cleaning-2">
                            <div class="card-body text-center">
                                <h4>General Cleaning</h4>
                            <p class="card-text">Jasa general cleaning merupakan jasa kebersihan secara umum yang biasa dilakukan setelah renovasi, pembangunan, atau juga kebersihan rutin secara menyeluruh yang biasa dilakukan setiap 3 bulan sekali.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" data-aos="fade-left">
                        <img src="/images/cleaning-service.png" style="width: 150px; height: 126px;" class="card-img-top ms-5" alt="cleaning-3">
                            <div class="card-body text-center">
                                <h4>Specialist Cleaning</h4>
                            <p class="card-text ">Specialist cleaning merupakan jasa kebersihan untuk barang-barang Anda secara khusus seperti jasa cuci sofa, karpet, kamar mandi, spring bed, jok mobil, kursi, poles marmer, keramik, teraso dan yang lainnya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hargajasa">
        <div class="container">
            <h1 class="d-flex justify-content-center" style="font-size: 20px; color: black">
                <b>Harga Jasa</b>
            </h1>
            <div class="row">
                <h2 style="font-size: 15px" class="d-flex justify-content-center">
                    Harga di bawah ini berdasarkan harga satuan.<br>
                    Klik tombol “PESAN DISINI” untuk detail harganya.
                </h2>
                <hr style="color: black">
                <div class="col-md-3 d-flex justify-content-center text-center">
                    <div class="card shadow mb-5 bg-body-tertiary rounded" style="width: 20rem" data-aos="zoom-out-up">
                        <div class="card-header" style="background-color: aqua">
                            <h5 class="card-title">Cuci Sofa</h5>
                        </div>
                        <div class="card-body">
                                <h2 style="font-size: 30px; font-style: oblique;"><b>Rp.50.000</b></h2> 
                                <h6 class="card-subtitle mb-2 text-muted">Per Seat</h6> 
                            <p class="card-text">Harga cuci sofa standar bersandar.</p>
                            <a href="https://wa.me/6285777530717">
                            <button type="button" herf="wa.me/+6285777530717" class="btn btn-outline-success">PESAN DISINI</button>
                          </a>
                        </div>
                      </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center text-center">
                    <div class="card shadow mb-5 bg-body-tertiary rounded" style="width: 20rem" data-aos="zoom-out-up">
                        <div class="card-header" style="background-color: aqua">
                            <h5 class="card-title">Cuci Karpet Kantor</h5>
                        </div>
                        <div class="card-body">
                                <h2 style="font-size: 30px; font-style: oblique;"><b>Rp.5.000</b></h2>  
                                <h6 class="card-subtitle mb-2 text-muted">Per Meter Persegi</h6>
                            <p class="card-text">Harga mulai dari Rp. 5.000 - Rp. 25.000</p>
                            <a href="https://wa.me/6285777530717">
                            <button type="button" herf="wa.me/+6285777530717" class="btn btn-outline-success">PESAN DISINI</button>
                          </a>
                        </div>
                      </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center text-center">
                    <div class="card shadow mb-5 bg-body-tertiary rounded" style="width: 20rem" data-aos="zoom-out-up">
                        <div class="card-header" style="background-color: aqua">
                            <h5 class="card-title">Poles Lantai Marmer</h5>
                        </div>
                        <div class="card-body">     
                                <h2 style="font-size: 30px; font-style: oblique;"><b>Rp.15.000</b></h2> 
                                <h6 class="card-subtitle mb-2 text-muted">Per Meter Persegi</h6>               
                            <p class="card-text">Harga mulai dari Rp. 15.000 - Rp. 85.000</p>
                            <a href="https://wa.me/6285777530717">
                                <button type="button" herf="wa.me/+6285777530717" class="btn btn-outline-success">PESAN DISINI</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center text-center">
                    <div class="card shadow mb-5 bg-body-tertiary rounded" style="width: 20rem" data-aos="zoom-out-up">
                        <div class="card-header" style="background-color: aqua">
                            <h5 class="card-title">Cuci Spring Bed</h5>
                        </div>
                        <div class="card-body">
                                <h2 style="font-size: 30px; font-style: oblique;"><b>Rp.130.000</b></h2>
                                <h6 class="card-subtitle mb-2 text-muted">Per Sisi</h6> 
                            <p class="card-text">Harga untuk spring bed ukuran standar. </p>
                            <a href="https://wa.me/6285777530717">
                                <button type="button" herf="wa.me/+6285777530717" class="btn btn-outline-success">PESAN DISINI</button>
                            </a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <footer class="shadow-lg bg-dark text-white text-center p-3">
            <h5>Copyright <b>2023</b></h5>
            <h6>Designed By <a href="https://www.instagram.com/ahmadrandy_06">
                Ahmad Randi</a></h6>
        </footer>
    </section>
@endsection