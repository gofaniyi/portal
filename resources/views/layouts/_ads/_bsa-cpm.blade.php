@if ($code = config('services.bsa.cpm_code'))
    <!-- BuySellAds Zone Code -->
    <div id="bsap_{{ $code }}" class="bsarocks bsap_{{ config("services.bsa.$ad") }}"></div>
    <!-- End BuySellAds Zone Code -->
@endif
