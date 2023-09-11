<x-app-layout>
    <div class="content-body">
        <div class="row d-flex justify-content-center mt-5 p-3">
            <div class="col-lg-8">
                <div class="card p-3">
                    <div class="card-header">
                        <h4 class="card-title bg-dark text-center p-3" style="border-radius: 50px">STORE ALLOCATION</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ route('allocation.store') }}">
                                @csrf <!-- Add CSRF token field for security -->

                                <div class="input-group mb-3">
                                    <select name="store_id" class="form-control @error('store_id') is-invalid @enderror">
                                        <option value="">-- Select Store --</option>
                                        @foreach($stores as $store)
                                            @if (!($store->id === 1))
                                                <option value="{{ $store->id }}" {{ old('store_id') == $store->id ? 'selected' : '' }}>
                                                    {{ $store->name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                @if ($errors->has('store_id'))
                                    <div class="text-danger mb-3">{{ $errors->first('store_id') }}</div>
                                @endif


                                <div class="input-group mb-3">
                                    <select name="product_id" class="form-control @error('product_id') is-invalid @enderror">
                                        <option value="">-- Select Item --</option>
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>
                                                {{ $product->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @if ($errors->has('product_id'))
                                    <div class="text-danger mb-3">{{ $errors->first('product_id') }}</div>
                                @endif


                                <div class="input-group mb-3">
                                    <input type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror" placeholder="Quantity" value="{{ old('quantity') }}">
                                </div>
                                @if ($errors->has('quantity'))
                                    <div class="text-danger mb-3">{{ $errors->first('quantity') }}</div>
                                @endif


                                <div class="mt-3 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
