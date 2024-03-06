<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jul 2021 09:39:25 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sales Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url('vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{url('vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('vendors/css/vendor.bundle.base.css')}}">
    <link rel="shortcut icon" href="{{url('asset/img/cropped-favicon.webp')}}">
    <link rel="apple-touch-icon" href="{{url('asset/img/cropped-favicon.webp')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('asset/img/cropped-favicon.webp')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('asset/img/cropped-favicon.webp')}}">
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:500" rel="stylesheet">
    <!--Jquery CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Fontawesome CDN-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- inject:css -->
    <link rel="stylesheet" href="{{url('asset/login/style.css')}}">
    <link rel="stylesheet" href="{{url('css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{url('asset/img/cropped-favicon.webp')}}" />
</head>

<body>
    @include('sweetalert::alert')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-6 ">
                        <div class="auth-form-transparent text-left p-3">
                            <!-- <div class="brand-logo">
                                <img src="{{url('asset/img/idotcommers-logo.png')}}" alt="logo">
                            </div> -->
                            <h4>Sales CRM</h4>
                            <form action="{{url('sales/dashboard')}}<?php echo '/'; ?>" method="POST" id="authentication">
                                @csrf
                                <div>
                                    <select name="user" aria-label=".form-select-lg example">
                                        <option selected>Select User</option>
                                        <option value="1">Poojan</option>
                                        <option value="2">Karan</option>
                                        <option value="3">Shivani</option>
                                    </select>
                                </div>
                                <div class="login">

                                    <i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;</i>
                                    <input type="text" id="exampleInputEmail" placeholder="Username" name="username">

                                    <br><br>
                                    <i class="fa fa-unlock-alt" aria-hidden="true">&nbsp;&nbsp;</i>
                                    <input type="password" id="exampleInputPassword" placeholder="Password" name="password"><br><br>
                                    <button type="submit">Login</button>

                                </div>
                            </form>
                            <div class="backg">
                                <div class="panda">
                                    <div class="earl"></div>
                                    <div class="earr"></div>
                                    <div class="face">
                                        <div class="blshl"></div>
                                        <div class="blshr"></div>
                                        <div class="eyel">
                                            <div class="eyeball1"></div>
                                        </div>
                                        <div class="eyer">
                                            <div class="eyeball2"></div>
                                        </div>
                                        <div class="nose">
                                            <div class="line"></div>
                                        </div>
                                        <div class="mouth">
                                            <div class="m">
                                                <div class="m1"></div>
                                            </div>
                                            <div class="mm">
                                                <div class="m1"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="pawl">
                                <div class="p1">
                                    <div class="p2"></div>
                                    <div class="p3"></div>
                                    <div class="p4"></div>
                                </div>
                            </div>
                            <div class="pawr">
                                <div class="p1">
                                    <div class="p2"></div>
                                    <div class="p3"></div>
                                    <div class="p4"></div>
                                </div>
                            </div>
                            <div class="handl"></div>
                            <div class="handr"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 login-half-bg d-flex flex-row">
                        <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2021 All rights reserved.</p>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{url('vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script type="text/javascript" src="{{url('asset/login/script.js')}}"></script>
    <script src="{{url('js/off-canvas.js')}}"></script>
    <script src="{{url('js/hoverable-collapse.js')}}"></script>
    <script src="{{url('js/template.js')}}"></script>
    <script src="{{url('js/settings.js')}}"></script>
    <script src="{{url('js/todolist.js')}}"></script>
    <!-- endinject -->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jul 2021 09:39:25 GMT -->

</html>