@extends('layout.base')

@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/bundles/dataTables.min.css') }}">
@endsection

@section('main_section')
    <div class="row">
        @include('partials.alerts')
        <div class="card mb-4">
            <div class="card-header">
                <h6 class="card-title mb-0">Plot's list</h6>
                <a type="button" href="{{ route('plot.create') }}" class="btn btn-outline-primary float-end ">Create plot</a>
            </div>
            <div class="card-body">
                <table class="my_data_table table display dataTable table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Size</th>
                            <th>Site</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($plots as $plot)
                            <tr>
                                <td>{{ $plot->name }}</td>
                                <td>{{ $plot->address }}</td>
                                <td>{{ $plot->size }}  </td>
                                <td>{{ $plot->site->name }}  </td>
                                <td>{{ $plot->price }}  </td>
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
