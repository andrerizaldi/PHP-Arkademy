<?php include 'koneksi.php'; ?>

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $query = "INSERT INTO categories (name) VALUES ('$name')";
        $sql = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));

        if($sql){
            echo '<script>window.alert("Data category berhasil disimpan!");window.location=("data-product.php");</script';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah Category</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
	    <h4>
	        Tambah Category
	    </h4>
        </center>
	    <section class="content">
			<div class="row">
				<div class="box box-primary">
					<div class="box-body">
						<form action="" method="POST" id="myForm" enctype="multipart/form-data">

							<div class="form-group">
					            <div>
					            	<label><b>Category</b></label>
					            	<br>
									<input type="text" class="form-control" name="name" id="name">
								</div>
							</div>
							<div>
								 <div>
								      <button type="submit" name="submit" class="btn btn-primary btn-flat pull-left">Tambah</button>
								 </div>
							</div>	
						</form>
					</div>
				</div>		
			</div>
		</section>
	</div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>