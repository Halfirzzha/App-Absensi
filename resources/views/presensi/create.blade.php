@extends('layouts.presensi')

@section('header')
<div class="header-area" id="headerArea">
    <div class="container">
        <!-- Header Content -->
        <div class="header-content position-relative d-flex align-items-center justify-content-between">
            <!-- Back Button -->
            <div class="back-button">
                <a href="{{ url('/') }}">
                    <i class="bi bi-arrow-left-short"></i>
                </a>
            </div>

            <!-- Page Title -->
            <div class="page-heading mx-auto">
                <h6 class="mb-0">Photo</h6>
            </div>
        </div>
    </div>
</div>
<style>
    .webcam-container,
    .webcam-container video {
        display: inline-block;
        width: 100% !important;
        margin: auto;
        height: auto !important;
        border-radius: 15px;
    }

    #map {
        height: 180px;
    }
</style>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<!-- Add jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <input type="text" id="lokasi">
            <div id="camera" class="webcam-container"></div>
        </div>
        <div class="card">
            <button class="btn m-1 btn-primary btn-block" id="takeabsen">
                <i class="bi bi-camera me-2"></i> Time Attendance
            </button>
        </div>
    </div>
</div>
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <div id="map"></div>
        </div>
    </div>
</div>
@stack('MyScriptCam')
@endsection

@push('MyScriptCam')
<script>
    // Set up the webcam with desired settings
    Webcam.set({
        width: 480,
        height: 640,
        image_format: 'jpeg',
        jpeg_quality: 80
    });

    // Attach the webcam to the specified HTML element
    Webcam.attach('#camera');

    // Get the location input element
    var lokasi = document.getElementById('lokasi');

    // Check if geolocation is supported and get the current position
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
    } else {
        console.error("Geolocation is not supported by this browser.");
    }

    // Success callback for geolocation
    function successCallback(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        lokasi.value = latitude + ',' + longitude;

        // Initialize the map
        var map = L.map('map').setView([latitude, longitude], 13);

        // Set up the tile layer
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Add a marker to the map
        L.marker([latitude, longitude]).addTo(map);

        // Add a circle to the map
        L.circle([latitude, longitude], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 20
        }).addTo(map);
    }

    // Error callback for geolocation
    function errorCallback(error) {
        console.error("Geolocation error: ", error);
    }

    // Define the image variable outside the function
    var image;

    // Take a picture when the button is clicked
    $("#takeabsen").click(function(e){
        Webcam.snap(function(uri) {
            image = uri;
        });
        var lokasi = $("#lokasi").val();
        $.ajax({
            type: 'POST',
            url: '/presensi/store',
            data: {
                '_token': '{{ csrf_token() }}',
                'image': image,
                'lokasi': lokasi
            }
            , cache: false
            , success: function(respond) {
                if (respond == 0) {
                    alert('Berhasil');
                } else{
                    alert('Gagal Atau ada masalah');
                }
            }
        });

    });
</script>
@endpush
