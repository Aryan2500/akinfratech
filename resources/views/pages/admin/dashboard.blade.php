@extends('layout.base')

@section('main_section')
    <!--[ Start:: page body area ]-->

    <!--[ Start:: My Dashboard ]-->
    <div class="row g-3 row-deck">
        <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3>{{ $users }} </h3>
                    <p class="text-muted"> <i class="fa fa-users text-success"></i> Total Users</p>
                    <div id="apexspark_bar_1"></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3>{{ $sites }} </h3>
                    <p class="text-muted"><i class="fa fa-building text-success"></i> Total Sites
                    </p>
                    <div id="apexspark_bar_2"></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3>{{ $plots }} </h3>
                    <p class="text-muted"><i class="fa fa-building text-success"></i> Total Plots</p>
                    <div id="apexspark_bar_3"></div>
                </div>
            </div>
        </div>
        {{-- <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3>$1025</h3>
                    <p class="text-muted">52% <i class="fa fa-level-up text-success"></i> Bounce Rate</p>
                    <div id="apexspark_bar_4"></div>
                </div>
            </div>
        </div> --}}

    </div>
@endsection
