<div class="container">
  @foreach(config('localized-routes.supported-locales') as $locale)
    @if($locale !== app()->getLocale())
      <a href="{{\Route::localizedUrl($locale)}}">{{ strtoupper($locale) }}</a>
    @endif
  @endforeach
</div>