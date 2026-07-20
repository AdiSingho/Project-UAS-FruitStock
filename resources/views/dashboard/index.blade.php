<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - FruitStock</title>

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>

<div class="container">

    <!-- ================= Sidebar ================= -->

    <aside class="sidebar">

        <div class="logo">

            <div class="logo-icon">
                🍏
            </div>

            <h2>FruitStock</h2>

            <span>Inventory & POS</span>

        </div>

        <ul>

            <li class="active">
                <i class="fas fa-table-columns"></i>
                Beranda
            </li>

            <li>
                <i class="fas fa-apple-whole"></i>
                Master Buah
            </li>

            <li>
                <i class="fas fa-warehouse"></i>
                Gudang & Stok
            </li>

            <li>
                <i class="fas fa-box-open"></i>
                QC & Retur
            </li>

            <li>
                <i class="fas fa-cash-register"></i>
                POS / Kasir
            </li>

            <li>
                <i class="fas fa-chart-line"></i>
                Laporan
            </li>

            <li>
                <i class="fas fa-gear"></i>
                Pengaturan
            </li>

        </ul>

    </aside>

    <!-- ================= Main ================= -->

    <main class="main-content">

        <!-- Navbar -->

        <header class="navbar">

            <div class="search-box">

                <i class="fas fa-search"></i>

                <input
                type="text"
                placeholder="Cari buah, stok...">

            </div>

            <div class="nav-right">

                <i class="fas fa-bell"></i>

                <img
                src="https://i.pravatar.cc/40"
                class="profile">

            </div>

        </header>

        <!-- Dashboard -->

        <section class="dashboard">

            <div class="dashboard-header">

                <div>

                    <h1>Beranda</h1>

                    <p>Ringkasan status gudang hari ini.</p>

                </div>

                <button>

                    <i class="fas fa-plus"></i>

                    Tambah Stok

                </button>

            </div>

            <!-- Statistik -->

            <div class="cards">

                <div class="card green">

                    <div class="icon">
                        <i class="fas fa-box"></i>
                    </div>

                    <h4>Total Stok</h4>

                    <h2>1,200 Kg</h2>

                </div>

                <div class="card yellow">

                    <div class="icon">
                        <i class="fas fa-triangle-exclamation"></i>
                    </div>

                    <h4>Item Hampir Habis</h4>

                    <h2>15 Item</h2>

                </div>

                <div class="card red">

                    <div class="icon">
                        <i class="fas fa-virus"></i>
                    </div>

                    <h4>Mendekati Busuk</h4>

                    <h2>5 Item</h2>

                </div>

                <div class="card blue">

                    <div class="icon">
                        <i class="fas fa-wallet"></i>
                    </div>

                    <h4>Penjualan Hari Ini</h4>

                    <h2>Rp 4.5M</h2>

                </div>

            </div>

            <!-- Table & Chart -->

            <div class="content">

                <div class="table-box">

                    <div class="title">

                        <h3>Peringatan Stok Kritis & Expired</h3>

                        <a href="#">Lihat Semua</a>

                    </div>

                    <table>

                        <thead>

                        <tr>

                            <th>Item</th>
                            <th>Sisa</th>
                            <th>Batas</th>
                            <th>Status</th>

                        </tr>

                        </thead>

                        <tbody>

                        <tr>

                            <td>🍎 Apel Fuji</td>

                            <td>5 kg</td>

                            <td>Hari Ini</td>

                            <td>
                                <span class="status danger">
                                    Kritis
                                </span>
                            </td>

                        </tr>

                        <tr>

                            <td>🍌 Pisang Sun</td>

                            <td>10 kg</td>

                            <td>Besok</td>

                            <td>

                                <span class="status warning">
                                    Menipis
                                </span>

                            </td>

                        </tr>

                        <tr>

                            <td>🥭 Mangga</td>

                            <td>50 kg</td>

                            <td>7 Hari</td>

                            <td>

                                <span class="status success">
                                    Aman
                                </span>

                            </td>

                        </tr>

                        </tbody>

                    </table>

                </div>

                <!-- Chart -->

                <div class="chart-box">

                    <h3>Penjualan Mingguan</h3>

                    <div class="chart-placeholder">

                        Grafik Penjualan

                    </div>

                </div>

            </div>

        </section>

    </main>

</div>

</body>

</html>