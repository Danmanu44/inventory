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
                                <input type="text" name="custom_id" class="form-control @error('custom_id') is-invalid @enderror" placeholder="custom_id ID" value="{{ old('custom_id') }}">
                                @error('custom_id')
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
                                <input type="number" name="no_of_dependent" class="form-control @error('no_of_dependent') is-invalid @enderror" placeholder="Number of Dependent" value="{{ old('no_of_dependent') }}">
                                @error('no_of_dependent')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <select name="LGA" class="form-control @error('LGA') is-invalid @enderror">
                                    <option value="">-- Select LGA --</option>
                                    <option value="Akko LGA" {{ old('LGA') == 'Akko LGA' ? 'selected' : '' }}>Akko LGA</option>
                                    <option value="Balanga LGA" {{ old('LGA') == 'Balanga LGA' ? 'selected' : '' }}>Balanga LGA</option>
                                    <option value="Billiri LGA" {{ old('LGA') == 'Billiri LGA' ? 'selected' : '' }}>Billiri LGA</option>
                                    <option value="Dukku LGA" {{ old('LGA') == 'Dukku LGA' ? 'selected' : '' }}>Dukku LGA</option>
                                    <option value="Dunakaye LGA" {{ old('LGA') == 'Dunakaye LGA' ? 'selected' : '' }}>Dunakaye LGA</option>
                                    <option value="Gombe LGA" {{ old('LGA') == 'Gombe LGA' ? 'selected' : '' }}>Gombe LGA</option>
                                    <option value="Kaltungo LGA" {{ old('LGA') == 'Kaltungo LGA' ? 'selected' : '' }}>Kaltungo LGA</option>
                                    <option value="Kwami LGA" {{ old('LGA') == 'Kwami LGA' ? 'selected' : '' }}>Kwami LGA</option>
                                    <option value="Nafada/Bajoga LGA" {{ old('LGA') == 'Nafada/Bajoga LGA' ? 'selected' : '' }}>Nafada/Bajoga LGA</option>
                                    <option value="Shongom LGA" {{ old('LGA') == 'Shongom LGA' ? 'selected' : '' }}>Shongom LGA</option>
                                    <option value="Yamaltu/Deba LGA" {{ old('LGA') == 'Yamaltu/Deba LGA' ? 'selected' : '' }}>Yamaltu/Deba LGA</option>
                                    <!-- Add other LGAs here -->
                                </select>
                            </div>
                            @if ($errors->has('LGA'))
                                <div class="text-danger mb-3">{{ $errors->first('LGA') }}</div>
                            @endif


                            <div class="input-group mb-3">
                                <input type="text" name="ward" class="form-control @error('ward') is-invalid @enderror" placeholder="Ward" value="{{ old('ward') }}">
                                @error('ward')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" name="poll_unit" class="form-control @error('poll_unit') is-invalid @enderror" placeholder="Polling Unit" value="{{ old('poll_unit') }}">
                                @error('poll_unit')
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
