<!DOCTYPE html>
<html>
    <head>
        <title>Add file form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="parsing.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="csvToUpload" id="csvToUpload"><br>
            <input type="submit" value="Upload file" name="submit">
        </form>   
    </body>
</html>
