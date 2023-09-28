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
                                <input type="text" name="custom_id" class="form-control @error('custom_id') is-invalid @enderror" placeholder="Custom ID" value="{{ old('custom_id') }}">
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
                                <input type="text" name="organization" class="form-control @error('ogarnization') is-invalid @enderror" placeholder="Organization" value="{{ old('organization') }}">
                                @error('ogarnization')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <select name="LGA" class="form-control @error('LGA') is-invalid @enderror">
                                    <option value="">-- Select LGA --</option>
                                    <optgroup label="Bauchi State">
                                        <option value="Bauchi LGA" {{ old('LGA') == 'Bauchi LGA' ? 'selected' : '' }}>Bauchi LGA</option>
                                        <option value="Alkaleri LGA" {{ old('LGA') == 'Alkaleri LGA' ? 'selected' : '' }}>Alkaleri LGA</option>
                                        <option value="Bogoro LGA" {{ old('LGA') == 'Bogoro LGA' ? 'selected' : '' }}>Bogoro LGA</option>
                                        <option value="Damban LGA" {{ old('LGA') == 'Damban LGA' ? 'selected' : '' }}>Damban LGA</option>
                                        <option value="Darazo LGA" {{ old('LGA') == 'Darazo LGA' ? 'selected' : '' }}>Darazo LGA</option>
                                        <option value="Dass LGA" {{ old('LGA') == 'Dass LGA' ? 'selected' : '' }}>Dass LGA</option>
                                        <option value="Ganjuwa LGA" {{ old('LGA') == 'Ganjuwa LGA' ? 'selected' : '' }}>Ganjuwa LGA</option>
                                        <option value="Giade LGA" {{ old('LGA') == 'Giade LGA' ? 'selected' : '' }}>Giade LGA</option>
                                        <option value="Itas/Gadau LGA" {{ old('LGA') == 'Itas/Gadau LGA' ? 'selected' : '' }}>Itas/Gadau LGA</option>
                                        <option value="Jama'are LGA" {{ old('LGA') == 'Jama\'are LGA' ? 'selected' : '' }}>Jama'are LGA</option>
                                        <option value="Katagum LGA" {{ old('LGA') == 'Katagum LGA' ? 'selected' : '' }}>Katagum LGA</option>
                                        <option value="Kirfi LGA" {{ old('LGA') == 'Kirfi LGA' ? 'selected' : '' }}>Kirfi LGA</option>
                                        <option value="Misau LGA" {{ old('LGA') == 'Misau LGA' ? 'selected' : '' }}>Misau LGA</option>
                                        <option value="Ningi LGA" {{ old('LGA') == 'Ningi LGA' ? 'selected' : '' }}>Ningi LGA</option>
                                        <option value="Shira LGA" {{ old('LGA') == 'Shira LGA' ? 'selected' : '' }}>Shira LGA</option>
                                        <option value="Tafawa Balewa LGA" {{ old('LGA') == 'Tafawa Balewa LGA' ? 'selected' : '' }}>Tafawa Balewa LGA</option>
                                        <option value="Toro LGA" {{ old('LGA') == 'Toro LGA' ? 'selected' : '' }}>Toro LGA</option>
                                        <option value="Warji LGA" {{ old('LGA') == 'Warji LGA' ? 'selected' : '' }}>Warji LGA</option>
                                        <option value="Zaki LGA" {{ old('LGA') == 'Zaki LGA' ? 'selected' : '' }}>Zaki LGA</option>
                                    </optgroup>
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
