@extends('layout.' . $layoutfor)


@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/bundles/dataTables.min.css') }}">
@endsection

@section('main_section')
    <div class="row">
        @include('partials.alerts')
        <div class="card mb-4">
            <div class="card-header">
                <h6 class="card-title mb-0">Site list</h6>
                <a type="button" href="{{ route('site.create') }}" class="btn btn-outline-primary float-end ">Create site</a>
            </div>
            <div class="card-body">
                <table class="my_data_table table display dataTable table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Site Head</th>
                            <th>Investors</th>
                            <th>Total size</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sites as $site)
                            <tr>
                                <td>{{ $site->name }}</td>
                                <td>{{ $site->address }}</td>

                                <td>
                                    @if ($site->head)
                                        {{ $site->head ? $site->head->name : '' }} <br>
                                        {{ $site->head ? $site->head->email : '' }} <br>
                                        {{ $site->head ? $site->head->phone : '' }}
                                    @else
                                        {{ 'N/A' }}
                                    @endif

                                </td>
                                <td>
                                    @if (count($site->investors) > 0)
                                        <ul>
                                            @foreach ($site->investors as $investor)
                                                <li>{{ $investor->name }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        {{ 'N/A' }}
                                    @endif
                                </td>
                                <td>{{ $site->total_size }}</td>
                                <td>
                                    <button class="btn btn-primary">Edit</button>

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
