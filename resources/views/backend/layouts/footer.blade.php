@php
    $setting = \App\Models\Setting::first();
@endphp
<footer class="mt-auto">
    <div class="footer">
        <span class='uppercase'> copy right &copy;@if($setting == null) Demo @else {{$setting->app_name}} @endif  all rights reserve</span>
        <nav class="ltr:ml-auto rtl:mr-auto">
            <a href="#">Support</a>
            <span class="divider">|</span>
            <a href="#" target="_blank">Docs</a>
        </nav>
    </div>
</footer>
