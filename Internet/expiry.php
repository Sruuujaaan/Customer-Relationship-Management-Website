
<?php
session_start();
$aid= $_SESSION['aid'];
if(empty($aid))
{
	echo "<script>window.location.href='Homepage.php#admin'</script>";
}
else
{
	include('customer.php');
	include('connect.php');
	?>
<body>
<form method='POST'>
<div class="w3-padding-large" id="main">
<div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <center>
	   <h2 class="w3-text-light-green">View Customers</h2>
       <hr style="width:200px" class="w3-opacity">
	   
	   <?php
	  
   
	   $sel="select * from Customers";
	   $res=$con->query($sel);
	   if(mysqli_num_rows($res)==0)
	   {
		   echo "no data found";
	   }
	   else
	   {
		   echo"
		   <div class='w3-container'>
	   <table class='w3-table-all w3-hoverable' cellspacing='0' cellpadding='0' width='80%' >
	   <thead>
        <tr class='w3-light-green'>
	   <th>Id</th>
	   <th>Name</th>
	   <th>Contact</th>
	   <th>Email</th>
	   <th>Business</th>
	   <th>Type</th>
	   <th>Region</th>
	   <th>Plan</th>
	   <th>Expiry Date</th> 
		</tr>
    </thead>   ";
		   while($data=mysqli_fetch_array($res))
		   {
			   $cid=$data['cust_id'];
	  $cname=$data['cname'];
	  $contact=$data['contact'];
	  $email=$data['email'];
	  $region=$data['region'];
	  $expiry=$data['expiry'];
	 
 $date=date('Y-m-d',strtotime($expiry. ' -5 day'));
 $cdate=date('Y-m-d');
	 if($cdate==$date)
	 {
			  echo"
			 
    <tbody bgcolor='#f6f6f6'>
      <tr align='center'>
        <td>".$cid."</td>
        <td>".$cname."</td>
        <td>".$contact."</td>
		<td>".$email."</td>
		<td>".$data['business']."</td>
		<td>".$data['btype']."</td>
		<td>".$data['region']."</td>
		<td>".$data['plan']."</td>
		<td>".$data['expiry']."</td>
      </tr>

    </tbody>";
		 }
		   }
			   
	   }
	   
	   ?>
	   </table>
	   </div>
	   </div>
	   </div>
	   </form>
	   </body>
<?php
}
?>