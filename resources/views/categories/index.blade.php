@extends('layouts.main')

@section('title', __('common.categories.title'))
@section('id', 'welcome')

@section('content')
    <h1>{{ __('common.categories.title') }}</h1>
    @foreach($categories as $c)
			<p>{{ $c->name }}: {{ $c->slug }}</p>
		@endforeach
    @include('components.language-switcher')
@endsection