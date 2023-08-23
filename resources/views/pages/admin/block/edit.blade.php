@extends('layout.' . $layoutfor)


@section('main_section')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="card-title mb-0">{{ $page_heading }}</h6>
        </div>
        <div class="card-body">
            <form class="row g-3 maskking-form" id="siteForm" method="post" action="{{ route('block.update') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $block ? $block->id : '' }}">
                @include('pages.admin.block.form')
                <div class="col-2">
                    <button type="submit" class=" btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src=""></script>
@endpush

@push('scripts')
    <script src="{{ asset('assets/js/site-form-validator.js') }}"></script>
@endpush
