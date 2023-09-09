<x-app-layout>
    <div class="content-body">
        <div class="row d-flex justify-content-center p-3">
            <div class="col-lg-10 p-4">
                <div class="card p-3">
                    <div class="card-header">
                        <h4 class="card-title text-center">BENEFICIARY</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('client.store') }}" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" name="beneficiary" class="form-control @error('beneficiary') is-invalid @enderror" placeholder="Beneficiary ID" value="{{ old('beneficiary') }}">
                                @error('beneficiary')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" value="{{ old('name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number" value="{{ old('phone_number') }}">
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" name="ward" class="form-control @error('ward') is-invalid @enderror" placeholder="Ward" value="{{ old('ward') }}">
                                @error('ward')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" name="polling_unit" class="form-control @error('polling_unit') is-invalid @enderror" placeholder="Polling Unit" value="{{ old('polling_unit') }}">
                                @error('polling_unit')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Address</span>
                                </div>
                                <textarea name="address" class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mt-3 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Add Beneficiary</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
