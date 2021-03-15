<!DOCTYPE html>
<html lang="fr">
<head>

    @include('textile.layouts.parts.metas')
    @include('textile.layouts.parts.links')

</head>

<body>
    <div class="page-wrapper">
      
        @include('textile.layouts.sections.navbar')

        <main class="main">

            @yield('content')

        </main><!-- End .main -->

        @include('textile.layouts.sections.Footer')

    </div>

    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

     @include('textile.layouts.sections.mobileNavbar')

     {{--@include('textile.layouts.sections.newsLatter')--}}

     @include('textile.layouts.parts.scripts')

     <!-------------------------Haymacproduction.ma-------------------------------->
</body>

</html>