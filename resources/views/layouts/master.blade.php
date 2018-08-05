@include('partials._header')
		 @include('partials._messages')
        @yield('content')

        {{-- Laravel Mix - JS File --}}
         @include('partials._scripts')
         @stack('scripts')

    </body>
</html>
