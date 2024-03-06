<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from lithohtml.themezaa.com/blog-standard-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jul 2021 06:46:56 GMT -->

<head>
    <!-- Hotjar Tracking Code for https://www.idotcommers.com/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2826528,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
    <title>{{$blogs->blog_title}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">

    <link rel="canonical" href="https://www.idotcommers.com/{{$blogs->blog_url}}<?php echo '/'; ?>" <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="{{ $blogs->description1}}">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <!-- favicon icon -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    
    <style>
              a:visited {
     color: #444;
     text-decoration: none;
     transition: all 0.4s ease-in-out;
}

/* CSS Multiple Whatsapp Chat */
 #whatsapp-chat {
     box-sizing: border-box !important;
     outline: none !important;
     position: fixed;
     width: 350px;
     border-radius: 10px;
     box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
     bottom: 90px;
     right: 30px;
     overflow: hidden;
     z-index: 99;
     animation-name: showchat;
     animation-duration: 1s;
     transform: scale(1);
}
 a.blantershow-chat {
    /* background: #009688;
     */
     background: #fff;
     color: #404040;
     position: fixed;
     display: flex;
     font-weight: 400;
     justify-content: space-between;
     z-index: 98;
     bottom: 25px;
     right: 30px;
     font-size: 15px;
     padding: 10px 20px;
     border-radius: 30px;
     box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
}
 a.blantershow-chat svg {
     transform: scale(1.2);
     margin: 0 10px 0 0;
}
 .whatsapp-chat-header {
     background: #009688;
     background: #095e54;
     color: #fff;
     padding: 20px;
}
 .whatsapp-chat-header h3 {
     margin: 0 0 10px;
}
 .whatsapp-chat-header p {
     font-size: 14px;
     line-height: 1.7;
     margin: -10px;
}
 .whatsapp-chat-header .whatsapp-chat-name {
     font-size: 16px;
     font-weight: 600;
     padding-bottom: 0;
     margin-bottom: 0;
     line-height: 0.5;
}
 .whatsapp-chat-avatar {
     position: relative;
}
 .whatsapp-chat-avatar::after {
     content: "";
     bottom: 0px;
     right: 0px;
     width: 12px;
     height: 12px;
     box-sizing: border-box;
     background-color: #4ad504;
     display: block;
     position: relative;
     z-index: 1;
     border-radius: 50%;
     border: 2px solid #095e54;
     left: 40px;
     top: 38px;
}
 .whatsapp-chat-avatar img {
     border-radius: 100%;
     width: 50px;
     float: left;
     margin: 0 10px 0 0;
}
 .info-chat span {
     display: block;
}
 #get-label, span.chat-label {
     font-size: 12px;
     color: #888;
}
 #get-nama, span.chat-nama {
     margin: 5px 0 0;
     font-size: 15px;
     font-weight: 700;
     color: #222;
}
 #get-label, #get-nama {
     color: #fff;
}
 span.my-number {
     display: none;
}
/* .blanter-msg {
     color: #444;
     padding: 20px;
     font-size: 12.5px;
     text-align: center;
     border-top: 1px solid #ddd;
}
 */
 textarea#chat-input {
     border: none;
     font-family: "Arial", sans-serif;
     width: 100%;
     height: 20px;
     outline: none;
     resize: none;
     padding: 10px;
     font-size: 14px;
}
 a#send-it {
        width: 67%;
    font-weight: 700;
    padding: 4px 11px 5px 4px;;
    background: #28a745;
    border-radius: 23px;
    margin-left: 53px;
    color: white;
}
 a#send-it svg {
     fill: #a6a6a6;
     height: 24px;
     width: 24px;
}
 .first-msg {
     background: transparent;
     padding: 30px;
     text-align: center;
}
 .first-msg span {
     background: #e2e2e2;
     color: #333;
     font-size: 14.2px;
     line-height: 1.7;
     border-radius: 10px;
     padding: 15px 20px;
     display: inline-block;
}
 .start-chat .blanter-msg {
     display: flex;
}
 #get-number {
     display: none;
}
 a.close-chat {
     position: absolute;
     top: 5px;
     right: 15px;
     color: #fff;
     font-size: 30px;
}
 @keyframes ZpjSY {
     0% {
         background-color: #b6b5ba;
    }
     15% {
         background-color: #111;
    }
     25% {
         background-color: #b6b5ba;
    }
}
 @keyframes hPhMsj {
     15% {
         background-color: #b6b5ba;
    }
     25% {
         background-color: #111;
    }
     35% {
         background-color: #b6b5ba;
    }
}
 @keyframes iUMejp {
     25% {
         background-color: #b6b5ba;
    }
     35% {
         background-color: #111;
    }
     45% {
         background-color: #b6b5ba;
    }
}
 @keyframes showhide {
     from {
         transform: scale(0.5);
         opacity: 0;
    }
}
 @keyframes showchat {
     from {
         transform: scale(0);
         opacity: 0;
    }
}
 @media screen and (max-width: 480px) {
     #whatsapp-chat {
         width: auto;
         left: 5%;
         right: 5%;
         font-size: 80%;
    }
}
 .hide {
     display: none;
     animation-name: showhide;
     animation-duration: 0.5s;
     transform: scale(1);
     opacity: 1;
}
 .show {
     display: block;
     animation-name: showhide;
     animation-duration: 0.5s;
     transform: scale(1);
     opacity: 1;
}
 .whatsapp-message-container {
     display: flex;
     z-index: 1;
}
 .whatsapp-message {
     padding: 7px 14px 6px;
     background-color: #fff;
     border-radius: 0px 8px 8px;
     position: relative;
     transition: all 0.3s ease 0s;
     opacity: 0;
     transform-origin: center top 0px;
     z-index: 2;
     box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
     margin-top: 4px;
     margin-left: -54px;
     max-width: calc(100% - 66px);
}
 .whatsapp-chat-body {
     padding: 20px 20px 20px 10px;
     background-color: #e6ddd4;
     position: relative;
}
 .whatsapp-chat-body::before {
     display: block;
     position: absolute;
     content: "";
     left: 0px;
     top: 0px;
     height: 100%;
     width: 100%;
     z-index: 0;
     opacity: 0.08;
     background-image: url("https://elfsight.com/assets/chats/patterns/whatsapp.png");
}
 .dAbFpq {
     display: flex;
     z-index: 1;
}
 .eJJEeC {
     background-color: #fff;
     width: 52.5px;
     height: 32px;
     border-radius: 16px;
     display: flex;
     -moz-box-pack: center;
     justify-content: center;
     -moz-box-align: center;
     align-items: center;
     margin-left: 10px;
     opacity: 0;
     transition: all 0.1s ease 0s;
     z-index: 1;
     box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
}
 .hFENyl {
     position: relative;
     display: flex;
}
 .ixsrax {
     height: 5px;
     width: 5px;
     margin: 0px 2px;
     border-radius: 50%;
     display: inline-block;
     position: relative;
     animation-duration: 1.2s;
     animation-iteration-count: infinite;
     animation-timing-function: linear;
     top: 0px;
     background-color: #9e9da2;
     animation-name: ZpjSY;
}
 .dRvxoz {
     height: 5px;
     width: 5px;
     margin: 0px 2px;
     background-color: #b6b5ba;
     border-radius: 50%;
     display: inline-block;
     position: relative;
     animation-duration: 1.2s;
     animation-iteration-count: infinite;
     animation-timing-function: linear;
     top: 0px;
     animation-name: hPhMsj;
}
 .kAZgZq {
     padding: 7px 14px 6px;
     background-color: #fff;
     border-radius: 0px 8px 8px;
     position: relative;
     transition: all 0.3s ease 0s;
     opacity: 0;
     transform-origin: center top 0px;
     z-index: 2;
     box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
     margin-top: 4px;
     margin-left: -54px;
     max-width: calc(100% - 66px);
}
 .kAZgZq::before {
     position: absolute;
     background-image: url("data:image/png;
    base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAmCAMAAADp2asXAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAACQUExURUxpccPDw9ra2m9vbwAAAAAAADExMf///wAAABoaGk9PT7q6uqurqwsLCycnJz4+PtDQ0JycnIyMjPf3915eXvz8/E9PT/39/RMTE4CAgAAAAJqamv////////r6+u/v7yUlJeXl5f///5ycnOXl5XNzc/Hx8f///xUVFf///+zs7P///+bm5gAAAM7Ozv///2fVensAAAAvdFJOUwCow1cBCCnqAhNAnY0WIDW2f2/hSeo99g1lBYT87vDXG8/6d8oL4sgM5szrkgl660OiZwAAAHRJREFUKM/ty7cSggAABNFVUQFzwizmjPz/39k4YuFWtm55bw7eHR6ny63+alnswT3/rIDzUSC7CrAziPYCJCsB+gbVkgDtVIDh+DsE9OTBpCtAbSBAZSEQNgWIygJ0RgJMDWYNAdYbAeKtAHODlkHIv997AkLqIVOXVU84AAAAAElFTkSuQmCC");
     background-position: 50% 50%;
     background-repeat: no-repeat;
     background-size: contain;
     content: "";
     top: 0px;
     left: -12px;
     width: 12px;
     height: 19px;
}
 .bMIBDo {
     font-size: 13px;
     font-weight: 700;
     line-height: 18px;
     color: rgba(0, 0, 0, 0.4);
}
 .iSpIQi {
     font-size: 14px;
     line-height: 19px;
     margin-top: 4px;
     color: #111;
}
 .iSpIQi {
     font-size: 14px;
     line-height: 19px;
     margin-top: 4px;
     color: #111;
}
 .cqCDVm {
     text-align: right;
     margin-top: 4px;
     font-size: 12px;
     line-height: 16px;
     color: rgba(17, 17, 17, 0.5);
     margin-right: -8px;
     margin-bottom: -4px;
}
    </style>
    <style>

        a.showMore::after {
            content: "+ VIEW MORE CATEGORIES";
        }

        a.showMore.showLess::after {
            content: "- VIEW LESS CATEGORIES";
        }

        body {
            color: black;
        }

        h2 {
            font-size: 28px!important;
        }

        h3 {
            font-weight: 700;
            font-size: 22px;
        }

        h4 {
            font-size: 20px
        }

        strong {
            font-weight: 700 !important;
        }

        a,
        a:hover {
            color: #E9204F;
        }

        .list-style-07 li a:hover {
            color: black;
        }

        .progress-container {
            width: 100%;
            height: 8px;
            background: gray;
            position: fixed;
            margin-top: 80px;
            z-index: 1;

        }

        .progress-bar {
            height: 8px;
            background: #E9204F;
            width: 0%;
        }

        @media (max-width:991px) {
            section {
                padding: 75px 0 !important;

            }

        }

        /* FOR SEARCH  */
        #searchrecord {

            position: absolute;
            border: 1px solid #4d6e87;
            border-top-width: 0px;
            display: none;

            max-height: 200px;
            overflow: visible;
            overflow-x: scroll;
            scroll-behavior: smooth;
            text-transform: capitalize;
            border-radius: 10px;
            top: 70px;
            width: 100%;
            height: auto;
            margin-top: -21px;

        }

        #searchrecord ul {
            list-style: none;
            background: #fff;
            margin: 0;
            padding: 0;
            text-align: left;
            width: 100%;

        }

        #scrollToTop {
            font-size: 3em;
            color: #446cB3;
            position: fixed;
            right: 95%;
            bottom: 10%;
            transition: all 0.5s ease;

        }

        #scrollToTop:hover {
            transform: scale(1.1, 1.1);
            color: rgba(211, 84, 0, 0.9);
        }

        .hide {
            transition: all 0.5s ease;
            transform: scale(0, 0);
        }

        #social-sidebar {
            left: 0;
            position: fixed;
            top: 30%;
            font-size: 15px;
        }

        #social-sidebar li:first-child a {
            border-top-right-radius: 5px;
        }

        #social-sidebar li:last-child a {
            border-bottom-right-radius: 5px;
        }

        #socialicon {
           
        }

        @media (max-width: 991px) {
            .progress-container {
                margin-top: 0px;
                /* z-index: 1; */
            }

            #social-sidebar {
                display: none;
            }
        }

        .js-cookie-consent {
            position: fixed;
            bottom: 0px;
            padding: 10px;
            text-align: center;
            width: 100%;
            z-index: 9999;
            background-color: #E9204F;
            border-color: #E9204F;
            border: solid 1px;
            width: 100%;
            z-index: 99999;
            left: 0;
            text-align: center;
            color: white;
        }

        .js-cookie-consent-agree {
            border: 2px solid black;
            color: white;
            background-color: black;
        }

        @media only screen and (min-width: 763px) {
            .cbtn {
                margin-left: 90px;
            }
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-187426139-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-187426139-1');
    </script>
<!-- Hotjar Tracking Code for https://www.idotcommers.com/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2826528,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
</head>

<body data-mobile-nav-style="classic">
    @include('cookieConsent::index')
    {{-- Sharing tags for Desktop view --}}
    <div id="social-sidebar" style=" height: 40px;
            width: 40px;
            color: white;    left: 0;
    position: fixed;
    top: 30%;
    font-size: 15px;">
        <ul>

            <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.idotcommers.com/{{$blogs->blog_url}}/" class="social-button" target="_blank" id="" title="" rel="nofollow">
                    {{-- <span class="fab fa-facebook"></span> --}}
                    <img src="{{url('asset/social/facebook.png')}}" alt="facebook" width="100" height="70" class="socialicon"><span hidden>facebook</span>
                </a></li>

            <li><a href="https://twitter.com/intent/tweet?text={{$blogs->blog_url}}&url=https://www.idotcommers.com/crucial-updates-by-google/" class="social-button " id="" target="_blank" title="" rel="nofollow">
                    {{-- <span class="fa fa-twitter"></span> --}}
                    <img src="{{url('asset/social/twitter.png')}}" alt="twitter" width="100" height="70" class="socialicon"><span hidden>twitter</span>
                </a></li>

            <li>
                <a href="https://www.linkedin.com/sharing/share-offsite?mini=true&amp;url=https://www.idotcommers.com/{{$blogs->blog_url}}&amp;title={{$blogs->blog_title}}&amp;summary=" class="social-button" target="_blank" id="" title="" rel="nofollow">
                    {{-- <span class="fa fa-linkedin"></span> --}}
                    <img src="{{url('asset/social/linkedin.png')}}" class="socialicon" alt="linkedin" width="100" height="70"><span hidden>linkedin</span>
                </a>
            </li>

            <li><a target="_blank" href="https://telegram.me/share/url?url=https://www.idotcommers.com/{{$blogs->blog_url}}/&text={{$blogs->blog_title}}" class="social-button " id="" title="" rel="nofollow">
                    {{-- <span class="fa fa-telegram"></span> --}}
                    <img src="{{url('asset/social/telegram.png')}}" alt="telegram" class="socialicon" width="100" height="70"><span hidden>telegram</span>
                </a></li>

            <li><a target="_blank" href="https://wa.me/?text=https://www.idotcommers.com/{{$blogs->blog_url}}/" class="social-button" id="" target="_blank" title="" rel="nofollow">

                    <img src="{{url('asset/social/whatsapp.png')}}" alt="whats-app" class="socialicon" width="100" height="70"><span hidden>whats app</span>

                </a></li>

            <li><a target="_blank" href="https://www.reddit.com/submit?title={{$blogs->blog_title}}&url=https://www.idotcommers.com/{{$blogs->blog_url}}/" class="social-button " id="" target="_blank" title="" rel="nofollow">
                    {{-- <span class="fa fa-reddit"></span> --}}
                    <img src="{{url('asset/social/reddit.png')}}" alt="reddit" width="100" height="70" class="socialicon"><span hidden>reddit</span>
                </a></li>


        </ul>

    </div>


    <!-- start header -->
    <header>
        <style>
            .navbar.navbar-light .navbar-nav>.nav-item.dropdown.simple-dropdown:hover>a {
                color: white;
            }

            .header-social-icon a>i {
                padding: 0 10px;
                font-size: 20px;
                vertical-align: middle;

            }

            @media screen and (max-width :600px) {
                .desktop-view {
                    display: none;
                }
            }

            @media screen and (min-width :610px) {
                .mobile-view {
                    display: none;
                }
            }

            .img1 {
                max-width: 35% !important;
                height: auto;
            }
            }
        </style>
        <style>
            .navbar.navbar-light .navbar-nav>.nav-item.dropdown.simple-dropdown:hover>a {
                color: white;
            }
        </style>
        <div class="desktop-view">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent header-dark fixed-top navbar-boxed " style="padding-left: 0px;padding-right: 0px;background-color: black !important;">
                <div class="container-fluid nav-header-container">
                    <div class="col-5 col-lg-2 pl-lg-0 mr-auto mr-lg-0">
                        <a class="navbar-brand" href="{{url('')}}">
                            <img src="{{url('asset/images/iDotcommers.png')}}" data-at2x="{{url('asset/images/iDotcommers.png')}}" alt="home" class="default-logo" style="max-height: 74px;" width="100" height="74px">
                            <img src="{{url('asset/images/iDotcommers.png')}}" data-at2x="{{url('asset/images/iDotcommers.png')}}" alt="home" class="alt-logo" style="max-height: 74px;" width="100" height="74px">
                            <img src="{{url('asset/images/iDotcommers.png')}}" data-at2x="{{url('asset/images/iDotcommers.png')}}" class="mobile-logo" alt="hmome" style="max-height: 74px;" width="100" height="74px">
                        </a>
                    </div>
                    <div class="col-auto col-lg-8 md-position-initial md-no-padding">
                        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav alt-font">
                                <li class="nav-item dropdown megamenu">
                                    <a href="{{url('/')}}<?php echo '/'; ?>" class="nav-link" style="color:white;">Home</a>

                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link" style="color:white;">Services</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a href="{{url('/doctors')}}<?php echo '/'; ?>">For Doctors</i></a>

                                        </li>

                                        <li class="dropdown">
                                            <a href="{{url('/real-estate')}}<?php echo '/'; ?>">For Realty</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{url('/institutes')}}<?php echo '/'; ?>">For Institutes</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{url('/market-research')}}<?php echo '/'; ?>">For Market Research</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{url('/about-us')}}<?php echo '/'; ?>" class="nav-link" style="color:white;">About</a>

                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link" style="color:white;">Tool</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu" role="menu">

                                        <li class="dropdown">
                                            <a href="#">Animations</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{url('/blog')}}<?php echo '/'; ?>" class="nav-link" style="color:white;">Blog</a>

                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{url('/contact')}}<?php echo '/'; ?>" class="nav-link" style="color:white;">Contact</a>

                                </li>
                                <li class="nav-item dropdown megamenu" style="padding-left: 162px;">
                                    <a href="{{url('/free-website-audit')}}<?php echo '/'; ?>" class="nav-link" style="    border: 2px solid;
                   padding-top: 10px;
                   padding-bottom: 10px;
                   margin-top: 10px;
                   border-radius: 9px;
                   padding-right: 10px;
                   padding-left: 10px;
                   color:white;">Free Website Audit</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-lg-2 text-right hidden-xs px-lg-0">
                        <div class="header-social-icon d-inline-block">
                            <a href="https://facebook.com/iDotcommers/" target="_blank" rel="nofollow"><span hidden>facebook</span><i class="fab fa-facebook-f" style="color:white;"></i></a>
                            <a href="https://www.instagram.com/idotcommers/" target="_blank" rel="nofollow"><span hidden>instagram</span><i class="fab fa-instagram" style="color:white;"></i></a>
                            <a href="https://twitter.com/idotcommers" target="_blank" rel="nofollow"><span hidden>linkedin</span><i class="fab fa-twitter" style="color:white;"></i></a>
                            <a href="https://www.youtube.com/channel/UCqFzMrwyUDaVV8_-ZsUPBWg" rel="nofollow" target="_blank" rel="nofollow"><i class="fab fa-youtube" style="color:white;"></i><span hidden>youtube</span></a>

                        </div>
                    </div>
                </div>
            </nav>
            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
        </div>

        <div class="mobile-view">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent header-dark fixed-top navbar-boxed " style="padding-left: 0px;padding-right: 0px;background-color: black !important;">
                <div class="container-fluid nav-header-container">
                    <div class="col-5 col-lg-2 pl-lg-0 mr-auto mr-lg-0">
                        <a class="navbar-brand" href="{{url('')}}">
                            <img src="{{url('asset/img/cropped-favicon.webp')}}" data-at2x="{{url('asset/img/cropped-favicon.webp')}}" alt="home" class="default-logo img1" style="max-height: 74px;" width="100" height="74px">
                            <img src="{{url('asset/img/cropped-favicon.webp')}}" data-at2x="{{url('asset/img/cropped-favicon.webp')}}" alt="home" class="alt-logo img1" style="max-height: 74px;" width="100" height="74px">
                            <img src="{{url('asset/img/cropped-favicon.webp')}}" data-at2x="{{url('asset/img/cropped-favicon.webp')}}" class="mobile-logo img1" alt="hmome" style="max-height: 74px;" width="100" height="74px">
                        </a>
                    </div>
                    <div class="col-auto col-lg-2 text-right hidden-xs px-lg-0" style="margin-left:-29px;">
                        <div class="header-social-icon d-inline-block">
                            <a href="https://facebook.com/iDotcommers/" target="_blank" rel="nofollow"><span hidden>facebook</span><i class="fab fa-facebook-f" style="color:white;"></i></a>
                            <a href="https://www.instagram.com/idotcommers/" target="_blank" rel="nofollow"><span hidden>instagram</span><i class="fab fa-instagram" style="color:white;"></i></a>
                            <a href="https://twitter.com/idotcommers" target="_blank" rel="nofollow"><span hidden>linkedin</span><i class="fab fa-twitter" style="color:white;"></i></a>
                            <a href="https://www.youtube.com/channel/UCqFzMrwyUDaVV8_-ZsUPBWg" rel="nofollow" target="_blank" rel="nofollow"><i class="fab fa-youtube" style="color:white;"></i><span hidden>youtube</span></a>

                        </div>
                    </div>
                    <div class="col-auto col-lg-8 md-position-initial md-no-padding">
                        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav alt-font">
                                <li class="nav-item dropdown megamenu">
                                    <a href="{{url('/')}}<?php echo '/'; ?>" class="nav-link" style="color:white;">Home</a>

                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link" style="color:white;">Services</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a href="{{url('/doctors')}}<?php echo '/'; ?>">For Doctors</i></a>

                                        </li>

                                        <li class="dropdown">
                                            <a href="{{url('/real-estate')}}<?php echo '/'; ?>">For Realty</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{url('/institutes')}}<?php echo '/'; ?>">For Institutes</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{url('/market-research')}}<?php echo '/'; ?>">For Market Research</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{url('/about-us')}}<?php echo '/'; ?>" class="nav-link" style="color:white;">About</a>

                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link" style="color:white;">Tool</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu" role="menu">

                                        <li class="dropdown">
                                            <a href="">Animations</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{url('/blog')}}<?php echo '/'; ?>" class="nav-link" style="color:white;">Blog</a>

                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{url('/contact')}}<?php echo '/'; ?>" class="nav-link" style="color:white;">Contact</a>

                                </li>
                                <li class="nav-item dropdown megamenu" style="    margin-right: 180px;
    margin-left: 11px;">
                                    <a href="{{url('/free-website-audit')}}<?php echo '/'; ?>" class="nav-link" style="    border: 2px solid #E9204F;
                   padding-top: 10px;
                   padding-bottom: 10px;
                   margin-top: 10px;
                   border-radius: 9px;
                   padding-right: 10px;
                   padding-left: 10px;
                   color:white;">Free Website Audit</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>

                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
            <div class="progress-container" style="margin-top: -21px;">
                <div class="progress-bar" id="myBar"></div>
            </div>
        </div>
    </header>



    <!-- end header -->
    <!-- start blog content section -->

    <section class="blog-right-side-bar">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">
                    <div class="row">
                        <div class="col-12 blog-details-text last-paragraph-no-margin margin-6-rem-bottom">
                            <h1 style="font-size: 2.3rem;
    line-height: 3rem;" class="alt-font font-weight-500 text-extra-dark-gray margin-4-half-rem-bottom">{{$blogs->blog_title}}</h1>
                            <img src="{{asset('/public/img/'.$blogs->image1)}}" alt="{{$blogs->blog_url}}" width="100" height="70" class="w-100 border-radius-6px margin-4-half-rem">
                            <ul class="list-unstyled margin-2-rem-bottom">
                                <li class="d-inline-block align-middle margin-5px-right"><i class="feather icon-feather-calendar text-fast-blue margin-5px-right" style="color: gray; font-size: 12px"></i><a href="" style="color: black; font-size: 12px">{{$blogs->created_at}}</a></li>
                                <li class="d-inline-block align-middle margin-5px-right"><i class="feather icon-feather-folder text-fast-blue margin-5px-right" style="color: gray; font-size: 12px"></i><a href="{{url('blog/'.strtolower(str_replace(" ","-",$blogs->blog_category)))}}<?php echo '/'; ?>" style="color: black; font-size: 12px">{{$blogs->blog_category}}</a></li>
                                <li class="d-inline-block align-middle"><i class="feather icon-feather-user text-fast-blue margin-5px-right" style="color: gray; font-size: 12px"></i><a href="{{url('author/'.strtolower(str_replace(" ","-",$blogs->author_name)))}}<?php echo '/'; ?>" style="color: black; font-size: 12px">{{$blogs->author_name}}</a></li>
                            </ul>
                            <p><?php echo htmlspecialchars_decode(($blogs->description)); ?></p>
                            {{-- <p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p> --}}
                            {{-- <blockquote class="alt-font border-width-4px border-color-fast-blue margin-60px-left pr-0 margin-5-half-rem-tb md-margin-40px-left sm-no-margin-left wow animate__fadeIn">
                                    <p>Tomorrow is the most important thing in life. Comes into us at midnight very clean. It's perfect when it arrives and it puts itself in our hands. It hopes we've learned something from yesterday.</p>
                                    <footer class="text-medium text-fast-blue d-inline-block text-uppercase">John Wayne</footer>
                                </blockquote> --}}
                            {{-- <img src="images/blog-img77.jpg" alt="" class="w-100 border-radius-6px margin-4-rem-bottom wow animate__fadeIn">
                                <!-- dropcaps -->
                                <p class="wow animate__fadeIn"><span class="alt-font first-letter first-letter-big text-fast-blue">M</span>aster design is simply dummy te+xt of the printing and typesetting industry. lorem ipsum has been the an industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <!-- end dropcaps -->
                                <p class="wow animate__fadeIn">There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p> --}}
                        </div>
                        <div class="col-12 d-flex flex-wrap align-items-center padding-15px-tb mx-auto margin-20px-bottom wow animate__fadeIn">
                            <div class="col-12 col-md-9 text-center text-md-left sm-margin-10px-bottom px-0">
                                <div class="tag-cloud">
                                    @foreach ($tags_array as $tagg )
                                    <a href="{{url('tag/'.strtolower(str_replace(" ","-",$tagg)))}}<?php echo '/'; ?>">{{$tagg}}</a>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                        <div class="col-12 mx-auto margin-50px-bottom md-margin-30px-bottom wow animate__fadeIn">
                            <div class="d-block d-md-flex box-shadow-small align-items-center border-radius-5px padding-4-rem-all">
                                <div class="w-130px text-center margin-60px-right sm-margin-auto-lr">

                                    @foreach ($author as $auth )

                                    <img src="{{asset('public/img/'.$auth->image)}}" class="rounded-circle w-110px" alt="{{$auth->name}}" width="100" height="70" />
                                    <a href="{{url('author/'.strtolower(str_replace(" ","-",$auth->name)))}}<?php echo '/'; ?>" class="text-extra-dark-gray alt-font font-weight-500 margin-20px-top d-inline-block text-medium">{{$auth->name}}</a>
                                    <span class="text-medium d-block line-height-18px sm-margin-15px-bottom">{{$auth->designation}}</span>
                                </div>
                                <div class="w-75 sm-w-100 last-paragraph-no-margin text-center text-md-left">
                                    <p>{{$auth->description}}</p>
                                    <a href="{{url('author/'.strtolower(str_replace(" ","-",$auth->name)))}}<?php echo '/'; ?>" class="btn btn-link btn-large text-extra-dark-gray margin-20px-top">More Posts By This author</a>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="col-12 text-center elements-social social-icon-style-09 mx-auto">
                            <ul class="medium-icon">
                                <li class="wow animate__fadeIn" data-wow-delay="0.2s"><a class="facebook" href="https://www.facebook.com/iDotcommers/" target="_blank" rel="nofollow"><i class="fab fa-facebook-f"></i><span hidden>facebook</span></a></li>
                                <li class="wow animate__fadeIn" data-wow-delay="0.3s"><a class="twitter" href="https://twitter.com/idotcommers" target="_blank" rel="nofollow"><i class="fab fa-twitter"></i><span hidden>twitter</span></a></li>
                                <li class="wow animate__fadeIn" data-wow-delay="0.4s"><a class="instagram" href="https://www.instagram.com/idotcommers/" target="_blank" rel="nofollow"><i class="fab fa-instagram"></i><span hidden>instagram</span></a></li>
                                <li class="wow animate__fadeIn" data-wow-delay="0.5s"><a class="linkedin" href="https://www.linkedin.com/company/idotcommers/" target="_blank" rel="nofollow"><i class="fab fa-linkedin-in"></i><span hidden>linkedin</span></a></li>
                                <li class="wow animate__fadeIn" data-wow-delay="0.6s"><a class="behance" href="https://www.behance.net/idotcommers" target="_blank" rel="nofollow"><i class="fab fa-behance"></i><span hidden>behance</span></a></li>
                            </ul>
                        </div>

                    </div>
                    <section class="bg-light-gray">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-5 col-md-6 text-center margin-5-rem-bottom wow animate__fadeIn">
                                    <span class="alt-font font-weight-500 text-uppercase d-inline-block">You may also like</span>
                                    <h5 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-minus-1px">Related posts</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 blog-content">
                                    <ul class="blog-clean blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                                        <li class="grid-sizer"></li>
                                        <!-- start blog item -->
                                        @foreach ($related_posts as $posts )


                                        <li class="grid-item wow animate__fadeIn">
                                            <div class="blog-post text-center border-radius-6px bg-white box-shadow box-shadow-large-hover">
                                                <div class="blog-post-image bg-gradient-fast-blue-purple">
                                                    <a href="{{url('/'.$posts->blog_url)}}<?php echo '/'; ?>"><img src="{{asset('/public/img/'.$posts->image1)}}" alt="">
                                                        {{-- <div class="blog-rounded-icon bg-white border-color-white absolute-middle-center">
                                                                <i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                                            </div> --}}
                                                    </a>
                                                </div>
                                                <div class="post-details padding-30px-all xl-padding-25px-lr">

                                                    <a href="{{url('/'.$posts->blog_url)}}<?php echo '/'; ?>" class="text-extra-dark-gray font-weight-500 alt-font d-block">
                                                        {{$posts->blog_title}}</a>
                                                </div>
                                            </div>
                                        </li>

                                        @endforeach
                                        <!-- end blog item -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- start sidebar -->
                <aside class="col-12 col-xl-3 offset-xl-1 col-lg-4 col-md-7 blog-sidebar lg-padding-4-rem-left md-padding-15px-left" style="position: sticky;  top: 0;
                    ;">
                    <div class="d-inline-block w-100 margin-5-rem-bottom">
                        <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-25px-bottom">Search posts</span>
                        <form id="search-form" role="search" method="get" action="">
                            @csrf
                            <div class="position-relative">
                                <input class="search-input medium-input border-color-medium-gray border-radius-4px mb-0" id="search" placeholder="Search Blogs..." value="" type="text" autocomplete="off" />
                                <div id="searchrecord">

                                </div>
                                <button type="submit" class="bg-transparent btn text-fast-blue position-absolute right-5px top-8px text-medium md-top-8px sm-top-10px search-button"><i class="feather icon-feather-search ml-0"></i></button>
                            </div>
                        </form>
                    </div>
                    <script>
                        $(document).ready(function() {

                            $('#search').keyup(function() {
                                var query = $(this).val();
                                if (query != '') {
                                    var _token = $('input[name="_token"]').val();
                                    $.ajax({
                                        url: "{{ url('/fetchb') }}",
                                        method: "POST",
                                        data: {
                                            query: query,
                                            _token: _token
                                        },
                                        success: function(data) {
                                            $('#searchrecord').fadeIn();
                                            $('#searchrecord').html(data);
                                        }
                                    });
                                } else {
                                    $("#searchrecord").fadeOut();
                                    $("#searchrecord").html("");
                                }

                            });

                            $(document).on('click', 'ls', function() {
                                $('#search').val($(this).text());
                                $('#searchrecord').fadeOut();
                            });

                        });
                    </script>

                    <div class="border-all border-color-medium-gray border-radius-4px padding-40px-all text-center margin-5-rem-bottom xs-margin-35px-bottom">
                        @foreach ($author as $auth )
                        <a href="{{url('author/'.strtolower(str_replace(" ","-",$auth->name)))}}<?php echo '/'; ?>"><img src="{{asset('public/img/'.$auth->image)}}" alt="{{$auth->name}}" width="100" height="70" class="rounded-circle margin-5px-bottom w-100px d-block mx-auto" /></a>
                        <a href="{{url('author/'.strtolower(str_replace(" ","-",$auth->name)))}}<?php echo '/'; ?>" class="text-extra-dark-gray alt-font font-weight-500 margin-20px-top d-inline-block text-medium">{{$auth->name}}</a>
                        <span class="text-medium d-block line-height-18px margin-20px-bottom">{{$auth->designation}}</span>
                        @endforeach


                    </div>



                    <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
                        <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Categories</span>
                        <ul class="list-style-07 list-unstyled category_list">
                            @foreach ($categories as $cat)
                            <li class="category_items">
                                <a href="{{url('blog/'.strtolower(str_replace(" ","-",$cat->name)))}}<?php echo '/'; ?>">{{$cat->name}}</a>
                                {{-- <span class="item-qty">10</span> --}}
                            </li>
                            @endforeach
                        </ul>
                        <script>
                            $(document).ready(function() {

                                var $this = $('.category_list');
                                if ($this.find('li').length > 5) {
                                    $('.category_list').append('<li><a href="javascript:;" class="showMore"></a></li>');
                                    // $('.category_list').append('<button class="showMore" >View Categories </button>');
                                }

                                // If more than 2 Education items, hide the remaining
                                $('.category_list .category_items').slice(0, 5).addClass('shown');
                                $('.category_list  .category_items').not('.shown').hide();

                                $('.category_list  .showMore').on('click', function() {
                                    $('.category_list  .category_items').not('.shown').toggle(300);
                                    $(this).toggleClass('showLess');
                                });

                            });
                        </script>
                    </div>

                    <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
                        <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Recent posts</span>
                        <ul class="latest-post-sidebar position-relative">

                            @foreach ($recent as $recents)
                            <li class="media wow animate__fadeIn" data-wow-delay="0.2s">
                                <figure>
                                    <a href="{{url('/'.$recents->blog_url)}}<?php echo '/'; ?>"><img class="border-radius-3px" width="100" height="70" src="{{asset('public/img/'.$recents->image1)}}" alt="{{$recents->blog_url}}"></a>
                                </figure>
                                <div class="media-body">
                                    <a href="{{url('/'.$recents->blog_url)}}<?php echo '/'; ?>" class="font-weight-500 text-extra-dark-gray d-inline-block margin-five-bottom md-margin-two-bottom">{{$recents->blog_title}}</a>

                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="margin-5-rem-bottom xs-margin-35px-bottom md-padding-3-rem-top wow animate__fadeIn">
                        <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Tags cloud</span>
                        <div class="tag-cloud">
                            @foreach ($tags_array as $tagg )
                            <a href="{{url('tag/'.strtolower(str_replace(" ","-",$tagg)))}}<?php echo '/'; ?>">{{str_replace(['[{"tags":"','"}]'],"",$tagg)}}</a>
                            @endforeach
                        </div>
                    </div>


                    {{--Share tabs for mobile view  --}}

                    <!-- end sidebar -->
            </div>
        </div>
        </div>
    </section>
    <!-- end blog content section -->
    <!-- start section -->

    <!-- end section -->
    <!-- start section -->
    {{-- <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center margin-5-rem-bottom wow animate__fadeIn">
                        <h6 class="alt-font text-extra-dark-gray font-weight-500">4 Comments</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-9 mx-auto wow animate__fadeIn">
                        <ul class="blog-comment">
                            <li>
                                <div class="d-block d-md-flex w-100 align-items-center align-items-md-start ">
                                    <div class="w-75px sm-w-50px sm-margin-10px-bottom">
                                        <img src="images/avtar27.jpg" class="rounded-circle w-95 sm-w-100" alt=""/>
                                    </div>
                                    <div class="w-100 padding-25px-left last-paragraph-no-margin sm-no-padding-left">
                                        <a href="#" class="text-extra-dark-gray text-fast-blue-hover alt-font font-weight-500 text-medium">Herman Miller</a>
                                        <a href="#comments" class="btn-reply text-medium-gray text-uppercase section-link">Reply</a>
                                        <div class="text-medium text-medium-gray margin-15px-bottom">17 July 2020, 6:05 PM</div>
                                        <p class="w-85">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the make a type specimen book.</p>
                                    </div>
                                </div>
                                <ul class="child-comment">
                                    <li>
                                        <div class="d-block d-md-flex w-100 align-items-center align-items-md-start ">
                                            <div class="w-75px sm-w-50px sm-margin-10px-bottom">
                                                <img src="images/avtar28.jpg" class="rounded-circle w-95 sm-w-100" alt=""/>
                                            </div>
                                            <div class="w-100 padding-25px-left last-paragraph-no-margin sm-no-padding-left">
                                                <a href="#" class="text-extra-dark-gray text-fast-blue-hover alt-font font-weight-500 text-medium">Wilbur Haddock</a>
                                                <a href="#comments" class="btn-reply text-medium-gray text-uppercase section-link">Reply</a>
                                                <div class="text-medium text-medium-gray margin-15px-bottom">18 July 2020, 10:19 PM</div>
                                                <p class="w-85">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-block d-md-flex w-100 align-items-center align-items-md-start border-radius-5px padding-40px-all md-padding-30px-all sm-padding-20px-all bg-light-gray">
                                            <div class="w-75px sm-w-50px sm-margin-10px-bottom">
                                                <img src="images/avtar29.jpg" class="rounded-circle w-95 sm-w-100" alt=""/>
                                            </div>
                                            <div class="w-100 padding-25px-left last-paragraph-no-margin sm-no-padding-left">
                                                <a href="#" class="text-extra-dark-gray text-fast-blue-hover alt-font font-weight-500 text-medium">Colene Landin</a>
                                                <a href="#comments" class="btn-reply text-medium-gray text-uppercase section-link">Reply</a>
                                                <div class="text-medium text-medium-gray margin-15px-bottom">18 July 2020, 12:39 PM</div>
                                                <p class="w-85">Lorem ipsum is simply dummy text of the printing and typesetting industry. Ipsum has been the industry's standard dummy text ever since.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="d-block d-md-flex w-100 align-items-center align-items-md-start ">
                                    <div class="w-75px sm-w-50px sm-margin-10px-bottom">
                                        <img src="images/avtar30.jpg" class="rounded-circle w-95 sm-w-100" alt=""/>
                                    </div>
                                    <div class="w-100 padding-25px-left last-paragraph-no-margin sm-no-padding-left">
                                        <a href="#" class="text-extra-dark-gray text-fast-blue-hover alt-font font-weight-500 text-medium">Jennifer Freeman</a>
                                        <a href="#comments" class="btn-reply text-medium-gray text-uppercase section-link">Reply</a>
                                        <div class="text-medium text-medium-gray margin-15px-bottom">19 July 2020, 8:25 PM</div>
                                        <p class="w-85">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the make a type specimen book.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- end section -->
    <!-- start section -->
    <section id="comments" class="pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9 margin-4-rem-bottom wow animate__fadeIn">
                    <h6 class="alt-font text-extra-dark-gray font-weight-500 margin-5px-bottom">Write a comments</h6>
                    <div class="margin-5px-bottom">Your email address will not be published. Required fields are marked <span class="text-radical-red">*</span></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9 wow animate__fadeIn">
                    <form action="#" method="post">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <label class="margin-15px-bottom" for="basic-name">Your name <span class="text-radical-red">*</span></label>
                                <input id="basic-name" class="medium-input border-radius-4px bg-white margin-30px-bottom required" type="text" name="name" placeholder="Enter your name">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <label class="margin-15px-bottom" for="basic-email">Your email address <span class="text-radical-red">*</span></label>
                                <input id="basic-email" class="medium-input border-radius-4px bg-white margin-30px-bottom required" type="email" name="email" placeholder="Enter your email">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="margin-15px-bottom">Your comment</div>
                                <textarea class="medium-textarea border-radius-4px bg-white h-120px margin-2-half-rem-bottom" rows="6" name="comment" placeholder="Enter your comment"></textarea>
                            </div>
                            <div class="col-12 sm-margin-20px-bottom">
                                <input type="hidden" name="redirect" value="">
                                <input class="btn btn-medium btn-dark-gray mb-0 btn-round-edge-small submit" type="submit" name="submit" value="Post Comment">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {
            myFunction()
        };

        function myFunction() {
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (winScroll / height) * 100;
            document.getElementById("myBar").style.width = scrolled + "%";
        }
    </script>
    <!-- end section -->
    <!-- start footer -->

    <!-- end footer -->
    @include('footer')

    <!-- start scroll to top -->
    
    <div id='whatsapp-chat' class='hide'>
  <div class='whatsapp-chat-header'>
      <div class='whatsapp-chat-avatar'>
        <img src="{{url('asset/img/cropped-favicon.webp')}}" alt="Tedbree Logo" />
      </div>
      <p><span class="whatsapp-chat-name">iDcommers</span><br><small>never offline</small></p>
  </div>
  
  <div class='start-chat'>
    <div pattern="https://elfsight.com/assets/chats/patterns/whatsapp.png" class="WhatsappChat__Component-sc-1wqac52-0 whatsapp-chat-body">
      <div class="WhatsappChat__MessageContainer-sc-1wqac52-1 dAbFpq">
        <div style="opacity: 0;" class="WhatsappDots__Component-pks5bf-0 eJJEeC">
          <div class="WhatsappDots__ComponentInner-pks5bf-1 hFENyl">
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotOne-pks5bf-3 ixsrax"></div>
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotTwo-pks5bf-4 dRvxoz"></div>
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotThree-pks5bf-5 kXBtNt"></div>
          </div>
        </div>
        <div style="opacity: 1;" class="WhatsappChat__Message-sc-1wqac52-4 kAZgZq">
         <!--  <div class="WhatsappChat__Author-sc-1wqac52-3 bMIBDo">Tedbree</div> -->
          <div class="WhatsappChat__Text-sc-1wqac52-2 iSpIQi">Hi there 👋<br><br>How can I help you?</div>
          <!-- <div class="WhatsappChat__Time-sc-1wqac52-5 cqCDVm">1:40</div> -->
        </div>
      </div>
    </div>

    <div class='blanter-msg' style="background: white;text-align: center;padding: 10px;"> 
     
      <a href='https://wa.me/message/7HAVREBWAVWXK1' target="_blank" class="btn btn-primary" id='send-it'> <i class="fab fa-whatsapp"aria-hidden="true" style="padding: 7px;
    font-size: 24px;"></i>Start Chat</a>

    </div>
  </div>
  <div id='get-number'></div>
  <a class='close-chat' href='javascript:void'>×</a>
</div>
<a class='blantershow-chat' href='javascript:void' title='Show Chat'><svg width="20" viewBox="0 0 24 24"><defs/><path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z"/><path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z"/><path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"/></svg> Chat with Us</a>

    <!-- end scroll to top -->
    <!-- javascript -->
    <script type="text/javascript" src="{{url('asset/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('asset/js/theme-vendors.min.js')}}"></script>
    <script type="text/javascript" src="{{url('asset/js/main.js')}}"></script>
    <script>
    $(document).on("click", "#send-it", function() {
  var a = document.getElementById("chat-input");
  if ("" != a.value) {
    var b = $("#get-number").text(),
      c = document.getElementById("chat-input").value,
      d = "https://web.whatsapp.com/send",
      e = b,
      f = "&text=" + c;
    if (
      /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
      )
    )
      var d = "whatsapp://send";
    var g = d + "?phone=" + e + f;
    window.open(g, "_blank");
  }
}),
  $(document).on("click", ".informasi", function() {
    (document.getElementById("get-number").innerHTML = $(this)
      .children(".my-number")
      .text()),
      $(".start-chat,.get-new")
        .addClass("show")
        .removeClass("hide"),
      $(".home-chat,.head-home")
        .addClass("hide")
        .removeClass("show"),
      (document.getElementById("get-nama").innerHTML = $(this)
        .children(".info-chat")
        .children(".chat-nama")
        .text()),
      (document.getElementById("get-label").innerHTML = $(this)
        .children(".info-chat")
        .children(".chat-label")
        .text());
  }),
  $(document).on("click", ".close-chat", function() {
    $("#whatsapp-chat")
      .addClass("hide")
      .removeClass("show");
  }),
  $(document).on("click", ".blantershow-chat", function() {
    $("#whatsapp-chat")
      .addClass("show")
      .removeClass("hide");
  });

    </script>
</body>

<!-- Mirrored from lithohtml.themezaa.com/blog-standard-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jul 2021 06:46:56 GMT -->

</html>