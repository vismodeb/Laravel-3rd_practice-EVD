@extends('layouts.app')
@section('main')

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h2 class="text-center">Product</h2>

            <form method="POST" action="/products/store" enctype="multipart/form-data">
              @csrf

              <div class="mb-3 mt-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ old('name') }}">
                @if($errors->has('name'))
                  <span class="text-danger">{{ $errors->First('name') }}</span>
                @endif
              </div>

              <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="79" placeholder="Message">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                  <span class="text-danger">{{ $errors->First('description') }}</span>
                @endif
              </div>

              <div class="mb-3">
                <label for="image">Photo</label>
                <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
                @if($errors->has('image'))
                  <span class="text-danger">{{ $errors->First('image') }}</span>
                @endif
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection