<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KelasKita — Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body class="bg-gray-100 min-h-screen">

<!-- Navbar -->
<nav class="bg-white shadow-md fixed top-0 left-0 right-0 z-30">
    <div class="flex items-center justify-between px-6 py-3">
        <div class="flex items-center gap-3">
            <!-- Hamburger (mobile) -->
            <button id="sidebarToggle" class="md:hidden text-gray-600 text-xl">
                <i class="fas fa-bars"></i>
            </button>
            <div class="flex items-center gap-2">
                <div class="w-9 h-9 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                    <i class="fas fa-graduation-cap text-white text-lg"></i>
                </div>
                <span class="text-xl font-bold text-gray-800">KelasKita</span>
            </div>
        </div>
        <div class="flex items-center gap-3">
            <span class="hidden sm:flex items-center gap-2 text-gray-600 text-sm">
                <i class="fas fa-circle-user text-blue-500 text-lg"></i>
                <?= esc($username) ?>
            </span>
            <a href="/logout" class="flex items-center gap-2 bg-red-500 hover:bg-red-600 text-white text-sm px-4 py-2 rounded-lg transition">
                <i class="fas fa-right-from-bracket"></i>
                <span class="hidden sm:inline">Logout</span>
            </a>
        </div>
    </div>
</nav>

<!-- Layout -->
<div class="flex pt-16 min-h-screen">

    <!-- Sidebar -->
    <aside id="sidebar" class="hidden md:flex flex-col w-60 bg-white shadow-md fixed top-16 left-0 bottom-0 z-20 overflow-y-auto">
        <div class="p-4">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Menu</p>
            <nav class="space-y-1">
                <a href="/dashboard" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-blue-50 text-blue-700 font-medium">
                    <i class="fas fa-house-chimney w-5 text-center"></i> Dashboard
                </a>
                <a href="/kursus/create" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-50 transition">
                    <i class="fas fa-plus-circle w-5 text-center"></i> Tambah Kursus
                </a>
                <a href="/logout" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-50 transition">
                    <i class="fas fa-right-from-bracket w-5 text-center"></i> Logout
                </a>
            </nav>
        </div>
    </aside>

    <!-- Mobile Sidebar Overlay -->
    <div id="sidebarOverlay" class="hidden fixed inset-0 bg-black bg-opacity-40 z-10 md:hidden"></div>
    <aside id="mobileSidebar" class="hidden flex-col w-60 bg-white shadow-md fixed top-16 left-0 bottom-0 z-20 overflow-y-auto">
        <div class="p-4">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Menu</p>
            <nav class="space-y-1">
                <a href="/dashboard" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-blue-50 text-blue-700 font-medium">
                    <i class="fas fa-house-chimney w-5 text-center"></i> Dashboard
                </a>
                <a href="/kursus/create" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-50 transition">
                    <i class="fas fa-plus-circle w-5 text-center"></i> Tambah Kursus
                </a>
                <a href="/logout" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-50 transition">
                    <i class="fas fa-right-from-bracket w-5 text-center"></i> Logout
                </a>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 md:ml-60 p-6">

        <!-- Flash Messages -->
        <?php if (session()->getFlashdata('success')): ?>
        <div id="flashMsg" class="mb-4 flex items-center gap-2 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg">
            <i class="fas fa-circle-check"></i>
            <span><?= session()->getFlashdata('success') ?></span>
        </div>
        <?php endif; ?>

        <!-- Header -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-6">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Daftar Kursus</h1>
                <p class="text-gray-500 text-sm mt-1">Kelola semua kursus KelasKita di sini</p>
            </div>
            <a href="/kursus/create" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg font-medium transition">
                <i class="fas fa-plus"></i> Tambah Kursus
            </a>
        </div>

        <!-- Search -->
        <div class="mb-4 relative max-w-sm">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                <i class="fas fa-magnifying-glass"></i>
            </span>
            <input
                type="text"
                id="searchInput"
                placeholder="Cari judul kursus..."
                class="w-full pl-9 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm"
            >
        </div>

        <!-- Table Card -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-200 text-gray-600 text-xs uppercase tracking-wider">
                            <th class="px-4 py-3 text-left">No</th>
                            <th class="px-4 py-3 text-left">Judul</th>
                            <th class="px-4 py-3 text-left hidden md:table-cell">Kategori</th>
                            <th class="px-4 py-3 text-left hidden lg:table-cell">Instruktur</th>
                            <th class="px-4 py-3 text-left hidden lg:table-cell">Durasi</th>
                            <th class="px-4 py-3 text-center">Peserta</th>
                            <th class="px-4 py-3 text-left hidden md:table-cell">Level</th>
                            <th class="px-4 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="kursusTable" class="divide-y divide-gray-100">
                        <?php foreach ($courses as $i => $kursus): ?>
                        <tr class="hover:bg-gray-50 transition kursus-row" data-judul="<?= strtolower(esc($kursus['judul'])) ?>">
                            <td class="px-4 py-3 text-gray-500"><?= $i + 1 ?></td>
                            <td class="px-4 py-3 font-medium text-gray-800 max-w-xs">
                                <?= esc($kursus['judul']) ?>
                            </td>
                            <td class="px-4 py-3 hidden md:table-cell">
                                <span class="px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700">
                                    <?= esc($kursus['kategori']) ?>
                                </span>
                            </td>
                            <td class="px-4 py-3 text-gray-600 hidden lg:table-cell"><?= esc($kursus['instruktur']) ?></td>
                            <td class="px-4 py-3 text-gray-600 hidden lg:table-cell">
                                <i class="fas fa-clock text-gray-400 mr-1"></i><?= esc($kursus['durasi']) ?>
                            </td>
                            <td class="px-4 py-3 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <span class="peserta-count font-semibold text-gray-700"><?= $kursus['peserta'] ?></span>
                                    <button
                                        class="btn-daftar bg-green-100 hover:bg-green-200 text-green-700 text-xs px-2 py-1 rounded-md transition"
                                        title="Daftar ke kursus ini"
                                    >
                                        +Daftar
                                    </button>
                                </div>
                            </td>
                            <td class="px-4 py-3 hidden md:table-cell">
                                <?php
                                $levelColor = $kursus['level'] === 'Pemula'
                                    ? 'bg-green-100 text-green-700'
                                    : 'bg-yellow-100 text-yellow-700';
                                ?>
                                <span class="px-2 py-1 rounded-full text-xs font-medium <?= $levelColor ?>">
                                    <?= esc($kursus['level']) ?>
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="/kursus/edit/<?= $kursus['id'] ?>"
                                       class="inline-flex items-center gap-1 bg-blue-500 hover:bg-blue-600 text-white text-xs px-3 py-1.5 rounded-md transition">
                                        <i class="fas fa-pen-to-square"></i>
                                        <span class="hidden sm:inline">Edit</span>
                                    </a>
                                    <button
                                        class="btn-hapus inline-flex items-center gap-1 bg-red-500 hover:bg-red-600 text-white text-xs px-3 py-1.5 rounded-md transition"
                                        data-id="<?= $kursus['id'] ?>"
                                        data-judul="<?= esc($kursus['judul']) ?>"
                                    >
                                        <i class="fas fa-trash"></i>
                                        <span class="hidden sm:inline">Hapus</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <!-- Empty state -->
                <div id="emptyState" class="hidden py-12 text-center text-gray-400">
                    <i class="fas fa-magnifying-glass text-3xl mb-2"></i>
                    <p>Kursus tidak ditemukan</p>
                </div>
            </div>
        </div>

    </main>
