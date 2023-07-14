@extends('layout.base')



@section('main_section')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="card-title mb-0">Create User</h6>
        </div>
        <div class="card-body">
            <form class="row g-3 maskking-form" id="userForm" method="post" action="{{ route('user.store') }}">
                @csrf
                <div class="row " id="inputParent">
                    <div class="col-6 mt-3">
                        <span class="float-label">
                            <input type="text" class="form-control form-control-lg" id="TextInput" name="name"
                                placeholder="Name">
                            <label class="form-label" for="TextInput">Name</label>
                        </span>
                    </div>

                    <div class="col-6 mt-3">
                        <span class="float-label">
                            <input type="email" class="form-control form-control-lg" id="emailInput" name="email"
                                placeholder="Email">
                            <label class="form-label" for="emailInput">Email</label>
                        </span>
                    </div>



                    <div class="col-6 mt-3">
                        <label class="form-group float-label">
                            <select class="form-control form-control-lg custom-select" id="user_type_select"
                                name="user_type">
                                <option value="">Choose User Type</option>
                                @foreach (UserHelper::getType() as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            <span>User Type</span>
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

                <button type="submit" style="width: 100px" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="{{ asset('assets/js/user-create-form-validator.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#user_type_select").on('change', function(e) {
                if (e.target.value == 4) {
                    $("#password_section").remove();
                } else {
                    let passwordSection = `<div class="col-6 mt-3" id="password_section">
                                                <span class="float-label">
                                                    <input type="text" class="form-control form-control-lg" id="emailInput" name="password"
                                                        placeholder="password">
                                                    <label class="form-label" for="emailInput">Password</label>
                                                </span>
                                            </div>`;
                    $("#password_section").remove();
                    $("#inputParent").append(passwordSection);

                }

            });


        });
    </script>
@endpush
