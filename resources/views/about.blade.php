@extends('layouts.about')

@section('site title')
INNWA IT & Mobile - About Us
@endsection

@section('content')
  <div class="container">
    <div class="col pt-3 text-center">
      <h5 class="p-2 m-0">
        <span class="text-danger">INNWA</span><span class="text-primary"> IT & Mobile</span>
      </h5>
    </div>
    <div class="col pb-3">
      <p class="p-2 m-0">
        Golden Mega Technology ( G.M.T ) Co., Ltd. is a leading technology solutions providerand distributor, offering a spectrum of products, services and turnkey solutions.
        We provide innovative Information and Communication Technology ( ICT ) solutions to enchance individuals, small and mid-sized businesses, and large enterprises to successful in planning, employing and managing their IT infrastructure with a broad range of computer products, network applicances, service and solutions designed to fulfill customer needs.
      </p>
    </div>
    <div class="row pt-3 pb-3">
      <div class="col-md-6">
        <div class="col text-center">
          <h5 class="p-2 m-0">
            Our Vision
          </h5>
        </div>
        <div class="col">
          <p class="p-2 m-0">
            G.M.T Co., Ltd will be the premier ICT Solutions Provider. This position will be build on providing best customer experience  with the industry's most reliable, cost-effective and high-value ICT Solutions.
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col text-center">
          <h5 class="p-2 m-0">
            Our Mission
          </h5>
        </div>
        <div class="col">
          <p class="p-2 m-0">
            To provide comprehensive ICT consulting services to corporate clients. To provide reliable, customer oriented and cost effective. ICT deployments. To be the leader in state-of-the-art enterprise network and communication solutions. To become a trusted partner/destributor in the ICT sector.
          </p>
        </div>
      </div>
    </div>
    <div class="row pt-3 pb-3">
      <div class="col-md-4">
        <div class="col text-center">
          <h5 class="p-2 m-0">
            Security
          </h5>
        </div>
        <div class="col">
          Firewall, VPN, Intrusion Detection, Virus Protection, Content Filtering, and Data and Application Security solutions to protext small, medium, cooperate data, as well as to develop secure computing for the consumers.
        </div>
      </div>
      <div class="col-md-4">
        <div class="col text-center">
          <h5 class="p-2 m-0">
            Network
          </h5>
        </div>
        <div class="col">
          Intelligent network infrastructure is taking an even more significant role, which grows with the business. Running network efficiently requires expertise to consult, implement and manage the ICT network infrastructure.
        </div>
      </div>
      <div class="col-md-4">
        <div class="col text-center">
          <h5 class="p-2 m-0">
            Integration
          </h5>
        </div>
        <div class="col">
          Integrated solutions are designed to work together as a unified system, providing better overall performance, quicher respoonse and more efficient management. ICT network resources will be equally accessible nationwide, in distributed environments. Integration leads to effect.
        </div>
      </div>
    </div>
    <div class="row pt-3 pb-3">
      <div class="col-md-6">
        <div class="col text-center">
          <h5 class="p-2 m-0">
            Our Commitments
          </h5>
        </div>
        <div class="col">
          <ul class="list-group text-center">
            <li class="list-group-item border-0">
              Excellent customer care
            </li>
            <li class="list-group-item border-0">
              Quality control
            </li>
            <li class="list-group-item border-0">
              Effective project management
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col text-center">
          <h5 class="p-2 m-0">
            products choices
          </h5>
        </div>
        <div class="col">
          <p class="p-2 m-0">
            Partnering with several key vendors of the PC, Server, accessories and Network equipment suppliers, a wide spectrum of products are available to meet various customers' taste.
          </p>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="col-xl-4 col-lg-4 col-md-6 mx-auto pt-3 pb-3 m-auto">
      <div class="col text-center">
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1uFXyWKsEeopgq4gwNDsvWHKStGCqDPY&ehbc=2E312F" class="myMaps"></iframe>
      </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 mx-auto pt-3 pb-3 m-auto">
      <div class="col text-center">
        <h5 class="p-2 m-0">
          Get In <strong class="text-danger">Touch</strong>
        </h5>
        <p>
          Our friendly team would love to hear from you!
        </p>
      </div>
      <form>
        <div class="col mb-2">
          <input type="text" placeholder="Name" class="form-control">
        </div>
        <div class="col mb-2">
          <input type="email" placeholder="Email" class="form-control">
        </div>
        <div class="col mb-2">
          <input type="text" placeholder="Phone No." class="form-control">
        </div>
        <div class="col mb-2">
          <textarea placeholder="Message" class="form-control" rows="1"></textarea>
        </div>
        <div class="col text-center">
          <button type="submit" class="btn btn-outline-danger rounded-pill">
            Send
          </button>
        </div>
      </form>
    </div>
  </div>
  </div>
@endsection
