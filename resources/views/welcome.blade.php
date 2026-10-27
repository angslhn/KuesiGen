<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="KuesiGen — buat kuesioner riset dalam hitungan menit. Tulis topik, atur parameter, lalu terima Google Form siap dibagikan.">

        <title>{{ config('app.name', 'KuesiGen') }}</title>

        @fonts

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/css/landing.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-latar text-teks antialiased">
        {{-- Bilah navigasi: logo, tautan utama, dan aksi masuk. --}}
        <header class="sticky top-0 z-40 bg-permukaan/85 backdrop-blur border-b border-garis">
            <nav class="container-landing flex h-16 items-center justify-between" aria-label="Navigasi utama">
                <a href="/" class="flex items-center gap-2" aria-label="KuesiGen — beranda">
                    <span class="grid h-9 w-9 place-items-center rounded-tombol bg-primer text-permukaan" aria-hidden="true">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 8h10M7 12h7M7 16h9"/>
                        </svg>
                    </span>
                    <span class="text-xl font-semibold text-primer">KuesiGen</span>
                </a>

                <div class="hidden items-center gap-8 lg:flex">
                    <a href="#fitur" class="text-[15px] font-medium text-teks-sekunder transition-colors hover:text-primer">Fitur</a>
                    <a href="#paket" class="text-[15px] font-medium text-teks-sekunder transition-colors hover:text-primer">Paket</a>
                    <a
                        href="{{ Route::has('login') ? route('login') : '#paket' }}"
                        class="text-[15px] font-medium text-teks-sekunder transition-colors hover:text-primer"
                    >Masuk</a>
                    <a
                        href="{{ Route::has('register') ? route('register') : '#paket' }}"
                        class="btn-generate text-[15px]"
                    >Mulai — gratis</a>
                </div>

                {{-- Tombol menu khusus layar kecil. --}}
                <button
                    type="button"
                    class="inline-flex h-10 w-10 items-center justify-center rounded-tombol text-teks-sekunder transition-colors hover:bg-nonaktif-latar lg:hidden"
                    aria-controls="nav-mobile"
                    aria-expanded="false"
                    data-nav-toggle
                >
                    <span class="sr-only">Buka menu navigasi</span>
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                        <path d="M4 7h16M4 12h16M4 17h16"/>
                    </svg>
                </button>
            </nav>

            <div id="nav-mobile" class="hidden border-t border-garis bg-permukaan lg:hidden" data-nav-menu>
                <div class="container-landing flex flex-col gap-1 py-4">
                    <a href="#fitur" class="rounded-tombol px-3 py-2.5 text-[15px] font-medium text-teks-sekunder transition-colors hover:bg-nonaktif-latar hover:text-teks">Fitur</a>
                    <a href="#paket" class="rounded-tombol px-3 py-2.5 text-[15px] font-medium text-teks-sekunder transition-colors hover:bg-nonaktif-latar hover:text-teks">Paket</a>
                    <a href="{{ Route::has('login') ? route('login') : '#paket' }}" class="rounded-tombol px-3 py-2.5 text-[15px] font-medium text-teks-sekunder transition-colors hover:bg-nonaktif-latar hover:text-teks">Masuk</a>
                    <a href="{{ Route::has('register') ? route('register') : '#paket' }}" class="btn-generate mt-2 w-full">Mulai — gratis</a>
                </div>
            </div>
        </header>

        <main>
            {{-- Bagian utama: judul, deskripsi singkat, dan aksi utama. --}}
            <section class="relative overflow-hidden bg-latar pt-16 pb-20 lg:pt-24 lg:pb-28">
                <div class="pointer-events-none absolute -top-24 right-0 h-[420px] w-[420px] rounded-full bg-premium/20 blur-3xl" aria-hidden="true"></div>
                <div class="pointer-events-none absolute -bottom-32 left-1/4 h-[420px] w-[420px] rounded-full bg-primer/10 blur-3xl" aria-hidden="true"></div>

                <div class="container-landing relative">
                    <div class="max-w-3xl">
                        <h1 class="animate-slide-up text-4xl font-semibold leading-tight text-teks lg:text-5xl lg:leading-[1.15]">
                            Buat kuesioner dalam hitungan menit.
                        </h1>
                        <p class="animate-slide-up mt-5 max-w-2xl text-lg font-medium text-teks-sekunder" style="animation-delay: 60ms">
                            Tulis topik, atur parameter, terima Google Form siap bagi — gratis untuk mulai.
                        </p>

                        <div class="animate-slide-up mt-9 flex flex-col gap-3 sm:flex-row sm:items-center" style="animation-delay: 120ms">
                            <a href="{{ Route::has('register') ? route('register') : '#paket' }}" class="btn-generate h-14 w-full sm:w-[280px] text-base">
                                Mulai — gratis
                            </a>
                            <a href="#paket" class="btn-sekunder h-14 w-full sm:w-[220px] text-base">
                                Lihat paket
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Bagian fitur: tiga keunggulan utama. --}}
            <section id="fitur" class="section-py bg-permukaan">
                <div class="container-landing">
                    <header class="max-w-2xl">
                        <h2 class="text-3xl font-semibold text-teks lg:text-4xl">Yang Anda dapatkan</h2>
                        <p class="mt-4 text-lg font-medium text-teks-sekunder">
                            Tiga hal yang membuat penyusunan kuesioner riset jadi jauh lebih cepat.
                        </p>
                    </header>

                    <div class="mt-14 grid gap-6 lg:grid-cols-3 lg:gap-8">
                        <article class="kartu-hover p-8">
                            <span class="grid h-11 w-11 place-items-center rounded-tombol bg-primer/10 text-primer" aria-hidden="true">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 3v2M12 19v2M5.6 5.6l1.4 1.4M17 17l1.4 1.4M3 12h2M19 12h2M5.6 18.4 7 17M17 7l1.4-1.4"/>
                                    <circle cx="12" cy="12" r="3.5"/>
                                </svg>
                            </span>
                            <h3 class="mt-6 text-lg font-semibold text-teks">Generate otomatis</h3>
                            <p class="mt-2 text-[15px] font-medium leading-relaxed text-teks-sekunder">
                                AI menyusun draf pertanyaan dari topik Anda.
                            </p>
                        </article>

                        <article class="kartu-hover p-8">
                            <span class="grid h-11 w-11 place-items-center rounded-tombol bg-primer/10 text-primer" aria-hidden="true">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 3h7v7M21 3l-9 9M10 5H6a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-4"/>
                                </svg>
                            </span>
                            <h3 class="mt-6 text-lg font-semibold text-teks">Google Form asli</h3>
                            <p class="mt-2 text-[15px] font-medium leading-relaxed text-teks-sekunder">
                                Hasil akhir langsung jadi form di Google Drive Anda.
                            </p>
                        </article>

                        <article class="kartu-hover p-8">
                            <span class="grid h-11 w-11 place-items-center rounded-tombol bg-premium/25 text-premium" aria-hidden="true">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 3.5 14.6 9l6 .9-4.3 4.2 1 6-5.3-2.8-5.3 2.8 1-6L3.4 9.9l6-.9z"/>
                                </svg>
                            </span>
                            <h3 class="mt-6 text-lg font-semibold text-teks">Siap riset (Premium)</h3>
                            <p class="mt-2 text-[15px] font-medium leading-relaxed text-teks-sekunder">
                                Variabel X–Y dan responden dummy sekali klik.
                            </p>
                        </article>
                    </div>
                </div>
            </section>

            {{-- Bagian paket: perbandingan paket Free dan Premium. --}}
            <section id="paket" class="section-py bg-latar">
                <div class="container-landing">
                    <header class="max-w-2xl">
                        <h2 class="text-3xl font-semibold text-teks lg:text-4xl">Pilih paket Anda</h2>
                        <p class="mt-4 text-lg font-medium text-teks-sekunder">
                            Mulai dari paket gratis. Naik ke Premium saat kebutuhan riset bertambah.
                        </p>
                    </header>

                    <div class="mt-14 grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <article class="kartu p-8">
                            <h3 class="text-xl font-semibold text-teks">Free</h3>
                            <p class="mt-2 text-[15px] font-medium text-teks-sekunder">
                                5 kuesioner gratis per bulan • maks 10 pertanyaan
                            </p>

                            <ul class="mt-7 space-y-3.5" role="list">
                                @foreach ([
                                    'Generate otomatis dari topik',
                                    'Ekspor ke Google Form',
                                    'Riwayat kuesioner',
                                    'Paket pertanyaan dasar',
                                ] as $manfaat)
                                    <li class="flex items-start gap-3">
                                        <span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-pil bg-sukses-garis text-sukses-teks" aria-hidden="true">
                                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m5 13 4 4L19 7"/>
                                            </svg>
                                        </span>
                                        <span class="text-[15px] font-medium text-teks-sekunder">{{ $manfaat }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <a href="{{ Route::has('register') ? route('register') : '#' }}" class="btn-sekunder mt-8 w-full">
                                Mulai gratis
                            </a>
                        </article>

                        <article class="kartu border-premium/60 bg-premium/10 p-8">
                            <div class="flex items-center justify-between gap-4">
                                <h3 class="text-xl font-semibold text-teks">Premium</h3>
                                <span class="rounded-pil bg-premium px-3 py-1 text-xs font-semibold text-teks">Populer</span>
                            </div>
                            <p class="mt-2 text-[15px] font-medium text-teks-sekunder">
                                Rp49rb/bulan • variabel penelitian &amp; responden dummy
                            </p>

                            <ul class="mt-7 space-y-3.5" role="list">
                                @foreach ([
                                    'Semua yang ada di paket Free',
                                    'Kuesioner dan pertanyaan tanpa batas',
                                    'Susun variabel penelitian (X–Y)',
                                    'Responden dummy sekali klik',
                                    'Progress bar kualitas instrumen',
                                ] as $manfaat)
                                    <li class="flex items-start gap-3">
                                        <span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-pil bg-sukses-garis text-sukses-teks" aria-hidden="true">
                                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m5 13 4 4L19 7"/>
                                            </svg>
                                        </span>
                                        <span class="text-[15px] font-medium text-teks-sekunder">{{ $manfaat }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <a href="{{ Route::has('register') ? route('register') : '#' }}" class="btn-premium mt-8 w-full">
                                Lihat detail
                            </a>
                        </article>
                    </div>
                </div>
            </section>

            {{-- Ajakan terakhir sebelum footer. --}}
            <section class="pb-20 lg:pb-28">
                <div class="container-landing">
                    <div class="kartu flex flex-col items-start justify-between gap-6 p-8 lg:flex-row lg:items-center lg:p-12">
                        <div class="max-w-2xl">
                            <h2 class="text-2xl font-semibold text-teks lg:text-3xl">Siap membuat kuesioner pertama Anda?</h2>
                            <p class="mt-3 text-[15px] font-medium text-teks-sekunder">
                                Tidak perlu kartu kredit. Buat akun, tulis topik, dan form siap dibagikan.
                            </p>
                        </div>
                        <a href="{{ Route::has('register') ? route('register') : '#' }}" class="btn-generate h-14 w-full shrink-0 lg:w-auto lg:px-8">
                            Mulai — gratis
                        </a>
                    </div>
                </div>
            </section>
        </main>

        <footer class="border-t border-garis bg-permukaan">
            <div class="container-landing flex flex-col gap-6 py-10 lg:flex-row lg:items-center lg:justify-between">
                <div class="flex items-center gap-2">
                    <span class="grid h-8 w-8 place-items-center rounded-tombol bg-primer text-permukaan" aria-hidden="true">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 8h10M7 12h7M7 16h9"/>
                        </svg>
                    </span>
                    <span class="text-base font-semibold text-teks">KuesiGen</span>
                </div>

                <nav class="flex flex-wrap items-center gap-x-6 gap-y-2" aria-label="Navigasi footer">
                    <a href="#fitur" class="text-[15px] font-medium text-teks-sekunder transition-colors hover:text-primer">Fitur</a>
                    <a href="#paket" class="text-[15px] font-medium text-teks-sekunder transition-colors hover:text-primer">Paket</a>
                    <a
                        href="{{ Route::has('login') ? route('login') : '#paket' }}"
                        class="text-[15px] font-medium text-teks-sekunder transition-colors hover:text-primer"
                    >Masuk</a>
                </nav>

                <p class="text-sm font-medium text-teks-sekunder">
                    &copy; {{ date('Y') }} KuesiGen. Seluruh hak cipta dilindungi.
                </p>
            </div>
        </footer>

        <script>
            // Mengatur buka-tutup menu navigasi pada layar kecil.
            document.addEventListener('DOMContentLoaded', () => {
                const toggle = document.querySelector('[data-nav-toggle]');
                const menu = document.querySelector('[data-nav-menu]');

                if (!toggle || !menu) {
                    return;
                }

                toggle.addEventListener('click', () => {
                    const terbuka = menu.classList.toggle('hidden');
                    toggle.setAttribute('aria-expanded', terbuka ? 'false' : 'true');
                });

                menu.querySelectorAll('a').forEach((tautan) => {
                    tautan.addEventListener('click', () => {
                        menu.classList.add('hidden');
                        toggle.setAttribute('aria-expanded', 'false');
                    });
                });
            });
        </script>
    </body>
</html>