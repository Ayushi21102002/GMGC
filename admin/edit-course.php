<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if(isset($_POST['submit']))
{
$coursecode=strtoupper($_POST['cc']);
$coursesn=strtoupper($_POST['cns']);
$coursefn=($_POST['cnf']);
$id=$_GET['id'];
$query="update courses set course_code=?,course_sn=?,course_fn=? where id=?";
$stmt = $conn->prepare($query);
$rc=$stmt->bind_param('sssi',$coursecode,$coursesn,$coursefn,$id);
$stmt->execute();
echo"<script>alert('Course has been Updated successfully');</script>";
echo "<script>location.href='manage-courses.php';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<?php
include "includes/link.php";
include "includes/navigationbar.php";
include "includes/sidebar.php";
?>
    <div id="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Edit Courses</li>
        </ol>
		
        <!-- Icon Cards-->
         <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i> Edit courses Details
			</div>
			
            <div class="card-body">
            <form method="POST" class="form-horizontal">
	<?php	
	$id=$_GET['id'];
	$ret="select * from courses where id='$id'";
	$result=mysqli_query($conn,$ret) or die(mysqli_error($conn));
										
	 
	   while($row=mysqli_fetch_array($result))
	  {
	  	?>
						<div class="hr-dashed"></div>
						<div class="form-group">
						<label class="col-sm-2 control-label">Course Code </label>
					<div class="col-sm-8">
					<input type="text"  name="cc" value="<?php echo $row['course_code'];?>"  class="form-control"> </div>
					</div>
				 <div class="form-group">
				<label class="col-sm-2 control-label">Course Name (Short)</label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="cns" id="cns" value="<?php echo $row['course_sn'];?>" required="required">
						 </div>
						</div>
<div class="form-group">
									<label class="col-sm-2 control-label">Course Name(Full)</label>
									<div class="col-sm-8">
									<input type="text" class="form-control" name="cnf" value="<?php echo $row['course_fn'];?>" >
												</div>
											</div>


<?php } ?>
												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Update Course">
												</div>
											</div>

										</form>
				
			</div>
			
		</div>
			
			
	   
        </div>
		</div>
       <!-- /.container-fluid -->
	</div>
      <?php
      include "includes/footer.php";
      include "includes/script.php";
      ?>

    