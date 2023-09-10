<div class="row " id="inputParent">
    <input type="hidden" name="id" value="{{ $user ? $user->id : '' }}">
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="text" class="form-control form-control-lg" id="TextInput" name="name" placeholder="Name"
                value="{{ $user ? $user->name : '' }}">
            <label class="form-label" for="TextInput">Name</label>
        </span>
    </div>

    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="email" class="form-control form-control-lg" id="emailInput" name="email"
                value="{{ $user ? $user->email : '' }}" placeholder="Email">
            <label class="form-label" for="emailInput">Email</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="phone" class="form-control form-control-lg" id="phone" name="phone"
                value="{{ $user ? $user->phone : '' }}" placeholder="Phone number">
            <label class="form-label" for="phone">Phone</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="text" class="form-control form-control-lg" id="referCode" name="refer_code" readonly
                placeholder="Refer Code"
                value="{{ $user ? $user->refer_code : REFER_CODE_PREFIX . random_int(10000, 99999) }}">

            <label class="form-label" for="referCode">Referal Code</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <input type="text" class="form-control form-control-lg" id="pReferCode" name="parent_refer_code"
                placeholder="Refer Code" value="{{ $user ? $user->parent_refer_code : '' }}">
            <label class="form-label" for="pReferCode">Parent Referal Code</label>
        </span>
    </div>
    <div class="col-6 mt-3">
        <span class="float-label">
            <textarea type="text" class="form-control form-control-lg" id="address" name="address" placeholder="Address"
                value="">{{ $user ? $user->address : '' }}</textarea>
            <label class="form-label" for="address">Address</label>
        </span>
    </div>


    <div class="col-6 mt-3">
        <label class="form-group float-label">
            <select class="form-control form-control-lg custom-select" id="user_type_select" name="user_type">
                <option value="">Choose User Type</option>
                @foreach (UserHelper::getType() as $type)
                    <option value="{{ $type->id }}"
                        {{ $user ? ($user->usertype_id == $type->id ? 'selected' : '') : '' }}>{{ $type->name }}
                    </option>
                @endforeach
            </select>
            <span>User Type</span>
        </label>
    </div>
    <div class="col-6 mt-3">
        <label class="form-group float-label">
            <select class="form-control form-control-lg custom-select" id="user_type_select" name="role_id">
                <option value="">Choose Role</option>
                @foreach (UserHelper::getRoles() as $role)
                    <option value="{{ $role->id }}"
                        {{ $user ? ($user->role_id == $role->id ? 'selected' : '') : '' }}>{{ $role->name }}
                    </option>
                @endforeach
            </select>
            <span>Role</span>
        </label>
    </div>

    <div class="col-6 mt-3" id="password_section">
        <span class="float-label">
            <input type="text" class="form-control form-control-lg" id="emailInput" name="password"
                placeholder="password">
            <label class="form-label" for="emailInput">Password</label>
        </span>
    </div>
</div>
