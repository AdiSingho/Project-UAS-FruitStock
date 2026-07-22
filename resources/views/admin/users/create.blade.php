<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Staf - FruitStock</title>
    <!-- Pastikan file registration.css ada di folder public/css/ -->
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
</head>
<body>
    <div class="registration-card">
        <div class="brand-header">
            <div class="icon-bg"></div>
            <h1>Buat Akun Staf</h1>
            <p>Daftarkan petugas gudang atau kasir baru</p>
        </div>

        <!-- Tempat notifikasi AJAX -->
        <div id="notifikasi" style="margin-bottom: 16px; text-align: center; font-size: 14px;"></div>

        <form id="formTambahStaf" action="{{ route('admin.users.store') }}" method="POST" class="registration-form">
            @csrf

            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="name" class="input-field" placeholder="John Doe" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="input-field" placeholder="john@fruitstock.com" required>
            </div>

            <div class="form-group">
                <label>Role (Hak Akses)</label>
                <select name="role" class="input-field" required>
                    <option value="" disabled selected>Pilih Role...</option>
                    <option value="gudang">Petugas Gudang</option>
                    <option value="kasir">Kasir</option>
                </select>
            </div>

            <div class="form-group">
                <label>Kata Sandi</label>
                <input type="password" name="password" class="input-field" placeholder="••••••••" required>
            </div>

            <button type="submit" class="submit-button">Simpan Akun</button>
        </form>
    </div>

    <!-- SCRIPT FETCH API UNTUK AJAX -->
    <script>
        document.getElementById('formTambahStaf').addEventListener('submit', function(e) {
            e.preventDefault(); 

            let form = this;
            let formData = new FormData(form);
            let notifDiv = document.getElementById('notifikasi');
            let submitBtn = form.querySelector('.submit-button');

            submitBtn.innerHTML = 'Menyimpan...';
            submitBtn.disabled = true;
            notifDiv.innerHTML = ''; 

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                submitBtn.innerHTML = 'Simpan Akun';
                submitBtn.disabled = false;

                if(data.status === 'success') {
                    notifDiv.innerHTML = `<span style="color: #006C49; font-weight: bold;">${data.message}</span>`;
                    form.reset(); 
                } else if (data.errors) {
                    notifDiv.innerHTML = `<span style="color: red;">Input tidak valid atau email sudah terdaftar.</span>`;
                }
            })
            .catch(error => {
                submitBtn.innerHTML = 'Simpan Akun';
                submitBtn.disabled = false;
                notifDiv.innerHTML = `<span style="color: red;">Terjadi kesalahan pada server.</span>`;
            });
        });
    </script>
</body>
</html>