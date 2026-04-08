<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KelasKita — Edit Kursus</title>
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
            <span class="text-gray-800 font-medium">Edit Kursus</span>
        </div>

        <!-- Card Form -->
        <div class="bg-white rounded-2xl shadow-sm p-8">
            <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-100">
                <div class="w-10 h-10 bg-yellow-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-pen-to-square text-yellow-600"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-800">Edit Kursus</h1>
                    <p class="text-gray-500 text-sm">Perbarui informasi kursus</p>
                </div>
            </div>

            <form action="/kursus/update/<?= $course['id'] ?>" method="POST" class="space-y-5">
                <?= csrf_field() ?>

                <!-- Judul -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        <i class="fas fa-book-open text-blue-500 mr-1"></i> Judul Kursus
                    </label>
                    <input type="text" name="judul" required
                        value="<?= esc($course['judul']) ?>"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm transition">
                </div>

                <!-- Deskripsi -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        <i class="fas fa-align-left text-blue-500 mr-1"></i> Deskripsi
                    </label>
                    <textarea name="deskripsi" required rows="3"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm transition resize-none"><?= esc($course['deskripsi']) ?></textarea>
                </div>

                <!-- Kategori & Level -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            <i class="fas fa-tag text-blue-500 mr-1"></i> Kategori
                        </label>
                        <select name="kategori" required
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm transition bg-white">
                            <?php
                            $categories = ['Web Development', 'Mobile Development', 'Data Science', 'Design', 'Marketing', 'Business'];
                            foreach ($categories as $cat):
                            ?>
                            <option value="<?= $cat ?>" <?= $course['kategori'] === $cat ? 'selected' : '' ?>><?= $cat ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            <i class="fas fa-signal text-blue-500 mr-1"></i> Level
                        </label>
                        <select name="level" required
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm transition bg-white">
                            <?php foreach (['Pemula', 'Menengah', 'Mahir'] as $lv): ?>
                            <option value="<?= $lv ?>" <?= $course['level'] === $lv ? 'selected' : '' ?>><?= $lv ?></option>
                            <?php endforeach; ?>
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
                            value="<?= esc($course['instruktur']) ?>"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm transition">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            <i class="fas fa-clock text-blue-500 mr-1"></i> Durasi
                        </label>
                        <input type="text" name="durasi" required
                            value="<?= esc($course['durasi']) ?>"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm transition">
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex gap-3 pt-2">
                    <button type="submit"
                        class="flex-1 flex items-center justify-center gap-2 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 rounded-lg transition">
                        <i class="fas fa-floppy-disk"></i> Perbarui Kursus
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
