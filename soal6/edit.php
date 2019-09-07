<?php 
include 'config.php';

if (isset($_POST['update'])) {
	$id=$_POST['id'];
	$name=$_POST['name'];
	$work=$_POST['id_work'];
	$salary=$_POST['id_salary'];
	$query = "UPDATE name SET name='$name', id_work='$work', id_salary='$salary' WHERE id='$id'";
	
	
	$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
	header("location:index.php");
}

 ?>
<?php 

	$id=$_GET['id'];

	$result=mysqli_query($mysqli, "SELECT * FROM name WHERE id=$id");
	$data=mysqli_fetch_assoc($result);
	$name=$data['name'];
	$work=$data['id_work'];
	$salary=$data['id_salary'];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>

<div class="container">
 <h2>Edit Data</h2>
      <form method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  value="<?php echo $name; ?>" name="name">

  </div>
  
  <div class="form-group">
		    <label>Work</label>
		    <select class="custom-select" name="id_work">
			  <?php
			
				$query = "SELECT * FROM work ";
				$result = mysqli_query($mysqli, $query);
    			while($data = mysqli_fetch_array($result))
				{
					$selected = '';
					if ($data['id'] == $work) {
						$selected = 'selected';
					} 
					echo '<option value="'.$data['id'].'" '.$selected.'>'.$data['name'].'</option>';				
				}
				?>
			</select>
		  </div>
		  <div class="form-group">
		    <label>Salary</label>
		    <select class="custom-select" name="id_salary">
			  <?php
			
				$query = "SELECT * FROM salary ";
				$result = mysqli_query($mysqli, $query);
    			while($data = mysqli_fetch_array($result))
				{
					$selected = '';
					if ($data['id'] == $salary) {
						$selected = 'selected';
					} 
					echo '<option value="'.$data['id'].'" '.$selected.'>'.rupiah($data['salary']).'</option>';				
				}
				?>
			</select>
		  </div>
  

  </div>
  
  <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
  <button type="submit" name="update" class="btn btn-primary">Submit</button>
</form>
 </div>
 </body>
 </html>