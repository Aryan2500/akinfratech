@extends('layout.base')

@section('main_section')
    <!--[ Start:: page body area ]-->

    <!--[ Start:: My Dashboard ]-->
    <div class="row g-3 row-deck">
        <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
            <div class="card" data-bs-toggle="modal" data-bs-target="#userModal" style="cursor: pointer">
                <div class="card-body">
                    <h3>{{ $users }} </h3>
                    <p class="text-muted"> <i class="fa fa-users text-success"></i> Total Users</p>
                    <div id="apexspark_bar_1"></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
            <div class="card" data-bs-toggle="modal" data-bs-target="#siteModal" style="cursor: pointer">
                <div class="card-body">
                    <h3>{{ $sites }} </h3>
                    <p class="text-muted"><i class="fa fa-building text-success"></i> Total Sites
                    </p>
                    <div id="apexspark_bar_2"></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
            <div class="card" data-bs-toggle="modal" data-bs-target="#plotModal" style="cursor: pointer">
                <div class="card-body">
                    <h3>{{ $plots }} </h3>
                    <p class="text-muted"><i class="fa fa-building text-success"></i> Total Plots</p>
                    <div id="apexspark_bar_3"></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
            <div class="card" data-bs-toggle="modal" data-bs-target="#farmerModal" style="cursor: pointer">
                <div class="card-body">
                    <h3>{{ $farmers }} </h3>
                    <p class="text-muted"><i class="fa fa-building text-success"></i> Total Farmer</p>
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

        @include('pages.admin.dashboard.farmer-list-modal')
        @include('pages.admin.dashboard.site-list-modal')
        @include('pages.admin.dashboard.plot-list-modal')
        @include('pages.admin.dashboard.user-list-modal')
    </div>
    <div class="row row-deck-site-wise" style="display:none">
        {{-- <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
            <div class="card" data-bs-toggle="modal" data-bs-target="#userModal" style="cursor: pointer">
                <div class="card-body">
                    <h3>{{ $users }} </h3>
                    <p class="text-muted"> <i class="fa fa-users text-success"></i> Total Users</p>
                    <div id="apexspark_bar_1"></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
            <div class="card" data-bs-toggle="modal" data-bs-target="#siteModal" style="cursor: pointer">
                <div class="card-body">
                    <h3>{{ $sites }} </h3>
                    <p class="text-muted"><i class="fa fa-building text-success"></i> Total Sites
                    </p>
                    <div id="apexspark_bar_2"></div>
                </div>
            </div>
        </div> --}}
        <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
            <div class="card" data-bs-toggle="modal" data-bs-target="#plotModal" style="cursor: pointer">
                <div class="card-body">
                    <h3 id="numberOfPlots">{{ $plots }} </h3>
                    <p class="text-muted"><i class="fa fa-building text-success"></i> Plots</p>
                    <div id="apexspark_bar_3"></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
            <div class="card" data-bs-toggle="modal" data-bs-target="#farmerModal" style="cursor: pointer">
                <div class="card-body">
                    <h3 id="NumberOffarmer">{{ $farmers }} </h3>
                    <p class="text-muted"><i class="fa fa-building text-success"></i> Farmer</p>
                    <div id="apexspark_bar_3"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="chartContainer" style="margin-top: 50px;height: 300px; width: 50%;"></div>

    {{-- {{ FarmerHelper::getFarmersOfSite(1)->farmers }} --}}
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {
            $("#top_select_site").change(function(e) {
                getdata(e.target.value);
                $('.row-deck').fadeOut();
            });
        });

        function getdata($siteId) {
            $.ajax({
                type: "get",
                url: "{{ route('dashboardInfo') }}",
                data: {
                    'site_id': $siteId
                },
                success: function(res) {
                    console.log(res);
                    $("#numberOfPlots").text(res.plots);
                    $("#NumberOffarmer").text(res.farmers);
                    setTimeout(() => {
                        $('.row-deck-site-wise').fadeIn();
                    }, 500);

                }
            });
        }
    </script>
@endpush

@push('scripts')
    <script type="text/javascript">
        window.onload = function() {
            var options = {
                title: {
                    text: "Land"
                },
                data: [{
                    type: "pie",
                    startAngle: 45,
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabel: "{label} ({y})",
                    yValueFormatString: "#,##0.#" % "",
                    dataPoints: [{
                            label: "Available",
                            y: 1000
                        },
                        {
                            label: "Booked",
                            y: 31
                        },
                        // {
                        //     label: "Referrals",
                        //     y: 7
                        // },
                        // {
                        //     label: "Twitter",
                        //     y: 7
                        // },
                        // {
                        //     label: "Facebook",
                        //     y: 6
                        // },
                        // {
                        //     label: "Google",
                        //     y: 10
                        // },
                        // {
                        //     label: "Others",
                        //     y: 3
                        // }
                    ]
                }]
            };
            $("#chartContainer").CanvasJSChart(options);

        }
    </script>
@endpush
