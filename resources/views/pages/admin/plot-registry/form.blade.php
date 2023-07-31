<div>
    @csrf
    <input type="hidden" name="id" value="{{ $registry ? $registry->id : '' }}">
    <div class="row">
        <div class="col-6 ">
            <label class="form-group float-label">
                <select class="form-control form-control-lg custom-select" name="site_id">
                    <option value="">Choose Site Head</option>
                    @foreach (SiteHelper::getAllSites() as $site)
                        <option value="{{ $site->id }}"
                            {{ $registry ? ($registry->site_id == $site->id ? 'selected' : '') : '' }}>
                            {{ $site->name }}
                        </option>
                    @endforeach
                </select>
                <span>Sites</span>
            </label>
        </div>

        <div class="col-6">
            <label class="form-group float-label">
                <select class="form-control form-control-lg custom-select" name="plot_id">
                    <option value="">Choose Plot</option>
                    @foreach (PlotHelper::getAllPlots() as $plot)
                        <option value="{{ $plot->id }}"
                            {{ $registry ? ($registry->plot_id == $plot->id ? 'selected' : '') : '' }}>
                            {{ $plot->name }}
                        </option>
                    @endforeach
                </select>
                <span>Plot</span>
            </label>
        </div>

        <div class="col-6">
            <span class="float-label mt-3">
                <input type="text" class="form-control form-control-lg" name="booking_id" placeholder="Booking Id"
                    value="{{ $registry ? $registry->booking_id : '' }}">
                <label class="form-label" for="TextInput">Booking ID</label>
            </span>
        </div>
        <div class="col-6">
            <span class="float-label mt-3">
                <input type="text" class="form-control form-control-lg" name="customer_id" placeholder="Customer ID"
                    value="{{ $registry ? $registry->customer_id : '' }}">
                <label class="form-label" for="TextInput">Customer ID</label>
            </span>
        </div>
        <div class="col-6">
            <span class="float-label mt-3">
                <input type="text" class="form-control form-control-lg" name="customer_name"
                    placeholder="Customer Name" value="{{ $registry ? $registry->customer_name : '' }}">
                <label class="form-label" for="TextInput">Customer Name</label>
            </span>
        </div>
        <div class="col-6">
            <span class="float-label mt-3">
                <input type="text" class="form-control form-control-lg" name="gata_number" placeholder="Gata Number"
                    value="{{ $registry ? $registry->gata_number : '' }}">
                <label class="form-label" for="TextInput">Gata Number</label>
            </span>
        </div>
        <div class="col-6">
            <span class="float-label mt-3">
                <input type="text" class="form-control form-control-lg" name="saler_name" placeholder="Saler Name"
                    value="{{ $registry ? $registry->saler_name : '' }}">
                <label class="form-label" for="TextInput">Saler Name</label>
            </span>
        </div>

        <div class="col-6">
            <span class="float-label mt-3">
                <input type="text" class="form-control form-control-lg" name="register_number"
                    placeholder="Register Number" value="{{ $registry ? $registry->register_number : '' }}">
                <label class="form-label" for="TextInput">Register Number</label>
            </span>
        </div>

        <div class="col-6">
            <span class="float-label mt-3">
                <input type="text" class="form-control form-control-lg" name="discount_amount"
                    placeholder="Discount Amount" value="{{ $registry ? $registry->discount_amount : '' }}">
                <label class="form-label" for="TextInput">Discount Amount</label>
            </span>
        </div>
        <div class="col-6">
            <span class="float-label mt-3">
                <input type="text" class="form-control form-control-lg" name="balance_amount"
                    placeholder="Balance Amount" value="{{ $registry ? $registry->balance_amount : '' }}">
                <label class="form-label" for="TextInput">Discount Amount</label>
            </span>
        </div>
        <div class="col-6">
            <span class="float-label mt-3">
                <input type="text" class="form-control form-control-lg" name="paid_amount" placeholder="Paid Amount"
                    value="{{ $registry ? $registry->paid_amount : '' }}">
                <label class="form-label" for="TextInput">Paid Amount</label>
            </span>
        </div>
    </div>

    <div class="col-2">
        <button type="submit" class=" btn btn-primary">Register</button>
    </div>
</div>
