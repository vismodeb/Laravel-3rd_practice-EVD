<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/">Products</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

@if($Message = Session::get('success'))
  <div class="alert alert-success alert-block">
    <strong>{{ $Message }}</strong>
  </div>
@endif

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h2 class="text-center">Product Edit</h2>

            <form method="POST" action="/products/{{ $product->id }}/update" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <div class="mb-3 mt-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ old('name', $product->name) }}">
                @if($errors->has('name'))
                  <span class="text-danger">{{ $errors->First('name') }}</span>
                @endif
              </div>

              <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="79" placeholder="Message">{{ old('description', $product->description) }}</textarea>
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

</body>
</html>