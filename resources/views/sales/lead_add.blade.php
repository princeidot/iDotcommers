<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/pages/samples/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jul 2021 09:39:25 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Add Lead IDOTCOMMERS</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{url('vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{url('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{url('vendors/css/vendor.bundle.base.css')}}">
  <link rel="shortcut icon" href="{{url('asset/img/cropped-favicon.webp')}}">
  <link rel="apple-touch-icon" href="{{url('asset/img/cropped-favicon.webp')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{url('asset/img/cropped-favicon.webp')}}">

  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{url('asset/img/cropped-favicon.webp')}}" />
  <style>
    .navbar .navbar-brand-wrapper {
      background: #000000;
    }

    .navbar .navbar-menu-wrapper {
      background: #000000;
    }

    .checkit {
      margin-right: 9px;
      margin-left: 15px;
    }

    .button-13 {
      background-color: #fff;
      border: 1px solid #d5d9d9;
      border-radius: 8px;
      box-shadow: rgb(213 217 217 / 50%) 0 2px 5px 0;
      box-sizing: border-box;
      color: #0f1111;
      cursor: pointer;
      display: inline-block;
      font-family: "Amazon Ember", sans-serif;
      font-size: 13px;
      line-height: 29px;
      padding: 10px 10px 10px 11px;
      position: relative;
      text-align: center;
      text-decoration: none;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      vertical-align: middle;
      width: 100px;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="../../index.html"><img src="{{url('asset/images/iDotcommers.png')}}" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="{{url('asset/images/iDotcommersb.png')}}" alt="logo" /></a>
        {{-- <a class="navbar-brand brand-logo mr-5" href="../../index.html"><img src="https://www.bootstrapdash.com/demo/skydash/template/images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="https://www.bootstrapdash.com/demo/skydash/template/images/logo-mini.svg" alt="logo"/></a> --}}
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
      
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="{{url('images/faces/face28.jpg')}}" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="{{url('sales/logout')}}">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
       
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      @include('sales.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add New Lead</h4>
                <p class="card-description">
                  Fill Lead Details
                </p>
                <form action="{{url('sales/save\/')}}" method="post" enctype="multipart/form-data" class="forms-sample">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" name="name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail3">Number</label>
                    <input type="text" class="form-control" placeholder="Enter Number " name="number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email">
                     <div id="result"></div>
                  </div>
                  <div class="form-group">
                    <label>Company </label>
                    <input type="text" class="form-control" placeholder="Enter Company Name" name="company">
                  </div>
                  <div class="form-group">
                    <label>Website </label>
                    <input type="text" class="form-control" placeholder="Enter Website Url" name="website">
                  </div>
                  <div class="form-group">
                    <label>Personal Linkedin Url </label>
                    <input type="text" class="form-control" placeholder="Enter Linkedin Url" name="plinkurl">
                  </div>
                    <div class="form-group">
                    <label>Lead Source </label>
                    <select class="form-select form-select-lg mb-3 form-control" name="leaduserby" aria-label="form-select-lg example">
                      <option selected>Select User</option>
                      <option value="Sanghavi">Sanghavi</option>
                      <option value="Karan">Karan</option>
                      <option value="Poojan">Poojan</option>
                      <option value="Shivani">Shivani</option>
                      <option value="Nitesh">Nitesh</option>
                      <option value="Prince">Prince</option>
                      <option value="Statzy">Statzy</option>
                      <option value="Priyanka">Priyanka</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Social Media </label><br>
                    <input type="checkbox" class="checkit" name="smedia[]" value="FB">Facebook
                    <input type="checkbox" class="checkit" name="smedia[]" value="YT">YouTube
                    <input type="checkbox" class="checkit" name="smedia[]" value="TT">Twitter
                    <input type="checkbox" class="checkit" name="smedia[]" value="LI">Linkedin
                    <input type="checkbox" class="checkit" name="smedia[]" value="IG">Instagram
                    <input type="checkbox" class="checkit" name="smedia[]" value="No">No Social Media
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-2"><label for="exampleInputEmail3">Status</label></br>
                        <select class="button-13 dropdown-toggle " data-bs-toggle="dropdown" name="blog_category">Choose
                          <div class="dropdown-menu">

                            <a class="dropdown-item">
                              <option name="blog_category">New</option>
                            </a>
                            <a class="dropdown-item">
                              <option name="blog_category">Warm</option>
                            </a>
                            <a class="dropdown-item">
                              <option name="blog_category">Hot</option>
                            </a>
                            <a class="dropdown-item">
                              <option name="blog_category">Cold</option>
                            </a>
                            <a class="dropdown-item">
                              <option name="blog_category">Dead</option>
                            </a>

                          </div>
                        </select>
                      </div>
                      <div class="col-md-2">
                        <label for="exampleInputEmail3">Date & Time</label></br>
                        <input type="datetime-local" class="button-13" id="sdate" name="sdate" style="padding: 3px 10px 3px 11px;">
                      </div>
                      <div class="col-md-8">
                        <label for="exampleInputEmail3">Status comment</label>
                        <input type="text" class="form-control" placeholder="Enter Staus Comment" name="scomment">

                      </div>

                    
                      <?php
                      if (empty($salesid->sleadid)) {
                        $count = 0;
                        $leadidcount = ($count)+1;
                      }else{
                      $leadidcount=($salesid->sleadid)+1;
                      }
                      ?>

                      <input type="hidden" name="leadid" value="<?php echo $leadidcount; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-2">
                        <label for="exampleInputEmail3">Action </label></br>
                        <select class="button-13 dropdown-toggle " data-bs-toggle="dropdown" name="laction">Choose Author
                          <div class="dropdown-menu">

                            @foreach($action as $ac)
                            <a class="dropdown-item">
                              <option name="laction" value="{{$ac->aid}}">{{$ac->aname}}</option>
                            </a>
                            @endforeach
                          </div>
                        </select>
                      </div>
                      <div class="col-md-2">
                        <label for="exampleInputEmail3">Date & Time</label></br>
                        <input type="datetime-local" class="button-13" id="adate" name="adate" style="padding: 3px 10px 3px 11px;">
                      </div>
                      <div class="col-md-8">
                        <label for="exampleInputEmail3">Action comment</label>
                        <input type="text" class="form-control" placeholder="Enter Action Comment" name="acomment">
                      </div>


                    </div>


                  </div>



                  <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>

                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
    const validateEmail = (email) => {
      return email.match(
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
    };

    const validate = () => {
      const $result = $('#result');
      const email = $('#email').val();
      $result.text('');

      if (validateEmail(email)) {
        $result.text(email + ' is valid :)');
        $result.css('color', 'green');
      } else {
        $result.text(email + ' is not valid :(');
        $result.css('color', 'red');
      }
      return false;
    }

    $('#email').on('input', validate);
  </script>
  <script src="{{url('vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{url('js/off-canvas.js')}}"></script>
  <script src="{{url('js/hoverable-collapse.js')}}"></script>
  <script src="{{url('js/template.js')}}"></script>
  <script src="{{url('js/settings.js')}}"></script>
  <script src="{{url('js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{url('js/file-upload.js')}}"></script>


  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/pages/samples/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jul 2021 09:39:25 GMT -->

</html>