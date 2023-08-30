<div class="row " id="inputParent">
    {{-- {{dd($farmer->sites)}} --}}

    <input type="hidden" name="id" value="{{ $customer ? $customer->id : '' }}">

    <div class="col-lg-6 col-md-6">
        <label class="form-label">Select Associate</label>
        <select class="form-control show-tick   select2" data-placeholder="Select" required name="parent_id">
            <option id="" value="">--Select--</option>

            @foreach (UserHelper::getAssociates() as $a)
                <option value="{{ $a->id }}"
                    {{ $customer ? ($customer->parent_id == $a->id ? 'selected="selected"' : '') : '' }}>
                    {{ $a->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-lg-6 col-md-6">
        <label class="form-label">Title</label>
        <select class="form-control show-tick   select2" required data-placeholder="Select" name="title"
            id="city_select">
            <option id="" value="">--Select--</option>
            <option id="" value="S/o">S/o</option>
            <option id="" value="D/o">D/o</option>
            <option id="" value="W/o">W/o</option>
        </select>
    </div>

    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="date" class="form-control form-control-lg" id="TextInput" name="dob" required
                placeholder="Date Of Birth" value="{{ $customer ? $customer->dob : '' }}">
            <label class="form-label" for="TextInput">Date of Birth</label>
        </span>
    </div>

    <div class="col-lg-6 col-md-6">
        <label class="form-label">Gender</label>
        <select class="form-control show-tick   select2" required data-placeholder="Select" name="gender"
            id="city_select">
            <option id="" value="">--Select--</option>
            <option id="" value="Male">Male</option>
            <option id="" value="Female">Female</option>
            <option id="" value="Other">Other</option>
        </select>
    </div>

    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="text" class="form-control form-control-lg" id="TextInput" name="name" required
                placeholder="Name" value="{{ $customer ? $customer->name : '' }}">
            <label class="form-label" for="TextInput">Name</label>
        </span>
    </div>

    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="email" class="form-control form-control-lg" required id="TextInput" name="email"
                placeholder="Email" value="{{ $customer ? $customer->email : '' }}">
            <label class="form-label" for="TextInput">Email</label>
        </span>
    </div>

    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="number" class="form-control form-control-lg" id="TextInput" name="phone" required
                placeholder="Phone Number" value="{{ $customer ? $farmer->phone : '' }}">
            <label class="form-label" for="TextInput">Phone Number</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <textarea class="form-control form-control-lg" id="TextInput" required name="address" id="">{{ $customer ? $customer->address : '' }}</textarea>
            <label class="form-label" for="TextInput">Permanent Address</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="number" class="form-control form-control-lg" id="TextInput" name="pin_code" required
                placeholder="Pin code" value="{{ $customer ? $farmer->pin_code : '' }}">
            <label class="form-label" for="TextInput">Pin code</label>
        </span>
    </div>

    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="number" class="form-control form-control-lg" id="city" name="city" required
                placeholder="City" value="{{ $customer ? $farmer->city : '' }}">
            <label class="form-label" for="city">City</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="number" class="form-control form-control-lg" id="state" name="state" required
                placeholder="State" value="{{ $customer ? $farmer->state : '' }}">
            <label class="form-label" for="state">State</label>
        </span>
    </div>
    <hr class="my-2">
    <div class="col-6 mt-3">
        <span class="float-label">
            <textarea class="form-control form-control-lg" id="TextInput" required name="corresponding_address" id="">{{ $customer ? $customer->corresponding_address : '' }}</textarea>
            <label class="form-label" for="TextInput">Corresponding Address</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="number" class="form-control form-control-lg" id="pin" name="corres_pin_code"
                required placeholder="Pin code" value="{{ $customer ? $farmer->corres_pin_code : '' }}">
            <label class="form-label" for="pin">Pin code</label>
        </span>
    </div>

    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="number" class="form-control form-control-lg" id="city" name="corres_city" required
                placeholder="City" value="{{ $customer ? $farmer->corres_city : '' }}">
            <label class="form-label" for="city">City</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="number" class="form-control form-control-lg" id="state" name="corres_state" required
                placeholder="State" value="{{ $customer ? $farmer->corres_state : '' }}">
            <label class="form-label" for="state">State</label>
        </span>
    </div>
    <hr class="my-2">
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="number" class="form-control form-control-lg" id="Addhar" name="aadhar_number" required
                placeholder="Addhar" value="{{ $customer ? $farmer->aadhar_number : '' }}">
            <label class="form-label" for="Addhar">Aadhar number</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="number" class="form-control form-control-lg" id="occupation" name="occupation" required
                placeholder="Occupation" value="{{ $customer ? $farmer->occupation : '' }}">
            <label class="form-label" for="occupation">Occupation</label>
        </span>
    </div>

    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="number" class="form-control form-control-lg" id="Nationality" name="nationality" required
                placeholder="Nationality" value="{{ $customer ? $farmer->nationality : '' }}">
            <label class="form-label" for="Nationality">Nationality</label>
        </span>
    </div>
</div>
