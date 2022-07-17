<?php 

header('refresh: 2');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/style.css?version=<?php echo filemtime('css/style.css'); ?>" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @include('partials/navbar')
    @yield('main_container')
</body>
</html>