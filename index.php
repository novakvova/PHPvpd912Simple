<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!--    link:css-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class="container">
        <h1>Список новин</h1>
        <?php
        include "connection_database.php";
        $sql = "SELECT * FROM news";
        $reader = $dbh->query($sql);
        ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Назва</th>
                <th scope="col">Опис</th>
                <th scope="col">Фото</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($reader as $row) {
                echo "
        <tr>
            <th>{$row['id']}</th>
            <td>{$row['name']}</td>
            <td>{$row['description']}</td>
            <td>
                <img src='/images/{$row['image']}' alt='salo' width='100'/>
            </td>
        </tr>";
            }
            ?>
            </tbody>
        </table>

    </div>
<!--script:src-->
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>