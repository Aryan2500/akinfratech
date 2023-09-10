@extends('layout.base')

@section('main_section')
    <div class="row">
        @include('partials.alerts')
        <div class="card mb-4">
            <div class="card-header">
                <h6 class="card-title mb-0">Users list</h6>
                <a type="button" href="{{ route('role.create') }}" class="btn btn-outline-primary float-end ">Create new</a>
            </div>
            <div class="card-body" style="text-align: center;">
                <table class="my_data_table table display dataTable table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Permissions Assigned</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <div class="row">
                                        @foreach ($role->permissions as $permission)
                                            <div class="col-4">
                                                <span class="badge bg-info">
                                                    {{ $permission->name }}
                                                </span>
                                            </div>
                                        @endforeach
                                    </div>
                                </td>

                                <td><a class="btn btn-primary" href="{{ route('role.edit', $role->id) }}">Edit</a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
@endpush
