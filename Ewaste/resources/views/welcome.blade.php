<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Waste Management Company</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    header {
      border: #007bff 3px solid;
      border-radius: 5px;
      padding: 20px;
    }

    .navbar-brand {
      color: #333333;
      font-weight: bold;
      font-size: 24px;
    }

    section {
      margin-top: 50px;
    }

    .card {
      border: none;
      margin-bottom: 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card-img-top {
      height: 200px;
      object-fit: cover;
    }

    .card-title {
      font-weight: bold;
      margin-top: 20px;
      margin-bottom: 10px;
      font-size: 24px;
    }

    .card-text {
      color: #666666;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }

    footer {
      background-color: #333333;
      color: #ffffff;
      padding: 20px 0;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">E-Waste Management Company</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/recycle">Recycling</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/destroy">Destruction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/reuse">Reuse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" >Reuse</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="recy.jpeg" class="card-img-top" alt="Department 1">
          <div class="card-body">
            <h5 class="card-title">Recycling Department</h5>
            <p class="card-text">Our recycling department specializes in the proper disposal and recycling of electronic waste. We ensure that e-waste is handled responsibly to minimize environmental impact.</p>
            <a href="/recycle" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="dep2.png" class="card-img-top" alt="Department 2">
          <div class="card-body">
            <h5 class="card-title">Data Destruction Department</h5>
            <p class="card-text">In our data destruction department, we focus on securely erasing sensitive data from electronic devices, ensuring the protection of confidential information throughout the disposal process.</p>
            <a href="destroy" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="dep3.jpeg" class="card-img-top" alt="Department 3">
          <div class="card-body">
            <h5 class="card-title">Reuse Department</h5>
            <p class="card-text">Our reuse department aims to extend the lifecycle of electronic devices by refurbishing and repurposing them. We promote the reuse of functional electronics to reduce e-waste generation.</p>
            <a href="reuse" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-dark text-light mt-5 py-3">
    <div class="container text-center">
      <p>&copy; 2023 E-Waste Management Company. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
