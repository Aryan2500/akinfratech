@extends('layout.base')



@section('main_section')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="card-title mb-0">Create Farmer</h6>
        </div>
        <div class="card-body">
            <form class="row g-3 maskking-form" id="userForm" method="post" action="{{ route('farmer.store') }}">
                @csrf
                <div class="row " id="inputParent">
                    <div class="col-lg-3 col-md-6">
                        <label class="form-label">Select Site</label>
                        <select class="form-control show-tick   select2" data-placeholder="Select" name="site_id">
                            <option id="">--Select--</option>
                            @foreach (SiteHelper::getAllSites() as $s)
                                <option value="{{ $s->id }}">{{ $s->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <label class="form-label">Select Country</label>
                        <select class="form-control show-tick   select2" data-placeholder="Select" name="country_id"
                            id="country_select">
                            <option id="">--Select--</option>
                            @foreach (LocationHelper::getCountries() as $c)
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <label class="form-label">Select State</label>
                        <select class="form-control show-tick   select2" data-placeholder="Select" name="state_id"
                            id="state_select">
                            <option id="">--Select--</option>

                        </select>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <label class="form-label">Select City</label>
                        <select class="form-control show-tick   select2" data-placeholder="Select" name="city_id"
                            id="city_select">
                            <option id="">--Select--</option>

                        </select>
                    </div>


                    <div class="col-6 mt-3">
                        <span class="float-label">
                            <input type="text" class="form-control form-control-lg" id="TextInput" name="name"
                                placeholder="Name">
                            <label class="form-label" for="TextInput">Name</label>
                        </span>
                    </div>

                    <div class="col-6 mt-3">
                        <span class="float-label">
                            <input type="text" class="form-control form-control-lg" id="TextInput" name="phone"
                                placeholder="Phone Number">
                            <label class="form-label" for="TextInput">Phone Number</label>
                        </span>
                    </div>
                    <div class="col-6 mt-3">
                        <span class="float-label">
                            <textarea class="form-control form-control-lg" id="TextInput" name="address" id=""></textarea>
                            <label class="form-label" for="TextInput">Address</label>
                        </span>
                    </div>

                </div>

                <button type="submit" style="width: 100px" class="float-right btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
@endsection


@push('scripts')
    {{-- <script src="{{ asset('assets/js/user-create-form-validator.js') }}"></script> --}}
    <script>
        $("#country_select").change(function(e) {

            $.ajax({
                type: "get",
                url: "{{ route('getStates') }}",
                data: {
                    cId: e.target.value
                },

                success: function(response) {
                    $("#state_select").empty();
                    response.states.forEach(state => {
                        let option = `<option value= ${state.id} > ${state.name}</option>`
                        $("#state_select").append(option);
                    });
                }
            });

        });
    </script>
    <script>
        $("#state_select").change(function(e) {
            $.ajax({
                type: "get",
                url: "{{ route('getCities') }}",
                data: {
                    sId: e.target.value
                },

                success: function(response) {
                    $("#city_select").empty();
                    response.cities.forEach(city => {
                        let option = `<option value= ${city.id} > ${city.name}</option>`
                        $("#city_select").append(option);
                    });
                }
            });

        });
    </script>
@endpush
