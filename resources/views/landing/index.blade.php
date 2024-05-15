@extends('layouts.layout')

@section('title', 'Ferreterías Universales S.A. | Index')

@section('main')
    @include('landing._partials.hero')

    <!-- Main -->
    <main id="main">

        @include('landing._partials.about')

        @include('landing._partials.services')

        @include('landing._partials.productsLine')

        @include('landing._partials.supplier')

    </main><!-- End main -->

@endsection
