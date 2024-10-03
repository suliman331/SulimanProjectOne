<?php 

include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';

$sql = 'SELECT * FROM users';
$reslut = mysqli_query($conn, $sql);
$usres = mysqli_fetch_all($reslut, MYSQLI_ASSOC);



mysqli_free_result($reslut);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en" dir=rtl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css" 
    <link rel="stylesheet" href="./css/style.css">
    <title>سليمان المويس</title>
</head>
<body>

        <div class="container">

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <img src="images/sa.png" alt="">
      <h1 class="display-4 fw-normal">اربح مع سليمان</h1>
      <p class="lead fw-normal">باقي وقت للتسجيل</p>
      <h3 id="demo"></h3>
      <a class="btn btn-outline-secondary" href="#">coming soon</a>
    </div>
  </div>


  <ul class="list-group list-group-flush">
  <li class="list-group-item">المشروع الاول جاري العمل...</li>
  <li class="list-group-item">المشروع الثاني...</li>
  <li class="list-group-item">المشروع الثالث...</li>
  <li class="list-group-item">المشروع الرابع...</li>
  <li class="list-group-item">المشروع الخامس...</li>
</ul>




<div class="position-relative text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<form action="index.php" <?php $_SERVER['PHP_SELF'] ?> method="POST">
    <h3>الرجاء ادخال المعلومات</h3>

  <div class="mb-3">
    <label for="FirstName" class="form-label">الأسم الأول</label>
    <input type="text" name="FirstName" class="form-control" id="FirstName" value="<?php echo $FirstName ?>">
    <div id="emailHelp" class="form-text error"></div>
  </div>

  <div class="mb-3">
    <label for="LastName" class="form-label">الأسم الأخير</label>
    <input type="text" name="LastName" class="form-control" id="LastName" value="<?php echo $LastName ?>">
    <div id="emailHelp" class="form-text error"></div>
  </div>

  <div class="mb-3">
    <label for="Email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="Email" class="form-control" id="Email" value="<?php echo $Email ?>">
    <div id="emailHelp" class="form-text error"></div>
  </div>

 
  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
 
</form>

</div>
  </div>




       

        </div>
        
      <div class="loader">
        <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

    <!-- Button trigger modal -->
    <div class="d-grid gap-2 col-6 mx-auto">
<button type="button" id="winner" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
أختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
     
        <h5 class="modal-title" id="modalLabel"> الرابح في المسابقة  </h5>
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($usres as $usres): ?>
        <h5 class="modal-title" id="modalLabel"> <?php echo htmlspecialchars($usres['FirstName']) . ' ' . htmlspecialchars($usres['LastName']) . '<br> ' ?> </h5>
        <?php endforeach; ?>
      </div>
    
    </div>
  </div>
</div>








<!--
<div id="cards" class="row mb-5 pb-5">
  


  <div class="col-sm-6">
    <div class="card my-2 bg-light">
      <div class="card-body">

       <h5 class="card-title"></h5> 
       <p class="card-text"><?php echo htmlspecialchars($usres['Email']); ?>
</div>
</div>
</div>
      

</div>
-->

<script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>


</html>