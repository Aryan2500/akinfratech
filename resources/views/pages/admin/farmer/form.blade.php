<div class="row " id="inputParent">
    {{-- {{dd($farmer->sites)}} --}}

    <input type="hidden" name="id" value="{{ $farmer ? $farmer->id : '' }}">

    <div class="col-lg-3 col-md-6">
        <label class="form-label">Select Site</label>
        <select class="form-control show-tick   select2" multiple data-placeholder="Select" required name="site_id[]">
            <option id="" value="">--Select--</option>

            @foreach (SiteHelper::getAllSites() as $s)
                <option value="{{ $s->id }}"
                    @if ($farmer) @foreach ($farmer->sites as $site)
                    {{ $site->id == $s->id ? ' selected="selected"' : '' }} @endforeach @endif>
                    {{ $s->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-lg-3 col-md-6">
        <label class="form-label">Select Country</label>
        <select class="form-control show-tick   select2" required data-placeholder="Select" name="country_id"
            id="country_select">
            <option id="" value="">--Select--</option>
            @foreach (LocationHelper::getCountries() as $c)
                <option value="{{ $c->id }}"
                    {{ $farmer ? ($farmer->country_id == $c->id ? 'selected' : '') : '' }}>{{ $c->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-lg-3 col-md-6">
        <label class="form-label">Select State</label>
        <select class="form-control show-tick   select2" required data-placeholder="Select" name="state_id"
            id="state_select">
            <option id="" value="">--Select--</option>

        </select>
    </div>
    <div class="col-lg-3 col-md-6">
        <label class="form-label">Select City</label>
        <select class="form-control show-tick   select2" required data-placeholder="Select" name="city_id"
            id="city_select">
            <option id="" value="">--Select--</option>

        </select>
    </div>


    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="text" class="form-control form-control-lg" required id="TextInput" name="name"
                placeholder="Name" value="{{ $farmer ? $farmer->name : '' }}">
            <label class="form-label" for="TextInput">Name</label>
        </span>
    </div>

    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="text" class="form-control form-control-lg" id="TextInput" name="phone" required
                placeholder="Phone Number" value="{{ $farmer ? $farmer->phone : '' }}">
            <label class="form-label" for="TextInput">Phone Number</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <textarea class="form-control form-control-lg" id="TextInput" required name="address" id="">{{ $farmer ? $farmer->address : '' }}</textarea>
            <label class="form-label" for="TextInput">Address</label>
        </span>
    </div>

</div>
