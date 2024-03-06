<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/pages/samples/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jul 2021 09:39:25 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SALES LIST IDOTCOMMERS</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{url('vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{url('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{url('vendors/css/vendor.bundle.base.css')}}">
  <link rel="shortcut icon" href="{{url('asset/img/cropped-favicon.webp')}}">
  <link rel="apple-touch-icon" href="{{url('asset/img/cropped-favicon.webp')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{url('asset/img/cropped-favicon.webp')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{url('asset/img/cropped-favicon.webp')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{url('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">

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

    .myDIV span {
      visibility: hidden;
    }

    .myDIV:hover span {
      visibility: visible;
    }

    .ti-pencil-alt:before {
      margin: 0px 9px 0px -19px;
    }


    .ti-pencil-alt-as:before {
      content: "\e61d";
      margin: 0px 9px 0px -19px;
    }
    .table td{
            white-space: inherit;
            
    }
     .table th, .jsgrid .jsgrid-table th, .table td, .jsgrid .jsgrid-table td{
      padding: 1rem 0.6rem;
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
              <a class="dropdown-item" href="{{url('sales/logout/')}}">
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
        <!--<div id="settings-trigger"><i class="ti-settings"></i></div>-->
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
          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6"> <h4 class="card-title">Leads</h4></div>
                    <div class="col-md-6"><a href="{{url('sales/dead_list')}}" class="btn btn-primary" style="float: right;margin-right: 23px;">Dead Leads</a></div>
                </div>
             
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <!-- <th>Date</th> -->
                          <th>Name</th>
                          <th>Number</th>
                          <th>Email</th>
                          <th>Company</th>
                              <th>Source</th>
                          <th>Status</th>
                          <th>Actions</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
 <div class="container">

                        <div class="row pt-3 pb-1">
                          <div class="col-md-10">
                              @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul style="list-style-type:none">
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
                          </div>
                          <div class="col-md-2">
                            <select id="sortYear" name="sortYear" class="sortYear item_filter form-control font14" style="height:30px;color:black;outline:none;border:1px solid black;border-radius:10px">
                              <option class="bold600">Sort By Action</option>
                              @foreach ($saction as $mon)
                              <option value="{{$mon->aid}}">{{$mon->aname}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
                      
                      <tbody class="nonajax">
                        @foreach ($leads as $list_blogs)

                        <tr class="myDIV">

                          <td>
                            <a href="{{url('sales/lead_edit/'.$list_blogs->id)}}"><span class="ti-pencil-alt hide"></span></a>{{ $list_blogs->sleadid }}
                          </td>

                          <td><a href="{{url('sales/list_view/'.$list_blogs->sleadid)}}">{{ ucwords(strtolower($list_blogs->name)) }}</a></td>
                          <td>{{ $list_blogs->number }}</td>
                          <td>{{ strtolower($list_blogs->email) }}</td>
                          <td>{{ ucwords(strtolower($list_blogs->company)) }}</td>
                           <td>{{ ucwords(strtolower($list_blogs->leaduserby)) }}</td>

                          <td>
                            <label class="badge badge-warning" style="width:4rem;"> <a href="{{url('sales/lead_editstatus/'.$list_blogs->sleadid)}}"><span class="ti-pencil-alt-as hide"></span></a>{{ $list_blogs->status }}</label>
                          </td>
                          <td>
                            <label class="badge badge-warning" style="width:4.2rem;"> <a href="{{url('sales/lead_editstatus/'.$list_blogs->sleadid)}}"><span class="ti-pencil-alt-as hide"></span></a>{{ $list_blogs->aname }}</label>
                           
                          </td>
                          <td>
                            <label style="width:4.2rem;"> <a href="{{url('sales/delete/'.$list_blogs->sleadid)}}" class="btn btn-outline-danger">Delete</a></label>
                                
                          </td>
                        </tr>

                        @endforeach

                      </tbody>
                         <tbody class="ajax" id="tbodys">

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- content-wrapper ends -->

          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="{{url('vendors/js/vendor.bundle.base.js')}}"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="{{url('vendors/datatables.net/jquery.dataTables.js')}}"></script>
      <script src="{{url('vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="{{url('js/off-canvas.js')}}"></script>
      <script src="{{url('js/hoverable-collapse.js')}}"></script>
      <script src="{{url('js/template.js')}}"></script>
      <script src="{{url('js/settings.js')}}"></script>
      <script src="{{url('js/todolist.js')}}"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="{{url('js/data-table.js')}}"></script>
 <script>
        $(document).ready(function() {
          $('.ajax').hide();
        });

        $("#sortYear").on('change', function() {
          var val = $(this).val();
          $.ajax({
            url: "{{route('autocomplete.searchnew')}}",
            type: "post",
            data: {
              val: val,
              _token: "{{ csrf_token() }}",
            },
            success: function(response) {
              console.log(response)
              $('.ajax').show();
              $('.nonajax').hide();
              var parsedObj = JSON.parse(response.demo);

              // console.log(parsedObj);
              // $("#tcount").html("");
              // $("#tcount").append('<p class="t-black font14 m-0  d-inline-block float-right"> Total Reports: <span class="bold600" id="totalreportcount">' + countObj + '</span></p>')


              $("#tbodys").html("");
              if (!Object.keys(parsedObj).length) {
                $("#tbodys").append('<div class="press-post my-3">No Data</div>')
              } else {
                for (res in parsedObj) {

                  $("#tbodys").append(
                    '<tr class="myDIV"><td><a href="lead_edit/' + parsedObj[res].id + '"><span class="ti-pencil-alt hide"></span></a>' +
                    parsedObj[res].sleadid + '</td><td>' + parsedObj[res].name + '</td><td>' + parsedObj[res].number +
                    '</td><td>' + parsedObj[res].email + '</td><td>' + parsedObj[res].company + '</td><td>' + parsedObj[res].leaduserby + '</td><td>' +
                    '<label class = "badge badge-warning" style = "width:4rem;"><a href="lead_editstatus/' + parsedObj[res].sleadid +
                    '"><span class="ti-pencil-alt-as hide"></span></a>' + parsedObj[res].status + '</label></td><td>' +
                    ' <label class="badge badge-warning" style="width:4.2rem;"> <a href="lead_editstatus/' + parsedObj[res].sleadid + 
                    '"><span class="ti-pencil-alt-as hide"></span></a>' +
                    parsedObj[res].aname + '</label></td><td>'+
                    ' <label style="width:4.2rem;">'+
                    '<a class="btn btn-outline-danger" href="sales/delete/'+ parsedObj[res].sleadid+'">Delete</a></label></td></tr>
                  )
                }
              }
            }

          });

        });
      </script>
      <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/pages/samples/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jul 2021 09:39:25 GMT -->

</html>