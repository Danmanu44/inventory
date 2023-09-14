<x-app-layout>
    <div class="content-body">
        <div class="col-lg-12 p-4">
            <div class="card">
                <div class="card-header mt-3">
                    <h4 class="card-title">Allocation and Store Items</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>From Store</th>
                                    <th>To Store</th>
                                    <th>Acceptance Status</th>
                                    <th>Accepted By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allocations as $allocation)
                                <tr>
                                    <td>{{ $allocation->created_at->format('Y-m-d H:i:s') }}</td>

                                    <td>{{ $allocation->product->name }}</td>
                                    <td>{{ $allocation->quantity }}</td>
                                    {{-- <td>{{ optional($allocation->fromStore)->name }}</td> --}}
                                    <td>{{ optional($allocation->toStore)->name }}</td>
                                    {{-- <td>{{ $allocation->sender->name }}</td> --}}
                                    <td>
                                        @if ($allocation->acceptance_status === 'accepted')
                                            <span class="badge badge-success">Accepted</span>
                                        @elseif ($allocation->acceptance_status === 'rejected')
                                            <span class="badge badge-danger">Rejected</span>
                                        @else
                                            <span class="badge badge-warning">Pending</span>
                                        @endif
                                    </td>
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

                                @foreach($storeItems as $storeItem)
                                <tr>
                                    <td>{{ $storeItem->product->name }}</td>
                                    <td>{{ $storeItem->quantity }}</td>
                                    <td>{{ optional($storeItem->store)->name }}</td>
                                    <td>{{ optional($storeItem->toStore)->name }}</td>
                                    {{-- <td>{{ $storeItem->sender->name }}</td> --}}
                                    <td>{{ $storeItem->created_at->format('Y-m-d H:i:s') }}</td>
                                    <td>
                                        @if ($storeItem->acceptance_status === 'accepted')
                                            <span class="badge badge-success">Accepted</span>
                                        @elseif ($storeItem->acceptance_status === 'rejected')
                                            <span class="badge badge-danger">Rejected</span>
                                        @else
                                            <span class="badge badge-warning">Pending</span>
                                        @endif
                                    </td>
                                    <td>{{$storeItem->items->user->name.' ID:'.$store->accepted_by}}</td>
                                    
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
