<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KelasKita — Platform Kursus Online untuk Generasi Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap');
        * { font-family: 'Inter', sans-serif; }
        .gradient-text {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hero-bg {
            background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #0f172a 100%);
        }
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.12);
        }
        .glow {
            box-shadow: 0 0 40px rgba(99, 102, 241, 0.3);
        }
        .nav-blur {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
        }
        .float-anim { animation: float 4s ease-in-out infinite; }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .fade-up { animation: fadeUp 0.7s ease forwards; }
        .delay-1 { animation-delay: 0.1s; opacity: 0; }
        .delay-2 { animation-delay: 0.25s; opacity: 0; }
        .delay-3 { animation-delay: 0.4s; opacity: 0; }
        .delay-4 { animation-delay: 0.55s; opacity: 0; }
    </style>
</head>
<body class="bg-white overflow-x-hidden">

<!-- ===================== NAVBAR ===================== -->
<nav class="fixed top-0 left-0 right-0 z-50 nav-blur bg-white/80 border-b border-gray-100 shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <!-- Logo -->
        <a href="/" class="flex items-center gap-2.5 group">
            <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center shadow-md group-hover:scale-105 transition">
                <i class="fas fa-graduation-cap text-white text-lg"></i>
            </div>
            <div>
                <span class="text-xl font-bold text-gray-900">KelasKita</span>
                <span class="hidden sm:block text-xs text-gray-400 -mt-1">Platform Kursus Online</span>
            </div>
        </a>

        <!-- Nav Links (desktop) -->
        <div class="hidden md:flex items-center gap-8">
            <a href="#fitur"   class="text-sm text-gray-600 hover:text-blue-600 font-medium transition">Fitur</a>
            <a href="#kursus"  class="text-sm text-gray-600 hover:text-blue-600 font-medium transition">Kursus</a>
            <a href="#statistik" class="text-sm text-gray-600 hover:text-blue-600 font-medium transition">Statistik</a>
            <a href="#testimoni" class="text-sm text-gray-600 hover:text-blue-600 font-medium transition">Testimoni</a>
        </div>

        <!-- CTA -->
        <div class="flex items-center gap-3">
            <a href="/login"
               class="hidden sm:flex items-center gap-2 text-sm font-semibold text-gray-700 hover:text-blue-600 transition">
                Masuk
            </a>
            <a href="/login"
               class="flex items-center gap-2 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white text-sm font-semibold px-5 py-2.5 rounded-xl shadow-md hover:shadow-lg transition-all duration-200">
                <i class="fas fa-sign-in-alt"></i>
                <span>Login</span>
            </a>
        </div>
    </div>
</nav>

<!-- ===================== HERO ===================== -->
<section class="hero-bg min-h-screen flex items-center pt-20 relative overflow-hidden">
    <!-- Background orbs -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-blue-600 rounded-full opacity-10 blur-3xl"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-600 rounded-full opacity-10 blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-indigo-700 rounded-full opacity-5 blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">
        <!-- Left -->
        <div>
            <div class="fade-up delay-1 inline-flex items-center gap-2 bg-white/10 border border-white/20 text-blue-300 text-xs font-semibold px-4 py-2 rounded-full mb-6">
                <i class="fas fa-bolt text-yellow-400"></i>
                Platform Kursus #1 untuk Generasi Digital
            </div>
            <h1 class="fade-up delay-2 text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight mb-6">
                Belajar Skill,<br>
                <span class="gradient-text">Raih Karier</span><br>
                Impianmu
            </h1>
            <p class="fade-up delay-3 text-gray-400 text-lg leading-relaxed mb-8 max-w-lg">
                KelasKita menghadirkan ratusan kursus berkualitas dari instruktur terbaik Indonesia.
                Belajar kapan saja, di mana saja, sesuai kecepatan belajarmu.
            </p>
            <div class="fade-up delay-4 flex flex-col sm:flex-row gap-4">
                <a href="/login"
                   class="flex items-center justify-center gap-2 bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white font-bold px-8 py-4 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 glow">
                    <i class="fas fa-rocket"></i> Mulai Belajar Gratis
                </a>
                <a href="#kursus"
                   class="flex items-center justify-center gap-2 border border-white/20 bg-white/5 hover:bg-white/10 text-white font-semibold px-8 py-4 rounded-2xl transition">
                    <i class="fas fa-play-circle"></i> Lihat Kursus
                </a>
            </div>
            <!-- Badges -->
            <div class="fade-up delay-4 flex items-center gap-6 mt-10">
                <div class="flex items-center gap-2 text-gray-400 text-sm">
                    <i class="fas fa-check-circle text-green-400"></i> Gratis mendaftar
                </div>
                <div class="flex items-center gap-2 text-gray-400 text-sm">
                    <i class="fas fa-check-circle text-green-400"></i> Sertifikat resmi
                </div>
                <div class="flex items-center gap-2 text-gray-400 text-sm">
                    <i class="fas fa-check-circle text-green-400"></i> Seumur hidup
                </div>
            </div>
        </div>

        <!-- Right — Floating Card -->
        <div class="hidden md:flex justify-center items-center">
            <div class="float-anim relative">
                <!-- Main card -->
                <div class="bg-white rounded-3xl shadow-2xl p-6 w-80">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-laptop-code text-white text-xl"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800 text-sm">Web Development</p>
                            <p class="text-xs text-gray-500">dengan Laravel</p>
                        </div>
                    </div>
                    <!-- Progress -->
                    <div class="mb-3">
                        <div class="flex justify-between text-xs text-gray-500 mb-1">
                            <span>Progress belajar</span><span class="text-blue-600 font-semibold">72%</span>
                        </div>
                        <div class="h-2 bg-gray-100 rounded-full">
                            <div class="h-2 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full w-[72%]"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between text-xs text-gray-500">
                        <span><i class="fas fa-clock mr-1 text-blue-400"></i>12 Jam</span>
                        <span><i class="fas fa-users mr-1 text-purple-400"></i>128 Peserta</span>
                        <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded-full font-medium">Pemula</span>
                    </div>
                </div>

                <!-- Floating badge 1 -->
                <div class="absolute -top-4 -right-4 bg-yellow-400 text-yellow-900 font-bold text-xs px-3 py-2 rounded-xl shadow-lg flex items-center gap-1">
                    <i class="fas fa-star"></i> 4.9 Rating
                </div>

                <!-- Floating badge 2 -->
                <div class="absolute -bottom-4 -left-4 bg-white shadow-xl rounded-2xl px-4 py-3 flex items-center gap-3">
                    <div class="flex -space-x-2">
                        <div class="w-7 h-7 rounded-full bg-blue-400 border-2 border-white flex items-center justify-center text-white text-xs font-bold">A</div>
                        <div class="w-7 h-7 rounded-full bg-purple-400 border-2 border-white flex items-center justify-center text-white text-xs font-bold">B</div>
                        <div class="w-7 h-7 rounded-full bg-pink-400 border-2 border-white flex items-center justify-center text-white text-xs font-bold">C</div>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-gray-800">+500 Siswa</p>
                        <p class="text-xs text-gray-400">bergabung bulan ini</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== STATISTIK ===================== -->
<section id="statistik" class="py-16 bg-gradient-to-r from-blue-600 to-purple-700">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-white">
            <div>
                <div class="text-4xl font-black mb-1">500+</div>
                <div class="text-blue-200 text-sm font-medium"><i class="fas fa-book mr-1"></i>Kursus Tersedia</div>
            </div>
            <div>
                <div class="text-4xl font-black mb-1">12K+</div>
                <div class="text-blue-200 text-sm font-medium"><i class="fas fa-users mr-1"></i>Pelajar Aktif</div>
            </div>
            <div>
                <div class="text-4xl font-black mb-1">120+</div>
                <div class="text-blue-200 text-sm font-medium"><i class="fas fa-chalkboard-user mr-1"></i>Instruktur Expert</div>
            </div>
            <div>
                <div class="text-4xl font-black mb-1">98%</div>
                <div class="text-blue-200 text-sm font-medium"><i class="fas fa-heart mr-1"></i>Tingkat Kepuasan</div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== FITUR ===================== -->
