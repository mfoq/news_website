<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Daily News</title>
</head>
<body>

<!-- NavBar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="main.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="articles.php?categoryid=1">Sports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="articles.php?categoryid=2">Agricultural</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="articles.php?categoryid=3">Arts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="articles.php?categoryid=4">politics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="articles.php?categoryid=5">Health</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="articles.php?categoryid=6">Style</a>
            </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search">
        <button class="btn btn-outline-danger" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--Start Logo -->
<div class="container my-5">
    <div class="custom-logo">
        <img src="websiteImages/logo.png" alt="logo">
    </div>
</div>
