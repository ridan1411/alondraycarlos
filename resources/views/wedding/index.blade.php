@extends('wedding.layout.main')

@section('main-content')

    @include('wedding.components.loader')

    @include('wedding.components.header')

    @include('wedding.components.main-message')

    @include('wedding.components.welcome')

    @include('wedding.components.event-information')

    @include('wedding.components.parents-godparents')

    {{-- @include('wedding.components.hosting') --}}

    @include('wedding.components.dress-code')

    @include('wedding.components.gift-table')

    @include('wedding.components.notice-assistance')

    @include('wedding.components.gallery')

@endsection
@section('fotter')
    @include('wedding.components.fotter')
@endsection
