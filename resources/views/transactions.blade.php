<x-app-layout>
    <div class="content-body text-center">
        <div class="container my-4">

               <div class="card card-widget">
                <div class="card-body gradient-4">
                    <h3 class="text-white">  Transactions </h3>
                </div>
            </div>
            {{-- <div class="progress" style="height: 9px">
                <div class="progress-bar bg-primary wow  progress-" style="width: 100%;" role="progressbar"><span class="sr-only">60% Complete</span>
                </div>
            </div> --}}
        </div>
        <!-- Check if there are transaction records -->


        <div class="row justify-content-center">

            <div class="col-10">
                <div class="card border-primary">
                    <div class="card-header py-3">



                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Transactions Card Table</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle">
                                <thead>
                                    <tr>

                                        <th scope="col">Date</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Unit</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Acceptance Status</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $transaction)
                                        <tr>
                                            <td>{{$transaction->created_at}}</td>
                                            <td>{{ $transaction->product->name }}</td>
                                            <td>{{ $transaction->quantity }}</td>
                                            <td>{{ $transaction->product->unit }}</td>
                                            <td>{{ $transaction->Description }}</td>
                                            <td>{{ $transaction->acceptance_status }}</td>



                                            <!-- Assuming you have a method to calculate the amount -->
                                            <td>
                                                <!-- Your action buttons here -->
                                                 <!-- Small modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-sm"  >Delete  <i class="fa fa-close color-muted"></i></button>
                                    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete This transaction</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Are you sure you want to permanently delete this transaction.</div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close <i class="fa fa-close color-muted"></i></button>
                                                    <a href="{{ route('transaction.destroy', $transaction->id) }}" data-toggle="tooltip" data-placement="top" title="Delete" class="mx-3 btn btn-danger">
                                                      Yes
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                                </a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    {{-- @php
                        $transaction= new  App\Models\transaction();
                    @endphp --}}
                    {{-- <div class="card-footer"><h2>Total Amount : <strong class="text-dark">{{ $transaction->calculateAmount() }}</strong></strong></h2>
                    </div> --}}
                </div>
            </div>

        </div>









    </div>
</x-app-layout>
