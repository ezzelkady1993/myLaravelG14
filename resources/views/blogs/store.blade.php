<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <h3>Blog Data</h3>

    {{-- <h3> {!!  '<h4>Page : </h4>'.$title   !!} </h3> --}}

    <p>
        <?php
        echo $formInput['title'] . '<br>';
        echo $formInput['content'];
        ?>
    </p>

</body>

</html>
