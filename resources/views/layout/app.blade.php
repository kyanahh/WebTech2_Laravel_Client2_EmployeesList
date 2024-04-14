<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Employees</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4b0082;">
            <div class="container-fluid">
                <a class="navbar-brand ps-3 text-white" href="{{ route('landing') }}"><i class="bi bi-briefcase me-2"></i>Employees List</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item me-3">
                      <a class="nav-link text-white" href="{{ route('landing') }}">Home</a>
                  </li>
                  <li class="nav-item me-3">
                      <a class="nav-link text-white" href="{{ route('log') }}">Add Contact</a>
                  </li>
                  <li class="nav-item me-3">
                    <a class="nav-link text-white" href="{{ route('log') }}">Login</a>
                  </li>
                </ul>
              </div>
            </div>
    </nav>

    <div class="container-fluid">

        @yield('main')

    </div>

</body>
</html>