<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign In</title>
  <link rel="icon" href="favicon.ico">
  <link href="{{ asset('asset/style.css')}}" rel="stylesheet">
</head>

<body x-data="{ page: 'signin', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
  x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
  :class="{'b eh': darkMode === true}">
  <!-- ===== Header Start ===== -->
  
  <!-- ===== Header End ===== -->

  <main>
    <!-- ===== SignIn Form Start ===== -->
    <section class="i pg fh rm ki xn vq gj qp gr hj rp hr">
      <!-- Bg Shapes -->
      <img src="{{asset('asset/images/shape-06.svg')}}" alt="Shape" class="h j k" />
      <img src="{{asset('asset/images/shape-03.svg')}}" alt="Shape" class="h l m" />
      <img src="{{asset('asset/images/shape-17.svg')}}" alt="Shape" class="h n o" />
      <img src="{{asset('asset/images/shape-18.svg')}}" alt="Shape" class="h p q" />

      <div class="animate_top bb af i va sg hh sm vk xm yi _n jp hi ao kp">
        <!-- Bg Border -->
        <span class="rc h r s zd/2 od zg gh"></span>
        <span class="rc h r q zd/2 od xg mh"></span>

        <div class="rj">
          <h2 class="ek ck kk wm xb">Sign in to your Account</h2>
        </div>

        <!-- FORM LOGIN -->
        <form class="sb" action="{{ route('login') }}" method="POST">
          <!--@csrf-->
          <div class="wb">
            <label class="rc kk wm vb" for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="example@gmail.com"
              class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40" required />
          </div>

          <div class="wb">
            <label class="rc kk wm vb" for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="**************"
              class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40" required />
          </div>

          <button type="submit" class="vd rj ek rc rg gh lk ml il _l gi hi">
            Sign In
          </button>

          <p class="sj hk xj rj ob">
            Belum Punya Akun?
            <a class="mk" href="{{ url('/signup') }}"> Sign Up </a>
          </p>
        </form>
        <!-- END FORM LOGIN -->
      </div>
    </section>
    <!-- ===== SignIn Form End ===== -->
  </main>
  
  <script defer src="bundle.js"></script>
</body>

</html>
