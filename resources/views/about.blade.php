<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>about page</h1>
    <h3>owner: <?php echo $nama; ?></h3>
    {{ $nama }} <!-- ini juga berfungsi sama seperti code diata -->


    <a href="/">home</a>
    <a href="/about">about</a>
</body>
</html>