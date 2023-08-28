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
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td>@twitter</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>

</body>
</html>