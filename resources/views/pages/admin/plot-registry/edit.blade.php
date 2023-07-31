@extends('layout.base')

@section('main_section')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="card-title mb-0">Update Plot Registry</h6>
        </div>
        <div class="card-body">
            <form class="row g-3 maskking-form" id="siteForm" method="post" action="{{ route('plot-registry.update') }}">
                @include('pages.admin.plot-registry.form')
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/site-form-validator.js') }}"></script>
@endpush
