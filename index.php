<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select the  multiple images and upload in one folder</title>
</head>
<body>
    <h2>Upload the images</h2>
    <p>select the file</p>

    <form action="upload.php" method="post"  enctype="multipart/form-data">
        <input type="file" name="myImages[]" multiple />
        <br><br>
        <input type="submit" name="submit" value="upload Images"> 
    </form>
    
</body>
</html>

