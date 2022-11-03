<?php 
include ("includes/db.php"); 
include("includes/nav_bar.php");

?>


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">برامج ثقافية</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">الصفحه الرئيسيه</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">برامج ثقافية</p>
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
                <h6 class="text-primary text-uppercase" style="">برامج ثقافية</h6>
                <h1>باقات برامج ثقافية مثالية</h1>
            </div>
            <div class="row">


            <?php

            $get_pro = "select * from culture ORDER BY id DESC";

            $run_pro = mysqli_query($con,$get_pro);

            while($row_pro=mysqli_fetch_array($run_pro)){

            $pro_title = $row_pro['titre'];

            $pro_image = $row_pro['image'];

            $pro_id = $row_pro['id'];

            ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img src="sport/<?php echo $pro_image; ?>" width="349" height="183" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i></small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i></small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 </small>
                            </div>
                            <a class="h5 text-decoration-none" href="view_service.php?id=<?php echo $pro_id ; ?>"><?php echo $pro_title ; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small></small></h6>
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
    include("includes/footer.php")
   ?>