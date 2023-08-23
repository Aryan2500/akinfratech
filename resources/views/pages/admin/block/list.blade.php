@extends('layout.' . $layoutfor)


@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/bundles/dataTables.min.css') }}">
@endsection

@section('main_section')
    <div class="row">
        @include('partials.alerts')
        <div class="card mb-4">
            <div class="card-header">
                <h6 class="card-title mb-0">{{ $page_heading }}s</h6>
                <a type="button" href="{{ route('block.create') }}" class="btn btn-outline-primary float-end ">Create
                    Block</a>
            </div>
            <div class="card-body">
                <table class="my_data_table table display dataTable table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Site</th>
                            <th>Size</th>
                            <th>Booked Area</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blocks as $b)
                            <tr>
                                <td>{{ $b->name }}</td>
                                <td>{{ $b->site->name }}</td>
                                <td>{{ $b->area }}</td>
                                <td> {{ $b->booked_area }} </td>
                                <td>
                                    <a href="{{ route('block.edit', $b->id) }}" class="btn btn-primary">Edit</a>
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
