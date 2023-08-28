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
          <a class="nav-link active" href=""> All Products</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="text-end">
    <a class="btn btn-dark mt-3" href="products/creat">New Products</a>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-8">
      <table class="table table-bordered text-center mt-3">
        <thead>
          <tr>
            <th scope="col">Sno.</th>
            <th scope="col">Name</th>
            <!-- <th scope="col">Description</th> -->
            <th scope="col">Photo</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr>
            <td>{{ $loop->index+1 }}</td>
            <td><a href="products/{{ $product->id }}/show" class="text-dark">{{ $product->name }}</a></td>
            <!-- <td>{{ $product->description }}</td> -->
            <td><img src="products/{{ $product->image }}" class="rounded-circle" width='50' height='50' alt=""></td>
            <td>
              <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-sm">Edit</a>
              <a href="products/{{ $product->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</div>

</body>
</html>