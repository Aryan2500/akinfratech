<div class="row">
    <div class="col-6">
        <span class="float-label mt-2">
            <input type="text" class="form-control form-control-lg" name="name" placeholder="Name"
                value="{{ $block ? $block->name : '' }}">
            <label class="form-label" for="TextInput">Name</label>
        </span>
    </div>
    <div class="col-6 mt-2">
        <span class="float-label">
            <input type="text" class="form-control form-control-lg" name="area"
                value="{{ $block ? $block->area : '' }}" placeholder="Area in square feets">
            <label class="form-label" for="TextInput">Area</label>
        </span>
    </div>
    <div class="col-6 mt-4">
        <span class="float-label">
            <input type="number" class="form-control form-control-lg" name="booked_area"
                value="{{ $block ? $block->booked_area : '' }}" placeholder="Booked Area in sq feets">
            <label class="form-label" for="TextInput">Booked Area</label>
        </span>
    </div>
    <div class="col-6 mt-4">
        <label class="form-group float-label">
            <select class="form-control form-control-lg custom-select" name="site_id">
                <option value="">Choose Site</option>
                @foreach ($sites as $site)
                    <option value="{{ $site->id }}"
                        {{ $block ? ($block->site_id == $site->id ? 'selected' : '') : '' }}>{{ $site->name }}
                    </option>
                @endforeach
            </select>
            <span>Site</span>

        </label>
    </div>
</div>
