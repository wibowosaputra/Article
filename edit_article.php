<?php
    require 'functions/function_article.php';
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
                                                <a href="" class="dropdown-item">Preview</a>
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
                                    <h4 class="page-title">All Posts</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title"><center>FORM EDIT Article</center></h4>
                                        <hr>
                                        <form action="functions/function_article.php" method="POST" enctype="multipart/form-data" class="p-2" >
                                        <?php
                                            $id   = $_GET['id'];
                                            $get  = showData($id);
                                        ?>
                                        <?php foreach ($get as $data) { ?>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="task-title" class="form-label">Title</label>
                                                        <input type="text" name="Title" class="form-control" value="<?= $data['Title'] ?>">
                                                        <input type="hidden" name="id" class="form-control" value="<?= $data['id'] ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="task-priority2" class="form-label">Content</label>
                                                        <textarea type="text" name="Content" class="form-control" ><?= $data['Content'] ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="task-priority2" class="form-label">Category</label>
                                                        <input type="text" name="Category" class="form-control" value="<?= $data['Category'] ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="task-priority2" class="form-label">Status</label>
                                                        <select name="Status" class="form-select mb-3">
                                                            <option value="<?= $data['Status']?>" selected><?php if($data['Status'] == 'Publish'){
                                                                echo "Published";
                                                             }else{
                                                                echo "Draft";
                                                             } ?></option>
                                                            <option value="Publish">Published</option>
                                                            <option value="Draft">Draft</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>               
                                            <div>
                                                <input type="hidden" name="edit">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <a href="index.php" class="btn btn-dark">Cancel</a>
                                            </div>
                                        </form>
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