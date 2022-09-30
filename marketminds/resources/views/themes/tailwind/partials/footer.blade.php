
<!-- Section 1 -->

<footer class="@if(Request::is('/')){{ 'bg-white' }}@else{{ 'bg-gray-50' }}@endif">
<div class="max-w-6xl xl:max-w-6xl mx-auto px-10 md:px-8">
        <ul class="text-sm font-medium pb-10 sm:pb-20 grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-y-10">
            <li class="space-y-5 row-span-2">
                <h2 class="text-xs tracking-wide uppercase font-bold">Product</h2>
                <ul class="space-y-2 sm:space-y-4 text-md">
                    <li class=""><a class="hover:text-gray-900 transition-colors duration-200 text-xl sm:text-2xl" href="/">Features</a></li>
                    <li class=""><a class="hover:text-gray-900 transition-colors duration-200 text-xl sm:text-2xl" href="/">Integrations</a></li>
                    <li><a class="hover:text-gray-900 transition-colors duration-200 text-xl sm:text-2xl" href="/">Documentation</a></li>
                    <li><a class="hover:text-gray-900 transition-colors duration-200 text-xl sm:text-2xl" href="/">FAQs</a></li>
                </ul>
            </li>
            <li class="space-y-5 row-span-2">
                <h2 class="text-xs tracking-wide uppercase font-bold 2xl:text-white">About</h2>
                <ul class="space-y-2 sm:space-y-4">
                    <li class=""><a class="hover:text-gray-900 transition-colors duration-200 text-xl sm:text-2xl" href="/">Company</a></li>
                    <li class=""><a class="hover:text-gray-900 transition-colors duration-200 text-xl sm:text-2xl" href="/">Privacy</a></li>
                    <li class=""><a class="hover:text-gray-900 transition-colors duration-200 text-xl sm:text-2xl" href="/">Blog</a></li>
                </ul>
            </li>
            <li class="space-y-5 row-span-2">
                <h2 class="text-xs tracking-wide uppercase font-bold">Resources</h2>
                <ul class="space-y-2 sm:space-y-4">
                    <li class=""><a class="hover:text-gray-900 transition-colors duration-200 text-xl sm:text-2xl" href="/">Help Center</a></li>
                    <li class=""><a class="hover:text-gray-900 transition-colors duration-200 text-xl sm:text-2xl" href="/">Developer API</a></li>
                    <li class=""><a class="hover:text-gray-900 transition-colors duration-200 text-xl sm:text-2xl" href="/">Status</a></li>
                    <li class=""><a class="hover:text-gray-900 transition-colors duration-200 text-xl sm:text-2xl" href="/">Sitemap</a></li>
                </ul>
            </li>
            <li class="space-y-5">
                <h2 class="text-xs tracking-wide uppercase font-bold">Social</h2>
                <ul class="space-y-2 sm:space-y-4">
                    <li class=""><a class="hover:text-gray-900 transition-colors duration-200 text-xl sm:text-2xl" href="/">Twitter</a></li>
                    <li class=""><a class="hover:text-gray-900 transition-colors duration-200 text-xl sm:text-2xl" href="/">Facebook</a></li>
                    <li class=""><a class="hover:text-gray-900 transition-colors duration-200 text-xl sm:text-2xl" href="/">Instagram</a></li>
                </ul>
            </li>
        </ul>
        <div class="flex flex-col-reverse justify-between pt-10 sm:pt-8 pb-4 border-t lg:flex-row bg-top border-gray-900">
            <ul class="flex flex-col space-y-1 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
                <li class=""><a href="/" class="text-sm sm:text-base transition-colors duration-300 font-semibold">Privacy Policy</a></li>
                <li class=""><a href="/" class="text-sm sm:text-base transition-colors duration-300 font-semibold">Disclaimers</a></li>
                <li class=""><a href="/" class="text-sm sm:text-base transition-colors duration-300 font-semibold">Terms &amp; Conditions</a></li>
            </ul>
            <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row"><a href="/" class="text-md transition-colors duration-300 hover:text-deep-purple-accent-400 font-semibold tracking-tight">© 2022 Tails.</a></ul>
        </div>
    </div>
</footer>

@if(!auth()->guest() && auth()->user()->hasAnnouncements())
    @include('theme::partials.announcements')
@endif

<!-- Scripts -->
<script src="{{ asset('themes/' . $theme->folder . '/js/app.js') }}"></script>

@yield('javascript')

@if(setting('site.google_analytics_tracking_id', ''))
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ setting("site.google_analytics_tracking_id") }}');
    </script>

@endif
