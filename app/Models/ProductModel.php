<?php
namespace App\Models;

class ProductModel
{
    private array $courses = [
        [
            'id'          => 1,
            'judul'       => 'Web Development dengan Laravel',
            'deskripsi'   => 'Belajar membangun aplikasi web modern menggunakan framework Laravel dari nol hingga deploy.',
            'kategori'    => 'Web Development',
            'instruktur'  => 'Budi Santoso',
            'durasi'      => '12 Jam',
            'peserta'     => 128,
            'level'       => 'Pemula',
        ],
        [
            'id'          => 2,
            'judul'       => 'UI/UX Design dengan Figma',
            'deskripsi'   => 'Pelajari cara merancang antarmuka yang menarik dan user-friendly menggunakan Figma.',
            'kategori'    => 'Design',
            'instruktur'  => 'Sari Dewi',
            'durasi'      => '8 Jam',
            'peserta'     => 95,
            'level'       => 'Pemula',
        ],
        [
            'id'          => 3,
            'judul'       => 'Python untuk Data Science',
            'deskripsi'   => 'Kuasai Python dan library data science seperti Pandas, NumPy, dan Matplotlib.',
            'kategori'    => 'Data Science',
            'instruktur'  => 'Andi Wijaya',
            'durasi'      => '15 Jam',
            'peserta'     => 210,
            'level'       => 'Menengah',
        ],
        [
            'id'          => 4,
            'judul'       => 'Digital Marketing Strategy',
            'deskripsi'   => 'Strategi pemasaran digital yang efektif untuk bisnis online di era modern.',
            'kategori'    => 'Marketing',
            'instruktur'  => 'Rina Kusuma',
            'durasi'      => '6 Jam',
            'peserta'     => 176,
            'level'       => 'Pemula',
        ],
        [
            'id'          => 5,
            'judul'       => 'Flutter Mobile App Development',
            'deskripsi'   => 'Bangun aplikasi mobile Android dan iOS sekaligus menggunakan Flutter dan Dart.',
            'kategori'    => 'Mobile Development',
            'instruktur'  => 'Dian Pratama',
            'durasi'      => '20 Jam',
            'peserta'     => 88,
            'level'       => 'Menengah',
        ],
    ];

    public function getDummyData(): array
    {
        $stored = session()->get('courses');
        if ($stored !== null) {
            return $stored;
        }
        session()->set('courses', $this->courses);
        return $this->courses;
    }

    public function findById(int $id): ?array
    {
        $courses = $this->getDummyData();
        foreach ($courses as $course) {
            if ($course['id'] === $id) {
                return $course;
            }
        }
        return null;
    }

    public function create(array $data): void
    {
        $courses = $this->getDummyData();
        $maxId = 0;
        foreach ($courses as $c) {
            if ($c['id'] > $maxId) $maxId = $c['id'];
        }
        $data['id'] = $maxId + 1;
        $data['peserta'] = 0;
        $courses[] = $data;
        session()->set('courses', $courses);
    }

    public function update(int $id, array $data): void
    {
        $courses = $this->getDummyData();
        foreach ($courses as &$course) {
            if ($course['id'] === $id) {
                $course['judul']      = $data['judul'];
                $course['deskripsi']  = $data['deskripsi'];
                $course['kategori']   = $data['kategori'];
                $course['instruktur'] = $data['instruktur'];
                $course['durasi']     = $data['durasi'];
                $course['level']      = $data['level'];
                break;
            }
        }
        session()->set('courses', $courses);
    }

    public function delete(int $id): void
    {
        $courses = $this->getDummyData();
        $courses = array_values(array_filter($courses, fn($c) => $c['id'] !== $id));
        session()->set('courses', $courses);
    }
}
