@extends('homepage.layout.index')
@section('content')
<!-- offer section -->

<section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container ">
        <div class="heading_container heading_center mt-4">
          <h2>
            Our Package
          </h2>
        </div>
        <div class="row">
          @foreach ($data as $item)
          <div class="col-md-6  ">
            <div class="box ">
              <div class="img-box">
                <img src="{{asset('storage/' . $item->image)}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  <h2>{{ $item -> nama_paket }}</h2>
                </h5>
                <h6>
                  Rp. {{ $item -> harga }}
                </h6>
                <a href="/">
                  Order Now
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
</section>

  <!-- end offer section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                We Are Feane
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
<hr>
  <!-- end about section -->

  <!-- Menu Periode section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          @foreach ($menuPeriode as $item)
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                {{$item -> title}}
              </h2>
            </div>
            <p>
              {{$item -> desc}}
            </p>
            <a href="#contact">
              Read More
            </a>
          </div>
          @endforeach
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{asset('storage/' . $item->image)}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end Menu Periode section -->

  <!-- food section -->

  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center mt-4">
        <h2>
          Our Menu
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".burger">Burger</li>
        <li data-filter=".pizza">Pizza</li>
        <li data-filter=".pasta">Pasta</li>
        <li data-filter=".fries">Fries</li>
      </ul>

      <div class="filters-content">
        <div class="row grid">
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f1.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Delicious Pizza
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f2.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Delicious Burger
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f3.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Delicious Pizza
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pasta">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f4.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Delicious Pasta
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all fries">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f5.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    French Fries
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f6.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Delicious Pizza
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f7.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Tasty Burger
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f8.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Tasty Burger
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pasta">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f9.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Delicious Pasta
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- book section -->

  <!-- <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Book A Table
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" class="form-control" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Your Email" />
              </div>
              <div>
                <select class="form-control nice-select wide">
                  <option value="" disabled selected>
                    How many persons?
                  </option>
                  <option value="">
                    2
                  </option>
                  <option value="">
                    3
                  </option>
                  <option value="">
                    4
                  </option>
                  <option value="">
                    5
                  </option>
                </select>
              </div>
              <div>
                <input type="date" class="form-control">
              </div>
              <div class="btn_box">
                <button>
                  Book Now
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end book section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          What Says Our Customers
        </h2>
      </div>
      <div class="carousel-wrap row ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <img src="{{asset('assets/images/client1.jpg')}}" alt="" >
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <img src="{{asset('assets/images/client2.jpg')}}" alt="" class="box-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->

  <section class="page-section bg-light" id="contact" style="color: black;">
      <div class="container">
          <h1 style="font-size: 40px; text-align: center;">Order Sekarang</h1>
          <hr>
          <h6 class="mb-5 text-center">Hubungi admin dibawah sesuai dengan lokasi anda.</h6>
          <div class="row">
              @foreach ($contact as $item)
              <div class="col-lg-4 center">
                  <div class="team-member">
                      <a href="">
                          <img class="mx-auto rounded-circle" src="{{asset('storage/' . $item->image)}}"
                              alt="..." />
                      </a>
                      <h4>{{ $item -> nama_lokasi }}</h4>
                      <p class="text-muted">{{ $item -> maps }}</p>
                      <a class="btn btn-dark btn-social mx-3"
                          href="https://wa.me/{{ $item -> phone }}?text=Halo%20min%2C%20saya%20mau%20tanya%20tanya%20paket%20catering%20box%203%20putri"><i
                              class="fa fa-whatsapp" style="height: 20px;"></i></a>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </section>

  <!-- end contact section -->

@endsection