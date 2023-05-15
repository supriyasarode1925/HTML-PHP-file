<?php
include('upload-script.php');

?>

<!DOCTYPE html>
<html>

<head>
    <title>Captainweb LLP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
if(!empty($fetchFiles)){
  
  foreach($fetchFiles as $fileData){
   
   $allowFileExt = array('jpg','png','jpeg','gif');
      $fileExt = pathinfo($fileData['file_name'], PATHINFO_EXTENSION); 
$fileURL='uploads/'.$fileData['file_name'];
 if(in_array($fileExt, $allowFileExt)){ 
    
    $imgURL='uploads/'.$fileData['file_name'];
    ?>


<section>
 <div class="container mt-5">
  <div class="row">
    <div class="col-lg-12">
     <table class="table table-borderless table-responsive">
        <tr>
          <td colspan="2" rowspan="2">
            <div class="box1">
             <div class="images1">
               <img src="<?php echo $fileURL ?>" class="img-fluids">
             </div>
            </div>
          </td>
           <td> 
            <div class="box2 res">
              <div class="images">
               <img src="<?php echo $fileURL ?>" class="img-fluid">
              </div>
            </div>
          </td>
          <td>
             <div class="box3 res">
               <div class="images">
                   <img src="<?php echo $fileURL ?>" class="img-fluid">
               </div>
             </div>
          </td>
          <td>
            <div class="box4 res">
                <div class="images">
                   <img src="<?php echo $fileURL ?>" class="img-fluid">
               </div>
             </div>
          </td>
          <td>
             <div class="box5 res">
                <div class="images">
                   <img src="<?php echo $fileURL ?>" class="img-fluid">
               </div>
             </div>
           </td>
        </tr>
          <tr>
          <td>
            <div class="box6 res">
              <div class="images">
                   <img src="<?php echo $fileURL ?>" class="img-fluid">
               </div>
            </div>
          </td>
          <td> 
            <div class="box7 res">
              <div class="images">
                   <img src="<?php echo $fileURL ?>" class="img-fluid">
               </div>
            </div>
          </td>
          <td colspan="2">
             <div class="box8 res">
                <div class="images">
                   <img src="<?php echo $fileURL ?>" class="img-fluid">
               </div>
             </div>
          </td>
        
         
        </tr>
        <tr>
           <td>
             <div class="box10 res">
                <div class="images">
                   <img src="<?php echo $fileURL ?>" class="img-fluid">
               </div>
             </div>
           </td>
          <td>
            <div class="box11 res">
              <div class="images">
                   <img src="<?php echo $fileURL ?>" class="img-fluid">
               </div>
            </div>
          </td>
          <td> 
            <div class="box12 res">
              <div class="images">
                   <img src="<?php echo $fileURL ?>" class="img-fluid">
               </div>
            </div>
          </td>
          <td>
             <div class="box13 res">
               <div class="images">
                   <img src="<?php echo $fileURL ?>" class="img-fluid">
               </div>
             </div>
          </td>
          <td>
            <div class="box14 res">
                <div class="images">
                   <img src="<?php echo $fileURL ?>" class="img-fluid">
               </div>
             </div>
          </td>
          <td>
             <div class="box15">
                
             </div>
           </td>
        </tr>
     </table>
    </div>
  </div>
 </div>
</section>

    <?php
 
}else{
?>

      <div class="files">
        <p>Download Now</p>
       <a href='<?php echo $fileURL ?>'><?php echo $fileExt; ?></a>
   </div>
  
  <?php
}
 }


 }

?>
<!--display files from databse-->
</body>
</html>