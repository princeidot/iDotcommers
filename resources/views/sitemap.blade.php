<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from lithohtml.themezaa.com/contact-us-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jul 2021 06:44:45 GMT -->
<head>
        <title>iDotcommers - site map</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="">
         <link rel="canonical" href="https://www.idotcommers.com/sitemap/">
        <!-- favicon icon -->
    <link rel="shortcut icon" href="{{url('asset/img/cropped-favicon.webp')}}">
        <link rel="apple-touch-icon" href="{{url('asset/img/cropped-favicon.webp')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{url('asset/img/cropped-favicon.webp')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{url('asset/img/cropped-favicon.webp')}}">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="{{url('asset/css/font-icons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('asset/css/theme-vendors.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('asset/css/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{url('asset/css/responsive.css')}}" />
        <link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />
<style>
 
.col-md-4{
    font-size:30px;font-weight: 700;color:black
}
a, a:active, a:focus {
    color: black;
    
}
a:focus, a:hover {
    text-decoration: none;
    outline: 0;
    outline-offset: 0;
    color: #CD0476;
}
</style>
    <body data-mobile-nav-style="classic">
        <!-- start header -->
        <header>
                               @include('header')
        </header>

    
    </head>

    
        <!-- end header -->
        <!-- start page title -->
        <section class="parallax" data-parallax-background-ratio="0.5" style="background-color: black;height: 50px;">
          
            <div class="container" >
                <div class="row align-items-stretch justify-content-center">
                    <div class="col-12 page-title-large text-center d-flex align-items-center justify-content-center flex-column">
                        
                        <h1 class="alt-font text-white font-weight-500 no-margin-bottom" style="padding-top:50px;font-size:70px;">SiteMap</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="bg-light-gray" style="background-color: white;">
            <div class="container" style="background-color: white;">
                
                  <div class="row" style="margin-left: 15px;margin-right:15px;">
                    <div class="col-md-4" style="color:black;">Page<br><br>
<ul style="font-size:16px;font-family: sans-serif; ">
                        <li><a href="{{url('')}}<?php echo '/'; ?>">Home</a></li>
                        <li><a href="{{url('/about-us')}}<?php echo '/'; ?>">About</a></li>
                        <li><a href="{{url('/contact')}}<?php echo '/'; ?>">Contact</a></li>
                        <li><a href="{{url('/doctors')}}<?php echo '/'; ?>">Doctor</a></li>
                        <li><a href="{{url('/real-estate')}}<?php echo '/'; ?>">Real Estate</a></li>
                        <li><a href="{{url('/institutes')}}<?php echo '/'; ?>">Institutes</a></li>
                        <li><a href="{{url('/market-research')}}<?php echo '/'; ?>">Market Research</a></li>
                        <li><a href="{{url('/free-website-audit')}}<?php echo '/'; ?>">Free WebSite Audit</a></li>
    <ul>                  
                        </div>

<div class="col-md-4">Categories<br><br>
<ul style="font-size:16px;font-family: sans-serif;">
    @foreach ($categories as $cat)
<li><a href="{{url('blog/'.strtolower(str_replace(" ","-",$cat->name)))}}<?php echo '/'; ?>">{{ $cat->name }}</a></li>
@endforeach
</ul>
</div>

<div class="col-md-4">Post<br><br>

<ul style="font-size:16px;font-family: sans-serif;">
    @foreach ($blogs as $blog)
<li><a href="{{url('/'.$blog->blog_url)}}">{{ $blog->blog_title }}</a></li>
@endforeach
</ul>


</div>            

</div></div>
</div>

        </section>
        <!-- end section -->
        <!-- start footer -->
       @include('footer')
        <!-- end footer -->
        
        <!-- javascript -->
        <script type="text/javascript" src="{{url('asset/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('asset/js/theme-vendors.min.js')}}"></script>
        <script type="text/javascript" src="{{url('asset/js/main.js')}}"></script>
        
    </body>

<!-- Mirrored from lithohtml.themezaa.com/contact-us-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jul 2021 06:44:46 GMT -->
</html><!doctype html>
