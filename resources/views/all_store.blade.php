<x-app-layout>
    <div class="content-body text-center">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10 p-4">
                <div class="card">
                    <div class="card-header mt-3">
                        <h4 class="card-title">All Stores</h4>
                        <a href="{{ route('add_store') }}" class="btn btn-success float-right">Create</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold text-primary">Name</th>
                                        <th class="font-weight-bold text-primary">Address</th>
                                        <th class="font-weight-bold text-success">Created At</th>
                                        <th class="font-weight-bold text-success">Updated At</th>
                                        <th class="font-weight-bold text-danger">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($stores as $store)
                                    <tr>
                                        <td class="font-weight-bold text-dark">{{ $store->name }}</td>
                                        <td class="font-weight-bold text-primary">{{ $store->address }}</td>
                                        <td>{{ $store->created_at }}</td>
                                        <td>{{ $store->updated_at }}</td>
                                        <td>
                                            @if ($store->name !== 'GENERAL STORE')
                                                <!-- Add action buttons for edit and delete -->
                                                <a href="" class="btn btn-primary">Edit</a>
                                                <a href="" class="btn btn-danger">Delete</a>
                                            @else
                                                <!-- Display a message or disable the edit and delete buttons for General Store -->
                                                <span class="text-muted">Cannot Edit/Delete General Store</span>
                                            @endif
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
</x-app-layout>
