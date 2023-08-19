@extends('layout.' . $layoutfor)

@section('page_css')
    <style>
        .node{
            color: white
        }
    </style>
@endsection

@section('main_section')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="card-title mb-0">User Downline</h6>
        </div>
        <div class="card-body">
            {!! UserHelper::createDownlineHtml($downline) !!}
        </div>
    </div>
@endsection


@push('scripts')
    <script src="{{ asset('assets/js/jquery.jOrgChart.js') }}"></script>
    <script src="{{ asset('assets/js/prettify.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            $("#org").jOrgChart();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.jOrgChart').appendTo('.card-body');
        });
    </script>
@endpush
