<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>content</title>
</head>
<body>
    <form method="post" action="index.php">
    <input type="text" id="select" name="text">
    <button type="submit">查詢</button>
    </form>
    <textarea  id="txt" style="width:100%" rows="100">
    <?php
    if(isset($_POST['text'])){
    var_dump(str_getcsv(file_get_contents("http://data.taipei/opendata/datalist/apiAccess?scope=datasetMetadataSearch&q=".$_POST['text'])));
    }
    ?>
    </textarea>
</body>
</html>
