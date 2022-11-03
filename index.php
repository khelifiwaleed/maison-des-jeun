<?php 
include ("includes/db.php"); 
include("includes/nav_bar.php");
include("includes/booking.php");
?>
    <!-- Navbar End -->


    <!-- Carousel Start -->

    <!-- Carousel End -->


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


    <!-- About Start -->

    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">مسابقات</h5>
                            <p class="m-0">الحظ الطيب يساند الشخص الشجاع. يقف الحظ إلى جانب التحدي</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">أفضل الخدمات</h5>
                            <p class="m-0">نقدم لكم كل الأنشطة الرياضية و الفكرية على مدار العام</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">تغطية دولية</h5>
                            <p class="m-0">برعاية وزارة شؤون الشباب والرياضة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Destination Start -->

    <!-- Destination Start -->


    <!-- Service Start -->
    
    <!-- Service End -->


    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="">الأنشطة الرياضية</h6>
                <h1>اكتشف أفضل الأنشطة الرياضية</h1>
            </div>
            <div class="row">
            <?php
                        include "includes/db.php"; 

                        $get_pro = "select * from sport ORDER BY id DESC LIMIT 6";

                        $run_pro = mysqli_query($con,$get_pro);

                        while($row_pro=mysqli_fetch_array($run_pro)){

                        $pro_title = $row_pro['nom'];

                        $pro_image = $row_pro['image'];

                        $type_category = $row_pro['type_category'];

                        $pro_id = $row_pro['id'];

                    ?>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img src="sport/<?php  echo $pro_image ; ?>" width="349" height="196" alt="<?php  echo $pro_title ; ?>">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">

                            </div>
                            <a class="h5 text-decoration-none" href=""><?php  echo $pro_title ; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i> <small></small></h6>
                                    <h5 class="m-0"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

                


            </div>
        </div>
    </div>
    <!-- Packages End -->


    <?php 
    include("includes/signup.php");
    ?>

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="">الأنشطة الفكرية </h6>
                <h1>اكتشف أفضل الأنشطة الفكرية</h1>
            </div>
            <div class="row">
            <?php
                        include "includes/db.php"; 

                        $get_pro = "select * from intellectuelles ORDER BY id DESC LIMIT 4";

                        $run_pro = mysqli_query($con,$get_pro);

                        while($row_pro=mysqli_fetch_array($run_pro)){

                        $pro_title = $row_pro['titel'];

                        $pro_image = $row_pro['image'];

                        $type_category = $row_pro['description'];

                        $pro_id = $row_pro['id'];

                    ?>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img src="sport/<?php  echo $pro_image ; ?>" width="255" height="255" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate"><?php  echo $pro_title ; ?></h5>
                            
                        </div>
                    </div>
                </div>

              <?php } ?>

            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="">التدوينات و الأخبار</h6>
                <h1>أفضل  التدوينات و الأخبار</h1>
            </div>
            <div class="row pb-3">

            <?php
                        include "includes/db.php"; 

                        $get_pro = "select * from article ORDER BY id DESC LIMIT 3";

                        $run_pro = mysqli_query($con,$get_pro);

                        while($row_pro=mysqli_fetch_array($run_pro)){

                        $pro_title = $row_pro['titel'];

                        $pro_image = $row_pro['image'];

                        $type_category = $row_pro['description'];

                        $pro_id = $row_pro['id'];

                    ?>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img src="sport/<?php  echo $pro_image ; ?>" width="255" height="255" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1"><?php  echo $pro_id ; ?></h6>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href=""></a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href=""></a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href=""><?php  echo $pro_title ; ?></a>
                        </div>
                    </div>
                </div>

<?php } ?>



            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
   <?php
    include("includes/footer.php")
   ?>