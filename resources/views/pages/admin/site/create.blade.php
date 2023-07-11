@extends('layout.base')

@section('main_section')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="card-title mb-0">Create Site</h6>
        </div>
        <div class="card-body">
            <form class="row g-3 maskking-form" id="siteForm" method="post" action="{{ route('site.store') }}">
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
                            <input type="text" class="form-control form-control-lg" id="TextInput" name="address"
                                placeholder="Name">
                            <label class="form-label" for="TextInput">Address</label>
                        </span>
                    </div>
                    <div class="col-6 mt-4">
                        <span class="float-label">
                            <input type="text" class="form-control form-control-lg" id="TextInput" name="total_size"
                                placeholder="Total Size">
                            <label class="form-label" for="TextInput">Total Size</label>
                        </span>
                    </div>
                    <div class="col-6 mt-4">
                        <label class="form-group float-label">
                            <select class="form-control form-control-lg custom-select" name="sitehead_id">
                                <option value="">Choose Site Head</option>
                                @foreach ($site_heads as $head)
                                    @if ($head->type->name == SITE_HEAD)
                                        <option value="{{ $head->id }}">{{ $head->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <span>SIte Head</span>
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
    <script src="{{ asset('assets/js/site-form-validator.js') }}"></script>
@endpush
