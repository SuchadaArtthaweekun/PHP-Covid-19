<?php
    include "logic.php";
?>

<!doctype html>
<html lang="en">
  <head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!--Google Font-->
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/ef95e2206f.js" crossorigin="anonymous"></script>

    <!--link css-->
    <link rel="stylesheet" href="style.css">
    <title>Covide 19 Tracker!</title>
    
  </head>
  <body>
    
    <div class="container-fluid bg-blue p-5 text-centerb  md-3">
        <div>
        <h1 class="text-light" style="font-size:70px;">รายงานสถานการณ์โควิด-19 ประเทศไทย</h1>
        <h5 class="text-light " >Project to keep track all the covide 19 ceses in Thailand.</h5>
    </div>
</div>
    <div class="container my-5">
        <div class="row align-item-center">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-warning">
                        <h5>ยืนยันผู้ป่วย</h5>
                    </div>
                    <div class="card-body bg-light text-warning">
                        <?php echo $confirmed;?>
                    </div>
                </div>
            </div>
     
            <div class="col">
                <div class="card">
                    <div class="card-header bg-success">
                        <h5>ผู้ป่วยที่หายแล้ว</h5>
                    </div>
                    <div class="card-body bg-light text-success">
                        <?php echo $recovered;?>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h5 class="text-light">รักษาตัว</h5>
                    </div>
                    <div class="card-body bg-light text-dark">
                        <?php echo $hospitalized;?>
                    </div> 
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header bg-danger">
                        <h5>มีผู้เสียชีวิต</h5>
                    </div>
                    <div class="card-body bg-light text-danger">
                        <?php echo $deaths;?>
                    </div>
                </div>
            </div>
    </div>
    <div class="container my-5">
        <div class="row align-item-center">
            
            <div class="col">
                <div class="card">
                    <div class="card-header bg-warning">
                        <h5>ยืนยันผู้ป่วยใหม่</h5>
                    </div>
                    <div class="card-body bg-light text-warning">
                        <?php echo $NewConfirmed;?>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header bg-success">
                        <h5>ผู้ป่วยที่หายเพิ่ม</h5>
                    </div>
                    <div class="card-body bg-light text-success">
                        <?php echo $NewRecovered;?>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h5 class="text-light">เข้ารักษาตัวใหม่</h5>
                    </div>
                    <div class="card-body bg-light text-dark">
                        <?php echo $NewHospitalized;?>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header bg-danger">
                        <h5>ผู้เสียชีวิตเพิ่ม</h5>
                    </div>
                    <div class="card-body bg-light text-danger">
                        <?php echo $NewDeaths;?>
                    </div>
                </div>
            </div>


   
   
  </body>
</html>