<section id="fitur" class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block bg-blue-100 text-blue-700 text-xs font-bold px-4 py-2 rounded-full mb-4 uppercase tracking-wider">Kenapa KelasKita?</span>
            <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-4">Platform Belajar Terbaik<br>untuk Karirmu</h2>
            <p class="text-gray-500 max-w-xl mx-auto">Kami menyediakan pengalaman belajar terbaik dengan teknologi dan konten berkualitas tinggi.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Fitur 1 -->
            <div class="card-hover bg-white rounded-2xl p-8 shadow-sm border border-gray-100 text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-video text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-3">Video Berkualitas HD</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Nikmati video pembelajaran resolusi tinggi yang bisa ditonton offline kapan saja dan di mana saja.</p>
            </div>
            <!-- Fitur 2 -->
            <div class="card-hover bg-white rounded-2xl p-8 shadow-sm border border-gray-100 text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-certificate text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-3">Sertifikat Diakui</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Dapatkan sertifikat yang diakui industri setelah menyelesaikan kursus untuk memperkuat portofoliomu.</p>
            </div>
            <!-- Fitur 3 -->
            <div class="card-hover bg-white rounded-2xl p-8 shadow-sm border border-gray-100 text-center">
                <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-comments text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-3">Komunitas Aktif</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Bergabung dengan ribuan pelajar di forum diskusi aktif dan dapatkan dukungan dari sesama.</p>
            </div>
            <!-- Fitur 4 -->
            <div class="card-hover bg-white rounded-2xl p-8 shadow-sm border border-gray-100 text-center">
                <div class="w-16 h-16 bg-yellow-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-infinity text-yellow-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-3">Akses Seumur Hidup</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Sekali bayar, akses selamanya. Materi selalu diperbarui tanpa biaya tambahan.</p>
            </div>
            <!-- Fitur 5 -->
            <div class="card-hover bg-white rounded-2xl p-8 shadow-sm border border-gray-100 text-center">
                <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-mobile-screen text-red-500 text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-3">Belajar di Mana Saja</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Akses lewat smartphone, tablet, atau laptop. Platform responsif untuk semua perangkat.</p>
            </div>
            <!-- Fitur 6 -->
            <div class="card-hover bg-white rounded-2xl p-8 shadow-sm border border-gray-100 text-center">
                <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-brain text-indigo-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-3">Kurikulum Terkini</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Materi selalu diperbarui mengikuti perkembangan industri dan kebutuhan dunia kerja nyata.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== KURSUS POPULER ===================== -->
