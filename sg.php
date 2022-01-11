
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>บันทึกข้อมูล</title>
  <link href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
  <link href="d.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-expand-lg " style="background-color:rgb(146,211,110) ;">
    <div class="container-fluid">
    <img
            src="/img/b.png"
            alt=""
            width="30"
            height="30"
            class="d-inline-block align-text-top"
          />&nbsp;&nbsp;
      <a class="navbar-brand" href="#">Preterm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Home.php">หน้าหลัก</a>
          </li>
          
          <li class="nav-item " >
            <a class="nav-link"style="margin-left: 1050px;" href="/login/doctor.php"   onclick="return confirm('คุณต้องการออกจากระบบหรือไม่')" >ออกจากระบบ</a>
          </li>
          
        </ul>
        
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-sm-3 ">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action" style="background-color: 	
          rgb(242,201,251); color: black;" >
            ข้อมูลทั่วไป
          </a>
          <a href="" class="list-group-item list-group-item-action" >ปัญหาที่เกิดขึ้นกับทารก</a>
          <a href="" class="list-group-item list-group-item-action">การเจริญเติบโต</a>
          <a href="" class="list-group-item list-group-item-action">พัฒนาการของทารก</a>
          
        </div>




      </div>

      <div class="col">
        <div class="row">
          <div class="col-md-12 ">
            <div class="card">
               <div class="card-body ">
                <h4 class="card-header  text-white container col-6" 
                style="background-color: rgb(158,118,180)" 
                >การนอนซ้ำโรงพยาบาลหลังจากจำหน่าย</h4>
                <div class="card-body col-12 mt-3 "
                              style="background-color: rgba(242, 226, 245, 0.904)">
               
                              <div class="row">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault1"
                    />
                    <label class="form-check-label" for="flexRadioDefault1">
                      ไม่มี
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault2"
                      checked
                    />
                    <label class="form-check-label" for="flexRadioDefault2">
                      ภายใน 7 วันเนื่องจาก
                    </label>
                  </div>

                  <div class="input-group flex-nowrap">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="กรุณาระบุ"
                      aria-label="กรุณาระบุ"
                      aria-describedby="addon-wrapping"
                    />
                  </div>
              
            
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="flexRadioDefault1"
                />
                <label class="form-check-label" for="flexRadioDefault1">
                  ภายใน 1 เดือนเนื่องจาก
                </label>
              </div>

              <div class="input-group flex-nowrap">
                <input
                  type="text"
                  class="form-control"
                  placeholder="กรุณาระบุ"
                  aria-label="กรุณาระบุ"
                  aria-describedby="addon-wrapping"
                />
              </div>
            </div>
                              
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="col">
        <div class="row">
          <div class="col-md-12 ">
            <div class="card">
               <div class="card-body ">
                <h4 class="card-header  text-white container col-4" 
                style="background-color: rgb(158,118,180)" 
                >การมาตรวจตามนัดครั้งแรก</h4>
                <div class="card-body col-12 mt-3 "
                              style="background-color: rgba(242, 226, 245, 0.904)">
               
                              <div class="row">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault1"
                    />
                    <label class="form-check-label" for="flexRadioDefault1">
                      มาตามนัด
                    </label>
                  </div>

                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault1"
                    />
                    <label class="form-check-label" for="flexRadioDefault1">
                      ตรวจโรงพยาบาลอื่น
                    </label>
                  </div>
                  
              
            
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="flexRadioDefault1"
                />
                <label class="form-check-label" for="flexRadioDefault1">
                  ไม่มาตามนัด เนื่องจาก
                </label>
              </div>

              <div class="input-group flex-nowrap"> 
                <input
                  type="text"
                  class="form-control"
                  placeholder="กรุณาระบุ"
                  aria-label="กรุณาระบุ"
                  aria-describedby="addon-wrapping"
                />
              </div>
            </div>
                              
                    </div>
                </div>
            </div>
        </div>

    </div>


  
        
        
    
    
  
</body>
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
  />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
</html>