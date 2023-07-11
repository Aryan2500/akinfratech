@extends('layout.base')

@section('main_section')
    @include('partials.alerts')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="card-title mb-0">Create Plot</h6>
        </div>

        <div class="card-body">
            <form class="row g-3 maskking-form" id="plotForm" method="post" action="{{ route('plot.store') }}">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <span class="float-label mt-2">
                            <input type="text" class="form-control form-control-lg" id="TextInput" name="name"
                                placeholder="Name">
                            <label class="form-label" for="TextInput">Name</label>
                        </span>
                    </div>
                    <div class="col-6 mt-2">
                        <span class="float-label">
                            <input type="text" class="form-control form-control-lg" id="TextInput" name="size"
                                placeholder="Size">
                            <label class="form-label" for="TextInput">Size</label>
                        </span>
                    </div>
                    <div class="col-6 mt-2">
                        <span class="float-label">
                            <input type="text" class="form-control form-control-lg" id="TextInput" name="address"
                                placeholder="Address">
                            <label class="form-label" for="TextInput">Address</label>
                        </span>
                    </div>
                    <div class="col-6 mt-2">
                        <span class="float-label">
                            <input type="text" class="form-control form-control-lg" id="TextInput" name="price"
                                placeholder="Price">
                            <label class="form-label" for="TextInput">Price</label>
                        </span>
                    </div>
                    <div class="col-6 mt-2">
                        <label class="form-group float-label">
                            <select class="form-control form-control-lg custom-select" name="site_id">
                                <option value="">Choose Site </option>
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
    <script src="{{ asset('assets/js/plot-form-validator.js') }}"></script>
@endpush
