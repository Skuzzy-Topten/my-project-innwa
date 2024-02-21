@extends('layouts.shop')

@section('site title')
INNWA IT & Mobile - Shop Archive
@endsection

@section('productSection')
<div class="row">
  <div class="col-xl-3 col-lg-3 bg-gray border-xl-end border-lg-end border-md-bottom">
    <div class="col pt-3 pb-3">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <button class="navbar-toggler m-auto border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas" aria-controls="offcanvasNavbar">
            <i class="fa-solid fa-filter text-danger"></i> <span class="text-dark">Filter</span>
          </button>
          <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarOffcanvas" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Filter</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <form>
                <div class="col mb-2">
                  <span class="badge bg-dark">
                    PRICE
                  </span>
                </div>
                <div class="col mb-2">
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Lower than 500,000 MMK
                    </label>
                  </div>
                </div>
                <div class="col mb-2">
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Between 500,000 MMK and 1,000,000 MMK
                    </label>
                  </div>
                </div>
                <div class="col mb-2">
                  <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="Maximum Price">
                    <button type="button" class="btn btn-outline-primary">
                      Apply
                    </button>
                  </div>
                </div>
                <div class="col mt-4 mb-2">
                  <span class="badge bg-dark">
                    BRAND
                  </span>
                </div>
                <div class="col mb-2">
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Apple
                    </label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Samsung
                    </label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Huawei
                    </label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      MI
                    </label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Oppo
                    </label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Vivo
                    </label>
                  </div>
                </div>
                <div class="col mt-4 mb-2">
                  <span class="badge bg-dark">
                    COLORS
                  </span>
                </div>
                <div class="col mb-2">
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Choose Color
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body bg-light">
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <button type="button" class="btn btn-sm rounded-circle p-2" style="background: black;"></button><span class="text-dark ps-2 pe-2">Black</span>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <button type="button" class="btn btn-sm rounded-circle p-2" style="background: red;"></button><span class="text-dark ps-2 pe-2">Red</span>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <button type="button" class="btn btn-sm rounded-circle p-2" style="background: green;"></button><span class="text-dark ps-2 pe-2">Green</span>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <button type="button" class="btn btn-sm rounded-circle p-2" style="background: pink;"></button><span class="text-dark ps-2 pe-2">Pink</span>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <button type="button" class="btn btn-sm rounded-circle p-2" style="background: blue;"></button><span class="text-dark ps-2 pe-2">Blue</span>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <button type="button" class="btn btn-sm rounded-circle p-2" style="background: yellow;"></button><span class="text-dark ps-2 pe-2">Yellow</span>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <button type="button" class="btn btn-sm rounded-circle p-2" style="background: purple;"></button><span class="text-dark ps-2 pe-2">Purple</span>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <button type="button" class="btn btn-sm rounded-circle p-2" style="background: white;"></button><span class="text-dark ps-2 pe-2">White</span>
                                </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col mt-4 mb-2">
                  <span class="badge bg-dark">
                    RAM
                  </span>
                </div>
                <div class="col mb-2">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Choose</option>
                    <option value="2 GB">2 GB</option>
                    <option value="4 GB">4 GB</option>
                    <option value="6 GB">6 GB</option>
                    <option value="8 GB">8 GB</option>
                    <option value="16 GB">16 GB</option>
                  </select>
                </div>
                <div class="col mt-4 mb-2">
                  <span class="badge bg-dark">
                    STORAGE
                  </span>
                </div>
                <div class="col mb-2">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Choose</option>
                    <option value="32 GB">32 GB</option>
                    <option value="64 GB">64 GB</option>
                    <option value="128 GB">128 GB</option>
                    <option value="256 GB">256 GB</option>
                    <option value="512 GB">512 GB</option>
                    <option value="1 TB">1 TB</option>
                  </select>
                </div>
              </form>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <div class="col-xl-9 col-lg-9">
      <div class="row pt-3 ps-2 pe-2">
          <div class="col-md-3 ms-auto p-2">
              <select class="form-select" aria-label="Default select example">
                  <option selected>Default Sorting</option>
                  <option value="PLTH">Sort by Price: low to high</option>
                  <option value="PHTL">Sort by Price: high to low</option>
                </select>
          </div>
      </div>
    <div class="row pt-3 pb-3 ps-2 pe-2">
      <div class="col-xl-3 col-md-6">
        <div class="card pt-2 pb-2 mb-2">
          <div class="card-header bg-white border-0 text-center p-1">
            <span class="badge text-bg-primary position-absolute top-0 start-0 mt-2 ms-2">
              New
            </span>
            <img src="{{asset('public/img-src/shop/iphone 14 pro.png')}}" alt="iphone 14" class="shopImage">
            <button type="button" class="btn btn-sm btn-outline-danger rounded-circle position-absolute top-0 end-0 mt-2 me-2">
              <i class="fa-solid fa-heart"></i>
            </button>
            <button type="button" class="btn btn-sm btn-outline-primary rounded-circle position-absolute top-0 end-0 mt-5 me-2">
              <i class="fa-solid fa-eye"></i>
            </button>
          </div>
          <div class="card-body p-1">
            <div class="col text-center">
              <h5 class="p-2 m-0 text-danger">
                999,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="col">
              <h5 class="p-2 m-0">
                iPhone 14 Pro
              </h5>
            </div>
            <div class="col">
              <p class="p-2 m-0">
                Brighter 6.1” Super Retina XDR display¹ featuring Always-On, which keeps your info at a glance...
              </p>
            </div>
            <div class="col p-2">
              <a href="#" class="badge text-bg-dark text-decoration-none">
                Apple
              </a>
              <a href="#" class="badge text-bg-dark text-decoration-none">
                Phone
              </a>
            </div>
          </div>
          <div class="card-footer bg-white border-0 p-1">
            <div class="col text-center">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card pt-2 pb-2 mb-2">
          <div class="card-header bg-white border-0 text-center p-1">
            <span class="badge text-bg-primary position-absolute top-0 start-0 mt-2 ms-2">
              New
            </span>
            <img src="{{asset('public/img-src/shop/galaxy zfold 4.png')}}" alt="galaxy zfold 4" class="shopImage">
            <button type="button" class="btn btn-sm btn-outline-danger rounded-circle position-absolute top-0 end-0 mt-2 me-2">
              <i class="fa-solid fa-heart"></i>
            </button>
            <button type="button" class="btn btn-sm btn-outline-primary rounded-circle position-absolute top-0 end-0 mt-5 me-2">
              <i class="fa-solid fa-eye"></i>
            </button>
          </div>
          <div class="card-body p-1">
            <div class="col text-center">
              <h5 class="p-2 m-0 text-danger">
                799,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="col">
              <h5 class="p-2 m-0">
                Galaxy Z Fold 4
              </h5>
            </div>
            <div class="col">
              <p class="p-2 m-0">
                Does a lot in one hand with its 6.2-inch Cover Screen.1 In both hands, the 7.6-inch Main Screen makes...
              </p>
            </div>
            <div class="col p-2">
              <a href="#" class="badge text-bg-dark text-decoration-none">
                Samsung
              </a>
              <a href="#" class="badge text-bg-dark text-decoration-none">
                Phone
              </a>
            </div>
          </div>
          <div class="card-footer bg-white border-0 p-1">
            <div class="col text-center">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card pt-2 pb-2 mb-2">
          <div class="card-header bg-white border-0 text-center p-1">
            <span class="badge text-bg-primary position-absolute top-0 start-0 mt-2 ms-2">
              New
            </span>
            <img src="{{asset('public/img-src/shop/macbook air with m2 chip.png')}}" alt="macbook air" class="shopImage">
            <button type="button" class="btn btn-sm btn-outline-danger rounded-circle position-absolute top-0 end-0 mt-2 me-2">
              <i class="fa-solid fa-heart"></i>
            </button>
            <button type="button" class="btn btn-sm btn-outline-primary rounded-circle position-absolute top-0 end-0 mt-5 me-2">
              <i class="fa-solid fa-eye"></i>
            </button>
          </div>
          <div class="card-body p-1">
            <div class="col text-center">
              <h5 class="p-2 m-0 text-danger">
                1,199,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="col">
              <h5 class="p-2 m-0">
                Macbook Air
              </h5>
            </div>
            <div class="col">
              <p class="p-2 m-0">
                All-new strikingly thin design so you can work, play, or create just about anything — anywhere...
              </p>
            </div>
            <div class="col p-2">
              <a href="#" class="badge text-bg-dark text-decoration-none">
                Apple
              </a>
              <a href="#" class="badge text-bg-dark text-decoration-none">
                Laptop
              </a>
            </div>
          </div>
          <div class="card-footer bg-white border-0 p-1">
            <div class="col text-center">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card pt-2 pb-2 mb-2">
          <div class="card-header bg-white border-0 text-center p-1">
            <span class="badge text-bg-primary position-absolute top-0 start-0 mt-2 ms-2">
              New
            </span>
            <img src="{{asset('public/img-src/shop/msi summit e14.png')}}" alt="msi summit e14" class="shopImage">
            <button type="button" class="btn btn-sm btn-outline-danger rounded-circle position-absolute top-0 end-0 mt-2 me-2">
              <i class="fa-solid fa-heart"></i>
            </button>
            <button type="button" class="btn btn-sm btn-outline-primary rounded-circle position-absolute top-0 end-0 mt-5 me-2">
              <i class="fa-solid fa-eye"></i>
            </button>
          </div>
          <div class="card-body p-1">
            <div class="col text-center">
              <h5 class="p-2 m-0 text-danger">
                1,899,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="col">
              <h5 class="p-2 m-0">
                MSI Summit E14
              </h5>
            </div>
            <div class="col">
              <p class="p-2 m-0">
                MSI Summit E14 A11SCS-088 14" UHD Ultra Thin and Light Professional Laptop Intel Core i7...
              </p>
            </div>
            <div class="col p-2">
              <a href="#" class="badge text-bg-dark text-decoration-none">
                MSI
              </a>
              <a href="#" class="badge text-bg-dark text-decoration-none">
                Laptop
              </a>
            </div>
          </div>
          <div class="card-footer bg-white border-0 p-1">
            <div class="col text-center">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row p-2">
      <div class="col-xl-3 col-md-6">
        <div class="card pt-2 pb-2 mb-2">
          <div class="card-header bg-white border-0 text-center p-1">
            <img src="{{asset('public/img-src/shop/ryzen 7.png')}}" alt="amd ryzen 7 5700x" class="shopImage">
            <button type="button" class="btn btn-sm btn-outline-danger rounded-circle position-absolute top-0 end-0 mt-2 me-2">
              <i class="fa-solid fa-heart"></i>
            </button>
            <button type="button" class="btn btn-sm btn-outline-primary rounded-circle position-absolute top-0 end-0 mt-5 me-2">
              <i class="fa-solid fa-eye"></i>
            </button>
          </div>
          <div class="card-body p-1">
            <div class="col text-center">
              <h5 class="p-2 m-0 text-danger">
                317,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="col">
              <h5 class="p-2 m-0">
                AMD Ryzen 7 5700X
              </h5>
            </div>
            <div class="col">
              <p class="p-2 m-0">
                16-Thread Unlocked Desktop Processor, Ceramic Gray 4.6 GHz Max Boost, unlocked for...
              </p>
            </div>
            <div class="col p-2">
              <a href="#" class="badge text-bg-dark text-decoration-none">
                Ryzen
              </a>
              <a href="#" class="badge text-bg-dark text-decoration-none">
                Processor
              </a>
            </div>
          </div>
          <div class="card-footer bg-white border-0 p-1">
            <div class="col text-center">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card pt-2 pb-2 mb-2">
          <div class="card-header bg-white border-0 text-center p-1">
            <img src="{{asset('public/img-src/shop/aorus elite ax v2.png')}}" alt="aorus elite ax v2" class="shopImage">
            <button type="button" class="btn btn-sm btn-outline-danger rounded-circle position-absolute top-0 end-0 mt-2 me-2">
              <i class="fa-solid fa-heart"></i>
            </button>
            <button type="button" class="btn btn-sm btn-outline-primary rounded-circle position-absolute top-0 end-0 mt-5 me-2">
              <i class="fa-solid fa-eye"></i>
            </button>
          </div>
          <div class="card-body p-1">
            <div class="col text-center">
              <h5 class="p-2 m-0 text-danger">
                238,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="col">
              <h5 class="p-2 m-0">
                AORUS ELITE AX V2
              </h5>
            </div>
            <div class="col">
              <p class="p-2 m-0">
                AMD Ryzen 5000/B550/ATX/True 12+2 Phases Digital VRM/PCIe4.0/DDR4...
              </p>
            </div>
            <div class="col p-2">
              <a href="#" class="badge text-bg-dark text-decoration-none">
                Gigabyte
              </a>
              <a href="#" class="badge text-bg-dark text-decoration-none">
                Motherboard
              </a>
            </div>
          </div>
          <div class="card-footer bg-white border-0 p-1">
            <div class="col text-center">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card pt-2 pb-2 mb-2">
          <div class="card-header bg-white border-0 text-center p-1">
            <img src="{{asset('public/img-src/shop/trident z5.png')}}" alt="trident z5 neo rgb" class="shopImage">
            <button type="button" class="btn btn-sm btn-outline-danger rounded-circle position-absolute top-0 end-0 mt-2 me-2">
              <i class="fa-solid fa-heart"></i>
            </button>
            <button type="button" class="btn btn-sm btn-outline-primary rounded-circle position-absolute top-0 end-0 mt-5 me-2">
              <i class="fa-solid fa-eye"></i>
            </button>
          </div>
          <div class="card-body p-1">
            <div class="col text-center">
              <h5 class="p-2 m-0 text-danger">
                1,199,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="col">
              <h5 class="p-2 m-0">
                Trident Z5 NEO RGB
              </h5>
            </div>
            <div class="col">
              <p class="p-2 m-0">
                Trident Z5 NEO RGB Series, designed specifically for AMD X670 Series with Ryzen 7000 Series CPU...
              </p>
            </div>
            <div class="col p-2">
              <a href="#" class="badge text-bg-dark text-decoration-none">
                G.Skill
              </a>
              <a href="#" class="badge text-bg-dark text-decoration-none">
                RAM
              </a>
            </div>
          </div>
          <div class="card-footer bg-white border-0 p-1">
            <div class="col text-center">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card pt-2 pb-2 mb-2">
          <div class="card-header bg-white border-0 text-center p-1">
            <img src="{{asset('public/img-src/shop/ryzen 5.png')}}" alt="ryzen 5" class="shopImage">
            <button type="button" class="btn btn-sm btn-outline-danger rounded-circle position-absolute top-0 end-0 mt-2 me-2">
              <i class="fa-solid fa-heart"></i>
            </button>
            <button type="button" class="btn btn-sm btn-outline-primary rounded-circle position-absolute top-0 end-0 mt-5 me-2">
              <i class="fa-solid fa-eye"></i>
            </button>
          </div>
          <div class="card-body p-1">
            <div class="col text-center">
              <h5 class="p-2 m-0 text-danger">
                217,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="col">
              <h5 class="p-2 m-0">
                Ryzen 5
              </h5>
            </div>
            <div class="col">
              <p class="p-2 m-0">
                5600 6-Core, 12-Thread Unlocked Desktop Processor with Wraith Stealth Cooler, Ceramic Gray...
              </p>
            </div>
            <div class="col p-2">
              <a href="#" class="badge text-bg-dark text-decoration-none">
                Ryzen
              </a>
              <a href="#" class="badge text-bg-dark text-decoration-none">
                Processor
              </a>
            </div>
          </div>
          <div class="card-footer bg-white border-0 p-1">
            <div class="col text-center">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row p-2">
      <div class="col-xl-3 col-md-6">
        <div class="card pt-2 pb-2 mb-2">
          <div class="card-header bg-white border-0 text-center p-1">
            <span class="badge text-bg-primary position-absolute top-0 start-0 mt-2 ms-2">
              New
            </span>
            <img src="{{asset('public/img-src/shop/ipad air 2022.png')}}" alt="apple ipad air" class="shopImage">
            <button type="button" class="btn btn-sm btn-outline-danger rounded-circle position-absolute top-0 end-0 mt-2 me-2">
              <i class="fa-solid fa-heart"></i>
            </button>
            <button type="button" class="btn btn-sm btn-outline-primary rounded-circle position-absolute top-0 end-0 mt-5 me-2">
              <i class="fa-solid fa-eye"></i>
            </button>
          </div>
          <div class="card-body p-1">
            <div class="col text-center">
              <h5 class="p-2 m-0 text-danger">
                1,017,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="col">
              <h5 class="p-2 m-0">
                Apple iPad Air
              </h5>
            </div>
            <div class="col">
              <p class="p-2 m-0">
                (Wi-Fi, 256GB) - Blue (5th Generation) P3 wide colour and an antireflective coating...
              </p>
            </div>
            <div class="col p-2">
              <a href="#" class="badge text-bg-dark text-decoration-none">
                Apple
              </a>
              <a href="#" class="badge text-bg-dark text-decoration-none">
                Tablet
              </a>
            </div>
          </div>
          <div class="card-footer bg-white border-0 p-1">
            <div class="col text-center">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card pt-2 pb-2 mb-2">
          <div class="card-header bg-white border-0 text-center p-1">
            <img src="{{asset('public/img-src/shop/xiaomi pad 5.png')}}" alt="xiaomi pad 5" class="shopImage">
            <button type="button" class="btn btn-sm btn-outline-danger rounded-circle position-absolute top-0 end-0 mt-2 me-2">
              <i class="fa-solid fa-heart"></i>
            </button>
            <button type="button" class="btn btn-sm btn-outline-primary rounded-circle position-absolute top-0 end-0 mt-5 me-2">
              <i class="fa-solid fa-eye"></i>
            </button>
          </div>
          <div class="card-body p-1">
            <div class="col text-center">
              <h5 class="p-2 m-0 text-danger">
                432,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="col">
              <h5 class="p-2 m-0">
                Xiaomi Pad 5
              </h5>
            </div>
            <div class="col">
              <p class="p-2 m-0">
                Xiaomi Pad 5 with WQHD+ 120Hz display, Immersive quad stereo speakers, Qualcomm Snapdragon...
              </p>
            </div>
            <div class="col p-2">
              <a href="#" class="badge text-bg-dark text-decoration-none">
                Xiaomi
              </a>
              <a href="#" class="badge text-bg-dark text-decoration-none">
                Tablet
              </a>
            </div>
          </div>
          <div class="card-footer bg-white border-0 p-1">
            <div class="col text-center">
              <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card pt-2 pb-2 mb-2">
          <div class="card-header bg-white border-0 text-center p-1">
            <img src="{{asset('public/img-src/shop/ds220.png')}}" alt="synology ds220" class="shopImage">
            <button type="button" class="btn btn-sm btn-outline-danger rounded-circle position-absolute top-0 end-0 mt-2 me-2">
              <i class="fa-solid fa-heart"></i>
            </button>
            <button type="button" class="btn btn-sm btn-outline-primary rounded-circle position-absolute top-0 end-0 mt-5 me-2">
              <i class="fa-solid fa-eye"></i>
            </button>
          </div>
          <div class="card-body p-1">
            <div class="col text-center">
              <h5 class="p-2 m-0 text-danger">
                469,000 <small class="fs-6">MMK</small>
              </h5>
            </div>
            <div class="col">
              <h5 class="p-2 m-0">
                Synology DS220
              </h5>
            </div>
            <div class="col">
              <p class="p-2 m-0">
                Average 15 percent boost to computing-intensive applications, RAID 1 setup protects against sudden...
              </div>
              <div class="col p-2">
                <a href="#" class="badge text-bg-dark text-decoration-none">
                  Synology
                </a>
                <a href="#" class="badge text-bg-dark text-decoration-none">
                  Minis
                </a>
              </div>
            </div>
            <div class="card-footer bg-white border-0 p-1">
              <div class="col text-center">
                <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                  <i class="fa-solid fa-basket-shopping"></i> Buy
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card pt-2 pb-2 mb-2">
            <div class="card-header bg-white border-0 text-center p-1">
              <img src="{{asset('public/img-src/shop/pixma e410.png')}}" alt="canon pixma e410" class="shopImage">
              <button type="button" class="btn btn-sm btn-outline-danger rounded-circle position-absolute top-0 end-0 mt-2 me-2">
                <i class="fa-solid fa-heart"></i>
              </button>
              <button type="button" class="btn btn-sm btn-outline-primary rounded-circle position-absolute top-0 end-0 mt-5 me-2">
                <i class="fa-solid fa-eye"></i>
              </button>
            </div>
            <div class="card-body p-1">
              <div class="col text-center">
                <h5 class="p-2 m-0 text-danger">
                  840,000 <small class="fs-6">MMK</small>
                </h5>
              </div>
              <div class="col">
                <h5 class="p-2 m-0">
                  Canon PIXMA E410
                </h5>
              </div>
              <div class="col">
                <p class="p-2 m-0">
                  A4 Wi-Fi All-in-One Inkjet Color Printer. Print, Scan and Copy, Standard print speed (A4)...
                </p>
              </div>
              <div class="col p-2">
                <a href="#" class="badge text-bg-dark text-decoration-none">
                  Canon
                </a>
                <a href="#" class="badge text-bg-dark text-decoration-none">
                  Printer
                </a>
              </div>
            </div>
            <div class="card-footer bg-white border-0 p-1">
              <div class="col text-center">
                <a href="./product-detail" class="btn btn-outline-danger rounded-pill">
                  <i class="fa-solid fa-basket-shopping"></i> Buy
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col p-2">
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
  @endsection
