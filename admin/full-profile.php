<?php
include "includes/config.php";
$eno = $_GET['id'];
$br = $_GET['branch'];
?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}
function f3()
{
window.print();
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Student Master Details</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="hostel.css" rel="stylesheet" type="text/css">
  </head>
  <body>
<table width="100%" border="0">
<?php 
      
      if($br == "CIVIL ENGINEERING")
      {
      $sel = "select * from civil_student_detail where Stu_Student_Enrollment_No = '$eno' and Stu_Branch = '$br'";
      }
      elseif($br == "COMPUTER ENGINEERING")
      {
      $sel = "select * from ce_student_detail where Stu_Student_Enrollment_No = '$eno' and Stu_Branch = '$br'";
      }
      elseif($br == "MECHANICAL ENGINEERING")
      {
      $sel = "select * from me_student_detail where Stu_Student_Enrollment_No = '$eno' and Stu_Branch = '$br'";
      }
      elseif($br == "ELECTRICAL ENGINEERING")
      {
      $sel = "select * from ee_student_detail where Stu_Student_Enrollment_No = '$eno' and Stu_Branch = '$br'";
      }
      elseif($br == "INFORMATION TECHNOLOGY")
      {
      $sel = "select * from it_student_detail where Stu_Student_Enrollment_No = '$eno' and Stu_Branch = '$br'";
      }
      else{
      echo "No Data found";
      }
      $r = mysqli_query($conn,$sel) or die(mysqli_error($conn));
      while($row1=mysqli_fetch_array($r))
      {
      $i = $row1['Stu_Profile_Pic'];
      $c = $row1['Stu_Student_Enrollment_No'];
      ?>
      
  <tr>
        <td colspan="2" align="center" class="font1">&nbsp;</td>
  </tr>
      <tr>
        <td colspan="2" align="center" class="font1">&nbsp;</td>
  </tr>
      
      <tr>
        <td colspan="2"  class="font"><?php echo $row1['Stu_Firstname']." ".$row1['Stu_Middlename']." ".$row1['Stu_Lastname'];?>'S <span class="font1"> Information &raquo;</span> </td>
  </tr>
      <tr>
        <td colspan="2"  class="font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div align="right">Record Date : <span class="comb-value"><?php echo date('d/m/Y h:i:s',time());?></span></div></td>
  </tr>
      <tr>
        <td colspan="2"  class="heading" style="color: red;">Student's Personal Information: &raquo; </td>
  </tr>
      <tr>
        <td colspan="2"  class="font1"><table width="100%" border="0">
                <tr>
                  <td width="32%" valign="top" class="heading">Enrollment No : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $eno;?></span></td>
                    </tr>
                  <tr>
                  <td width="22%" valign="top" class="heading">Photo : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo "<img src='../student-images/$i.jpg' class='img-responsive img-thumbnail'  width='150px' height='150px'/>";?></span></td>
                    </tr>
                  
                    <tr>
                    <td width="12%" valign="top" class="heading">Batch : </td>
                      <td class="comb-value1"><?php echo $row1['Stu_Branch'];?></td>
                    </tr>
                     <tr>
                    <td width="12%" valign="top" class="heading">Branch: </td>
                      <td class="comb-value1"><?php echo $row1['Stu_Batch'];?></td>
                    </tr>
                    <tr>
                    <td width="12%" valign="top" class="heading">Address: </td>
                      <td class="comb-value1"><?php echo $row1['Stu_Permanent_Address'];?></td>
                    </tr>
                    
<tr>
   <td colspan="2" align="left"  class="heading" style="color: green;">Student's Personal Info &raquo; </td>
  </tr>
 <tr>
        <td colspan="2"  class="font1"><table width="100%" border="0">
                <tr>
                  <td width="32%" valign="top" class="heading">Gender : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row1['Stu_gender'];?></span></td>
                    </tr>
                  <tr>
                  <td width="22%" valign="top" class="heading">Birth Date : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row1['Stu_Birth_Date'];?></span></td>
                    </tr>
                  
                    <tr>
                    <td width="12%" valign="top" class="heading">Age : </td>
                      <td class="comb-value1"><?php echo $row1['Stu_Age'];?></td>
                    </tr>
                     <tr>
                    <td width="12%" valign="top" class="heading">Temporary Address: </td>
                      <td class="comb-value1"><?php echo $row1['Stu_Temporary_Address'];?></td>
                    </tr>
                    <tr>
                    <td width="12%" valign="top" class="heading">City  :</td>
                      <td class="comb-value1"><?php echo $row1['Stu_Per_City'];?></td>
                    </tr>
                      <tr>
                  <td width="32%" valign="top" class="heading">State :</td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row1['Stu_Per_State'];?></span></td>
                    </tr>
                  <tr>
                  <td width="22%" valign="top" class="heading">Pincode : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row1['Stu_Per_Pincode'];?></span></td>
                    </tr>
                  
                    <tr>
                    <td width="12%" valign="top" class="heading">Mobile No : </td>
                      <td class="comb-value1"><?php echo $row1['Stu_Student_Phone_No'];?></td>
                    </tr>
                     <tr>
                    <td width="12%" valign="top" class="heading">Parents Mobile No: </td>
                      <td class="comb-value1"><?php echo $row1['Stu_Parents_Phone_No'];?></td>
                    </tr>
                    <tr>
                    <td width="12%" valign="top" class="heading">Email :</td>
                      <td class="comb-value1"><?php echo $row1['Stu_Email'];?></td>
                    </tr>
                   
    </tr>
   <tr>
   <td colspan="2" align="left"  class="heading" style="color: green;">Student's Admission Related Info &raquo; </td>
  </tr>
 <tr>
        <td colspan="2"  class="font1"><table width="100%" border="0">
                <tr>
                  <td width="32%" valign="top" class="heading">Category : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row1['Stu_Category'];?></span></td>
                    </tr>
                  <tr>
                  <td width="22%" valign="top" class="heading">Admission : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row1['Stu_Admission_Category'];?></span></td>
                    </tr>
                  
                    <tr>
                    <td width="12%" valign="top" class="heading">Admission Type:</td>
                      <td class="comb-value1"><?php echo $row1['Stu_Admission_Type'];?></td>
                    </tr>
                     <tr>
                    <td width="12%" valign="top" class="heading">Admitted Seat :</td>
                      <td class="comb-value1"><?php echo $row1['Stu_ACPC_Admitted_Seat'];?></td>
                    </tr>
                    <tr>
                    <td width="12%" valign="top" class="heading">GUJCET Roll No :</td>
                      <td class="comb-value1"><?php echo $row1['Stu_GUJCET_Roll_No'];?></td>
                    </tr>
                      <tr>
                  <td width="32%" valign="top" class="heading">ACPC Merit Rank :</td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row1['Stu_ACPC_Merit_Rank'];?></span></td>
                    </tr>
                  <tr>
                  <td width="22%" valign="top" class="heading">Physics : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row1['Stu_Physics'];?></span></td>
                    </tr>
                  
                    <tr>
                    <td width="12%" valign="top" class="heading">Chemistry : </td>
                      <td class="comb-value1"><?php echo $row1['Stu_Chemistry'];?></td>
                    </tr>
                     <tr>
                    <td width="12%" valign="top" class="heading">Maths: </td>
                      <td class="comb-value1"><?php echo $row1['Stu_Maths'];?></td>
                    </tr>
                    <tr>
                    <td width="12%" valign="top" class="heading">Percentage :</td>
                      <td class="comb-value1"><?php echo $row1['stu_per'];?></td>
                    </tr>
                    <tr>
                    <td width="12%" valign="top" class="heading">Medium : </td>
                      <td class="comb-value1"><?php echo $row1['Stu_12th_medium'];?></td>
                    </tr>
                    <tr>
                    <td width="12%" valign="top" class="heading">Diploma CGPA :</td>
                      <td class="comb-value1"><?php echo $row1['Stu_Diploma_CGPA'];?></td>
                    </tr>
    </tr>
<tr>
<td colspan="2" align="left"  class="heading" style="color: green;">Family Info</h4></td>
									</tr>
										<tr>
											<td width="12%" valign="top" class="heading">Father Education :</td>
											<td class="comb-value1"><?php echo $row1['Stu_Father_Edu'];?></td>
										</tr>
												<tr>										<td width="12%" valign="top" class="heading">Father Occupation :</td>
											<td class="comb-value1"><?php echo $row['Stu_Father_Occu'];?></td>
											
										</tr>
										<tr>
											<td width="12%" valign="top" class="heading">Mother Education :</td>
											<td class="comb-value1"><?php echo $row['Stu_Mother_Edu'];?></td>
										</tr>
										<tr>
											<td width="12%" valign="top" class="heading">Mother Occupation :</td>
											<td class="comb-value1"><?php echo $row['Stu_Mother_Occu'];?></td>
										</tr>
										<tr>
											<td width="12%" valign="top" class="heading">Brother Education :</td>
                                            <td class="comb-value1"><?php echo $row['Stu_Brother_Edu'];?></td>
                                        </tr>
                                        <tr>
											<td width="12%" valign="top" class="heading">Brother Occupation :</td>
											<td class="comb-value1"><?php echo $row['Stu_Brother_Occu'];?></td>
										</tr>
										<tr>
											<td width="12%" valign="top" class="heading">Sister Education :</td>
											<td class="comb-value1"><?php echo $row['Stu_Sister_Edu'];?></td>
										</tr>
										<tr>
											<td width="12%" valign="top" class="heading">Sister Occupation :</td>
											<td class="comb-value1"><?php echo $row['Stu_Sister_Occu'];?></td>
											
											
										</tr>


  

     
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <?php }?>
              
          
                  
 
    
           
 
 
  
  <tr>
    <td colspan="2" align="right" ><form id="form1" name="form1" method="post" action="">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="14%">&nbsp;</td>
          <td width="35%" class="comb-value"><label>
            <input name="Submit" type="submit" class="txtbox4" value="Prints this Document " onClick="return f3();" />
          </label></td>
          <td width="3%">&nbsp;</td>
          <td width="26%"><label>
            <input name="Submit2" type="submit" class="txtbox4" value="Close this document " onClick="return f2();"  />
          </label></td>
          <td width="8%">&nbsp;</td>
          <td width="14%">&nbsp;</td>
        </tr>
      </table>
        </form>    </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</body>
</html>

     
      
     