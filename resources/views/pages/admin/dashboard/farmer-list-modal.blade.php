<div class="modal fade" id="farmerModal" tabindex="-1" aria-labelledby="exampleModalXlLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalXlLabel">Farmers List</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="card-title mb-0">Farmer list</h6>
                        <a type="button" href="{{ route('farmer.create') }}"
                            class="btn btn-outline-primary float-end ">Create new</a>
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
                                @foreach (FarmerHelper::getAllFarmers() as $f)
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
        </div>
    </div>
</div>
