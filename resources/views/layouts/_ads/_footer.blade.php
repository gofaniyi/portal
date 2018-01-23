@if ($code = config('services.bsa.cpm_code'))
    <div class="container" style="text-align:center;overflow:hidden;">
        <hr>
        <!-- BuySellAds Zone Code -->
        <div id="bsap_{{ config("services.bsa.footer_code") }}" class="bsarocks bsap_{{ $code }}"
             style="display:block;margin:0 auto;max-width:728px;max-height:90px"></div>
        <!-- End BuySellAds Zone Code -->
    </div>
@endif
