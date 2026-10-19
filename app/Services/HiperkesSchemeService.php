<?php

namespace App\Services;

use Illuminate\Support\Str;

class HiperkesSchemeService
{
    /**
     * Daftar 6 Master Program Training Hiperkes Perawat / Petugas Medis
     */
    public static function getMasterPrograms(): array
    {
        return [
            [
                'title' => 'Training & Sertifikasi Hiperkes Perawat Perusahaan (Kemnaker RI)',
                'slug' => 'training-sertifikasi-hiperkes-perawat-kemnaker',
                'category' => 'Sertifikasi Kemnaker RI',
                'duration' => '5 Hari (40 Jam Pelajaran)',
                'price' => 3850000,
                'rating' => 4.9,
                'reviews_count' => 342,
                'badge' => 'Sertifikasi Resmi Kemnaker RI + SKP PPNI',
                'description' => 'Program pelatihan wajib bagi perawat dan tenaga paramedis perusahaan sesuai ketentuan Permenaker No. 01/MEN/1979 guna memperoleh lisensi resmi dari Kementerian Ketenagakerjaan RI dan SKP PPNI.',
                'overview' => 'Pelatihan Hiperkes (Higene Perusahaan dan Kesehatan Kerja) Perawat adalah sertifikasi wajib yang dipersyaratkan oleh pemerintah Indonesia bagi setiap tenaga keperawatan yang bertugas di klinik, pos kesehatan, atau unit K3 perusahaan. Melalui pelatihan intensif 5 hari ini, peserta dibekali kompetensi komprehensif dalam mengidentifikasi bahaya fisik, kimia, biologi, ergonomi, dan psikososial di tempat kerja, menyelenggarakan rekam medis okupasi, serta menyusun program preventif kesehatan kerja.',
                'target_audience' => [
                    'Perawat klinik perusahaan dan pos medis industri (D3/S1/Ners Keperawatan)',
                    'Paramedis lapangan di sektor manufaktur, tambang, migas, konstruksi, dan perkebunan',
                    'Bidan dan tenaga kesehatan okupasi di lingkungan instansi dan pabrik',
                    'Koordinator Health & Safety Officer (HSE) berlatar belakang medis',
                    'Calon perawat yang ingin berkarir profesional di industri pertambangan dan multi-nasional'
                ],
                'curriculum' => [
                    'Regulasi Perundangan K3 dan Higene Perusahaan (UU No. 1/1970 & Permenaker No. 01/MEN/1979)',
                    'Faktor Fisika Lingkungan Kerja: Kebisingan, Getaran, Iklim Kerja ISBB, Radiasi, dan Pencahayaan',
                    'Faktor Kimia: Nilai Ambang Batas (NAB), Lembar Data Keselamatan (LDK), Toksikologi Industri',
                    'Faktor Biologi: Pengendalian Vektor, Infeksi Nosokomial Okupasi, dan Biosecurity',
                    'Ergonomi Kerja & Fisiologi Kerja: Penilaian Postur REBA, RULA, dan Manual Material Handling',
                    'Gizi Kerja: Kebutuhan Kalori Tenaga Kerja, Pengelolaan Kantin & Higiene Sanitasi Makanan',
                    'Penyakit Akibat Kerja (PAK): 7 Langkah Penegakan Diagnosis, Surveilans Medis, dan Alur Pelaporan',
                    'Manajemen Pelayanan Kesehatan Kerja & Administrasi Klinik Perusahaan (Permenaker 03/1982)',
                    'First Aid & Tanggap Darurat Medis Lanjutan (Advanced Industrial Trauma First Aid)',
                    'Praktik Kunjungan Lapangan Industri (PKL Virtual / Lapangan) & Penyusunan Laporan Evaluasi',
                    'Ujian Evaluasi Teori & Komprehensif Sertifikasi Kemnaker RI'
                ],
                'requirements' => [
                    'Fotokopi Ijazah Pendidikan Keperawatan (minimal D3 Keperawatan / S1 Keperawatan / Ners)',
                    'Fotokopi STR (Surat Tanda Registrasi) Perawat yang masih berlaku',
                    'Fotokopi KTP / Identitas diri yang berlaku',
                    'Surat Keterangan Sehat dari Fasilitas Kesehatan / Dokter yang berizin',
                    'Surat Rekomendasi / Keterangan Bekerja dari Perusahaan (bagi utusan perusahaan)',
                    'Pasfoto resmi berlatar belakang merah (ukuran 3x4 dan 4x6 masing-masing 4 lembar)'
                ],
                'facilities' => [
                    'Sertifikat Resmi Hiperkes Perawat dari Kementerian Ketenagakerjaan RI (Kemnaker)',
                    'Surat Keputusan Penunjukan (SKP) / Lisensi Paramedis Hiperkes',
                    'Sertifikat Satuan Kredit Profesi (SKP) dari PPNI Resmi',
                    'Modul Eksklusif Hardcopy & Softcopy Materi Hiperkes Terbaru',
                    'Praktek Evaluasi Alat Ukur Ergonomi, Sound Level Meter, Lux Meter, dan Spirometri',
                    'Akses Ruang Belajar Nyaman, Makan Siang, Coffee Break 2x / hari (Tatap Muka)',
                    'Akses LMS Digital Materi & Video Pembelajaran Lifetime',
                    'Training Kit Premium: Polo Shirt, Flashdisk 16GB, Notebook, Pen & ID Card'
                ]
            ],
            [
                'title' => 'Training Hiperkes Petugas Medis & Paramedis Industri',
                'slug' => 'training-hiperkes-petugas-medis-paramedis-industri',
                'category' => 'K3 Industri & Migas',
                'duration' => '4 Hari (32 Jam Pelajaran)',
                'price' => 3450000,
                'rating' => 4.8,
                'reviews_count' => 285,
                'badge' => 'Standar Sektor Tambang & Manufaktur',
                'description' => 'Pelatihan intensif tata kelola keselamatan dan kesehatan kerja terpadu bagi paramedis lapangan di industri pertambangan, minyak gas, galangan kapal, dan konstruksi berat.',
                'overview' => 'Lingkungan kerja industri berisiko tinggi menuntut kesiapsiagaan paramedis dalam mengelola bahaya spesifik seperti paparan zat kimia korosif, gas beracun (H2S, CO), trauma fisik masif, dan penyakit akibat kerja kronis. Kursus ini melatih paramedis untuk mandiri dalam melakukan triage darurat, mengoperasikan perlengkapan evakuasi medis terpencil, serta mengawasi higene sanitasi tempat kerja.',
                'target_audience' => [
                    'Petugas Medis dan Paramedis lapangan tambang, smelter, dan platform migas',
                    'Health & Safety Supervisor di kawasan industri manufaktur kimia dan otomotif',
                    'Paramedis kontraktor EPC (Engineering, Procurement, Construction)',
                    'Perawat pelabuhan, bandara, dan industri logistik'
                ],
                'curriculum' => [
                    'Identifikasi Bahaya Lingkungan Kerja Industri Berat dan High Risk Area',
                    'Surveilans Pajanan Toksikologi Kimia & Gas Beracun (H2S, CO, Asam Sulfat)',
                    'Pemeriksaan Audiometri, Spirometri, dan Skrining Biomonitoring Logam Berat',
                    'SOP Tanggap Darurat Medis di Wilayah Terpencil (Remote Site Emergency Response)',
                    'Triage Massal, Evakuasi Medis Terencana (Medevac), dan Stabilisasi Korban Trauma',
                    'Pencegahan Heat Stress, Barotrauma, dan Penyakit Akibat Getaran Mesin Berat',
                    'Penatalaksanaan Needle Stick Injury & Dekontaminasi Bahan Kimia Akut',
                    'Evaluasi Gizi Kerja dan Higiene Catering Industri Skala Ribuan Karyawan'
                ],
                'requirements' => [
                    'Pendidikan minimal D3 Medis / Keperawatan / Bidan / Farmasi Industri',
                    'Fotokopi STR atau Ijazah Medis legalisir',
                    'Fotokopi KTP / Identitas resmi',
                    'Pasfoto berwarna latar belakang merah format formal'
                ],
                'facilities' => [
                    'Sertifikat Kompetensi Paramedis Industri dari Lembaga Pelatihan Terakreditasi',
                    'Sertifikat Pendamping SKP Profesi Kesehatan',
                    'Buku Panduan Medis Lapangan & Emergency Pocket Guidebook',
                    'Simulasi Penggunaan Alat Monitoring Lingkungan & Emergency Triage Tag',
                    'Toolkit Paramedis: Stetoskop Industri, Gunting Trauma, Penlight & Diagnostic Pen'
                ]
            ],
            [
                'title' => 'Training Manajemen Klinik Perusahaan & Pelayanan Kesehatan Kerja',
                'slug' => 'training-manajemen-klinik-perusahaan-kesehatan-kerja',
                'category' => 'Manajemen Klinik K3',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'price' => 2950000,
                'rating' => 4.9,
                'reviews_count' => 198,
                'badge' => 'Tata Kelola Klinik Mandiri & Regulasi',
                'description' => 'Standarisasi operasional klinik kerja perusahaan, integrasi rekam medis elektronik okupasi, perizinan faskes kerja, dan pelaporan berkala sesuai Permenaker No. 03/MEN/1982.',
                'overview' => 'Klinik perusahaan memegang peran sentral bukan hanya sebagai tempat pengobatan kuratif, melainkan pusat promosi kesehatan dan prevensi kecelakaan serta penyakit akibat kerja. Pelatihan ini membedah manajemen rantai pasok obat, audit kelayakan izin operasional klinik kerja, standarisasi fasilitas P3K, serta integrasi data kesehatan kerja dengan sistem BPJS Ketenagakerjaan dan Dinas Tenaga Kerja.',
                'target_audience' => [
                    'Kepala Klinik / Perawat Penanggung Jawab Klinik Perusahaan',
                    'Manajer SDM & HSE yang membawahi program kesehatan tenaga kerja',
                    'Dokter dan Perawat Okupasi institusi BUMN dan swasta',
                    'Auditor Internal K3 dan Sistem Manajemen Kesehatan Kerja'
                ],
                'curriculum' => [
                    'Dasar Hukum Penyelenggaraan Pelayanan Kesehatan Kerja (Permenaker 03/1982)',
                    'Persyaratan Standar Ruang, Fasilitas, Obat, dan Alkes Klinik Kerja',
                    'Tata Kelola Rekam Medis Okupasi Elektronik dan Perlindungan Privasi Data Pasien',
                    'SOP Rujukan Faskes Tingkat Lanjut dan Manajemen Klaim JKK BPJS Ketenagakerjaan',
                    'Pengelolaan Limbah Medis B3 (Spuit, Jarum, Kassa Darah) dan Perizinan TPS B3',
                    'Analisis Statistik Sickness Absenteeism dan Morbiditas Karyawan untuk Kebijakan Manajemen',
                    'Audit Internal Kepatuhan Klinik Kerja Berdasarkan Norma K3 Nasional'
                ],
                'requirements' => [
                    'Pendidikan D3/S1 Keperawatan, Kedokteran, Kesehatan Masyarakat, atau Manajemen Faskes',
                    'Fotokopi KTP dan CV Singkat',
                    'Pasfoto formal 3x4 berwarna'
                ],
                'facilities' => [
                    'Sertifikat Pelatihan Manajemen Klinik Perusahaan Terakreditasi',
                    'Template Siap Pakai: 35 SOP Klinik Kerja, Buku Register Pasien, & Format Laporan Disnaker',
                    'Aplikasi Template Excel Rekam Medis & Dashboard Morbiditas Tenaga Kerja',
                    'Modul Komprehensif Regulasi & Akreditasi Pelayanan Kesehatan Kerja'
                ]
            ],
            [
                'title' => 'Training Ergonomi Kerja, Fisiologi & Pencegahan Penyakit Akibat Kerja (PAK)',
                'slug' => 'training-ergonomi-kerja-gizi-pencegahan-pak',
                'category' => 'Ergonomi & Pencegahan PAK',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'price' => 2750000,
                'rating' => 4.8,
                'reviews_count' => 214,
                'badge' => 'Metode REBA, RULA & Fisiologi Kerja',
                'description' => 'Metodologi identifikasi dan reduksi risiko Musculoskeletal Disorders (MSDs), asesmen postur kerja, antropometri tenaga kerja, dan perancangan stasiun kerja ergonomis bagi perawat.',
                'overview' => 'Gangguan otot rangka (MSDs) dan kelelahan kronis merupakan keluhan kesehatan kerja paling dominan di berbagai lini industri. Pelatihan ini melatih peserta mengaplikasikan instrumen penilaian ergonomi terstandar (REBA, RULA, QEC, NIOSH Lifting Equation), melakukan intervensi engineering dan administrative control, serta merancang program senam peregangan berkala di area kerja.',
                'target_audience' => [
                    'Perawat dan fisioterapis okupasi di perusahaan manufaktur dan kantor',
                    'Ergonomist junior dan HSE Specialist',
                    'Supervisor lini perakitan, logistik, dan pergudangan',
                    'Tenaga keperawatan yang mendampingi program kesehatan pekerja'
                ],
                'curriculum' => [
                    'Prinsip Fisiologi Kerja, Beban Kerja Fisik, dan Pengukuran Denyut Nadi Kerja',
                    'Biomekanika Tubuh dan Patofisiologi Musculoskeletal Disorders (LBP, CTS, Tendinitis)',
                    'Metode Penilaian Postur Kerja Tubuh Bagian Atas: Rapid Upper Limb Assessment (RULA)',
                    'Metode Penilaian Seluruh Tubuh: Rapid Entire Body Assessment (REBA)',
                    'Manual Handling & Penentuan Recommended Weight Limit (RWL) dengan NIOSH Equation',
                    'Penyusunan Program Ergonomics Break (Senam Peregangan Kerja di Tempat)',
                    'Studi Kasus Desain Kursi Operator, Layar Monitor, dan Meja Kerja Berbasis Antropometri'
                ],
                'requirements' => [
                    'Pendidikan D3/S1 Keperawatan, Fisioterapi, K3, atau Teknik Industri',
                    'Fotokopi KTP dan pasfoto formal'
                ],
                'facilities' => [
                    'Sertifikat Ergonomi & Pencegahan PAK Terakreditasi',
                    'Software Calculator Ergonomi (REBA, RULA, NIOSH Equation)',
                    'Video Tutorial Gerakan Senam Ergonomi Kerja untuk Karyawan',
                    'Goniometer dan Meteran Antropometri Praktik'
                ]
            ],
            [
                'title' => 'Training Penanganan Gawat Darurat Medis & First Aid di Tempat Kerja',
                'slug' => 'training-first-aid-gawat-darurat-medis-tempat-kerja',
                'category' => 'First Aid & Emergency',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'price' => 2850000,
                'rating' => 4.9,
                'reviews_count' => 276,
                'badge' => 'Sesuai Permenaker No. 15/MEN/VIII/2008',
                'description' => 'Pelatihan lanjutan pertolongan pertama gawat darurat trauma industri, Basic Life Support (BLS), RJP + AED, stabilisasi spinal, dan evakuasi korban kecelakaan kerja.',
                'overview' => 'Detik-detik pertama pasca insiden kecelakaan kerja menentukan kelangsungan hidup korban. Pelatihan ini membekali perawat dan petugas medis keahlian klinis praktis dalam menangani cedera multipel, luka bakar api/kimia, fraktur terbuka, keracunan gas di ruang terbatas, serta koordinasi ambulans transport ke rumah sakit rujukan terdekat.',
                'target_audience' => [
                    'Perawat IGD Klinik Perusahaan dan Anggota Tim Emergency Response (ERT)',
                    'Petugas P3K Perusahaan yang memerlukan upgrade keterampilan klinis',
                    'Paramedis proyek konstruksi, tambang, dan galangan kapal'
                ],
                'curriculum' => [
                    'Kerangka Hukum P3K di Tempat Kerja Berdasarkan Permenaker No. 15/2008',
                    'Bantuan Hidup Dasar (BLS / BHD) Dewasa dan Penggunaan Alat AED Terstandar',
                    'Manajemen Jalan Napas (Airway Management) Tanpa Alat dan Dengan Alat Bantu',
                    'Penanganan Perdarahan Masif, Balut Tekan, Tourniquet, dan Pencegahan Syok',
                    'Penanganan Luka Bakar Derajat I, II, III dan Cedera Inhalasi Asap Toksik',
                    'Stabilisasi Tulang Belakang (Spinal Boarding) dan Pembidaian Fraktur',
                    'Penanganan Kedaruratan Medis: Sinkop, Serangan Asma, Hipoglikemia, Stroke Akut, Keracunan',
                    'Simulasi Manajemen Bencana Lapangan, Triage Korban Bencana, dan Komunikasi Radio Medis'
                ],
                'requirements' => [
                    'Pendidikan D3/S1 Keperawatan, Tenaga Medis, atau sertifikat Petugas P3K',
                    'Fotokopi KTP dan pasfoto formal'
                ],
                'facilities' => [
                    'Sertifikat Advanced Industrial First Aid & BLS Provider',
                    'Badge Resmi First Aid Medical Responder',
                    'Pocket Mask Resusitasi & First Aid Pouch Kit Eksklusif',
                    'Akses Simulasi Phantom RJP Digital dan Training AED'
                ]
            ],
            [
                'title' => 'Training Audit Kesehatan Kerja, Surveilans Medis & Pelaporan K3 Perawat',
                'slug' => 'training-audit-kesehatan-kerja-surveilans-medis',
                'category' => 'Audit & Surveilans K3',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'price' => 3150000,
                'rating' => 4.8,
                'reviews_count' => 165,
                'badge' => 'Surveilans Epidemiologi Okupasi',
                'description' => 'Metodologi audit kepatuhan norma kesehatan kerja, pelaksanaan surveilans medis berbasis risiko (RAMP), pemetaan biomarker, dan formulasi laporan resmi ke Disnaker.',
                'overview' => 'Program kesehatan kerja yang efektif bertumpu pada data surveilans yang akurat. Kursus ini melatih perawat perusahaan menganalisis hasil Medical Check-Up (MCU) secara epidemiologis, mengkorelasikan keluhan pekerja dengan hazard lingkungan, serta menyusun laporan triwulan/tahunan kesehatan kerja sesuai regulasi Kemnaker RI.',
                'target_audience' => [
                    'Perawat Perusahaan Senior dan Koordinator Medis Occupational Health',
                    'Auditor SMK3 Kriteria Kesehatan Kerja',
                    'HSE Manager yang bertanggung jawab atas pelaporan wajib ketenagakerjaan'
                ],
                'curriculum' => [
                    'Norma Pengawasan Kesehatan Kerja Kemnaker RI dan Standar Audit SMK3 PP 50/2012',
                    'Penyusunan Matriks Surveilans Medis Berdasarkan Health Risk Assessment (HRA)',
                    'Analisis Data Hasil MCU: Deteksi Klaster Penyakit dan Tren Penurunan Fungsi Organ',
                    'Biological Monitoring dan Pengukuran Biomarker Logam / Pelarut Organik',
                    'Alur Verifikasi dan Validasi Kasus Dugaan Penyakit Akibat Kerja (Suspected PAK)',
                    'Penyusunan Format Laporan Pelayanan Kesehatan Kerja Sesuai Standar Disnaker',
                    'Rencana Tindak Lanjut (Corrective Action Plan) Hasil Temuan Audit Kesehatan Kerja'
                ],
                'requirements' => [
                    'Pendidikan minimal D3 Keperawatan / Kesehatan Masyarakat / Medis',
                    'Fotokopi KTP dan pasfoto resmi'
                ],
                'facilities' => [
                    'Sertifikat Kompetensi Auditor Kesehatan Kerja / Surveilans Medis Okupasi',
                    'Template Dashboard Analisis MCU & Matriks Pemetaan Faktor Bahaya',
                    'Panduan Praktis Format Pelaporan Triwulan K3 ke Dinas Tenaga Kerja Provinsi/Kabkot',
                    'Konsultasi Gratis dengan Praktisi Kedokteran Okupasi Pasca Pelatihan'
                ]
            ]
        ];
    }

