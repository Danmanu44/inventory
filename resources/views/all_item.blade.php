<x-app-layout>
    <div class="content-body">
        <div class="col-lg-12 p-4">
            <div class="card">
                <div class="card-header mt-3">
                    <h4 class="card-title">All Item Products</h4>
                    <a href="{{ route('add_item') }}" class="btn btn-success float-right">Create Item</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Store Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{ $item->product->name }}</td>
                                    <td>{{ optional($item->product->category)->name }}</td>
                                    <td>{{ optional($item->store)->name }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>₦{{ $item->product->price }}</td>
                                    <td>
                                        <a href="" data-toggle="tooltip" data-placement="top" title="Edit" class="mx-3">
                                            <i class="fa fa-pencil color-muted"></i>
                                        </a>
                                        <a href="" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="fa fa-close color-danger"></i>
                                        </a>
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
</x-app-layout>
