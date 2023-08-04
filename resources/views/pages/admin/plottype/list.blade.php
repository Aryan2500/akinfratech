@extends('layout.' . $layoutfor)

@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/bundles/dataTables.min.css') }}">
@endsection

@section('main_section')
    <div class="row">
        @include('partials.alerts')
        <div class="card mb-4">
            <div class="card-header">
                <h6 class="card-title mb-0">Plot type list</h6>
                <a type="button" href="{{ route('plottype.create') }}" class="btn btn-outline-primary float-end ">Create Plot
                    type</a>
            </div>
            <div class="card-body">
                <table class="my_data_table table display dataTable table-hover" style="text-align: center">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($plottypes as $type)
                            <tr>
                                <td>{{ $type->name }}</td>

                                <td>
                                    <a class="btn btn-primary" href="{{ route('plottype.edit', $type->id) }}">Edit</a>
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
