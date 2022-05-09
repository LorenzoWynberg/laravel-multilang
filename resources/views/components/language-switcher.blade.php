@foreach(config('localized-routes.supported-locales') as $locale)
    @if($locale !== app()->getLocale())
        <a href="{{route('welcome', [], true, $locale)}}">{{ strtoupper($locale) }}</a>
    @endif
@endforeach