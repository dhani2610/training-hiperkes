<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Program;
use App\Models\Article;
use App\Models\Faq;
use App\Models\Statistic;
use App\Models\HeroSlide;
use App\Models\Testimonial;
use App\Models\ContactMessage;
use App\Services\RegionService;
use App\Services\HiperkesSchemeService;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    /**
     * Build dynamic main WhatsApp link
     */
    protected function getWaLink(?string $regionName = null, ?string $programName = null): string
    {
        $phone = Setting::get('whatsapp', '081399810272');
        $phone = preg_replace('/[^0-9]/', '', $phone);
        if (str_starts_with($phone, '0')) {
            $phone = '62' . substr($phone, 1);
        }

        $template = Setting::get('whatsapp_template', 'Halo Admin Utama Training Hiperkes, saya ingin konsultasi pendaftaran pelatihan Hiperkes Perawat / Petugas Medis Kemnaker RI & SKP PPNI untuk wilayah {region}. Mohon info jadwal terbaru dan persyaratannya.');
        
        $regionText = $regionName ?? 'Nasional';
        $programText = $programName ? " program {$programName}" : '';

        $message = str_replace(
            ['{region}', '{program}'],
            [$regionText, $programText],
            $template
        );

        return "https://api.whatsapp.com/send?phone={$phone}&text=" . urlencode($message);
    }

    /**
     * Get the 4 official WhatsApp hotlines
     * 1. 081399810272 (Main Hotline Utama - Highlighted)
     * 2. 08118500177
     * 3. 087894580806
     * 4. 087894580649
     */
    protected function get4WaHotlines(?string $regionName = null, ?string $programTitle = null): array
    {
        $regionText = $regionName ?: 'Indonesia';
        $progText = $programTitle ? " program {$programTitle}" : ' Pelatihan Hiperkes Perawat';

        $raw1 = Setting::get('whatsapp', '081399810272');
        $raw2 = Setting::get('whatsapp_detail_1', '08118500177');
        $raw3 = Setting::get('whatsapp_detail_3', '087894580806');
        $raw4 = Setting::get('whatsapp_detail_4', '087894580649');

        $format = function($num) {
            $n = preg_replace('/[^0-9]/', '', $num);
            return str_starts_with($n, '0') ? ('62' . substr($n, 1)) : $n;
        };

        return [
            [
                'number' => $raw1,
                'name' => 'Hotline Utama (Pendaftaran & SKP PPNI)',
                'title' => 'Hotline Utama (Pendaftaran & SKP PPNI)',
                'badge' => 'Utama (24/7)',
                'role' => 'Pendaftaran Resmi Kemnaker RI & PPNI SKP',
                'desc' => 'Pendaftaran Resmi Kemnaker RI & PPNI SKP',
                'is_primary' => true,
                'icon' => 'bi-patch-check-fill',
                'url' => 'https://api.whatsapp.com/send?phone=' . $format($raw1) . '&text=' . urlencode("Halo Admin Utama Training Hiperkes, saya ingin konsultasi pendaftaran resmi dan sertifikasi Hiperkes Perawat / Petugas Medis Kemnaker RI untuk wilayah {$regionText}{$progText}.")
            ],
            [
                'number' => $raw2,
                'name' => 'CS 1 (Jadwal & Kuota Batch)',
                'title' => 'CS 1 (Jadwal & Kuota Batch)',
                'badge' => 'Fast Response',
                'role' => 'Informasi Jadwal Blended / Offline & Kuota',
                'desc' => 'Informasi Jadwal Blended / Offline & Kuota',
                'is_primary' => false,
                'icon' => 'bi-calendar2-check',
                'url' => 'https://api.whatsapp.com/send?phone=' . $format($raw2) . '&text=' . urlencode("Halo CS 1 Training Hiperkes, saya ingin menanyakan jadwal batch terdekat dan ketersediaan kuota kelas{$progText} di {$regionText}.")
            ],
            [
                'number' => $raw3,
                'name' => 'Konsultan Medis Okupasi & Silabus',
                'title' => 'Konsultan Medis Okupasi & Silabus',
                'badge' => 'Medical Advisor',
                'role' => 'Silabus Klinis, SOP Klinik & Asesmen Ergonomi',
                'desc' => 'Silabus Klinis, SOP Klinik & Asesmen Ergonomi',
                'is_primary' => false,
                'icon' => 'bi-clipboard2-pulse',
                'url' => 'https://api.whatsapp.com/send?phone=' . $format($raw3) . '&text=' . urlencode("Halo Konsultan Medis Training Hiperkes, saya ingin konsultasi mengenai silabus klinis, modul surveilans MCU, dan akreditasi faskes di {$regionText}.")
            ],
            [
                'number' => $raw4,
                'name' => 'Divisi In-House & Korporasi Perusahaan',
                'title' => 'Divisi In-House & Korporasi Perusahaan',
                'badge' => 'Corporate B2B',
                'role' => 'Pelatihan Massal Perawat Klinik Perusahaan',
                'desc' => 'Pelatihan Massal Perawat Klinik Perusahaan',
                'is_primary' => false,
                'icon' => 'bi-hospital',
                'url' => 'https://api.whatsapp.com/send?phone=' . $format($raw4) . '&text=' . urlencode("Halo Divisi Korporasi Training Hiperkes, kami ingin mengajukan penawaran In-House Training sertifikasi Hiperkes Perawat / Petugas Medis untuk perusahaan kami di wilayah {$regionText}.")
            ],
        ];
    }

    /**
     * 1. Beranda (Home)
     */
    public function index()
    {
        $programs = Program::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        if ($programs->isEmpty()) {
            $programs = collect(HiperkesSchemeService::getMasterPrograms());
        }

        $articles = Article::where('is_published', true)->orderBy('id', 'desc')->take(3)->get();
        $faqs = Faq::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        $statistics = Statistic::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        $heroSlides = HeroSlide::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        $testimonials = Testimonial::where('is_active', true)->orderBy('sort_order', 'asc')->get();

        $provinces = RegionService::getProvinces();
        $waLink = $this->getWaLink();
        $waNumbers = $this->get4WaHotlines('Nasional');

        // Healthcare & Industrial Partners
        $partners = [
            ['name' => 'RSUP Nasional Dr. Cipto Mangunkusumo', 'category' => 'Rumah Sakit Rujukan Nasional', 'icon' => 'bi-hospital'],
            ['name' => 'Siloam Hospitals Group', 'category' => 'Jaringan Layanan Kesehatan Swasta', 'icon' => 'bi-heart-pulse-fill'],
            ['name' => 'PT Kimia Farma Tbk', 'category' => 'Industri Farmasi & Klinik BUMN', 'icon' => 'bi-capsule'],
            ['name' => 'PT Kalbe Farma Tbk', 'category' => 'Manufaktur Produk Kesehatan', 'icon' => 'bi-prescription2'],
            ['name' => 'PT Bio Farma (Persero)', 'category' => 'Vaksin & Bioteknologi Nasional', 'icon' => 'bi-shield-plus'],
            ['name' => 'PT Pertamina Hulu Energi', 'category' => 'Kesehatan Kerja Sektor Migas', 'icon' => 'bi-droplet-half'],
            ['name' => 'PT Freeport Indonesia', 'category' => 'Klinik Tambang & Remote Area', 'icon' => 'bi-gem'],
            ['name' => 'PT Unilever Indonesia Tbk', 'category' => 'K3 Manufaktur & Ergonomi Kerja', 'icon' => 'bi-buildings']
        ];

        return view('front.index', compact(
            'programs',
            'articles',
            'faqs',
            'statistics',
            'heroSlides',
            'testimonials',
            'provinces',
            'waLink',
            'waNumbers',
            'partners'
        ));
    }

    /**
     * 2. Tentang Kami (Sejarah, Visi, Misi)
     */
    public function about()
    {
        $programs = Program::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        $statistics = Statistic::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        $provinces = RegionService::getProvinces();
        $waLink = $this->getWaLink('Tentang Kami');
        $waNumbers = $this->get4WaHotlines('Tentang Kami');

        return view('front.about', compact('programs', 'statistics', 'provinces', 'waLink', 'waNumbers'));
    }

    /**
     * 3. Program List & Detail
     */
    public function programs()
    {
        $programs = Program::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        if ($programs->isEmpty()) {
            $programs = collect(HiperkesSchemeService::getMasterPrograms());
        }
        $provinces = RegionService::getProvinces();
        $waLink = $this->getWaLink();
        $waNumbers = $this->get4WaHotlines('Nasional');

        return view('front.programs', compact('programs', 'provinces', 'waLink', 'waNumbers'));
    }

    public function programDetail($slug)
    {
        $program = Program::where('slug', $slug)->first();
        if (!$program) {
            $all = HiperkesSchemeService::getMasterPrograms();
            $found = null;
            foreach ($all as $p) {
                if ($p['slug'] === $slug) {
                    $found = $p;
                    break;
                }
            }
            if (!$found) {
                abort(404, 'Program Pelatihan Hiperkes tidak ditemukan.');
            }
            $program = (object) $found;
        }

        $otherPrograms = Program::where('slug', '!=', $slug)->where('is_active', true)->get();
        $provinces = RegionService::getProvinces();
        $waLink = $this->getWaLink('Nasional', $program->title);
        $waNumbers = $this->get4WaHotlines('Nasional', $program->title);
        $faqs = Faq::where('is_active', true)->orderBy('sort_order', 'asc')->get();

        return view('front.program-detail', compact(
            'program',
            'otherPrograms',
            'provinces',
            'waLink',
            'waNumbers',
            'faqs'
        ));
    }

    /**
     * 4. Wilayah: Provinsi
     */
    public function wilayahProvinsi($slug)
    {
        $province = RegionService::findProvince($slug);
        if (!$province) {
            abort(404, 'Provinsi tidak ditemukan.');
        }

        $regionName = 'Provinsi ' . $province['name'];
        $regionalArticles = HiperkesSchemeService::getRegionalArticleList([
            'province' => $province['name'],
            'city' => '',
            'district' => ''
        ], 200);

        $programs = Program::where('is_active', true)->get();
        $waLink = $this->getWaLink($regionName);
        $waNumbers = $this->get4WaHotlines($regionName);
        $mapUrl = RegionService::getMapUrl($regionName);

        $articles = $regionalArticles;
        $mapsUrl = $mapUrl;
        return view('front.wilayah-provinsi', compact(
            'province',
            'articles',
            'regionalArticles',
            'programs',
            'waLink',
            'waNumbers',
            'mapUrl',
            'mapsUrl'
        ));
    }

    /**
     * 5. Wilayah: Kab/Kota
     */
    public function wilayahKabkot($provinceSlug, $kabkotSlug)
    {
        $kabkotData = RegionService::findKabkot($provinceSlug, $kabkotSlug);
        if (!$kabkotData) {
            abort(404, 'Kabupaten/Kota tidak ditemukan.');
        }

        $regionName = $kabkotData['name'] . ', ' . $kabkotData['province']['name'];
        $regionalArticles = HiperkesSchemeService::getRegionalArticleList([
            'province' => $kabkotData['province']['name'],
            'city' => $kabkotData['name'],
            'district' => ''
        ], 200);

        $programs = Program::where('is_active', true)->get();
        $waLink = $this->getWaLink($regionName);
        $waNumbers = $this->get4WaHotlines($regionName);
        $mapUrl = RegionService::getMapUrl($regionName);

        $province = $kabkotData['province'];
        $kabkotName = $kabkotData['name'];
        $articles = $regionalArticles;
        $mapsUrl = $mapUrl;
        $kecamatanList = $kabkotData['kecamatan'] ?? [];

        return view('front.wilayah-kabkot', compact(
            'kabkotData',
            'province',
            'kabkotName',
            'kabkotSlug',
            'kecamatanList',
            'articles',
            'regionalArticles',
            'programs',
            'waLink',
            'waNumbers',
            'mapUrl',
            'mapsUrl'
        ));
    }

    /**
     * 6. Wilayah: Kecamatan
     */
    public function wilayahKecamatan($provinceSlug, $kabkotSlug, $kecamatanSlug)
    {
        $kecamatanData = RegionService::findKecamatan($provinceSlug, $kabkotSlug, $kecamatanSlug);
        if (!$kecamatanData) {
            abort(404, 'Kecamatan tidak ditemukan.');
        }

        $regionName = 'Kecamatan ' . $kecamatanData['name'] . ', ' . $kecamatanData['kabkot']['name'] . ', ' . $kecamatanData['province']['name'];
        $regionalArticles = HiperkesSchemeService::getRegionalArticleList([
            'province' => $kecamatanData['province']['name'],
            'city' => $kecamatanData['kabkot']['name'],
            'district' => 'Kecamatan ' . $kecamatanData['name']
        ], 200);

        $programs = Program::where('is_active', true)->get();
        $waLink = $this->getWaLink($regionName);
        $waNumbers = $this->get4WaHotlines($regionName);
        $mapUrl = RegionService::getMapUrl($regionName);

        return view('front.wilayah-kecamatan', compact(
            'kecamatanData',
            'regionalArticles',
            'programs',
            'waLink',
            'waNumbers',
            'mapUrl'
        ));
    }

    /**
     * 7. Program + Region Dynamic Route
     */
    public function programRegion($p1, $p2 = null, $p3 = null, $p4 = null)
    {
        $provinceSlug = null;
        $kabkotSlug = null;
        $kecamatanSlug = null;
        $programSlug = null;

        if ($p4 !== null) {
            // 4 parameters: province, kabkot, kecamatan, program
            $provinceSlug = $p1;
            $kabkotSlug = $p2;
            $kecamatanSlug = $p3;
            $programSlug = $p4;
        } elseif ($p3 !== null) {
            // 3 parameters: province, kabkot, program
            $provinceSlug = $p1;
            $kabkotSlug = $p2;
            $programSlug = $p3;
        } else {
            // 2 parameters: check whether $p1 is province or program
            if (RegionService::findProvince($p1)) {
                $provinceSlug = $p1;
                $programSlug = $p2;
            } else {
                $programSlug = $p1;
                $provinceSlug = $p2;
            }
        }

        $program = Program::where('slug', $programSlug)->first();
        if (!$program) {
            $all = HiperkesSchemeService::getMasterPrograms();
            foreach ($all as $p) {
                if ($p['slug'] === $programSlug) {
                    $program = $p;
                    break;
                }
            }
            if (!$program) {
                abort(404, 'Program tidak ditemukan: ' . $programSlug);
            }
        }

        $program = is_array($program) ? $program : (method_exists($program, 'toArray') ? $program->toArray() : (array) $program);

        $province = RegionService::findProvince($provinceSlug);
        if (!$province) {
            abort(404, 'Provinsi tidak ditemukan: ' . $provinceSlug);
        }

        $kabkotData = null;
        if ($kabkotSlug) {
            $kabkotData = RegionService::findKabkot($provinceSlug, $kabkotSlug);
        }

        $kecamatanData = null;
        if ($kabkotSlug && $kecamatanSlug) {
            $kecamatanData = RegionService::findKecamatan($provinceSlug, $kabkotSlug, $kecamatanSlug);
        }

        $regionContext = [
            'province' => $province['name'],
            'city' => $kabkotData ? $kabkotData['name'] : '',
            'district' => $kecamatanData ? ('Kecamatan ' . $kecamatanData['name']) : ''
        ];

        $regionName = trim(($regionContext['district'] ? $regionContext['district'] . ', ' : '') . ($regionContext['city'] ? $regionContext['city'] . ', ' : '') . $regionContext['province']);
        $regionalArticles = HiperkesSchemeService::getRegionalArticleList($regionContext, 200);

        $waLink = $this->getWaLink($regionName, $program['title']);
        $waNumbers = $this->get4WaHotlines($regionName, $program['title']);
        $mapUrl = RegionService::getMapUrl($regionName);

        $kabkotName = $kabkotData ? $kabkotData['name'] : '';
        $kabkotSlug = $kabkotData ? $kabkotData['slug'] : '';
        $kecamatanName = $kecamatanData ? $kecamatanData['name'] : '';
        $kecamatanList = $kabkotData ? ($kabkotData['kecamatan'] ?? []) : [];
        $articles = $regionalArticles;
        $mapsUrl = $mapUrl;

        return view('front.program-region-detail', compact(
            'program',
            'province',
            'kabkotData',
            'kabkotName',
            'kabkotSlug',
            'kecamatanName',
            'kecamatanList',
            'kecamatanData',
            'articles',
            'regionalArticles',
            'regionName',
            'waLink',
            'waNumbers',
            'mapUrl',
            'mapsUrl'
        ));
    }

    /**
     * 8. Artikel List & Detail
     */
    public function articles(Request $request)
    {
        $query = Article::where('is_published', true);
        if ($request->filled('q')) {
            $keyword = $request->q;
            $query->where(function($q) use ($keyword) {
                $q->where('title', 'like', "%{$keyword}%")
                  ->orWhere('excerpt', 'like', "%{$keyword}%");
            });
        }
        $articles = $query->orderBy('id', 'desc')->paginate(12)->withQueryString();

        // 200 topics list
        $allTopics = HiperkesSchemeService::getArticleTopics();
        $provinces = RegionService::getProvinces();
        $waLink = $this->getWaLink();
        $waNumbers = $this->get4WaHotlines('Artikel');

        return view('front.articles', compact('articles', 'allTopics', 'provinces', 'waLink', 'waNumbers'));
    }

    public function articleDetail(...$args)
    {
        $slug = end($args);
        $article = HiperkesSchemeService::getOrSynthesizeArticle($slug);
        if (!$article) {
            abort(404, 'Artikel panduan tidak ditemukan.');
        }

        $article = (object) $article;
        $relatedArticles = Article::where('slug', '!=', $slug)->take(4)->get();
        if ($relatedArticles->count() < 4) {
            $sampleTopics = array_slice(HiperkesSchemeService::getArticleTopics(), 0, 4, true);
            $rel = [];
            foreach ($sampleTopics as $id => $title) {
                $rel[] = (object) [
                    'title' => $title,
                    'slug' => Str::slug($title),
                    'category' => 'Training Hiperkes Perawat (Kemnaker & PPNI)',
                    'read_time' => 35,
                    'created_at' => date('d M Y')
                ];
            }
            $relatedArticles = collect($rel);
        }

        $programs = Program::where('is_active', true)->get();
        $waLink = $this->getWaLink('Artikel', $article->title);
        $waNumbers = $this->get4WaHotlines('Artikel', $article->title);

        return view('front.article-detail', compact('article', 'relatedArticles', 'programs', 'waLink', 'waNumbers'));
    }

    /**
     * 9. Kontak
     */
    public function contact()
    {
        $programs = Program::where('is_active', true)->get();
        $waLink = $this->getWaLink('Kontak');
        $waNumbers = $this->get4WaHotlines('Kontak');

        return view('front.contact', compact('programs', 'waLink', 'waNumbers'));
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email|max:150',
            'phone' => 'required|string|max:50',
            'company' => 'nullable|string|max:150',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string|max:3000',
        ]);

        ContactMessage::create($validated);

        return redirect()->back()->with('success', 'Pesan Anda telah berhasil terkirim. Tim pendaftaran Training Hiperkes akan segera menghubungi Anda melalui WhatsApp / Email.');
    }
}
