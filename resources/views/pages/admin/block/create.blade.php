@extends('layout.' . $layoutfor)


@section('main_section')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="card-title mb-0">{{ $page_heading }}</h6>

        </div>
        <div class="card-body">
            <form class="row g-3 maskking-form" id="siteForm" method="post" action="{{ route('block.store') }}">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <span class="float-label mt-2">
                            <input type="text" class="form-control form-control-lg" name="name" placeholder="Name">
                            <label class="form-label" for="TextInput">Name</label>
                        </span>
                    </div>
                    <div class="col-6 mt-2">
                        <span class="float-label">
                            <input type="text" class="form-control form-control-lg" name="area"
                                placeholder="Area in square feets">
                            <label class="form-label" for="TextInput">Area</label>
                        </span>
                    </div>
                    <div class="col-6 mt-4">
                        <span class="float-label">
                            <input type="number" class="form-control form-control-lg" name="booked_area"
                                placeholder="Booked Area in sq feets">
                            <label class="form-label" for="TextInput">Booked Area</label>
                        </span>
                    </div>
                    <div class="col-6 mt-4">
                        <label class="form-group float-label">
                            <select class="form-control form-control-lg custom-select" name="site_id">
                                <option value="">Choose Site</option>
                                @foreach ($sites as $site)
                                    <option value="{{ $site->id }}">{{ $site->name }}</option>
                                @endforeach
                            </select>
                            <span>Site</span>

                        </label>
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
    <script src=""></script>
@endpush

@push('scripts')
    <script src="{{ asset('assets/js/site-form-validator.js') }}"></script>
@endpush
