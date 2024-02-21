@extends('layouts.shop')

@section('site title')
INNWA IT & Mobile - Shop
@endsection

@section('productSection')
<div class="row">
  <div class="col-xl-2 col-lg-3 bg-gray border-xl-end border-lg-end border-md-bottom">
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
                <div class="col p-2">
                  <div class="accordion" id="mainCategoriesAccordion">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="mainCategoriesCollapseHeading">
                        <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#mainCategoriesCollapse" aria-expanded="true" aria-controls="mainCategoriesCollapse">
                          Categories
                        </button>
                      </h2>
                      <div id="mainCategoriesCollapse" class="accordion-collapse collapse show" aria-labelledby="mainCategoriesCollapseHeading" data-bs-parent="#mainCategoriesCollapse">
                        <div class="accordion-body">
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Laptop">
                            <label class="form-check-label">
                              Laptop
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Smartphone">
                            <label class="form-check-label">
                              Smartphone
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Apple">
                            <label class="form-check-label">
                              Apple
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Computer">
                            <label class="form-check-label">
                              Computer
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Tablet">
                            <label class="form-check-label">
                              Tablet
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Smartwatch">
                            <label class="form-check-label">
                              Smartwatch
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Speaker">
                            <label class="form-check-label">
                              Speaker
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Smartphone">
                            <label class="form-check-label">
                              Smartphone
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Headphone">
                            <label class="form-check-label">
                              Headphone
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Earphone">
                            <label class="form-check-label">
                              Earphone
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Microphone">
                            <label class="form-check-label">
                              Microphone
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Projector">
                            <label class="form-check-label">
                              Projector
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Printer">
                            <label class="form-check-label">
                              Printer
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Scanner">
                            <label class="form-check-label">
                              Scanner
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="CCTV">
                            <label class="form-check-label">
                              CCTV
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col p-2">
                  <div class="accordion" id="brandAccordion">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="brandCollapseHeading">
                        <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#brandCollapse" aria-expanded="true" aria-controls="brandCollapse">
                          Brand
                        </button>
                      </h2>
                      <div id="brandCollapse" class="accordion-collapse collapse" aria-labelledby="brandCollapseHeading" data-bs-parent="#brandCollapse">
                        <div class="accordion-body">
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Asus">
                            <label class="form-check-label">
                              Asus
                            </label>
                          </div>
                          <div class="accordion-item border-0">
                            <h2 class="accordion-header" id="lenovoBrandCollapseHeading">
                              <button class="accordion-button bg-white shadow-none pt-0 pb-0 ps-0 pe-0 mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#lenovoBrandCollapse" aria-expanded="true" aria-controls="lenovoBrandCollapse">
                                <input type="checkbox" class="form-check-input" value="Apple">
                                <label class="form-check-label ps-2">
                                  Apple
                                </label>
                              </button>
                            </h2>
                            <div id="lenovoBrandCollapse" class="accordion-collapse collapse" aria-labelledby="lenovoBrandCollapseHeading" data-bs-parent="#lenovoBrandCollapse">
                              <div class="accordion-body p-0">
                                <div class="col pt-2 pb-2 ps-4 pe-2">
                                  <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" value="iPhone">
                                    <label class="form-check-label">
                                      iPhone
                                    </label>
                                  </div>
                                  <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" value="iPad">
                                    <label class="form-check-label">
                                      iPad
                                    </label>
                                  </div>
                                  <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" value="MacBook">
                                    <label class="form-check-label">
                                      MacBook
                                    </label>
                                  </div>
                                  <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" value="iMac">
                                    <label class="form-check-label">
                                      iMac
                                    </label>
                                  </div>
                                  <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" value="Apple Watch">
                                    <label class="form-check-label">
                                      Apple Watch
                                    </label>
                                  </div>
                                  <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" value="AirPods">
                                    <label class="form-check-label">
                                      AirPods
                                    </label>
                                  </div>
                                  <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" value="Accessories">
                                    <label class="form-check-label">
                                      Accessories
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Lenovo">
                            <label class="form-check-label">
                              Lenovo
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Asus">
                            <label class="form-check-label">
                              Asus
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col p-2">
                  <div class="accordion" id="mobileAccordion">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="mobileCollapseHeading">
                        <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#mobileCollapse" aria-expanded="true" aria-controls="mobileCollapse">
                          Mobile
                        </button>
                      </h2>
                      <div id="mobileCollapse" class="accordion-collapse collapse" aria-labelledby="mobileCollapseHeading" data-bs-parent="#mobileCollapse">
                        <div class="accordion-body">
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Samsung">
                            <label class="form-check-label">
                              Samsung
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Apple">
                            <label class="form-check-label">
                              Apple
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Xiaomi">
                            <label class="form-check-label">
                              Xiaomi
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Oppo">
                            <label class="form-check-label">
                              Oppo
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col p-2">
                  <div class="accordion" id="computerAccordion">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="computerCollapseHeading">
                        <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#computerCollapse" aria-expanded="true" aria-controls="computerCollapse">
                          Computer
                        </button>
                      </h2>
                      <div id="computerCollapse" class="accordion-collapse collapse" aria-labelledby="computerCollapseHeading" data-bs-parent="#computerCollapse">
                        <div class="accordion-body">
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Desktop PC">
                            <label class="form-check-label">
                              Desktop PC
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Monitor">
                            <label class="form-check-label">
                              Monitor
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Processor (CPU)">
                            <label class="form-check-label">
                              Processor (CPU)
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Graphic Card">
                            <label class="form-check-label">
                              Graphic Card
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Motherboard">
                            <label class="form-check-label">
                              Motherboard
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Memory (RAM)">
                            <label class="form-check-label">
                              Memory (RAM)
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Storage Devices">
                            <label class="form-check-label">
                              Storage Devices
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Keyboard">
                            <label class="form-check-label">
                              Keyboard
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Mouse">
                            <label class="form-check-label">
                              Mouse
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col p-2">
                  <div class="accordion" id="scannerAccordion">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="scannerCollapseHeading">
                        <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#scannerCollapse" aria-expanded="true" aria-controls="scannerCollapse">
                          Scanner
                        </button>
                      </h2>
                      <div id="scannerCollapse" class="accordion-collapse collapse" aria-labelledby="scannerCollapseHeading" data-bs-parent="#scannerCollapse">
                        <div class="accordion-body">
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Scanner">
                            <label class="form-check-label">
                              Scanner
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" value="Barcode Scanner">
                            <label class="form-check-label">
                              Barcode Scanner
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col p-2">
                    <div class="accordion" id="printerAccordion">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="printerCollapseHeading">
                          <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#printerCollapse" aria-expanded="true" aria-controls="printerCollapse">
                            Printer
                          </button>
                        </h2>
                        <div id="printerCollapse" class="accordion-collapse collapse" aria-labelledby="printerCollapseHeading" data-bs-parent="#printerCollapse">
                          <div class="accordion-body">
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" value="Printer">
                                <label class="form-check-label">
                                  Printer
                                </label>
                              </div>
                              <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" value="Barcode Printer">
                                <label class="form-check-label">
                                  Barcode Printer
                                </label>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <div class="col-xl-10 col-lg-9">
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
