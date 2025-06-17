<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>ITP17 - Project - {{ $page_title }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  @yield('css')
</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">ITP17 Project</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a
              class="nav-link {{ Request::is('/') ? 'active' : '' }}"
              href="{{ url('/') }}"
              >Home</a
            >
          </li>

          <!-- Profile comes before Students -->
          <li class="nav-item">
            <a
              class="nav-link {{ Request::is('profile') ? 'active' : '' }}"
              href="{{ url('/profile') }}"
              >Profile</a
            >
          </li>

          <!-- Students Dropdown Menu -->
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle {{ Request::is('students*') ? 'active' : '' }}"
              href="#"
              id="studentsDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Students
            </a>
            <ul class="dropdown-menu" aria-labelledby="studentsDropdown">
              <li>
                <a class="dropdown-item" href="{{ url('/students') }}">Students List</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ url('/students/create') }}">Add Student</a>
              </li>
            </ul>
          </li>

        </ul>

        <form class="d-flex" role="search">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<div class="container mt-4">
  <h1>{{ $page_title }}</h1>
  <main>
    @yield('content')
  </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
@yield('js')
</body>
</html>
