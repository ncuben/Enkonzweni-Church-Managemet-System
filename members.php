 <?php session_start(); 
if (!isset($_SESSION['user_id']))
    header("Location: index.php");?>
	<?php include ("inc/header.php");
		include ("inc/topnav.php");
		include("inc/sidebar.php");
		$pagetitle ="eNkonzweni Church Management System | Locations";
		?>   
        <?php include("inc/functions.php"); ?>	
<?php include("inc/config.php"); ?>
<?php include("inc/db-const.php"); ?>
<div class="content-wrapper">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="card-title">Member's Directory</h4>
                            <p>
                                <div class="row-fluid">
					<div class="span12">
						<div class="alert alert-info">
							 <strong>Verse of the Day!</strong>: But blessed are your eyes, for they see: and your ears, for they hear.- Matt: 13:16
							<a href="#" data-dismiss="alert" class="close">×</a>
						</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
                                    <h6 class="card-title text-bold">Church Members Lists</h6>
                                                                        <table class="display datatable table table-stripped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Category</th>
                                                <th>Cell#</th>
                                                <th>Address</th>
                                               
                                            </tr>
                                        </thead>
                                        <?php 
	 
  $conn=mysqli_connect('localhost','root','','project');
  $table=mysqli_query($conn,'SELECT * FROM members ORDER BY name ASC');
  while($row=mysqli_fetch_array($table))
	   
			///$row = $result->fetch_array(MYSQLI_ASSOC);
			
			//while($row = $result->fetch_array(MYSQLI_ASSOC))
			{
				
			
			
					
				;?>
					   <tr><td><?php echo $row['name'];?></td>
                       <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['type'];?></td>
                        <td> <?php echo $row['cell'];?></td>
                         <td> <?php echo $row['address'];?></td>
                         
                        	</tr>
                        

                         <?php }  echo "</table>";?>
										