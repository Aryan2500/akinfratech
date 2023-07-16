@extends('layout.base')

@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/bundles/dataTables.min.css') }}">
@endsection

@section('main_section')
    <div class="row">
        @include('partials.alerts')
        <div class="card mb-4">
            <div class="card-header">
                <h6 class="card-title mb-0">Users list</h6>
                <a type="button" href="{{ route('farmer.create') }}" class="btn btn-outline-primary float-end ">Create new</a>
            </div>
            <div class="card-body">
                <table class="my_data_table table display dataTable table-hover">
                    <thead>
                        <tr>
                            <th>Site</th>
                            <th>Farmer Name</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($farmers as $f)
                            <tr>
                                <td>{{ $f->sites->first()->name }}</td>
                                <td>{{ $f->name }}</td>
                                <td>{{ $f->city->state->name }}</td>
                                <td>{{ $f->city->name }}</td>
                                <td>{{ $f->phone }}</td>
                                <td>{{ $f->address }}</td>
                                <td>
                                    <button class="btn btn-primary">Edit</button>
                                    <button class="btn btn-danger">Lock</button>
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
