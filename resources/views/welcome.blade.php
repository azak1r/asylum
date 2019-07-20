<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>The Geek Asylum - Landing</title>

        <meta name="description" content="Community website for The Geek Asylum gaming department.">
        <meta name="keywords" content="gaming, game, community, html, bootstrap, webpack">
        <meta name="author" content="Azak1r">

        <link rel="icon" type="image/png" href="assets/images/dark/icon.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href={{ URL::asset('css/youplay.css') }} rel="stylesheet">
    </head>
    <body>
        <section class="youplay-banner banner-top youplay-banner-parallax small">
    
            <div class="image" data-speed="0.4">
                <img src="assets/images/dark/banner-blog-bg.jpg" alt="" class="jarallax-img">
            </div>
        

            <div class="info">
                <div>
                    <div class="container">
                        
                        
                            <h1 class="h1">Blank Page</h1>
                        
                        
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="youplay-content container">
            <h2 class="mt-0">Title</h2>
            <p>
                Start your new page here...
            </p>
        </section>

        <footer class="youplay-footer youplay-footer-parallax">
    
        <div class="image" data-speed="0.4" data-img-position="50% 0%">
            <img src="assets/images/dark/footer-bg.jpg" alt="" class="jarallax-img">
        </div>
    

    <div class="wrapper">

        

        
            <!-- Social Buttons -->
            <div class="social">
                <div class="container">
                    <h3>Connect socially with <strong>The Geek Asylum</strong></h3>

                    <div class="social-icons">
                        <div class="social-icon">
                            <a href="https://discord.gg/wWUjvbJ">
                                <i class="fab fa-discord"></i>
                                <span>Join our Discord</span>
                            </a>
                        </div>
                        <div class="social-icon">
                            <a href="#">
                                <i class="fab fa-twitch"></i>
                                <span>Watch on Twitch</span>
                            </a>
                        </div>
                        <div class="social-icon">
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                                <span>Follow on Facebook</span>
                            </a>
                        </div>
                        <div class="social-icon">
                            <a href="#">
                                <i class="fab fa-twitter-square"></i>
                                <span>Follow on Twitter</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Social Buttons -->
        

        
            <!-- Copyright -->
            <div class="copyright">
                <div class="container">
                    <p>2019 &copy; <strong>Azak1r</strong>. All rights reserved</p>
                    <p><a href="https://themeforest.net/item/youplay-game-template-based-on-bootstrap/11306207?ref=_nK">Youplay</a> theme by <strong>Nk</strong></p>
                </div>
            </div>
            <!-- /Copyright -->
        
    </div>
</footer>

<script src={{ URL::asset('js/app.js') }}></script>
<script src={{ URL::asset('js/youplay.js') }}></script>

    </body>
</html>
