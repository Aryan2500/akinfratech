@extends('layout.base')

@section('main_section')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="card-title mb-0">Create Land</h6>
        </div>
        <div class="card-body">
            <form class="row g-3 maskking-form" id="siteForm" method="post" action="{{ route('land.store') }}">
                @csrf
                <div class="row">
                    <div class="col-6 ">
                        <label class="form-group float-label">
                            <select class="form-control form-control-lg custom-select" name="site_id">
                                <option value="">Choose Site Head</option>
                                @foreach (SiteHelper::getSites() as $site)
                                    <option value="{{ $site->id }}">{{ $site->name }}</option>
                                @endforeach
                            </select>
                            <span>SItes</span>
                        </label>
                    </div>

                    <div class="col-6">
                        <label class="form-group float-label">
                            <select class="form-control form-control-lg custom-select" name="farmer_id">
                                <option value="">Choose Investor</option>
                                @foreach ($farmers as $farmer)
                                    <option value="{{ $farmer->id }}">{{ $farmer->name }}</option>
                                @endforeach
                            </select>
                            <span>Farmer</span>
                        </label>
                    </div>

                    <div class="col-6">
                        <span class="float-label mt-3">
                            <input type="text" class="form-control form-control-lg" name="area" placeholder="Name">
                            <label class="form-label" for="TextInput">Area</label>
                        </span>
                    </div>
                    <div class="col-6">
                        <span class="float-label mt-3">
                            <input type="text" class="form-control form-control-lg" name="khasra_number"
                                placeholder="Name">
                            <label class="form-label" for="TextInput">Khasra Number</label>
                        </span>
                    </div>
                    <div class="col-6">
                        <span class="float-label mt-3">
                            <input type="text" class="form-control form-control-lg" name="rakba" placeholder="Name">
                            <label class="form-label" for="TextInput">Rakba</label>
                        </span>
                    </div>
                    <div class="col-6">
                        <span class="float-label mt-3">
                            <input type="text" class="form-control form-control-lg" name="payble_amount"
                                placeholder="Name">
                            <label class="form-label" for="TextInput">Payble Amount</label>
                        </span>
                    </div>
                    <div class="col-6 mt-3">
                        <label class="form-group float-label">
                            <select class="form-control form-control-lg custom-select" name="payment_mode">
                                <option value="">Choose Payment Mode</option>
                                @foreach (PAYMENT_MODE as $pm)
                                    <option value="{{ $pm }}">{{ $pm }}</option>
                                @endforeach
                            </select>
                            <span>Payment Mode</span>
                        </label>
                    </div>
                    <div class="col-6 mt-3">
                        <label class="form-group float-label">
                            <select class="form-control form-control-lg custom-select" name="registry_status">
                                <option value=1>Yes</option>
                                <option value=0>NO</option>
                            </select>
                            <span>Registry Status</span>
                        </label>
                    </div>

                    <div class="col-6">
                        <span class="float-label mt-3">
                            <input type="text" class="form-control form-control-lg" name="paid_amount"
                                placeholder="Name">
                            <label class="form-label" for="TextInput">Paid Amount</label>
                        </span>
                    </div>
                    <div class="col-6">
                        <span class="float-label mt-3">
                            <input type="text" class="form-control form-control-lg" name="balance_amount"
                                placeholder="Name">
                            <label class="form-label" for="TextInput">Balance Amount</label>
                        </span>
                    </div>
                    <div class="col-6">
                        <span class="float-label mt-3">
                            <input type="date" class="form-control form-control-lg" name="payment_date"
                                placeholder="Name">
                            <label class="form-label" for="TextInput">Payment Date</label>
                        </span>
                    </div>
                    <div class="col-6">
                        <span class="float-label mt-3">
                            <input type="text" class="form-control form-control-lg" name="total_size"
                                placeholder="Total Size">
                            <label class="form-label" for="TextInput">Total Size</label>
                        </span>
                    </div>
                    <div class="col-6">
                        <span class="float-label mt-3">
                            <textarea name="remark" id="" placeholder="Remark" class="form-control form-control-lg"></textarea>
                            <label class="form-label" for="TextInput">Remark</label>
                        </span>
                    </div>

                    <div class="col-6 mt-3">
                        <span class="float-label">
                            <input type="number" class="form-control form-control-lg" name="total_size"
                                placeholder="Total Size">
                            <label class="form-label" for="TextInput">Total Size</label>
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
