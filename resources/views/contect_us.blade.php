<!DOCTYPE html>
<html lang="en" style="margin: 0px;">

<head>
    <meta charset="utf-8">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="منصة تطبيقات المترب موبايلي">
    <meta name="keywords" content="المترب موبايلي">
    <title>المترب موبايلي : تواصل معنا</title>
    <link rel="icon" href="{{url('images/app_logo.png')}}" type="image/icon type">
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/contect_us_style.css')}}">
    <link rel="stylesheet" href="{{url('css/header_style.css')}}">
    <link rel="stylesheet" href="{{url('css/responsive.css')}}"/>
    <link rel="stylesheet" href="{{url('css/style.css')}}"/>
    <link rel="stylesheet" type="text/css"
        href="{{url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css')}}" />
</head>

<body >
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
            <div class="contect_us_title">مواقع التواصل الاجتماعي</div>
            <div class="text_in_page text-center">
                <!-- قناتنا على التلجرام :<br> -->
                <div class="telegram_div mb-4">
                    <a href="{{url('https://t.me/mutarrebmobily')}}">قناتنا على التلجرام</a>
                </div>
                <!-- صفحتنا على الفيسبوك :<br> -->
                <div class="facebook_div">
                    <a href="{{url('https://www.facebook.com/almutarrebmobily')}}">صفحتنا على الفيسبوك</a>
                </div>
            </div>
            <video class="container text-center video_div rounded" width="720" height="540" controls>
                <source src="{{url('https://drive.google.com/file/d/1_KUtDal3jdZGgTnWezmQu2tMBLuGocTa/view?usp=share_link')}}" type="video/mp4">
                <source src="m{{url('ovie.ogg')}}" type="video/ogg">
                Your browser does not support the video tag.
            </video>
            <div class="contect_us_title">: للتواصل معنا</div>
            <div class="text_in_page">الدعم الفني : 777700004<br>
                عمليات النظام : 770480008<br>
                خدمة عملاء المترب موبايلي : 778080755<br>
            </div>
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