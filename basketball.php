<?php 
include ("includes/db.php"); 
include("includes/nav_bar.php");

?>


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">كرة السلة</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">الصفحه الرئيسيه</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">كرة السلة</p>
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

    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="">كرة السلة</h6>
                <h1>باقات برامج كرة السلة</h1>
            </div>
            <div class="row">
                                <?php

                    $get_pro = "select * from sport WHERE type_category ='كرة السلة'";

                    $run_pro = mysqli_query($con,$get_pro);

                    while($row_pro=mysqli_fetch_array($run_pro)){

                    $pro_title = $row_pro['nom'];

                    $pro_image = $row_pro['image'];

                    $pro_categorie = $row_pro['type_category'];

                    $pro_id = $row_pro['id'];

                    ?>
                <div class="col-md-6 mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img src="sport/<?php echo $pro_image; ?>" width="350" height="233" alt="">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1"><?php echo $pro_id ; ?></h6>
                                        <small class="text-white text-uppercase">Jan</small>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <a class="text-primary text-uppercase text-decoration-none" href=""></a>
                                        <span class="text-primary px-2">|</span>
                                        <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $pro_categorie ; ?></a>
                                    </div>
                                    <a class="h5 m-0 text-decoration-none" href="view_basket.php?id=<?php echo $pro_id ; ?>"><?php echo $pro_title ; ?></a>
                                </div>
                            </div>
                        </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Packages End -->


   


    <?php
    include("includes/footer.php")
   ?>