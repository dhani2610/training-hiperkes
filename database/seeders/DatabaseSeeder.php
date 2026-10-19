<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use App\Models\Statistic;
use App\Models\HeroSlide;
use App\Models\Program;
use App\Models\Article;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Services\HiperkesSchemeService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        // 1. Super Admin User
        User::updateOrCreate(
            ['email' => 'admin@traininghiperkes.id'],
            [
                'name' => 'Administrator Training Hiperkes Perawat Indonesia',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Settings
        $settings = [
            'site_name' => 'Training Hiperkes Perawat Indonesia',
            'site_tagline' => 'Pusat Pembinaan & Sertifikasi Resmi Hiperkes Perawat / Petugas Medis Kemnaker RI & PPNI SKP',
            'company_name' => 'Lembaga Pelatihan & Pengembangan Higene Perusahaan Kesehatan Kerja Indonesia',
            'license_info' => 'Sertifikasi Resmi Kemnaker RI (Permenaker No. 01/MEN/1979) & SKP Terakreditasi PPNI',
            'whatsapp' => '081399810272', // Main WA Utama (Highlighted)
            'whatsapp_detail_1' => '08118500177',
            'whatsapp_detail_2' => '081399810272',
            'whatsapp_detail_3' => '087894580806',
            'whatsapp_detail_4' => '087894580649',
            'email' => 'kontak@traininghiperkes.id',
            'email_secondary' => 'sekretariat.hiperkes@gmail.com',
            'phone' => '081399810272',
            'address' => 'Gedung Pusat Diklat K3 & Hiperkes Kesehatan Kerja Nasional, Jakarta',
            'maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.28298835848!2d106.759478!3d-6.2297465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e498c0a531%3A0x7d87f7b2c0e86b0a!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid',
            'office_hours' => 'Senin - Jumat: 08.00 - 17.00 WIB | Hotline Konsultasi Medis WA: 24 Jam',
            'hero_title' => 'Pusat Training & Sertifikasi Hiperkes Perawat / Petugas Medis Resmi Kemnaker RI',
            'hero_description' => 'Mencetak tenaga keperawatan dan paramedis industri yang kompeten dalam surveilans kesehatan kerja, ergonomi industri, diagnosis PAK, dan manajemen klinik kerja berstandar Permenaker No. 01/MEN/1979.',
            'about_history' => 'Lembaga Training Hiperkes Perawat Indonesia didirikan oleh perhimpunan dokter spesialis kedokteran okupasi dan praktisi perawat kesehatan kerja senior guna menjawab kebutuhan mendesak industri akan tenaga paramedis yang kompeten, profesional, dan berlisensi sah. Berlandaskan ketentuan Permenaker No. 01/MEN/1979 dan Permenaker No. 05/2018, kami telah mendidik dan melisensikan lebih dari 12.800 perawat dan petugas medis perusahaan di seluruh penjuru Indonesia.',
            'about_vision' => 'Menjadi institusi rujukan utama nasional dalam pelatihan, sertifikasi, dan pengembangan kompetensi higene perusahaan dan kesehatan kerja bagi tenaga keperawatan dan paramedis industri di Indonesia.',
            'about_mission' => "1. Menyelenggarakan pelatihan dan sertifikasi Hiperkes Perawat berlisensi resmi Kementerian Ketenagakerjaan RI.\n2. Memberikan Satuan Kredit Profesi (SKP) PPNI resmi terakreditasi untuk mendukung perpanjangan STR dan jenjang karir perawat.\n3. Membekali peserta dengan keahlian aplikatif surveilans audiometri, spirometri, penanganan trauma darurat industri, dan asesmen ergonomi.\n4. Mendampingi korporasi dalam standardisasi klinik perusahaan, pencegahan penyakit akibat kerja (PAK), dan terwujudnya zero accident.",
            'floating_wa_text' => 'Halo Admin Utama Training Hiperkes, saya ingin konsultasi mengenai jadwal pelatihan dan sertifikasi resmi Hiperkes Perawat / Petugas Medis Kemnaker RI.'
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value, 'group' => 'general']
            );
        }

        // 3. Statistics
        $statisticsData = [
            ['key' => 'nurses', 'label' => 'Perawat & Paramedis Alumni', 'value' => '12.850+', 'icon' => 'bi bi-person-badge-fill', 'sort_order' => 1],
            ['key' => 'corporate', 'label' => 'Perusahaan & RS Mitra', 'value' => '1.450+', 'icon' => 'bi bi-hospital-fill', 'sort_order' => 2],
            ['key' => 'schemes', 'label' => 'Program Sertifikasi Hiperkes', 'value' => '6 Program', 'icon' => 'bi bi-patch-check-fill', 'sort_order' => 3],
            ['key' => 'coverage', 'label' => 'Jangkauan Wilayah Indonesia', 'value' => '38 Provinsi', 'icon' => 'bi bi-geo-alt-fill', 'sort_order' => 4],
        ];

        Statistic::truncate();
        foreach ($statisticsData as $stat) {
            Statistic::create(array_merge($stat, ['is_active' => true]));
        }

        // 4. Hero Slides (Tanpa Foto / Menggunakan HUD Visual & Medis Informatif)
        $heroSlidesData = [
            [
                'title' => 'Pelatihan & Sertifikasi Hiperkes Perawat Perusahaan Kemnaker RI',
                'subtitle' => 'Kuasai standar kompetensi higene industri, surveilans kesehatan kerja (Audiometri & Spirometri), identifikasi bahaya lingkungan, dan manajemen klinik kerja sesuai Permenaker No. 01/MEN/1979.',
                'badge' => 'SERTIFIKASI RESMI KEMNAKER RI + SKP TERAKREDITASI PPNI',
                'cta_text' => 'Lihat 6 Program Pelatihan',
                'cta_link' => '#program',
                'cta2_text' => 'Konsultasi WhatsApp 24 Jam',
                'cta2_link' => 'https://api.whatsapp.com/send?phone=6281399810272',
                'image' => '', // Tanpa foto
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Pencegahan Penyakit Akibat Kerja (PAK) & Tanggap Darurat Trauma Industri',
                'subtitle' => 'Kurikulum aplikatif berbasis praktik: metode asesmen ergonomi REBA/RULA, mitigasi paparan bising & gas toksik, Basic Life Support (BLS), serta tata kelola klaim JKK BPJS Ketenagakerjaan.',
                'badge' => 'STANDAR PERMENAKER NO. 5 TAHUN 2018 & PERMENKES NO. 56/2016',
                'cta_text' => 'Pelajari Kurikulum & Jadwal',
                'cta_link' => '#program',
                'cta2_text' => 'Hubungi Konsultan Medis',
                'cta2_link' => '#kontak',
                'image' => '', // Tanpa foto
                'sort_order' => 2,
                'is_active' => true,
            ]
        ];

        HeroSlide::truncate();
        foreach ($heroSlidesData as $slide) {
            HeroSlide::create($slide);
        }

        // 5. Programs (6 Program Resmi Hiperkes Perawat)
        Program::truncate();
        $masterPrograms = HiperkesSchemeService::getMasterPrograms();
        foreach ($masterPrograms as $index => $prog) {
            Program::create([
                'title' => $prog['title'],
                'slug' => $prog['slug'],
                'level_name' => $prog['category'],
                'badge' => $prog['badge'],
                'duration' => $prog['duration'],
                'certification_body' => 'Kemnaker RI & PPNI',
                'target_audience' => $prog['target_audience'],
                'requirements' => $prog['requirements'],
                'curriculum' => $prog['curriculum'],
                'short_description' => $prog['description'],
                'full_description' => $prog['overview'],
                'image' => '',
                'is_active' => true,
                'sort_order' => $index + 1,
            ]);
        }

        // 6. Initial Deep Articles (3 artikel unggulan beranda)
        Article::truncate();
        $sampleTopics = [
            "Training Hiperkes Perawat: Implementasi Permenaker No. 01/MEN/1979 dalam Perlindungan Paramedis Industri",
            "Training Hiperkes Perawat: Tata Kelola Klinik Kerja dan Manajemen Pelayanan Kesehatan Kerja Sesuai Standar Kemnaker",
            "Training Hiperkes Perawat: Penilaian Risiko Ergonomi Pekerja Pabrik dengan Metode REBA dan RULA"
        ];

        foreach ($sampleTopics as $topic) {
            $artData = HiperkesSchemeService::generateDeepArticle($topic, 'DKI Jakarta');
            Article::create([
                'title' => $artData['title'],
                'slug' => $artData['slug'],
                'category' => 'Hiperkes & Paramedis',
                'author' => 'Tim Medis Hiperkes Indonesia',
                'views_count' => rand(2100, 4800),
                'featured_image' => '',
                'excerpt' => $artData['excerpt'],
                'content' => $artData['content'],
                'is_published' => true,
            ]);
        }

        // 7. Testimonials
        $testimonialsData = [
            [
                'name' => 'Ns. Ratna Sari, S.Kep',
                'company' => 'PT Pertamina Hulu Energi (Offshore Medical)',
                'role' => 'Occupational Health Nurse & Clinic Coordinator',
                'content' => 'Pelatihan Hiperkes Perawat di sini sangat berbobot dan aplikatif. Pemateri dokter spesialis okupasi menjelaskan studi kasus di remote area dengan sangat detail. Sertifikat Kemnaker dan SKP PPNI-nya langsung terbit resmi.',
                'rating' => 5,
                'sort_order' => 1
            ],
            [
                'name' => 'Ahmad Fauzi, Amd.Kep',
                'company' => 'PT Unilever Indonesia Tbk',
                'role' => 'Industrial Paramedic Officer',
                'content' => 'Praktik evaluasi ergonomi REBA-RULA dan pembacaan kurva spirometri sangat membantu tugas saya sehari-hari di klinik pabrik. Sangat direkomendasikan untuk seluruh perawat yang ingin berkarier di industri manufaktur.',
                'rating' => 5,
                'sort_order' => 2
            ],
            [
                'name' => 'Ns. Dewi Lestari, M.Kep',
                'company' => 'PT Freeport Indonesia (Tembagapura)',
                'role' => 'Emergency Response Nurse Specialist',
                'content' => 'Materi First Aid trauma industri dan penanganan gawat darurat di ruang terbatas (confined space) disimulasikan dengan standar internasional. Pelayanan adminnya cepat dan konsultasi pasca-training sangat memuaskan.',
                'rating' => 5,
                'sort_order' => 3
            ]
        ];

        Testimonial::truncate();
        foreach ($testimonialsData as $testi) {
            Testimonial::create(array_merge($testi, ['is_active' => true]));
        }

        // 8. FAQs
        $faqsData = [
            [
                'question' => 'Mengapa perawat atau paramedis yang bertugas di perusahaan wajib memiliki sertifikasi Hiperkes?',
                'answer' => 'Berdasarkan Peraturan Menteri Tenaga Kerja, Transmigrasi dan Koperasi No. 01/MEN/1979, setiap tenaga paramedis (perawat dan bidan) yang bekerja di klinik atau unit K3 perusahaan WAJIB mengikuti pelatihan dan memiliki sertifikat Hiperkes dari Kementerian Ketenagakerjaan RI. Sertifikasi ini memastikan perawat memiliki legalitas hukum dan kompetensi klinis untuk mengidentifikasi bahaya fisik, kimia, biologi, ergonomi, serta menegakkan pencegahan penyakit akibat kerja (PAK).',
                'sort_order' => 1
            ],
            [
                'question' => 'Apakah pelatihan Hiperkes Perawat ini mendapatkan Satuan Kredit Profesi (SKP) PPNI?',
                'answer' => 'Ya, program kami telah terakreditasi resmi oleh Persatuan Perawat Nasional Indonesia (PPNI). Peserta yang lulus akan memperoleh sertifikat dengan nilai SKP resmi yang dapat diunggah langsung ke platform SATUSEHAT SDMK Kemenkes RI untuk keperluan perpanjangan Surat Tanda Registrasi (STR) perawat.',
                'sort_order' => 2
            ],
            [
                'question' => 'Berapa lama masa berlaku sertifikat Hiperkes Perawat Kemnaker RI?',
                'answer' => 'Sertifikat pelatihan Hiperkes Perawat Kemnaker RI berlaku seumur hidup sebagai bukti kompetensi kelulusan materi Hiperkes. Namun untuk Surat Keputusan Penunjukan (SKP) Paramedis Perusahaan atau penugasan di klinik instansi tertentu dilakukan perpanjangan berkala setiap 3 tahun sekali melalui Dinas Tenaga Kerja setempat.',
                'sort_order' => 3
            ],
            [
                'question' => 'Apa saja materi utama yang dipelajari selama pelatihan 5 hari?',
                'answer' => 'Materi komprehensif mencakup: Peraturan Perundangan K3 & Hiperkes, Faktor Fisika (Bising, Getaran, Iklim Kerja ISBB), Faktor Kimia (Toksikologi & NAB), Faktor Biologi & Higiene Sanitasi Makanan, Ergonomi Kerja (Metode REBA/RULA), Fisiologi & Gizi Kerja, Surveilans Medis (Audiometri & Spirometri), Penyakit Akibat Kerja (PAK), Manajemen Pelayanan Kesehatan Kerja, Penanganan Gawat Darurat Medis (BLS + AED), serta Praktik Kunjungan Lapangan Industri (PKL).',
                'sort_order' => 4
            ],
            [
                'question' => 'Bagaimana metode pelaksanaan pelatihan dan apa saja syarat pendaftarannya?',
                'answer' => 'Pelatihan diselenggarakan secara Blended Learning (Virtual Zoom Classroom interaktif + Simulasi Kasus Lapangan) serta Tatap Muka Penuh (Offline) di hotel berbintang yang ditunjuk. Syarat pendaftaran: Fotokopi Ijazah Keperawatan (minimal D3/S1/Ners), fotokopi STR perawat yang masih berlaku, fotokopi KTP, pasfoto berlatar merah 3x4 dan 4x6, serta surat keterangan sehat.',
                'sort_order' => 5
            ]
        ];

        Faq::truncate();
        foreach ($faqsData as $faq) {
            Faq::create(array_merge($faq, ['is_active' => true]));
        }

        Schema::enableForeignKeyConstraints();
    }
}
