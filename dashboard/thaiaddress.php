<?php
$page = 'thaiaddress';
$title = 'Thailand Address';
$css = <<<EOT
    <!--page level css -->
    <link rel="stylesheet" href="../css/pages/buttons.css" />
    <link rel="stylesheet" href="./assets/jquery.Thailand.js/dist/jquery.Thailand.min.css">
    <!--end of page level css-->
EOT;

  include 'include/_header.php';
  include 'include/_navbar.php';
  include 'include/_menuleft.php';
?>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-33058582-1', 'auto', {
            'name': 'Main'
        });
        ga('Main.send', 'event', 'jquery.Thailand.js', 'GitHub', 'Visit');
    </script>

    <div class="content-wrapper">
        <div class="page-title">
            <div>
                <h1><i class="fa fa-dashboard"></i>Thailand Address</h1>
                <!-- <p>Start a beautiful journey here</p> -->
            </div>
            <div>
                <ul class="breadcrumb">
                    <li><i class="fa fa-home fa-lg"></i></li>
                    <li><a href="#">Thai Address</a></li>
                </ul>
            </div>
        </div>

        <!-- DEMO 1 -->
            <div class="card">
                <h2 class="card-title">Auto Complete ที่อยู่ อย่างที่มันควรเป็น</h2>
                <div class="card-body">

                    <div id="loader">
                        <div uk-spinner></div> รอสักครู่ กำลังโหลดฐานข้อมูล...
                    </div>
                    
                    <form id="demo1" class="demo form-horizontal" style="display:none;" autocomplete="off">
                        <div class="row">
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="h2">ตำบล / แขวง</label>
                                    <input name="district" class="form-control" type="text">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="h2">อำเภอ / เขต</label>
                                    <input name="amphoe" class="form-control" type="text">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="h2">จังหวัด</label>
                                    <input name="province" class="form-control" type="text">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="h2">รหัสไปรษณีย์</label>
                                    <input name="zipcode" class="form-control" type="text">
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        <!-- END DEMO 1 -->

        <!-- DEMO 2 -->
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h2 class="card-title">ใหม่! โหมดค้นหา</h2>
                        <div class="card-body">
                            <form id="demo2" class="demo form-horizontal" style="display:none;" autocomplete="off">
                                <label class="h2">ค้นหาที่อยู่ของคุณ</label><br>
                                <small>ลองกรอกอย่างใดอย่างหนึ่ง ตำบล, อำเภอ, จังหวัด หรือ รหัสไปรษณีย์</small>
                                <input name="search" class="form-control" type="text">
                            </form>
                                <br>
                            <div id="demo2-output"></div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- END DEMO 2 -->

      </div>
<?php
  include 'include/_footer.php';
?>

    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>
    
    <!-- dependencies for zip mode -->
    <script type="text/javascript" src="./assets/jquery.Thailand.js/dependencies/zip.js/zip.js"></script>
    <!-- / dependencies for zip mode -->

    <script type="text/javascript" src="./assets/jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script type="text/javascript" src="./assets/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
    
    <script type="text/javascript" src="./assets/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>
    
    <script type="text/javascript">
        /******************\
         *     DEMO 1     *
        \******************/ 
        // demo 1: load database from json. if your server is support gzip. we recommended to use this rather than zip.
        // for more info check README.md

        $.Thailand({
            database: './assets/jquery.Thailand.js/database/db.json', 

            $district: $('#demo1 [name="district"]'),
            $amphoe: $('#demo1 [name="amphoe"]'),
            $province: $('#demo1 [name="province"]'),
            $zipcode: $('#demo1 [name="zipcode"]'),

            onDataFill: function(data){
                console.info('Data Filled', data);
            },

            onLoad: function(){
                console.info('Autocomplete is ready!');
                $('#loader, .demo').toggle();
            }
        });

        // watch on change

        $('#demo1 [name="district"]').change(function(){
            console.log('ตำบล', this.value);
        });
        $('#demo1 [name="amphoe"]').change(function(){
            console.log('อำเภอ', this.value);
        });
        $('#demo1 [name="province"]').change(function(){
            console.log('จังหวัด', this.value);
        });
        $('#demo1 [name="zipcode"]').change(function(){
            console.log('รหัสไปรษณีย์', this.value);
        });

        /******************\
         *     DEMO 2     *
        \******************/ 
        // demo 2: load database from zip. for those who doesn't have server that supported gzip.
        // for more info check README.md
        $.Thailand({
            database: './assets/jquery.Thailand.js/database/db.zip', 
            $search: $('#demo2 [name="search"]'),

            onDataFill: function(data){
                console.log(data)
                var html = '<b>ที่อยู่:</b> ตำบล' + data.district + ' อำเภอ' + data.amphoe + ' จังหวัด' + data.province + ' ' + data.zipcode;
                $('#demo2-output').prepend('<div class="uk-alert-warning" uk-alert><a class="uk-alert-close" uk-close></a>' + html + '</div>');
            }

        });
    </script>

</body>
</html>

