<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="/landingpage">MyApp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/halo">Halo</a></li>
            <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="/Bootstrap1">Bootstrap1</a></li>
            <li class="nav-item"><a class="nav-link" href="/js1">JS1</a></li>
            <li class="nav-item"><a class="nav-link" href="/js2">JS2</a></li>
            <li class="nav-item"><a class="nav-link" href="/latihanbootstrap">LatihanBootstrap</a></li>
            <li class="nav-item"><a class="nav-link" href="/pertama">Pertama</a></li>
            <li class="nav-item"><a class="nav-link" href="/linktree">Linktree</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-light text-center py-5">
        <div class="container">
            <h1 class="display-4">Selamat Datang di Landing Page</h1>
            <p class="lead">Pilih salah satu halaman di menu di atas untuk navigasi cepat.</p>
        </div>
    </header>

    <!-- All Pages List -->
    <section class="py-5">
        <div class="container">
            <h2 class="mb-4">Daftar Halaman</h2>
            <div class="list-group">
              <a href="/" class="list-group-item list-group-item-action">Home (welcome)</a>
              <a href="/halo" class="list-group-item list-group-item-action">Halo (tulisan HTML)</a>
              <a href="/blog" class="list-group-item list-group-item-action">Blog</a>
              <a href="/Bootstrap1" class="list-group-item list-group-item-action">Bootstrap1</a>
              <a href="/js1" class="list-group-item list-group-item-action">JS1</a>
              <a href="/js2" class="list-group-item list-group-item-action">JS2</a>
              <a href="/latihanbootstrap" class="list-group-item list-group-item-action">Latihan Bootstrap</a>
              <a href="/pertama" class="list-group-item list-group-item-action">Pertama</a>
              <a href="/linktree" class="list-group-item list-group-item-action">Linktree</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3">
        <div class="container">
            <small>&copy; 2025 Bika Ambon. All rights reserved.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
