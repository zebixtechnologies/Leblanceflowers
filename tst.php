<script>
$('select').selectpicker();
</script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>



<select class="selectpicker" multiple data-live-search="true">
  <option>Mustard</option>
  <option>Ketchup</option>
  <option>Relish</option>
</select>


<?php
$con=mysqli_connect("localhost","root","","studentportal");


$q="select * from universities";

$res=mysqli_query($con,$q);

while($row=mysqli_fetch_array($res)){
	echo $row['gpa']."<br>";
}

 ?>
