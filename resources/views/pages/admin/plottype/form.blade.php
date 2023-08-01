<div>
    <input type="hidden" name="id" value="{{ $ptype ? $ptype->id : '' }}">
    @csrf
    <div class="row">
        <div class="col-6">
            <span class="float-label mt-2">
                <input type="text" class="form-control form-control-lg" id="TextInput" name="name" placeholder="Name"
                    value="{{ $ptype ? $ptype->name : '' }}" required>
                <label class="form-label" for="TextInput">Name</label>
            </span>
        </div>

    </div>

    <div class="col-2">
        <button type="submit" class=" btn btn-primary">Submit</button>
    </div>
</div>
