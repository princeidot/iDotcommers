    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{url('sales/dashboard1')}}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="icon-layout menu-icon"></i>
                    <span class="menu-title">Leads</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{url('sales/lead_list')}}">All Leads</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{url('sales/lead_add')}}">Add Leads</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{url('sales/today-leads')}}">Today's Leads</a></li>
                          <!--<li class="nav-item"> <a class="nav-link" href="{{url('sales/upcoming-list')}}">Upcoming Leads</a></li>-->
                        <!--<li class="nav-item"> <a class="nav-link" href="{{url('sales/dead_list')}}">Dead Leads</a></li>-->
                        <!--<li class="nav-item"> <a class="nav-link" href="{{url('sales/pending-lead')}}">Pending List</a></li>-->
                            @if($user==1)
                        <li class="nav-item"> <a class="nav-link" href="{{url('sales/assign_list')}}">My List</a></li>
                        @endif
                       


                    </ul>
                </div>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link" href="{{url('admin/contacts')}}">
                    <i class="icon-mail menu-icon"></i>
                    <span class="menu-title">Contacts</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                    <i class="icon-image menu-icon"></i>
                    <span class="menu-title">Projects</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-advanced">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{url('admin/project_list')}}">List Projects</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{url('admin/project_add')}}">Add Project</a></li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                    <i class="icon-columns menu-icon"></i>
                    <span class="menu-title">Category</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="form-elements">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="{{url('admin/category_list')}}">List Categories</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('admin/category_add')}}">Add Category</a></li>

                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
                    <i class="icon-loader menu-icon"></i>
                    <span class="menu-title">Author</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="editors">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="{{url('admin/author_list')}}">List Authors</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('admin/author_add')}}">Add Author</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/audit_list')}}">
                    <i class="icon-mail menu-icon"></i>
                    <span class="menu-title">Audit</span>
                </a>
            </li> -->

        </ul>
    </nav>