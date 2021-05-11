@extends('admin.index')

@section('title', __('Add New Marker'))

@section('content')
<main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
            {{ __('Add New Marker') }}
            </h2>
          <form method="POST" action="{{ route('outlets.store') }}" accept-charset="UTF-8">
           {{ csrf_field() }}
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Location Name') }}</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                        {!! $errors->first('name', '<span class="invalid-feedback" role="alert">:message</span>') !!}
              </label>
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Contact') }}</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" value="{{ old('contact') }}" required>
                        {!! $errors->first('contact', '<span class="invalid-feedback" role="alert">:message</span>') !!}
              </label>
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Address') }}</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" rows="4">{{ old('address') }}</textarea>
                        {!! $errors->first('address', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                </label>
                <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                {{ __('Type') }}
                </span>
                <select
                 name="type" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray{{ $errors->has('type') ? ' is-invalid' : '' }}"
                >
                <option value="Dump-sites">Dump-sites</option>
                <option value="Drop-off Centers">Drop-off Centers</option>
                <option value="Waste collection facilities">Waste collection facilities</option>
                </select>
                {!! $errors->first('type', '<span class="invalid-feedback" role="alert">:message</span>') !!}
              </label>
              
              <label for="latitude" class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Latitude') }}</span>
                <input
                id="latitude"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input{{ $errors->has('latitude') ? ' is-invalid' : '' }}" name="latitude" value="{{ old('latitude', request('latitude')) }}" required>
                  {!! $errors->first('latitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                </label>

              <label for="longitude" class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Longitude') }}</span>
                <input
                id="longitude"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input{{ $errors->has('longitude') ? ' is-invalid' : '' }}" name="longitude" value="{{ old('longitude', request('longitude')) }}" required>
                  {!! $errors->first('longitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                </label>
                <div class="container mt-6 px-6 grid">
                <div id="mapid"></div>
                </div>
             
                    <div class="mt-6 text-center pb-3"> <input value="{{ __('Save') }}"type="submit" class="w-full h-12 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <a href="{{ route('outlets.index') }}" class="w-full h-12 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">{{ __('Cancel') }}</a>
                </div>
            </div>
            </form>
        </main>
@endsection

@section('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>

<style>
    #mapid { height: 300px; }
</style>
@endsection

@push('scripts')
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
<script>
    var mapCenter = [{{ request('latitude', config('leaflet.map_center_latitude')) }}, {{ request('longitude', config('leaflet.map_center_longitude')) }}];
    var map = L.map('mapid').setView(mapCenter, {{ config('leaflet.zoom_level') }});

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker = L.marker(mapCenter).addTo(map);
    function updateMarker(lat, lng) {
        marker
        .setLatLng([lat, lng])
        .bindPopup("Your location :  " + marker.getLatLng().toString())
        .openPopup();
        return false;
    };

    map.on('click', function(e) {
        let latitude = e.latlng.lat.toString().substring(0, 15);
        let longitude = e.latlng.lng.toString().substring(0, 15);
        $('#latitude').val(latitude);
        $('#longitude').val(longitude);
        updateMarker(latitude, longitude);
    });

    var updateMarkerByInputs = function() {
        return updateMarker( $('#latitude').val() , $('#longitude').val());
    }
    $('#latitude').on('input', updateMarkerByInputs);
    $('#longitude').on('input', updateMarkerByInputs);
</script>
@endpush
