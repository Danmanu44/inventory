<x-app-layout>
    <div class="content-body text-center">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card card-widget">
                    <div class="card-body gradient-4">
                        <h3 class="text-white">DISPENSE</h3>
                    </div>
                </div>
                <form method="POST" action="{{ route('dispense.verify') }}">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-white">Enter Beneficiary Id</h2>
                            <div class="input-group mb-3">
                                <input type="text" name="beneficiary_id" class="tdl-new2 form-control" placeholder="Enter Beneficiary ID" autofocus required value="{{ old('beneficiary_id') }}">
                            </div>
                            @error('beneficiary_id')
                                <div class="alert alert-danger">
                                    <strong class="text-bold text-left">Beneficiary Id not exist</strong>
                                </div>
                            @enderror





                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit">Proceed</button>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>







    </div>
</x-app-layout>
