<div>
    @csrf
    <input type="hidden" name="id" value="{{ $plot ? $plot->id : '' }}">
    <div class="row">
        <div class="col-6">
            <span class="float-label mt-2">
                <input type="text" class="form-control form-control-lg" id="TextInput" name="name" placeholder="Name"
                    value="{{ $plot ? $plot->name : '' }}" required>
                <label class="form-label" for="TextInput">Name</label>
            </span>
        </div>
        <div class="col-6 mt-2">
            <span class="float-label">
                <input type="text" class="form-control form-control-lg" id="TextInput" name="size" required
                    value="{{ $plot ? $plot->size : '' }}" placeholder="Size">
                <label class="form-label" for="TextInput">Size</label>
            </span>
        </div>
        <div class="col-6 mt-2">
            <span class="float-label">
                <input type="text" class="form-control form-control-lg" id="TextInput" name="address" required
                    value="{{ $plot ? $plot->address : '' }}" placeholder="Address">
                <label class="form-label" for="TextInput">Address</label>
            </span>
        </div>
        <div class="col-6 mt-2">
            <span class="float-label">
                <input type="text" class="form-control form-control-lg" id="TextInput" name="price" required
                    placeholder="Price" value="{{ $plot ? $plot->price : '' }}">
                <label class="form-label" for="TextInput">Price</label>
            </span>
        </div>
        <div class="col-6 mt-2">
            <label class="form-group float-label">
                <select class="form-control form-control-lg custom-select" name="site_id" required>
                    <option value="">Choose Site </option>
                    @foreach (SiteHelper::getAllSites() as $site)
                        <option value="{{ $site->id }}"
                            {{ $plot ? ($plot->site_id == $site->id ? 'selected' : '') : '' }}>
                            {{ $site->name }}</option>
                    @endforeach
                </select>
                <span>Site</span>
            </label>
        </div>
        <div class="col-6 mt-2">
            <label class="form-group float-label">
                <select class="form-control form-control-lg custom-select" name="plottype_id" required>
                    <option value="">Choose Plot type </option>
                    @foreach (PlotHelper::getAllPlotTypes() as $ptype)
                        <option value="{{ $ptype->id }}"
                            {{ $plot ? ($plot->plottype_id == $ptype->id ? 'selected' : '') : '' }}>
                            {{ $ptype->name }}</option>
                    @endforeach
                </select>
                <span>Plot type</span>
            </label>
        </div>
    </div>

    <div class="col-2">
        <button type="submit" class=" btn btn-primary">Submit</button>
    </div>
</div>
