<div class="modal fade" id="plotModal" tabindex="-1" aria-labelledby="exampleModalXlLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalXlLabel">Plots List</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="card-title mb-0">Plot's list</h6>
                        <a type="button" href="{{ route('plot.create') }}"
                            class="btn btn-outline-primary float-end ">Create plot</a>
                    </div>
                    <div class="card-body">
                        <table class="my_data_table table display dataTable table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Size</th>
                                    <th>Site</th>
                                    <th>Status</th>
                                    <th>Plot Type</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (PlotHelper::getAllPlots() as $plot)
                                    <tr>
                                        <td>{{ $plot->name }}</td>
                                        <td>{{ $plot->address }}</td>
                                        <td>{{ $plot->size }} </td>
                                        <td>{{ $plot->site->name }} </td>

                                        <td>
                                            @if ($plot->isBooked)
                                                <img src="{{ asset('imgs/booked.jpg') }}" width="80px"
                                                    height="50px" />
                                            @else
                                                <img src="{{ asset('imgs/available.png') }}" width="50px"
                                                    height="50px" />
                                            @endif
                                        </td>


                                        <td>{{ $plot->plotType ? $plot->plotType->name : 'N/A' }} </td>
                                        <td>{{ $plot->price }} </td>

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
