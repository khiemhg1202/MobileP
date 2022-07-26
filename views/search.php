<!DOCTYPE html>
<html>
    <head>
        <title>Kết quả tìm kiếm - Mobile Planet</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/ulg/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="/styles/style.css">
        <script src="/scripts/script.js"></script>
    </head>
    <body>
        <div class="wrapper">

            <header class="header">
                <div class="dynamic-container">
                    <a href="index.php" style="color: black;"><h3 class="my-title">mobileplanet.com</h3></a>
                    <div class="menu-group">
                        <form class="form-group form-outline float-left" action="search.php" method="$_GET">
                            <div class="form-group form-outline float-left">
                                <input type="text" id="search" name="keyword" class="form-control float-left" placeholder="Tìm kiếm sản phẩm..."/>
                            </div>
                            <button type="submit" class="btn my-button float-left">
                                <i class="bi-search"></i>
                            <span class="top-button-text">Tìm kiếm</span>
                            </button>
                        </form>
                        <button type="button" class="btn my-button float-left">
                            <i class="bi-cart"></i>
                            <a href="cart_invoke.php">
                                <span class="top-button-text">Giỏ hàng</span>
                            </a>
                        </button>
                        <button type="button" class="btn my-button float-left">
                            <i class="bi-person"></i>
                            <a href="user_invoke.php">
                                <span class="top-button-text">Tài khoản</span>
                            </a>
                        </button>
                    </div>
                </div>
            </header>

            <nav class="nav-bar">
                <div class="dynamic-container">
                    <div class="row">
                        <div class="col-6 col-lg-3 nav-element">
                            <i class="bi-phone"></i>
                            <label>ĐIỆN THOẠI DI ĐỘNG</label>
                            <a href="phone_category.php" class="stretched-link"></a>
                        </div>
                        <div class="col-6 col-lg-3 nav-element">
                            <i class="bi-tablet"></i>
                            <label>MÁY TÍNH BẢNG</label>
                            <a href="tablet_category.php" class="stretched-link"></a>
                        </div>
                        <div class="col-6 col-lg-3 nav-element">
                            <i class="bi-laptop"></i>
                            <label>MÁY TÍNH XÁCH TAY</label>
                            <a href="laptop_category.php" class="stretched-link"></a>
                        </div>
                        <div class="col-6 col-lg-3 nav-element">
                            <i class="bi-headphones"></i>
                            <label>PHỤ KIỆN</label>
                            <a href="accessories_category.php" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </nav>

            <main class="content dynamic-container">
                <?php
                echo '<h3 style="margin-bottom: 1rem;">Kết quả tìm kiếm cho "'. $_GET["keyword"] .'"</h3>';
                ?>
                <div style="margin-bottom: 1rem;" id="result-categories">
                    <?php
                    require_once ($_SERVER['DOCUMENT_ROOT']."/controllers/search_controller.php");
                    $controller = new SearchController();
                    $controller->search_invoke_for_buttons();
                    ?>
                </div>
                <div id="results-holder" class="results-holder">
                    <?php
                    require_once ($_SERVER['DOCUMENT_ROOT']."/controllers/search_controller.php");
                    $controller = new SearchController();
                    $controller->search_invoke($_GET['keyword']);
                    ?>
                </div>
            </main>

            <footer class="footer">
                <div class="dynamic-container">
                    <div class="float-left">
                        <h6>CÔNG TY CỔ PHẦN HÀNH TINH DI ĐỘNG</h6>
                        <label>123 - 124 Nguyễn Văn A, Phường 2, Quận 10, TP. Hồ Chí Minh</label>
                        <h6>Liên hệ:</h6>
                        <label>0901 0000 - 0902 0000</label><br/>
                        <label>cskh@mobileplanet.com</label><br/>
                    </div>
                    <div id="social-media-logo" class="float-right">
                        <a class="mr-2" href="https://www.facebook.com/" target="_blank">
                            <img src="/images/bootstrap_icons/facebook.svg" width="30">
                        </a>
                        <a class="mr-2" href="https://twitter.com/" target="_blank">
                            <img src="/images/bootstrap_icons/twitter.svg" width="30">
                        </a>
                        <a href="https://www.youtube.com/" target="_blank">
                            <img src="/images/bootstrap_icons/youtube.svg" width="30">
                        </a>
                    </div>
                </div>
            </footer>

        </div>
    </body>
</html>