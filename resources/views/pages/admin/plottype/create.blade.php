@extends('layout.base')

@section('main_section')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="card-title mb-0">Create Plot type</h6>
        </div>
        <div class="card-body">
            <form class="row g-3 maskking-form" id="siteForm" method="post" action="{{ route('plottype.store') }}">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <span class="float-label mt-2">
                            <input type="text" class="form-control form-control-lg" id="TextInput" name="name"
                                placeholder="Name">
                            <label class="form-label" for="TextInput">Name</label>
                        </span>
                    </div>

                </div>

                <div class="col-2">
                    <button type="submit" class=" btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="{{ asset('assets/js/site-form-validator.js') }}"></script>
@endpush
