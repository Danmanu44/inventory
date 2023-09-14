<x-app-layout>
    <div class="content-body">
        <div class="row d-flex justify-content-center mt-5 p-3">
<<<<<<< HEAD
            <div class="col-lg-8">  
=======
            <div class="col-lg-8">
>>>>>>> 38228ffa789a2beea73d0ac0d9986cb1cb2d68da
                <div class="card p-3">
                    <div class="card-header">
                        <h4 class="card-title bg-dark text-center p-3" style="border-radius: 50px">ADD NEW ITEMS</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ route('item.store') }}">
                                @csrf <!-- Add CSRF token field for security -->
<<<<<<< HEAD
    
                                    
=======


>>>>>>> 38228ffa789a2beea73d0ac0d9986cb1cb2d68da
                                <div class="input-group mb-3">
                                    <select name="product_id" class="form-control @error('product_id') is-invalid @enderror">
                                        <option value="">-- Select Product --</option>
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

<<<<<<< HEAD
                                
=======

>>>>>>> 38228ffa789a2beea73d0ac0d9986cb1cb2d68da
                                <div class="input-group mb-3">
                                    <input type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror" placeholder="Quantity" value="{{ old('quantity') }}">
                                </div>
                                @if ($errors->has('quantity'))
                                    <div class="text-danger mb-3">{{ $errors->first('quantity') }}</div>
                                @endif


<<<<<<< HEAD
    
=======

>>>>>>> 38228ffa789a2beea73d0ac0d9986cb1cb2d68da
                                <div class="mt-3 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save Item</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
