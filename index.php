<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select the  multiple images and upload in one folder</title>
 <style>
    body{
        background-color: pink;
    }
    h1{
        text-align: center;
    }
    h2{
        text-align: center;
    }
    form{
        text-align: center;
    }
    </style>

</head>
<body>
    <h1>Upload the images</h1>
    <h2>select the file</h2>

    <form action="upload.php" method="post"  enctype="multipart/form-data">
        <input type="file" name="myImages[]" multiple />
        <br><br>
        <input type="submit" name="submit" value="upload Images"> 
    </form>
    
</body>
</html>

