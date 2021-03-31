<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>

    @include('textile.layouts.parts.metas')

    @include('textile.layouts.parts.links')

    @yield('livewireCss')
    
</head>

<body>
    <div class="page-wrapper">
      
        @include('textile.layouts.sections.navbar')

        <main class="main">

            @yield('content')

        </main>

        @include('textile.layouts.sections.Footer')

    </div>

    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

     @include('textile.layouts.sections.mobileNavbar')

     @yield('livewireJs')
     @include('textile.layouts.parts.scripts')

     

     <!-------------------------Haymacproduction.ma-------------------------------->
</body>

</html>