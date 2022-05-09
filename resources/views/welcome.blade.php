@extends('layouts.main')

@section('title', __('common.welcome.title'))
@section('id', 'welcome')

@section('content')
    @include('components.main-nav')
    <div class="container">
        <h1>{{ __('common.welcome.msg') }}</h1>
    </div>
    @include('components.language-switcher')
@endsection
