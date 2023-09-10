@extends('layout.base')

@section('main_section')
    <div class="card mb-4">
        @include('partials.alerts')
        <div class="card-header">
            <h6 class="card-title mb-0">Edit Role</h6>
        </div>
        <div class="card-body">
            <form class="row g-3 maskking-form" action="{{ route('role.update') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $role->id }}">
                <div class="col-12">
                    <span class="float-label">
                        <input type="text" class="form-control form-control-lg" id="TextInput" placeholder="Name"
                            name="name" value="{{ $role ? $role->name : '' }}">
                        <label class="form-label" for="TextInput">Role Name</label>
                    </span>

                    <div class="row mt-2 ">
                        <label class="form-label" for="TextInput">Choose permissions</label>

                        @foreach ($permission_categories as $key => $cat)
                            <h5><u>{{ $cat->name }}</u></h5>
                            @foreach ($cat->permissions as $permission)
                                <div class="col-4">
                                    <input type="checkbox" name="permission_ids[]" id="permission"
                                        @foreach ($role->permissions as $p)
                                        @if ($p->id == $permission->id)
                                            {{ 'checked' }}
                                            continue
                                        @endif @endforeach
                                        value="{{ $permission->id }}">
                                    {{ $permission->name }}
                                </div>
                            @endforeach
                            <hr>
                        @endforeach
                    </div>
                    <button class="btn btn-primary mt-2 float-end" style="width: 100px" type="submit">Save</button>

                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
