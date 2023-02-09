<?php
    require_once 'functions/koneksi.php';
?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Article</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">

        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/app.css" rel="stylesheet" type="text/css" id="light-style">

    </head>

    <body class="loading" data-layout="topnav" data-layout-config='{"layoutBoxed":false,"darkMode":false,"showRightSidebarOnStart": true}'>
        <div class="wrapper">
            <div class="content-page">
                <div class="content">
                    <div class="topnav">
                        <div class="container-fluid">
                            <nav class="navbar navbar-dark navbar-expand-lg topnav-menu">
                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="menu" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-dashboard me-1"></i>Article <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="menu">
                                                <a href="index.php" class="dropdown-item">All Posts</a>
                                                <a href="preview.php" class="dropdown-item">Preview</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Blog</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?php                                             
                                            $hal = 1;
                                            $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                                            $mulai = ($page>1) ? ($page * $hal) - $hal : 0;
                                            $queryArticle = mysqli_query($conn, "SELECT * FROM posts WHERE Status='Publish'");
                                            $nilai = mysqli_num_rows($queryArticle);
                                            $pages = ceil($nilai/$hal);
                                            $queryBlog = mysqli_query($conn, "SELECT * FROM posts LIMIT $mulai, $hal");
                                            
                                            while ($data = mysqli_fetch_assoc($queryBlog)) {
                                        ?>
                                        <p><b>Title : </b> <?= $data['Title']; ?>
                                        <p><b>Category : </b> <?= $data['Category']; ?>
                                        <p><b>Content : </b> <?= $data['Content']; ?>

                                        <?php } ?>
                                        <div class="page-title-right">
                                            <?php for ($i=1; $i<=$pages ; $i++){ ?>
                                                <a href="?halaman=<?php echo $i; ?>" class="btn btn-sm btn-primary"><?php echo $i; ?></a>
                                            <?php } ?>                                        
                                        </div>                               
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="rightbar-overlay"></div>

        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

    </body>
</html>