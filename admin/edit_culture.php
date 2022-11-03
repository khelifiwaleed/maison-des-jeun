<?php 
session_start(); 
if (!isset($_SESSION['usernam'])) {
    header("location:index.php") ;    
 }



 if(isset($_GET['edit_product'])){

    include "../includes/db.php"; 

    $edit_id = $_GET['edit_product'];
    
    $get_p = "select * from culture where id='$edit_id'";
    
    $run_edit = mysqli_query($con,$get_p);
    
    $row_edit = mysqli_fetch_array($run_edit);
    
    $p_id = $row_edit['id'];
    
    $arTitle = $row_edit['titre'];
    
    $arContent = $row_edit['description'];
    
    $p_image1 = $row_edit['image'];
    
    $new_p_image1 = $row_edit['image'];
    
    

    }
    
    



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>الصفحة الرئيسية - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-dataSport@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Maison de Jeunes
</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><a class="dropdown-item" href="#!"><?php echo $_SESSION['usernam']  ?></a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="profil.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                الصفحة الرئيسية
                            </a>

                            <a class="nav-link" href="ajouter_article_sport.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                إضافة للأنشطة الرياضية 
                            </a>
                            <a class="nav-link" href="ajouter_article_culture.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                برامج ثقافية
                            </a>
                            <a class="nav-link" href="ajouter_article_serv.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                الأنشطة الفكرية
                            </a>
                            <a class="nav-link" href="ajouter_article_news.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                إضافة أخبار و مقالات جديدة
                            </a>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                       Administrateur

                    </div>
                </nav>
            </div>












            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Culture</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">الصفحة الرئيسية</a></li>
                            <li class="breadcrumb-item active">Culture</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">

                            تحديث مقالات برامج ثقافية 
                                
                            </div>
                        </div>
                        
                              
                          <!-- Include Head -->

<!-- JS TextEditor -->
<script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

<title>Add Article</title>

</head>

<body>

    <!-- Header -->
   
    <?php include "head.php" ?>
    <!-- Main -->
    <main role="main" class="main">
        

        <div class="container">
            <div class="row">

                <div class="col-lg-12 mb-4">
                    <!-- Form -->
                    <form type="submit" name="submit" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="arTitle">Title</label>
                            <input type="text" class="form-control" name="arTitle" id="arTitle" required value="<?php echo $arTitle; ?>">
                        </div>

                        <div class="form-group">
                            <label for="arContent">Content</label>

                            <textarea class="form-control" name="arContent" id="arContent"><?php echo $arContent; ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="arImage">Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="arImage" id="arImage">
                                <br><img src="../sport/<?php echo $p_image1; ?>" width="70" height="70" >
                                <label class="custom-file-label" for="arImage">Choose file</label>
                            </div>
                        </div>



                        

                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-success btn-lg w-25">Submit</button>
                        </div>
                    </form>
                    <?php 

                        
                        if(isset($_POST['submit'])){

                            $arTitle = $_POST['arTitle'];
                            $arContent = $_POST['arContent'];

                            $arImage = $_FILES['arImage']['name'];
                            $arImagefile = $_FILES['arImage']['tmp_name'];    
                            if(empty($arImage)){

                                $arImage = $new_p_image1;
                                
                                }
                            move_uploaded_file($arImagefile,"../sport/$arImage");

                            $sous_categorie = $_POST['arCategory']; 
                            
                            
                            $update_product = "update culture set titre='$arTitle',description='$arContent',
                            image='$arImage' where id='$p_id'";

                            $run_product = mysqli_query($con,$update_product);

                            if($run_product){

                            echo "<script> alert('article has been updated successfully') </script>";

                            echo "<script>window.open('index.php','_self')</script>";

}
                            
                            }



                        ?>

                </div>

                <!-- <div class="col-lg-4 mb-4">
                     <h1> Random Articles </h1>
                </div> -->


            </div>
        </div>

    </main>

    <!-- Footer -->
    <!-- <?php include "assest/footer.php" ?> -->


    <!-- Text Editor Script -->
    <script>
        CKEDITOR.replace('arContent');
    </script>


                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-dataSport@latest" crossorigin="anonymous"></script>
        <script src="js/dataSport-simple-demo.js"></script>
    </body>
</html>
