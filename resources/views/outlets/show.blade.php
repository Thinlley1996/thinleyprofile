@extends('admin.index')

@section('title', __('outlet.detail'))

@section('content')
<main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              Marker {{ $outlet->name }} details
            </h2>
            <div class="grid gap-6 mb-8 md:grid-cols-2">
              <div
                class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
              >
              <table class="w-full whitespace-no-wrap">
                    <tbody >
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"><th class="px-4 py-3">{{ __('Location Name') }}</th><td class="text-gray-700 dark:text-gray-400">{{ $outlet->name }}</td></tr>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"><th class="px-4 py-3">{{ __('Address') }}</th><td class="text-gray-700 dark:text-gray-400">{{ $outlet->address }}</td></tr>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"><th class="px-4 py-3">{{ __('Contact') }}</th><td class="text-gray-700 dark:text-gray-400">{{ $outlet->contact }}</td></tr>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"><th class="px-4 py-3">{{ __('Type') }}</th><td class="text-gray-700 dark:text-gray-400">{{ $outlet->type }}</td></tr>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"><th class="px-4 py-3">{{ __('Latitude') }}</th><td class="text-gray-700 dark:text-gray-400">{{ $outlet->longitude }}</td></tr>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"><th class="px-4 py-3">{{ __('Longitude') }}</th><td class="text-gray-700 dark:text-gray-400">{{ $outlet->longitude }}</td></tr>
                    </tbody>
                </table>
           
            <div class="px-4 py-3">
                @can('update', $outlet)
                    <a href="{{ route('outlets.edit', $outlet) }}" id="edit-outlet-{{ $outlet->id }}"  class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">{{ __('Edit Marker') }}</a>
                @endcan
                @if(auth()->check())
                    <a href="{{ route('outlets.index') }}"  class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">{{ __('Go Back') }}</a>
                @else
                    <a href="{{ url('/map') }}"  class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">{{ __('Go Back') }}</a>
                @endif
            </div>
            </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">  <h2 class=" text-2xl font-semibold text-gray-700 dark:text-gray-200">{{ trans('Marker Location') }}</h2></div>
            @if ($outlet->coordinate)
            <div class="card-body" id="mapid"></div>
            @else
            <div class="card-body">{{ __('Marker Coordinate') }}</div>
            @endif
        </div>
</div>
</main>
@endsection

@section('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>

<style>
    #mapid { height: 400px; }
</style>
@endsection
@push('scripts')
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>

<script>
    var map = L.map('mapid').setView([{{ $outlet->latitude }}, {{ $outlet->longitude }}], {{ config('leaflet.detail_zoom_level') }});

    L.tileLayer('', {
      
    }).addTo(map);

    L.marker([{{ $outlet->latitude }}, {{ $outlet->longitude }}]).addTo(map)
        .bindPopup('{!! $outlet->map_popup_content !!}');
</script>
@endpush
