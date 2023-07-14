@extends('layout.base')

@section('main_section')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="card-title mb-0">Create Site</h6>
            <button class="btn btn-danger remove-section" type="button">Remove</button>
        </div>
        <div class="card-body">
            <form class="row g-3 maskking-form" id="siteForm" method="post" action="{{ route('site.store') }}">
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
                            <input type="text" class="form-control form-control-lg" name="address" placeholder="Name">
                            <label class="form-label" for="TextInput">Address</label>
                        </span>
                    </div>
                    <div class="col-6 mt-4">
                        <span class="float-label">
                            <input type="number" class="form-control form-control-lg" name="total_size"
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
                    <div class="col-12 mt-4">

                        <div id="investor_details" style="border: 1px solid gray ; padding:10px">
                            <div class="row" id="investorDetail">

                                <div class="col-5">

                                    <span class="float-label">
                                        <input type="number" class="form-control form-control  form-control-lg"
                                            name="amount[]" placeholder="Total Size">
                                        <label class="form-label" for="TextInput">Amount Invested</label>
                                    </span>

                                </div>
                                <div class="col-5">
                                    <label class="form-group float-label">
                                        <select class="form-control form-control-lg custom-select" name="investor_id[]">
                                            <option value="">Choose Investor</option>
                                            @foreach ($site_heads as $head)
                                                @if ($head->type->name == INVESTOR)
                                                    <option value="{{ $head->id }}">{{ $head->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <span>Investor</span>
                                    </label>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary " id="add_investor_btn">Add More</button>
                                </div>
                            </div>
                        </div>

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

    <script>
        var detailSection = `<div class="row mt-3" >
                                        <div class="col-5">
                                            <span class="float-label">
                                                <input type="text" class="form-control form-control  form-control-lg"
                                                    name="amount[]" placeholder="Total Size">
                                                <label class="form-label" for="TextInput">Amount Invested</label>
                                            </span>
                                        </div>
                                        <div class="col-5">
                                            <label class="form-group float-label">
                                                <select class="form-control form-control-lg custom-select" name="investor_id[]">
                                                    <option value="">Choose Investor</option>
                                                    @foreach ($site_heads as $head)
                                                        @if ($head->type->name == INVESTOR)
                                                            <option value="{{ $head->id }}">{{ $head->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <span>Investor</span>
                                            </label>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-danger remove-section" type="button">Remove</button>
                                        </div>
                                    </div>`;



        $("#add_investor_btn").click(function(e) {
            $("#investor_details").append(detailSection);
        });

        $(".remove-section").click(function() {
            alert('hello');
        });
    </script>
@endpush