    /**
     * Mengambil 200 Judul Artikel Training Hiperkes Perawat
     */
    public static function get200ArticleTitles(): array
    {
        return [
        "Training Hiperkes Perawat: Implementasi Permenaker No. 01/MEN/1979 tentang Kualifikasi Paramedis Perusahaan",
        "Training Hiperkes Perawat: Tata Kelola Klinik Kerja dan Manajemen Pelayanan Kesehatan Kerja Sesuai Standar Kemnaker",
        "Training Hiperkes Perawat: Penilaian Risiko Ergonomi Pekerja Pabrik dengan Metode REBA dan RULA",
        "Training Hiperkes Perawat: SOP Pemeriksaan Audiometri Berkala untuk Deteksi Dini Noise-Induced Hearing Loss (NIHL)",
        "Training Hiperkes Perawat: Pemeriksaan Spirometri Terstandar dan Evaluasi Faal Paru pada Pekerja Terpapar Debu Silika",
        "Training Hiperkes Perawat: Manajemen Penanganan Penyakit Akibat Kerja (PAK) dan Prosedur Klaim BPJS Ketenagakerjaan",
        "Training Hiperkes Perawat: Standarisasi Fasilitas P3K di Tempat Kerja Berdasarkan Permenaker No. 15/MEN/VIII/2008",
        "Training Hiperkes Perawat: Surveilans Kesehatan Kerja Komprehensif: Medical Check Up (MCU) Awal, Berkala, dan Khusus",
        "Training Hiperkes Perawat: Protokol Pengendalian Bahaya Biologi di Industri Pengolahan Makanan dan Limbah",
        "Training Hiperkes Perawat: Evaluasi Paparan Faktor Fisika Lingkungan Kerja: Kebisingan, Getaran, dan Iklim Kerja ISBB",
        "Training Hiperkes Perawat: Pengelolaan Pajanan Bahan Kimia Berbahaya dan Penegakan Lembar Data Keselamatan (LDK/MSDS)",
        "Training Hiperkes Perawat: Manajemen Stres Kerja, Kelelahan (Fatigue), dan Faktor Psikososial pada Pekerja Shift Malam",
        "Training Hiperkes Perawat: Sistem Rujukan Gawat Darurat Medis Lapangan dan Evakuasi Medis Terencana (Medevac)",
        "Training Hiperkes Perawat: Pemberian Nutrisi dan Penyelenggaraan Makanan bagi Tenaga Kerja Sesuai Beban Kalori Fisiologis",
        "Training Hiperkes Perawat: Audit Kepatuhan Higiene Perusahaan dan Pelaporan Morbiditas Paramedis ke Dinas Tenaga Kerja",
        "Training Hiperkes Perawat: Pencegahan dan Pengendalian Tuberkulosis (TBC) di Lingkungan Tempat Kerja",
        "Training Hiperkes Perawat: Program Pencegahan HIV-AIDS dan Edukasi Penyakit Menular di Sektor Konstruksi dan Tambang",
        "Training Hiperkes Perawat: Penanganan Trauma Akut, Luka Bakar Kimiawi, dan Cedera Mata Akibat Partikel di Pabrik",
        "Training Hiperkes Perawat: Penerapan Konsep 7 Langkah Diagnosis Penyakit Akibat Kerja Menurut Konsensus Kedokteran Okupasi",
        "Training Hiperkes Perawat: Penilaian Kelaikan Kerja (Fitness for Work) Paramedis untuk Pekerjaan Risiko Tinggi",
        "Training Hiperkes Perawat: Pengelolaan Limbah Medis B3 Klinik Perusahaan Sesuai Regulasi KLHK dan Kemenkes",
        "Training Hiperkes Perawat: Tata Kelola Cold Chain Vaksinasi Tenaga Kerja dan Imunisasi Pekerja Lapangan",
        "Training Hiperkes Perawat: Pemberdayaan P2K3 (Panitia Pembina Keselamatan dan Kesehatan Kerja) Bidang Kesehatan",
        "Training Hiperkes Perawat: Deteksi Dini Dermatitis Kontak Akibat Kerja pada Pekerja Industri Kimia dan Tekstil",
        "Training Hiperkes Perawat: Pemeriksaan Ergonomi Workstation Perkantoran untuk Mencegah Carpal Tunnel Syndrome (CTS)",
        "Training Hiperkes Perawat: Manajemen Hipotermia dan Heat Stroke pada Lingkungan Kerja Ekstrem Panas dan Dingin",
        "Training Hiperkes Perawat: Pencegahan Musculoskeletal Disorders (MSDs) pada Pekerja Angkat-Angkut Manual (Manual Handling)",
        "Training Hiperkes Perawat: Pelaksanaan Drug and Alcohol Testing di Sektor Migas dan Pertambangan Lepas Pantai",
        "Training Hiperkes Perawat: Penyusunan Health Risk Assessment (HRA) Komprehensif Berbasis Hazard Okupasi",
        "Training Hiperkes Perawat: Tata Cara Pemeriksaan Visus dan Skrining Kesehatan Mata Operator Layar Monitor",
        "Training Hiperkes Perawat: Penyusunan Rencana Kesiapsiagaan Tanggap Darurat Medis (Medical Emergency Response Plan - MERP)",
        "Training Hiperkes Perawat: Pengendalian Paparan Logam Berat (Timbal, Merkuri, Kadmium) Melalui Biological Monitoring",
        "Training Hiperkes Perawat: SOP Dekontaminasi Korban Terpapar Bahan Kimia Berbahaya dan Toksik di Area Manufaktur",
        "Training Hiperkes Perawat: Pencegahan Sindrom Getaran Lengan-Tangan (Hand-Arm Vibration Syndrome) pada Pekerja Bor",
        "Training Hiperkes Perawat: Peran Paramedis dalam Investigasi Kejadian Luar Biasa (KLB) Keracunan Makanan di Kantin Pabrik",
        "Training Hiperkes Perawat: Manajemen Kesehatan Pekerja Wanita: Perlindungan Reproduksi, Kehamilan, dan Fasilitas Laktasi",
        "Training Hiperkes Perawat: Pelaporan Statistik Absensi Sakit (Sickness Absenteeism) dan Analisis Tren Kesehatan Karyawan",
        "Training Hiperkes Perawat: Pemeriksaan Biomarker Urin dan Darah untuk Pemantauan Paparan Pelarut Organik (Solvent)",
        "Training Hiperkes Perawat: Tata Cara Pemasangan Bidai, Balut Cepat, dan Imobilisasi Fraktur Korban Kecelakaan Proyek",
        "Training Hiperkes Perawat: Pencegahan Asma Akibat Kerja pada Pekerja Industri Cat, Perekat, dan Percetakan",
        "Training Hiperkes Perawat: Pengoperasian Automated External Defibrillator (AED) dan Resusitasi Jantung Paru (RJP) di Lapangan",
        "Training Hiperkes Perawat: Pengendalian Radiasi Pengion dan Non-Pengion di Fasilitas Industri dan Laboratorium Uji",
        "Training Hiperkes Perawat: Penyusunan SOP Penanganan Needle Stick Injury pada Tenaga Medis dan Paramedis Klinik",
        "Training Hiperkes Perawat: Tata Kelola Rekam Medis Elektronik Okupasi dan Kerahasiaan Data Kesehatan Karyawan",
        "Training Hiperkes Perawat: Penanganan Syok Anafilaksis, Gigitan Hewan Berbisa, dan Keracunan Gas Toksik di Lokasi Terpencil",
        "Training Hiperkes Perawat: Evaluasi Kebutuhan APD Khusus Paramedis dalam Menghadapi Wabah Infeksi Saluran Pernapasan",
        "Training Hiperkes Perawat: Program Return to Work dan Rehabilitasi Okupasi Pasca Cedera Kerja Berat",
        "Training Hiperkes Perawat: Pencegahan Penyakit Dekompresi pada Pekerja Penyelaman Komersial dan Bawah Tanah",
        "Training Hiperkes Perawat: Pemeriksaan Kebugaran Kardiovaskular (Harvard Step Test / Cooper Test) bagi Tim Tanggap Darurat",
        "Training Hiperkes Perawat: Manajemen Ergonomi Pengemudi Armada Logistik dan Penurunan Angka Kelelahan di Jalan Raya",
        "Training Hiperkes Perawat: Implementasi Permenaker No. 01/MEN/1979 tentang Kualifikasi Paramedis Perusahaan Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Tata Kelola Klinik Kerja dan Manajemen Pelayanan Kesehatan Kerja Sesuai Standar Kemnaker Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Penilaian Risiko Ergonomi Pekerja Pabrik dengan Metode REBA dan RULA Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: SOP Pemeriksaan Audiometri Berkala untuk Deteksi Dini Noise-Induced Hearing Loss (NIHL) Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pemeriksaan Spirometri Terstandar dan Evaluasi Faal Paru pada Pekerja Terpapar Debu Silika Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Manajemen Penanganan Penyakit Akibat Kerja (PAK) dan Prosedur Klaim BPJS Ketenagakerjaan Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Standarisasi Fasilitas P3K di Tempat Kerja Berdasarkan Permenaker No. 15/MEN/VIII/2008 Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Surveilans Kesehatan Kerja Komprehensif: Medical Check Up (MCU) Awal, Berkala, dan Khusus Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Protokol Pengendalian Bahaya Biologi di Industri Pengolahan Makanan dan Limbah Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Evaluasi Paparan Faktor Fisika Lingkungan Kerja: Kebisingan, Getaran, dan Iklim Kerja ISBB Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pengelolaan Pajanan Bahan Kimia Berbahaya dan Penegakan Lembar Data Keselamatan (LDK/MSDS) Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Manajemen Stres Kerja, Kelelahan (Fatigue), dan Faktor Psikososial pada Pekerja Shift Malam Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Sistem Rujukan Gawat Darurat Medis Lapangan dan Evakuasi Medis Terencana (Medevac) Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pemberian Nutrisi dan Penyelenggaraan Makanan bagi Tenaga Kerja Sesuai Beban Kalori Fisiologis Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Audit Kepatuhan Higiene Perusahaan dan Pelaporan Morbiditas Paramedis ke Dinas Tenaga Kerja Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pencegahan dan Pengendalian Tuberkulosis (TBC) di Lingkungan Tempat Kerja Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Program Pencegahan HIV-AIDS dan Edukasi Penyakit Menular di Sektor Konstruksi dan Tambang Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Penanganan Trauma Akut, Luka Bakar Kimiawi, dan Cedera Mata Akibat Partikel di Pabrik Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Penerapan Konsep 7 Langkah Diagnosis Penyakit Akibat Kerja Menurut Konsensus Kedokteran Okupasi Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Penilaian Kelaikan Kerja (Fitness for Work) Paramedis untuk Pekerjaan Risiko Tinggi Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pengelolaan Limbah Medis B3 Klinik Perusahaan Sesuai Regulasi KLHK dan Kemenkes Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Tata Kelola Cold Chain Vaksinasi Tenaga Kerja dan Imunisasi Pekerja Lapangan Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pemberdayaan P2K3 (Panitia Pembina Keselamatan dan Kesehatan Kerja) Bidang Kesehatan Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Deteksi Dini Dermatitis Kontak Akibat Kerja pada Pekerja Industri Kimia dan Tekstil Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pemeriksaan Ergonomi Workstation Perkantoran untuk Mencegah Carpal Tunnel Syndrome (CTS) Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Manajemen Hipotermia dan Heat Stroke pada Lingkungan Kerja Ekstrem Panas dan Dingin Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pencegahan Musculoskeletal Disorders (MSDs) pada Pekerja Angkat-Angkut Manual (Manual Handling) Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pelaksanaan Drug and Alcohol Testing di Sektor Migas dan Pertambangan Lepas Pantai Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Penyusunan Health Risk Assessment (HRA) Komprehensif Berbasis Hazard Okupasi Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Tata Cara Pemeriksaan Visus dan Skrining Kesehatan Mata Operator Layar Monitor Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Penyusunan Rencana Kesiapsiagaan Tanggap Darurat Medis (Medical Emergency Response Plan - MERP) Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pengendalian Paparan Logam Berat (Timbal, Merkuri, Kadmium) Melalui Biological Monitoring Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: SOP Dekontaminasi Korban Terpapar Bahan Kimia Berbahaya dan Toksik di Area Manufaktur Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pencegahan Sindrom Getaran Lengan-Tangan (Hand-Arm Vibration Syndrome) pada Pekerja Bor Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Peran Paramedis dalam Investigasi Kejadian Luar Biasa (KLB) Keracunan Makanan di Kantin Pabrik Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Manajemen Kesehatan Pekerja Wanita: Perlindungan Reproduksi, Kehamilan, dan Fasilitas Laktasi Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pelaporan Statistik Absensi Sakit (Sickness Absenteeism) dan Analisis Tren Kesehatan Karyawan Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pemeriksaan Biomarker Urin dan Darah untuk Pemantauan Paparan Pelarut Organik (Solvent) Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Tata Cara Pemasangan Bidai, Balut Cepat, dan Imobilisasi Fraktur Korban Kecelakaan Proyek Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pencegahan Asma Akibat Kerja pada Pekerja Industri Cat, Perekat, dan Percetakan Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pengoperasian Automated External Defibrillator (AED) dan Resusitasi Jantung Paru (RJP) di Lapangan Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pengendalian Radiasi Pengion dan Non-Pengion di Fasilitas Industri dan Laboratorium Uji Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Penyusunan SOP Penanganan Needle Stick Injury pada Tenaga Medis dan Paramedis Klinik Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Tata Kelola Rekam Medis Elektronik Okupasi dan Kerahasiaan Data Kesehatan Karyawan Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Penanganan Syok Anafilaksis, Gigitan Hewan Berbisa, dan Keracunan Gas Toksik di Lokasi Terpencil Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Evaluasi Kebutuhan APD Khusus Paramedis dalam Menghadapi Wabah Infeksi Saluran Pernapasan Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Program Return to Work dan Rehabilitasi Okupasi Pasca Cedera Kerja Berat Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pencegahan Penyakit Dekompresi pada Pekerja Penyelaman Komersial dan Bawah Tanah Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Pemeriksaan Kebugaran Kardiovaskular (Harvard Step Test / Cooper Test) bagi Tim Tanggap Darurat Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Manajemen Ergonomi Pengemudi Armada Logistik dan Penurunan Angka Kelelahan di Jalan Raya Berbasis Standar Kemnaker RI dan SKP PPNI",
        "Training Hiperkes Perawat: Implementasi Permenaker No. 01/MEN/1979 tentang Kualifikasi Paramedis Perusahaan pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Tata Kelola Klinik Kerja dan Manajemen Pelayanan Kesehatan Kerja Sesuai Standar Kemnaker pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Penilaian Risiko Ergonomi Pekerja Pabrik dengan Metode REBA dan RULA pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: SOP Pemeriksaan Audiometri Berkala untuk Deteksi Dini Noise-Induced Hearing Loss (NIHL) pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pemeriksaan Spirometri Terstandar dan Evaluasi Faal Paru pada Pekerja Terpapar Debu Silika pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Manajemen Penanganan Penyakit Akibat Kerja (PAK) dan Prosedur Klaim BPJS Ketenagakerjaan pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Standarisasi Fasilitas P3K di Tempat Kerja Berdasarkan Permenaker No. 15/MEN/VIII/2008 pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Surveilans Kesehatan Kerja Komprehensif: Medical Check Up (MCU) Awal, Berkala, dan Khusus pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Protokol Pengendalian Bahaya Biologi di Industri Pengolahan Makanan dan Limbah pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Evaluasi Paparan Faktor Fisika Lingkungan Kerja: Kebisingan, Getaran, dan Iklim Kerja ISBB pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pengelolaan Pajanan Bahan Kimia Berbahaya dan Penegakan Lembar Data Keselamatan (LDK/MSDS) pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Manajemen Stres Kerja, Kelelahan (Fatigue), dan Faktor Psikososial pada Pekerja Shift Malam pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Sistem Rujukan Gawat Darurat Medis Lapangan dan Evakuasi Medis Terencana (Medevac) pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pemberian Nutrisi dan Penyelenggaraan Makanan bagi Tenaga Kerja Sesuai Beban Kalori Fisiologis pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Audit Kepatuhan Higiene Perusahaan dan Pelaporan Morbiditas Paramedis ke Dinas Tenaga Kerja pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pencegahan dan Pengendalian Tuberkulosis (TBC) di Lingkungan Tempat Kerja pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Program Pencegahan HIV-AIDS dan Edukasi Penyakit Menular di Sektor Konstruksi dan Tambang pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Penanganan Trauma Akut, Luka Bakar Kimiawi, dan Cedera Mata Akibat Partikel di Pabrik pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Penerapan Konsep 7 Langkah Diagnosis Penyakit Akibat Kerja Menurut Konsensus Kedokteran Okupasi pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Penilaian Kelaikan Kerja (Fitness for Work) Paramedis untuk Pekerjaan Risiko Tinggi pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pengelolaan Limbah Medis B3 Klinik Perusahaan Sesuai Regulasi KLHK dan Kemenkes pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Tata Kelola Cold Chain Vaksinasi Tenaga Kerja dan Imunisasi Pekerja Lapangan pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pemberdayaan P2K3 (Panitia Pembina Keselamatan dan Kesehatan Kerja) Bidang Kesehatan pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Deteksi Dini Dermatitis Kontak Akibat Kerja pada Pekerja Industri Kimia dan Tekstil pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pemeriksaan Ergonomi Workstation Perkantoran untuk Mencegah Carpal Tunnel Syndrome (CTS) pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Manajemen Hipotermia dan Heat Stroke pada Lingkungan Kerja Ekstrem Panas dan Dingin pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pencegahan Musculoskeletal Disorders (MSDs) pada Pekerja Angkat-Angkut Manual (Manual Handling) pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pelaksanaan Drug and Alcohol Testing di Sektor Migas dan Pertambangan Lepas Pantai pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Penyusunan Health Risk Assessment (HRA) Komprehensif Berbasis Hazard Okupasi pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Tata Cara Pemeriksaan Visus dan Skrining Kesehatan Mata Operator Layar Monitor pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Penyusunan Rencana Kesiapsiagaan Tanggap Darurat Medis (Medical Emergency Response Plan - MERP) pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pengendalian Paparan Logam Berat (Timbal, Merkuri, Kadmium) Melalui Biological Monitoring pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: SOP Dekontaminasi Korban Terpapar Bahan Kimia Berbahaya dan Toksik di Area Manufaktur pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pencegahan Sindrom Getaran Lengan-Tangan (Hand-Arm Vibration Syndrome) pada Pekerja Bor pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Peran Paramedis dalam Investigasi Kejadian Luar Biasa (KLB) Keracunan Makanan di Kantin Pabrik pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Manajemen Kesehatan Pekerja Wanita: Perlindungan Reproduksi, Kehamilan, dan Fasilitas Laktasi pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pelaporan Statistik Absensi Sakit (Sickness Absenteeism) dan Analisis Tren Kesehatan Karyawan pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pemeriksaan Biomarker Urin dan Darah untuk Pemantauan Paparan Pelarut Organik (Solvent) pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Tata Cara Pemasangan Bidai, Balut Cepat, dan Imobilisasi Fraktur Korban Kecelakaan Proyek pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pencegahan Asma Akibat Kerja pada Pekerja Industri Cat, Perekat, dan Percetakan pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pengoperasian Automated External Defibrillator (AED) dan Resusitasi Jantung Paru (RJP) di Lapangan pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pengendalian Radiasi Pengion dan Non-Pengion di Fasilitas Industri dan Laboratorium Uji pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Penyusunan SOP Penanganan Needle Stick Injury pada Tenaga Medis dan Paramedis Klinik pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Tata Kelola Rekam Medis Elektronik Okupasi dan Kerahasiaan Data Kesehatan Karyawan pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Penanganan Syok Anafilaksis, Gigitan Hewan Berbisa, dan Keracunan Gas Toksik di Lokasi Terpencil pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Evaluasi Kebutuhan APD Khusus Paramedis dalam Menghadapi Wabah Infeksi Saluran Pernapasan pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Program Return to Work dan Rehabilitasi Okupasi Pasca Cedera Kerja Berat pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pencegahan Penyakit Dekompresi pada Pekerja Penyelaman Komersial dan Bawah Tanah pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Pemeriksaan Kebugaran Kardiovaskular (Harvard Step Test / Cooper Test) bagi Tim Tanggap Darurat pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Manajemen Ergonomi Pengemudi Armada Logistik dan Penurunan Angka Kelelahan di Jalan Raya pada Industri Manufaktur dan Sektor Berisiko Tinggi",
        "Training Hiperkes Perawat: Implementasi Permenaker No. 01/MEN/1979 tentang Kualifikasi Paramedis Perusahaan dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Tata Kelola Klinik Kerja dan Manajemen Pelayanan Kesehatan Kerja Sesuai Standar Kemnaker dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Penilaian Risiko Ergonomi Pekerja Pabrik dengan Metode REBA dan RULA dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: SOP Pemeriksaan Audiometri Berkala untuk Deteksi Dini Noise-Induced Hearing Loss (NIHL) dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pemeriksaan Spirometri Terstandar dan Evaluasi Faal Paru pada Pekerja Terpapar Debu Silika dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Manajemen Penanganan Penyakit Akibat Kerja (PAK) dan Prosedur Klaim BPJS Ketenagakerjaan dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Standarisasi Fasilitas P3K di Tempat Kerja Berdasarkan Permenaker No. 15/MEN/VIII/2008 dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Surveilans Kesehatan Kerja Komprehensif: Medical Check Up (MCU) Awal, Berkala, dan Khusus dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Protokol Pengendalian Bahaya Biologi di Industri Pengolahan Makanan dan Limbah dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Evaluasi Paparan Faktor Fisika Lingkungan Kerja: Kebisingan, Getaran, dan Iklim Kerja ISBB dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pengelolaan Pajanan Bahan Kimia Berbahaya dan Penegakan Lembar Data Keselamatan (LDK/MSDS) dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Manajemen Stres Kerja, Kelelahan (Fatigue), dan Faktor Psikososial pada Pekerja Shift Malam dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Sistem Rujukan Gawat Darurat Medis Lapangan dan Evakuasi Medis Terencana (Medevac) dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pemberian Nutrisi dan Penyelenggaraan Makanan bagi Tenaga Kerja Sesuai Beban Kalori Fisiologis dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Audit Kepatuhan Higiene Perusahaan dan Pelaporan Morbiditas Paramedis ke Dinas Tenaga Kerja dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pencegahan dan Pengendalian Tuberkulosis (TBC) di Lingkungan Tempat Kerja dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Program Pencegahan HIV-AIDS dan Edukasi Penyakit Menular di Sektor Konstruksi dan Tambang dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Penanganan Trauma Akut, Luka Bakar Kimiawi, dan Cedera Mata Akibat Partikel di Pabrik dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Penerapan Konsep 7 Langkah Diagnosis Penyakit Akibat Kerja Menurut Konsensus Kedokteran Okupasi dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Penilaian Kelaikan Kerja (Fitness for Work) Paramedis untuk Pekerjaan Risiko Tinggi dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pengelolaan Limbah Medis B3 Klinik Perusahaan Sesuai Regulasi KLHK dan Kemenkes dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Tata Kelola Cold Chain Vaksinasi Tenaga Kerja dan Imunisasi Pekerja Lapangan dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pemberdayaan P2K3 (Panitia Pembina Keselamatan dan Kesehatan Kerja) Bidang Kesehatan dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Deteksi Dini Dermatitis Kontak Akibat Kerja pada Pekerja Industri Kimia dan Tekstil dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pemeriksaan Ergonomi Workstation Perkantoran untuk Mencegah Carpal Tunnel Syndrome (CTS) dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Manajemen Hipotermia dan Heat Stroke pada Lingkungan Kerja Ekstrem Panas dan Dingin dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pencegahan Musculoskeletal Disorders (MSDs) pada Pekerja Angkat-Angkut Manual (Manual Handling) dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pelaksanaan Drug and Alcohol Testing di Sektor Migas dan Pertambangan Lepas Pantai dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Penyusunan Health Risk Assessment (HRA) Komprehensif Berbasis Hazard Okupasi dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Tata Cara Pemeriksaan Visus dan Skrining Kesehatan Mata Operator Layar Monitor dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Penyusunan Rencana Kesiapsiagaan Tanggap Darurat Medis (Medical Emergency Response Plan - MERP) dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pengendalian Paparan Logam Berat (Timbal, Merkuri, Kadmium) Melalui Biological Monitoring dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: SOP Dekontaminasi Korban Terpapar Bahan Kimia Berbahaya dan Toksik di Area Manufaktur dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pencegahan Sindrom Getaran Lengan-Tangan (Hand-Arm Vibration Syndrome) pada Pekerja Bor dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Peran Paramedis dalam Investigasi Kejadian Luar Biasa (KLB) Keracunan Makanan di Kantin Pabrik dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Manajemen Kesehatan Pekerja Wanita: Perlindungan Reproduksi, Kehamilan, dan Fasilitas Laktasi dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pelaporan Statistik Absensi Sakit (Sickness Absenteeism) dan Analisis Tren Kesehatan Karyawan dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pemeriksaan Biomarker Urin dan Darah untuk Pemantauan Paparan Pelarut Organik (Solvent) dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Tata Cara Pemasangan Bidai, Balut Cepat, dan Imobilisasi Fraktur Korban Kecelakaan Proyek dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pencegahan Asma Akibat Kerja pada Pekerja Industri Cat, Perekat, dan Percetakan dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pengoperasian Automated External Defibrillator (AED) dan Resusitasi Jantung Paru (RJP) di Lapangan dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pengendalian Radiasi Pengion dan Non-Pengion di Fasilitas Industri dan Laboratorium Uji dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Penyusunan SOP Penanganan Needle Stick Injury pada Tenaga Medis dan Paramedis Klinik dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Tata Kelola Rekam Medis Elektronik Okupasi dan Kerahasiaan Data Kesehatan Karyawan dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Penanganan Syok Anafilaksis, Gigitan Hewan Berbisa, dan Keracunan Gas Toksik di Lokasi Terpencil dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Evaluasi Kebutuhan APD Khusus Paramedis dalam Menghadapi Wabah Infeksi Saluran Pernapasan dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Program Return to Work dan Rehabilitasi Okupasi Pasca Cedera Kerja Berat dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pencegahan Penyakit Dekompresi pada Pekerja Penyelaman Komersial dan Bawah Tanah dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Pemeriksaan Kebugaran Kardiovaskular (Harvard Step Test / Cooper Test) bagi Tim Tanggap Darurat dalam Menunjang Produktivitas dan Keselamatan Kerja",
        "Training Hiperkes Perawat: Manajemen Ergonomi Pengemudi Armada Logistik dan Penurunan Angka Kelelahan di Jalan Raya dalam Menunjang Produktivitas dan Keselamatan Kerja"
];
    }

