<?php 
include ("includes/db.php"); 
include("includes/nav_bar.php");
//include("includes/booking.php");
?>


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">معلومات أخرى حول الموقع</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">الصفحة الرئيسية</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">معلومات أخرى</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
<?php

?>
   

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">معلومات عنا</h6>
                        <h1 class="mb-3">نحن نقدم أفضل الأنشطة الرياضية و الفكرية و الرحلات</h1>
                        <p>
                            
                        تعمل دار الشباب من وراء برنامج عملها  على تعميم  النشاط التربوي  و الثقافي و الترفيهي  و التكويني  و المساهمة في عملية التربية الشاملة كما تعتبر من الأسس  القوية التي تعتمد  عليها  بلادنا في التربية  تكوين شبابنا  و توجيههم نحو الاعتماد على النفس  و الاستمرار المفيد و بالإضافة  إلى هذا تعتبر  مركز إشعاع و ملتقى تربوي و ترفيهي و يأتون إليها قصد      قصد منحهم التربية الشاملة و الدائمة و تطوير  مواهبهم و ثقافتهم و ترقيتها و تلبية متطلباتهم و تشجيع معرفتهم الفكرية و الرياضية و تنميتها بالتوجيه الأمثل و تأتي البصرية ,الشطرنج و النشاطات ذات الطابع الفلكي , الإعلام الآلي و الالكتلرونيك إلى غير ذلك من النشاطات المتنوعة الرياضية منها و التبادلات.

كما تستقبل دار الشباب كل الفئات الشبابية  من عمال و طلبة و العاطلين وعلى مختلف أنواعهم من الأطفال و المراهقين ولذي يجب عليها ان تعمل جادة من اجل تحقيق رغبة كل فئات هؤلاء الشباب و توجيههم و ذلك لإبراز برنامج محكم ,و إطارات مكونة و قادرة على العمل بكل جدية ونشاط.

إن برنامج دار الشباب فهو يدخل في إطار البرنامج العام للتنشيط التربوي و الاجتماعي و الثقافي و التكويني و الترفيهي للشباب,و أنشطة خارجية جماعية تتمثل  في :إحياء السهرات و الرحلات (هواء الطلق) و التبادلات الوطنية و

الخارجية منها
                        
                        </p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img src="img/01.png" width="255" height="255" alt="">
                            </div>
                            <div class="col-6">
                                <img src="img/02.jpg" width="255" height="255" alt="">
                            </div>
                        </div>
                        <!-- <a href="" class="btn btn-primary mt-1">Book Now</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
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


   



    <?php 
    include("includes/signup.php");
    include("includes/footer.php");
    ?>