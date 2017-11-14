<div class="container-fluid hidden-sm hidden-xs">
    <div class="header">
        <div class="carousel slide" id="carousel-example-generic" data-ride="carousel">
            <div class="carousel-inner" role="listbox" id="banner-slide">
                <div class="item active">
                    <img alt="học excel cơ bản, excel cho kế toán, tự học excel" title="học excel cơ bản, excel cho kế toán, tự học excel" src="<?php echo base_url(); ?>styles/v2.0/img/hoc-excel-co-ban.jpg" data-holder-rendered="true" class="img-responsive" />
                </div>
                <div class="item"> 
                    <img alt="học excel cơ bản, excel cho kế toán, tự học excel" title="học excel cơ bản, excel cho kế toán, tự học excel" src="<?php echo base_url(); ?>styles/v2.0/img/excel-cho-ke-toan.jpg" data-holder-rendered="true" class="img-responsive" />  
                </div>
                <div class="item"> 
                    <img  alt="học excel cơ bản, excel cho kế toán, tự học excel" title="học excel cơ bản, excel cho kế toán, tự học excel" src="<?php echo base_url(); ?>styles/v2.0/img/lam-chu-hoa-don-chung-tu.jpg" data-holder-rendered="true" class="img-responsive" /> 
                </div>
                <div class="item"> 
                    <img  alt="học excel cơ bản, excel cho kế toán, tự học excel" title="học excel cơ bản, excel cho kế toán, tự học excel" class="img-responsive" src="<?php echo base_url(); ?>styles/v2.0/img/lap-bao-cao-tai-chinh.jpg" data-holder-rendered="true"> 
                </div>
                <div class="item"> 
                    <img  alt="học excel cơ bản, excel cho kế toán, tự học excel" title="học excel cơ bản, excel cho kế toán, tự học excel" class="img-responsive" src="<?php echo base_url(); ?>styles/v2.0/img/thu-thuat-van-phong.jpg" data-holder-rendered="true"> 
                </div>
                <div class="item"> 
                    <img  alt="học excel cơ bản, excel cho kế toán, tự học excel" title="học excel cơ bản, excel cho kế toán, tự học excel" class="img-responsive" src="<?php echo base_url(); ?>styles/v2.0/img/thu-thuat-excel.jpg" data-holder-rendered="true"> 
                </div>
            </div>
            <div class="text-header">
                <div class="row">
                    <div class="col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5 col-xs-3 col-xs-offset-4">
                        <img alt="học excel cơ bản, excel cho kế toán, tự học excel" title="học excel cơ bản, excel cho kế toán, tự học excel" src="<?php echo base_url(); ?>styles/v2.0/img/logo1.png" class="img-responsive"/>
                    </div>
                </div>
                <div style="font-size: 3.5vw; letter-spacing: 2px;"> Welcome to <strong> Lakita </strong></div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 hidden-sm hidden-xs throught"> </div>
                </div>
                <p class="course hidden-sm hidden-xs"> <strong> Khóa học nào sẽ giúp ích cho bạn? </strong></p>
                <p class="course2 hidden-sm hidden-xs"> Học hỏi những kĩ năng mới trực tuyến để làm chủ tương lai của bạn </p>
                <div class="row hidden-sm hidden-xs">
                    <form action="<?php echo base_url(); ?>tim-kiem.html" method="post" id="searchForm">
                        <div class="form-group">
                            <div class="col-md-7 hidden-sm hidden-xs searchBox">
                                <label for="exampleInputEmail1" class="sr-only">Search</label>
                                <input type="text" class="form-control" id="key_word" name="key_word" value="Tìm các khóa học bạn quan tâm...">
                                <img alt="học excel cơ bản, excel cho kế toán, tự học excel" title="học excel cơ bản, excel cho kế toán, tự học excel" class="searchIcon" src="<?php echo base_url(); ?>styles/v2.0/img/icon_seach.png" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-md-3 loginBtn col-sm-4 col-sm-offset-4 col-xs-5 col-sm-xs">
                        <button data-toggle="modal" data-target="#modal_login" class="btn btn-block btn-success" id="show_modal"> ĐĂNG NHẬP </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<?php $this->load->view('common/navbar/login_modal'); ?>