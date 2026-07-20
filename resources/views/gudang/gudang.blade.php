<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gudang & Stok Masuk - FruitStock</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!-- External CSS stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/gudang.css') }}">
</head>
<body>

    <!-- Wrapper Utama -->
    <div class="wrapper-main">
        
        <!-- SIDEBAR -->
        <aside class="side-navbar">
            <div>
                <!-- HorizontalBorder -->
                <div class="horizontal-border-brand">
                    <div class="flex flex-col items-start pb-4 w-[64px] h-[80px]">
                        <!-- Brand Icon -->
                        <div class="w-[64px] h-[64px] bg-[#10B981] rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined text-white" style="font-size: 32px;">nutrition</span>
                        </div>
                    </div>
                    <div class="w-full">
                        <h1 class="font-bold text-[24px] leading-[32px] tracking-[-0.24px] text-[#006C49]">FruitStock</h1>
                        <p class="font-mono-custom font-medium text-[12px] leading-[16px] tracking-[0.6px] text-[#3C4A42] mt-0.5">Inventory & POS</p>
                    </div>
                </div>

                <!-- Navigation List -->
                <div class="nav-container">
                    <nav class="nav-list">
                        <a href="#" class="nav-link">
                            <span class="material-symbols-outlined text-[#3C4A42]">grid_view</span>
                            <span class="text-[14px] font-normal leading-[20px]">Beranda</span>
                        </a>
                        <a href="#" class="nav-link">
                            <span class="material-symbols-outlined text-[#3C4A42]">eco</span>
                            <span class="text-[14px] font-normal leading-[20px]">Master Buah</span>
                        </a>
                        <!-- Active Link -->
                        <a href="#" class="nav-link active">
                            <span class="material-symbols-outlined text-[#006C49]">inventory_2</span>
                            <span class="text-[14px] leading-[20px]">Gudang & Stok</span>
                        </a>
                        <a href="#" class="nav-link">
                            <span class="material-symbols-outlined text-[#3C4A42]">verified</span>
                            <span class="text-[14px] font-normal leading-[20px]">QC & Retur</span>
                        </a>
                        <a href="#" class="nav-link">
                            <span class="material-symbols-outlined text-[#3C4A42]">point_of_sale</span>
                            <span class="text-[14px] font-normal leading-[20px]">POS / Kasir</span>
                        </a>
                        <a href="#" class="nav-link">
                            <span class="material-symbols-outlined text-[#3C4A42]">description</span>
                            <span class="text-[14px] font-normal leading-[20px]">Laporan</span>
                        </a>
                        <a href="#" class="nav-link">
                            <span class="material-symbols-outlined text-[#3C4A42]">settings</span>
                            <span class="text-[14px] font-normal leading-[20px]">Pengaturan</span>
                        </a>
                    </nav>
                </div>
            </div>
        </aside>

        <!-- MAIN CONTENT AREA -->
        <main class="main-content-area">
            
            <!-- TOP NAVBAR -->
            <header class="top-navbar">
                <div class="relative w-[256px] h-[36px] bg-[#EFF4FF] rounded-full flex items-center px-4">
                    <span class="material-symbols-outlined text-[#3C4A42] absolute left-3" style="font-size: 20px;">search</span>
                    <input type="text" placeholder="Cari batch..." class="w-full bg-transparent pl-8 text-sm text-[#0B1C30] placeholder-[#6B7280] focus:outline-none">
                </div>
                <div class="flex items-center space-x-6">
                    <!-- Bell Icon -->
                    <div class="w-[40px] h-[40px] border border-[#BBCABF] rounded-full flex items-center justify-center cursor-pointer hover:bg-gray-100">
                        <span class="material-symbols-outlined text-[#3C4A42]" style="font-size: 22px;">notifications</span>
                    </div>
                    <!-- User Profile -->
                    <div class="w-[38px] h-[38px] rounded-full bg-gray-300 overflow-hidden cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100" alt="Profile" class="w-full h-full object-cover">
                    </div>
                </div>
            </header>

            <!-- HEADER ACTIONS -->
            <div class="header-actions mt-6">
                <div class="flex flex-col gap-1 w-[341.8px] h-[64px]">
                    <h2 class="font-bold text-[32px] leading-[40px] tracking-[-0.64px] text-[#0B1C30]">Gudang & Stok</h2>
                    <p class="font-normal text-[14px] leading-[20px] text-[#3C4A42]">Manajemen kapasitas rak dan riwayat batch masuk.</p>
                </div>
                <button class="flex flex-row items-center justify-center px-6 py-3 gap-2 bg-[#006C49] shadow-[0px_1px_2px_rgba(0,0,0,0.05)] rounded-lg text-white font-semibold text-[14px] hover:bg-[#005238] transition cursor-pointer">
                    <span class="material-symbols-outlined" style="font-size: 20px;">add</span>
                    <span>TAMBAH STOK MASUK</span>
                </button>
            </div>

            <!-- BENTO GRID LAYOUT -->
            <div class="bento-grid">
                
                <!-- Rak A Capacity -->
                <div class="card-rak">
                    <div class="flex justify-between items-center w-full">
                        <h3 class="font-semibold text-[20px] leading-[28px] text-[#0B1C30]">Rak A - Buah Import</h3>
                        <span class="bg-[#FFDAD6] text-[#93000A] font-mono-custom font-medium text-[12px] leading-[16px] px-3 py-1 rounded-full tracking-[0.6px]">Kritis</span>
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <div class="flex justify-between text-[12px] leading-[16px] font-mono-custom font-medium text-[#3C4A42]">
                            <span>Kapasitas Terpakai</span>
                            <span class="font-bold text-[#BA1A1A]">80%</span>
                        </div>
                        <div class="w-full bg-[#E5EEFF] h-[12px] rounded-full relative overflow-hidden">
                            <div class="absolute left-0 top-0 h-[12px] bg-[#BA1A1A] rounded-full w-[80%]"></div>
                        </div>
                        <span class="font-mono-custom font-medium text-[12px] leading-[16px] text-[#3C4A42] pt-1">Sisa ruang: 20 Pallet</span>
                    </div>
                </div>

                <!-- Rak B Capacity -->
                <div class="card-rak">
                    <div class="flex justify-between items-center w-full">
                        <h3 class="font-semibold text-[20px] leading-[28px] text-[#0B1C30]">Rak B - Buah Lokal</h3>
                        <span class="bg-[#10B981] text-[#00422B] font-mono-custom font-medium text-[12px] leading-[16px] px-3 py-1 rounded-full tracking-[0.6px]">Aman</span>
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <div class="flex justify-between text-[12px] leading-[16px] font-mono-custom font-medium text-[#3C4A42]">
                            <span>Kapasitas Terpakai</span>
                            <span class="font-bold text-[#006C49]">40%</span>
                        </div>
                        <div class="w-full bg-[#E5EEFF] h-[12px] rounded-full relative overflow-hidden">
                            <div class="absolute left-0 top-0 h-[12px] bg-[#006C49] rounded-full w-[40%]"></div>
                        </div>
                        <span class="font-mono-custom font-medium text-[12px] leading-[16px] text-[#3C4A42] pt-1">Sisa ruang: 60 Pallet</span>
                    </div>
                </div>

                <!-- Summary Widget -->
                <div class="summary-widget relative">
                    <span class="material-symbols-outlined text-white opacity-90 mb-2" style="font-size: 42px;">local_shipping</span>
                    <h3 class="font-bold text-[24px] leading-[32px] tracking-[-0.24px] text-center">12 Batch</h3>
                    <p class="font-normal text-[14px] leading-[20px] text-center opacity-90 mt-1">Hari ini menunggu QC</p>
                </div>

            </div>

            <!-- INVENTORY HISTORY TABLE -->
            <div class="inventory-table-container">
                
                <!-- Table Header / Title Bar -->
                <div class="table-header-bar">
                    <h3 class="font-semibold text-[20px] leading-[28px] text-[#0B1C30]">Riwayat Stok Masuk (Batch)</h3>
                    <a href="#" class="flex items-center gap-1 font-medium text-[14px] leading-[20px] text-[#006C49] hover:underline">
                        <span>Lihat Semua</span>
                        <span class="material-symbols-outlined" style="font-size: 18px;">arrow_forward</span>
                    </a>
                </div>

                <!-- Table Content Container -->
                <div class="table-scroll">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="w-[954px] h-[49px] bg-[#EFF4FF] border-b border-[rgba(187,202,191,0.3)] font-mono-custom font-semibold text-[12px] leading-[16px] text-[#3C4A42] box-sizing-border">
                                <th class="py-4 px-4 tracking-[0.6px] w-[134.06px]">ID Batch</th>
                                <th class="py-4 px-4 tracking-[0.6px] w-[221.33px]">Nama Buah</th>
                                <th class="py-4 px-4 tracking-[0.6px] w-[151.5px]">Tgl Masuk</th>
                                <th class="py-4 px-4 tracking-[0.6px] w-[159.47px]">Tgl Exp</th>
                                <th class="py-4 px-4 tracking-[0.6px] text-right w-[127.58px]">Qty (Kg)</th>
                                <th class="py-4 px-4 tracking-[0.6px] text-center w-[160.06px]">Status</th>
                            </tr>
                        </thead>
                        <tbody class="w-[954px] h-[213px] text-[14px]">
                            <!-- Row 1 -->
                            <tr class="w-[954px] h-[54px] bg-[#FFFFFF] border-b border-[rgba(187,202,191,0.2)] hover:bg-gray-50 transition box-sizing-border">
                                <td class="py-4 px-4 font-mono-custom text-[#3C4A42]">BCH-1042</td>
                                <td class="py-4 px-4 font-semibold text-[#0B1C30]">Apel Fuji Premium</td>
                                <td class="py-4 px-4 font-normal text-[#0B1C30]">12 Okt 2024</td>
                                <td class="py-4 px-4 font-normal text-[#855300]">25 Nov 2024</td>
                                <td class="py-4 px-4 font-mono-custom font-normal text-right text-[#0B1C30]">500.00</td>
                                <td class="py-4 px-4 text-center">
                                    <span class="inline-flex justify-center items-center px-3 py-1 bg-[#D3E4FE] text-[#3C4A42] font-mono-custom font-medium text-[12px] leading-[16px] rounded-full tracking-[0.6px]">Gudang A</span>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr class="w-[954px] h-[54px] bg-[#F1F5F9] border-b border-[rgba(187,202,191,0.2)] hover:bg-gray-50 transition box-sizing-border">
                                <td class="py-4 px-4 font-mono-custom text-[#3C4A42]">BCH-1043</td>
                                <td class="py-4 px-4 font-semibold text-[#0B1C30]">Jeruk Medan</td>
                                <td class="py-4 px-4 font-normal text-[#0B1C30]">12 Okt 2024</td>
                                <td class="py-4 px-4 font-normal text-[#BA1A1A]">20 Okt 2024</td>
                                <td class="py-4 px-4 font-mono-custom font-normal text-right text-[#0B1C30]">1200.00</td>
                                <td class="py-4 px-4 text-center">
                                    <span class="inline-flex justify-center items-center px-3 py-1 bg-[#D3E4FE] text-[#3C4A42] font-mono-custom font-medium text-[12px] leading-[16px] rounded-full tracking-[0.6px]">Gudang B</span>
                                </td>
                            </tr>
                            <!-- Row 3 -->
                            <tr class="w-[954px] h-[54px] bg-[#FFFFFF] border-b border-[rgba(187,202,191,0.2)] hover:bg-gray-50 transition box-sizing-border">
                                <td class="py-4 px-4 font-mono-custom text-[#3C4A42]">BCH-1044</td>
                                <td class="py-4 px-4 font-semibold text-[#0B1C30]">Anggur Muscat</td>
                                <td class="py-4 px-4 font-normal text-[#0B1C30]">11 Okt 2024</td>
                                <td class="py-4 px-4 font-normal text-[#855300]">30 Okt 2024</td>
                                <td class="py-4 px-4 font-mono-custom font-normal text-right text-[#0B1C30]">150.50</td>
                                <td class="py-4 px-4 text-center">
                                    <span class="inline-flex justify-center items-center px-3 py-1 bg-[#D3E4FE] text-[#3C4A42] font-mono-custom font-medium text-[12px] leading-[16px] rounded-full tracking-[0.6px]">Gudang A</span>
                                </td>
                            </tr>
                            <!-- Row 4 -->
                            <tr class="w-[954px] h-[54px] bg-[#F1F5F9] border-b border-[rgba(187,202,191,0.2)] hover:bg-gray-50 transition box-sizing-border">
                                <td class="py-4 px-4 font-mono-custom text-[#3C4A42]">BCH-1045</td>
                                <td class="py-4 px-4 font-semibold text-[#0B1C30]">Mangga Harumanis</td>
                                <td class="py-4 px-4 font-normal text-[#0B1C30]">10 Okt 2024</td>
                                <td class="py-4 px-4 font-normal text-[#855300]">18 Okt 2024</td>
                                <td class="py-4 px-4 font-mono-custom font-normal text-right text-[#0B1C30]">800.00</td>
                                <td class="py-4 px-4 text-center">
                                    <span class="inline-flex justify-center items-center px-3 py-1 bg-[#D3E4FE] text-[#3C4A42] font-mono-custom font-medium text-[12px] leading-[16px] rounded-full tracking-[0.6px]">Gudang B</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- FOOTER -->
            <footer class="footer-area">
                <span>© 2026 FruitStock v1.0.0 - Professional Fruit Inventory</span>
                <div class="flex gap-4">
                    <a href="#" class="underline">Bantuan</a>
                    <a href="#" class="underline">Kebijakan Privasi</a>
                </div>
            </footer>

        </main>
    </div>

</body>
</html>