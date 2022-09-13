<?php
include_once('db.php');
//$objCon = connectDB();

require_once('service/db.php');
$sql = "SELECT * FROM  	car_product";
$result = $objCon->query($sql);
if ($result->num_rows > 0) {

?>

echo'<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
      <link rel="stylesheet" href="bootstrap-5.2.0-dist\css\bootstrap.min.css">
    </head>';
   echo' <body>
   <style> 
p.a {
  margin-bottom: 2px;
}
		   
p.cut_word {
display: -webkit-box;
-webkit-line-clamp: 2;
-webkit-box-orient: vertical;
overflow: hidden;
text-overflow: ellipsis;
height: 50px;
}		   
	  </style> 
  
<?php
$result = mysqli_query($objCon,"SELECT * FROM  car_product");
$num = mysqli_num_rows($result);//นับแถวทั้งหมดในตารางออกมา
	
			$i = 0;		$limit = 8;
			
?> <div class="row ">   <!--- start class row ------ !-->

<?php  
	while ($i < $num  && $i < $limit ){ 
			$row = mysqli_fetch_array($result);
		
			$id_car = $row['id_car'];

			$brand_car = $row['brand_car'];

		    $type_car = $row['type_car'];
			?>
   <div class="col-3 col-sm-3 col-md-3" style="margin-bottom: 20px;">
              <div class="card h-100"  style="width: 100%; ">
                <img src="school-template-master/img/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                 <h5 class="card-title" > <p class="cut_word"> <?php echo $brand_car ?> </p>  </h5>
                <p class="a">  <a href="#.php" class="btn btn-primary btn-sm" target="_blank">Read More..</a> </p>
                </div>
              </div>
            </div>
			
  <?php $i++; } ; ?>
<?php

?> </div> <!--- end class row ------ !-->
       
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>';   
    
      <?php  }  ?>
  