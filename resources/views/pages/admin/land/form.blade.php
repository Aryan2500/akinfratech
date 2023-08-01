<div>
    @csrf
    <input type="hidden" name="id" value="{{ $land ? $land->id : '' }}">
    <div class="row">
        <div class="col-6 ">
            <label class="form-group float-label">
                <select class="form-control form-control-lg custom-select" name="site_id" required>
                    <option value="">Choose Site Head</option>
                    @foreach (SiteHelper::getAllSites() as $site)
                        <option value="{{ $site->id }}"
                            {{ $land ? ($land->site_id == $site->id ? 'selected' : '') : '' }}>{{ $site->name }}
                        </option>
                    @endforeach
                </select>
                <span>SItes</span>
            </label>
        </div>

        <div class="col-6">
            <label class="form-group float-label">
                <select class="form-control form-control-lg custom-select" name="farmer_id" required>
                    <option value="">Choose Farmer</option>
                    @foreach (FarmerHelper::getAllFarmers() as $farmer)
                        <option value="{{ $farmer->id }}"
                            {{ $land ? ($land->farmer_id == $farmer->id ? 'selected' : '') : '' }}>{{ $farmer->name }}
                        </option>
                    @endforeach
                </select>
                <span>Farmer</span>
            </label>
        </div>

        <div class="col-6">
            <span class="float-label mt-3">
                <input type="text" class="form-control form-control-lg" name="area" placeholder="Name"
                    value="{{ $land ? $land->area : '' }}" required>
                <label class="form-label" for="TextInput">Area</label>
            </span>
        </div>
        <div class="col-6">
            <span class="float-label mt-3">
                <input type="text" class="form-control form-control-lg" name="khasra_number" placeholder="Name"
                    value="{{ $land ? $land->khasra_numbers : '' }}" required>
                <label class="form-label" for="TextInput">Khasra Number</label>
            </span>
        </div>
        <div class="col-6">
            <span class="float-label mt-3">
                <input type="text" class="form-control form-control-lg" name="rakba" placeholder="Name"
                    value="{{ $land ? $land->rakba : '' }}">
                <label class="form-label" for="TextInput">Rakba</label>
            </span>
        </div>
        <div class="col-6">
            <span class="float-label mt-3">
                <input type="text" class="form-control form-control-lg" name="payble_amount" placeholder="Name"
                    value="{{ $land ? $land->payble_amount : '' }}" required>
                <label class="form-label" for="TextInput">Payble Amount</label>
            </span>
        </div>
        <div class="col-6 mt-3">
            <label class="form-group float-label">
                <select class="form-control form-control-lg custom-select" name="payment_mode" required>
                    <option value="">Choose Payment Mode</option>
                    @foreach (PAYMENT_MODE as $pm)
                        <option value="{{ $pm }}"
                            {{ $land ? ($land->payment_mode == $pm ? 'selected' : '') : '' }}>
                            {{ $pm }}</option>
                    @endforeach
                </select>
                <span>Payment Mode</span>
            </label>
        </div>
        <div class="col-6 mt-3">
            <label class="form-group float-label">
                <select class="form-control form-control-lg custom-select" name="registry_status" required>
                    <option value=1 {{ $land ? $land->registry_status == 1 : 'selected' }}>Yes</option>
                    <option value=0 {{ $land ? $land->registry_status == 0 : 'selected' }}>NO</option>
                </select>
                <span>Registry Status</span>
            </label>
        </div>

        <div class="col-6">
            <span class="float-label mt-3">
                <input type="text" class="form-control form-control-lg" name="paid_amount" placeholder="Name"
                    required value="{{ $land ? $land->paid_amount : '' }}">
                <label class="form-label" for="TextInput">Paid Amount</label>
            </span>
        </div>
        <div class="col-6">
            <span class="float-label mt-3">
                <input type="text" class="form-control form-control-lg" name="balance_amount" placeholder="Name"
                    required value="{{ $land ? $land->balance_amount : '' }}">
                <label class="form-label" for="TextInput">Balance Amount</label>
            </span>
        </div>
        <div class="col-6">
            <span class="float-label mt-3">
                <input type="date" class="form-control form-control-lg" name="payment_date" placeholder="Name"
                    required value="{{ $land ? $land->payment_date : '' }}">
                <label class="form-label" for="TextInput">Payment Date</label>
            </span>
        </div>
        <div class="col-6">
            <span class="float-label mt-3">
                <input type="text" class="form-control form-control-lg" name="total_size" placeholder="Total Size"
                    required value="{{ $land ? $land->total_size : '' }}">
                <label class="form-label" for="TextInput">Total Size</label>
            </span>
        </div>
        <div class="col-6">
            <span class="float-label mt-3">
                <textarea name="remark" id="" placeholder="Remark" class="form-control form-control-lg" required></textarea>
                <label class="form-label" for="TextInput">Remark</label>
            </span>
        </div>

    </div>

    <div class="col-2">
        <button type="submit" class=" btn btn-primary">Submit</button>
    </div>
</div>
