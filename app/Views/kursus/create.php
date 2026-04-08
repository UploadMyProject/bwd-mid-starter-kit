<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KelasKita — Tambah Kursus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body class="bg-gray-100 min-h-screen">

<!-- Navbar -->
<nav class="bg-white shadow-md fixed top-0 left-0 right-0 z-30">
    <div class="flex items-center justify-between px-6 py-3">
        <div class="flex items-center gap-2">
            <div class="w-9 h-9 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                <i class="fas fa-graduation-cap text-white text-lg"></i>
            </div>
            <span class="text-xl font-bold text-gray-800">KelasKita</span>
        </div>
        <span class="text-gray-600 text-sm hidden sm:flex items-center gap-2">
            <i class="fas fa-circle-user text-blue-500 text-lg"></i>
            <?= esc($username) ?>
        </span>
    </div>
</nav>

<div class="pt-20 px-4 pb-10 flex justify-center">
    <div class="w-full max-w-2xl">

        <!-- Breadcrumb -->
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-6">
            <a href="/dashboard" class="hover:text-blue-600 transition">
                <i class="fas fa-house-chimney"></i> Dashboard
            </a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="text-gray-800 font-medium">Tambah Kursus</span>
        </div>

        <!-- Card Form -->
        <div class="bg-white rounded-2xl shadow-sm p-8">
            <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-100">
                <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-plus text-blue-600"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-800">Tambah Kursus Baru</h1>
                    <p class="text-gray-500 text-sm">Isi detail kursus yang akan ditambahkan</p>
                </div>
            </div>

            <form action="/kursus/store" method="POST" class="space-y-5">
                <?= csrf_field() ?>

                <!-- Judul -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        <i class="fas fa-book-open text-blue-500 mr-1"></i> Judul Kursus
                    </label>
                    <input type="text" name="judul" required
                        placeholder="Contoh: Web Development dengan Laravel"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm transition">
                </div>

                <!-- Deskripsi -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        <i class="fas fa-align-left text-blue-500 mr-1"></i> Deskripsi
                    </label>
                    <textarea name="deskripsi" required rows="3"
                        placeholder="Deskripsikan materi dan tujuan kursus..."
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm transition resize-none"></textarea>
                </div>

                <!-- Kategori & Level -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            <i class="fas fa-tag text-blue-500 mr-1"></i> Kategori
                        </label>
                        <select name="kategori" required
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm transition bg-white">
                            <option value="" disabled selected>Pilih kategori</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Mobile Development">Mobile Development</option>
                            <option value="Data Science">Data Science</option>
                            <option value="Design">Design</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Business">Business</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            <i class="fas fa-signal text-blue-500 mr-1"></i> Level
                        </label>
                        <select name="level" required
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm transition bg-white">
                            <option value="" disabled selected>Pilih level</option>
                            <option value="Pemula">Pemula</option>
                            <option value="Menengah">Menengah</option>
                            <option value="Mahir">Mahir</option>
                        </select>
                    </div>
                </div>

                <!-- Instruktur & Durasi -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            <i class="fas fa-chalkboard-user text-blue-500 mr-1"></i> Instruktur
                        </label>
                        <input type="text" name="instruktur" required
                            placeholder="Nama instruktur"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm transition">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            <i class="fas fa-clock text-blue-500 mr-1"></i> Durasi
                        </label>
                        <input type="text" name="durasi" required
                            placeholder="Contoh: 10 Jam"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm transition">
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex gap-3 pt-2">
                    <button type="submit"
                        class="flex-1 flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg transition">
                        <i class="fas fa-floppy-disk"></i> Simpan Kursus
                    </button>
                    <a href="/dashboard"
                        class="flex-1 flex items-center justify-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold py-3 rounded-lg transition">
                        <i class="fas fa-xmark"></i> Batal
                    </a>
                </div>
            </form>
        </div>

    </div>
</div>

</body>
</html>
