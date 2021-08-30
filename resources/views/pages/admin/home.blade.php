@extends('layouts.account')

@section('content')

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex"
                 id="dashboardDate">
                <span class="input-group-addon bg-transparent"><i data-feather="calendar"
                                                                  class=" text-primary"></i></span>
                <input type="text" class="form-control">
            </div>
            {{--<button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">--}}
                {{--<i class="btn-icon-prepend" data-feather="download"></i>--}}
                {{--Import--}}
            {{--</button>--}}
            {{--<button type="button" class="btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0">--}}
                {{--<i class="btn-icon-prepend" data-feather="printer"></i>--}}
                {{--Print--}}
            {{--</button>--}}
            {{--<button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">--}}
                {{--<i class="btn-icon-prepend" data-feather="download-cloud"></i>--}}
                {{--Download Report--}}
            {{--</button>--}}
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">Subscribers</h6>
                                <div class="dropdown mb-2">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2">{{ $subscribers_count }}</h3>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">Codes Generated</h6>
                                <div class="dropdown mb-2">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">{{ $codes_count }}</h3>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">Movie Views</h6>
                                <div class="dropdown mb-2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">{{ $views_count }}</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- row -->
    {{--<div class="row">--}}
        {{--<div class="col-12 col-xl-12 grid-margin stretch-card">--}}
            {{--<div class="card overflow-hidden">--}}
                {{--<div class="card-body">--}}
                    {{--<div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">--}}
                        {{--<h6 class="card-title mb-0">Revenue</h6>--}}
                        {{--<div class="dropdown">--}}
                            {{--<button class="btn p-0" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row align-items-start mb-2">--}}
                        {{--<div class="col-md-7">--}}
                            {{--<p class="text-muted tx-13 mb-3 mb-md-0">Revenue is the income that a business has from its normal business activities, usually from the sale of goods and services to customers.</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-5 d-flex justify-content-md-end">--}}
                            {{--<div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">--}}
                                {{--<button type="button" class="btn btn-outline-primary">Today</button>--}}
                                {{--<button type="button" class="btn btn-outline-primary d-none d-md-block">Week</button>--}}
                                {{--<button type="button" class="btn btn-primary">Month</button>--}}
                                {{--<button type="button" class="btn btn-outline-primary">Year</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="flot-wrapper">--}}
                        {{--<div id="flotChart1" class="flot-chart"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div> <!-- row -->--}}

    {{--<div class="row">--}}
        {{--<div class="col-lg-7 col-xl-8 grid-margin stretch-card">--}}
            {{--<div class="card">--}}
                {{--<div class="card-body">--}}
                    {{--<div class="d-flex justify-content-between align-items-baseline mb-2">--}}
                        {{--<h6 class="card-title mb-0">Monthly sales</h6>--}}
                        {{--<div class="dropdown mb-2">--}}
                            {{--<button class="btn p-0" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
                            {{--</button>--}}
                            {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton4">--}}
                                {{--<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
                                {{--<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
                                {{--<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
                                {{--<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
                                {{--<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<p class="text-muted mb-4">Sales are activities related to selling or the number of goods or services sold in a given time period.</p>--}}
                    {{--<div class="monthly-sales-chart-wrapper">--}}
                        {{--<canvas id="monthly-sales-chart"></canvas>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-5 col-xl-4 grid-margin stretch-card">--}}
            {{--<div class="card">--}}
                {{--<div class="card-body">--}}
                    {{--<div class="d-flex justify-content-between align-items-baseline mb-2">--}}
                        {{--<h6 class="card-title mb-0">Cloud storage</h6>--}}
                        {{--<div class="dropdown mb-2">--}}
                            {{--<button class="btn p-0" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
                            {{--</button>--}}
                            {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">--}}
                                {{--<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
                                {{--<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
                                {{--<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
                                {{--<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
                                {{--<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="progressbar1" class="mx-auto"></div>--}}
                    {{--<div class="row mt-4 mb-3">--}}
                        {{--<div class="col-6 d-flex justify-content-end">--}}
                            {{--<div>--}}
                                {{--<label class="d-flex align-items-center justify-content-end tx-10 text-uppercase font-weight-medium">Total storage <span class="p-1 ml-1 rounded-circle bg-primary-muted"></span></label>--}}
                                {{--<h5 class="font-weight-bold mb-0 text-right">8TB</h5>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-6">--}}
                            {{--<div>--}}
                                {{--<label class="d-flex align-items-center tx-10 text-uppercase font-weight-medium"><span class="p-1 mr-1 rounded-circle bg-primary"></span> Used storage</label>--}}
                                {{--<h5 class="font-weight-bold mb-0">6TB</h5>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<button class="btn btn-primary btn-block">Upgrade storage</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div> <!-- row -->--}}

    <div class="row">
        <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Subscriber</h6>
                        <div class="dropdown mb-2">
                            <button class="btn p-0" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6">
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('codepage') }}"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                      
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                                                
                        <a href="#" class="d-flex align-items-center border-bottom pb-3">
                           
                            <div class="w-100">
                                
                               @foreach($subscribers as $key => $subscriber)
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-body mb-2">{{ $subscriber->email }}</h6>
                                    <p class="text-muted tx-12">{{ \Carbon\Carbon::parse($subscriber->created_at)->diffForhumans() }}</p>
                                </div>
                               
                                @endforeach
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-xl-8 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Codes Sent</h6>
                        <div class="dropdown mb-2">
                            <button class="btn p-0" type="button" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton7">
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('codepage') }}"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>

                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th class="pt-0">#</th>
                                <th class="pt-0">Email</th>
                                <th class="pt-0">Code</th>
                                <th class="pt-0">Expiry Date</th>
                                <th class="pt-0">Views</th>
                                <th class="pt-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($latest_codes as $key => $code)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $code->email }}</td>
                                <td>{{ $code->code }}</td>
                                <td> {{ \Carbon\Carbon::parse($code->code_expiry_date)->diffForhumans() }}</td>
                                <td>{{ $code->views_count }}</td>
                                <td>
                                    <form action="{{route('deletecode', $code->id)}}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
  
                                        <button type="submit" class="btn btn-danger btn-sm btn-icon"><i class="btn-icon-prepend" data-feather="trash"></i></button>
                                        </form>
                                        <a href="{{ route('regeneratedcount',$code->id) }}" class="btn btn-warning btn-icon btn-sm">
                                          <i class="btn-icon-prepend" data-feather="edit"></i> 
                                      </a>
                                </td>
                               
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- row -->


@endsection

