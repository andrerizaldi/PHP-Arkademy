<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gudang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style>
    .u-margin-top-med{
        margin-top:20px;
    }
</style>
<body>
    <div class="container u-margin-top-med">
        <center>
        <h2>
            Data Products
        </h2>
        </center>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>Products</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    $query = "SELECT categories.id as c_id, categories.name as c_name, GROUP_CONCAT(products.name) as p_name 
                                FROM categories 
                                INNER JOIN products ON categories.id = products.category_id 
                                GROUP BY categories.name 
                                ORDER BY categories.id ASC";
                    $sql = mysqli_query($koneksi,$query) or die(
                    mysqli_error($koneksi));

                    $items;
                    while($items = mysqli_fetch_array($sql) ){
                ?>
                <tr>
                    <th><?php echo $items['c_id'] ?></th>
                    <td><?php echo $items['c_name'] ?></td>
                    <td><?php echo $items['p_name'] ?></td>
                </tr>
                    <?php } ?>
            </tbody>
        </table>
        <a href="tambah_category.php" class="btn btn-primary btn-flat pull-left"><span class="fa fa-plus"></span> Tambah Category</a>
    </div>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>