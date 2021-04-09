<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="firstpage_style.css" />
  <title>Index-page</title>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Company</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Candidate Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Admin Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Jobs</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container">
    <h1>All in One Job Portal</h1>
    <p>Find Jobs,Careers and Employment</p>
    <div class="btn-wrap">
      <a href="#">Search <br></a>
    </div>
    <div class="container mt-3">
      <div id="mainbox">
        <div class="card">
          <div class="label">KEYWORD?<br></div>
          <input class="form-control input-sm" placeholder="Enter job title, position..." type="text">
        </div>

        <div class="card">
          <div class="label">WHERE?<br></div>
          <select class="form-control input-sm">
            <option>All locations</option>
            <option>Mumbai</option>
            <option>Kolkata</option>
            <option>Chennai</option>
            <option>Pune</option>
            <option>Nasik</option>
          </select>
        </div>

        <div class="card">
          <div class="label">CATEGORIES?<br></div>
          <select class="form-control input-sm mt-3">
            <option>All Categories</option>
            <option>IT SECTOR</option>
            <option>NON-TECH COMPANIES</option>
            <option>MANUFACTURING COMPANIES</option>
            <option>OTHERS</option>
          </select>
        </div>
      </div>
      <br>
      <br>
      <br>
      <div class="btn-wrap-go">
        <a href="login-candidate.php">Go!</a>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>