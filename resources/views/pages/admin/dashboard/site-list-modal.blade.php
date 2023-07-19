<div class="modal fade" id="siteModal" tabindex="-1" aria-labelledby="exampleModalXlLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalXlLabel">Site List</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-header">
                    <h6 class="card-title mb-0">Site list</h6>
                    <a type="button" href="{{ route('site.create') }}"
                        class="btn btn-outline-primary float-end ">Create site</a>
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
                            @foreach (SiteHelper::getAllSites() as $site)
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
                                        <button class="btn btn-danger">Lock</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
