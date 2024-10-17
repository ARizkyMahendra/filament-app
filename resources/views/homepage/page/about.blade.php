@extends('homepage.layout.index')
@section('content')

<div class="hero-wrap hero-bread" style="background-image: url(../../assets/images/hero2.png);">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>about</span>
                </p>
                <h1 class="mb-0 bread">tentang kami</h1>
            </div>
        </div>
    </div>
</div>
<div class="row mt-5 align-items-center">
    <div class="col-md-6">
        <div class="content-text p-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Corporis saepe nulla hic quos nesciunt aperiam iste itaque tempore fugit iusto
            quia quisquam in, exercitationem, vero explicabo numquam corrupti voluptatibus
            enim possimus sed quasi ratione eveniet. Quibusdam reiciendis facere, atque
            ratione perferendis molestiae beatae delectus nesciunt laudantium sit consectetur
            illum officiis.
        </div>
    </div>
    <div class="col-md-6 text-center mt-2">
        <img src="{{asset('assets/images/icon-vacation.png')}}" style="width: 50%;" alt="">
    </div>
</div>
<hr class="mb-5 mt-5">
<div class="row d-flex text-center mt-5">
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <img src="{{asset('assets/images/customer.png')}}" alt="" srcset="" style="width: 80px; height: 80px;">
        <p class="m-0 fs-6 mt-3">MELAYANI 25.000+ CUSTOMER</p>
    </div>
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <img src="{{asset('assets/images/users-handsake.png')}}" alt="" srcset="" style="width: 80px; height: 80px;">
        <p class="m-0 fs-6 mt-3">2000+ KONSUMEN MINGGUAN</p>
    </div>
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <img src="{{asset('assets/images/karyawan.png')}}" alt="" srcset="" style="width: 80px; height: 80px;">
        <p class="m-0 fs-6 mt-3">80+ KARYAWAN</p>
    </div>
</div>

<hr class="mt-5 mb-5">
<h5 class="text-center mt-md-5 mb-md-2 mt-5"> Contact Us </h5>
<div class="row mb-md-5 mt-4">
    <div class="col-md-5">
        <!-- <div class="bg-secondary" style="width: 100%; height: 40vh; border-radius: 10px;"></div> -->
        <img src="{{asset('assets/images/message.png')}}" alt="" style="width: 100%; height: 60hv;">
    </div>
    <div class="col-md-7 p-5">
        <div class="card mb-4">
            <div class="card-header text-center">
                <h3>Pesan</h3>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3 row">
                    <label for="Pesan" class="form-label">Kritik dan Saran</label>
                    <textarea class="form-control" id="Pesan" rows="3"></textarea>
                </div>
                <button class="btn btn-primary mt-2 w-100">Kirim pesan</button>
            </div>
        </div>
    </div>
</div>
@endsection