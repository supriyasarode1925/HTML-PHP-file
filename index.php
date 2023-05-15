<?php include('upload-script.php'); ?>
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

<!-------------------------------------------------------->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="upload-form">
                   <form  method="post" enctype="multipart/form-data">
                      <input type="file" name="file_name[]" multiple>
                      <input type="submit" value="Upload File" name="submit">
                   </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------------------------------------------------->




</body>
</html>