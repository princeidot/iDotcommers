<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from lithohtml.themezaa.com/single-project-page-04.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jul 2021 06:45:59 GMT -->

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-187426139-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-187426139-1');
</script>

    <title>SEO</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Litho is a clean and modern design, BootStrap 4 responsive, business and portfolio multipurpose HTML5 template with 36+ ready homepage demos.">
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
        @media screen and (max-width: 600px) {
            .desktop-view {
                display: none;
            }

            p {
                padding: 20px;
            }
        }

        @media screen and (min-width: 700px) {
            .mobile-view {
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
    <!-- start header -->
    <header>
        <!-- start navigation -->
        @include('header')
        <!-- end navigation -->
    </header>
    <!-- end header -->
    <!-- start banner section -->

    <!-- end banner section -->
    <!-- start section -->

    <section class="wow animate__fadeIn padding-sixteen-lr xl-padding-ten-lr lg-padding-six-lr xs-no-padding-lr desktop-view">
        <div class="container-fluid" style="padding-right: 0px;padding-left: 0px;">
            <div class="row text-center text-sm-left" style="margin-right: -190px;">
                <div class="col-12 col-xl-5 col-lg-6" style="flex: 0 0 54.667%; max-width: 45.667%;">
                    <img src="{{asset('public/img/'.$seow->image2)}}" style="border:5px solid black; padding:10px ">
                </div>
                <div class="col-12 col-xl-5 offset-xl-1 col-lg-6 last-paragraph-no-margin">
                    <p><?php echo $seow->description; ?></p>
                </div>
            </div>
        </div>

    </section>

    <section class="wow animate__fadeIn padding-sixteen-lr xl-padding-ten-lr lg-padding-six-lr xs-no-padding-lr mobile-view">
        <div class="container-fluid" style="padding-right: 0px;padding-left: 0px;">
            <div class="row text-center text-sm-left" style="">
                <div class="col-12 col-xl-5 col-lg-6 xs-margin-15px-bottom" style="padding:25px">
                    <img src="{{asset('public/img/'.$seow->image2)}}" style="border:5px solid black; padding:10px ">
                </div>
                <div class="col-12 col-xl-5 offset-xl-1 col-lg-6 md-margin-30px-top last-paragraph-no-margin" style="font-size:20px; color:black;">
                    <p><?php echo $seow->description; ?></p>
                </div>
            </div>
        </div>

    </section>
    <!-- end section -->
    <!-- start pagination -->
    <div class="col-12 d-flex justify-content-center wow animate__fadeIn">
        <ul class="pagination pagination-style-01 text-small font-weight-500 align-items-center" style="padding-bottom: 100px ">
            @if(is_null($previous))
<li class="page-item">
        <a class="page-link disabled" href="">
        <i class="feather icon-feather-arrow-left icon-extra-small d-xs-none"></i>  PREV
    </a>
</li>

           
@else
 <li class="page-item">
        <a class="page-link" href="{{ url('seo',$previous) }}">
        <i class="feather icon-feather-arrow-left icon-extra-small d-xs-none"></i>  PREV
    </a>
</li>
   
@endif
            <li class="page-item"> |</li>
               
                  @if(is_null($next))
<li class="page-item">
        <a class="page-link disabled" href="">
         NEXT<i class="feather icon-feather-arrow-right icon-extra-small d-xs-none"></i> 
    </a>
</li>

           
@else
 <li class="page-item">
        <a class="page-link" href="{{ url('seo',$previous) }}">
       NEXT <i class="feather icon-feather-arrow-right icon-extra-small d-xs-none"></i>  
    </a>
</li>
   
@endif
        </ul>
    </div>
    <!-- end pagination -->
    <!-- end section -->
    <!-- start section -->

    <!-- end section -->
    <!-- start footer -->
    @include('footer')
    <!-- end footer -->
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

<!-- Mirrored from lithohtml.themezaa.com/single-project-page-04.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jul 2021 06:46:04 GMT -->

</html>