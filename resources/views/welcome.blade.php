@extends('layouts.main')

@section('title', __('common.welcome.title'))
@section('id', 'welcome')

@section('content')
    <h1>{{ __('common.welcome.msg') }}</h1>
    @include('components.language-switcher')
@endsection
