<?php require_once('../private/init.php'); ?>

<!-- dynamic page <title>  -->
<?php $page_title = "الصفحة الرئسية"; ?>
<?php include(SHARED_PATH . '/header.php'); ?>


<div class="container">

    <div class="row">

        <div class="col-md-8 offset-md-2 my-md-5 px-4 px-md-5 py-5 border border-secondary rtl home-page">

            <h1>مشروع الغاز لعقال الحارات</h1>
            <center markdown="1">
                <a href="<?= url_for('/index.php')?>">
                    <!--  I will make later with the help from Lynda php course -->
                    <img src="img/basic_spanner.png" class="rounded-circle mt-5 border border-dark" width="150">
                </a>
                <br><br>
            </center>
            <h3 class="page-header"> هذه الشاشة الرئيسية لمشروع توزيع الغاز لعقال الحارات </h3>

            <h4>أبناء الحارة</h4>
            <ul>
                <li><a href="">عرض</a></li>
                <li><a href="">تعديل</a></li>
            </ul>
            <h4>الإعدادات</h4>
            <ul>
                <li><a href="">إعدادات المستخدمين</a></li>
                <li><a href="">إعدادات المدراء</a></li>
            </ul>
        </div> <!-- ./col-md-8 -->
    </div> <!--  ./row -->
</div> <!-- ./container -->
<?php include(SHARED_PATH . '/footer.php'); ?>