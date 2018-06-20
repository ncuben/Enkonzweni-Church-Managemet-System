<?php include ("inc/header.php");
		include ("inc/topnav.php");
		include("inc/general-sidebar.php");
		$pagetitle ="eNkonzweni Church Management System | Home";
		?>   
        <?php include("inc/functions.php"); ?>	
<?php include("inc/config.php"); ?>
<?php include("inc/db-const.php"); ?>	   <!-- PAGE CONTENT -->
            <div class="content-wrapper">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="card-title"><?php echo $pagetitle; ?></h4>
                            <p>
                               <div class="row-fluid">
					<div class="span12">
						<div class="alert alert-info">
							Welcome to our Church Management Information System code named: <strong>eNkonzweni</strong>. Get your account from your Pastor or Asher!
							<a href="#" data-dismiss="alert" class="close">×</a>
						</div> <div class="row-fluid">
					<div class="span12">
						<div class="alert alert-success">
							 <strong>Verse of the Day!</strong>: But blessed are your eyes, for they see: and your ears, for they hear.- Matt: 13:16
							<a href="#" data-dismiss="alert" class="close">×</a>
						</div>
                            </p>
                        </div>
                    </div>

                    <div class="row">                  <div class="col-lg-6">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="text-bold card-title">Church Branches Directory</h5>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Branch Name</th>
                                                <th>Location</th>
                                                <th>Address</th>
                                                <th>Contacts</th>
                                            </tr>
                                        </thead>
                                       <tbody>
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
                       <td><?php echo $row['address'];?></td>
                       <td><?php echo $row['cell'];?></td>
                       
                                                	</tr>
                        

                         <?php }  echo "</table>";?>
	                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="text-bold card-title">Church Events</h5>
                                    <table class="table table-inverse">
                                        <thead>
                                            <tr>
                                                <th>Event</th>
                                                <th>Venue</th>
                                                <th>Date</th>
                                                <th>RSVP</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
	 
  $conn=mysqli_connect('localhost','root','','project');
  $table=mysqli_query($conn,'SELECT * FROM events ORDER BY date ASC');
  while($row=mysqli_fetch_array($table))
	   
			///$row = $result->fetch_array(MYSQLI_ASSOC);
			
			//while($row = $result->fetch_array(MYSQLI_ASSOC))
			{
				
			
			
					
				;?>
					   <tr><td><?php echo $row['event'];?></td>
                       <td><?php echo $row['venue'];?></td>
                       <td><?php echo $row['date'];?></td>
                       <td><?php echo $row['rsvp'];?></td>
                       
                                                	</tr>
                        
                         <?php }  echo "</table>";?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><a href='https://www.paynow.co.zw/Payment/Link/?q=c2VhcmNoPW5jdWJlbiU0MGNoYXJpc3NvZnQuY29tJmFtb3VudD01LjAwJnJlZmVyZW5jZT0xMDAxJmw9MQ%3d%3d' target='_blank'><img src='https://www.paynow.co.zw/Content/Buttons/Medium_buttons/button_pay-now_medium.png' style='border:0' /></a>