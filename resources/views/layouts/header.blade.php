<nav class="navbar navbar-expand-lg bg-gray border-bottom">
  <div class="container-fluid">
    <a class="navbar-brand m-0" href="./">
      <img src="{{asset('public/img-src/logo/full logo.png')}}" alt="logo" class="headerLogo">
    </a>
    <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#navOffcanvas" aria-controls="offcanvasNavbar">
      <i class="fa-solid fa-bars"></i>
    </button>
    <div class="offcanvas bg-gray offcanvas-end" tabindex="-1" id="navOffcanvas" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body ps-2 pe-2">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item m-auto text-start">
            <a class="nav-link fs-5" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item m-auto">
            <a class="nav-link fs-5" href="{{url('/about')}}">
              About
            </a>
          </li>
          <li class="nav-item m-auto">
            <a class="nav-link fs-5" href="{{url('/shop')}}">
              Shop
            </a>
          </li>
          <li class="nav-item m-auto">
            <a class="nav-link fs-5" href="{{url('/promotion')}}">
              Promotion
            </a>
          </li>
          <li class="nav-item m-auto">
            <a class="nav-link fs-5" href="{{url('/news')}}">
              News
            </a>
          </li>
        </ul>
        <div class="col-xl-6 col-lg-8 ms-auto">
          <div class="row">
            <div class="col-xl-4 col-lg-12 col-md-12 ms-auto">
              <ul class="list-group list-group-horizontal justify-content-center">
                <li class="list-group-item border-0 bg-gray ps-2 pe-2">
                  <a href="./cart" class="btn border-0 position-relative ">
                    <i class="fa-solid fa-basket-shopping"></i>
                    <span class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-primary">
                      1
                    </span>
                  </a>
                </li>
                <li class="list-group-item border-0 bg-gray ps-2 pe-2">
                  <div class="dropdown">
                    <button class="btn border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa-solid fa-user"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="{{url('/my-account')}}">
                          Profile
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{url('/cart')}}">
                          Order
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{url('/wishlist')}}">
                          Wishlist
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Logout
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="list-group-item border-0 bg-gray ps-2 pe-2">
                  <div class="dropdown">
                    <button class="btn border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      LN
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="#">
                          🇲🇲 Myanmar
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          🇺🇸 English
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</nav>
<div class="container-fluid">
  <div class="row bg-gray border-bottom p-2">
    <div class="col-md-6">
      <nav class="navbar navbar-expand-lg d-none d-lg-block">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav m-auto">
              <li class="nav-item dropdown" id="myDropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                  All Products
                </a>
                <ul class="dropdown-menu main-categories">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="row">
                        <div class="col">
                            Laptop
                        </div>
                        <div class="col text-end">
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                      </div>
                    </a>
                    <ul class="submenu dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="#">
                          Asus
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Lenovo
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Dell
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Apple
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="row">
                        <div class="col">
                            Smartphone
                        </div>
                        <div class="col text-end">
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                      </div>
                    </a>
                    <ul class="submenu dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="#">
                          Samsung
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Apple
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Xiaomi
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Oppo
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="row">
                        <div class="col">
                            Apple
                        </div>
                        <div class="col text-end">
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                      </div>
                    </a>
                    <ul class="submenu dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="#">
                          iPhone
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          iPad
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Macbook
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          iMac
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Apple Watch
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          AirPods
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Accessories
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="row">
                        <div class="col">
                            Computer
                        </div>
                        <div class="col text-end">
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                      </div>
                    </a>
                    <ul class="submenu dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="#">
                          Desktop PC
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Monitor
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Processor (CPU)
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Graphic Card
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Motherboard
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Memory (RAM)
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Storage Devices
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Keyboard
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Mouse
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Webcam
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      Tablet
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      Smartwatch
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      Speaker
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      Headphone
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      Earphone
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      Microphone
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      Projector
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="row">
                        <div class="col">
                            Printer
                        </div>
                        <div class="col text-end">
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                      </div>
                    </a>
                    <ul class="submenu dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="#">
                          Printer
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Barcode Printer
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="row">
                        <div class="col">
                            Scanner
                        </div>
                        <div class="col text-end">
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                      </div>
                    </a>
                    <ul class="submenu dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="#">
                          Scanner
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Barcode Scanner
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      CCTV
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- navbar-collapse.// -->
        </div>
        <!-- container-fluid.// -->
      </nav>
      <nav class="navbar navbar-expand-lg d-lg-none d-xl-none d-xxl-none">
          <div class="container-fluid">
            <button class="navbar-toggler border shadow-none w-100 m-auto p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <span class="p-2 me-5">All Products</span> <i class="fa-solid fa-list-check"></i>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                All Products
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Laptop
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Asus</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Lenovo</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Dell</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Apple</a>
                        </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Smartphone
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Samsung</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Apple</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Xiaomi</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Oppo</a>
                        </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Apple
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">iPhone</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">iPad</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">MacBook</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">iMac</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Apple Watch</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">AirPods</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Accessories</a>
                        </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Computer
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Desktop PC</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Monitor</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Processor (CPU)</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Graphic Card</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Motherboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Memory (RAM)</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Storage Devices</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Keyboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Mouse</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Webcam</a>
                        </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Tablet
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Smartwatch
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Speaker
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Headphone
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Earphone
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Microphone
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Projector
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Printer
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Printer</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Barcode Printer</a>
                        </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Scanner
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Scanner</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Barcode Scanner</a>
                        </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      CCTV
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          </div>
          <div class="col-md-6">
      <div class="col p-2">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
        </nav>
    </div>
  </div>
</div>
