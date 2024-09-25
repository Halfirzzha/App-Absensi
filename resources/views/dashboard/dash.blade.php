@extends('layouts.presensi')

@section('toast')
<div class="toast toast-autohide custom-toast-1 toast-primary home-page-toast shadow" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000" data-bs-autohide="true" id="installWrap">
    <div class="toast-body p-4">
      <div class="toast-text me-2">
        <h6 class="text-white">Welcome to our Company!</h6>
        <span class="d-block mb-2">Please clock in<strong> & </strong>out by the hours set by our company policy.</span>
      </div>
    </div>
    <button class="btn btn-close btn-close-white position-absolute p-2" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
@endsection

@section('content')
<div class="container">
    <div class="card mb-4">
      <div class="card-body d-flex align-items-center direction-rtl">
        <div class="card-img-wrap">
          <img src="img/bg-img/2.jpg" alt="">
        </div>
        <div class="card-content">
          <h5 class="mb-3">Absent From Office</h5>
          <a class="btn btn-info" href="/presensi/create">Take Attendance</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="card mb-4">
      <div class="card-body d-flex align-items-center direction-rtl">
        <div class="card-img-wrap">
          <img src="img/bg-img/2.jpg" alt="">
        </div>
        <div class="card-content">
          <h5 class="mb-3">Returning Absence</h5>
          <a class="btn btn-info" href="#">Take absence home</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="card shadow-sm direction-rtl mb-4">
      <div class="card-body">
        <div class="chart-wrapper">
          <div id="donutChart"></div>
        </div>
      </div>
    </div>
  </div>
@endsection
