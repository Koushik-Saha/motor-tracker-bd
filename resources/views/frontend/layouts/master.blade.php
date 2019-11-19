<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Moto Tracker</title>
        @include('frontend/layouts/headerScript')
        
    </head>
    
    <body>
        <!-- Preloader -->
        <div class="site-preloader-wrap">
            <div class="cssload-loader"></div>
        </div>
        <!-- End Preloader -->
        
        <!-- Start Main Menu Area -->
        @include('frontend/layouts/header')
        <!-- End Main Menu Area -->
        
        <!-- SearchBox Modal -->
        <div id="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="SEARCH KEYWORD(s)" />
                <button type="submit" class="btn theme-btn"><i class="fa fa-search"></i> Search</button>
            </form>
        </div>
        <!-- End SearchBox Modal -->
        
        @yield('content')
        
        <!-- Footer Area -->
         @include('frontend/layouts/footer')
         <!-- End Footer Area -->
        
        <!-- Back Top top -->
        <a href="#content" class="back-to-top">Top</a>
        <!-- End Back Top top -->
        
        @include('frontend/layouts/footerScript')
        
    </body>
</html>