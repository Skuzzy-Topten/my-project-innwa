@extends('layouts.news')

@section('site title')
INNWA IT & Mobile - Service
@endsection

@section('content')
  <div class="container">
    <div class="col pt-3 pb-3">
      <div class="row pt-1 pb-1">
        <div class="col-xl-3 col-md-6 pt-2 pb-2">
          <div class="card">
            <div class="card-header bg-white border-0 text-center pt-2 ps-2 pe-2">
              <img src="{{asset('public/img-src/posts/post 01.png')}}" alt="post image" class="postImage rounded">
            </div>
            <div class="card-body pt-0 pb-0 ps-2 pe-2">
              <h5 class="pt-2 pb-2 ps-2 pe-2 m-0">
                iPhone 14
              </h5>
              <p class="ps-2 pe-2 m-0">
                iOS 16 lets you customize your Lock Screen in fun new ways. Layer a photo to make it pop. Track your Activity rings...
              </p>
            </div>
            <div class="card-footer bg-white border-0 text-center pb-2 ps-2 pe-2">
              <div class="col pb-2 ps-2 pe-2 text-start">
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Apple
                </a>
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Phone
                </a>
              </div>
              <a href="{{url('/news/iphone-14')}}" class="btn btn-outline-dark rounded-pill">
                Read More
              </a>
            </div>
            <div class="card-footer text-center p-1">
              <div class="col ps-2 pe-2">
                <p class="m-0">
                  Monday, 10th of October 2022
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 pt-2 pb-2">
          <div class="card">
            <div class="card-header bg-white border-0 text-center pt-2 ps-2 pe-2">
              <img src="{{asset('public/img-src/posts/post 02.png')}}" alt="post image" class="postImage rounded">
            </div>
            <div class="card-body pt-0 pb-0 ps-2 pe-2">
              <h5 class="pt-2 pb-2 ps-2 pe-2 m-0">
                X670E AORUS XTREME
              </h5>
              <p class="ps-2 pe-2 m-0">
                AMD Socket AM5, support for : AMD Ryzen™ 7000 Series Processors Support for DDR5 6600(OC) / 6400(OC)...
              </p>
            </div>
            <div class="card-footer bg-white border-0 text-center pb-2 ps-2 pe-2">
              <div class="col pb-2 ps-2 pe-2 text-start">
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Gigabyte
                </a>
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Motherboard
                </a>
              </div>
              <a href="{{url('/news/x670e-aorus-xtreme')}}" class="btn btn-outline-dark rounded-pill">
                Read More
              </a>
            </div>
            <div class="card-footer text-center p-1">
              <div class="col ps-2 pe-2">
                <p class="m-0">
                  Sunday, 9th of October 2022
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 pt-2 pb-2">
          <div class="card">
            <div class="card-header bg-white border-0 text-center pt-2 ps-2 pe-2">
              <img src="{{asset('public/img-src/posts/post 03.png')}}" alt="post image" class="postImage rounded">
            </div>
            <div class="card-body pt-0 pb-0 ps-2 pe-2">
              <h5 class="pt-2 pb-2 ps-2 pe-2 m-0">
                AORUS GeForce RTX™ 3090
              </h5>
              <p class="ps-2 pe-2 m-0">
                1935 MHz (Reference Card: 1860 MHz), 10752, 21000 MHz, PCI-E 4.0 x 16, 7680x4320, L=238 W=141 H=40 mm...
              </p>
            </div>
            <div class="card-footer bg-white border-0 text-center pb-2 ps-2 pe-2">
              <div class="col pb-2 ps-2 pe-2 text-start">
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Gigabyte
                </a>
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Graphic Card
                </a>
              </div>
              <a href="{{url('/news/aorus-geforce-rtx-3090')}}" class="btn btn-outline-dark rounded-pill">
                Read More
              </a>
            </div>
            <div class="card-footer text-center p-1">
              <div class="col ps-2 pe-2">
                <p class="m-0">
                  Sunday, 9th of October 2022
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 pt-2 pb-2">
          <div class="card">
            <div class="card-header bg-white border-0 text-center pt-2 ps-2 pe-2">
              <img src="{{asset('public/img-src/posts/post 04.png')}}" alt="post image" class="postImage rounded">
            </div>
            <div class="card-body pt-0 pb-0 ps-2 pe-2">
              <h5 class="pt-2 pb-2 ps-2 pe-2 m-0">
                AORUS MODEL S 12th
              </h5>
              <p class="ps-2 pe-2 m-0">
                The proprietary hardware built exclusively for the limited volume inside the Model S creates the maximum cooling space...
              </p>
            </div>
            <div class="card-footer bg-white border-0 text-center pb-2 ps-2 pe-2">
              <div class="col pb-2 ps-2 pe-2 text-start">
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Gigabyte
                </a>
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Gaming PC
                </a>
              </div>
              <a href="{{url('/news/aorus-model-s-12')}}" class="btn btn-outline-dark rounded-pill">
                Read More
              </a>
            </div>
            <div class="card-footer text-center p-1">
              <div class="col ps-2 pe-2">
                <p class="m-0">
                  Saturday, 8th of October 2022
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-1 pb-1">
        <div class="col-xl-3 col-md-6 pt-2 pb-2">
          <div class="card">
            <div class="card-header bg-white border-0 text-center pt-2 ps-2 pe-2">
              <img src="{{asset('public/img-src/posts/post 05.png')}}" alt="post image" class="postImage rounded">
            </div>
            <div class="card-body pt-0 pb-0 ps-2 pe-2">
              <h5 class="pt-2 pb-2 ps-2 pe-2 m-0">
                PROGRAF PRO-300
              </h5>
              <p class="ps-2 pe-2 m-0">
                Wireless, Wired LAN, Wireless Pictbridge, Mopria, AirPrint, Direct Wireless, Photo print speed...
              </p>
            </div>
            <div class="card-footer bg-white border-0 text-center pb-2 ps-2 pe-2">
              <div class="col pb-2 ps-2 pe-2 text-start">
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Canon
                </a>
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Printer
                </a>
              </div>
              <a href="{{url('/news/prograf-pro-300')}}" class="btn btn-outline-dark rounded-pill">
                Read More
              </a>
            </div>
            <div class="card-footer text-center p-1">
              <div class="col ps-2 pe-2">
                <p class="m-0">
                  Saturday, 8th of October 2022
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 pt-2 pb-2">
          <div class="card">
            <div class="card-header bg-white border-0 text-center pt-2 ps-2 pe-2">
              <img src="{{asset('public/img-src/posts/post 06.png')}}" alt="post image" class="postImage rounded">
            </div>
            <div class="card-body pt-0 pb-0 ps-2 pe-2">
              <h5 class="pt-2 pb-2 ps-2 pe-2 m-0">
                Galaxy Z Fold4 5G
              </h5>
              <p class="ps-2 pe-2 m-0">
                Galaxy Z Fold4 Mulai dari Rp 694.417/blnatau Rp 24.999.000, 256GB ｜12GBRp 694.417/bln...
              </p>
            </div>
            <div class="card-footer bg-white border-0 text-center pb-2 ps-2 pe-2">
              <div class="col pb-2 ps-2 pe-2 text-start">
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Samsung
                </a>
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Phone
                </a>
              </div>
              <a href="{{url('/news/galaxy-z-fold4-5g')}}" class="btn btn-outline-dark rounded-pill">
                Read More
              </a>
            </div>
            <div class="card-footer text-center p-1">
              <div class="col ps-2 pe-2">
                <p class="m-0">
                  Saturday, 8th of October 2022
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 pt-2 pb-2">
          <div class="card">
            <div class="card-header bg-white border-0 text-center pt-2 ps-2 pe-2">
              <img src="{{asset('public/img-src/posts/post 07.png')}}" alt="post image" class="postImage rounded">
            </div>
            <div class="card-body pt-0 pb-0 ps-2 pe-2">
              <h5 class="pt-2 pb-2 ps-2 pe-2 m-0">
                Neo QLED
              </h5>
              <p class="ps-2 pe-2 m-0">
                The finest details powered by Quantum Matrix Technology Pro draw you deep into the action. The...
              </p>
            </div>
            <div class="card-footer bg-white border-0 text-center pb-2 ps-2 pe-2">
              <div class="col pb-2 ps-2 pe-2 text-start">
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Samsung
                </a>
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  TV
                </a>
              </div>
              <a href="{{url('/news/neo-qled')}}" class="btn btn-outline-dark rounded-pill">
                Read More
              </a>
            </div>
            <div class="card-footer text-center p-1">
              <div class="col ps-2 pe-2">
                <p class="m-0">
                  Saturday, 8th of October 2022
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 pt-2 pb-2">
          <div class="card">
            <div class="card-header bg-white border-0 text-center pt-2 ps-2 pe-2">
              <img src="{{asset('public/img-src/posts/post 08.png')}}" alt="post image" class="postImage rounded">
            </div>
            <div class="card-body pt-0 pb-0 ps-2 pe-2">
              <h5 class="pt-2 pb-2 ps-2 pe-2 m-0">
                Watch Series 8
              </h5>
              <p class="ps-2 pe-2 m-0">
                Your essential companion is now even more powerful. Introducing temperature sensing for deeper...
              </p>
            </div>
            <div class="card-footer bg-white border-0 text-center pb-2 ps-2 pe-2">
              <div class="col pb-2 ps-2 pe-2 text-start">
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Apple
                </a>
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Watch
                </a>
              </div>
              <a href="{{url('/news/watch-series-8')}}" class="btn btn-outline-dark rounded-pill">
                Read More
              </a>
            </div>
            <div class="card-footer text-center p-1">
              <div class="col ps-2 pe-2">
                <p class="m-0">
                  Saturday, 8th of October 2022
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-1 pb-1">
        <div class="col-xl-3 col-md-6 pt-2 pb-2">
          <div class="card">
            <div class="card-header bg-white border-0 text-center pt-2 ps-2 pe-2">
              <img src="{{asset('public/img-src/posts/post 09.png')}}" alt="post image" class="postImage rounded">
            </div>
            <div class="card-body pt-0 pb-0 ps-2 pe-2">
              <h5 class="pt-2 pb-2 ps-2 pe-2 m-0">
                LV-WU360
              </h5>
              <p class="ps-2 pe-2 m-0">
                The LV-WU360 is an LCD panel projector featuring a newly designed, long-life lamp with a lifespan of approximately 20,000 hours...
              </p>
            </div>
            <div class="card-footer bg-white border-0 text-center pb-2 ps-2 pe-2">
              <div class="col pb-2 ps-2 pe-2 text-start">
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Canon
                </a>
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Projector
                </a>
              </div>
              <a href="{{url('/news/lv-wu360')}}" class="btn btn-outline-dark rounded-pill">
                Read More
              </a>
            </div>
            <div class="card-footer text-center p-1">
              <div class="col ps-2 pe-2">
                <p class="m-0">
                  Friday, 7th of October 2022
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 pt-2 pb-2">
          <div class="card">
            <div class="card-header bg-white border-0 text-center pt-2 ps-2 pe-2">
              <img src="{{asset('public/img-src/posts/post 10.png')}}" alt="post image" class="postImage rounded">
            </div>
            <div class="card-body pt-0 pb-0 ps-2 pe-2">
              <h5 class="pt-2 pb-2 ps-2 pe-2 m-0">
                HomePod mini
              </h5>
              <p class="ps-2 pe-2 m-0">
                HomePod mini with the latest version of software and iPhone SE, iPhone 6s or later, or iPod touch (7th generation) with the latest iOS...
              </p>
            </div>
            <div class="card-footer bg-white border-0 text-center pb-2 ps-2 pe-2">
              <div class="col pb-2 ps-2 pe-2 text-start">
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Samsung
                </a>
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Speaker
                </a>
              </div>
              <a href="{{url('/news/homepod-mini')}}" class="btn btn-outline-dark rounded-pill">
                Read More
              </a>
            </div>
            <div class="card-footer text-center p-1">
              <div class="col ps-2 pe-2">
                <p class="m-0">
                  Friday, 7th of October 2022
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 pt-2 pb-2">
          <div class="card">
            <div class="card-header bg-white border-0 text-center pt-2 ps-2 pe-2">
              <img src="{{asset('public/img-src/posts/post 11.png')}}" alt="post image" class="postImage rounded">
            </div>
            <div class="card-body pt-0 pb-0 ps-2 pe-2">
              <h5 class="pt-2 pb-2 ps-2 pe-2 m-0">
                Mac mini
              </h5>
              <p class="ps-2 pe-2 m-0">
                The Apple M1 chip takes our most versatile, do-it-all desktop into another dimension. With up to 3x faster CPU performance...
              </p>
            </div>
            <div class="card-footer bg-white border-0 text-center pb-2 ps-2 pe-2">
              <div class="col pb-2 ps-2 pe-2 text-start">
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Apple
                </a>
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Mini PC
                </a>
              </div>
              <a href="{{url('/news/mac-mini')}}" class="btn btn-outline-dark rounded-pill">
                Read More
              </a>
            </div>
            <div class="card-footer text-center p-1">
              <div class="col ps-2 pe-2">
                <p class="m-0">
                  Thursday, 6th of October 2022
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 pt-2 pb-2">
          <div class="card">
            <div class="card-header bg-white border-0 text-center pt-2 ps-2 pe-2">
              <img src="{{asset('public/img-src/posts/post 12.png')}}" alt="post image" class="postImage rounded">
            </div>
            <div class="card-body pt-0 pb-0 ps-2 pe-2">
              <h5 class="pt-2 pb-2 ps-2 pe-2 m-0">
                MX MECHANICAL MINI
              </h5>
              <p class="ps-2 pe-2 m-0">
                A minimalist keyboard with a key layout for Mac® with Tactile Quiet low-profile mechanical switches and Smart Backlighting...
              </p>
            </div>
            <div class="card-footer bg-white border-0 text-center pb-2 ps-2 pe-2">
              <div class="col pb-2 ps-2 pe-2 text-start">
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Logitech
                </a>
                <a href="#" class="badge bg-primary text-white text-decoration-none">
                  Keyboard
                </a>
              </div>
              <a href="{{url('/news/mx-mechanical-mini')}}" class="btn btn-outline-dark rounded-pill">
                Read More
              </a>
            </div>
            <div class="card-footer text-center p-1">
              <div class="col ps-2 pe-2">
                <p class="m-0">
                  Thursday, 6th of October 2022
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col pt-2">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endsection
