<x-app-layout>
    <div class="content-body text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6 p-4">
                <div class="card">
                    <div class="card-header mt-2">
                        <h4 class="card-title">Add Categories</h4>
                        <a href="{{ route('all_categories') }}" class="btn btn-success float-right">View</a>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method='POST' action='{{ route('client.excell.upload') }}' enctype="multipart/form-data">
                                @csrf
                                <div class="row">


                                    <div class="input-group mb-3">
                                        <label class="form-label">Upload CSV</label>

                                        <input type="file" name="file" class="form-control border p-2" >
                                        @error('csv')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>


                                </div>
                                <button type="submit" class="btn btn-primary">Submit <i class="fa fa-step-forward" aria-hidden="true"></i></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


