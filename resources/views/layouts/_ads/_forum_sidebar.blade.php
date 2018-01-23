@if ($code = config('services.bsa.cpm_code'))
    <div style="margin-top:25px;overflow:hidden;">
        <hr>
        <!-- BuySellAds Zone Code -->
        <div id="bsap_{{ config("services.bsa.sidebar_code") }}" class="bsarocks bsap_{{ $code }}"></div>
        <!-- End BuySellAds Zone Code -->
    </div>
@endif
