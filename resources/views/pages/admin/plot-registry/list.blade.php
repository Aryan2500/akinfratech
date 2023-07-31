@extends('layout.base')

@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/bundles/dataTables.min.css') }}">
@endsection

@section('main_section')
    <div class="row">
        @include('partials.alerts')
        <div class="card mb-4">
            <div class="card-header">
                <h6 class="card-title mb-0">Land list</h6>
                <a type="button" href="{{ route('plot-registry.create') }}" class="btn btn-outline-primary float-end ">Create
                    Registry</a>
            </div>
            <div class="card-body">
                <table class="my_data_table table display dataTable table-hover">
                    <thead>
                        <tr>
                            <th>Site</th>
                            <th>Plot</th>
                            <th>Booking ID</th>
                            <th>Customer Name</th>
                            <th>Gata Number</th>
                            <th>Registration Number</th>
                            <th>Paid Amount</th>
                            <th>Balance Amount</th>
                            <th>Discount Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registries as $reg)
                            <tr>
                                <td>{{ $reg->site->name }}</td>
                                <td>{{ $reg->plot->name }}</td>
                                <td>{{ $reg->booking_id }}</td>
                                <td>{{ $reg->customer_name }}</td>
                                <td>{{ $reg->gata_number }}</td>
                                <td>{{ $reg->register_number }}</td>
                                <td>{{ $reg->paid_amount }}</td>
                                <td>{{ $reg->balance_amount }}</td>
                                <td>{{ $reg->discount_amount }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('plot-registry.edit', $reg->id) }}">Edit</a>
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
