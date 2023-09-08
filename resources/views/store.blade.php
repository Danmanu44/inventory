<x-app-layout>
    <div class="content-body text-center">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6 p-4">
                <div class="card p-3">
                    <div class="card-header">
                        <h4 class="card-title text-center">ADD NEW STORE</h4>
                        <a href="{{ route('all_store') }}" class="btn btn-success float-right">View</a>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('store.create') }}" method="POST">
                            @csrf
                        
                            <div class="input-group mb-3">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" value="{{ old('name') }}">
                                @error('name')
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
                                <button type="submit" class="btn btn-primary">Add Store</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


