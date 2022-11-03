<?php 
include ("includes/db.php"); 
include("includes/nav_bar.php");

?>


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase"> </h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php"> </a></p>
                   
                    <p class="m-0 text-uppercase"> </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Booking Start -->
    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>تحديد وجهة</option>
                                        <option value="1">الرحلات و التخييم</option>
                                        <option value="2">الأنشطة الرياضيات</option>
                                        <option value="3">الأنشطة الفكرية</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="تاريخ المغادرة" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="تاريخ العودة" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>إختر</option>
                                        <option value="1">المشاركة في الرحلات و التخييم</option>
                                        <option value="2">المشركات في الأنشطة الرياضيات</option>
                                        <option value="3">المشركات في الأنشطة الفكرية</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">إرسال</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->
    <?php

    $id = $_GET['id'] ;
   // $cat = $_GET['cat'] ;

    $get_pro = "select * from sport WHERE id = '$id' ";

    $run_pro = mysqli_query($con,$get_pro);

    $row_pro=mysqli_fetch_array($run_pro);

    if($row_pro){

    $pro_title = $row_pro['nom'];

    $pro_image = $row_pro['image'];

    //$pro_categorie = $row_pro['type_category'];

    $description = $row_pro['description'];

    $pro_id = $row_pro['id'];

    }
    ?>

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img src="sport/<?php echo $pro_image; ?>" width="730" height="486" alt="">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">01</h6>
                                    <small class="text-white text-uppercase">Jan</small>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <a class="text-primary text-uppercase text-decoration-none" href=""></a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php // echo $pro_categorie ; ?></a>
                            </div>
                            <h2 class="mb-3"><?php echo $pro_title ; ?></h2>
                            <p><?php echo $description  ; ?></p>
                            <h4 class="mb-3"></h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="">
                           
                          
                        </div>
                    </div>
                    <!-- Blog Detail End -->
    
                
    
                    <!-- Comment Form Start -->
                    <div class="bg-white mb-3" style="padding: 30px;">
                        <h4 class="text-uppercase mb-4" >اترك تعليقا</h4>
                        <form>
                            <div class="form-group">
                                <label for="name">اسم *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">البريد الإلكتروني *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">موقع الكتروني</label>
                                <input type="url" class="form-control" id="website">
                            </div>
    
                            <div class="form-group">
                                <label for="message">رسالة *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave a comment"
                                    class="btn btn-primary font-weight-semi-bold py-2 px-3">
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <img src="img/user.jpg" class="img-fluid mx-auto mb-3" style="width: 100px;">
                        <h3 class="text-primary mb-3">مدير المؤسسة</h3>
                        <p>يعتبر مدير دار الشباب المسؤول عن السير الإداري والتربوي للمؤسسة وتحدد اختصاصاته في المجالين التاليين :  الجانب الإداري : يسهر على ضبط جميع الوثائق سواء المتعلقة بسير أو تجهيز المؤسسة.</p>
                        <div class="d-flex justify-content-center">
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
    
                    <!-- Search Form -->
                    <div class="mb-5">
                        <div class="bg-white" style="padding: 30px;">
                            <div class="input-group">
                                <input type="text" class="form-control p-4" placeholder="الكلمة">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary border-primary text-white"><i
                                            class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4">التصنيفات</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="index.php"><i class="fa fa-angle-right text-primary mr-2"></i>
                                    الصفحة الرئسية</a>
                                    <span class="badge badge-primary badge-pill">150</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="about.php"><i class="fa fa-angle-right text-primary mr-2"></i>
                                    معلومات أخرى</a>
                                    <span class="badge badge-primary badge-pill">131</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="service.php"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>برامج ثقافية </a>
                                    <span class="badge badge-primary badge-pill">78</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="package.php"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>الأنشطة الفكرية </a>
                                    <span class="badge badge-primary badge-pill">56</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="taekwondo.php"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>التكواندو</a>
                                    <span class="badge badge-primary badge-pill">98</span>
                                </li>
                            </ul>
                        </div>
                    </div>
    
                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4"> الأخبار المنشور الاخير</h4>
                        <?php


                            $get_pro = "select * from article ORDER BY id DESC";

                            $run_pro = mysqli_query($con,$get_pro);

                            while($row_pro=mysqli_fetch_array($run_pro)){

                            $pro_title = $row_pro['titel'];

                            $pro_image = $row_pro['image'];

                            $pro_id = $row_pro['id'];

                            ?>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img src="sport/<?php echo $pro_image; ?>" width="100" height="100" alt="">
                            <div class="pl-3">
                                <h6 class="m-1"><?php echo $pro_title; ?></h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <?php } ?>
                       
                    </div>
    

                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <?php
    include("includes/footer.php")
   ?>