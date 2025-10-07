<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    
    <link rel="icon" href="{{ asset('asset/images/favicon.svg') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('asset/images/logo/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('asset/images/logo/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/images/logo/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('asset/images/logo/site.webmanifest') }}">

    <link href="{{ asset('asset/style.css') }}" rel="stylesheet">
</head>

<body x-data="{ page: 'signup', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'b eh': darkMode === true }">
    <!-- ===== Header Start ===== -->


    <!-- ===== Header End ===== -->

    <main>
        <!-- ===== SignUp Form Start ===== -->
        <section class="i pg fh rm ki xn vq gj qp gr hj rp hr">
            <!-- Bg Shapes -->
            <img src="{{ asset('asset/images/shape-06.svg') }}" alt="Shape" class="h j k" />
            <img src="{{ asset('asset/images/shape-03.svg') }}" alt="Shape" class="h l m" />
            <img src="{{ asset('asset/images/shape-17.svg') }}" alt="Shape" class="h n o" />
            <img src="{{ asset('asset/images/shape-18.svg') }}" alt="Shape" class="h p q" />

            <div class="animate_top bb af i va sg hh sm vk xm yi _n jp hi ao kp">
                <!-- Bg Border -->
                <span class="rc h r s zd/2 od zg gh"></span>
                <span class="rc h r q zd/2 od xg mh"></span>

                <div class="rj">
                    <h2 class="ek ck kk wm xb">Create an Account</h2>
                    <p>Lengkapi Form Di Bawah Ini</p>
                </div>

                <form class="sb" action="{{ route('proses_signup') }}" method="POST">
                    @csrf
                    <div class="wb">
                        <label class="rc kk wm vb" for="name">Nama Lengkap</label>
                        <input type="text" name="name" id="name" placeholder="Masukkan Nama Lengkap"
                            class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40" required />
                    </div>

                    <div class="wb">
                        <label class="rc kk wm vb" for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="example@gmail.com"
                            class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40" required />
                        @error('email')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="wb">
                        <label class="rc kk wm vb" for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="**************"
                            class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40" required />
                        @error('password')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="vd rj ek rc rg gh lk ml il _l gi hi" type="submit">
                        Sign Up
                    </button>

                    <p class="sj hk xj rj ob">
                        Sudah Punya Akun?
                        <a class="mk" href="{{ route('login') }}"> Sign In </a>
                    </p>
                </form>
            </div>
        </section>
        <!-- ===== SignUp Form End ===== -->
    </main>

    <!-- ====== Back To Top End ===== -->
    @include('sweetalert::alert')
    <script defer src="bundle.js"></script>
</body>

</html>
