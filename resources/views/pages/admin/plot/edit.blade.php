@extends('layout.' . $layoutfor)


@section('main_section')
    @include('partials.alerts')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="card-title mb-0">Update Plot</h6>
        </div>

        <div class="card-body">
            <form class="row g-3 maskking-form" id="plotForm" method="post" action="{{ route('plot.update') }}">
                @include('pages.admin.plot.form')
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/plot-form-validator.js') }}"></script>
@endpush
