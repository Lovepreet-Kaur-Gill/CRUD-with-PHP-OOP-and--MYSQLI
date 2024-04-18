<?php
include 'header.php';

$db = new Database();//$db variable se database ko access karenge

if(isset($_POST['submit']))
{
  $name =$_POST['name'];
  $roll =$_POST['roll'];
  $course =$_POST['course'];

if( $name==""|| $roll==""||$course==""){
  echo "ENTER complete info";
}

}
?>
<div class="card-body">
<form action="" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name=""name>
  </div>
  <div class="mb-3">
    <label for="rollno" class="form-label">Roll_no</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Roll_no." name="roll_no">
  </div>
  <div class="mb-3">
    <label for="course" class="form-label">Course</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Course" name="course">
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-primary" href="index.php">Go-Back</a>
</form>
</div>
<?php
include 'footer.php'
?>