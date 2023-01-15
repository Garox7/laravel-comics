@extends('guest.layouts.base')

@section('content')
    @include('guest.partials.hero')

    @include('guest.partials.product_grid')

    @include('guest.partials.badges')

    @include('guest.partials.sign-up')
@endsection