<section id="kursus" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12">
            <div>
                <span class="inline-block bg-purple-100 text-purple-700 text-xs font-bold px-4 py-2 rounded-full mb-4 uppercase tracking-wider">Populer</span>
                <h2 class="text-3xl md:text-4xl font-black text-gray-900">Kursus Terpopuler</h2>
                <p class="text-gray-500 mt-2">Dipilih oleh ribuan pelajar aktif kami</p>
            </div>
            <a href="/login" class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:underline text-sm">
                Lihat semua kursus <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $kursus = [
                ['icon'=>'fa-brands fa-laravel','color'=>'bg-red-100','iconColor'=>'text-red-500','judul'=>'Web Development dengan Laravel','instruktur'=>'Budi Santoso','durasi'=>'12 Jam','peserta'=>128,'level'=>'Pemula','levelColor'=>'bg-green-100 text-green-700','rating'=>4.9],
                ['icon'=>'fa-solid fa-pen-ruler','color'=>'bg-purple-100','iconColor'=>'text-purple-500','judul'=>'UI/UX Design dengan Figma','instruktur'=>'Sari Dewi','durasi'=>'8 Jam','peserta'=>95,'level'=>'Pemula','levelColor'=>'bg-green-100 text-green-700','rating'=>4.8],
                ['icon'=>'fa-brands fa-python','color'=>'bg-blue-100','iconColor'=>'text-blue-500','judul'=>'Python untuk Data Science','instruktur'=>'Andi Wijaya','durasi'=>'15 Jam','peserta'=>210,'level'=>'Menengah','levelColor'=>'bg-yellow-100 text-yellow-700','rating'=>4.9],
                ['icon'=>'fa-solid fa-bullhorn','color'=>'bg-orange-100','iconColor'=>'text-orange-500','judul'=>'Digital Marketing Strategy','instruktur'=>'Rina Kusuma','durasi'=>'6 Jam','peserta'=>176,'level'=>'Pemula','levelColor'=>'bg-green-100 text-green-700','rating'=>4.7],
                ['icon'=>'fa-brands fa-flutter','color'=>'bg-cyan-100','iconColor'=>'text-cyan-500','judul'=>'Flutter Mobile App Development','instruktur'=>'Dian Pratama','durasi'=>'20 Jam','peserta'=>88,'level'=>'Menengah','levelColor'=>'bg-yellow-100 text-yellow-700','rating'=>4.8],
                ['icon'=>'fa-solid fa-robot','color'=>'bg-indigo-100','iconColor'=>'text-indigo-500','judul'=>'Machine Learning dengan TensorFlow','instruktur'=>'Reza Firmansyah','durasi'=>'18 Jam','peserta'=>143,'level'=>'Mahir','levelColor'=>'bg-red-100 text-red-700','rating'=>4.9],
            ];
            foreach ($kursus as $k):
            ?>
            <div class="card-hover bg-white border border-gray-100 rounded-2xl shadow-sm overflow-hidden group">
                <!-- Top Banner -->
                <div class="h-36 bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center relative">
                    <div class="w-16 h-16 <?= $k['color'] ?> rounded-2xl flex items-center justify-center">
                        <i class="<?= $k['icon'] ?> <?= $k['iconColor'] ?> text-3xl"></i>
                    </div>
                    <div class="absolute top-3 right-3 bg-white shadow text-xs font-bold px-2.5 py-1 rounded-full flex items-center gap-1">
                        <i class="fas fa-star text-yellow-400"></i> <?= $k['rating'] ?>
                    </div>
                </div>
                <!-- Content -->
                <div class="p-5">
                    <h3 class="font-bold text-gray-800 mb-1 text-sm leading-snug group-hover:text-blue-600 transition"><?= $k['judul'] ?></h3>
                    <p class="text-xs text-gray-500 mb-3"><i class="fas fa-chalkboard-user mr-1 text-gray-400"></i><?= $k['instruktur'] ?></p>
                    <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                        <span><i class="fas fa-clock mr-1 text-blue-400"></i><?= $k['durasi'] ?></span>
                        <span><i class="fas fa-users mr-1 text-purple-400"></i><?= $k['peserta'] ?> Peserta</span>
                        <span class="<?= $k['levelColor'] ?> px-2 py-0.5 rounded-full font-medium"><?= $k['level'] ?></span>
                    </div>
                    <a href="/login"
                       class="block text-center bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white text-sm font-semibold py-2.5 rounded-xl transition">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===================== TESTIMONI ===================== -->
