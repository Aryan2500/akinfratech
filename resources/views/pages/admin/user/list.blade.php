@extends('layout.' . $layoutfor)


@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/bundles/dataTables.min.css') }}">
@endsection

@section('main_section')
    <div class="row">
        @include('partials.alerts')
        <div class="card mb-4">
            <div class="card-header">
                <h6 class="card-title mb-0">Users list</h6>
                <a type="button" href="{{ route('user.create') }}" class="btn btn-outline-primary float-end ">Create new</a>
            </div>
            <div class="card-body">
                <table class="my_data_table table display dataTable table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Designation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->type->name }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('user.edit', $user->id) }}"
                                        {{ Auth::user()->id == $user->id ? 'disabled' : '' }}>Edit</a>
                                    <button class="btn btn-danger"
                                        {{ Auth::user()->id == $user->id ? 'disabled' : '' }}>Lock</button>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/bundles/dataTables.bundle.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.my_data_table').addClass('nowrap').dataTable({
                responsive: true,
            });
        });
    </script>
@endpush
