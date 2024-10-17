@extends('homepage.layout.index')
@section('content')
  
    <!-- Hero Start -->
        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-5 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <a href="/order" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets/images/image (1).png')}}" alt="" style="width: 500px">
                    </div>
                </div>
            </div>
        </div>
    <!-- Hero End -->

    <!-- Service Start -->
        <div class="container-xxl py-5 ">
            <div class="container">
                <div class="row g-4" style="justify-content: center" >
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s" >
                        <div class="service-item pt-3">
                            <div class="p-4">
                                <img src="{{asset('assets/images/courier.png')}}" alt="" srcset="">
                                <h5 class="pt-2">Free Delivery &amp; On Time</h5>
                                <p>Nikmati Pengiriman Gratis dan Tepat Waktu untuk Setiap Pesanan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s" >
                        <div class="service-item pt-3">
                            <div class="p-4">
                                <img src="{{asset('assets/images/variasi-menu.png')}}" alt="" srcset="">
                                <h5 class="pt-2">Menu yang Bervariasi</h5>
                                <p>Dengan lebih dari 200+ menu, kami siap memenuhi keinginan kuliner Anda!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s" >
                        <div class="service-item pt-3">
                            <div class="p-4">
                                <img src="{{asset('assets/images/fresh.png')}}" alt="" srcset="">
                                <h5 class="pt-2">Always Fresh</h5>
                                <p>Nikmati makanan yang selalu segar dan berkualitas, 100% tanpa bahan pengawet!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s" >
                        <div class="service-item pt-3">
                            <div class="p-4">
                                <img src="{{asset('assets/images/customer-service.png')}}" alt="" srcset="">
                                <h5 class="pt-2">24/7 Service</h5>
                                <p> Layanan catering kami siap 24/7 untuk memenuhi kebutuhan Anda</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Service End -->

    <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="wow zoomIn" data-wow-delay="0.1s" src="{{asset('assets/images/new.jpeg')}}" style="width: 200%">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Best Price For You</h5>
                        <h1 class="mb-4">Deal of the Week</h1>
                        <p class="mb-4">Selamat datang di Deal of the Week—penawaran spesial yang hanya hadir sekali 
                            dalam seminggu! Dengan diskon menarik dan pilihan menu andalan, kami berkomitmen untuk 
                            memberikan Anda pengalaman kuliner terbaik dengan harga yang ramah di kantong. 
                            Manfaatkan kesempatan ini sebelum penawaran berakhir. Pesan sekarang dan nikmati hidangan 
                            lezat dengan harga tak tertandingi!</p>
                        <div class="row g-4 mb-4">
                            <a href="https://logwork.com/countdown-timer" class="countdown-timer" data-date="2024-10-19 00:00" >Waktu Berakhir</a>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- About End -->

    <!-- Package Start -->
        <div class="container-xxl project py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Paket Menu</h5>
                    <h1 class="mb-5">Paket Catering</h1>
                </div>
                <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-lg-3">
                        <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                                <h4 class="m-0">01. Paket Reguler</h4>
                            </button>
                            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                                <h4 class="m-0">02. Paket Lauk Praktis</h4>
                            </button>
                            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                                <h4 class="m-0">03. Prasmanan</h4>
                            </button>
                            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                                <h4 class="m-0">04. Nasi Dus Kotak</h4>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content w-100">
                            <div class="tab-pane fade show active" id="tab-pane-1">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 600px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets/images/image (6).png')}}"
                                                style="object-fit: fill;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h1 class="mb-3">Paket Makan Reguler: Praktis, Sehat, dan Terjangkau!</h1>
                                        <p class="mb-4">Paket Makan Reguler kami yang dirancang khusus untuk memenuhi kebutuhan harian Anda. Dengan pilihan menu yang beragam setiap hari, kami memastikan Anda mendapatkan makanan yang sehat, lezat, dan seimbang.</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Variasi Menu Harian</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Bahan-bahan Segar 100%</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Harga Terjangkau</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Cocok untuk Kebutuhan Harian</p>
                                        <h3>Mulai dari Rp190.000 / Minggu</h3>
                                        <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-pane-2">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 600px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets/images/image (2).png')}}"
                                                style="object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h1 class="mb-3">Paket Lauk Praktis: Solusi Cepat dan Lezat untuk Setiap Hari!</h1>
                                        <p class="mb-4">Paket Lauk Praktis kami. Pilihan lauk yang lezat dan bervariasi siap memenuhi kebutuhan makan Anda setiap hari. Mudah, cepat, dan tentunya nikmat, paket ini cocok untuk Anda yang sibuk tapi tetap ingin makan enak.</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Pilihan Lauk Beragam</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Pengemasan Praktis</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Porsi Pas dan Mengenyangkan</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Cocok untuk Keluarga atau Individu</p>
                                        <h3>Mulai dari Rp32.000 / paket</h3>
                                        <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-pane-3">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 600px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets/images/Prasmanan.jpg')}}"
                                                style="object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h1 class="mb-3">Paket Prasmanan: Sajian Melimpah, Nikmat Tanpa Batas!</h1>
                                        <p class="mb-4">Dengan pilihan hidangan beragam, Anda dan tamu-tamu Anda dapat menikmati sajian lezat dengan berbagai menu yang menggugah selera. Cocok untuk acara besar maupun kecil, kami siap memberikan pengalaman kuliner yang berkesan.</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Menu Fleksibel</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Kualitas Rasa Terjamin</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Porsi Melimpah</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Pilihan Menu Lengkap</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Menu yang Dapat Disesuaikan dengan Tema</p>
                                        <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-pane-4">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 600px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets/images/Dus-Box.jpg')}}"
                                                style="object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h1 class="mb-3">Paket Dus-Box: Praktis, Higienis, dan Lezat untuk Segala Kebutuhan!</h1>
                                        <p class="mb-4">Paket Dus-Box kami yang dirancang praktis untuk berbagai acara atau kebutuhan harian Anda. Setiap kotak diisi dengan menu lengkap dan seimbang, menjamin Anda tetap bisa menikmati hidangan berkualitas kapan pun dan di mana pun.</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Kemasan Praktis dan Higienis</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Harga Terjangkau</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Ukuran Porsi yang Pas</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Tersedia untuk Pesanan Besar</p>
                                        <h3>Mulai dari harga 15.000 / pax</h3>
                                        <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Package End -->

    <!-- Gallery Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Menu Gallery</h1>
                </div>
                <div class="row g-5">
                    @foreach ($menuGallery as $item)
                        <div class="col-md-6 col-lg-3 ">
                            <div class="product">
                                <a href="#" class="img-prod"><img class="img-fluid" src="{{asset('storage/' . $item->image)}}"
                                        alt="Colorlib Template">
                                    <span class="status">30%</span>
                                    <div class="overlay"></div>
                                </a>
                            </div>
                        </div>
                    @endforeach  
                </div>
            </div>
        </div>
    <!-- Gallery Menu End -->
   
    <!-- FAQs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">
                        Frequently Asked Questions</h5>
                    <h1 class="mb-5">FAQs</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How to build a website?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                        diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How long will it take to get a new website?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                        diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Do you only create HTML websites?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                        diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        Will my website be mobile-friendly?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                        diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Will you maintain my site for me?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                        diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        I'm on a strict budget. Do you have any low cost options?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                        diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Will you maintain my site for me?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                        diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        I'm on a strict budget. Do you have any low cost options?
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                        diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- FAQs Start -->

     <!-- Contact Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact</h5>
                    <h1 class="mb-5">Our Location</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach ($contact as $item)
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s" >
                            <div class="team-item text-center rounded overflow-hidden align-items-center">
                                <div class=" rounded-circle overflow-hidden m-4  ">
                                    <img class="img-fluid" src="{{asset('storage/' . $item->image)}}" alt="" style="width: 250px; height: 250px;">
                                </div>
                                <h5 class="mb-0" >{{ $item -> nama_lokasi }}</h5>
                                <small style="padding: 4px;">{{ $item -> maps }}</small>
                                <div class="d-flex justify-content-center mt-3">
                                    <a class="btn btn-square btn-primary mx-1" 
                                        href="https://wa.me/{{ $item -> phone }}?text=Halo%20min%2C%20saya%20mau%20tanya%20tanya%20paket%20catering%20box%203%20putri">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    <!-- Contact End -->

    <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('assets/images/image (6).png')}}">
                        <div class="d-flex align-items-center">
                            
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('assets/images/image (6).png')}}">
                        <div class="d-flex align-items-center">
                            
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('assets/images/image (6).png')}}">
                        <div class="d-flex align-items-center">
                            
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('assets/images/image (6).png')}}">
                        <div class="d-flex align-items-center">
                            
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Testimonial End -->

@endsection