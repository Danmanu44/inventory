<x-app-layout>
    <div class="content-body">
        <div class="row d-flex justify-content-center mt-5 p-3">
            <div class="col-lg-10">
                <div class="card p-3">
                    <div class="card-header">
                        <h4 class="card-title bg-dark text-center p-3" style="border-radius: 50px">ADD NEW PRODUCTS</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ route('products.store') }}">
                                @csrf <!-- Add CSRF token field for security -->
    
                                <div class="input-group mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                </div>
                                @if ($errors->has('name'))
                                    <div class="text-danger mb-3">{{ $errors->first('name') }}</div>
                                @endif
    
                                <div class="input-group mb-3">
                                    <input type="number" name="price" class="form-control" placeholder="Price" value="{{ old('price') }}">
                                </div>
                                @if ($errors->has('price'))
                                    <div class="text-danger mb-3">{{ $errors->first('price') }}</div>
                                @endif
    
                                <div class="input-group mb-3">
                                    <select name="category_id" class="form-control">
                                        <option value="">-- Select Category --</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @if ($errors->has('category_id'))
                                    <div class="text-danger mb-3">{{ $errors->first('category_id') }}</div>
                                @endif
    
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Description</span></div>
                                    <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                                </div>
                                @if ($errors->has('description'))
                                    <div class="text-danger mb-3">{{ $errors->first('description') }}</div>
                                @endif
    
                                <div class="mt-3 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save Product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