<section id="testimoni" class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block bg-green-100 text-green-700 text-xs font-bold px-4 py-2 rounded-full mb-4 uppercase tracking-wider">Testimoni</span>
            <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-4">Apa Kata Mereka?</h2>
            <p class="text-gray-500">Ribuan pelajar telah merasakan manfaat belajar di KelasKita</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <?php
            $testimoni = [
                ['nama'=>'Rizky Pratama','role'=>'Frontend Developer','avatar'=>'R','avatarBg'=>'bg-blue-500','bintang'=>5,'komentar'=>'KelasKita benar-benar mengubah karir saya! Dalam 3 bulan belajar, saya berhasil dapat kerja sebagai Frontend Developer di startup unicorn. Materinya sangat relevan dan instrukturnya responsif.'],
                ['nama'=>'Ayu Lestari','role'=>'UI/UX Designer','avatar'=>'A','avatarBg'=>'bg-pink-500','bintang'=>5,'komentar'=>'Kursus UI/UX-nya luar biasa! Saya yang awalnya tidak punya background design, sekarang sudah bisa mengerjakan project freelance dari klien internasional. Highly recommended!'],
                ['nama'=>'Fajar Nugroho','role'=>'Data Analyst','avatar'=>'F','avatarBg'=>'bg-purple-500','bintang'=>5,'komentar'=>'Platform terbaik untuk belajar data science! Instrukturnya sangat berpengalaman dan materi Python + Pandas-nya mudah dipahami bahkan untuk pemula seperti saya.'],
            ];
            foreach ($testimoni as $t):
            ?>
            <div class="card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <!-- Stars -->
                <div class="flex gap-1 mb-4">
                    <?php for ($i = 0; $i < $t['bintang']; $i++): ?>
                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                    <?php endfor; ?>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed mb-6 italic">"<?= $t['komentar'] ?>"</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 <?= $t['avatarBg'] ?> rounded-full flex items-center justify-center text-white font-bold text-sm">
                        <?= $t['avatar'] ?>
                    </div>
                    <div>
                        <p class="font-bold text-gray-800 text-sm"><?= $t['nama'] ?></p>
                        <p class="text-xs text-gray-500"><?= $t['role'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===================== CTA BANNER ===================== -->
<section class="py-20 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-700 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-64 h-64 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full translate-x-1/3 translate-y-1/3"></div>
    </div>
    <div class="relative max-w-4xl mx-auto px-6 text-center">
        <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-graduation-cap text-white text-3xl"></i>
        </div>
        <h2 class="text-3xl md:text-5xl font-black text-white mb-6">Siap Mulai Perjalanan<br>Belajarmu?</h2>
        <p class="text-blue-100 text-lg mb-8 max-w-xl mx-auto">Bergabunglah dengan 12.000+ pelajar aktif dan mulai belajar skill yang dibutuhkan industri hari ini.</p>
        <a href="/login"
           class="inline-flex items-center gap-3 bg-white text-blue-700 hover:bg-gray-50 font-bold text-lg px-10 py-4 rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-300">
            <i class="fas fa-rocket text-purple-600"></i>
            Daftar Gratis Sekarang
        </a>
        <p class="text-blue-200 text-sm mt-4"><i class="fas fa-shield-halved mr-1"></i>Gratis selamanya · Tidak perlu kartu kredit</p>
    </div>
</section>

<!-- ===================== FOOTER ===================== -->
<footer class="bg-gray-900 text-gray-400 py-12">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-8 mb-8">
            <!-- Brand -->
            <div class="md:col-span-2">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white text-lg"></i>
                    </div>
                    <span class="text-xl font-bold text-white">KelasKita</span>
                </div>
                <p class="text-sm leading-relaxed max-w-xs">Platform kursus online terpercaya untuk generasi digital Indonesia. Belajar skill, raih karier impianmu.</p>
                <div class="flex gap-3 mt-5">
                    <a href="#" class="w-9 h-9 bg-gray-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition"><i class="fab fa-instagram text-sm"></i></a>
                    <a href="#" class="w-9 h-9 bg-gray-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition"><i class="fab fa-twitter text-sm"></i></a>
                    <a href="#" class="w-9 h-9 bg-gray-800 hover:bg-blue-700 rounded-lg flex items-center justify-center transition"><i class="fab fa-linkedin text-sm"></i></a>
                    <a href="#" class="w-9 h-9 bg-gray-800 hover:bg-red-600 rounded-lg flex items-center justify-center transition"><i class="fab fa-youtube text-sm"></i></a>
                </div>
            </div>
            <!-- Links -->
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm">Kursus</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">Web Development</a></li>
                    <li><a href="#" class="hover:text-white transition">Mobile Development</a></li>
                    <li><a href="#" class="hover:text-white transition">Data Science</a></li>
                    <li><a href="#" class="hover:text-white transition">UI/UX Design</a></li>
                    <li><a href="#" class="hover:text-white transition">Digital Marketing</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm">Perusahaan</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-white transition">Karir</a></li>
                    <li><a href="#" class="hover:text-white transition">Blog</a></li>
                    <li><a href="#" class="hover:text-white transition">Kontak</a></li>
                    <li><a href="/login" class="hover:text-white transition">Login Admin</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 pt-6 flex flex-col md:flex-row items-center justify-between gap-3 text-xs">
            <p>&copy; 2025 KelasKita. Dibuat dengan <i class="fas fa-heart text-red-500 mx-0.5"></i> untuk Generasi Digital Indonesia.</p>
            <p>UTS Basic Web Development — Universitas Cakrawala</p>
        </div>
    </div>
</footer>

<!-- Smooth scroll -->
<script>
document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', function(e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});
</script>

</body>
</html>
