<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $user_name = 'root';
    $pass_word = '';
    $database = 'hoctap';
    $host = 'localhost';
    $port = 3306;
    $connect_database = mysqli_connect($host, $user_name, $pass_word, $database, $port);
    if ($connect_database) {
        echo 'Connect successfully';
        $query = 'SELECT * FROM users';
        $result = mysqli_query($connect_database, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<pre>';
            print_r($row['id']);
            echo '</pre>';
        }
    } else {
        echo 'Connect fail';
    }
    ?>
</body>

</html>