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
                            <h4 class="card-title">Church Directory</h4>
                            <p>
                               <div class="row-fluid">
					<div class="span12">
						<div class="alert alert-success">
							 <strong>Verse of the Day!</strong>: But blessed are your eyes, for they see: and your ears, for they hear.- Matt: 13:16
							<a href="#" data-dismiss="alert" class="close">×</a>
						</div>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
                                    <h6 class="card-title text-bold">Churches</h6>
                                     <table class="display datatable table table-stripped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Church </th>
                                                <th>Address</th>
                                                <th>Type</th>
                                                <th>Contact Cell</th>
                                                <th>Holding Capacity</th>
                                                
                                            </tr>
                                        </thead>
                                        <?php 
	 
  $conn=mysqli_connect('localhost','root','','project');
  $table=mysqli_query($conn,'SELECT * FROM entities ORDER BY name ASC');
  while($row=mysqli_fetch_array($table))
	   
			///$row = $result->fetch_array(MYSQLI_ASSOC);
			
			//while($row = $result->fetch_array(MYSQLI_ASSOC))
			{
				
			
			
					
				;?>
					   <tr><td><?php echo $row['name'];?></td>
                       <td><?php echo $row['location'];?></td>
                        <td><?php echo $row['type'];?></td>
                        <td> <?php echo $row['cell'];?></td>
                         <td> <?php echo $row['capacity'];?></td>
                         
                        	</tr>
                        

                         <?php }  echo "</table>";?>
										