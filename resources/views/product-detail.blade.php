@extends('layouts.product-detail')

@section('site title')
INNWA IT & Mobile - Product Detail
@endsection

@section('productDetail')
<div class="container">
  <div class="col pt-3">
    <div class="col text-center pt-3 pb-3">
        <a href="https://innwa.skuzzy.webstarterz.com/" class="text-decoration-none p-2">Home</a> <i class="fa-solid fa-circle-chevron-right ps-2 pe-2"></i> <a href="https://innwa.skuzzy.webstarterz.com/shop-archive" class="text-decoration-none p-2">Main Category</a> <i class="fa-solid fa-circle-chevron-right ps-2 pe-2"></i> <span class="p-2">Current Product Name</span>
    </div>
  </div>
  <div class="row pt-3 pb-3">
    <div class="col-xl-6 col-lg-6">
      <div class="col pt-2 pb-2">
        <div class="main-show" href="{{asset('public/img-src/products/details/iphone 14 pro/p01.png')}}">
          <img src="{{asset('public/img-src/products/details/iphone 14 pro/p01.png')}}" id="show-img" class="rounded">
        </div>
        <div class="small-img">
          <img src="{{asset('public/image-zoom/img/left-arrow.png')}}" class="icon-left" alt="" id="prev-img">
          <div class="small-container">
            <div id="small-img-roll">
              <img src="{{asset('public/img-src/products/details/iphone 14 pro/p01.png')}}" class="show-small-img" alt="product image">
              <img src="{{asset('public/img-src/products/details/iphone 14 pro/p02.png')}}" class="show-small-img" alt="product image">
              <img src="{{asset('public/img-src/products/details/iphone 14 pro/p03.png')}}" class="show-small-img" alt="product image">
              <img src="{{asset('public/img-src/products/details/iphone 14 pro/p04.png')}}" class="show-small-img" alt="product image">
              <img src="{{asset('public/img-src/products/details/iphone 14 pro/p05.png')}}" class="show-small-img" alt="product image">
              <img src="{{asset('public/img-src/products/details/iphone 14 pro/p06.png')}}" class="show-small-img" alt="product image">
              <img src="{{asset('public/img-src/products/details/iphone 14 pro/p07.png')}}" class="show-small-img" alt="product image">
              <img src="{{asset('public/img-src/products/details/iphone 14 pro/p08.png')}}" class="show-small-img" alt="product image">
            </div>
          </div>
          <img src="{{asset('public/image-zoom/img/right-arrow.png')}}" class="icon-right" alt="" id="next-img">
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-lg-6">
      <div class="col p-2">
        <span class="badge text-bg-primary">New</span>
      </div>
      <div class="col">
        <h5 class="p-2 m-0">
          iPhone 14 PRO
        </h5>
      </div>
      <div class="col">
        <p class="p-2 m-0">
          iPhone 14 Pro and iPhone 14 Pro Max do not include a power adapter or EarPods.
          Included in the box is a USB‑C to Lightning Cable that supports fast charging and is compatible with USB‑C power adapters and computer ports.
        </p>
      </div>
      <div class="col">
        <p class="p-2 m-0">
          Categories - <a href="#" class="text-primary text-decoration-none">Smartphone</a>
        </p>
        <p class="p-2 m-0">
          Brand - <a href="#" class="text-primary text-decoration-none">Apple</a>
        </p>
      </div>
      <div class="col p-2">
        <form>
          <div class="row">
            <div class="col-md-6 mb-2">
              <select class="form-select" aria-label="Default select example">
                <option value="">
                  Color
                </option>
                <option value="deep purple">
                  Deep Purple
                </option>
                <option value="gold">
                  Gold
                </option>
                <option value="silver">
                  Silver
                </option>
                <option value="space black">
                  Space Black
                </option>
              </select>
            </div>
            <div class="col-md-6 mb-2">
              <select class="form-select" aria-label="Default select example">
                <option value="">
                  Storage
                </option>
                <option value="128 GB">
                  128 GB
                </option>
                <option value="256 GB">
                  256 GB
                </option>
                <option value="512 GB">
                  512 GB
                </option>
                <option value="1TB">
                  1 TB
                </option>
              </select>
            </div>
            <div class="col mb-2">
                <div class="sp-quantity">
                  <div class="sp-minus fff"><a class="ddd btn btn-primary" data-multi="-1">-</a></div>
                  <div class="sp-input m-auto">
                    <input type="text" class="quntity-input" value="1" />
                  </div>
                  <div class="sp-plus fff"><a class="ddd btn btn-primary" data-multi="1">+</a></div>
                </div>
                <script>
                    $(".ddd").on("click", function() {
                      var $button = $(this);
                      var $input = $button.closest('.sp-quantity').find("input.quntity-input");
                      $input.val((i, v) => Math.max(0, +v + 1 * $button.data('multi')));
                    });
                </script>
            </div>
          </div>
          <div class="col">
            <h1 class="text-danger pt-2 pb-2 m-0">
              999,000 <small class="fs-4">MMK</small>
            </h1>
          </div>
          <div class="col">
              <table class="table border text-center">
                  <tr>
                      <td>
                         Start 
                      </td>
                      <td class="border-end">
                          1.1.2022
                      </td>
                      <td>
                          End
                      </td>
                      <td>
                          1.2.2022
                      </td>
                  </tr>
              </table>
          </div>
          <div class="row">
              <div class="col-md-6 text-center mb-2">
              <p class="p-2 m-0 border border-warning rounded">
                  Discount - <strong>10,000 MMK</strong>
              </p>
          </div>
          <div class="col-md-6 text-center mb-2">
              <p class="p-2 m-0 border border-info rounded">
                  Cashback - <strong>10,000 MMK</strong>
              </p>
          </div>
          </div>
          <div class="col pt-2 pb-2">
            <button type="submit" class="btn btn-lg btn-primary rounded-pill me-2">
              <i class="fa-solid fa-basket-shopping"></i> Buy
            </button>
            <button type="submit" class="btn btn-danger rounded-pill">
              <i class="fa-solid fa-heart"></i> Wishlist
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="row pt-3 pb-3">
    <nav>
      <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
          <i class="fa-solid fa-circle-info text-danger"></i> Specifications
        </button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
          <i class="fa-solid fa-star text-warning"></i> Reviews
        </button>
      </div>
    </nav>
    <div class="tab-content pt-3" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
        <p class="p-2 m-0">
          As part of our efforts to reach carbon neutrality by 2030, iPhone 14 Pro and iPhone 14 Pro Max do not include a power adapter or EarPods.
          Included in the box is a USB‑C to Lightning Cable that supports fast charging and is compatible with USB‑C power adapters and computer ports.
        </p>
        <p class="p-2 m-0">
          We encourage you to re‑use your current USB‑A to Lightning cables, power adapters, and headphones, which are compatible with these iPhone models. But if you need any new Apple power adapters or headphones, they are available for purchase.
        </p>
        <p class="p-2 m-0">
          App Tracking Transparency lets you decide which apps are allowed to track your activity — it’s just one example of how iPhone is designed to put you in control of what you share and who you share it with
        </p>
        <p class="p-2 m-0">
          If you don’t have cell service or Wi‑Fi, iPhone lets you text emergency services over satellite.2
        </p>
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
        <div class="col-md-6 mx-auto">
          <div class="col">
            <h5 class="p-2 m-0">
              Customer Reviews
            </h5>
          </div>
          <div class="col p-2">
            <form>
              <div class="col rating mb-2">
                <label>
                  <input type="radio" name="stars" value="1" />
                  <span class="icon">★</span>
                </label>
                <label>
                  <input type="radio" name="stars" value="2" />
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                </label>
                <label>
                  <input type="radio" name="stars" value="3" />
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                </label>
                <label>
                  <input type="radio" name="stars" value="4" />
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                </label>
                <label>
                  <input type="radio" name="stars" value="5" />
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                </label>
              </div>
              <div class="input-group mb-2">
                <textarea placeholder="Message" class="form-control" rows="1"></textarea>
                <button type="submit" class="btn btn-outline-dark">
                  Send
                </div>
              </div>
            </form>
            <div class="col p-2">
              <div class="card mb-2">
                <div class="card-header bg-white p-2 border-0">
                  <img src="{{asset('public/img-src/users/pyae phyo aung.png')}}" alt="user profile image" class="reviewProfileImage rounded-circle border shadow p-1 me-2">
                  <span>Pyae Phyo Aung</span>
                </div>
                <div class="card-body p-2">
                  <div class="col ps-2 pe-2">
                    <i class="fa-solid fa-star text-warning"></i> <i class="fa-solid fa-star text-warning"></i> <i class="fa-solid fa-star text-warning"></i> <i class="fa-solid fa-star text-warning"></i>
                  </div>
                  <p class="p-2 m-0">
                    I have used the Apple brand for over 5 years and I'm glad I was able to try something new!
                  </p>
                </div>
              </div>
              <div class="card mb-2">
                <div class="card-header bg-white p-2 border-0">
                  <img src="{{asset('public/img-src/users/shun shun.png')}}" alt="user profile image" class="reviewProfileImage rounded-circle border shadow p-1 me-2">
                  <span>Shun Shun</span>
                </div>
                <div class="card-body p-2">
                  <div class="col ps-2 pe-2">
                    <i class="fa-solid fa-star text-warning"></i> <i class="fa-solid fa-star text-warning"></i>
                  </div>
                  <p class="p-2 m-0">
                    I was looking forward to trying this new iPhone 14, but I was a little disappointed. The colors are not good.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('relatedProduct')
<div class="container">
  <hr>
  <div class="row pt-3 pb-3">
    <div class="col text-center">
      <h5 class="p-2 m-0">
        Related Products
      </h5>
    </div>
    <div class="row pt-3 pb-3 mx-auto">
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
              <button type="submit" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card pt-2 pb-2 mb-2">
          <div class="card-header bg-white border-0 text-center p-1">
            <img src="{{asset('public/img-src/shop/xiaomi pad 5.png')}}" alt="galaxy zfold 4" class="shopImage">
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
              <button type="submit" class="btn btn-outline-danger rounded-pill">
                <i class="fa-solid fa-basket-shopping"></i> Buy
              </button>
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
                Average 15 percent boost to computing-intensive applications, RAID 1 setup protects...
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
                <button type="submit" class="btn btn-outline-danger rounded-pill">
                  <i class="fa-solid fa-basket-shopping"></i> Buy
                </button>
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
                <button type="submit" class="btn btn-outline-danger rounded-pill">
                  <i class="fa-solid fa-basket-shopping"></i> Buy
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