</div>

<!-- Toast Notification -->
<div id="toast" class="fixed bottom-6 right-6 z-50 hidden">
    <div class="flex items-center gap-3 bg-gray-800 text-white px-5 py-3 rounded-xl shadow-lg">
        <i id="toastIcon" class="fas fa-circle-check text-green-400"></i>
        <span id="toastMsg">Berhasil!</span>
    </div>
</div>

<script>
// ============================================================
// 1. Konfirmasi Hapus
// ============================================================
document.querySelectorAll('.btn-hapus').forEach(btn => {
    btn.addEventListener('click', function () {
        const id    = this.dataset.id;
        const judul = this.dataset.judul;
        if (confirm(`Hapus kursus "${judul}"?\nTindakan ini tidak dapat dibatalkan.`)) {
            showToast('Menghapus kursus...', 'info');
            window.location.href = '/kursus/delete/' + id;
        }
    });
});

// ============================================================
// 2. Counter Peserta Live
// ============================================================
document.querySelectorAll('.btn-daftar').forEach(btn => {
    btn.addEventListener('click', function () {
        const countEl = this.closest('td').querySelector('.peserta-count');
        countEl.textContent = parseInt(countEl.textContent) + 1;
        showToast('Berhasil mendaftar ke kursus!', 'success');
    });
});

// ============================================================
// 3. Filter / Search Realtime
// ============================================================
document.getElementById('searchInput').addEventListener('input', function () {
    const keyword = this.value.toLowerCase().trim();
    const rows    = document.querySelectorAll('.kursus-row');
    let visible   = 0;

    rows.forEach(row => {
        const judul = row.dataset.judul;
        if (judul.includes(keyword)) {
            row.classList.remove('hidden');
            visible++;
        } else {
            row.classList.add('hidden');
        }
    });

    document.getElementById('emptyState').classList.toggle('hidden', visible > 0);
});

// ============================================================
// 4. Toast Notification
// ============================================================
function showToast(message, type = 'success') {
    const toast   = document.getElementById('toast');
    const toastMsg  = document.getElementById('toastMsg');
    const toastIcon = document.getElementById('toastIcon');

    toastMsg.textContent = message;

    if (type === 'success') {
        toastIcon.className = 'fas fa-circle-check text-green-400';
    } else if (type === 'info') {
        toastIcon.className = 'fas fa-circle-info text-blue-400';
    } else {
        toastIcon.className = 'fas fa-triangle-exclamation text-yellow-400';
    }

    toast.classList.remove('hidden');
    setTimeout(() => toast.classList.add('hidden'), 3000);
}

// Tampilkan toast jika ada flash message dari server
<?php if (session()->getFlashdata('success')): ?>
showToast('<?= session()->getFlashdata('success') ?>', 'success');
<?php endif; ?>

// ============================================================
// Sidebar Mobile Toggle
// ============================================================
const sidebarToggle  = document.getElementById('sidebarToggle');
const mobileSidebar  = document.getElementById('mobileSidebar');
const sidebarOverlay = document.getElementById('sidebarOverlay');

sidebarToggle.addEventListener('click', () => {
    mobileSidebar.classList.toggle('hidden');
    mobileSidebar.classList.toggle('flex');
    sidebarOverlay.classList.toggle('hidden');
});

sidebarOverlay.addEventListener('click', () => {
    mobileSidebar.classList.add('hidden');
    mobileSidebar.classList.remove('flex');
    sidebarOverlay.classList.add('hidden');
});
</script>

</body>
</html>
