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

         // check  file size

         if($_FILES["fileToUpload"]["size"] > 5000000)
         {
             print "Your file is too large";
             $uploadOK = 0;
         }

         // Allow certain file formats

         if($imageFileType !="jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif")
         {
             print "Only files formats supported, jpg, png, jpeg and gif";
             $uploadOK = 0;
         }

         // check is $uploadOK is set to 0 by an error
         if($uploadOK ==0)
         {
            print "Your file was not uploaded";
         }
         // check if everythinh is ok and try to upload file
         else
         {  
             if(move_uploaded_file($_FILES["fileToUpload"]["tmpName"], $targetFile))
             {
                 print "The file " . basename($_FILES["fileToUpload"]["name"]).
                 "has been uploaded";
             }
             else
             {
                print "Error to upload";
             }

         }
         

      }


    ?>
</body>

</html>