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
      $targetFile = $targetDirectory . basename($_FILES['fileToUpload']
      ['name']);
      
      $uploadOK =1;

      $imageFileType = strtolower(pathinfo($targetFile, 
      PATHINFO_EXTENSION));

      //check if image  file is a actual image or fake image

      if(isset($_POST['submit']))
      {
          $check = getimagesize($_FILES["fileToUpload"]['tmp_name']);

          if($check !== false)
          {
              print "file is a image - " . $check["mime"].".<br>";
              $uploadOK = 1;
          }
          else
          {
              print "File is not a image<br>";
              $uploadOK = 0;
          }
        
          // check if file aready exists
        if(file_exists($targetFile))
        {
            print "\nFile aready exists!<br>";
            $uploadOK = 0;
        }

         // check  file size

         if($_FILES["fileToUpload"]["size"] > 5000000)
         {
             print "Your file is too large<br>";
             $uploadOK = 0;
         }

         // Allow certain file formats

         if($imageFileType !="jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif")
         {
             print "Only files formats supported, jpg, png, jpeg and gif <br>";
             $uploadOK = 0;
         }

         // check is $uploadOK is set to 0 by an error
         if($uploadOK ==0)
         {
            print "Your file was not uploaded <br>";
         }
         // check if everythinh is ok and try to upload file
         else
         {  
             if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile))
             {
                 print "The file " . basename($_FILES["fileToUpload"]["name"]).
                 "has been uploaded <br>";
             }
             else
             {
                print "Error to upload <br>";
             }

         }
         

      }


    ?>
</body>

</html>