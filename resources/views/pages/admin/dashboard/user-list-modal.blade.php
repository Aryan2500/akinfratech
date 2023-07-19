<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalXlLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalXlLabel">Users List</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="card-title mb-0">Users list</h6>
                        <a type="button" href="{{ route('user.create') }}"
                            class="btn btn-outline-primary float-end ">Create new</a>
                    </div>
                    <div class="card-body">
                        <table class="my_data_table table display dataTable table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Designation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (UserHelper::getAllUsers() as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->type->name }}</td>
                                        <td>
                                            <button class="btn btn-primary"
                                                {{ Auth::user()->id == $user->id ? 'disabled' : '' }}>Edit</button>
                                            <button class="btn btn-danger"
                                                {{ Auth::user()->id == $user->id ? 'disabled' : '' }}>Lock</button>
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
