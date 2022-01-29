<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ประเมินภาวะการเจริญเติบโตเด็ก 0-18 ปี มาตรฐานกรมอนามัย (Growth Monitoring DOH Standard)</title>
        <link rel="stylesheet" href="../bootstrap-5.1.1/dist/css/bootstrap.min.css">
    <!--link rel="stylesheet" href="../icon-1.5.0/font/bootstrap-icons.css"-->
    <link rel="stylesheet" href="../bootstrap-5.1.1/dist/css/colors_bt5.css">
    <!--blue-100 ถึง 900 ,indigo,purple,pink,red,orange,yellow,green,teal,cyan,grey,black-->
    <link rel="stylesheet" href="../font-awesome/css/all.min.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="../bootstrap-5.1.1/dist/js/bootstrap.min.js"></script>
    <!--link rel="stylesheet" href="../css/document_card.css" type="text/css"-->
    <!--script type="text/javascript" src="../js/document_card.js"></script-->
</head>
<body>
<div id="div1"></div>
<div class="container">
<div class="card">
  <div class="card-header bg-primary text-white " >
    <div class="row">
    <div class="col-2 text-start">
        <a href="index_screen.php"><button class="btn-sm btn-danger"><i class="fas fa-backward"></i></button></a>
        </div>
        <div class="col-10 text-center">
        <p>ประเมินการเจริญเติบโตเด็ก 0-18 ปี <br>[มาตรฐาน WHO(2006)+ กรมอนามัย(2564)] </p>
        </div>
       
      </div>
    </div> <!-- row -->
  </div> <!-- card header-->
  <div class="card-body bd-blue-100">
    <form class="horizontal" id="myform1" name="form1" method="post" action="" >
        <!-- Begin sex-->
        <div class="input-group mb-3">
            <span class="input-group-legend">เพศ</span>
                <div class="form-check form-check-inline ms-3">
                <input class="form-check-input" type="radio"
                name="sex" id="radio_gender_1" value="1" required>
                <label class="form-check-label" for="radio_gender_1">
                    ชาย
                </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"
                name="sex" id="radio_gender_2" value="2" required>
                <label class="form-check-label" for="radio_gender_2">
                    หญิง
                </label>
                <div class="invalid-feedback">
                    กรุณาเลือกเพศ
                </div>               
            </div>
        </div>
        <!-- End  sex -->
         <!-- Begin select-->
         <div class="input-group mb-3">
            <span class="input-group-legend">อายุ</span>
                <div class="form-check form-check-inline ms-3">
                <input class="form-check-input" type="radio"
                name="change" id="change1" value="1" required>
                <label class="form-check-label" for="change1">
                    ใส่วันเกิด
                </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"
                name="change" id="change2" value="2" required>
                <label class="form-check-label" for="change2">
                    ใส่ ปีและเดือน
                </label>
                <div class="invalid-feedback">
                    กรุณาระบุวิธีเลือก
                </div>               
            </div>
        </div>
       <!-- End  select -->
  <div id="yearmonth">
          <!--Begin Age-->
          <div class="input-group mb-3">
            <!--Begin year-->
            <span class="input-group-text ">อายุ</span>
                <input type="number" min="0" max="19" class="form-control" name="year" id="year"
                autocomplete="off" value=""  required>
                <span class="input-group-text">ปี </span>           
                <input type="number" min="0" max="11" class="form-control" name="month" id="month"
                autocomplete="off" value=""  required>
                <span class="input-group-text"> เดือน</span>      
            </div>
            <!--End month-->
        </div>
        <!--end age (year and month)-->
   <div id="birth">
    <!--Begin Birthdate-->  
        <div class="col">
            <div class="input-group mb-3">
                <!-- วันที่ -->
                <span class="input-group-text"><small>วันที่</small></span>
                <input type="number" min="1" max="31" class="form-control" name="dd" id="dd"
                    autocomplete="off" value=""  required>  
            <!--span class="input-group-text">เดือน</span-->    
            <select class="form-select" name="mm" id="mm" autocomplete="off" value=""  required>
                <option selected value="">เดือน</option>
                <option value="1">มค.</option>
                <option value="2">กพ.</option>
                <option value="3">มีค.</option>
                <option value="4">เมย.</option>
                <option value="5">พค.</option>
                <option value="6">มิย.</option>
                <option value="7">กค.</option>
                <option value="8">สค.</option>
                <option value="9">กย.</option>
                <option value="10">ตค.</option>
                <option value="11">พย.</option>
                <option value="12">ธค.</option>
            </select>
            <span class="input-group-text"><small>พศ</small></span>
            <input type="number" min="2546" max="2565" class="form-control" name="yy" id="yy"
                autocomplete="off" value=""  required>   
            <!-- End Birthdate-->
        </div>
    </div> 
</div>
    <div class="input-group mb-3">
            <span class="input-group-text">น้ำหนัก</span>
            <input type="number" min="1" max="120" class="form-control" name="wt" id="wt"
                autocomplete="off" value=""  required>
            <span class="input-group-text">ก.ก.</span>                      
    </div>
    <div class="input-group mb-3">
            <span class="input-group-text">ส่วนสูง</span>
            <input type="number" min="50" max="210" class="form-control" name="ht" id="ht"
                autocomplete="off" value=""  required>
            <span class="input-group-text">ซ.ม.</span>
    </div>       
    </div>
    <div class="input-group text-center bd-green-100 mb-3">
            <div class="col my-2" >
                <button type="submit" name="btn_submit" id="btn_submit" value="1" class="btn btn-success">ส่งข้อมูล</button>
            </div>
        </div> 
    </form>
  </div>  <!-- card body -->
  <div class="card-footer bg-primary text-white">
    <div class="text-center">เอกสารอ้างอิง </div>     
  </div> <!-- card footer-->
  <div class="alert alert-warning" role="alert">
        <a href="topicDisplay.php?id=73">1.มาตรฐาน น้ำหนัก/ส่วนสูงเด็ก 0-18 ปี กรมอนามัย</a><br>
    </div> 
    <hr>
 </div> <!-- card -->
</div> <!-- container -->
<div id="dataModal" class="modal fade bd-example-modal-lg" role="document"> 

    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title">แสดงรายการ</h4>
                <button type="button" class="close btn-sm btn-danger" data-bs-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" id="detail">
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                <!--a href="index.php" class="mt-3"><button class="btn-sm btn-success">Close</button></a-->
            </div>

        </div>

    </div>
</div><script>
$(function(){
     $('#myform1').on('submit',function(e){
          e.preventDefault();
          $.ajax({
            url:"growthCalculate2.php",
            method:"post",
            data:$('#myform1').serialize(),         
            success:function(data){
                $('#myform1')[0].reset(); 
                $('#detail').html(data); 
                $('#dataModal').modal('show');
            },
          });
      });
          // toggle button change address 
    $("#birth").hide();
    $("#yearmonth").hide();
    $("#change1").click(function(){
        $("#birth").show("slow");
        $("#yearmonth").hide("slow");
        $("#month").val(0);
        $("#year").val(0);

    });
    $("#change2").click(function(){
        $("#yearmonth").show("slow");
        $("#birth").hide("slow");
        $("#dd").val(1);
        $("#mm").val(1);
        $( "#mm option:selected" ).text();
        $("#yy").val(2565);

    });

});
</script>
</div>    
</body>
</html>