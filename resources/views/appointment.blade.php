@extends('layouts.service')

@section('site title')
INNWA IT & Mobile - Service
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-6 mx-auto pt-3 pb-3 m-auto">
        <img src="{{asset('public/img-src/appointment/3900328.jpg')}}" class="img-fluid" alt="appointment">
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 mx-auto pt-3 pb-3">
        <div class="col text-center">
          <h5 class="p-2 m-0">
            Make An <strong class="text-primary">Appointment</strong>
          </h5>
          <p>
            Ask Service you want to know
          </p>
          <form>
            <div class="col mb-2">
              <input type="text" placeholder="Name" class="form-control">
            </div>
            <div class="col mb-2">
              <input type="email" placeholder="Email" class="form-control">
            </div>
            <div class="col mb-2">
              <input type="text" placeholder="Phone" class="form-control">
            </div>
            <div class="col mb-2">
              <textarea placeholder="Address" class="form-control" rows="1"></textarea>
            </div>
            <div class="col mb-2">
              <p class="p-2 m-0 text-start">
                Problem Category
              </p>
              <select class="form-select" aria-label="Default select example">
                <option value="">Choose Service</option>
                <option value="desktop">Desktop</option>
                <option value="laptop">Laptop</option>
                <option value="phone">Phone</option>
                <option value="printer">Printer</option>
                <option value="printer">Projector</option>
                <option value="speaker">Speaker</option>
                <option value="webcam">Webcam</option>
                <option value="microphone">Microphone</option>
              </select>
            </div>
            <div class="col mb-2">
              <input type="date" class="form-control">
            </div>
            <div class="col mb-2">
              <input type="time" class="form-control">
            </div>
            <div class="col mb-2">
              <textarea placeholder="Problem Message" class="form-control"></textarea>
            </div>
            <div class="col text-center">
              <button type="button" class="btn btn-outline-primary rounded-pill">
                Book
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
