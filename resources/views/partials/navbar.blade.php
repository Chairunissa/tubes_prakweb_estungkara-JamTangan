<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #DC6640;">
    <div class="container">
        <a class="navbar-brand" href="/">De Orologio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/produk">New Product</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/katalog" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Catalog
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light text-center">
                      <li><a class="dropdown-item" href="#">Casio</a></li>
                      <li><a class="dropdown-item" href="#">Rolex</a></li>
                      <li><a class="dropdown-item" href="#">Chanel</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/category" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light text-center">
                      <li><a class="dropdown-item" href="#"><i class="bi bi-gender-male"></i> Male</a></li>
                      <li><a class="dropdown-item" href="#"><i class="bi bi-gender-female"></i> Female</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/kontak" class="nav-link">Contact Us</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light me-1" type="submit"><i class="bi bi-search"></i></button>
              </form>

            {{-- Login --}}
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/login" class="nav-link"><i class="bi bi-person-circle"></i> Login Admin</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
