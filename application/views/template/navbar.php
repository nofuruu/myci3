<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <div class="brand-container">
      <a class="navbar-brand" href="#">Argo Ngawi</a>
      <p class="header-description mb-0">Your reliable train access</p>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex align-items-center">
      <a class="nav-link" id="loginBtn" href="#">Login</a>
      <div class="vr mx-2"></div>
      <a class="nav-link" id="registerBtn" href="#">Register</a>
    </div>
  </div>
</nav>

<style>
   .brand-container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

  .navbar-brand {
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: rgb(0, 0, 0);
    font-weight: bold;
    font-size: large;
    text-transform: uppercase;
    margin-bottom: 0;
  }

  .header-description {
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: rgb(0, 0, 0);
    font-size: small;
    margin-top: -5px;
  }
  .vr {
    height: 24px;
    background-color: #dee2e6;
    width: 1px;
    opacity: 0.8;
  }

  .nav-link {
    color: #333;
    text-decoration: none;
    padding: 0.5rem 1rem;
  }

  .nav-link:hover {
    color: #0d6efd;
  }
</style>