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
        <label class="form-label">Gender</label>
        <select class="form-control show-tick   select2" required data-placeholder="Select" name="gender"
            id="city_select">
            <option id="" value="">--Select--</option>
            <option id="" value="Male">Male</option>
            <option id="" value="Female">Female</option>
            <option id="" value="Other">Other</option>
        </select>
    </div>
    <div class="col-lg-6 col-md-6">
        <label class="form-label">Title</label>
        <select class="form-control show-tick select2" required data-placeholder="Select" name="title" name="swd"
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


    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="text" class="form-control form-control-lg" id="TextInput" name="swdOf" required
                placeholder="S/o , W/o , D/o" value="{{ $customer ? $customer->swdOf : '' }}">
            <label class="form-label" for="TextInput">S/Of , D/Of, W/Of Name</label>
        </span>
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
                placeholder="Phone Number" value="{{ $customer ? $customer->phone : '' }}">
            <label class="form-label" for="TextInput">Phone Number</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <textarea class="form-control form-control-lg" id="paddress" required name="address" id="">{{ $customer ? $customer->address : '' }}</textarea>
            <label class="form-label" for="TextInput">Permanent Address</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="number" class="form-control form-control-lg" id="pin_code" name="pin_code" required
                placeholder="Pin code" value="{{ $customer ? $customer->pin_code : '' }}">
            <label class="form-label" for="TextInput">Pin code</label>
        </span>
    </div>

    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="text" class="form-control form-control-lg" id="city" name="city" required
                placeholder="City" value="{{ $customer ? $customer->city : '' }}">
            <label class="form-label" for="city">City</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="text" class="form-control form-control-lg" id="state" name="state" required
                placeholder="State" value="{{ $customer ? $customer->state : '' }}">
            <label class="form-label" for="state">State</label>
        </span>
    </div>

    <hr class="my-2">
    <div class="col-6 mt-3">
        <label for="TextInput">Same as Permanent Address</label>
        <input type="checkbox" id="sameAsPermanentAddress">
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <textarea class="form-control form-control-lg" id="corresAddress" required name="corresponding_address"
                id="">{{ $customer ? $customer->corresponding_address : '' }}</textarea>
            <label class="form-label" for="TextInput">Corresponding Address</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="number" class="form-control form-control-lg" id="corres_pin" name="corres_pin_code"
                required placeholder="Pin code" value="{{ $customer ? $customer->corres_pin_code : '' }}">
            <label class="form-label" for="pin">Pin code</label>
        </span>
    </div>

    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="text" class="form-control form-control-lg" id="corres_city" name="corres_city" required
                placeholder="City" value="{{ $customer ? $customer->corres_city : '' }}">
            <label class="form-label" for="city">City</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="text" class="form-control form-control-lg" id="corres_state" name="corres_state"
                required placeholder="State" value="{{ $customer ? $customer->corres_state : '' }}">
            <label class="form-label" for="state">State</label>
        </span>
    </div>
    <hr class="my-2">
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="number" class="form-control form-control-lg" id="Addhar" name="aadhar_number" required
                placeholder="Addhar" value="{{ $customer ? $customer->aadhar_number : '' }}">
            <label class="form-label" for="Addhar">Aadhar number</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="text" class="form-control form-control-lg" id="occupation" name="occupation" required
                placeholder="Occupation" value="{{ $customer ? $customer->occupation : '' }}">
            <label class="form-label" for="occupation">Occupation</label>
        </span>
    </div>

    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="text" class="form-control form-control-lg" id="Nationality" name="nationality" required
                placeholder="Nationality" value="{{ $customer ? $customer->nationality : '' }}">
            <label class="form-label" for="Nationality">Nationality</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="file" class="form-control form-control-lg" id="dl_img" name="dl_img" requireds
                placeholder="DL" value="{{ $customer ? $customer->dl_img : '' }}">
            <label class="form-label" for="dl_img">DL</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="file" class="form-control form-control-lg" id="aadhar_img" name="aadhar_img" requireds
                placeholder="Aadhar Image" value="{{ $customer ? $customer->aadhar_img : '' }}">
            <label class="form-label" for="aadhar_img">Aadhar Image</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="file" class="form-control form-control-lg" id="voterId_img" name="voterId_img" requireds
                placeholder="Voter ID" value="{{ $customer ? $customer->voterId_img : '' }}">
            <label class="form-label" for="voterId_img">Voter ID</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="file" class="form-control form-control-lg" id="profile_img" name="profile_img" requireds
                placeholder="Profile Photo" value="{{ $customer ? $customer->profile_img : '' }}">
            <label class="form-label" for="profile_img">Profile Img</label>
        </span>
    </div>
</div>
