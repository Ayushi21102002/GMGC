<?php
include "includes/config.php";
	$eno = $_GET['id'];
$br = $_GET['branch'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<script language="javascript" type="text/javascript">
		var popUpWin=0;
		function popUpWindow(URLStr, left, top, width, height)
		{
		if(popUpWin)
		{
		if(!popUpWin.closed) popUpWin.close();
		}
		popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+510+',height='+430+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
		}
		</script>
	</head>
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
				<li class="breadcrumb-item active">View Record</li>
			</ol>
			
			<!-- Icon Cards-->
			<div class="card mb-3">
				<div class="card-header">
					<i class="fas fa-chart-area"></i> Student's Basic Details
					<span class="float-right">
						<a class="btn btn-warning btn-block"  href="javascript:void(0);"  onClick="popUpWindow('http://gmit.edu.in/mentorship/ss/admin/full-profile.php?id=<?php echo $eno;?>&branch=<?php echo $br;?>');" title="View Full Details">Print Data</a></span>&nbsp;&nbsp;
						
					</div>
					
					<div class="card-body">
						<div class="table-responsive">
							<table id="zctb" class="table table-bordered " cellspacing="1" width="100%">
								
								<tbody>
									<tr>
										<td colspan="6" style="color:red"><h4>Personal Details</h4></td>
									</tr>
									<?php
																					
																						if($br == "CIVIL ENGINEERING")
																							{
																								$ret = "select * from civil_student_detail where Stu_Student_Enrollment_No = '$eno' and Stu_Branch = '$br'";
																							}
																							elseif($br == "COMPUTER ENGINEERING")
																							{
																								$ret = "select * from ce_student_detail where Stu_Student_Enrollment_No = '$eno' and Stu_Branch = '$br'";
																							}
																							elseif($br == "MECHANICAL ENGINEERING")
																							{
																								$ret = "select * from me_student_detail where Stu_Student_Enrollment_No = '$eno' and Stu_Branch = '$br'";
																							}
																							elseif($br == "ELECTRICAL ENGINEERING")
																							{
																								$ret = "select * from ee_student_detail where Stu_Student_Enrollment_No = '$eno' and Stu_Branch = '$br'";
																							}
																							elseif($br == "INFORMATION TECHNOLOGY")
																							{
																								$ret = "select * from it_student_detail where Stu_Student_Enrollment_No = '$eno' and Stu_Branch = '$br'";
																							}
																							else{
																								echo "No Data found";
																							}
																																			
																							$result = mysqli_query($conn,$ret) or die(mysqli_error($conn));
																							
																							while($row=mysqli_fetch_array($result))
																							{
																								$i = $row['Stu_Profile_Pic'];
																								$c = $row['Stu_Student_Enrollment_No'];
																							
									?>
									
									<tr>
										<td><b>Student Name:</b></td>
										<td><?php echo $row['Stu_Firstname']." ".$row['Stu_Middlename']." ".$row['Stu_Lastname'];?></td>
										<td><b>Photo :</b></td>
										<td colspan=3><div><?php echo "<img src='../student-images/$i.jpg' class='img-responsive img-thumbnail' width='150px' height='250px'/>";?></div></td>
									</tr>
									<tr>
										<td><b>Branch :</b></td>
										<td colspan="1"><?php echo $row['Stu_Branch'];?></td>
										<td><b>Address :</b></td>
										<td colspan="3"><?php echo $row['Stu_Permanent_Address'];?></td>
									</tr>
									<tr>
										<td colspan="6" style="color:green"><h4>Student's Personal Info</h4></td>
									</tr>
										<tr>
											<td><b>Gender :</b></td>
											<td colspan="1"><?php echo $row['Stu_gender'];?></td>
											<td><b>Birth Date :</b></td>
											<td colspan="3"><?php echo $row['Stu_Birth_Date'];?></td>
											
											
										</tr>
										<tr>
											<td><b>Age :</b></td>
											<td colspan="1"><?php echo $row['Stu_Age'];?></td>
											<td><b>Temporary Address:</b></td>
											<td colspan="3"><?php echo $row['Stu_Temporary_Address'];?></td>
											
										</tr>
										<tr>
											<td><b>City  :</b></td>
											<td ><?php echo $row['Stu_Per_City'];?></td>
											<td><b>State :</b></td>
											<td ><?php echo $row['Stu_Per_State'];?></td>

											<td><b>Pincode :</b></td>
											<td ><?php echo $row['Stu_Per_Pincode'];?></td>

										</tr>
										<tr>
											<td><b>Mobile No :</b></td>
											<td colspan="1"><?php echo $row['Stu_Student_Phone_No'];?></td>
											<td><b>Parents Mobile No:</b></td>
											<td colspan="3"><?php echo $row['Stu_Parents_Phone_No'];?></td>
										</tr>
										<tr>
											<td>
												<b>Email :</b>
											</td>
											<td colspan="3"><?php echo $row['Stu_Email'];?></td>
										</tr>
									<tr>
										<td colspan="6" style="color:green"><h4>Family Info</h4></td>
									</tr>
										<tr>
											<td><b>Father Education :</b></td>
											<td colspan="1"><?php echo $row['Stu_Father_Edu'];?></td>
											<td><b>Father Occupation :</b></td>
											<td colspan="3"><?php echo $row['Stu_Father_Occu'];?></td>
											
											
										</tr>
										<tr>
											<td><b>Mother Education :</b></td>
											<td colspan="1"><?php echo $row['Stu_Mother_Edu'];?></td>
											<td><b>Mother Occupation :</b></td>
											<td colspan="3"><?php echo $row['Stu_Mother_Occu'];?></td>
											
											
										</tr>
										<tr>
											<td><b>Brother Education :</b></td>
											<td colspan="1"><?php echo $row['Stu_Brother_Edu'];?></td>
											<td><b>Brother Occupation :</b></td>
											<td colspan="3"><?php echo $row['Stu_Brother_Occu'];?></td>
											
											
										</tr>
										<tr>
											<td><b>Sister Education :</b></td>
											<td colspan="1"><?php echo $row['Stu_Sister_Edu'];?></td>
											<td><b>Sister Occupation :</b></td>
											<td colspan="3"><?php echo $row['Stu_Sister_Occu'];?></td>
											
											
										</tr>
									<tr>
										<td colspan="6" style="color:green"><h4>Student Admission Info</h4></td>
									</tr>
										<tr>
											<td><b>Category :</b></td>
											<td colspan="1"><?php echo $row['Stu_Category'];?></td>
											<td><b>Admission :</b></td>
											<td colspan="1"><?php echo $row['Stu_Admission_Category'];?></td>
											<td><b>Admission Type:</b></td>
											<td colspan="1"><?php echo $row['Stu_Admission_Type'];?></td>
											
										</tr>
										<tr>
											<td><b>Admitted Seat :</b></td>
											<td colspan="1"><?php echo $row['Stu_ACPC_Admitted_Seat'];?></td>
											<td><b>GUJCET Roll No :</b></td>
											<td colspan="1"><?php echo $row['Stu_GUJCET_Roll_No'];?></td>
											<td><b>ACPC Merit Rank :</b></td>
											<td colspan="1"><?php echo $row['Stu_ACPC_Merit_Rank'];?></td>

										</tr>
										<tr>
											<td><b>Physics :</b></td>
											<td colspan="1"><?php echo $row['Stu_Physics'];?></td>
											<td><b>Chemistry :</b></td>
											<td colspan="1"><?php echo $row['Stu_Chemistry'];?></td>
											<td><b>Maths:</b></td>
											<td colspan="1"><?php echo $row['Stu_Maths'];?></td>
										</tr>
										<tr>										
											<td><b>Percentage :</b></td>
											<td colspan="1"><?php echo $row['stu_per'];?></td>
											<td><b>Medium :</b></td>
											<td colspan="1"><?php echo $row['Stu_12th_medium'];?></td>
											<td><b>Diploma CGPA :</b></td>
											<td colspan="1"><?php echo $row['Stu_Diploma_CGPA'];?></td>
										</tr>
									<tr>
										<td colspan="6" style="color:green"><h4>Student Library Info</h4></td>
									</tr>
										<tr>
											<td><b>Barcode :</b></td>
											<td colspan="1"><?php echo $row['Stu_Barcode'];?></td>
											<td><b>Membar Code :</b></td>
											<td colspan="3"><?php echo $row['Stu_Membar_Code'];?></td>
											
										</tr>
									<?php
									
									}?>
								</tbody>
							</table>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		<?php
			include "includes/footer.php";
			include "includes/script.php";
		?>
	</html>

 