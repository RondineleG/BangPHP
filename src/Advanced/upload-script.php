<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Script to upload file</title>
</head>

<body>
    <?php
      $targetDirectory ="uploads/";
      $targetFile = $targetDirectory . basename($_FILES['fileUpload']['name']);
      
      $uploadOK =1;

      $imageFileType = strtolower(pathinfo($targetDirectory, PATHINFO_EXTENSION));

      //check if image  file is a actual image or fake image

      if(isset($_POST['submit']))
      {
          $check = getimagesize($_FILES["fileToUpload"]['tmpName']);

          if($check !== false)
          {
              print "file is a image - " . $check["mime"].".";
              $uploadOK = 1;
          }
          else
          {
              print "File is not a image";
              $uploadOK = 0;
          }
        // check if file aready exists

        if(file_exists($targetFile))
        {
            print "File aready exists!";
            $uploadOK = 0;
        }

      }


    ?>
</body>

</html>