<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link href="assets/lity/lity.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>{{__('lang.title')}}</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body data-spy="scroll" data-target="#navbarLexar">

    <!-- loader -->
    <div class="loader_pre">
        <div id="loader"></div>

    </div>
    <!-- loader    -->
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light  navbar-transparent">
            <div class="container">
                <a class="navbar-brand" style="font-size: 35px; color: white;" href="#home">ItSystem.uz</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLexar" aria-controls="navbarLexar" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
                <div class="collapse navbar-collapse" id="navbarLexar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link active" href="#home">{{__('lang.home')}} <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#FEATURES">{{__('lang.about')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#PRODUCT">{{__('lang.product')}}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">{{__('lang.pricing')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#calculator">{{__('lang.calculator')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Team">{{__('lang.team')}}</a>
                        </li>                        
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="btn btn-primary btn-round" href="#get">{{__('lang.contact')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="hero bg-dark section " style="background-image: url(images/bg_01.png);" id="home">
        <div class="container text-center">
            <h1 class="text-white mb-4 f-50 ">{{__('lang.start_website')}}</h1>
            <p class="lead text-white mb-4">{{__('lang.website_des')}} <br> Bizga xabar bering </p>
            <div class="btn_hero mb-5">
                <a href="#" class="btn btn-primary btn-round mr-2">{{__('lang.order')}}</a>
                <a href="#pricing" class="btn btn-outline-primary btn-round ml-2">{{__('lang.see_price')}}</a>
            </div>
            <div class="home-desk">
                <div class="container">
                    <img 
                    style="
                        width: 80%;
                        background-image:url('/images/box_01.png');                        
                        background-size: 80% 80%;
                        background-repeat: no-repeat;
                        background-position: center;
                        
                    " 
                    src="images/home-desk.png" 
                    alt="" 
                    class="img-fluid mx-auto  d-block"
                    >
                </div>
            </div>
        </div>
    </div>
    <section class="section" id="FEATURES">
        <div class="container">
            <div class="row mb-30">
                <div class="col-md-10 offset-md-1">
                    <div class="srction_title text-center">
                        <h2 class="h1 font-weight-900 mb-0">Bizning <span class="text-primary">Xizmatdan</span> foydalanib siz...</h2>

                        <img src="images/line.png" alt="" class="img-fluid mx-auto my-3 d-block">
                        <p class="mb-0"> Eng qulay va arzon narxlarda,  sifatli websaytga ega bo'lasiz va bizning xizmatimizdan foydalanganingizga hech ham afsuslanmaysiz. Websaytingiz buyrtma bergan kuningzdan boshlab 1-6 kun ichida tayyor bo'ladi. Mijozlaringiz websaytga kirib o'ziga kerakli bo'lgan barcha ma'lumotlarni olishadi va saytdan mamnun bo'lishadi. Albatta!!!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mt-30">
                    <!-- Box -->
                    <div class="box bg-box text-center">
                        <!-- Icon -->
                        <div class="icon text-primary">
                            <i class="fa fa-plane-departure"></i>
                        </div>
                        <!-- Heading -->
                        <h3>
                            {{__('lang.web_design')}}
                        </h3>
                        <!-- Text -->
                        <p class="mb-0">
                        Veb-dizayn veb-saytlarni ishlab chiqarish va ularga xizmat ko'rsatishda turli xil ko'nikmalar va intizomlarni o'z ichiga oladi.
                        </p>
                    </div>
                    <!--End Box -->
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-30">
                    <!-- Box -->
                    <div class="box bg-box text-center">
                        <!-- Icon -->
                        <div class="icon text-primary">
                            <i class="fab fa-internet-explorer"></i>
                        </div>
                        <!-- Heading -->
                        <h3>
                            {{__('lang.Internet_Marketing')}}
                        </h3>
                        <!-- Text -->
                        <p class="mb-0">
                        Dasturiy ta'minot bu ma'lumotlardan qiymat olish uchun ilmiy usullar, jarayonlar, algoritmlar va tizimlardan foydalanadigan fanlararo sohadir.
                        </p>
                    </div>
                    <!--End Box -->
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-30">
                    <!-- Box -->
                    <div class="box bg-box text-center">
                        <!-- Icon -->
                        <div class="icon text-primary">
                            <i class="fa fa-pen-nib"></i>
                        </div>
                        <!-- Heading -->
                        <h3>
                            {{__('lang.Graphic_Design')}}
                        </h3>
                        <!-- Text -->
                        <p class="mb-0">
                        Grafik dizayn boshqa odamlar bilan muloqot qilishingizni yaxshilaydigan muhim vositadir. U fikrlaringizni samarali va chiroyli tarzda etkazishga xizmat qiladi.
                        </p>
                    </div>
                    <!--End Box -->
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-30">
                    <!-- Box -->
                    <div class="box bg-box text-center">
                        <!-- Icon -->
                        <div class="icon text-primary">
                            <i class="fa fa-bell"></i>
                        </div>
                        <!-- Heading -->
                        <h3>
                            {{__('lang.Advanced_Statistics')}}
                        </h3>
                        <!-- Text -->
                        <p class="mb-0">
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        </p>
                    </div>
                    <!--End Box -->
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-30">
                    <!-- Box -->
                    <div class="box bg-box text-center">
                        <!-- Icon -->
                        <div class="icon text-primary">
                            <i class="fa fa-sync"></i>
                        </div>
                        <!-- Heading -->
                        <h3>
                            {{__('lang.Social_Media_Support')}}
                        </h3>
                        <!-- Text -->
                        <p class="mb-0">
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        </p>
                    </div>
                    <!--End Box -->
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-30">
                    <!-- Box -->
                    <div class="box bg-box text-center">
                        <!-- Icon -->
                        <div class="icon text-primary">
                            <i class="fa fa-car"></i>
                        </div>
                        <!-- Heading -->
                        <h3>
                            {{__('lang.Videography')}}
                        </h3>
                        <!-- Text -->
                        <p class="mb-0">
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        </p>
                    </div>
                    <!--End Box -->
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>    
    <!-- Brand -->
    <!-- ====  Key features of the product  ==== -->
    <section class="section " id="PRODUCT">
        <div class="container">
            <div class="row mb-30">
                <div class="col-md-10 offset-md-1">
                    <div class="srction_title text-center">
                        <h2 class="h1 font-weight-900 mb-0"><span class="text-primary">{{__('lang.production')}}</span>{{__('lang.key_features')}}</h2>
                        <img src="images/line.png" alt="" class="img-fluid mx-auto my-3 d-block">
                        <p class="mb-0"> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                        </p>
                    </div>
                </div>
            </div>
            <!-- / .row -->
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 mt-30">
                    <img src="images/box_01.png" alt="" class="img-fluid d-block mx-auto">
                </div>
                <div class="col-lg-6 mt-30">
                    <!-- Box -->
                    <div class="box bg-box text-left mb-30">
                        <div class="media align-items-lg-center">
                            <!-- Icon -->
                            <div class="icon text-primary mb-0">
                                <i class="fa fa-book"></i>
                            </div>
                            <div class="media-body pl-4">
                                <!-- Heading -->
                                <h3>
                                   {{__('lang.Quality_Code')}}
                                </h3>
                                <!-- Text -->
                                <p class="mb-0">
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--End Box -->
                    <!-- Box -->
                    <div class="box bg-box text-left mb-30">
                        <div class="media align-items-lg-center">
                            <!-- Icon -->
                            <div class="icon text-primary mb-0">
                                <i class="fa fa-code"></i>
                            </div>
                            <div class="media-body pl-4">
                                <!-- Heading -->
                                <h3>
                                    {{__('lang.easy')}}
                                </h3>
                                <!-- Text -->
                                <p class="mb-0">
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--End Box -->
                    <!-- Box -->
                    <div class="box bg-box text-left mb-30">
                        <div class="media align-items-lg-center">
                            <!-- Icon -->
                            <div class="icon text-primary mb-0">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <div class="media-body pl-4">
                                <!-- Heading -->
                                <h3>
                                   {{__('lang.awesome')}}
                                </h3>
                                <!-- Text -->
                                <p class="mb-0">
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--End Box -->
                </div>
            </div>
            <!-- / .row -->
            <div class="row align-items-center">
                <div class="col-lg-6  mt-30">
                    <img src="images/box_02.png" alt="" class="img-fluid d-block mx-auto">
                </div>
                <div class="col-lg-6 mt-30">
                    <!-- Box -->
                    <div class="box bg-box text-left mb-30">
                        <div class="media align-items-lg-center">
                            <!-- Icon -->
                            <div class="icon text-primary mb-0">
                                <i class="fa fa-book"></i>
                            </div>
                            <div class="media-body pl-4">
                                <!-- Heading -->
                                <h3>
                                   {{__('lang.strategy')}}
                                </h3>
                                <!-- Text -->
                                <p class="mb-0">
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--End Box -->
                    <!-- Box -->
                    <div class="box bg-box text-left mb-30">
                        <div class="media align-items-lg-center">
                            <!-- Icon -->
                            <div class="icon text-primary mb-0">
                                <i class="fa fa-code"></i>
                            </div>
                            <div class="media-body pl-4">
                                <!-- Heading -->
                                <h3>
                                {{__('lang.awesome')}}
                                </h3>
                                <!-- Text -->
                                <p class="mb-0">
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--End Box -->
                    <!-- Box -->
                    <div class="box bg-box text-left">
                        <div class="media align-items-lg-center">
                            <!-- Icon -->
                            <div class="icon text-primary mb-0">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <div class="media-body pl-4">
                                <!-- Heading -->
                                <h3>
                                   {{__('lang.easy')}}
                                </h3>
                                <!-- Text -->
                                <p class="mb-0">
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--End Box -->
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>
    <!-- Key features of the product -->
    <!-- ==== Start Call Action  ==== -->
    <div class="section call_action" style="background-image: url(images/start_call_action.jpg);">
        <div class="container">
            <div class="row">
                <div class="text-center col-md-10 offset-md-1">
                    <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>
                        <div class="icon"><i class="fa fa-play"></i></div>
                    </a>
                    <!--          <a href="https://farm9.staticflickr.com/8642/16455005578_0fdfc6c3da_b.jpg" data-lity data-lity-desc="Photo of a flower">Image</a>
                  <a href="#inline" data-lity>Inline</a>
                  <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>iFrame Youtube</a>
                  <a href="//vimeo.com/1084537" data-lity>iFrame Vimeo</a>
                  <a href="//maps.google.com/maps?q=1600+Amphitheatre+Parkway,+Mountain+View,+CA" data-lity>Google Maps</a> -->
                    <h2 class="text-white h1 font-weight-900 mb-2">{{__('lang.video')}}</h2>
                    <p class="text-white mb-0"> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--===== What people say =====-->
    <section class="section">
        <div class="container">
            <div class="row mb-30">
                <div class="col-md-10 offset-md-1">
                    <div class="srction_title text-center">
                        <h2 class="h1 font-weight-900 mb-0"> {{__('lang.people')}} <span class="text-primary">{{__('lang.say')}}</span></h2>
                        <img src="images/line.png" alt="" class="img-fluid mx-auto my-3 d-block">
                        <p class="mb-0"> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                        </p>
                    </div>
                </div>
            </div>
            <!-- / .row -->
            <div class="what_say_sldier owl-carousel">
                <div class="item">
                    <div class="card bg-light">
                        <div class="card-body">
                            <p> I thought this app was one of the most valuable apps I’ve ever tried in my life. Loved it!

                            </p>
                            <p>
                                Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.Nesciunt tofu stumptown aliqua, retro cliche tempor, williamsburg
                                carles vegan helvetica.
                            </p>
                        </div>
                        <div class="card-footer border-0 bg-light">
                            <div class="media align-items-center">
                                <span class="blockquote_icon">“</span>
                                <div class="user_say">
                                    <img src="images/user_say.jpg" alt="say">
                                </div>
                                <div class="media-body pl-4">
                                    <h6 class="font-weight-bold mb-0">Shohruhbek</h6>
                                    <h6 class="mb-0"><small>works at Google</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card bg-light">
                        <div class="card-body">
                            <p> I thought this app was one of the most valuable apps I’ve ever tried in my life. Loved it!

                            </p>
                            <p>
                                Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.Nesciunt tofu stumptown aliqua, retro cliche tempor, williamsburg
                                carles vegan helvetica.
                            </p>
                        </div>
                        <div class="card-footer border-0 bg-light">
                            <div class="media align-items-center">
                                <span class="blockquote_icon">“</span>
                                <div class="user_say">
                                    <img src="images/user_say.jpg" alt="say">
                                </div>
                                <div class="media-body pl-4">
                                    <h6 class="font-weight-bold mb-0">Todd Quinto</h6>
                                    <h6 class="mb-0"><small>works at Google</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card bg-light">
                        <div class="card-body">
                            <p> I thought this app was one of the most valuable apps I’ve ever tried in my life. Loved it!

                            </p>
                            <p>
                                Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.Nesciunt tofu stumptown aliqua, retro cliche tempor, williamsburg
                                carles vegan helvetica.
                            </p>
                        </div>
                        <div class="card-footer border-0 bg-light">
                            <div class="media align-items-center">
                                <span class="blockquote_icon">“</span>
                                <div class="user_say">
                                    <img src="images/user_say.jpg" alt="say">
                                </div>
                                <div class="media-body pl-4">
                                    <h6 class="font-weight-bold mb-0">Todd Quinto</h6>
                                    <h6 class="mb-0"><small>works at Google</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card bg-light">
                        <div class="card-body">
                            <p> I thought this app was one of the most valuable apps I’ve ever tried in my life. Loved it!

                            </p>
                            <p>
                                Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.Nesciunt tofu stumptown aliqua, retro cliche tempor, williamsburg
                                carles vegan helvetica.
                            </p>
                        </div>
                        <div class="card-footer border-0 bg-light">
                            <div class="media align-items-center">
                                <span class="blockquote_icon">“</span>
                                <div class="user_say">
                                    <img src="images/user_say.jpg" alt="say">
                                </div>
                                <div class="media-body pl-4">
                                    <h6 class="font-weight-bold mb-0">Todd Quinto</h6>
                                    <h6 class="mb-0"><small>works at Google</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card bg-light">
                        <div class="card-body">
                            <p> I thought this app was one of the most valuable apps I’ve ever tried in my life. Loved it!

                            </p>
                            <p>
                                Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.Nesciunt tofu stumptown aliqua, retro cliche tempor, williamsburg
                                carles vegan helvetica.
                            </p>
                        </div>
                        <div class="card-footer border-0 bg-light">
                            <div class="media align-items-center">
                                <span class="blockquote_icon">“</span>
                                <div class="user_say">
                                    <img src="images/user_say.jpg" alt="say">
                                </div>
                                <div class="media-body pl-4">
                                    <h6 class="font-weight-bold mb-0">Todd Quinto</h6>
                                    <h6 class="mb-0"><small>works at Google</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / .container -->
    </section>
    <!-- Choose your pricing -->
    <section class="section pricing pb-0" id="pricing">
        <div class="bg_box" style="background-image: url(images/bg_02.jpg);"></div>
        <div class="container">
            <div class="row mb-30">
                <div class="col-md-10 offset-md-1">
                    <div class="srction_title text-center">
                        <h2 class="h1 font-weight-900 mb-0 text-white"> {{__('lang.pricing1')}}<span class="text-primary"> {{__('lang.choose')}}</span></h2>
                        <img src="images/line.png" alt="" class="img-fluid mx-auto my-3 d-block">
                    </div>
                </div>
            </div>
            <div class="pricing_slider owl-carousel">
                <div class="item">
                    <div class="card price_box">
                        <div class="card-header bg-transparent p-0 border-0">
                            <h2 class="text-primary">Oddiy vizitkali sayt</h2>
                            <h2 class="text-primary">Tayyorlash muddati: 3-5 kun</h2>
                            <h3 class="text-primary">2.400.000<br><sub><del style="color:red;">3.000.000</del></sub></h3>
                        </div>
                        <div class="card-body py-5 px-0">
                            <ul class="list-unstyled mb-0">
                                <li>Sahifalar soni: 1-4
                                    <li>Quyidagilardan biri: O'zbek tili, Rus tili, Ingliz tili</li>
                                    <li>Slayd shou</li>
                                    <li>Ijtimoiy tugmalar</li>
                                    <li>Aloqa uchun form</li>
                                    <li style="color:blue">Qo'shimcha funksiyalar qo'llash kelishilinadi</li>
                                    <li style="color:red">Sayt uchun hosting va domen bundan mustasno</li>
                                </ul>
                        </div>
                        <div class="card-footer border-top bg-transparent pb-0 pt-4">
                            <a href="" class="btn btn-outline-dark btn-round">{{__('lang.get_started')}}</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card price_box active">
                        <div class="card-header bg-transparent p-0 border-0">
                            <h2 class="text-primary">Standart vizitkali sayt</h2>
                            <h2 class="text-primary">Tayyorlash muddat: 4-6 kun</h2>
                            <h3 class="text-primary">4.700.000 <br> <sub><del style="color:red">5.000.000</del></sub></h3>
                        </div>
                        <div class="card-body py-5 px-0">
                            <ul class="list-unstyled mb-0">
                                <li>Sahifalar soni: 4-6
                                    <li>Sayt Tili: O'zbek tili, Rus tili, Ingliz tili</li>
                                    <li>Slaydshou</li>
                                    <li>Ijtimoiy tugmalar</li>
                                    <li>Aloqa uchun form</li>
                                    <li>Rasmlar galereyasi (20 tagacha)</li>
                                    <li>CMS kontentni boshqarish tizimi (Admin tizimidan: taxrirlash, sozlash, o'chirish)</li>
                                    <li>Saytga qilingan murojaatlar Telegram botga yoki kanalga kelib tushadi</li>
                                    <li style="color:blue">Qo'shimcha funksiyalar qo'llash kelishilinadi</li>
                                    <li style="color:red">Sayt uchun hosting va domen bundan mustasno</li>
                            </ul>
                        </div>
                        <div class="card-footer border-top bg-transparent pb-0 pt-4">
                            <a href="" class="btn btn-outline-dark btn-round">{{__('lang.get_started')}}</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card price_box">
                        <div class="card-header bg-transparent p-0 border-0">
                            <h2 class="text-primary">Maxsus vizitkali sayt</h2>
                            <h2 class="text-primary">Tayyorlash muddati: 10-12 kun</h2>
                            <h3 class="text-primary"> 9.000.000<sub> <del style="color:red">12.000.000</del></sub></h3>
                        </div>
                        <div class="card-body py-5 px-0">
                            <ul class="list-unstyled mb-0">
                                <li>Sahifalar soni: 10-20
                                    <li>Sayt Tili: O'zbek tili, Rus tili, Ingliz tili</li>
                                    <li>Slaydshou</li>
                                    <li>Ijtimoiy tugmalar</li>
                                    <li>Foydalanuvchilarni ro'yxatdan o'tkazish tizimi (mobil telefonlarga sms yuborish orqali)</li>
                                    <li>Qidiruv Tizimlariga ulash</li>
                                    <li>Saytning Statistika qismini yaratish</li>
                                    <li>Saytni to'lov tizimlariga ulash: (Click, Payme, Paynet)</li>
                                    <li>Rasmlar galereyasi (20 tagacha)</li>
                                    <li>CMS kontentni boshqarish tizimi (Admin tizimidan: taxrirlash, sozlash, o'chirish)</li>
                                    <li>Aloqa uchun form</li>
                                    <li>Saytga qilingan murojaatlar Telegram botga yoki kanalga kelib tushadi</li>
                                    <li style="color:blue">Qo'shimcha funksiyalar qo'llash kelishilinadi</li>
                                    <li style="color:green">Sayt uchun hosting va domen 1 yilga bepul beriladi</li>
                            </ul>
                        </div>
                        <div class="card-footer border-top bg-transparent pb-0 pt-4">
                            <a href="" class="btn btn-primary btn-round">{{__('lang.get_started')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-light" id="calculator">
        <div class="container">
            <div class="row mb-30">
                <div class="col-md-10 offset-md-1">
                    <div class="srction_title text-center">
                        <h2 class="h1 font-weight-900 mb-0"> {{__('lang.Our')}} <span class="text-primary">{{__('lang.Newsletter')}}</span></h2>
                        <img src="images/line.png" alt="" class="img-fluid mx-auto my-3 d-block">
                        <p class="mb-0"> Bizdagi eng so'nggi yangiliklarni kuzatib boring
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form>
                        <div class="form-group newsletter_input mb-0">
                            <input type="email" placeholder="{{__('lang.email')}}" class="form-control bg-white shadow-sm px-4 border-0">
                            <button class="btn btn-primary btn-round">{{__('lang.subscribe')}}<i class="fa fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team -->
    <section class="section" id="Team">
        <div class="container">
            <div class="row mb-30">
                <div class="col-md-10 offset-md-1">
                    <div class="srction_title text-center">
                        <h2 class="h1 font-weight-900 mb-0"> {{__('lang.our1')}} <span class="text-primary">{{__('lang.team')}}</span></h2>
                        <img src="images/line.png" alt="" class="img-fluid mx-auto my-3 d-block">
                        <p class="mb-0"> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                        </p>
                    </div>
                </div>
            </div>
            <!-- / .Team -->
            <div class="team_slider owl-carousel">
                <!-- / .col -->
                <div class="item mt-30">
                    <div class="card border-0 bg-transparent team-box">
                        <div class="card-header border-0 bg-transparent p-0">
                            <div class="team_img">
                                <img src="images/user_01.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold mb-3 h5">June Henry</h4>
                            <div class="social">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <button class="btn btn-dark">Mahsulot strategigi</button>
                        </div>
                    </div>
                </div>
                <!-- / .col -->
                <!-- / .col -->
                <div class="item mt-30">
                    <div class="card border-0 bg-transparent team-box">
                        <div class="card-header border-0 bg-transparent p-0">
                            <div class="team_img">
                                <img src="images/user_02.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold mb-3 h5">June Henry</h4>
                            <div class="social">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <button class="btn btn-dark">Product Strategist</button>
                        </div>
                    </div>
                </div>
                <!-- / .col -->
                <!-- / .col -->
                <div class="item mt-30">
                    <div class="card border-0 bg-transparent team-box">
                        <div class="card-header border-0 bg-transparent p-0">
                            <div class="team_img">
                                <img src="images/user_03.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold mb-3 h5">June Henry</h4>
                            <div class="social">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <button class="btn btn-dark">Product Strategist</button>
                        </div>
                    </div>
                </div>
                <!-- / .col -->
                <!-- / .col -->
                <div class="item mt-30">
                    <div class="card border-0 bg-transparent team-box">
                        <div class="card-header border-0 bg-transparent p-0">
                            <div class="team_img">
                                <img src="images/user_04.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold mb-3 h5">June Henry</h4>
                            <div class="social">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <button class="btn btn-dark">Product Strategist</button>
                        </div>
                    </div>
                </div>
                <!-- / .col -->
            </div>
        </div>
    </section>
    
    
    <!-- Our Map -->
    <section class="section pb-70" id="get">
        <div class="container">

            <div class="row align-items-center clearfix  mb-30">
                <div class="col-md-8 col-lg-8 col-xl-8 order-md-2">
                    <div class="form shadow p-4 p-md-5">
                        <form name="sentMessage" id="contactForm" method="post" novalidate>
                            <div class="row">
                                <div class="col-md-6 control-group">
                                    <label>{{__('lang.name')}}</label>
                                    <div class="form-group controls">
                                        <input type="text" class="form-control" placeholder="{{__('lang.name')}}" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6 control-group">
                                    <label>{{__('lang.main-email')}}</label>
                                    <div class="form-group controls">
                                        <input type="email" class="form-control" placeholder="{{__('lang.email')}}" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group controls">
                                        <label>{{__('lang.subject')}}</label>
                                        <input type="text" placeholder="{{__('lang.subject')}}" id="subject" class="form-control" required data-validation-required-message="Please enter your Subject.">
                                        <p class="help-block text-danger"></p>
                                    </div>

                                </div>
                                <div class="col-md-12 control-group">
                                    <div class="form-group controls">
                                        <label>{{__('lang.main-message')}}</label>
                                        <textarea rows="5" class="form-control" placeholder="{{__('lang.message')}}" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div id="success"></div>
                            <button type="submit" class="btn btn-primary w-100 py-3   btn-round">{{__('lang.send')}} <i class="fa fa-envelope ml-2"></i></button>
                        </form>

                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4 order-md-1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d112073.13027140532!2d77.0678784!3d28.621209599999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1570980811316!5m2!1sen!2sin" style="width: 100% ;border:0px;" height="584"
                        allowfullscreen=""></iframe>
                </div>

            </div>
            <div class="footer_top">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 mb-30">
                        <div class="contact_location shadow h-100  p-4 p-md-5">
                            <h3>{{__('lang.office')}}</h3>
                            <p>Palmer Gay <br>557-2026 Purus St.</p>
                            <ul class="location_info list-unstyled">
                                <li><i class="fa fa-location-arrow"></i>Watertown TN 07367</li>
                                <li><i class="fa fa-map-marker-alt"></i>{{__('lang.office-tash')}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 mb-30">
                        <div class="contact_location shadow h-100  p-4 p-md-5">
                            <h3>{{__('lang.contact')}}</h3>
                            <p>Biz bilan bo'g'laning va buyurtma berib <br> o'z vebsaytingizga ega bo'ling.</p>
                            <ul class="location_info  list-unstyled list-unstyled">
                                <li><a href=""><i class="fa fa-envelope"></i>akyprog@gmail.com</a></li>
                                <li><a href=""><i class="fa fa-phone-volume"></i>+998 (99) 000-53-03</a></li>
                                <li><a href=""><i class="fa fa-globe-africa"></i>www.richer.uz</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer_area bg-light">
        <div class="footer_bottom_area section pb-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Social Area -->
                    <div class="col-12">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"><i class="fab fa-pinterest"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin"><i class="fab fa-linkedin"></i></a>
                        </div>
                        <!-- Footer Menu Area -->
                        <div class="footer_menu">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#home">{{__('lang.home')}} <span class="sr-only">(current)</span></a>
                                </li>
                                <li>
                                    <a href="#FEATURES">{{__('lang.about')}}</a>
                                </li>
                                <li>
                                    <a href="#PRODUCT">{{__('lang.product')}}</a>
                                </li>

                                <li>
                                    <a href="#PRICING">{{__('lang.pricing')}}</a>
                                </li>
                                <li>
                                    <a href="#Team">{{__('lang.team')}}</a>
                                </li>
                                <li>
                                    <a href="#Newsletter">{{__('lang.calculator')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="assets/owlcarousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lity/lity.js"></script>
    <!--valid / working contact form js-->
    <script src="mail/contact_me.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/app.js"></script>
</body>

</html>