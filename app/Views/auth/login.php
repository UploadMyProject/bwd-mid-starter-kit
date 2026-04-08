<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KelasKita — Masuk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-600 to-purple-700 flex items-center justify-center p-4">

    <div class="w-full max-w-md">
        <!-- Card -->
        <div class="bg-white rounded-2xl shadow-2xl p-8">
            <!-- Logo -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full mb-4">
                    <i class="fas fa-graduation-cap text-white text-4xl"></i>
                </div>
                <h1 class="text-3xl font-bold text-gray-800">KelasKita</h1>
                <p class="text-gray-500 mt-1">Masuk ke akun Anda</p>
            </div>

            <!-- Error Alert -->
            <?php if (session()->getFlashdata('error')): ?>
            <div class="mb-4 flex items-center gap-2 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
                <i class="fas fa-circle-exclamation"></i>
                <span><?= session()->getFlashdata('error') ?></span>
            </div>
            <?php endif; ?>

            <!-- Form -->
            <form action="/login" method="POST">
                <?= csrf_field() ?>

                <!-- Username -->
                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                            <i class="fas fa-user"></i>
                        </span>
                        <input
                            type="text"
                            name="username"
                            required
                            placeholder="Masukkan username"
                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                        >
                    </div>
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input
                            type="password"
                            name="password"
                            required
                            placeholder="Masukkan password"
                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                        >
                    </div>
                </div>

                <!-- Submit -->
                <button
                    type="submit"
                    class="w-full flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg transition duration-200"
                >
                    <i class="fas fa-sign-in-alt"></i>
                    Masuk
                </button>
            </form>

            <p class="text-center text-xs text-gray-400 mt-6">Platform Kursus Online untuk Generasi Digital</p>
        </div>
    </div>

</body>
</html>
