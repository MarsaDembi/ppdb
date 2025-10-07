<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PPDB PKBM Bela Warga</title>
    
    <link rel="icon" href="{{ asset('asset/images/favicon.svg') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('asset/images/logo/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('asset/images/logo/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/images/logo/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('asset/images/logo/site.webmanifest') }}">

    <link href="{{ asset('asset/style.css') }}" rel="stylesheet">
</head>
<script defer src="{{ asset('asset/bundle.js') }}"></script>

<body x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'b eh': darkMode === true }">
    <!-- ===== Header Start ===== -->
    <header class="g s r vd ya cj" :class="{ 'hh sm _k dj bl ll': stickyMenu }"
        @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false">
        <div class="bb ze ki xn 2xl:ud-px-0 oo wf yf i">
            <div class="vd to/4 tc wf yf">
                <a href="index.html">
                    <!-- Logo Light -->
                    <span
                        class="om text-3xl font-extrabold tracking-widest bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 bg-clip-text text-transparent drop-shadow-md">
                        PKBM <span class="text-white">Bela Warga</span>
                    </span>

                    <!-- Logo Dark -->
                    <span
                        class="xc nm text-3xl font-extrabold tracking-widest bg-gradient-to-r from-yellow-400 via-green-500 to-blue-500 bg-clip-text text-transparent drop-shadow-lg">
                        PKBM <span class="text-gray-200">Bela Warga</span>
                    </span>

                </a>

                <!-- Hamburger Toggle BTN -->
                <button class="po rc" @click="navigationOpen = !navigationOpen">
                    <span class="rc i pf re pd">
                        <span class="du-block h q vd yc">
                            <span class="rc i r s eh um tg te rd eb ml jl dl"
                                :class="{ 'ue el': !navigationOpen }"></span>
                            <span class="rc i r s eh um tg te rd eb ml jl fl"
                                :class="{ 'ue qr': !navigationOpen }"></span>
                            <span class="rc i r s eh um tg te rd eb ml jl gl"
                                :class="{ 'ue hl': !navigationOpen }"></span>
                        </span>
                        <span class="du-block h q vd yc lf">
                            <span class="rc eh um tg ml jl el h na r ve yc"
                                :class="{ 'sd dl': !navigationOpen }"></span>
                            <span class="rc eh um tg ml jl qr h s pa vd rd"
                                :class="{ 'sd rr': !navigationOpen }"></span>
                        </span>
                    </span>
                </button>
                <!-- Hamburger Toggle BTN -->
            </div>

            <div class="vd wo/4 sd qo f ho oo wf yf" :class="{ 'd hh rm sr td ud qg ug jc yh': navigationOpen }">
                <nav>
                    <ul class="tc _o sf yo cg ep">
                        <li><a href="#hero" class="xl" :class="{ 'mk': page === 'home' }">Home</a></li>
                        <li><a href="#program" class="xl">Program</a></li>
                        <li><a href="#tentangkami" class="xl">Tentang Kami</a></li>
                        <li><a href="#kontak" class="xl">Kontak</a></li>

                </nav>

                <div class="tc wf ig pb no">
                    <div class="pc h io pa ra" :class="navigationOpen ? '!-ud-visible' : 'd'">
                        <label class="rc ab i">
                            <input type="checkbox" :value="darkMode" @change="darkMode = !darkMode"
                                class="pf vd yc uk h r za ab" />
                            <!-- Icon Sun -->
                            <svg :class="{ 'wn': page === 'home', 'xh': page === 'home' && stickyMenu }"
                                class="th om" width="25" height="25" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.0908 18.6363C10.3549 18.6363 8.69 17.9467 7.46249 16.7192C6.23497 15.4916 5.54537 13.8268 5.54537 12.0908C5.54537 10.3549 6.23497 8.69 7.46249 7.46249C8.69 6.23497 10.3549 5.54537 12.0908 5.54537C13.8268 5.54537 15.4916 6.23497 16.7192 7.46249C17.9467 8.69 18.6363 10.3549 18.6363 12.0908C18.6363 13.8268 17.9467 15.4916 16.7192 16.7192C15.4916 17.9467 13.8268 18.6363 12.0908 18.6363ZM12.0908 16.4545C13.2481 16.4545 14.358 15.9947 15.1764 15.1764C15.9947 14.358 16.4545 13.2481 16.4545 12.0908C16.4545 10.9335 15.9947 9.8236 15.1764 9.00526C14.358 8.18692 13.2481 7.72718 12.0908 7.72718C10.9335 7.72718 9.8236 8.18692 9.00526 9.00526C8.18692 9.8236 7.72718 10.9335 7.72718 12.0908C7.72718 13.2481 8.18692 14.358 9.00526 15.1764C9.8236 15.9947 10.9335 16.4545 12.0908 16.4545ZM10.9999 0.0908203H13.1817V3.36355H10.9999V0.0908203ZM10.9999 20.8181H13.1817V24.0908H10.9999V20.8181ZM2.83446 4.377L4.377 2.83446L6.69082 5.14828L5.14828 6.69082L2.83446 4.37809V4.377ZM17.4908 19.0334L19.0334 17.4908L21.3472 19.8046L19.8046 21.3472L17.4908 19.0334ZM19.8046 2.83337L21.3472 4.377L19.0334 6.69082L17.4908 5.14828L19.8046 2.83446V2.83337ZM5.14828 17.4908L6.69082 19.0334L4.377 21.3472L2.83446 19.8046L5.14828 17.4908ZM24.0908 10.9999V13.1817H20.8181V10.9999H24.0908ZM3.36355 10.9999V13.1817H0.0908203V10.9999H3.36355Z"
                                    fill="" />
                            </svg>
                            <!-- Icon Sun -->
                            <img class="xc nm" src="{{ asset('asset/images/icon-moon.svg') }}" alt="Moon" />
                        </label>
                    </div>

                    <a href="/signin"
                        :class="{ 'nk yl': page === 'home', 'ok': page === 'home' && stickyMenu }"
                        class="ek pk xl">SignIn</a>
                    <a href="/signup"
                        :class="{ 'hh/[0.15]': page === 'home', 'sh': page === 'home' && stickyMenu }"
                        class="lk gh dk rg tc wf xf _l gi hi">SignUp</a>
                </div>
            </div>
        </div>
    </header>

    <!-- ===== Header End ===== -->

    <main>
        <!-- ===== Hero Start ===== -->
        <section id="hero" class="gj do ir hj sp jr i pg">
            <!-- Hero Images -->
            <div class="xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r">
                <img src="{{ asset('asset/images/shape-01.svg') }}" alt="shape"
                    class="xc 2xl:ud-block h t -ud-left-[10%] ua" />
                <img src="{{ asset('asset/images/shape-02.svg') }}" alt="shape" class="xc 2xl:ud-block h u p va" />
                <img src="{{ asset('asset/images/shape-03.svg') }}" alt="shape" class="xc 2xl:ud-block h v w va" />
                <img src="{{ asset('asset/images/shape-04.svg') }}" alt="shape" class="h q r" />
                <img src="{{ asset('asset/images/hero.png') }}" alt="PKBM Bela Warga" class="h q r ua" />
            </div>

            <!-- Hero Content -->
            <div class="bb ze ki xn 2xl:ud-px-0">
                <div class="tc _o">
                    <div class="animate_left jn/2">
                        <h1 class="fk vj zp or kk wm wb">
                            Selamat Datang di PKBM Bela Warga
                        </h1>
                        <p class="fq">
                            PKBM Bela Warga adalah Pusat Kegiatan Belajar Masyarakat yang hadir untuk
                            meningkatkan akses dan kualitas pendidikan nonformal. Kami menyediakan
                            program kesetaraan, kursus, dan pelatihan keterampilan guna mendukung
                            pemberdayaan dan kemandirian warga.
                        </p>

                        <div class="tc tf yo zf mb">
                            <a href="#program" class="ek jk lk gh gi hi rg ml il vc _d _l">
                                Lihat Program Kami
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== Hero End ===== -->


        <!-- ===== pilihan program ===== -->
        <section id="program" class="lj tp kr">
            <!-- Section Title Start -->
            <div x-data="{ sectionTitle: `Pilihan Program Pendidikan Kesetaraan`, sectionTitleText: `PKBM Bela Warga menyediakan layanan Paket A, Paket B, dan Paket C untuk membantu masyarakat menuntaskan pendidikan formal.` }">
                <div class="animate_top bb ze rj ki xn vq">
                    <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b"></h2>
                    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
                </div>
            </div>
            <!-- Section Title End -->

            <div class="bb ze ki xn yq mb en">
                <div class="wc qf pn xo ng">
                    <!-- Paket A -->
                    <div class="animate_top sg oi pi zq ml il am cn _m">
                        <img src="{{ asset('asset/images/icon-04.svg') }}" alt="Icon Paket A" />
                        <h4 class="ek zj kk wm nb _b">Paket A (Setara SD)</h4>
                        <p>Program pendidikan kesetaraan dasar bagi warga yang belum menyelesaikan sekolah dasar.</p>
                    </div>

                    <!-- Paket B -->
                    <div class="animate_top sg oi pi zq ml il am cn _m">
                        <img src="{{ asset('asset/images/icon-04.svg') }}" alt="Icon Paket B" />
                        <h4 class="ek zj kk wm nb _b">Paket B (Setara SMP)</h4>
                        <p>Pendidikan lanjutan untuk lulusan Paket A atau yang belum menempuh pendidikan menengah
                            pertama.</p>
                    </div>

                    <!-- Paket C -->
                    <div class="animate_top sg oi pi zq ml il am cn _m">
                        <img src="{{ asset('asset/images/icon-04.svg') }}" alt="Icon Paket C" />
                        <h4 class="ek zj kk wm nb _b">Paket C (Setara SMA)</h4>
                        <p>Kesempatan menyelesaikan pendidikan menengah atas, sebagai bekal melanjutkan studi atau
                            bekerja.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== pilihan program end ===== -->


        <!-- ===== about Start ===== -->

        <section id="tentangkami" class="ji gp uq 2xl:ud-py-35 pg">
            <div class="bb ze ki xn wq">
                <div class="tc wf gg qq">
                    <!-- About Images -->
                    <div class="animate_left xc gn gg jn/2 i">
                        <div>
                            <img src="images/shape-05.svg" alt="Shape" class="h -ud-left-5 x" />
                            <img src="images/about-01.png" alt="About" class="ib" />
                            <img src="images/about-02.png" alt="About" />
                        </div>
                        <div>
                            <img src="images/shape-06.svg" alt="Shape" />
                            <img src="images/about-03.png" alt="About" class="ob gb" />
                            <img src="images/shape-07.svg" alt="Shape" class="bb" />
                        </div>
                    </div>

                    <!-- About Content -->
                    <div class="animate_right jn/2">
                        <h4 class="ek yj mk gb">Profil PKBM Bela Warga</h4>
                        <h2 class="fk vj zp pr kk wm qb">Pusat Kegiatan Belajar Masyarakat untuk Pendidikan Kesetaraan
                        </h2>
                        <p class="uo">
                            PKBM Bela Warga hadir sebagai lembaga pendidikan nonformal yang berfokus pada layanan
                            kesetaraan Paket A, B, dan C.
                            Selain itu, PKBM ini juga menyelenggarakan berbagai program keterampilan dan pemberdayaan
                            masyarakat untuk mendukung peningkatan kualitas hidup warga.
                        </p>

                    </div>
                </div>
        </section>
        <section id="features" class="py-16 md:py-20 lg:py-24">
            <div class="bb ze ki yn 2xl:ud-px-12.5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Grid 4 elemen -->
                <div class="tc uf zo xf ap zf bp mq grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div
                        class="animate_top kn to/3 tc cg oq p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 transform hover:scale-[1.02]">
                        <div
                            class="tc wf xf cf ae cd rg mh flex items-center justify-center w-16 h-16 rounded-full mb-4 bg-blue-100 dark:bg-blue-900 mx-auto">
                            <img src="{{ asset('asset/images/icon-05.svg') }}" alt="Pendidikan Kesetaraan"
                                class="w-8 h-8" />
                        </div>
                        <div class="text-center">
                            <h4 class="ek yj go kk wm xb text-xl font-extrabold mb-2 text-blue-600 dark:text-blue-400">
                                Pendidikan Kesetaraan Lengkap</h4>
                            <p class="text-base text-gray-600 dark:text-gray-400 mt-3">Menyediakan Paket A, B, dan C
                                bagi masyarakat yang ingin menuntaskan pendidikan formal.</p>
                        </div>
                    </div>
                    <div
                        class="animate_top kn to/3 tc cg oq p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 transform hover:scale-[1.02]">
                        <div
                            class="tc wf xf cf ae cd rg nh flex items-center justify-center w-16 h-16 rounded-full mb-4 bg-green-100 dark:bg-green-900 mx-auto">
                            <img src="{{ asset('asset/images/icon-06.svg') }}" alt="Fleksibilitas"
                                class="w-8 h-8" />
                        </div>
                        <div class="text-center">
                            <h4
                                class="ek yj go kk wm xb text-xl font-extrabold mb-2 text-green-600 dark:text-green-400">
                                Waktu Belajar Fleksibel</h4>
                            <p class="text-base text-gray-600 dark:text-gray-400 mt-3">Disesuaikan dengan kebutuhan
                                peserta, cocok untuk pekerja, orang tua, maupun masyarakat umum.</p>
                        </div>
                    </div>

                    <div
                        class="animate_top kn to/3 tc cg oq p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 transform hover:scale-[1.02]">
                        <div
                            class="tc wf xf cf ae cd rg oh flex items-center justify-center w-16 h-16 rounded-full mb-4 bg-yellow-100 dark:bg-yellow-900 mx-auto">
                            <img src="{{ asset('asset/images/icon-04.svg') }}" alt="Inklusif" class="w-8 h-8" />
                        </div>
                        <div class="text-center">
                            <h4
                                class="ek yj go kk wm xb text-xl font-extrabold mb-2 text-yellow-600 dark:text-yellow-400">
                                Inklusif & Terjangkau</h4>
                            <p class="text-base text-gray-600 dark:text-gray-400 mt-3">Terbuka untuk semua kalangan
                                dengan biaya ramah masyarakat atau dukungan program pemerintah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== about End ===== -->

        <!-- ===== Contact Start ===== -->
        <section id="kontak" class="i pg fh rm ji gp uq">
            <!-- Bg Shapes -->
            <img src="{{ asset('asset/images/shape-06.svg') }}" alt="Shape" class="h aa y" />
            <img src="{{ asset('asset/images/shape-03.svg') }}" alt="Shape" class="h ca u" />
            <img src="{{ asset('asset/images/shape-07.svg') }}" alt="Shape" class="h w da ee" />
            <img src="{{ asset('asset/images/shape-12.svg') }}" alt="Shape" class="h p s" />
            <img src="{{ asset('asset/images/shape-13.svg') }}" alt="Shape" class="h r q" />

            <!-- Section Title Start -->
            <div x-data="{ sectionTitle: `Mari Mengenal PKBM Bela Warga`, sectionTitleText: `Hubungi Kami untuk Informasi Lebih Lanjut` }">
                <div class="animate_top bb ze rj ki xn vq">
                    <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
                    </h2>
                    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
                </div>
            </div>


            </div>
            <!-- Section Title End -->

            <div class="i va bb ye ki xn wq jb mo">
                <div class="tc uf sn tf rn un zf xl:gap-10">
                    <div class="animate_top w-full mn/5 to/3 vk sg hh sm yh rq i pg">
                        <!-- Bg Shapes -->
                        <img src="{{ asset('asset/images/shape-03.svg') }}" alt="Shape" class="h la x wd" />
                        <img src="{{ asset('asset/images/shape-06.svg') }}" alt="Shape" class="h la ma ne kf" />

                        <div class="fb">
                            <h4 class="wj kk wm cc">Email</h4>
                            <p><a href="#!">support@startup.com</a></p>
                        </div>
                        <div class="fb">
                            <h4 class="wj kk wm cc">alamat</h4>
                            <p>Jl. Yasaadi No. 5 RT 03 RW 1 Ds. Sukamanah Kec. Rancaekek Kab.Bandung 40394</p>
                        </div>
                        <div class="fb">
                            <h4 class="wj kk wm cc">No Telp</h4>
                            <p><a href="#!">+009 8754 3433 223</a></p>
                        </div>

                        <span class="rc nd rh tm lc fb"></span>


                    </div>

                    <div class="animate_top w-full nn/5 vo/3 vk sg hh sm yh tq">
                        <form>
                            <div class="tc sf yo ap zf ep qb">
                                <div class="vd to/2">
                                    <label class="rc ac" for="fullname">Nama</label>
                                    <input type="text" name="fullname" id="fullname" placeholder="Devid Wonder"
                                        class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                </div>

                                <div class="vd to/2">
                                    <label class="rc ac" for="email">Alamat</label>
                                    <input type="email" name="email" id="email"
                                        placeholder="example@gmail.com"
                                        class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                </div>
                            </div>

                            <div class="tc sf yo ap zf ep qb">
                                <div class="vd to/2">
                                    <label class="rc ac" for="phone">No Telp</label>
                                    <input type="text" name="phone" id="phone" placeholder="+009 3342 3432"
                                        class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                </div>

                                <div class="vd to/2">
                                    <label class="rc ac" for="subject">Subject</label>
                                    <input type="text" for="subject" id="subject"
                                        placeholder="Type your subject"
                                        class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                </div>
                            </div>

                            <div class="fb">
                                <label class="rc ac" for="message">Pesan</label>
                                <textarea placeholder="Message" rows="4" name="message" id="message"
                                    class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 ci"></textarea>
                            </div>

                            <div class="tc xf">
                                <button class="vc rg lk gh ml il hi gi _l">Kirim Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Contact End ===== -->


    </main>


    <!-- ====== Back To Top Start ===== -->
    <button class="xc wf xf ie ld vg sr gh tr g sa ta _a" @click="window.scrollTo({top: 0, behavior: 'smooth'})"
        @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false" :class="{ 'uc': scrollTop }">
        <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
                d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
        </svg>
    </button>

    <!-- ====== Back To Top End ===== -->

    <script>
        //  Pricing Table
        const setup = () => {
            return {
                isNavOpen: false,

                billPlan: 'monthly',

                plans: [{
                        name: 'Starter',
                        price: {
                            monthly: 29,
                            annually: 29 * 12 - 199,
                        },
                        features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                    },
                    {
                        name: 'Growth Plan',
                        price: {
                            monthly: 59,
                            annually: 59 * 12 - 100,
                        },
                        features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                    },
                    {
                        name: 'Business',
                        price: {
                            monthly: 139,
                            annually: 139 * 12 - 100,
                        },
                        features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                    },
                ],
            };
        };
    </script>
    <script defer src="{{ asset('asset/bundle.js') }}"></script>
</body>

</html>
