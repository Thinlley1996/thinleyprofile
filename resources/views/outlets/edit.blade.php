@extends('admin.index')

@section('title', __('Edit Marker'))

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        @if (request('action') == 'delete' && $outlet)
        @can('delete', $outlet)
            <div class="card">
                <div class="card-header">{{ __('Delete') }}</div>
                <div class="card-body">
                    <label class="control-label text-primary">{{ __('Location') }}</label>
                    <p>{{ $outlet->name }}</p>
                    <label class="control-label text-primary">{{ __('Address') }}</label>
                    <p>{{ $outlet->address }}</p>
                    <label class="control-label text-primary">{{ __('Contact') }}</label>
                    <p>{{ $outlet->contact }}</p>
                    <label class="control-label text-primary">{{ __('type') }}</label>
                    <p>{{ $outlet->type }}</p>
                    <label class="control-label text-primary">{{ __('Latitude') }}</label>
                    <p>{{ $outlet->latitude }}</p>
                    <label class="control-label text-primary">{{ __('Longitude') }}</label>
                    <p>{{ $outlet->longitude }}</p>
                    {!! $errors->first('outlet_id', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                </div>
                <hr style="margin:0">
                <div class="card-body text-danger">{{ __('Location delete_confirm') }}</div>
                <div class="card-footer">
                    <form method="POST" action="{{ route('outlets.destroy', $outlet) }}" accept-charset="UTF-8" onsubmit="return confirm(&quot;{{ __('app.delete_confirm') }}&quot;)" class="del-form float-right" style="display: inline;">
                        {{ csrf_field() }} {{ method_field('delete') }}
                        <input name="outlet_id" type="hidden" value="{{ $outlet->id }}">
                        <button type="submit" class="btn btn-danger">{{ __('app.delete_confirm_button') }}</button>
                    </form>
                    <a href="{{ route('outlets.edit', $outlet) }}" class="btn btn-link">{{ __('app.cancel') }}</a>
                </div>
            </div>
        @endcan
        @else
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
            {{ __('Edit') }}
            </h2>
            <form method="POST" action="{{ route('outlets.update', $outlet) }}" accept-charset="UTF-8">
                {{ csrf_field() }} {{ method_field('patch') }}
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Location Name') }}</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $outlet->name) }}" required>
                        {!! $errors->first('name', '<span class="invalid-feedback" role="alert">:message</span>') !!}
              </label>
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Contact') }}</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" value="{{ old('contact', $outlet->contact) }}" required>
                        {!! $errors->first('contact', '<span class="invalid-feedback" role="alert">:message</span>') !!}
              </label>
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Address') }}</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address', $outlet->address) }}">
                        {!! $errors->first('address', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                </label>
                <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                {{ __('Type') }}
                </span>
                <select
                 name="type" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray{{ $errors->has('type') ? ' is-invalid' : '' }}"
                 value="{{ old('type', $outlet->type) }}"
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
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input{{ $errors->has('latitude') ? ' is-invalid' : '' }}" name="latitude" value="{{ old('latitude', $outlet->latitude) }}" required>
                  {!! $errors->first('latitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                </label>

              <label for="longitude" class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Longitude') }}</span>
                <input
                id="longitude"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input{{ $errors->has('longitude') ? ' is-invalid' : '' }}" name="longitude" value="{{ old('longitude', $outlet->longitude) }}" required>
                  {!! $errors->first('longitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                </label>
                <div class="container mt-6 px-6 grid">
                <div id="mapid"></div>
                </div>
             
                    <div class="mt-6 text-center pb-3"> <input value="{{ __('Update') }}"type="submit" class="w-full h-12 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <a href="{{ route('outlets.show', $outlet) }}" class="w-full h-12 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">{{ __('Cancel') }}</a>
                    @can('delete', $outlet)
                        <a href="{{ route('outlets.edit', [$outlet, 'action' => 'delete']) }}" id="del-outlet-{{ $outlet->id }}" class="btn btn-danger float-right">{{ __('Delete') }}</a>
                    @endcan
                </div>
            </div>
            </form>
        </main>
@endif
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
    var mapCenter = [{{ $outlet->latitude }}, {{ $outlet->longitude }}];
    var map = L.map('mapid').setView(mapCenter, {{ config('leaflet.detail_zoom_level') }});

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
