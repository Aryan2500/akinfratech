@extends('layout.base')



@section('main_section')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="card-title mb-0">Create Farmer</h6>
        </div>
        <div class="card-body">
            <form class="row g-3 maskking-form" id="farmerForm" method="post" action="{{ route('farmer.store') }}">
                @csrf
                @include('pages.admin.farmer.form')

                <button type="submit" style="width: 100px" class="float-right btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="{{ asset('assets/js/farmer-form-validator.js') }}"></script>
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
