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
                <a type="button" href="{{ route('land.create') }}" class="btn btn-outline-primary float-end ">Create land</a>
            </div>
            <div class="card-body">
                <table class="my_data_table table display dataTable table-hover">
                    <thead>
                        <tr>
                            <th>Site</th>
                            <th>Farmer</th>
                            <th>Rakba</th>
                            <th>Area</th>
                            <th>Khasra</th>
                            <th>Payble amount</th>
                            <th>Paid Amount</th>
                            <th>Balance Amount</th>
                            <th>Payment Mode</th>
                            <th>Remark</th>
                            <th>Payment Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lands as $land)
                            <tr>
                                <td>{{ $land->site->name }}</td>
                                <td>{{ $land->farmer->name }}</td>
                                <td>{{ $land->rakba }}</td>
                                <td>{{ $land->area }}</td>
                                <td>{{ $land->khasra_numbers }}</td>
                                <td>{{ $land->payble_amount }}</td>
                                <td>{{ $land->paid_amount }}</td>
                                <td>{{ $land->balance_amount }}</td>
                                <td>{{ $land->payment_mode }}</td>
                                <td>{{ $land->remark }}</td>
                                <td>{{ $land->payment_date }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('land.edit', $land->id) }}">Edit</a>
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