    /**
     * Synthesizer Artikel Mendalam (6.000 - 9.000 kata) tentang Training Hiperkes Perawat
     */
    public static function generateDeepArticle(string $title, string $regionName = 'Indonesia', int $targetWords = 7000): array
    {
        $slug = Str::slug($title);
        $readTime = ceil($targetWords / 200);

        $sections = [
            'latar_belakang' => self::sectionLatarBelakang($title, $regionName),
            'landasan_hukum' => self::sectionLandasanHukum($title, $regionName),
            'peran_paramedis' => self::sectionPeranParamedis($title, $regionName),
            'identifikasi_bahaya' => self::sectionIdentifikasiBahaya($title, $regionName),
            'toksikologi_industri' => self::sectionToksikologiIndustri($title, $regionName),
            'surveilans_mcu' => self::sectionSurveilansMCU($title, $regionName),
            'pemeriksaan_penunjang' => self::sectionPemeriksaanPenunjang($title, $regionName),
            'ergonomi_fisiologi' => self::sectionErgonomiFisiologi($title, $regionName),
            'promosi_gizi_kerja' => self::sectionPromosiGiziKerja($title, $regionName),
            'gawat_darurat' => self::sectionGawatDarurat($title, $regionName),
            'tata_kelola_klinik' => self::sectionTataKelolaKlinik($title, $regionName),
            'alur_bpjs_pelaporan' => self::sectionAlurBPJSPelaporan($title, $regionName),
            'studi_kasus_pak' => self::sectionStudiKasusPAK($title, $regionName),
            'konteks_wilayah' => self::sectionKonteksWilayah($title, $regionName),
            'matriks_kompetensi' => self::sectionMatriksKompetensi($title, $regionName),
            'audit_farmasi_b3' => self::sectionAuditFarmasiB3($title, $regionName),
            'metodologi_reba_rula' => self::sectionMetodologiREBARULA($title, $regionName),
            'kesehatan_mental_fatigue' => self::sectionKesehatanMentalFatigue($title, $regionName),
            'faq_klinis' => self::sectionFaqKlinis($title, $regionName),
            'kesimpulan' => self::sectionKesimpulan($title, $regionName),
];

        $fullContent = implode("

", $sections);
        $actualWords = str_word_count(strip_tags($fullContent));

        return [
            'title' => $title,
            'slug' => $slug,
            'region' => $regionName,
            'read_time' => $readTime,
            'word_count' => $actualWords,
            'excerpt' => "Panduan komprehensif {$title} untuk tenaga perawat dan paramedis industri di wilayah {$regionName}. Mengupas regulasi Permenaker 01/1979, surveilans kesehatan kerja, ergonomi, dan penanganan kegawatdaruratan medis.",
            'content' => $fullContent,
        ];
    }

    private static function sectionLatarBelakang(string $title, string $regionName): string
    {
        return "<h2>1. Latar Belakang & Urgensi Higene Perusahaan dan Kesehatan Kerja (Hiperkes) bagi Perawat</h2>
<p>Dinamika industrialisasi di Indonesia yang berkembang pesat di berbagai sektor—mulai dari manufaktur, kimia dasar, pertambangan mineral, migas lepas pantai, hingga infrastruktur konstruksi—membawa konsekuensi langsung terhadap kompleksitas risiko kesehatan dan keselamatan kerja. Dalam ekosistem ketenagakerjaan, tenaga perawat atau paramedis perusahaan memegang peran garda terdepan (<em>frontline health defender</em>) yang menjamin perlindungan tenaga kerja dari potensi bahaya fisik, kimiawi, biologis, fisiologis (ergonomi), dan psikososial di lingkungan kerja.</p>
<p>Topik bahasan mengenai <strong>{$title}</strong> di wilayah <strong>{$regionName}</strong> merupakan pilar mutlak yang tidak dapat dipisahkan dari upaya pencapaian produktivitas optimal dan nihil kecelakaan maupun penyakit akibat kerja (<em>Zero Accident & Zero Occupational Diseases</em>). Sesuai dengan filosofi dasar Hiperkes (Higene Perusahaan dan Kesehatan Kerja), seorang perawat industri tidak sekadar bertindak sebagai pelaksana tindakan kuratif saat pekerja sakit atau mengalami cedera, melainkan harus bertindak sebagai agen preventif, promomtif, dan rehabilitatif yang proaktif.</p>
<p>Keberadaan klinik perusahaan di wilayah {$regionName} dengan dukungan tenaga perawat yang tersertifikasi Hiperkes resmi dari Kementerian Ketenagakerjaan RI memastikan terpenuhinya hak asasi pekerja untuk mendapatkan lingkungan kerja yang aman dan sehat. Banyak penelitian kedokteran okupasi membuktikan bahwa intervensi ergonomi yang tepat, surveilans paparan kebisingan yang teratur, pemantauan kualitas udara lingkungan kerja, serta program gizi kerja yang seimbang mampu menurunkan angka absensi sakit (<em>sickness absenteeism</em>) hingga 35-45% serta meningkatkan efisiensi operasional perusahaan secara berkelanjutan.</p>";
    }

    private static function sectionLandasanHukum(string $title, string $regionName): string
    {
        return "<h2>2. Landasan Yuridis & Regulasi Perundangan K3 Hiperkes di Indonesia</h2>
<p>Pelaksanaan <strong>{$title}</strong> di kawasan <strong>{$regionName}</strong> memiliki payung hukum yang sangat kokoh dalam sistem hukum ketenagakerjaan Republik Indonesia. Perusahaan yang mempekerjakan tenaga paramedis wajib memastikan kualifikasi resmi mereka terdaftar dan memiliki sertifikat penunjukan yang diakui pemerintah. Berikut adalah rujukan yuridis utama yang mendasari kepatuhan norma kesehatan kerja:</p>
<div class='table-responsive my-4'>
<table class='table table-bordered table-striped'>
<thead class='table-success'>
<tr>
<th>Peraturan Perundangan</th>
<th>Substansi Utama Regulasi</th>
<th>Implikasi bagi Paramedis & Perawat Perusahaan</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>UU No. 1 Tahun 1970 tentang Keselamatan Kerja</strong></td>
<td>Landasan pokok perlindungan keselamatan dan kesehatan kerja di seluruh tempat kerja di darat, dalam tanah, permukaan air, maupun udara.</td>
<td>Kewajiban melakukan pembinaan K3, pemeriksaan kesehatan pekerja berkala, dan penyediaan fasilitas pertolongan pertama di tempat kerja.</td>
</tr>
<tr>
<td><strong>Permenaker No. 01/MEN/1979</strong></td>
<td>Kewajiban Latihan Hygiene Perusahaan, Kesehatan dan Keselamatan Kerja bagi Tenaga Paramedis Perusahaan.</td>
<td>Setiap perusahaan yang mempekerjakan tenaga paramedis (perawat/bidan) wajib mengirimkan mereka untuk mengikuti pelatihan Hiperkes resmi yang diselenggarakan Kemnaker RI atau PJK3 terakreditasi.</td>
</tr>
<tr>
<td><strong>Permenaker No. 03/MEN/1982</strong></td>
<td>Tata Cara Penyelenggaraan Pelayanan Kesehatan Kerja di Perusahaan.</td>
<td>Mengatur struktur klinik kerja, rasio dokter/paramedis terhadap jumlah tenaga kerja, serta kewajiban menyusun laporan triwulan kesehatan kerja ke Disnaker setempat.</td>
</tr>
<tr>
<td><strong>Permenaker No. 05 Tahun 2018</strong></td>
<td>Keselamatan dan Kesehatan Kerja Lingkungan Kerja.</td>
<td>Menetapkan Nilai Ambang Batas (NAB) faktor fisika, kimia, biologi, ergonomi, dan psikososial yang wajib dipantau secara berkala oleh tim K3 bersama paramedis.</td>
</tr>
<tr>
<td><strong>Permenaker No. 15/MEN/VIII/2008</strong></td>
<td>Pertolongan Pertama pada Kecelakaan (P3K) di Tempat Kerja.</td>
<td>Standarisasi jumlah kotak P3K, isi obat dan perban, ruang P3K, serta rasio petugas P3K terlatih terhadap jumlah pekerja per shift operasional.</td>
</tr>
<tr>
<td><strong>Permenkes No. 56 Tahun 2016</strong></td>
<td>Penyelenggaraan Pelayanan Penyakit Akibat Kerja.</td>
<td>Pedoman penegakan 7 langkah diagnosis klinis Penyakit Akibat Kerja (PAK) dan tata kelola rujukan medis ke fasilitas kesehatan okupasi rujukan BPJS Ketenagakerjaan.</td>
</tr>
</tbody>
</table>
</div>
<p>Kepatuhan terhadap regulasi di atas diawasi secara berkala oleh Pengawas Ketenagakerjaan Dinas Tenaga Kerja Provinsi dan Kabupaten/Kota di seluruh wilayah {$regionName}. Ketidakpatuhan terhadap kepemilikan sertifikasi Hiperkes bagi perawat perusahaan dapat dikenakan sanksi administratif hingga penghentian sementara fasilitas pelayanan kesehatan internal perusahaan.</p>";
    }

    private static function sectionPeranParamedis(string $title, string $regionName): string
    {
        return "<h2>3. Peran Strategis, Tugas Pokok, dan Fungsi Perawat Hiperkes Perusahaan</h2>
<p>Dalam kerangka implementasi Sistem Manajemen Keselamatan dan Kesehatan Kerja (SMK3) berbasis Peraturan Pemerintah No. 50 Tahun 2012 dan standar global ISO 45001:2018, posisi perawat Hiperkes di wilayah {$regionName} bukan sekadar pembantu dokter perusahaan, melainkan manajer operasional kesehatan harian di tempat kerja. Tugas pokok dan fungsi (Tupoksi) perawat Hiperkes terbagi ke dalam empat pilar kesehatan kerja utama:</p>
<h3>A. Pilar Preventif (Pencegahan)</h3>
<ul>
<li><strong>Surveilans Lingkungan Kerja:</strong> Berkoordinasi dengan Industrial Hygienist untuk mengukur tingkat kebisingan, intensitas pencahayaan, getaran mekanis, konsentrasi debu terhirup (respirable dust), dan kadar uap kimia di area produksi.</li>
<li><strong>Skrining Kesehatan Berkala:</strong> Melaksanakan dan mendokumentasikan hasil pemeriksaan audiometri, spirometri, visus mata, elektrokardiogram (EKG), serta pemeriksaan laboratorium darah/urin rutin bagi pekerja yang terpajan hazard tertentu.</li>
<li><strong>Vaksinasi & Imunisasi Tenaga Kerja:</strong> Mengelola rantai dingin (cold chain) vaksinasi wajib seperti Hepatitis B untuk petugas limbah, Tetanus Toksoid (TT) untuk pekerja konstruksi, serta vaksin Influenza musiman.</li>
</ul>
<h3>B. Pilar Promotif (Peningkatan Kebugaran & Derajat Kesehatan)</h3>
<ul>
<li><strong>Penyuluhan Kesehatan Kerja (Health Talk):</strong> Mengadakan sesi edukasi rutin mengenai pencegahan hipertensi, diabetes melitus, bahaya merokok, pola tidur pekerja shift, dan higiene sanitasi perorangan.</li>
<li><strong>Pengawasan Kantin & Penyelenggaraan Makanan:</strong> Menginspeksi kebersihan dapur kantin, uji mikrobiologi sampel makanan, kebersihan air minum, serta memastikan pemenuhan kalori harian pekerja sesuai kategori beban kerja ringan, sedang, dan berat.</li>
<li><strong>Program Ergonomi & Peregangan Kerja:</strong> Menginisiasi kegiatan senam peregangan berkala (<em>stretching at work</em>) 2 kali sehari selama 5-10 menit di workstation produksi untuk mencegah kekakuan otot dan CTS.</li>
</ul>
<h3>C. Pilar Kuratif (Pengobatan & Respon Kedaruratan)</h3>
<ul>
<li><strong>Pelayanan Rawat Jalan Tingkat Pertama:</strong> Menangani keluhan penyakit umum harian pekerja, mendistribusikan obat simptomatis sesuai formularium yang disetujui dokter penanggung jawab klinik.</li>
<li><strong>Tindakan Gawat Darurat (First Aid & Triage):</strong> Melakukan resusitasi jantung paru (RJP), penghentian perdarahan masif, imobilisasi patah tulang, irigasi mata darurat akibat cipratan bahan kimia korosif, dan stabilisasi korban sebelum dirujuk.</li>
<li><strong>Pemberian Terapi Oksigen & Antidot Lapangan:</strong> Menguasai protokol penanganan inhalasi gas beracun (CO, H2S, klorin) menggunakan tabung oksigen bertekanan dan kanul/masker khusus.</li>
</ul>
<h3>D. Pilar Rehabilitatif (Pemulihan & Return to Work)</h3>
<ul>
<li><strong>Program Kembali Bekerja (Return to Work Program):</strong> Berkolaborasi dengan manajemen HRD dan BPJS Ketenagakerjaan untuk merancang adaptasi tugas (light duty) bagi pekerja yang baru sembuh dari cedera patah tulang atau pasca stroke ringan.</li>
<li><strong>Evaluasi Kebugaran Kerja (Fitness for Work):</strong> Memeriksa kesiapan fisik pekerja sebelum diizinkan kembali mengoperasikan alat berat, bekerja di ketinggian, atau memasuki ruang terbatas (confined space).</li>
</ul>";
    }

    private static function sectionIdentifikasiBahaya(string $title, string $regionName): string
    {
        return "<h2>4. Identifikasi Bahaya Lingkungan Kerja & Parameter Nilai Ambang Batas (NAB)</h2>
<p>Dalam program <strong>{$title}</strong>, peserta dibekali pemahaman mendalam tentang lima golongan bahaya lingkungan kerja sesuai standar Permenaker No. 05 Tahun 2018. Perawat Hiperkes di wilayah {$regionName} wajib memahami batasan pajanan agar dapat mendeteksi gejala dini sebelum kerusakan organ menetap terjadi pada tenaga kerja:</p>
<div class='table-responsive my-4'>
<table class='table table-bordered table-hover'>
<thead class='table-primary'>
<tr>
<th>Faktor Bahaya</th>
<th>Contoh Hazard di Industri {$regionName}</th>
<th>Nilai Ambang Batas (NAB) Regulasi</th>
<th>Dampak Kesehatan / Target Organ</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>Fisika - Kebisingan</strong></td>
<td>Mesin genset, turbin uap, stamping press, ball mill</td>
<td><strong>85 dBA</strong> untuk pajanan 8 jam per hari</td>
<td>Tuli akibat bising (NIHL), tinitus, kenaikan tekanan darah, stres okupasi</td>
</tr>
<tr>
<td><strong>Fisika - Iklim Kerja Panas</strong></td>
<td>Area peleburan smelter, boiler room, pekerjaan lapangan terik</td>
<td><strong>ISBB 28.0 °C - 31.0 °C</strong> tergantung beban kerja metabolik</td>
<td>Heat cramps, heat exhaustion, heat stroke, dehidrasi akut, gagal ginjal</td>
</tr>
<tr>
<td><strong>Fisika - Getaran Lengan</strong></td>
<td>Jack hammer, gerinda tangan, impact wrench, gergaji mesin</td>
<td><strong>5 m/s²</strong> (Akselerasi frekuensi terbobot 8 jam)</td>
<td>Vibration White Finger (VWF), sindrom Raynaud, neuropati perifer</td>
</tr>
<tr>
<td><strong>Kimia - Debu Silika Bebas</strong></td>
<td>Quarry batu, pabrik semen, keramik, pengecoran logam</td>
<td><strong>0.025 mg/m³</strong> (Fraksi respirabel)</td>
<td>Silikosis paru, fibrosis interstisial, peningkatan risiko TBC paru</td>
</tr>
<tr>
<td><strong>Kimia - Gas H2S</strong></td>
<td>Pengolahan limbah pabrik kelapa sawit, sumur migas, confined space</td>
<td><strong>1 ppm</strong> (TLV-TWA), 5 ppm (STEL)</td>
<td>Paralisis saraf penciuman, edema paru akut, asfiksia seluler fatal</td>
</tr>
<tr>
<td><strong>Kimia - Pelarut Organik (Benzena)</strong></td>
<td>Industri percetakan, pelapisan cat mobil, sol sepatu, petrokimia</td>
<td><strong>0.5 ppm</strong> (TLV-TWA), Biological Index urin</td>
<td>Anemia aplastik, penekanan sumsum tulang, leukemia mieloid</td>
</tr>
<tr>
<td><strong>Biologi - Bakteri & Jamur</strong></td>
<td>Ruang pendingin AC sentral (Legionella), pabrik pengolahan pakan</td>
<td>Jamur < 1000 CFU/m³, nihil patogen spesifik</td>
<td>Legionellosis, Pontiac fever, asma bronkiale, dermatitis mikotik</td>
</tr>
<tr>
<td><strong>Ergonomi</strong></td>
<td>Angkat angkut manual > 25 kg, postur membungkuk berulang</td>
<td>Skor REBA ≤ 3 (risiko rendah yang dapat diterima)</td>
<td>Low Back Pain (LBP), Hernia Nukleus Pulposus (HNP), tendinitis bahu</td>
</tr>
</tbody>
</table>
</div>
<p>Bagi perawat Hiperkes di {$regionName}, pengenalan terhadap parameter di atas memungkinkan dilakukannya konsultasi proaktif dengan supervisor lini kerja untuk memodifikasi shift kerja atau mewajibkan penggunaan Alat Pelindung Diri (APD) spesifik seperti ear plug/ear muff dengan Noise Reduction Rating (NRR) yang memadai.</p>";
    }

    private static function sectionSurveilansMCU(string $title, string $regionName): string
    {
        return "<h2>5. Metodologi Surveilans Medis: Pemeriksaan MCU Awal, Berkala, dan Khusus</h2>
<p>Surveilans kesehatan tenaga kerja merupakan tulang punggung kegiatan pencegahan di klinik perusahaan. Perawat Hiperkes bertanggung jawab merencanakan, mengorganisir, dan mengarsipkan data rekam medis pemeriksaan kesehatan kerja (Medical Check Up) sesuai Permenaker No. 02/MEN/1980:</p>
<h3>1. Pemeriksaan Kesehatan Sebelum Bekerja (Pre-Employment Medical Check Up)</h3>
<p>Dilakukan sebelum pelamar kerja resmi menandatangani kontrak kerja atau ditempatkan pada posisi tertentu. Tujuannya adalah memastikan calon pekerja berada dalam kondisi kesehatan yang serasi dengan karakteristik beban kerja dan lingkungan kerja yang akan dihadapinya (<em>Fit to Work</em>). Pemeriksaan mencakup anamnesis riwayat penyakit dahulu, pemeriksaan fisik lengkap, rontgen thoraks (dada), tes fungsi penglihatan, pendengaran, dan skrining bebas narkoba/zat adiktif.</p>
<h3>2. Pemeriksaan Kesehatan Berkala (Periodic Medical Check Up)</h3>
<p>Dilakukan sekurang-kurangnya 1 (satu) tahun sekali bagi seluruh pekerja yang aktif bekerja. Tujuannya adalah memantau status kesehatan umum pekerja serta mendeteksi adanya efek kumulatif dari paparan hazard lingkungan kerja. Data hasil MCU berkala harus dianalisis secara agregat oleh perawat Hiperkes bersama dokter perusahaan untuk melihat tren morbiditas, seperti peningkatan prevalensi kolesterol tinggi, asam urat, penurunan tajam pendengaran, atau penurunan kapasitas vital paksa paru.</p>
<h3>3. Pemeriksaan Kesehatan Khusus (Specific Medical Check Up)</h3>
<p>Dilakukan kepada kelompok pekerja tertentu yang mengalami kondisi khusus, antara lain:</p>
<ul>
<li>Pekerja yang terpapar zat kimia karsinogenik atau logam berat (contoh: pemeriksaan kadar timbal dalam darah setiap 6 bulan sekali).</li>
<li>Pekerja yang bekerja di lingkungan bising > 85 dBA (pemeriksaan audiometri nada murni pada frekuensi 500 Hz hingga 8000 Hz).</li>
<li>Pekerja yang baru sembuh dari sakit berat atau kecelakaan kerja yang dirawat di rumah sakit lebih dari 2 minggu berturut-turut.</li>
<li>Pekerja wanita hamil atau menyusui yang ditempatkan pada area kerja berisiko toksik reproduksi.</li>
<li>Pekerja yang akan memasuki masa purna tugas (pensiun) untuk mengevaluasi status kesehatan akhir sebelum meninggalkan perusahaan.</li>
</ul>";
    }

    private static function sectionErgonomiFisiologi(string $title, string $regionName): string
    {
        return "<h2>6. Penilaian Risiko Ergonomi Kerja & Analisis Postur (REBA, RULA, QEC)</h2>
<p>Keluhan muskuloskeletal (Musculoskeletal Disorders - MSDs) menyumbang lebih dari 60% keluhan fisik pekerja di wilayah {$regionName}, terutama pada sektor manufaktur padat karya, perakitan komponen elektronika, pergudangan, hingga pekerja kantoran yang duduk seharian di depan komputer. Dalam <strong>{$title}</strong>, peserta dibekali kemampuan menggunakan alat ukur postur ergonomis:</p>
<h3>A. Rapid Upper Limb Assessment (RULA)</h3>
<p>Metode RULA dirancang untuk mengevaluasi beban postur pada anggota tubuh bagian atas (lengan atas, lengan bawah, pergelangan tangan, leher, dan punggung atas). Metode ini sangat cocok untuk operator lini perakitan, teknisi penjahitan garmen, atau operator komputer.</p>
<ul>
<li><strong>Skor 1 - 2:</strong> Postur dapat diterima jika tidak dipertahankan dalam durasi lama atau diulang berlebihan.</li>
<li><strong>Skor 3 - 4:</strong> Diperlukan investigasi lebih lanjut; perubahan mungkin diperlukan.</li>
<li><strong>Skor 5 - 6:</strong> Investigasi dan perubahan harus segera dilakukan dalam waktu dekat.</li>
<li><strong>Skor 7:</strong> Investigasi dan perubahan harus dilakukan <em>sekarang juga</em> (kondisi sangat kritis).</li>
</ul>
<h3>B. Rapid Entire Body Assessment (REBA)</h3>
<p>Metode REBA mengevaluasi seluruh postur tubuh, mencakup pergerakan kaki, lutut, pinggang, torso, leher, dan lengan, serta memperhitungkan jenis genggaman (coupling) dan beban dinamis/tiba-tiba. Metode ini ideal untuk pekerja pemuatan barang di gudang logistik, kuli angkut pelabuhan, atau perawat rumah sakit saat memindahkan pasien dari tempat tidur ke kursi roda.</p>
<h3>C. Prinsip Manual Material Handling (MMH) Aman</h3>
<p>Perawat Hiperkes wajib mengedukasi teknik angkat-angkut yang benar: menekuk lutut (jongkok) dengan punggung tetap tegak, memegang beban sedekat mungkin dengan titik pusat gravitasi tubuh, dan menghindari gerakan memutar tulang belakang (twisting) saat membawa beban berat. Beban angkat maksimal yang direkomendasikan untuk pekerja pria dewasa di Indonesia adalah 25 kg dalam kondisi ideal, dan 15 kg untuk wanita.</p>";
    }

    private static function sectionGawatDarurat(string $title, string $regionName): string
    {
        return "<h2>7. Penanganan Kedaruratan Medis di Tempat Kerja & Pertolongan Pertama (First Aid)</h2>
<p>Kedaruratan medis di industri menuntut tindakan yang cepat, tenang, dan terstandar (<em>Golden Hour Period</em>). Kesalahan tindakan awal saat pertolongan pertama dapat menyebabkan komplikasi permanen hingga kematian. Protokol kedaruratan yang dilatih dalam <strong>{$title}</strong> mencakup:</p>
<h3>1. Basic Life Support (BLS) & Resusitasi Jantung Paru (RJP)</h3>
<p>Mengikuti pedoman American Heart Association (AHA) terkini: <strong>C - A - B</strong> (<em>Circulation, Airway, Breathing</em>). Kompresi dada dilakukan dengan kedalaman 5 - 6 cm, kecepatan 100 - 120 kali per menit, membiarkan dada mengembang sempurna (chest recoil), dan meminimalkan interupsi. Segera pasang <em>Automated External Defibrillator (AED)</em> jika tersedia di lokasi kejadian.</p>
<h3>2. Penanganan Cedera Trauma Masif & Perdarahan</h3>
<p>Tekanan langsung (direct pressure) dengan kassa steril pada luka terbuka adalah langkah pertama. Jika perdarahan arteri pada ekstremitas tidak berhenti dengan balut tekan, pasang torniket hemostatik komersial 5 cm di atas luka (hindari memasang tepat pada sendi) dan catat waktu pemasangan torniket secara akurat untuk dokter bedah.</p>
<h3>3. Luka Bakar Kimiawi (Chemical Burns)</h3>
<p>Lepaskan segera seluruh pakaian pekerja yang terkontaminasi bahan kimia. Guyur bagian tubuh atau mata yang terpajan dengan air bersih mengalir (safety shower / eye wash station) secara terus-menerus selama minimal 15 hingga 20 menit. Jangan mengoleskan pasta gigi, mentega, atau minyak rem karena dapat memperparah kerusakan jaringan dan memicu infeksi sekunder.</p>
<h3>4. Keracunan Gas Beracun di Ruang Terbatas (Confined Space)</h3>
<p>Jangan pernah masuk menolong korban di dalam tangki/lubang tanpa Alat Pelindung Pernapasan Mandiri (SCBA)! Tarik korban keluar menggunakan tali tripod rescue, berikan terapi oksigen konsentrasi tinggi 100% menggunakan non-rebreathing mask (NRM), posisikan korban dalam posisi pemulihan (recovery position) jika tidak sadar namun masih bernapas, dan segera aktifkan alur rujukan gawat darurat (Medevac).</p>";
    }

    private static function sectionTataKelolaKlinik(string $title, string $regionName): string
    {
        return "<h2>8. Tata Kelola Klinik Perusahaan, Pengelolaan Limbah Medis B3, dan Administrasi</h2>
<p>Klinik perusahaan yang beroperasi di wilayah {$regionName} wajib memenuhi standar kelayakan sarana dan prasarana kesehatan kerja berdasarkan Permenaker No. 03/MEN/1982 dan regulasi Dinas Kesehatan setempat:</p>
<ul>
<li><strong>Ruang Pelayanan & Fasilitas:</strong> Memiliki ruang periksa terpisah, ruang tindakan/triage darurat, ruang istirahat pasien/observasi dengan tempat tidur standar, fasilitas cuci tangan dengan air mengalir dan sabun antiseptik, serta pendingin udara yang memadai.</li>
<li><strong>Formularium Obat & Emergency Box:</strong> Menyediakan obat-obatan esensial golongan obat bebas dan bebas terbatas, analgetik antipiretik, antasida, antihistamin, cairan rehidrasi oral, serta emergency kit terkunci yang berisi epinefrin injeksi, atropin sulfat, aminofilin, dan infus set ringer laktat di bawah supervisi dokter penanggung jawab.</li>
<li><strong>Pengelolaan Limbah Medis B3:</strong> Jarum suntik bekas wajib dibuang ke dalam <em>Safety Box</em> khusus anti-tembus dan anti-bocor tanpa dilakukan penutupan jarum kembali (no recapping). Kassa darah, perban kotor, dan sarung tangan medis dibuang ke dalam tempat sampah infeksius berkantong plastik kuning bersimbol biohazard. Limbah B3 medis wajib dimusnahkan melalui kerja sama dengan pihak ketiga pengolah limbah B3 berizin resmi KLHK.</li>
<li><strong>Pelaporan Wajib Ketenagakerjaan:</strong> Perawat Hiperkes menyusun Buku Register Harian Pasien, Laporan Bulanan Morbiditas, serta Laporan Triwulan Pelayanan Kesehatan Kerja yang ditandatangani Dokter Penanggung Jawab dan Pimpinan Perusahaan untuk diserahkan ke Seksi Pengawasan K3 Dinas Tenaga Kerja setempat.</li>
</ul>";
    }

    private static function sectionKonteksWilayah(string $title, string $regionName): string
    {
        return "<h2>9. Implementasi Spesifik & Karakteristik Industri di Wilayah {$regionName}</h2>
<p>Penerapan program <strong>{$title}</strong> di kawasan <strong>{$regionName}</strong> memiliki kekhasan tersendiri yang dipengaruhi oleh tipologi industri lokal, kondisi demografis tenaga kerja, serta ketersediaan fasilitas kesehatan rujukan. Wilayah {$regionName} memiliki klaster industri strategis yang membutuhkan perhatian spesifik dari tenaga perawat Hiperkes:</p>
<p>1. <strong>Tantangan Lingkungan Kerja Lokal:</strong> Karakteristik iklim kerja di {$regionName} menuntut pemantauan dehidrasi dan heat stress secara berkala pada pekerja shift luar ruangan. Tim medis klinik wajib menyiapkan rehidrasi elektrolit khusus di pos-pos kerja kritis.</p>
<p>2. <strong>Jejaring Fasilitas Kesehatan Rujukan:</strong> Perawat Hiperkes di {$regionName} harus memetakan rumah sakit trauma center BPJS Ketenagakerjaan terdekat, nomor telepon darurat ambulans 118/119, serta estimasi waktu tempuh (travel time) pada jam sibuk maupun dini hari untuk skenario evakuasi korban kecelakaan kerja parah.</p>
<p>3. <strong>Sinergi dengan P2K3 & Disnaker Setempat:</strong> Paramedis aktif berkolaborasi dengan Panitia Pembina Keselamatan dan Kesehatan Kerja (P2K3) perusahaan dan pengawas ketenagakerjaan spesialis kesehatan kerja di {$regionName} dalam mengevaluasi hasil pengukuran faktor bahaya lingkungan kerja dan menyusun program koreksi tepat sasaran.</p>";
    }

    private static function sectionMatriksKompetensi(string $title, string $regionName): string
    {
        return "<h2>10. Matriks Kompetensi Paramedis Hiperkes & Keberlanjutan SKP PPNI</h2>
<p>Mengikuti pelatihan <strong>{$title}</strong> memberikan nilai tambah kompetensi profesional yang diakui secara nasional. Sertifikasi Hiperkes Kemnaker RI membekali perawat dengan legalitas hukum formal untuk menjalankan praktik keperawatan okupasi di klinik perusahaan di seluruh wilayah {$regionName}.</p>
<div class='table-responsive my-4'>
<table class='table table-bordered table-striped'>
<thead class='table-dark'>
<tr>
<th>Area Kompetensi</th>
<th>Deskripsi Keterampilan Klinis & Manajerial</th>
<th>Indikator Capaian Paramedis</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>Diagnostik Lingkungan</strong></td>
<td>Mampu mengoperasikan Sound Level Meter, Lux Meter, Heat Stress Monitor (ISBB), dan memetakan zona bising di pabrik.</td>
<td>Mampu membuat peta bahaya fisik (hazard map) pabrik secara mandiri.</td>
</tr>
<tr>
<td><strong>Surveilans Okupasi</strong></td>
<td>Mampu menginterpretasi grafik audiogram, kurva spirometri FVC/FEV1, dan parameter tes darah rutin pekerja.</td>
<td>Mendeteksi dini pergeseran ambang dengar (Standard Threshold Shift) < 15 dB.</td>
</tr>
<tr>
<td><strong>Triage & Trauma Support</strong></td>
<td>Mampu memimpin stabilisasi trauma fraktur, penanganan luka bakar, dan penghentian perdarahan berat.</td>
<td>Response time tindakan kegawatdaruratan di pos medis < 3 menit.</td>
</tr>
<tr>
<td><strong>Manajemen Regulasi</strong></td>
<td>Mampu menyusun rekam medis terstandar, pelaporan PAK, dan dokumen audit SMK3 kriteria kesehatan kerja.</td>
<td>Nihil temuan minor/mayor pada audit SMK3 PP 50/2012 sektor kesehatan kerja.</td>
</tr>
<tr>
<td><strong>Pengembangan Profesi</strong></td>
<td>Memperoleh perolehan Satuan Kredit Profesi (SKP) resmi PPNI untuk perpanjangan Surat Tanda Registrasi (STR).</td>
<td>Terpenuhinya kecukupan SKP PPNI periode 5 tahunan perawat.</td>
</tr>
</tbody>
</table>
</div>";
    }

    private static function sectionFaqKlinis(string $title, string $regionName): string
    {
        return "<h2>11. Tanya Jawab Klinis & Teknis seputar {$title} di {$regionName}</h2>
<div class='accordion' id='accordionFaqHiperkes'>
<div class='accordion-item'>
<h3 class='accordion-header' id='faqHeading1'>
<button class='accordion-button' type='button' data-bs-toggle='collapse' data-bs-target='#faqCollapse1' aria-expanded='true' aria-controls='faqCollapse1'>
Apakah perawat yang bekerja di klinik perusahaan wajib memiliki sertifikat Hiperkes dari Kemnaker RI?
</button>
</h3>
<div id='faqCollapse1' class='accordion-collapse collapse show' aria-labelledby='faqHeading1'>
<div class='accordion-body'>
<strong>Ya, mutlak wajib.</strong> Berdasarkan Peraturan Menteri Tenaga Kerja, Transmigrasi dan Koperasi No. 01/MEN/1979, setiap tenaga paramedis (perawat dan bidan) yang bekerja di perusahaan wajib memiliki sertifikat pelatihan Hiperkes resmi yang diterbitkan oleh Kementerian Ketenagakerjaan RI. Sertifikat ini menjadi bukti legalitas dan kompetensi paramedis dalam mengelola kesehatan kerja industri di wilayah {$regionName}.
</div>
</div>
</div>
<div class='accordion-item'>
<h3 class='accordion-header' id='faqHeading2'>
<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#faqCollapse2' aria-expanded='false' aria-controls='faqCollapse2'>
Berapa lama masa berlaku sertifikat Hiperkes Perawat Kemnaker RI?
</button>
</h3>
<div id='faqCollapse2' class='accordion-collapse collapse' aria-labelledby='faqHeading2'>
<div class='accordion-body'>
Sertifikat pelatihan Hiperkes Perawat yang diterbitkan oleh Kementerian Ketenagakerjaan RI berlaku <strong>seumur hidup</strong> sebagai bukti telah mengikuti pelatihan dasar kompetensi Hiperkes. Namun demikian, Surat Keputusan Penunjukan (SKP) Paramedis Perusahaan atau lisensi penugasan di klinik perusahaan tertentu memiliki masa perpanjangan berkala setiap 3 tahun sekali melalui Dinas Tenaga Kerja setempat.
</div>
</div>
</div>
<div class='accordion-item'>
<h3 class='accordion-header' id='faqHeading3'>
<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#faqCollapse3' aria-expanded='false' aria-controls='faqCollapse3'>
Apakah pelatihan ini mendapatkan SKP dari Persatuan Perawat Nasional Indonesia (PPNI)?
</button>
</h3>
<div id='faqCollapse3' class='accordion-collapse collapse' aria-labelledby='faqHeading3'>
<strong>Ya, program resmi kami terafiliasi dengan PPNI</strong> sehingga setiap peserta perawat yang lulus akan memperoleh sertifikat dengan Satuan Kredit Profesi (SKP) PPNI resmi. SKP ini sangat krusial bagi perawat untuk proses perpanjangan Surat Tanda Registrasi (STR) tenaga kesehatan di platform SATUSEHAT SDMK Kemenkes RI.
</div>
</div>
</div>
<div class='accordion-item'>
<h3 class='accordion-header' id='faqHeading4'>
<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#faqCollapse4' aria-expanded='false' aria-controls='faqCollapse4'>
Bagaimana sistem pelaksanaan pelatihan di {$regionName}?
</button>
</h3>
<div id='faqCollapse4' class='accordion-collapse collapse' aria-labelledby='faqHeading4'>
Pelatihan diselenggarakan dengan metode <strong>Blended Learning</strong> (Teori via Virtual Interactive Zoom Classroom + Evaluasi Praktik Kunjungan Lapangan Industri) atau metode <strong>Tatap Muka Penuh (Offline)</strong> di hotel berbintang yang ditunjuk di kota-kota pusat industri {$regionName}. Kami juga melayani program <em>In-House Training</em> khusus bagi korporasi yang ingin melatih tim perawat internal secara massal di lokasi klinik perusahaan.
</div>
</div>
</div>
<div class='accordion-item'>
<h3 class='accordion-header' id='faqHeading5'>
<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#faqCollapse5' aria-expanded='false' aria-controls='faqCollapse5'>
Apa saja fasilitas yang didapatkan peserta selama pelatihan?
</button>
</h3>
<div id='faqCollapse5' class='accordion-collapse collapse' aria-labelledby='faqHeading5'>
Peserta mendapatkan Sertifikat Resmi Kemnaker RI, Sertifikat SKP PPNI, Surat Keputusan Penunjukan Paramedis, Buku Modul Hardcopy & Softcopy, Training Kit Eksklusif (Kemeja/Polo, Flashdisk materi, Notebook), 35 Template SOP Klinik Perusahaan siap pakai, serta bimbingan konsultasi kesehatan kerja pasca-pelatihan bersama instruktur dokter spesialis okupasi.
</div>
</div>
</div>
</div>";
    }

    private static function sectionKesimpulan(string $title, string $regionName): string
    {
        return "<h2>12. Kesimpulan & Rekomendasi Pendaftaran Pelatihan Hiperkes Perawat</h2>
<p>Kesehatan tenaga kerja adalah investasi strategis paling bernilai bagi keberlangsungan bisnis perusahaan di era industri modern. Membekali perawat dan petugas medis perusahaan dengan sertifikasi <strong>{$title}</strong> bukan sekadar pemenuhan kewajiban administratif terhadap norma regulasi ketenagakerjaan di wilayah <strong>{$regionName}</strong>, melainkan fondasi kokoh untuk memitigasi risiko morbiditas, kecelakaan kerja, dan potensi tuntutan hukum akibat penyakit akibat kerja.</p>
<p>Dengan kompetensi paripurna dalam identifikasi bahaya lingkungan, pelaksanaan surveilans medis berkala, penerapan intervensi ergonomi, serta penanganan kedaruratan trauma industri terstandar, perawat Hiperkes menjadi aset krusial yang mengawal produktivitas dan kesejahteraan segenap insan pekerja.</p>
<div class='p-4 bg-light border-start border-4 border-success rounded my-4'>
<h4 class='text-success fw-bold'>Segera Daftarkan Tenaga Keperawatan Perusahaan Anda!</h4>
<p class='mb-2'>Tingkatkan standar pelayanan klinik kerja dan pastikan kepatuhan regulasi Kemnaker RI di perusahaan Anda bersama lembaga pelatihan K3 & Hiperkes terpercaya di {$regionName}. Kuota peserta pelatihan terbatas pada setiap batch untuk menjaga kualitas interaksi dan kedalaman praktik.</p>
<p class='mb-0'><strong>Hubungi Tim Konsultan Medis Kami via WhatsApp Hotline:</strong> Layanan konsultasi kurikulum, jadwal batch terdekat, dan penawaran in-house training tersedia 24/7 melalui kontak resmi di situs ini.</p>
</div>";
    }

    /**
     * Alias method untuk kecocokan controller
     */
    public static function getArticleTopics(): array
    {
        return self::get200ArticleTitles();
    }

    /**
     * Dapatkan artikel dari database atau generate secara dinamis (6.000 - 9.000 kata)
     */
    public static function getOrSynthesizeArticle(string $slug, $regionData = []): array
    {
        // 1. Cek dari database jika ada
        $dbArticle = \App\Models\Article::where('slug', $slug)->orWhere('slug', 'like', $slug . '%')->first();
        if ($dbArticle) {
            return [
                'id' => $dbArticle->id,
                'title' => $dbArticle->title,
                'slug' => $dbArticle->slug,
                'category' => $dbArticle->category ?? 'Training Hiperkes Perawat & Paramedis',
                'author' => $dbArticle->author ?? 'Tim Dokter Spesialis Okupasi & Instruktur Kemnaker RI',
                'published_at' => $dbArticle->published_at ? $dbArticle->published_at->format('d M Y') : date('d M Y'),
                'created_at' => $dbArticle->created_at ? $dbArticle->created_at->format('d M Y') : date('d M Y'),
                'read_time' => 38,
                'views' => $dbArticle->views ?? 1850,
                'image' => $dbArticle->image ?? 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&auto=format&fit=crop&q=80',
                'excerpt' => $dbArticle->excerpt,
                'content' => $dbArticle->content
            ];
        }

        // 2. Format region label
        if (is_array($regionData)) {
            $province = $regionData['province'] ?? '';
            $city = $regionData['city'] ?? '';
            $district = $regionData['district'] ?? '';
            $locationLabel = trim(($district ? $district . ', ' : '') . ($city ? $city . ', ' : '') . $province);
        } else {
            $locationLabel = (string) $regionData;
        }
        if (empty($locationLabel)) {
            $locationLabel = 'Indonesia';
        }

        // 3. Cocokkan dari 200 judul topik
        $topics = self::getArticleTopics();
        $bestMatch = null;
        foreach ($topics as $t) {
            $checkSlug = Str::slug($t);
            if ($checkSlug === $slug || Str::contains($slug, $checkSlug) || Str::contains($checkSlug, $slug)) {
                $bestMatch = $t;
                break;
            }
        }

        if (!$bestMatch) {
            $words = explode('-', $slug);
            $cleanWords = array_filter($words, function ($w) {
                return !in_array($w, ['training', 'hiperkes', 'perawat', 'paramedis', 'di', 'dan', 'ke', 'dari', 'pada']);
            });
            $bestMatch = "Training Hiperkes Perawat: " . ucwords(implode(' ', array_slice($cleanWords, 0, 7)));
        }

        return self::generateDeepArticle($bestMatch, $locationLabel, 7500);
    }

    /**
     * Dapatkan 200 daftar artikel per wilayah
     */
    public static function getRegionalArticleList(array $regionData = [], int $limit = 200): array
    {
        $topics = self::getArticleTopics();
        $list = [];

        $province = $regionData['province'] ?? '';
        $city = $regionData['city'] ?? '';
        $district = $regionData['district'] ?? '';
        $locSuffix = trim(($district ? $district . ', ' : '') . ($city ? $city . ', ' : '') . $province);
        if ($locSuffix === '') {
            $locSuffix = 'Nasional';
        }

        $count = 0;
        foreach ($topics as $id => $title) {
            if ($count >= $limit) {
                break;
            }
            $regionalTitle = $title . " - Wilayah " . $locSuffix;
            $slug = Str::slug($regionalTitle);
            $list[] = (object) [
                'id' => $id,
                'title' => $regionalTitle,
                'slug' => $slug,
                'category' => 'Training Hiperkes Perawat & Paramedis Kemnaker RI',
                'excerpt' => "Panduan komprehensif implementasi {$title} untuk kawasan kerja {$locSuffix}. Kurikulum mengacu pada Permenaker No. 01/MEN/1979 dan standar SKP PPNI.",
                'author' => 'Tim Penguji & Dokter Okupasi Hiperkes',
                'published_at' => date('d M Y'),
                'read_time' => 38,
                'views' => 1200 + ($id * 23) % 3500
            ];
            $count++;
        }

        return $list;
    }

    private static function sectionToksikologiIndustri(string $title, string $regionName): string
    {
        return "<h2>5. Toksikologi Industri & Penilaian Pajanan Faktor Kimia dan Biologi di Tempat Kerja</h2>
<p>Dalam kurikulum pembinaan <strong>{$title}</strong> di area <strong>{$regionName}</strong>, pemahaman mendalam mengenai toksikokinetika dan toksikodinamika zat kimia berbahaya (B3) di lingkungan industri merupakan kompetensi wajib bagi perawat okupasi. Bahan kimia dapat masuk ke dalam tubuh pekerja melalui tiga rute utama: inhalasi (pernapasan), absorbsi dermal (kulit), dan ingesti (saluran pencernaan akibat kontaminasi tangan atau makanan di area kerja).</p>
<p>Setiap senyawa kimia industri memiliki Nilai Ambang Batas (NAB) yang diatur ketat dalam Peraturan Menteri Ketenagakerjaan No. 5 Tahun 2018. Perawat Hiperkes bertugas membaca dan menginterpretasikan Lembar Data Keselamatan Bahan (LDKB / Safety Data Sheet / SDS), mencatat daftar bahan kimia beracun di tempat kerja, serta memetakan organ target kerusakan biologis (misalnya hepatotoksik, nefrotoksik, neurotoksik, atau karsinogenik).</p>

<h3>Klasifikasi Bahaya Kimia & Jalur Masuk ke Tubuh</h3>
<p>Perawat perusahaan wajib mengidentifikasi wujud fisik kontaminan kimia di tempat kerja:</p>
<ul>
    <li><strong>Gas dan Uap:</strong> Gas asfiksian sederhana (Nitrogen, Argon, Karbon Dioksida) yang mendesak Oksigen, serta gas toksik sistemik (Karbon Monoksida / CO, Hidrogen Sulfida / H2S, Amonia, dan Klorin) yang dapat memicu edema paru akut atau hipoksia seluler.</li>
    <li><strong>Debu Partikulat (Aerosol):</strong> Debu respirabel (ukuran < 5 mikron) seperti silika bebas pada industri semen dan tambang yang memicu Silikosis, debu asbes yang memicu Asbestosis dan Mesotelioma, serta debu batubara yang memicu Black Lung Disease (Coal Workers Pneumoconiosis).</li>
    <li><strong>Pelarut Organik (Solvent):</strong> Benzena, Toluen, Xilen, dan Trikloretilen pada industri percetakan, cat, dan manufaktur sepatu yang bersifat lipofilik, mudah menembus sawar darah otak, dan berpotensi merusak sumsum tulang (anemia aplastik dan leukemia).</li>
    <li><strong>Logam Berat:</strong> Timbal (Pb), Merkuri (Hg), Kadmium (Cd), dan Kromium heksavalen yang terakumulasi secara kronis di tulang, ginjal, dan susunan saraf pusat.</li>
</ul>

<h3>Tabel Pedoman Nilai Ambang Batas (NAB) & Indeks Pajanan Biologi (Biological Exposure Indices / BEI)</h3>
<div class='table-responsive my-3'>
<table class='table table-bordered table-striped'>
<thead class='table-dark'>
<tr>
    <th>Senyawa Kimia</th>
    <th>NAB Inhalasi (TWA 8 Jam)</th>
    <th>Organ Target Utama</th>
    <th>Biomarker Biomonitoring (Urine / Darah)</th>
    <th>Waktu Pengambilan Sampel</th>
</tr>
</thead>
<tbody>
<tr>
    <td><strong>Benzena (Benzene)</strong></td>
    <td>0.5 ppm (1.6 mg/m³)</td>
    <td>Sumsum Tulang, Sistem Hemopoietik</td>
    <td>Asam S-Fenilmerkapturat (S-PMA) dalam urine</td>
    <td>Akhir shift kerja mingguan</td>
</tr>
<tr>
    <td><strong>Timbal Anorganik (Lead / Pb)</strong></td>
    <td>0.05 mg/m³</td>
    <td>Saraf Pusat, Eritrosit, Ginjal</td>
    <td>Kadar Timbal dalam Darah Lengkap (BLL)</td>
    <td>Bebas waktu (steady state)</td>
</tr>
<tr>
    <td><strong>Toluena (Toluene)</strong></td>
    <td>20 ppm</td>
    <td>Sistem Saraf Pusat, Hati</td>
    <td>Asam Hipurat dalam urine / Toluena darah</td>
    <td>Akhir shift kerja harian</td>
</tr>
<tr>
    <td><strong>Karbon Monoksida (CO)</strong></td>
    <td>25 ppm</td>
    <td>Hemoglobin, Jantung, Otak</td>
    <td>Karboksihemoglobin (COHb) darah / CO udara ekspirasi</td>
    <td>Segera setelah paparan shift kerja</td>
</tr>
<tr>
    <td><strong>Debu Silika Bebas (SiO2)</strong></td>
    <td>0.025 mg/m³ (Respirabel)</td>
    <td>Paru-paru (Fibrosis Alveolar)</td>
    <td>Foto Toraks ILO, Uji Fungsi Paru Spirometri</td>
    <td>Evaluasi periodik 1-2 tahun</td>
</tr>
</tbody>
</table>
</div>

<p>Perawat Hiperkes di {$regionName} berperan sentral dalam menyusun program Biological Monitoring (Biomonitoring). Biomonitoring menilai beban tubuh internal (internal dose) pekerja secara riil, mencerminkan absorpsi total dari seluruh rute paparan, termasuk ketika pekerja tidak menggunakan alat pelindung pernapasan secara disiplin.</p>";
    }

    private static function sectionPemeriksaanPenunjang(string $title, string $regionName): string
    {
        return "<h2>7. Standard Operating Procedure (SOP) Pemeriksaan Penunjang Okupasi: Spirometri & Audiometri</h2>
<p>Dalam implementasi program <strong>{$title}</strong>, perawat klinik perusahaan tidak hanya dituntut menguasai teori, namun harus memiliki keterampilan teknis (hands-on psychomotor skills) dalam mengoperasikan alat diagnostik skrining kesehatan kerja yang telah terkalibrasi, khususnya <em>Spirometer</em> untuk uji fungsi pernapasan dan <em>Audiometer</em> untuk uji ketajaman pendengaran.</p>

<h3>A. Protokol Pelaksanaan Uji Fungsi Paru (Spirometri)</h3>
<p>Pemeriksaan spirometri ditujukan bagi pekerja yang terpapar debu industri, uap kimia, gas iritan, atau yang menggunakan alat pelindung pernapasan berat (SCBA/air-purifying respirator). Parameter utama yang dinilai adalah <strong>Forced Vital Capacity (FVC)</strong>, <strong>Forced Expiratory Volume in 1 Second (FEV1)</strong>, dan rasio <strong>FEV1/FVC</strong>.</p>
<ol>
    <li><strong>Persiapan Pra-Uji:</strong> Pekerja diwajibkan tidak merokok minimal 1 jam sebelum tes, tidak mengonsumsi alkohol minimal 4 jam, tidak melakukan olahraga berat minimal 30 menit, dan menghentikan pemakaian bronkodilator kerja singkat selama 6 jam sebelum pemeriksaan jika memungkinkan.</li>
    <li><strong>Kalibrasi Alat:</strong> Perawat melakukan kalibrasi volume harian menggunakan pompa kalibrasi (calibration syringe) 3 liter standar, memastikan variasi error alat berada di bawah rentang toleransi ±3% (maksimal ±90 mL).</li>
    <li><strong>Manuver Ekspirasi Paksa:</strong> Pasien diposisikan duduk tegak dengan penjepit hidung terpasang rapat. Perawat memberikan instruksi dengan aba-aba tegas: tarik napas sedalam-dalamnya secara maksimal, lalu hembuskan sekuat-kuatnya dan secepat-cepatnya tanpa ragu hingga udara terasa habis tuntas minimal selama 6 detik.</li>
    <li><strong>Kriteria Keberterimaan (Acceptability & Repeatability ATS/ERS):</strong> Dilakukan minimal 3 manuver yang valid dan dapat diterima. Nilai tertinggi dari dua manuver FVC dan FEV1 terbaik tidak boleh memiliki selisih lebih dari 150 mL (atau 100 mL jika FVC < 1.0 L).</li>
    <li><strong>Interpretasi Hasil:</strong>
        <ul>
            <li><strong>Normal:</strong> FVC ≥ 80% prediksi, FEV1 ≥ 80% prediksi, dan rasio FEV1/FVC ≥ 70%.</li>
            <li><strong>Obstruksi:</strong> Rasio FEV1/FVC < 70% (khas pada asma kerja, PPOK okupasi, bronkitis industri).</li>
            <li><strong>Restriksi:</strong> Rasio FEV1/FVC normal/meningkat, namun FVC < 80% prediksi (khas pada pneumokoniosis, silikosis, fibrosis paru, kifoskoliosis).</li>
            <li><strong>Campuran:</strong> Penurunan kedua parameter secara simultan.</li>
        </ul>
    </li>
</ol>

<h3>B. Protokol Uji Ketajaman Pendengaran (Audiometri Nada Murni)</h3>
<p>Bagi sektor industri manufaktur, pengecoran logam, turbin pembangkit, dan bengkel permesinan di {$regionName} dengan intensitas bising melebihi Nilai Ambang Batas 85 dBA untuk paparan 8 jam sehari, pemeriksaan audiometri berkala merupakan mandat keselamatan mutlak guna mendeteksi <em>Noise-Induced Hearing Loss (NIHL)</em>.</p>
<ul>
    <li><strong>Periode Istirahat Bising (Noise Free Period):</strong> Sebelum audiometri awal (baseline), pekerja wajib menjalani istirahat dari lingkungan bising minimal 14 jam (atau menggunakan earplug/earmuff berkategori tinggi) untuk meniadakan efek <em>Temporary Threshold Shift (TTS)</em> atau pergeseran ambang dengar sementara.</li>
    <li><strong>Ruang Uji (Soundproof Booth):</strong> Tingkat kebisingan latar belakang dalam bilik audiometri harus memenuhi standar ANSI S3.1 untuk mencegah terjadinya hasil false positive pada frekuensi rendah.</li>
    <li><strong>Frekuensi Pengujian:</strong> Uji hantaran udara (air conduction) dilakukan pada frekuensi 500 Hz, 1000 Hz, 2000 Hz, 3000 Hz, 4000 Hz, 6000 Hz, dan 8000 Hz untuk masing-masing telinga kanan dan kiri.</li>
    <li><strong>Tanda Klinis Patognomonis NIHL:</strong> Terjadinya penurunan ambang dengar sensorineural yang membentuk pola takik (notch) tajam pada frekuensi tinggi 4000 Hz (acoustic notch) dengan perbaikan relatif pada frekuensi 8000 Hz. Perawat yang terlatih dalam Hiperkes segera mengidentifikasi <em>Standard Threshold Shift (STS)</em>—yaitu penurunan rata-rata ambang dengar sebesar 10 dB atau lebih pada frekuensi 2000, 3000, dan 4000 Hz—sebagai sinyal peringatan awal kegagalan program hearing conservation.</li>
</ul>";
    }

    private static function sectionPromosiGiziKerja(string $title, string $regionName): string
    {
        return "<h2>9. Promosi Kesehatan Kerja, Ergonomi Kognitif & Pengelolaan Gizi Kerja Industri</h2>
<p>Kesehatan kerja tidak semata-mata berbicara mengenai penyakit fisik akibat pajanan mesin pabrik, melainkan mencakup kebugaran holistik pekerja. Penerapan modul <strong>{$title}</strong> di wilayah <strong>{$regionName}</strong> mengintegrasikan program promosi kesehatan di tempat kerja (Workplace Health Promotion) yang berbasis bukti (evidence-based), mencakup pengelolaan kantin perusahaan, kecukupan kalori harian tenaga kerja, serta mitigasi beban kerja mental dan stres okupasi.</p>

<h3>A. Perhitungan Beban Kerja & Kebutuhan Kalori Menurut Jenis Aktivitas</h3>
<p>Sesuai Surat Edaran Menteri Tenaga Kerja dan Transmigrasi No. SE.07/MEN/1979 mengenai Pengadaan Kantin dan Ruang Makan di Tempat Kerja, perusahaan dengan jumlah tenaga kerja lebih dari 50 orang wajib menyediakan ruang makan, dan perusahaan dengan tenaga kerja lebih dari 200 orang wajib menyediakan kantin kerja dengan pengawasan tenaga medis/perawat terlatih Hiperkes.</p>
<p>Kebutuhan kalori harian dihitung berdasarkan jenis beban kerja:</p>
<ul>
    <li><strong>Kerja Ringan (Light Work):</strong> Menulis, mengetik, operator kontrol panel duduk (Kebutuhan energi: 100 - 200 kkal/jam; sekitar 2.100 - 2.400 kkal/hari).</li>
    <li><strong>Kerja Sedang (Moderate Work):</strong> Pengelasan, perakitan mesin ringan, pengepakan berjalan (Kebutuhan energi: 200 - 350 kkal/jam; sekitar 2.400 - 2.800 kkal/hari).</li>
    <li><strong>Kerja Berat (Heavy Work):</strong> Penebangan pohon, kuli bongkar muat pelabuhan, penggalian tambang manual (Kebutuhan energi: 350 - 500 kkal/jam; sekitar 2.800 - 3.800 kkal/hari).</li>
</ul>
<p>Perawat Hiperkes bertugas menyusun siklus menu makanan bergizi seimbang di kantin perusahaan, memastikan komposisi makronutrien (Karbohidrat 55-65%, Protein 12-15%, Lemak 20-25%), kecukupan mikronutrien, serta melakukan audit sanitasi higiene penjamah makanan (food handler hygiene) bebas Salmonella dan E. coli.</p>

<h3>B. Manajemen Pekerja Gilir (Shift Work) & Higiene Tidur</h3>
<p>Pekerja shift malam di berbagai pabrik manufaktur dan instalasi continuous process di {$regionName} mengalami gangguan ritme sirkadian (circadian disruption) yang berdampak pada peningkatan sekresi kortisol, penurunan imunitas, gangguan gastrointestinal (dispepsia fungsional), dan peningkatan risiko sindrom metabolik. Perawat Hiperkes berperan menyelenggarakan edukasi higiene tidur (sleep hygiene), jadwal rotasi shift yang ergonomis (misalnya rotasi searah jarum jam: pagi-sore-malam), serta ketersediaan pencahayaan memadai dan makanan hangat berenergi tinggi rendah indeks glikemik saat shift malam berlangsung.</p>";
    }

    private static function sectionAlurBPJSPelaporan(string $title, string $regionName): string
    {
        return "<h2>12. Prosedur Klaim Jaminan Kecelakaan Kerja (JKK) BPJS Ketenagakerjaan & Tata Cara Pelaporan ke Disnaker</h2>
<p>Kelengkapan administrasi medis dan kepatuhan terhadap alur birokrasi hukum ketenagakerjaan merupakan tanggung jawab strategis yang diamanatkan dalam <strong>{$title}</strong>. Ketika terjadi kecelakaan kerja fatal, insiden massal, atau dugaan Penyakit Akibat Kerja (PAK) di wilayah operasional <strong>{$regionName}</strong>, perawat klinik perusahaan bertindak sebagai penghubung teknis antara manajemen perusahaan, dokter penasihat, fasilitas pelayanan kesehatan rujukan, dan instansi pengawas ketenagakerjaan.</p>

<h3>Alur Kronologis Penanganan & Pelaporan Resmi:</h3>
<ol>
    <li><strong>Tahap 1: Pertolongan Pertama & Stabilisasi Klinis (Golden Period):</strong>
        <p>Pasien ditangani seketika di klinik perusahaan. Perawat melakukan triase, resusitasi, imobilisasi cedera, dan mencatat rekam medis darurat secara detail (waktu kejadian, lokasi presisi, mekanisme cedera, tanda vital, dan tindakan yang telah diberikan).</p>
    </li>
    <li><strong>Tahap 2: Rujukan Cepat ke Trauma Center Rumah Sakit Kerja Sama:</strong>
        <p>Jika cedera membutuhkan penanganan definitif subspesialistik (bedah ortopedi, bedah saraf, rekonstruksi plastik), perawat mengoordinasikan evakuasi ambulans menuju Rumah Sakit Pusat Layanan Kecelakaan Kerja (PLKK) mitra BPJS Ketenagakerjaan terdekat di {$regionName}.</p>
    </li>
    <li><strong>Tahap 3: Pelaporan Tahap I ke Dinas Tenaga Kerja (Formulir 3 KK1):</strong>
        <p>Berdasarkan Peraturan Menteri Tenaga Kerja No. PER-03/MEN/1998 tentang Tata Cara Pelaporan dan Pemeriksaan Kecelakaan, pengurus perusahaan atau perawat klinik wajib mengirimkan Laporan Kecelakaan Tahap I dalam waktu <strong>tidak lebih dari 2 x 24 jam</strong> terhitung sejak kecelakaan terjadi kepada Pengawas Ketenagakerjaan pada Dinas Tenaga Kerja setempat dan kantor cabang BPJS Ketenagakerjaan.</p>
    </li>
    <li><strong>Tahap 4: Pelaporan Tahap II Setelah Penyembuhan Tuntas (Formulir 3 KK2):</strong>
        <p>Setelah pekerja dinyatakan sembuh oleh dokter yang merawat, atau dinyatakan cacat anatomis/fungsi, atau meninggal dunia, perusahaan wajib menyerahkan Laporan Tahap II disertai surat keterangan dokter (Bentuk 3b KK3) yang memuat persentase cacat guna penetapan santunan dan biaya rehabilitasi medik.</p>
    </li>
    <li><strong>Tahap 5: Investigasi Bersama Panitia Pembina K3 (P2K3):</strong>
        <p>Perawat Hiperkes bersama ahli K3 umum menyusun laporan investigasi mendalam menggunakan metode <em>Fishbone Diagram</em> atau <em>5-Why Analysis</em> guna mengidentifikasi tindakan tidak aman (unsafe acts) dan kondisi tidak aman (unsafe conditions), memastikan insiden serupa tidak terulang di kemudian hari.</p>
    </li>
</ol>";
    }

    private static function sectionStudiKasusPAK(string $title, string $regionName): string
    {
        return "<h2>13. Analisis Studi Kasus Nyata: Investigasi Penegakan Diagnosis & Intervensi Penyakit Akibat Kerja</h2>
<p>Untuk mempertajam nalar diagnostik dan keterampilan analitis peserta <strong>{$title}</strong> di <strong>{$regionName}</strong>, modul ini menyajikan tinjauan kasus nyata penyelidikan medis okupasi yang berhasil dipecahkan oleh tim Hiperkes:</p>

<div class='card border-success my-3 shadow-sm'>
<div class='card-header bg-success text-white fw-bold'>
    Studi Kasus 1: Wabah Dermatitis Kontak Akibat Kerja pada Industri Manufaktur Komponen Presisi
</div>
<div class='card-body'>
    <p><strong>Latar Belakang:</strong> Sebanyak 18 dari 45 operator mesin CNC di lini pembubutan logam melaporkan keluhan gatal hebat, eritema, vesikel, dan deskuamasi kulit pada kedua telapak tangan dan lengan bawah dalam rentang waktu 3 minggu.</p>
    <p><strong>Langkah Investigasi Perawat Hiperkes:</strong></p>
    <ul>
        <li>Perawat melakukan pemetaan epidemiologi deskriptif: seluruh kasus terkonsentrasi pada operator yang menangani cairan pendingin pemotongan logam (metalworking fluids / coolant cutting oil).</li>
        <li>Pemeriksaan SDS bahan: ditemukan kandungan biosida formaldehida donor dan senyawa nitrosamin sebagai pengawet cairan coolant.</li>
        <li>Uji Tempel Kulit (Patch Test): 14 operator menunjukkan reaksi positif terhadap biosida dan garam nikel terlarut.</li>
    </ul>
    <p><strong>Intervensi Pengendalian:</strong> Perusahaan mengganti formula coolant dengan biosida non-formaldehida, memasang pelindung percikan otomatis (splash guard), mewajibkan pemakaian sarung tangan nitril tahan kimia berlapis katun, serta memfasilitasi krim pelindung sawar kulit (barrier cream) sebelum dan sesudah shift kerja. Dalam 4 minggu, seluruh lesi kulit membaik tanpa adanya kasus baru.</p>
</div>
</div>

<div class='card border-primary my-3 shadow-sm'>
<div class='card-header bg-primary text-white fw-bold'>
    Studi Kasus 2: Deteksi Dini Carpal Tunnel Syndrome (CTS) pada Bagian Pengepakan Garment
</div>
<div class='card-body'>
    <p><strong>Latar Belakang:</strong> Pekerja wanita bagian finishing dan setrika uap berusia 32 tahun mengeluhkan kebas, kesemutan (parestesia), dan nyeri terbakar pada ibu jari, jari telunjuk, dan jari tengah tangan kanan yang memburuk di malam hari.</p>
    <p><strong>Pemeriksaan Klinis oleh Perawat Okupasi:</strong> Tes Phalen positif dalam 30 detik, Tanda Tinel positif pada terowongan karpal pergelangan tangan, serta kelemahan abduksi ibu jari.</p>
    <p><strong>Analisis Ergonomi:</strong> Pengamatan video menunjukkan pekerja melakukan gerakan fleksi-ekstensi pergelangan tangan berulang dengan frekuensi > 30 kali per menit disertai cengkeraman kuat (pinch grip) pada pegangan setrika berbobot 2.5 kg tanpa penopang.</p>
    <p><strong>Tindakan Rehabilitasi & Redesain:</strong> Pemasangan splint pergelangan tangan posisi netral, modifikasi setrika dengan sistem pegas penggantung (spring balancer) untuk meniadakan beban gravitasi, serta penerapan program peregangan mikro (micro-breaks) setiap 50 menit kerja. Gejala parestesia pekerja berkurang signifikan dalam 2 bulan tanpa perlu intervensi bedah.</p>
</div>
</div>";
    }


    private static function sectionAuditFarmasiB3(string $title, string $regionName): string
    {
        return "<h2>14. Tata Kelola Instalasi Farmasi Klinik Perusahaan & Standar Pengelolaan Limbah Medis B3</h2>
<p>Kepatuhan terhadap standar kefarmasian dan pengelolaan limbah bahan berbahaya dan beracun (B3) medis adalah pilar audit ketenagakerjaan dan lingkungan hidup yang sangat krusial di <strong>{$regionName}</strong>. Dalam kerangka <strong>{$title}</strong>, perawat klinik memegang kendali harian atas penyimpanan obat darurat, pencegahan obat kedaluwarsa, pemantauan rantai dingin vaksinasi, serta segregasi limbah infeksius sejak dari titik timbulan.</p>

<h3>A. Manajemen Penyimpanan Obat Darurat & Suhu Rantai Dingin (Cold Chain)</h3>
<p>Klinik perusahaan wajib memelihara stok obat gawat darurat (Emergency Kit / Crash Cart) yang selalu terkunci aman namun dapat diakses dalam hitungan detik saat terjadi henti jantung, syok anafilaksis, atau keracunan gas:</p>
<ul>
    <li><strong>Obat Resusitasi Jantung Paru:</strong> Epinefrin (Adrenalin) injeksi 1 mg/mL, Atropin Sulfat 0.25 mg/mL, Amiodaron injeksi, dan Lidokain 2%.</li>
    <li><strong>Obat Anti-Alergi & Anafilaksis:</strong> Dexamethasone injeksi, Diphenhydramine injeksi, dan Hidrokortison injeksi.</li>
    <li><strong>Obat Bronkodilator & Sesak Napas:</strong> Salbutamol cairan inhalasi (nebulizer) dan Aminofilin injeksi.</li>
    <li><strong>Antidotum Khusus:</strong> Kalsium Glukonat gel/injeksi 10% (wajib di industri yang menggunakan Asam Fluorida / Hydrofluoric Acid), Natrium Tiosulfat & Amil Nitrit (pada risiko Sianida), dan Atropin Sulfat dosis tinggi (pada intoksikasi organofosfat pestisida).</li>
    <li><strong>Pemantauan Suhu Kulkas Vaksin:</strong> Vaksin hepatitis B, tetanus toxoid (TT), dan serum anti-bisa ular (SABU) disimpan pada kulkas medis bersuhu 2°C hingga 8°C yang dilengkapi data logger dan termometer min-max yang dicatat dua kali sehari pada logbook resmi.</li>
</ul>

<h3>B. Protokol Segregasi & Pembuangan Limbah Medis B3 Berizin KLHK</h3>
<p>Sesuai Peraturan Menteri Lingkungan Hidup dan Kehutanan No. P.56/Menlhk-Setjen/2015 mengenai Tata Cara Pengelolaan Limbah B3 dari Fasilitas Pelayanan Kesehatan:</p>
<div class='table-responsive my-3'>
<table class='table table-bordered table-striped'>
<thead class='table-dark'>
<tr>
    <th>Kategori Limbah Medis</th>
    <th>Jenis Wadah / Kontainer</th>
    <th>Kode Warna Kantong</th>
    <th>Simbol B3 Resmi</th>
    <th>Batas Maksimal Penyimpanan Suhu Kamar</th>
</tr>
</thead>
<tbody>
<tr>
    <td><strong>Benda Tajam (Sharps)</strong></td>
    <td>Safety Box Khusus (Anti-Tusuk & Anti-Bocor)</td>
    <td>Kuning / Tanpa Kantong Plastik</td>
    <td>Infeksius / Biohazard</td>
    <td>Segera ditutup saat 3/4 penuh</td>
</tr>
<tr>
    <td><strong>Limbah Infeksius & Patologis</strong></td>
    <td>Tempat Sampah Tertutup Pedal Injak</td>
    <td>Plastik Kuning Tebal</td>
    <td>Infeksius / Biohazard</td>
    <td>Maksimal 2 x 24 jam (suhu ruang)</td>
</tr>
<tr>
    <td><strong>Limbah Farmasi & Kimia Kadaluarsa</strong></td>
    <td>Wadah Kedap Udara Bertutup</td>
    <td>Plastik Cokelat</td>
    <td>Toksik / Berbahaya</td>
    <td>Maksimal 90 hari di TPS B3</td>
</tr>
<tr>
    <td><strong>Limbah Sitotoksik</strong></td>
    <td>Kontainer Khusus Anti-Bocor</td>
    <td>Plastik Ungu</td>
    <td>Sitotoksik</td>
    <td>Segera dimusnahkan insinerator suhu tinggi</td>
</tr>
<tr>
    <td><strong>Limbah Domestik Non-Medis</strong></td>
    <td>Tempat Sampah Umum</td>
    <td>Plastik Hitam</td>
    <td>Tanpa Simbol</td>
    <td>Harian (TPA Kota)</td>
</tr>
</tbody>
</table>
</div>
<p>Perawat Hiperkes memastikan klinik memiliki logbook manifes limbah B3 (Festronik) dan bekerja sama dengan transporter serta pengolah berizin resmi KLHK, mencegah denda sanksi pidana lingkungan hidup bagi perusahaan di {$regionName}.</p>";
    }

    private static function sectionMetodologiREBARULA(string $title, string $regionName): string
    {
        return "<h2>15. Metodologi Analisis Postur Kerja Ergonomi REBA & RULA untuk Pencegahan Musculoskeletal Disorders (MSDs)</h2>
<p>Musculoskeletal Disorders (MSDs) merupakan beban keluhan kesehatan kerja dengan prevalensi tertinggi pada sektor industri di wilayah <strong>{$regionName}</strong>. Dalam program pembinaan <strong>{$title}</strong>, perawat okupasi dilatih melakukan audit ergonomi komprehensif di lantai produksi menggunakan dua metode pengamatan postural berstandar internasional: <em>Rapid Entire Body Assessment (REBA)</em> dan <em>Rapid Upper Limb Assessment (RULA)</em>.</p>

<h3>A. Langkah Perhitungan & Penilaian RULA (Fokus Anggota Tubuh Bagian Atas)</h3>
<p>Metode RULA dikembangkan oleh Dr. Lynn McAtamney dan Dr. E. Nigel Corlett, ditujukan untuk pekerjaan statis atau repetitif yang membebani leher, punggung atas, bahu, lengan, dan pergelangan tangan (misalnya pekerja operator komputer, perakitan elektronik presisi, penjahit garment, dan kasir):</p>
<ul>
    <li><strong>Grup A (Lengan & Pergelangan Tangan):</strong> Menilai sudut elevasi lengan atas (fleksi/ekstensi 0-20°, 20-45°, 45-90°, >90°), sudut lengan bawah (fleksi 60-100°), sudut deviasi pergelangan tangan (radial/ulnar deviation), serta putaran pergelangan tangan (pronasi/supinasi).</li>
    <li><strong>Grup B (Leher, Batang Tubuh & Kaki):</strong> Menilai fleksi/ekstensi leher, puntiran leher (twisting), postur batang tubuh (trunk) membungkuk atau miring, serta tumpuan kedua kaki (seimbang atau bertumpu sebelah).</li>
    <li><strong>Faktor Penambah Beban:</strong> Penambahan skor +1 jika postur bersifat statis (dipertahankan > 1 menit) atau berulang (> 4 kali/menit), serta penambahan skor beban beban kerja (Load/Force Score 0 hingga 3 berdasarkan berat objek yang diangkat).</li>
    <li><strong>Matriks Skor Akhir RULA:</strong>
        <ul>
            <li><strong>Skor 1 - 2:</strong> Postur kerja dapat diterima (Acceptable Posture) jika tidak diulang berkepanjangan.</li>
            <li><strong>Skor 3 - 4:</strong> Diperlukan investigasi lanjutan, modifikasi mungkin diperlukan.</li>
            <li><strong>Skor 5 - 6:</strong> Diperlukan investigasi mendalam dan perubahan ergonomi dalam waktu dekat.</li>
            <li><strong>Skor 7:</strong> Postur berbahaya, diperlukan investigasi dan perubahan ergonomi rekayasa SEGERA (Immediate Action Required).</li>
        </ul>
    </li>
</ul>

<h3>B. Langkah Penilaian REBA (Fokus Seluruh Tubuh & Penanganan Manual)</h3>
<p>Metode REBA lebih komprehensif untuk pekerjaan dinamis dengan pergerakan seluruh tubuh, termasuk manual material handling, pemindahan pasien di rumah sakit, perbaikan mesin, dan pengangkatan beban berbobot berat:</p>
<ol>
    <li><strong>Grup A (Batang Tubuh, Leher, Kaki):</strong> Menganalisis postur tulang belakang lumbar, posisi lutut (menekuk 30-60° atau >60°), dan kestabilan kaki.</li>
    <li><strong>Grup B (Lengan Atas, Lengan Bawah, Pergelangan Tangan):</strong> Mengukur jangkauan tangan dan abduksi bahu.</li>
    <li><strong>Kopling Pegangan (Coupling Score):</strong> Memberikan nilai kualitas pegangan tangan (Good/pegangan pas, Fair/pegangan cukup namun tidak ideal, Poor/tanpa pegangan nyaman, Unacceptable/tidak aman).</li>
    <li><strong>Skor Akhir REBA (Level Aksi 0 sampai 4):</strong>
        <ul>
            <li><strong>Skor 1 (Level 0):</strong> Risiko dapat diabaikan.</li>
            <li><strong>Skor 2 - 3 (Level 1):</strong> Risiko rendah, modifikasi mungkin diperlukan.</li>
            <li><strong>Skor 4 - 7 (Level 2):</strong> Risiko sedang, investigasi dan perubahan diperlukan.</li>
            <li><strong>Skor 8 - 10 (Level 3):</strong> Risiko tinggi, implementasi perubahan rekayasa segera.</li>
            <li><strong>Skor 11 - 15 (Level 4):</strong> Risiko sangat tinggi, hentikan pekerjaan dan lakukan intervensi ergonomi seketika.</li>
        </ul>
    </li>
</ol>
<p>Keahlian melakukan audit REBA/RULA ini menjadikan perawat lulusan Hiperkes di {$regionName} mampu memberikan rekomendasi ilmiah kepada divisi HSE dan manajemen untuk meredesain stasiun kerja (ergonomic workstation redesign), menghemat miliaran rupiah biaya kompensasi kecelakaan dan cedera punggung (low back pain) pekerja.</p>";
    }


    private static function sectionKesehatanMentalFatigue(string $title, string $regionName): string
    {
        return "<h2>16. Manajemen Kelelahan Kerja (Fatigue Management), Keselamatan Shift Kerja & Kesehatan Jiwa Okupasi</h2>
<p>Kelelahan kerja (fatigue) dan gangguan psikososial kini menjadi salah satu pemicu utama insiden fatal (near-miss dan lost time injury) di sektor industri pertambangan, logistik transportasi darat/laut, petrokimia, dan manufaktur berintensitas tinggi di wilayah <strong>{$regionName}</strong>. Dalam pembinaan kurikulum <strong>{$title}</strong>, perawat Hiperkes dibekali metodologi ilmiah dalam menyelenggarakan surveilans kelelahan kerja serta skrining kesehatan mental berbasis komunitas industri.</p>

<h3>A. Mekanisme & Parameter Uji Kelelahan Kerja Obyektif</h3>
<p>Kelelahan kerja merupakan keadaan fisiologis dan psikologis terjadinya penurunan kapasitas fungsional tubuh akibat aktivitas fisik berkepanjangan, kurang tidur (sleep debt), atau beban mental yang berlebihan. Perawat klinik industri menggunakan instrumen diagnostik obyektif dan subyektif:</p>
<ul>
    <li><strong>Uji Waktu Reaksi (Reaction Timer / Psychomotor Vigilance Task):</strong> Mengukur kecepatan transmisi saraf sensorik ke motorik (dalam satuan milidetik) saat merespons stimulus visual atau audio. Waktu reaksi > 240 milidetik menunjukkan perlambatan refleks yang berisiko tinggi saat mengoperasikan alat berat atau mesin bergerak.</li>
    <li><strong>Uji Kedipan Mata (Flicker Fusion Test):</strong> Menilai frekuensi kritis fusi kedipan (critical flicker fusion frequency) pada mata sebagai indikator tingkat kejenuhan susunan saraf pusat (SSP).</li>
    <li><strong>Kuesioner Subyektif (Subjective Self-Rating Test):</strong> Kuesioner Kelelahan Kerja 30 Butir dari Industri Fatigue Research Committee (IFRC) Jepang yang mengevaluasi pelemahan kegiatan (gejala 1-10), pelemahan motivasi (gejala 11-20), dan gambaran fisik kelelahan (gejala 21-30).</li>
    <li><strong>Pemeriksaan Tingkat Kantuk (Epworth Sleepiness Scale / ESS):</strong> Skrining kecurigaan Obstructive Sleep Apnea (OSA) pada pengemudi dump truck tambang dan operator forklift bertubuh obesitas.</li>
</ul>

<h3>B. Skrining Stres Okupasi DASS-21 & Employee Assistance Program (EAP)</h3>
<p>Sesuai mandat Permenaker No. 5 Tahun 2018 Pasal 24 mengenai Pengukuran dan Pengendalian Faktor Psikososial di Tempat Kerja, perawat Hiperkes secara berkala melakukan asesmen kesehatan jiwa bagi pekerja shift malam, staf proyek terisolir, dan karyawan lini produksi:</p>
<ol>
    <li><strong>Skrining DASS-21:</strong> Menilai 21 butir pertanyaan skala depresi, kecemasan (anxiety), dan stres kerja untuk memetakan tingkat keparahan (Normal, Ringan, Sedang, Berat, Sangat Berat).</li>
    <li><strong>Pertolongan Pertama Psikologis (Psychological First Aid / PFA):</strong> Keterampilan mendengar aktif tanpa menghakimi, validasi emosi, dan de-eskalasi kecemasan akut bagi pekerja yang baru saja mengalami kecelakaan kerja atau trauma fisik di tempat kerja.</li>
    <li><strong>Employee Assistance Program (EAP):</strong> Klinik perusahaan menyediakan saluran konsultasi psikososial yang konfidensial, rujukan ke psikolog/psikiater konsultan, serta program relaksasi otot progresif dan mindfulness saat pergantian jam istirahat kerja.</li>
</ol>
<p>Integrasi program manajemen fatigue dan kesehatan mental ini membuktikan bahwa pelatihan Hiperkes Perawat menghasilkan tenaga paramedis yang modern, adaptif, dan mampu mengawal produktivitas manusia seutuhnya di era industri modern {$regionName}.</p>";
    }

}