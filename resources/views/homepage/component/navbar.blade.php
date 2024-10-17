 <!-- Navbar & Hero Start -->
 <div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h4 class="text-primary m-0">
                <img src="{{asset('assets/images/icon-vacation.png')}}" alt="" srcset=""> CATERING BOX 3 PUTRI </h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="/" class="nav-item nav-link {{Request::path() == '/' ? 'active' : ''}}" aria-current="page">Home</a>
                <a href="/about" class="nav-item nav-link {{Request::path() == 'about' ? 'active' : ''}}">About</a>
                <a href="about.html" class="nav-item nav-link">Package</a>
                <a href="menu.html" class="nav-item nav-link">Menu Gallery</a>
                <a href="menu.html" class="nav-item nav-link">career</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->