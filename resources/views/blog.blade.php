@extends('layouts.homelayouts')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Meblya</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="vendor/bootstrap-4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- js -->
    <script src="vendor/jquery-3.3.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="vendor/owl-carousel-2.3.4/owl.carousel.min.js"></script>
    <script src="vendor/nouislider-12.1.0/nouislider.min.js"></script>
    <script src="vendor/svg4everybody-2.1.9/svg4everybody.min.js"></script>
    <script>
        svg4everybody();
    </script>
    <!-- fontawesome -->
    <link rel="stylesheet" href="vendor/fontawesome-5.6.1/css/all.min.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-97489509-5');
    </script>
</head>

<body>
<div class="site__body">
                <!-- page -->
                <div class="page">
                    <!-- page__header -->
                    <div class="page__header">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <ol class="page__header-breadcrumbs breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Furniture</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Current Page</li>
                                    </ol>
                                    <h1 class="page__header-title decor-header decor-header--align--center">Latest News</h1></div>
                            </div>
                        </div>
                    </div>
                    <!-- page__header / end -->
                    <!-- page__body -->
                    <div class="page__body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-9">
                                    <div class="block">
                                        <div class="posts-view">
                                            <div class="posts-view__list posts-list posts-list--layout--grid-2">
                                                <div class="posts-list__item">
                                                    <div class="post-card post-card--layout--default">
                                                        <div class="post-card__image">
                                                            <a href="post1"><img srcset="images/posts/post1.jpg, images/posts/post1@2x.jpg 2x" src="images/posts/post1.jpg" alt=""></a>
                                                        </div>
                                                        <div class="post-card__info">
                                                            <div class="post-card__date">April 4, 2019</div>
                                                            <div class="post-card__name"><a class="post-card__name-link" href="post1">10 Tips Membeli Rumah Bagi Keluarga Muda</a></div>
                                                            <div class="post-card__description">Membeli rumah pasti terdapat dalam daftar prioritas para pasangan muda, yang baru menikah. Tapi tentu Anda tahu bila urusan membeli rumah, apalagi untuk pertama kali, bukanlah perkara mudah.</div><a href="post1" class="btn btn-primary btn-xs post-card__read-more">Read More</a></div>
                                                    </div>
                                                </div>
                                                <div class="posts-list__item">
                                                    <div class="post-card post-card--layout--default">
                                                        <div class="post-card__image">
                                                            <a href="post2"><img srcset="images/posts/post2.jpg, images/posts/post2@2x.jpg 2x" src="images/posts/post2.jpg" alt=""></a>
                                                        </div>
                                                        <div class="post-card__info">
                                                            <div class="post-card__date">April 1, 2018</div>
                                                            <div class="post-card__name"><a class="post-card__name-link" href="post2">6 Tips Cerdas Beli Apartemen yang Nyaman</a></div>
                                                            <div class="post-card__description">Bagi Anda yang tinggal di kawasan perkotaan atau bahkan pinggiran kota, memiliki hunian pribadi kerap menjadi hal yang sulit untuk diwujudkan. Selain harganya yang sangat tinggi.</div><a href="post2" class="btn btn-primary btn-xs post-card__read-more">Read More</a></div>
                                                    </div>
                                                </div>
                                                <div class="posts-list__item">
                                                    <div class="post-card post-card--layout--default">
                                                        <div class="post-card__image">
                                                            <a href="post3"><img srcset="images/posts/post3.jpg, images/posts/post3@2x.jpg 2x" src="images/posts/post3.jpg" alt=""></a>
                                                        </div>
                                                        <div class="post-card__info">
                                                            <div class="post-card__date">Maret 28, 2019</div>
                                                            <div class="post-card__name"><a class="post-card__name-link" href="post3">9 Tips Cara Membuat Taman Depan Rumah Sendiri</a></div>
                                                            <div class="post-card__description">Siap untuk menjajaki tips cara membuat taman depan rumah? Sudah yakin kalau kamu punya kemampuan dalam tata cara membuat taman depan rumah? Jangan cemas</div><a href="post3" class="btn btn-primary btn-xs post-card__read-more">Read More</a></div>
                                                    </div>
                                                </div>
                                                <div class="posts-list__item">
                                                    <div class="post-card post-card--layout--default">
                                                        <div class="post-card__image">
                                                            <a href="post4"><img srcset="images/posts/post4.jpg, images/posts/post4@2x.jpg 2x" src="images/posts/post4.jpg" alt=""></a>
                                                        </div>
                                                        <div class="post-card__info">
                                                            <div class="post-card__date">Maret 24, 2019</div>
                                                            <div class="post-card__name"><a class="post-card__name-link" href="post4">6 Tips Memilih Furniture Untuk Rumah Minimalis Paling Mudah dan Tepat</a></div>
                                                            <div class="post-card__description">Tips Memilih Furniture bisa menjadi panduan yang baik bagi anda apabila ingin membeli furniture. Perabot rumah atau biasanya disebut furniture</div><a href="post4" class="btn btn-primary btn-xs post-card__read-more">Read More</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="block">
                                        <aside class="sidebar">
                                            <!-- widget-social -->
                                            <div class="widget">
                                                <div class="widget-social">
                                                    <ul class="widget-social__list">
                                                        <li class="widget-social__item"><a class="widget-social__link widget-social__link--facebook" href="https://themeforest.net/user/kos9/portfolio" target="_blank"><i class="widget-social__icon fab fa-facebook-f"></i></a></li>
                                                        <li class="widget-social__item"><a class="widget-social__link widget-social__link--twitter" href="https://themeforest.net/user/kos9/portfolio" target="_blank"><i class="widget-social__icon fab fa-twitter"></i></a></li>
                                                        <li class="widget-social__item"><a class="widget-social__link widget-social__link--youtube" href="https://themeforest.net/user/kos9/portfolio" target="_blank"><i class="widget-social__icon fab fa-youtube"></i></a></li>
                                                        <li class="widget-social__item"><a class="widget-social__link widget-social__link--instagram" href="https://themeforest.net/user/kos9/portfolio" target="_blank"><i class="widget-social__icon fab fa-instagram"></i></a></li>
                                                        <li class="widget-social__item"><a class="widget-social__link widget-social__link--rss" href="https://themeforest.net/user/kos9/portfolio" target="_blank"><i class="widget-social__icon fas fa-rss"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- widget-social / end -->
                                            <!-- widget-about-blog -->
                                            <div class="widget widget--card">
                                                <div class="widget__title">
                                                    <h4 class="decor-header">About Blog</h4></div>
                                                <div class="widget__body">
                                                    <div class="widget-about-blog">Blog ini berisi tentang tips tips dalam properti semoga bermanfaat.</div>
                                                </div>
                                            </div>
                                            <!-- widget-about-blog / end -->
                                            <!-- widget-categories -->
                                            <div class="widget widget--card">
                                                <div class="widget__title">
                                                    <h4 class="decor-header">Categories</h4></div>
                                                <div class="widget__body">
                                                    <div class="widget-categories" data-collapse data-collapse-opened-class="widget-categories__item--opened">
                                                        <ul class="widget-categories__list">
                                                            <li class="widget-categories__item" data-collapse-item><a href="#" class="widget-categories__link">Latest News</a></li>
                                                            <li class="widget-categories__item" data-collapse-item><a href="#" class="widget-categories__link">News Posts</a></li>
                                                            <li class="widget-categories__item" data-collapse-item><a href="#" class="widget-categories__link">Popular Posts</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- widget-categories / end -->
                                            <!-- widget-posts -->
                                            <div class="widget widget-posts widget--card">
                                                <div class="widget__title">
                                                    <h4 class="decor-header">Popular News</h4></div>
                                                <div class="widget__body">
                                                    <ul class="widget-posts__list">
                                                        <li class="widget-posts__item">
                                                            <a class="widget-posts__image" href="post1"><img srcset="images/posts/post1-thumbnail.jpg, images/posts/post1-thumbnail@2x.jpg 2x" src="images/posts/post1-thumbnail.jpg" alt=""></a>
                                                            <div class="widget-posts__info">
                                                                <div class="widget-posts__title"><a href="post1">10 Tips Membeli Rumah Bagi Keluarga Muda</a></div>
                                                                <div class="widget-posts__date">April 4, 2019</div>
                                                            </div>
                                                        </li>
                                                        <li class="widget-posts__item">
                                                            <a class="widget-posts__image" href="post2"><img srcset="images/posts/post2-thumbnail.jpg, images/posts/post2-thumbnail@2x.jpg 2x" src="images/posts/post2-thumbnail.jpg" alt=""></a>
                                                            <div class="widget-posts__info">
                                                                <div class="widget-posts__title"><a href="post2">6 Tips Cerdas Beli Apartemen yang Nyaman</a></div>
                                                                <div class="widget-posts__date">April 1, 2019</div>
                                                            </div>
                                                        </li>
                                                        <li class="widget-posts__item">
                                                            <a class="widget-posts__image" href="post3"><img srcset="images/posts/post3-thumbnail.jpg, images/posts/post3-thumbnail@2x.jpg 2x" src="images/posts/post3-thumbnail.jpg" alt=""></a>
                                                            <div class="widget-posts__info">
                                                                <div class="widget-posts__title"><a href="post3">9 Tips Cara Membuat Taman Depan Rumah Sendiri</a></div>
                                                                <div class="widget-posts__date">Maret 28, 2019</div>
                                                            </div>
                                                        </li>
                                                        <li class="widget-posts__item">
                                                            <a class="widget-posts__image" href="post4"><img srcset="images/posts/post4-thumbnail.jpg, images/posts/post4-thumbnail@2x.jpg 2x" src="images/posts/post4-thumbnail.jpg" alt=""></a>
                                                            <div class="widget-posts__info">
                                                                <div class="widget-posts__title"><a href="post4">6 Tips Memilih Furniture Untuk Rumah Minimalis Paling Mudah dan Tepat</a></div>
                                                                <div class="widget-posts__date">Maret 24, 2019</div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- widget-posts / end -->
                                            <!-- widget-newsletter -->
                                            <div class="widget widget--card">
                                                <div class="widget__title">
                                                    <h4 class="decor-header">Our Newsletter</h4></div>
                                                <div class="widget__body">
                                                    <div class="widget-newsletter">
                                                        <p style="font-size: 15px;">Curabitur porttitor ultrices turpis ac luctus. Aliquam imperdiet eros ante, in facilisis justo semper sit amet.</p>
                                                        <form action="#">
                                                            <input type="email" class="form-control mb-3" placeholder="Email Address">
                                                            <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- widget-newsletter / end -->
                                            <!-- widget-banner -->
                                            <div class="widget">
                                                <a href="#" class="widget-sidebar-banner">
                                                    <picture>
                                                        <source media="(min-width: 960px)" srcset="images/banners/sidebar-banner.jpg, images/banners/sidebar-banner@2x.jpg 2x">
                                                        <source media="(min-width: 361px) and (max-width: 959px)" srcset="images/banners/sidebar-banner-wide.jpg, images/banners/sidebar-banner-wide@2x.jpg 2x">
                                                        <source media="(max-width: 360px)" srcset="images/banners/sidebar-banner.jpg, images/banners/sidebar-banner@2x.jpg 2x"><img src="images/banners/sidebar-banner.jpg" alt=""></picture>
                                                </a>
                                            </div>
                                            <!-- widget-banner / end -->
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- page__body / end -->
                </div>
                <!-- page / end -->
            </div>
            <!-- site__body / end -->
            <!-- site__footer -->
            <footer class="site__footer">
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="footer__widgets">
                                    <div class="row justify-content-between">
                                        <div class="col-12 col-lg-4 col-sm-6 footer__aboutus">
                                            <div class="footer-aboutus">
                                                <div class="footer-aboutus__title">
                                                    <h4 class="footer-aboutus__header decor-header">About Us</h4></div>
                                                <div class="footer-aboutus__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in feugiat lorem. Pellentque ac placerat tellus. Ut a lectus magna. Mauris sed coqut odio.</div>
                                                <ul class="footer-aboutus__contacts">
                                                    <li class="footer-aboutus__contacts-item"><a href="#">715 Park Ave, NY 10021 USA</a></li>
                                                    <li class="footer-aboutus__contacts-item"><a href="#">meblya@example.com</a></li>
                                                    <li class="footer-aboutus__contacts-item"><a href="#">+1 754 000-00-00</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-2 col-sm-6 col-md-3">
                                            <div class="footer-links" data-collapse data-collapse-opened-class="footer-links--opened" data-collapse-item>
                                                <div class="footer-links__title">
                                                    <h4 class="footer-links__header" data-collapse-trigger>Information <svg class="footer-links__header-arrow" width="9px" height="6px"><use xlink:href="images/sprite.svg#arrow-down-9x6"></use></svg></h4></div>
                                                <div class="footer-links__content" data-collapse-content>
                                                    <ul class="footer-links__list">
                                                        <li class="footer-links__item"><a href="#" class="footer-links__link">About Us</a></li>
                                                        <li class="footer-links__item"><a href="#" class="footer-links__link">Delivery Information</a></li>
                                                        <li class="footer-links__item"><a href="#" class="footer-links__link">Privacy Policy</a></li>
                                                        <li class="footer-links__item"><a href="#" class="footer-links__link">Brands</a></li>
                                                        <li class="footer-links__item"><a href="#" class="footer-links__link">Contact Us</a></li>
                                                        <li class="footer-links__item"><a href="#" class="footer-links__link">Returns</a></li>
                                                        <li class="footer-links__item"><a href="#" class="footer-links__link">Site Map</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-2 col-sm-6 col-md-3">
                                            <div class="footer-links" data-collapse data-collapse-opened-class="footer-links--opened" data-collapse-item>
                                                <div class="footer-links__title">
                                                    <h4 class="footer-links__header" data-collapse-trigger>My Account <svg class="footer-links__header-arrow" width="9px" height="6px"><use xlink:href="images/sprite.svg#arrow-down-9x6"></use></svg></h4></div>
                                                <div class="footer-links__content" data-collapse-content>
                                                    <ul class="footer-links__list">
                                                        <li class="footer-links__item"><a href="#" class="footer-links__link">My Account</a></li>
                                                        <li class="footer-links__item"><a href="#" class="footer-links__link">Order History</a></li>
                                                        <li class="footer-links__item"><a href="#" class="footer-links__link">Wish List</a></li>
                                                        <li class="footer-links__item"><a href="#" class="footer-links__link">Newsletter</a></li>
                                                        <li class="footer-links__item"><a href="#" class="footer-links__link">Specials</a></li>
                                                        <li class="footer-links__item"><a href="#" class="footer-links__link">Gift Certificates</a></li>
                                                        <li class="footer-links__item"><a href="#" class="footer-links__link">Affiliate</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4 footer__followus">
                                            <div class="footer-followus">
                                                <div class="footer-followus__title">
                                                    <h4 class="footer-followus__header">Follow Us</h4></div>
                                                <div class="footer-followus__text">Praesent pellentesque volutpat ex, vitae auctor lorem pulvinar mollis felis at lacinia.</div>
                                                <form class="footer-followus__subscribe-form">
                                                    <input type="email" class="form-control form-control--footer" placeholder="Email address">
                                                    <button type="submit" class="btn btn-primary">Subscribe</button>
                                                </form>
                                                <ul class="footer-followus__social-links">
                                                    <li class="footer-followus__social-link"><a href="https://themeforest.net/user/kos9/portfolio" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li class="footer-followus__social-link"><a href="https://themeforest.net/user/kos9/portfolio" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="footer-followus__social-link"><a href="https://themeforest.net/user/kos9/portfolio" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                                    <li class="footer-followus__social-link"><a href="https://themeforest.net/user/kos9/portfolio" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                    <li class="footer-followus__social-link"><a href="https://themeforest.net/user/kos9/portfolio" target="_blank"><i class="fas fa-rss"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-12 col-sm-auto">
                                <div class="copyright"><a href="#">Meblya</a> by <a href="#">Kos</a></div>
                            </div>
                            <div class="footer__payments col-auto"><img srcset="images/payments.png, images/payments@2x.png 2x" src="images/payments.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- site__footer / end -->
        </div>
    </div>
    <!-- site / end -->
</body>
@endsection