@extends('layouts.master')

@section('scripts')
    <script src="{{ mix('/js/searchBar.js') }}"></script>
    <script src="{{ mix('/js/hotelAvailability.js') }}"></script>
@endsection()

@section('searchBbar')
    @include('layouts.search_bar')
@endsection