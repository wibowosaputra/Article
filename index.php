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
                                    <h4 class="page-title">All Posts</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                            <div class="col-sm-12">
                                                <div class="text-sm-end">
                                                    <button class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#add-new"><i class="mdi mdi-plus-circle-outline"></i> Add New</button>
                                                </div>
                                            </div>
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            
                                            <li class="nav-item">
                                                <a href="#published" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Published
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#drafts" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Drafts 
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#trashed" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Trashed  
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="published">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Title</th>
                                                                <th>Category</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $all = getPublish(); $no = 1; ?>
                                                        <?php foreach ($all as $data) { ?>
                                                            <tr>
                                                                <td><?= $data['Title'] ?></td>
                                                                <td><?= $data['Category'] ?></td>
                                                                <td class="table-action">
                                                                    <a href="<?='edit_article.php?id='.$data['id']?>" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                                    <?php 
                                                                        if($data['Status']=='Publish'){
                                                                            echo '<a href="status_trash.php?id='.$data['id'].'&Status=Thrash" class="action-icon"><i class="mdi mdi-delete"></i></a>';
                                                                        }else{
                                                                            echo '<a href="status_trash.php?id='.$data['id'].'&Status=Thrash" class="action-icon"><i class="mdi mdi-delete"></i></a>';
                                                                        }
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="drafts">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Title</th>
                                                                <th>Category</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $all = getDraft(); $no = 1; ?>
                                                        <?php foreach ($all as $data) { ?>
                                                            <tr>
                                                                <td><?= $data['Title'] ?></td>
                                                                <td><?= $data['Category'] ?></td>
                                                                <td class="table-action">
                                                                    <a href="<?='edit_article.php?id='.$data['id']?>" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                                    <?php 
                                                                        if($data['Status']=='Publish'){
                                                                            echo '<a href="status_trash.php?id='.$data['id'].'&Status=Thrash" class="action-icon"><i class="mdi mdi-delete"></i></a>';
                                                                        }else{
                                                                            echo '<a href="status_trash.php?id='.$data['id'].'&Status=Thrash" class="action-icon"><i class="mdi mdi-delete"></i></a>';
                                                                        }
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>                     
                                            </div> 

                                            <div class="tab-pane" id="trashed">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Title</th>
                                                                <th>Category</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $all = getThrash(); $no = 1; ?>
                                                        <?php foreach ($all as $data) { ?>
                                                            <tr>
                                                                <td><?= $data['Title'] ?></td>
                                                                <td><?= $data['Category'] ?></td>
                                                                <td class="table-action">
                                                                    <a href="<?='edit_article.php?id='.$data['id']?>" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>                    
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade task-modal-content" id="add-new" tabindex="-1" role="dialog" aria-labelledby="NewTaskModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="NewTaskModalLabel">Add New</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="functions/function_article.php" method="POST" class="p-2" >
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="task-title" class="form-label">Title</label>
                                                                <input name="Title" type="text" class="form-control" minlength="20" data-toggle="minlength" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="task-priority2" class="form-label">Content</label>
                                                                <textarea name="Content" class="form-control" minlength="200" data-toggle="minlength" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="task-title" class="form-label">Category</label>
                                                                <input name="Category" type="text" class="form-control"  minlength="3" data-toggle="minlength" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="task-priority2" class="form-label">Status</label>
                                                                <select name="Status" class="form-select mb-3" required>
                                                                    <option value="Publish">Published</option>
                                                                    <option value="Draft">Draft</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <input type="hidden" name="add">
                                                        <button type="submit" class="btn btn-primary">Save</button>
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
            </div>
        </div>
        <div class="rightbar-overlay"></div>

        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

    </body>
</html>