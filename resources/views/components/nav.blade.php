
<nav class="navbar navbar-expand-lg bg-dark"  data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">My Laravel page</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="{{ request()->is('/') ? 'active' : '' }} nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="{{ request()->is('about') ? 'active' : '' }} nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="{{ request()->is('contacts') ? 'active' : '' }} nav-link" href="/contacts">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="{{ request()->is('services') ? 'active' : '' }} nav-link" href="/services">Services</a>
          </li>
          <li class="nav-item">
            <a class="{{ request()->is('positions') ? 'active' : '' }} nav-link" href="/positions">Positions</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>