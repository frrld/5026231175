<!DOCTYPE html>
<html lang="en">
<head>
    <title>Helperfind Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css"> <!-- Link ke file CSS eksternal -->
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-12" id="sidebar">
                <div class="sidebar-content">
                    <div class="sidebar-header">
                        <br><br><br> <!-- Menambah jarak -->
                        <div class="profile-info">
                            <img src="asset/Frame 40792-3.png" class="rounded-circle" alt="Admin" width="60px" height="60px">
                            <div class="user-info">
                                <h5 class="mt-2">User</h5>
                                <p>user@mail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-links">
                        <a href="#" class="sidebar-link"><i class="fa fa-list-alt"></i> Helperlog</a>
                        <a href="#" class="sidebar-link"><i class="fa fa-search"></i> Helperfind</a>
                        <a href="#" class="sidebar-link"><i class="fa fa-life-ring"></i> Helperassist</a>
                    </div>
                    <a href="#" class="sidebar-link logout"><i class="fa fa-sign-out"></i> Log Out</a>
                </div>
            </div>



            <!-- Main Content -->
            <main class="col-md-9 col-12 p-4 main-content">
                <a href="#" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>

                <div class="page-header">
                    <h2 class="display-4 font-weight-light">Helperfind Dashboard</h2>
                </div>

                <p class="lead">Filter PRT Berdasarkan</p>
                <hr>

                <!-- Filter Section -->
                <div class="filter-card mb-4">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label>Kategori Pekerjaan</label>
                            <select class="form-control">
                                <option>Semua Kategori</option>
                                <option>Baby Sitter</option>
                                <option>Perawat Lansia</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Pilih Lokasi</label>
                            <select class="form-control">
                                <option>Semua Lokasi</option>
                                <option>Jakarta</option>
                                <option>Bandung</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Pilih Rating</label>
                            <select class="form-control">
                                <option>Semua Rating</option>
                                <option>4 Keatas</option>
                                <option>3 Keatas</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Pilih Umur</label>
                            <select class="form-control">
                                <option>Semua Umur</option>
                                <option>20-30 Tahun</option>
                                <option>30-40 Tahun</option>
                            </select>
                        </div>
                    </div>

                    <div class="text-right">
                        <button class="btn btn-primary">Cari</button>
                    </div>
                </div>

                <!-- No Results Section -->
                <div class="no-results">
                    <div class="text-center text-muted">
                        <img src="asset/Screenshot_2025-03-19_121145-removebg-preview.png" alt="No Results" width="500px" height="250px">
                        <h4 class="mb-3">Maaf, kami tidak bisa menemukan PRT yang cocok</h4>
                        <p>Coba pencarian lain!</p>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
