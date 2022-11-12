<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" href="{{url('images/app_logo.png')}}" type="image/icon type">
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/contect_us_style.css')}}">
    <link rel="stylesheet" href="{{url('css/header_style.css')}}">
    <link rel="stylesheet" href="{{url('css/responsive.css')}}"/>
    <link rel="stylesheet" href="{{url('css/style.css')}}"/>
    <link rel="stylesheet" href="{{url('css/login_style.css')}}"/>
    <link rel="stylesheet" type="text/css"
        href="{{url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css')}}" />
</head>
<body>
    <div class="hero_area">
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="index.html">
                        <span class="font_gess">
                            المترب موبايلي
                        </span>
                    </a>

                    <div class="navbar-collapse" id="">
                        <div class="custom_menu-btn">
                            <button onclick="openNav()">
                                <span class="s-1"> </span>
                                <span class="s-2"> </span>
                                <span class="s-3"> </span>
                            </button>
                        </div>
                        <div id="myNav" class="overlay">
                            <div class="overlay-content">
                                <a href="{{url('')}}" class="font_gess">الصفحه الرئيسيه</a>
                                <a href="{{url('https://wa.me/777700004')}}" class="font_gess" target="_blank">الدعم الفني</a>
                                <a href="{{url('files/our_service.pdf')}}" target="_blank" class="font_gess">خدماتنا</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    <main class="container main_style shadow my-4">
        <form method="POST" action="{{ url('login') }}" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" id="email_id" >
                @error('email')
                    <div class="invalid-feedback">
                          {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" id="password">
                @error('password')
                    <div class="invalid-feedback">
                         {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
    </main>
    <footer>
        <section class="container-fluid footer_section">
            <p>
                &copy; 2022 All Rights Reserved for Mutarreb Mobily
            </p>
        </section>
    </footer>
</div>
<script src="{{url('js/header_page.js')}}"></script>
<script>
    function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width");
        document
            .querySelector(".custom_menu-btn")
            .classList.toggle("menu_btn-style");
    }
</script>
</body>
</html>