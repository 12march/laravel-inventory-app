@extends('layouts.main')

@section('content')

    <!--main content wrapper-->
    <div class="content-wrapper">
        <div class="container-fluid">

            <!--states start-->
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-purple text-white mb-4 py-1">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="vl_graph-bar fa-3x text-white"></i>
                            </div>
                            <h5 class=" font-weight-normal mt-0" title="Number of Orders">Value of stock</h5>
                            <h2 class="mt-3 mb-3 text-white">₦1,028,122</h2>
                            <p class="mb-0 ">
                                <span class=" mr-2"><i class="fa fa-arrow-up"></i> 3.23%</span>
                                <span class="float-right">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-primary text-white mb-4 py-1">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="vl_user-male fa-3x text-white"></i>
                            </div>
                            <h5 class=" font-weight-normal mt-0" title="Number of Orders">Customer</h5>
                            <h2 class="mt-3 mb-3 text-white">5</h2>
                            <p class="mb-0 ">
                                <span class=" mr-2"><i class="fa fa-arrow-up"></i> 3.23%</span>
                                <span class="float-right">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-info text-white mb-4 py-1">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="vl_shopping-bag2 fa-3x text-white"></i>
                            </div>
                            <h5 class=" font-weight-normal mt-0" title="Number of Orders">Order</h5>
                            <h2 class="mt-3 mb-3 text-white">32,879</h2>
                            <p class="mb-0 ">
                                <span class=" mr-2"><i class="fa fa-arrow-up"></i> 3.23%</span>
                                <span class="float-right">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--states end-->

            <!--sales statistical overview-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-info">
                                <div class="custom-title">Sales Statistical Overview</div>
                                <div class=" widget-action-link">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                            <i class=" vl_ellipsis-fill-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                            <a class="dropdown-item" href="#"> Edit</a>
                                            <a class="dropdown-item" href="#"> Delete</a>
                                            <a class="dropdown-item" href="#"> Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-3">
                                    <span class="text-muted mb-5 d-inline-block"><i class="fa fa-bolt"></i> Sales Views</span>
                                    <h1 class="mb-0 state-view">27,487</h1>
                                    <small class="text-muted">Sales views in last month November 2018</small>
                                    <ul class="list-unstyled mt-5">
                                        <li class="text-muted">
                                            <i class="fa fa-clock-o pr-2"></i> Data from November
                                        </li>
                                        <li class="text-muted">
                                            <i class="fa fa-clock-o pr-2"></i>  Last active in 07.12.2018
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-9">
                                    <canvas id="sales_overview_chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/sales statistical overview-->

            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-success">
                                <div class="custom-title">Area Chart</div>
                                <div class="custom-post-title">Outstanding area chart example is given bellow</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="area_chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-warning">
                                <div class="custom-title">Line Chart</div>
                                <div class="custom-post-title">Awesome line chart example is given bellow</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="line_chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <!--<div class="col-xl-4 col-md-6">-->
                    <!--<div class="card card-shadow mb-4">-->
                        <!--<div class="card-header border-0">-->
                            <!--<div class="custom-title-wrap bar-info">-->
                                <!--<div class="custom-title">Stacked Chart</div>-->
                                <!--<div class="custom-post-title">Excellent stacked chart example is given bellow</div>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="card-body">-->
                            <!--<div id="hbar-placeholder" class="fchart-height"></div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            </div>

            <!--employee data table-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-shadow mb-4 ">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap border-0 position-relative pb-2">
                                <div class="custom-title">Employee Data Table</div>
                                <div class=" widget-action-link">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                            Action <i class="fa fa-caret-down pl-2"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                            <a class="dropdown-item" href="#"> Move to another group</a>
                                            <a class="dropdown-item" href="#"> Delete</a>
                                            <a class="dropdown-item" href="#"> Edit</a>
                                            <a class="dropdown-item" href="#"> Send Message</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover table-custom">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Last Contact</th>
                                        <th scope="col">Next Task</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img class="rounded-circle mr-3 table-thumb" src="assets/img/avatar/avatar1.jpg" alt=""/>Jhony Depp
                                        </td>
                                        <td>(715) 777-666</td>
                                        <td>jhony@example.com</td>
                                        <td>Lead</td>
                                        <td>5 min ago</td>
                                        <td><span class="badge badge-info form-pill px-3 py-1">CALL</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded-circle mr-3 table-thumb" src="assets/img/avatar/avatar2.jpg" alt=""/>Robert De Niro
                                        </td>
                                        <td>(715) 777-666</td>
                                        <td>robert-de@example.com</td>
                                        <td>Lead</td>
                                        <td>5 min ago</td>
                                        <td><span class="badge badge-success form-pill px-3 py-1">OPENING</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded-circle mr-3 table-thumb" src="assets/img/avatar/avatar3.jpg" alt=""/>Dr Dkmosa
                                        </td>
                                        <td>(715) 777-666</td>
                                        <td>dkmosa@example.com</td>
                                        <td>Lead</td>
                                        <td>5 min ago</td>
                                        <td><span class="badge badge-primary form-pill px-3 py-1">FOLLOW UP</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded-circle mr-3 table-thumb" src="assets/img/avatar/avatar4.jpg" alt=""/> Tasi Saz
                                        </td>
                                        <td>(715) 777-666</td>
                                        <td>tasi@example.com</td>
                                        <td>Lead</td>
                                        <td>5 min ago</td>
                                        <td><span class="badge badge-danger form-pill px-3 py-1">VISIT</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded-circle mr-3 table-thumb" src="assets/img/avatar/avatar-mini1.jpg" alt=""/>Olivia Dias
                                        </td>
                                        <td>(715) 777-666</td>
                                        <td>olivia@example.com</td>
                                        <td>Lead</td>
                                        <td>5 min ago</td>
                                        <td><span class="badge badge-warning text-light form-pill px-3 py-1">CAMPAIGN</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/employee data table-->

            <!--member performance & support ticket-->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card card-shadow mb-4 ">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-danger">
                                <div class="custom-title">
                                    Member's Performance
                                    <a href="javascript:;" class="btn-ordering btn-primary float-right ml-2">
                                        <i class="fa fa-sort-alpha-asc"></i>
                                    </a>
                                    <ul class="nav nav-pills nav-pill-turquoise nav-pill-custom nav-pills-sm float-right " id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-today-tab" data-toggle="pill" href="#pills-today" role="tab" aria-controls="pills-today" aria-selected="true">Today</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-month-tab" data-toggle="pill" href="#pills-month" role="tab" aria-controls="pills-month" aria-selected="false">Month</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">
                                    <ul class="list-unstyled mb-0 list-widget">
                                        <li>
                                            <div class="media mb-4">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                        <h6 class="text-uppercase mb-0">shirley hoe</h6>
                                                        <span class="text-muted">Sales Executive, NY</span>
                                                    </div>
                                                    <div class=" float-right">
                                                        <strong>$780.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="media mb-4">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                        <h6 class="text-uppercase mb-0">james alexender</h6>
                                                        <span class="text-muted">Sales Executive, FL</span>
                                                    </div>
                                                    <div class=" float-right">
                                                        <strong>$480.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="media mb-4">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                        <h6 class="text-uppercase mb-0">ursula sitorus</h6>
                                                        <span class="text-muted">Sales Executive, CA</span>
                                                    </div>
                                                    <div class=" float-right">
                                                        <strong>$360.00 <i class="fa fa-level-down text-danger pl-2"></i></strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="media mb-3">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                        <h6 class="text-uppercase mb-0">jonna pinedda</h6>
                                                        <span class="text-muted">Sales Executive, MI</span>
                                                    </div>
                                                    <div class=" float-right">
                                                        <strong>$180.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="text-center">
                                            <a href="javascript:;" class="more-list">
                                                <i class=" vl_ellipsis-fill-h"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                                    <ul class="list-unstyled mb-0 list-widget">
                                        <li>
                                            <div class="media mb-4">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                        <h6 class="text-uppercase mb-0">james alexender</h6>
                                                        <span class="text-muted">Sales Executive, FL</span>
                                                    </div>
                                                    <div class=" float-right">
                                                        <strong>$480.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="media mb-3">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                        <h6 class="text-uppercase mb-0">jonna pinedda</h6>
                                                        <span class="text-muted">Sales Executive, MI</span>
                                                    </div>
                                                    <div class=" float-right">
                                                        <strong>$180.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="media mb-4">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                        <h6 class="text-uppercase mb-0">ursula sitorus</h6>
                                                        <span class="text-muted">Sales Executive, CA</span>
                                                    </div>
                                                    <div class=" float-right">
                                                        <strong>$360.00 <i class="fa fa-level-down text-danger pl-2"></i></strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="media mb-4">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                        <h6 class="text-uppercase mb-0">shirley hoe</h6>
                                                        <span class="text-muted">Sales Executive, NY</span>
                                                    </div>
                                                    <div class=" float-right">
                                                        <strong>$780.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="text-center">
                                            <a href="javascript:;" class="more-list">
                                                <i class="vl_ellipsis-fill-h"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card card-shadow mb-4 ">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-warning">
                                <div class="custom-title">Support Tickets</div>
                                <div class=" widget-action-link">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                            Filter <i class="fa fa-caret-down pl-2"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                            <a class="dropdown-item" href="#"> Edit</a>
                                            <a class="dropdown-item" href="#"> Delete</a>
                                            <a class="dropdown-item" href="#"> Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0 list-widget">
                                <li>
                                    <div class="media mb-4">
                                        <div class="mr-3 rounded-circle bg-success st-alphabet">
                                            J
                                            <span class="status bg-success"></span>
                                        </div>
                                        <div class="media-body list-widget-border">
                                            <div class="float-left">
                                                <h6 class="text-uppercase mb-0">Joseph Farnandez <span class="badge badge-warning text-light form-pill px-3 py-1 ml-2">Pending</span></h6>
                                                <span class="text-muted">I am facing some trouble with my viewport. When i start my</span>
                                            </div>
                                            <div class=" float-right">
                                                <small class="text-muted">8:40 PM</small>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="media mb-4">
                                        <div class="mr-3 rounded-circle bg-warning st-alphabet">
                                            M
                                            <span class="status bg-secondary"></span>
                                        </div>
                                        <div class="media-body list-widget-border">
                                            <div class="float-left">
                                                <h6 class="text-uppercase mb-0">martin anderson  <span class="badge badge-success text-light form-pill px-3 py-1 ml-2">Open</span></h6>
                                                <span class="text-muted">I have some query regarding the license issue.</span>
                                            </div>
                                            <div class=" float-right">
                                                <small class="text-muted">1 Day Ago</small>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="media mb-4">
                                        <div class="mr-3 rounded-circle bg-primary st-alphabet">
                                            L
                                            <span class="status bg-warning"></span>
                                        </div>
                                        <div class="media-body list-widget-border">
                                            <div class="float-left">
                                                <h6 class="text-uppercase mb-0">libson james <span class="badge badge-secondary text-light form-pill px-3 py-1 ml-2">Closed</span> </h6>
                                                <span class="text-muted">Is there any update plan for RTL version near future?</span>
                                            </div>
                                            <div class=" float-right">
                                                <small class="text-muted">2 Days Ago</small>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="media mb-3">
                                        <div class="mr-3 rounded-circle bg-pink st-alphabet">
                                            A
                                            <span class="status bg-success"></span>
                                        </div>
                                        <div class="media-body list-widget-border">
                                            <div class="float-left">
                                                <h6 class="text-uppercase mb-0">alex voxy <span class="badge badge-warning text-light form-pill px-3 py-1 ml-2">Open</span> </h6>
                                                <span class="text-muted">My client site is broken in most of the windows browser</span>
                                            </div>
                                            <div class=" float-right">
                                                <small class="text-muted">4 Days Ago</small>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li class="text-center">
                                    <a href="javascript:;" class=" more-list">
                                        <i class=" vl_ellipsis-fill-h"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/member performance & support ticket-->


@endsection