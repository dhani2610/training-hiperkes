@extends('layouts.front')

@section('title', 'Training Hiperkes Perawat | Pusat Sertifikasi Resmi Kemnaker RI & SKP PPNI')
@section('meta_description', 'Lembaga pelatihan dan sertifikasi resmi Hiperkes Perawat / Petugas Medis Perusahaan, Manajemen Klinik Kerja, Surveilans Medis, dan Ergonomi sesuai Permenaker No. 01/MEN/1979 dan Kemnaker RI.')

@section('content')

    <!-- HERO SLIDER SECTION (TANPA FOTO - MEDICAL & HYGIENE SURVEILLANCE HUD) -->
    <section class="gas-hero-wrapper" style="background: radial-gradient(circle at 80% 20%, rgba(16, 185, 129, 0.22) 0%, transparent 45%), radial-gradient(circle at 10% 80%, rgba(5, 150, 105, 0.25) 0%, transparent 50%), #06241b; color: #ffffff; padding: 60px 0 70px; position: relative; overflow: hidden;">
        <!-- Background Grid Pattern -->
        <div style="position: absolute; inset: 0; background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 36px 36px; pointer-events: none;"></div>

        <div class="container" style="position: relative; z-index: 2;">
            
            <!-- Hero Slider Container -->
            <div class="hero-slider-container" id="heroSlider" style="position: relative; min-height: 480px;">
                
                <!-- SLIDE 1: Hiperkes Perawat Kemnaker RI -->
                <div class="hero-slide active" data-slide="1" style="display: block; transition: all 0.5s ease;">
                    <div style="display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 40px; align-items: center;">
                        <div>
                            <div class="hero-badge" style="background: rgba(16, 185, 129, 0.18); border: 1px solid rgba(52, 211, 153, 0.45); color: #34d399; font-size: 0.78rem; font-weight: 800; padding: 6px 16px; border-radius: 30px; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 0.5px;">
                                <i class="bi bi-patch-check-fill"></i> Sertifikasi Wajib Kemnaker RI & SKP Terakreditasi PPNI
                            </div>

                            <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 18px; color: #ffffff; letter-spacing: -0.5px;">
                                Pusat Sertifikasi <span style="background: linear-gradient(135deg, #34d399 0%, #10b981 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Hiperkes Perawat</span> & Paramedis Industri
                            </h1>

                            <p style="font-size: 1.02rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 28px; max-width: 620px;">
                                Penuhi kualifikasi resmi tenaga paramedis perusahaan sesuai ketentuan <strong>Permenaker No. 01/MEN/1979</strong>. Kuasai surveilans kesehatan kerja (Audiometri, Spirometri), identifikasi bahaya lingkungan, ergonomi kerja, dan manajemen klinik perusahaan terstandar.
                            </p>

                            <div style="display: flex; flex-wrap: wrap; gap: 14px; margin-bottom: 32px;">
                                <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Admin Training Hiperkes, saya ingin konsultasi pendaftaran resmi sertifikasi Hiperkes Perawat Kemnaker RI.') }}" target="_blank" class="btn-primary-green" style="box-shadow: 0 4px 18px rgba(16, 185, 129, 0.45);">
                                    <i class="bi bi-whatsapp"></i> Hotline Utama: 0813-9981-0272
                                </a>
                                <a href="#program" class="btn-outline-white" style="border: 1px solid rgba(255,255,255,0.25); background: rgba(255,255,255,0.06);">
                                    <i class="bi bi-grid-fill"></i> 6 Program Pelatihan
                                </a>
                            </div>

                            <div style="display: flex; align-items: center; gap: 24px; color: #94a3b8; font-size: 0.85rem;">
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #34d399;"></i> SKP PPNI SATUSEHAT
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #34d399;"></i> Bimbingan Dokter Sp.Ok
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #34d399;"></i> Berlaku Seumur Hidup
                                </div>
                            </div>
                        </div>

                        <!-- SIMULATED MEDICAL OCCUPATIONAL HEALTH MONITOR HUD -->
                        <div>
                            <div style="background: linear-gradient(145deg, #0b3d2c 0%, #06241b 100%); border: 2px solid rgba(52, 211, 153, 0.35); border-radius: 20px; padding: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.45), inset 0 1px 0 rgba(255,255,255,0.1); position: relative;">
                                <!-- Top Status Bar -->
                                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.12); padding-bottom: 12px; margin-bottom: 18px;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <span style="display: inline-block; width: 10px; height: 10px; background: #10b981; border-radius: 50%; box-shadow: 0 0 8px #10b981;"></span>
                                        <span style="font-size: 0.76rem; font-weight: 800; letter-spacing: 1px; color: #34d399; text-transform: uppercase;">SURVEILANS MEDIS OKUPASI KEMNAKER</span>
                                    </div>
                                    <div style="font-size: 0.72rem; color: #94a3b8; font-family: monospace;">SKP: PPNI | MCU: FIT</div>
                                </div>

                                <!-- 4-TELEMETRY CLINICAL MATRIX -->
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 18px;">
                                    <!-- Audiometri -->
                                    <div style="background: rgba(0,0,0,0.35); border: 1px solid rgba(52, 211, 153, 0.2); border-radius: 12px; padding: 14px; text-align: center;">
                                        <div style="font-size: 0.72rem; font-weight: 700; color: #94a3b8; margin-bottom: 4px;">AUDIOMETRI (BISING)</div>
                                        <div style="font-size: 1.8rem; font-weight: 800; color: #34d399; font-family: monospace; line-height: 1;">15 <span style="font-size: 0.8rem;">dB</span></div>
                                        <div style="font-size: 0.65rem; color: #6ee7b7; margin-top: 6px; font-weight: 600;">AMBANG DENGAR: NORMAL</div>
                                    </div>

                                    <!-- Spirometri -->
                                    <div style="background: rgba(0,0,0,0.35); border: 1px solid rgba(52, 211, 153, 0.2); border-radius: 12px; padding: 14px; text-align: center;">
                                        <div style="font-size: 0.72rem; font-weight: 700; color: #94a3b8; margin-bottom: 4px;">SPIROMETRI (FAAL PARU)</div>
                                        <div style="font-size: 1.8rem; font-weight: 800; color: #38bdf8; font-family: monospace; line-height: 1;">96 <span style="font-size: 0.8rem;">% FVC</span></div>
                                        <div style="font-size: 0.65rem; color: #7dd3fc; margin-top: 6px; font-weight: 600;">PREDIKSI: NON-RESTRIKTIF</div>
                                    </div>

                                    <!-- Vital Signs -->
                                    <div style="background: rgba(0,0,0,0.35); border: 1px solid rgba(52, 211, 153, 0.2); border-radius: 12px; padding: 14px; text-align: center;">
                                        <div style="font-size: 0.72rem; font-weight: 700; color: #94a3b8; margin-bottom: 4px;">TANDA VITAL (TTV)</div>
                                        <div style="font-size: 1.8rem; font-weight: 800; color: #fbbf24; font-family: monospace; line-height: 1;">118/76 <span style="font-size: 0.75rem;">mmHg</span></div>
                                        <div style="font-size: 0.65rem; color: #fde68a; margin-top: 6px; font-weight: 600;">NADI 72 bpm | SpO2 99%</div>
                                    </div>

                                    <!-- Ergonomi Score -->
                                    <div style="background: rgba(0,0,0,0.35); border: 1px solid rgba(52, 211, 153, 0.2); border-radius: 12px; padding: 14px; text-align: center;">
                                        <div style="font-size: 0.72rem; font-weight: 700; color: #94a3b8; margin-bottom: 4px;">ASESMEN ERGONOMI</div>
                                        <div style="font-size: 1.8rem; font-weight: 800; color: #34d399; font-family: monospace; line-height: 1;">SKOR 2 <span style="font-size: 0.75rem;">REBA</span></div>
                                        <div style="font-size: 0.65rem; color: #6ee7b7; margin-top: 6px; font-weight: 600;">RISIKO RENDAH (DAPAT DITERIMA)</div>
                                    </div>
                                </div>

                                <!-- Bottom Status -->
                                <div style="background: rgba(255,255,255,0.05); border-radius: 8px; padding: 10px 14px; display: flex; justify-content: space-between; align-items: center; font-size: 0.72rem; color: #cbd5e1;">
                                    <span><i class="bi bi-shield-check text-success me-1"></i> Rekam Medis: Elektronik Terenkripsi</span>
                                    <span style="color: #6ee7b7; font-weight: 700;">STATUS: FIT TO WORK</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 2: Pencegahan PAK & Tanggap Darurat Trauma Medis -->
                <div class="hero-slide" data-slide="2" style="display: none; transition: all 0.5s ease;">
                    <div style="display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 40px; align-items: center;">
                        <div>
                            <div class="hero-badge" style="background: rgba(16, 185, 129, 0.18); border: 1px solid rgba(52, 211, 153, 0.45); color: #34d399; font-size: 0.78rem; font-weight: 800; padding: 6px 16px; border-radius: 30px; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 0.5px;">
                                <i class="bi bi-hospital"></i> Tata Kelola Klinik Kerja & Respon Gawat Darurat
                            </div>

                            <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 18px; color: #ffffff; letter-spacing: -0.5px;">
                                Standar Penanganan <span style="background: linear-gradient(135deg, #38bdf8 0%, #34d399 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Penyakit Akibat Kerja (PAK)</span> & Trauma Industri
                            </h1>

                            <p style="font-size: 1.02rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 28px; max-width: 620px;">
                                Pelajari 7 langkah diagnosis klinis okupasi, Basic Life Support (BLS) dengan AED, stabilisasi cedera tulang belakang di lokasi proyek, serta manajemen rujukan klaim Jaminan Kecelakaan Kerja (JKK) BPJS Ketenagakerjaan.
                            </p>

                            <div style="display: flex; flex-wrap: wrap; gap: 14px; margin-bottom: 32px;">
                                <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo CS Training Hiperkes, saya ingin konsultasi silabus materi dan jadwal batch terdekat.') }}" target="_blank" class="btn-primary-green" style="box-shadow: 0 4px 18px rgba(16, 185, 129, 0.45);">
                                    <i class="bi bi-whatsapp"></i> Chat WhatsApp 24 Jam
                                </a>
                                <a href="{{ route('about') }}" class="btn-outline-white" style="border: 1px solid rgba(255,255,255,0.25); background: rgba(255,255,255,0.06);">
                                    <i class="bi bi-info-circle"></i> Tentang Kami & Legalitas
                                </a>
                            </div>

                            <div style="display: flex; align-items: center; gap: 24px; color: #94a3b8; font-size: 0.85rem;">
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #38bdf8;"></i> Simulasi BLS & AED
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #38bdf8;"></i> Alur Klaim BPJS JKK
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #38bdf8;"></i> 35 SOP Klinik Kerja
                                </div>
                            </div>
                        </div>

                        <!-- EMERGENCY CLINIC HUD DISPLAY -->
                        <div>
                            <div style="background: linear-gradient(145deg, #062b35 0%, #041920 100%); border: 2px solid rgba(56, 189, 248, 0.4); border-radius: 20px; padding: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.45); position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.12); padding-bottom: 12px; margin-bottom: 18px;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <span style="display: inline-block; width: 10px; height: 10px; background: #38bdf8; border-radius: 50%; box-shadow: 0 0 8px #38bdf8;"></span>
                                        <span style="font-size: 0.76rem; font-weight: 800; letter-spacing: 1px; color: #38bdf8; text-transform: uppercase;">EMERGENCY RESPONSE PROTOCOL</span>
                                    </div>
                                    <div style="font-size: 0.72rem; color: #94a3b8; font-family: monospace;">TRIAGE: READY</div>
                                </div>

                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 18px;">
                                    <div style="background: rgba(0,0,0,0.35); border: 1px solid rgba(56, 189, 248, 0.2); border-radius: 12px; padding: 14px; text-align: center;">
                                        <div style="font-size: 0.72rem; font-weight: 700; color: #94a3b8; margin-bottom: 4px;">ALAT AED</div>
                                        <div style="font-size: 1.8rem; font-weight: 800; color: #38bdf8; font-family: monospace; line-height: 1;">READY <span style="font-size: 0.8rem;">ARMED</span></div>
                                        <div style="font-size: 0.65rem; color: #7dd3fc; margin-top: 6px; font-weight: 600;">SELF-TEST: 100% PASS</div>
                                    </div>

                                    <div style="background: rgba(0,0,0,0.35); border: 1px solid rgba(56, 189, 248, 0.2); border-radius: 12px; padding: 14px; text-align: center;">
                                        <div style="font-size: 0.72rem; font-weight: 700; color: #94a3b8; margin-bottom: 4px;">TERAPI OKSIGEN</div>
                                        <div style="font-size: 1.8rem; font-weight: 800; color: #34d399; font-family: monospace; line-height: 1;">15 <span style="font-size: 0.8rem;">L/MIN</span></div>
                                        <div style="font-size: 0.65rem; color: #6ee7b7; margin-top: 6px; font-weight: 600;">NON-REBREATHING MASK</div>
                                    </div>

                                    <div style="background: rgba(0,0,0,0.35); border: 1px solid rgba(56, 189, 248, 0.2); border-radius: 12px; padding: 14px; text-align: center;">
                                        <div style="font-size: 0.72rem; font-weight: 700; color: #94a3b8; margin-bottom: 4px;">KOTAK P3K (PERMENAKER 15/2008)</div>
                                        <div style="font-size: 1.8rem; font-weight: 800; color: #fbbf24; font-family: monospace; line-height: 1;">TIPE C <span style="font-size: 0.8rem;">LENGKAP</span></div>
                                        <div style="font-size: 0.65rem; color: #fde68a; margin-top: 6px; font-weight: 600;">KAPASITAS: 100 PEKERJA</div>
                                    </div>

                                    <div style="background: rgba(0,0,0,0.35); border: 1px solid rgba(56, 189, 248, 0.2); border-radius: 12px; padding: 14px; text-align: center;">
                                        <div style="font-size: 0.72rem; font-weight: 700; color: #94a3b8; margin-bottom: 4px;">RESPONSE TIME MEDEVAC</div>
                                        <div style="font-size: 1.8rem; font-weight: 800; color: #f87171; font-family: monospace; line-height: 1;">&lt; 3 <span style="font-size: 0.8rem;">MENIT</span></div>
                                        <div style="font-size: 0.65rem; color: #fca5a5; margin-top: 6px; font-weight: 600;">AMBULANS & IGD RS RUJUKAN</div>
                                    </div>
                                </div>

                                <div style="background: rgba(255,255,255,0.05); border-radius: 8px; padding: 10px 14px; display: flex; justify-content: space-between; align-items: center; font-size: 0.72rem; color: #cbd5e1;">
                                    <span><i class="bi bi-clock-history text-info me-1"></i> Golden Hour Period: Siaga 24 Jam</span>
                                    <span style="color: #7dd3fc; font-weight: 700;">SISTEM MEDIS: AKTIF</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Slider Controls: Prev/Next & Dots -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 32px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.08);">
                <div style="display: flex; gap: 8px;">
                    <button type="button" id="sliderPrevBtn" aria-label="Slide Sebelumnya" style="background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); color: #ffffff; width: 38px; height: 38px; border-radius: 8px; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.2s;">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button type="button" id="sliderNextBtn" aria-label="Slide Berikutnya" style="background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); color: #ffffff; width: 38px; height: 38px; border-radius: 8px; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.2s;">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>

                <div style="display: flex; gap: 8px;" id="sliderDots">
                    <span class="slider-dot active" data-slide="1" style="width: 24px; height: 6px; background: #10b981; border-radius: 3px; cursor: pointer; transition: all 0.2s;"></span>
                    <span class="slider-dot" data-slide="2" style="width: 8px; height: 6px; background: rgba(255,255,255,0.25); border-radius: 3px; cursor: pointer; transition: all 0.2s;"></span>
                </div>

                <div style="font-size: 0.8rem; color: #a7f3d0; font-family: monospace;">
                    <i class="bi bi-shield-check text-success"></i> Kemnaker RI & PPNI SKP Terverifikasi
                </div>
            </div>

        </div>
    </section>

    <!-- STATISTIK SECTION -->
    <section style="background: #ffffff; padding: 48px 0; border-bottom: 1px solid #e2e8f0;">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 24px;">
                @if(isset($statistics) && $statistics->count() > 0)
                    @foreach($statistics as $stat)
                        <div style="display: flex; align-items: center; gap: 16px; padding: 18px 22px; background: #f8fafc; border-radius: 12px; border: 1px solid #e2e8f0;">
                            <div style="width: 48px; height: 48px; background: #ecfdf5; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #059669; font-size: 1.4rem; flex-shrink: 0;">
                                <i class="{{ $stat->icon ?: 'bi bi-award-fill' }}"></i>
                            </div>
                            <div>
                                <div style="font-size: 1.65rem; font-weight: 800; color: #064e3b; line-height: 1.1;">{{ $stat->value }}</div>
                                <div style="font-size: 0.84rem; color: #64748b; font-weight: 600; margin-top: 4px;">{{ $stat->label }}</div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div style="display: flex; align-items: center; gap: 16px; padding: 18px 22px; background: #f8fafc; border-radius: 12px; border: 1px solid #e2e8f0;">
                        <div style="width: 48px; height: 48px; background: #ecfdf5; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #059669; font-size: 1.4rem;">
                            <i class="bi bi-person-badge-fill"></i>
                        </div>
                        <div>
                            <div style="font-size: 1.65rem; font-weight: 800; color: #064e3b;">12.850+</div>
                            <div style="font-size: 0.84rem; color: #64748b; font-weight: 600;">Perawat Tersertifikasi</div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- KEUNGGULAN SECTION (SLIDER CAROUSEL MODERN & KEREN) -->
    <section style="background: #f8fafc; padding: 75px 0; border-bottom: 1px solid #e2e8f0; position: relative;">
        <div class="container">
            <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 40px; flex-wrap: wrap; gap: 20px;">
                <div>
                    <span class="section-tag" style="background: #ecfdf5; color: #059669; border: 1px solid #a7f3d0; font-size: 0.78rem; font-weight: 800; padding: 4px 14px; border-radius: 20px; text-transform: uppercase;">
                        STANDAR MUTU PELATIHAN
                    </span>
                    <h2 style="font-size: 2rem; font-weight: 800; color: #0f172a; margin-top: 10px; line-height: 1.25;">
                        Keunggulan Pelatihan <span style="color: #059669;">Hiperkes Perawat</span> Kami
                    </h2>
                    <p style="color: #64748b; font-size: 0.96rem; margin-top: 6px; max-width: 600px;">
                        Mengapa lebih dari 12.800 perawat dan faskes industri mempercayakan sertifikasi resmi dan perpanjangan SKP kepada kami.
                    </p>
                </div>

                <!-- Keunggulan Carousel Controls -->
                <div style="display: flex; gap: 10px;">
                    <button type="button" id="keunggulanPrev" aria-label="Keunggulan Sebelumnya" style="background: #ffffff; border: 1px solid #cbd5e1; width: 44px; height: 44px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.1rem; color: #334155; cursor: pointer; transition: all 0.2s; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button type="button" id="keunggulanNext" aria-label="Keunggulan Berikutnya" style="background: #10b981; border: 1px solid #10b981; width: 44px; height: 44px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.1rem; color: #ffffff; cursor: pointer; transition: all 0.2s; box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>

            <!-- Carousel Wrapper -->
            <div id="keunggulanTrack" style="display: flex; gap: 24px; overflow-x: auto; scroll-behavior: smooth; scrollbar-width: none; -ms-overflow-style: none; padding-bottom: 15px;">
                
                <!-- Card 1 -->
                <div style="flex: 0 0 340px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 28px 24px; box-shadow: 0 4px 12px rgba(0,0,0,0.03); transition: all 0.25s ease;">
                    <div style="width: 52px; height: 52px; background: #ecfdf5; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #059669; font-size: 1.6rem; margin-bottom: 20px;">
                        <i class="bi bi-patch-check-fill"></i>
                    </div>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Sertifikasi Kemnaker & SKP PPNI</h3>
                    <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin: 0;">
                        Sertifikat resmi berlisensi Kementerian Ketenagakerjaan RI yang berlaku sah seumur hidup ditambah perolehan Satuan Kredit Profesi (SKP) resmi PPNI untuk perpanjangan STR perawat di SATUSEHAT.
                    </p>
                </div>

                <!-- Card 2 -->
                <div style="flex: 0 0 340px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 28px 24px; box-shadow: 0 4px 12px rgba(0,0,0,0.03); transition: all 0.25s ease;">
                    <div style="width: 52px; height: 52px; background: #ecfdf5; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #059669; font-size: 1.6rem; margin-bottom: 20px;">
                        <i class="bi bi-activity"></i>
                    </div>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Praktik Audiometri & Spirometri</h3>
                    <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin: 0;">
                        Peserta dibimbing langsung mengoperasikan instrumen audiometer nada murni, interpretasi kurva spirometer FVC/FEV1, sound level meter, dan luxmeter sesuai standar kedokteran okupasi modern.
                    </p>
                </div>

                <!-- Card 3 -->
                <div style="flex: 0 0 340px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 28px 24px; box-shadow: 0 4px 12px rgba(0,0,0,0.03); transition: all 0.25s ease;">
                    <div style="width: 52px; height: 52px; background: #ecfdf5; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #059669; font-size: 1.6rem; margin-bottom: 20px;">
                        <i class="bi bi-person-video3"></i>
                    </div>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Instruktur Dokter Spesialis Sp.Ok</h3>
                    <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin: 0;">
                        Materi dibawakan langsung oleh Dokter Spesialis Kedokteran Okupasi (Sp.Ok), Pengawas K3 Kemnaker RI, dan praktisi perawat kesehatan kerja senior dengan pengalaman lapangan lebih dari 15 tahun.
                    </p>
                </div>

                <!-- Card 4 -->
                <div style="flex: 0 0 340px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 28px 24px; box-shadow: 0 4px 12px rgba(0,0,0,0.03); transition: all 0.25s ease;">
                    <div style="width: 52px; height: 52px; background: #ecfdf5; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #059669; font-size: 1.6rem; margin-bottom: 20px;">
                        <i class="bi bi-file-earmark-medical"></i>
                    </div>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Paket 35 Template SOP Klinik</h3>
                    <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin: 0;">
                        Gratis paket dokumen siap pakai: 35 SOP klinik kerja, format laporan triwulan Disnaker, register pasien okupasi, formulir asesmen REBA/RULA, dan template evaluasi kalori kantin pabrik.
                    </p>
                </div>

                <!-- Card 5 -->
                <div style="flex: 0 0 340px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 28px 24px; box-shadow: 0 4px 12px rgba(0,0,0,0.03); transition: all 0.25s ease;">
                    <div style="width: 52px; height: 52px; background: #ecfdf5; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #059669; font-size: 1.6rem; margin-bottom: 20px;">
                        <i class="bi bi-laptop"></i>
                    </div>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Pilihan Blended & In-House</h3>
                    <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin: 0;">
                        Fleksibilitas metode belajar: Online Interactive Zoom Classroom yang hemat biaya operasional dinas, Tatap Muka di hotel berbintang, atau program In-House Training langsung di klinik korporasi.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- PROGRAM TRAINING SECTION (6 PROGRAM RESMI) -->
    <section id="program" style="padding: 80px 0; background: #ffffff;">
        <div class="container">
            <div style="text-align: center; max-width: 720px; margin: 0 auto 50px;">
                <span class="section-tag" style="background: #ecfdf5; color: #059669; border: 1px solid #a7f3d0; font-size: 0.78rem; font-weight: 800; padding: 4px 14px; border-radius: 20px; text-transform: uppercase;">
                    PROGRAM RESMI HIPERKES PERAWAT
                </span>
                <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-top: 12px; line-height: 1.25;">
                    6 Pilihan Program <span style="color: #059669;">Sertifikasi & Diklat Medis</span>
                </h2>
                <p style="color: #64748b; font-size: 0.98rem; margin-top: 8px;">
                    Kurikulum terstandar mengacu pada regulasi Kemnaker RI, standar akreditasi PPNI, dan praktik klinik kedokteran okupasi internasional.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 28px;">
                @foreach($programs as $prog)
                    <div class="program-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; display: flex; flex-direction: column; transition: all 0.25s ease; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
                        <div style="padding: 24px; border-bottom: 1px solid #f1f5f9; background: #fafafa;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                                <span style="background: #ecfdf5; color: #059669; font-size: 0.72rem; font-weight: 800; padding: 4px 10px; border-radius: 6px; border: 1px solid #a7f3d0; text-transform: uppercase;">
                                    {{ $prog['level_name'] ?? ($prog->level_name ?? 'Sertifikasi Kemnaker RI') }}
                                </span>
                                <span style="font-size: 0.75rem; color: #64748b; font-weight: 700;">
                                    <i class="bi bi-clock me-1 text-success"></i> {{ $prog['duration'] ?? ($prog->duration ?? '5 Hari') }}
                                </span>
                            </div>
                            <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; line-height: 1.35; margin: 0;">
                                <a href="{{ route('program.detail', $prog['slug'] ?? $prog->slug) }}" style="color: inherit; text-decoration: none;">
                                    {{ $prog['title'] ?? $prog->title }}
                                </a>
                            </h3>
                        </div>

                        <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 20px;">
                                {{ Str::limit($prog['short_description'] ?? ($prog->short_description ?? ''), 140) }}
                            </p>

                            <div style="display: flex; align-items: center; justify-content: space-between; padding-top: 16px; border-top: 1px solid #f1f5f9;">
                                <a href="{{ route('program.detail', $prog['slug'] ?? $prog->slug) }}" style="font-size: 0.85rem; font-weight: 700; color: #059669; display: inline-flex; align-items: center; gap: 6px; text-decoration: none;">
                                    Detail Silabus & Jadwal <i class="bi bi-arrow-right"></i>
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Admin Training Hiperkes, saya ingin konsultasi program ' . ($prog['title'] ?? $prog->title)) }}" target="_blank" style="width: 36px; height: 36px; background: #ecfdf5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #059669; font-size: 1.1rem; text-decoration: none;" title="Daftar via WhatsApp">
                                    <i class="bi bi-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- KREDIBILITAS & PENGALAMAN (DI BIKIN KEREN) -->
    <section style="background: linear-gradient(135deg, #06241b 0%, #0b3d2c 100%); color: #ffffff; padding: 80px 0; position: relative; overflow: hidden;">
        <div style="position: absolute; right: -50px; bottom: -50px; width: 350px; height: 350px; background: radial-gradient(circle, rgba(16,185,129,0.15) 0%, transparent 70%); pointer-events: none;"></div>

        <div class="container" style="position: relative; z-index: 2;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                <div>
                    <span style="background: rgba(16, 185, 129, 0.2); border: 1px solid rgba(52, 211, 153, 0.4); color: #34d399; font-size: 0.78rem; font-weight: 800; padding: 4px 14px; border-radius: 20px; text-transform: uppercase;">
                        KREDIBILITAS & REPUTASI NASIONAL
                    </span>
                    <h2 style="font-size: 2.3rem; font-weight: 800; line-height: 1.25; margin-top: 14px; margin-bottom: 20px; color: #ffffff;">
                        10+ Tahun Menjaga <span style="color: #34d399;">Kesehatan & Keselamatan</span> Tenaga Kerja Indonesia
                    </h2>
                    <p style="color: #cbd5e1; font-size: 0.98rem; line-height: 1.7; margin-bottom: 28px;">
                        Berdiri dengan dedikasi penuh pada pemenuhan norma K3 nasional, kami menjadi mitra strategis ribuan industri manufaktur, kontraktor tambang, dan rumah sakit dalam menyelenggarakan sertifikasi Hiperkes Perawat yang terakreditasi resmi Kemnaker RI dan diakui oleh PPNI Pusat.
                    </p>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 32px;">
                        <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); border-radius: 12px; padding: 18px;">
                            <div style="font-size: 1.8rem; font-weight: 800; color: #34d399; line-height: 1;">12.850+</div>
                            <div style="font-size: 0.82rem; color: #cbd5e1; margin-top: 6px;">Alumni Perawat Tersertifikasi</div>
                        </div>
                        <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); border-radius: 12px; padding: 18px;">
                            <div style="font-size: 1.8rem; font-weight: 800; color: #34d399; line-height: 1;">99.4%</div>
                            <div style="font-size: 0.82rem; color: #cbd5e1; margin-top: 6px;">Tingkat Kelulusan Evaluasi</div>
                        </div>
                    </div>

                    <div style="display: flex; gap: 14px;">
                        <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Admin Training Hiperkes, kami ingin konsultasi verifikasi sertifikat dan pendaftaran rombongan perusahaan.') }}" target="_blank" class="btn-primary-green">
                            <i class="bi bi-whatsapp"></i> Hubungi Tim Legalitas
                        </a>
                        <a href="{{ route('about') }}" class="btn-outline-white" style="border: 1px solid rgba(255,255,255,0.25); background: rgba(255,255,255,0.06);">
                            Lihat Profil Lengkap
                        </a>
                    </div>
                </div>

                <!-- Credential Badges & Accreditations -->
                <div style="display: flex; flex-direction: column; gap: 16px;">
                    <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(52, 211, 153, 0.25); border-radius: 14px; padding: 20px 22px; display: flex; align-items: center; gap: 18px;">
                        <div style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.25); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: #34d399; flex-shrink: 0;">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 1.05rem; font-weight: 700; color: #ffffff; margin-bottom: 4px;">Akreditasi Resmi Kemnaker RI</h4>
                            <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0; line-height: 1.5;">Penyelenggara PJK3 Bidang Pembinaan Higene Perusahaan & Kesehatan Kerja resmi yang terdaftar di Kementerian Ketenagakerjaan RI.</p>
                        </div>
                    </div>

                    <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(52, 211, 153, 0.25); border-radius: 14px; padding: 20px 22px; display: flex; align-items: center; gap: 18px;">
                        <div style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.25); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: #34d399; flex-shrink: 0;">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 1.05rem; font-weight: 700; color: #ffffff; margin-bottom: 4px;">Satuan Kredit Profesi (SKP) PPNI</h4>
                            <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0; line-height: 1.5;">Tiap peserta perawat memperoleh SKP resmi PPNI yang terintegrasi untuk perpanjangan Surat Tanda Registrasi (STR) tenaga kesehatan.</p>
                        </div>
                    </div>

                    <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(52, 211, 153, 0.25); border-radius: 14px; padding: 20px 22px; display: flex; align-items: center; gap: 18px;">
                        <div style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.25); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: #34d399; flex-shrink: 0;">
                            <i class="bi bi-patch-check"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 1.05rem; font-weight: 700; color: #ffffff; margin-bottom: 4px;">Sertifikasi ISO 45001 & ISO 9001</h4>
                            <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0; line-height: 1.5;">Tata kelola pelatihan dan kurikulum diklat kami memenuhi audit standar Sistem Manajemen Mutu dan Keselamatan Kerja Internasional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR PARTNER SECTION (HEALTHCARE & INDUSTRIAL PARTNERS) -->
    <section style="background: #ffffff; padding: 60px 0; border-bottom: 1px solid #e2e8f0;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 36px;">
                <span class="section-tag" style="background: #ecfdf5; color: #059669; border: 1px solid #a7f3d0; font-size: 0.76rem; font-weight: 800; padding: 3px 12px; border-radius: 20px; text-transform: uppercase;">
                    OUR TRUSTED PARTNERS
                </span>
                <h3 style="font-size: 1.6rem; font-weight: 800; color: #0f172a; margin-top: 8px;">
                    Dipercaya oleh Perusahaan & Fasilitas Kesehatan Ternama
                </h3>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 18px;">
                @if(isset($partners) && is_array($partners))
                    @foreach($partners as $p)
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 18px 20px; display: flex; align-items: center; gap: 14px; transition: all 0.2s ease;">
                            <div style="width: 42px; height: 42px; background: #ecfdf5; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #059669; font-size: 1.25rem; flex-shrink: 0;">
                                <i class="bi {{ $p['icon'] ?? 'bi-hospital' }}"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 0.92rem; font-weight: 800; color: #0f172a; margin: 0;">{{ $p['name'] }}</h4>
                                <span style="font-size: 0.75rem; color: #64748b; font-weight: 600;">{{ $p['category'] }}</span>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- ARTIKEL RESMI (DILIMIT 3 CARD) -->
    <section style="padding: 75px 0; background: #f8fafc;">
        <div class="container">
            <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 40px; flex-wrap: wrap; gap: 20px;">
                <div>
                    <span class="section-tag" style="background: #ecfdf5; color: #059669; border: 1px solid #a7f3d0; font-size: 0.78rem; font-weight: 800; padding: 4px 14px; border-radius: 20px; text-transform: uppercase;">
                        ARTIKEL & PANDUAN MEDIS
                    </span>
                    <h2 style="font-size: 2rem; font-weight: 800; color: #0f172a; margin-top: 10px; line-height: 1.25;">
                        Artikel Populer <span style="color: #059669;">Hiperkes Perawat</span>
                    </h2>
                    <p style="color: #64748b; font-size: 0.96rem; margin-top: 6px;">
                        Pembahasan regulasi, studi kasus kedokteran okupasi, dan pedoman teknis perawat klinik kerja.
                    </p>
                </div>

                <a href="{{ route('articles') }}" class="btn-primary-green" style="font-size: 0.85rem;">
                    Lihat Semua 200 Artikel <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 28px;">
                @foreach($articles as $art)
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; display: flex; flex-direction: column; transition: all 0.25s ease; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
                        <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                                <span style="background: #ecfdf5; color: #059669; font-size: 0.72rem; font-weight: 800; padding: 3px 10px; border-radius: 6px; text-transform: uppercase;">
                                    {{ $art->category ?? 'Hiperkes & Paramedis' }}
                                </span>
                                <span style="font-size: 0.75rem; color: #94a3b8;">
                                    <i class="bi bi-book me-1"></i> {{ $art->read_time ?? 35 }} mnt baca
                                </span>
                            </div>

                            <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; line-height: 1.4; margin-bottom: 12px;">
                                <a href="{{ route('article.detail', $art->slug) }}" style="color: inherit; text-decoration: none;">
                                    {{ $art->title }}
                                </a>
                            </h3>

                            <p style="font-size: 0.86rem; color: #64748b; line-height: 1.6; margin-bottom: 20px; flex-grow: 1;">
                                {{ Str::limit(strip_tags($art->excerpt ?: $art->content), 150) }}
                            </p>

                            <div style="display: flex; align-items: center; justify-content: space-between; padding-top: 14px; border-top: 1px solid #f1f5f9; font-size: 0.82rem;">
                                <span style="color: #64748b; font-weight: 600;">
                                    <i class="bi bi-person-circle text-success me-1"></i> {{ $art->author ?? 'Tim Medis Hiperkes' }}
                                </span>
                                <a href="{{ route('article.detail', $art->slug) }}" style="color: #059669; font-weight: 700; text-decoration: none;">
                                    Baca Lengkap &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- DIREKTORI 38 PROVINSI SECTION -->
    <section id="wilayah" style="padding: 75px 0; background: #ffffff; border-top: 1px solid #e2e8f0;">
        <div class="container">
            <div style="text-align: center; max-width: 720px; margin: 0 auto 40px;">
                <span class="section-tag" style="background: #ecfdf5; color: #059669; border: 1px solid #a7f3d0; font-size: 0.78rem; font-weight: 800; padding: 4px 14px; border-radius: 20px; text-transform: uppercase;">
                    JANGKAUAN 38 PROVINSI
                </span>
                <h2 style="font-size: 2rem; font-weight: 800; color: #0f172a; margin-top: 10px;">
                    Direktori Wilayah Pelatihan <span style="color: #059669;">Hiperkes Perawat</span>
                </h2>
                <p style="color: #64748b; font-size: 0.94rem; margin-top: 6px;">
                    Tersedia jadwal pelatihan dan 200 artikel panduan lengkap untuk setiap provinsi, kabupaten/kota, hingga kecamatan di seluruh Indonesia.
                </p>
            </div>

            <div class="provinces-grid">
                @foreach($provinces as $prov)
                    <a href="{{ route('wilayah.provinsi', $prov['slug']) }}" class="province-chip">
                        <span>{{ $prov['name'] }}</span>
                        <i class="bi bi-arrow-right-short text-success"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section style="padding: 75px 0; background: #f8fafc; border-top: 1px solid #e2e8f0;">
        <div class="container">
            <div style="text-align: center; max-width: 680px; margin: 0 auto 44px;">
                <span class="section-tag" style="background: #ecfdf5; color: #059669; border: 1px solid #a7f3d0; font-size: 0.78rem; font-weight: 800; padding: 4px 14px; border-radius: 20px; text-transform: uppercase;">
                    PERTANYAAN UMUM
                </span>
                <h2 style="font-size: 2rem; font-weight: 800; color: #0f172a; margin-top: 10px;">
                    Frequently Asked <span style="color: #059669;">Questions (FAQ)</span>
                </h2>
                <p style="color: #64748b; font-size: 0.94rem; margin-top: 6px;">
                    Jawaban seputar legalitas, syarat pendaftaran, SKP PPNI, dan pelaksanaan diklat Hiperkes Perawat.
                </p>
            </div>

            <div class="faq-list">
                @foreach($faqs as $faq)
                    <div class="faq-item">
                        <div class="faq-question" style="padding: 18px 22px; font-weight: 700; color: #0f172a; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                            <span>{{ $faq->question }}</span>
                            <i class="bi bi-chevron-down text-success"></i>
                        </div>
                        <div class="faq-answer" style="padding: 0 22px 18px; color: #64748b; font-size: 0.92rem; line-height: 1.7; display: none;">
                            {{ $faq->answer }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 4 WHATSAPP HOTLINES CARDS SECTION -->
    <section style="padding: 50px 0; background: #ffffff;">
        <div class="container">
            <div class="wa-hotlines-box" style="background: linear-gradient(135deg, #06241b 0%, #0b3d2c 100%);">
                <div class="wa-hotlines-header">
                    <h3>4 Layanan Konsultasi WhatsApp Resmi</h3>
                    <p>Terhubung langsung dengan tim pendaftaran, konsultan medis okupasi, dan divisi korporasi kami</p>
                </div>

                <div class="wa-hotlines-grid">
                    @foreach($waNumbers as $contact)
                        <a href="{{ $contact['url'] }}" target="_blank" class="wa-hotline-card {{ !empty($contact['is_primary']) ? 'border-primary-green' : '' }}">
                            <div class="wa-hotline-top">
                                <div class="wa-hotline-icon">
                                    <i class="bi {{ $contact['icon'] ?? 'bi-whatsapp' }}"></i>
                                </div>
                                <span class="wa-hotline-badge">{{ $contact['badge'] ?? 'Layanan Resmi' }}</span>
                            </div>
                            <div class="wa-hotline-title">{{ $contact['name'] ?? $contact['title'] }}</div>
                            <div class="wa-hotline-desc">{{ $contact['role'] ?? $contact['desc'] }}</div>
                            <div class="wa-hotline-phone">
                                <i class="bi bi-whatsapp"></i> {{ $contact['number'] }}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    // Hero Slider (Tanpa Foto)
    document.addEventListener('DOMContentLoaded', function() {
        let currentSlide = 1;
        const totalSlides = 2;
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.slider-dot');

        function showSlide(n) {
            slides.forEach(s => s.style.display = 'none');
            dots.forEach(d => {
                d.style.width = '8px';
                d.style.background = 'rgba(255,255,255,0.25)';
            });

            currentSlide = n > totalSlides ? 1 : (n < 1 ? totalSlides : n);

            const activeSlide = document.querySelector(`.hero-slide[data-slide="${currentSlide}"]`);
            const activeDot = document.querySelector(`.slider-dot[data-slide="${currentSlide}"]`);

            if (activeSlide) activeSlide.style.display = 'block';
            if (activeDot) {
                activeDot.style.width = '24px';
                activeDot.style.background = '#10b981';
            }
        }

        const nextBtn = document.getElementById('sliderNextBtn');
        const prevBtn = document.getElementById('sliderPrevBtn');

        if (nextBtn) nextBtn.addEventListener('click', () => showSlide(currentSlide + 1));
        if (prevBtn) prevBtn.addEventListener('click', () => showSlide(currentSlide - 1));

        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                const s = parseInt(this.getAttribute('data-slide'));
                showSlide(s);
            });
        });

        // Auto slide interval 7s
        setInterval(() => {
            showSlide(currentSlide + 1);
        }, 7000);

        // Keunggulan Slider Carousel
        const keunggulanTrack = document.getElementById('keunggulanTrack');
        const keunggulanNext = document.getElementById('keunggulanNext');
        const keunggulanPrev = document.getElementById('keunggulanPrev');

        if (keunggulanTrack && keunggulanNext && keunggulanPrev) {
            keunggulanNext.addEventListener('click', () => {
                keunggulanTrack.scrollBy({ left: 360, behavior: 'smooth' });
            });
            keunggulanPrev.addEventListener('click', () => {
                keunggulanTrack.scrollBy({ left: -360, behavior: 'smooth' });
            });
        }

        // FAQ Toggle
        document.querySelectorAll('.faq-question').forEach(q => {
            q.addEventListener('click', function() {
                const ans = this.nextElementSibling;
                const icon = this.querySelector('i');
                if (ans.style.display === 'block') {
                    ans.style.display = 'none';
                    if (icon) icon.className = 'bi bi-chevron-down text-success';
                } else {
                    ans.style.display = 'block';
                    if (icon) icon.className = 'bi bi-chevron-up text-success';
                }
            });
        });
    });
</script>
@endpush
