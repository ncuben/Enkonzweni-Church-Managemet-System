  <?php session_start(); 
if (!isset($_SESSION['user_id']))
    header("Location: index.php");?>
	<?php include ("inc/header.php");
		include ("inc/topnav.php");
		include("inc/sidebar.php");
		$pagetitle ="eNkonzweni Church Management System | Offering";
		?>   
        <?php include("inc/functions.php"); ?>	
<?php include("inc/config.php"); ?>
<?php include("inc/db-const.php"); ?>
 <div class="content-wrapper">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Process Tithe | Offering</h5>
                                    <form action="offering.php" class="form-horizontal">
                                        <div class="form-group row margin-top-30">
                                            <div class="col-md-3">
                                                <label class="control-label col-form-label">Username</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="user_username" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class="control-label col-form-label">Paid</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="number" name="paid" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class="control-label col-form-label">Description</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="others" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class="control-label col-form-label">Due</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
    												  <i class="fa fa-user"></i>
    												</span>
                                                    <input type="text" name="due" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="pull-right">
                                            <button type="reset" class="btn btn-secondary">
                                                Reset
                                                <i class="fa fa-refresh position-right"></i>
                                            </button>

                                            <button type="submit" name="submit" class="btn btn-primary">
                                               Record Offering | Tithe
                                                <i class="fa fa-arrow-right position-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><?php
$conn = mysqli_connect('localhost','root','','project');
if(isset($_POST['submit'])){
	$user_username=$_POST['user_username'];
	$paid=$_POST['paid'];
	$others=$_POST['others'];
	$due=$_POST['due'];
	
		
	$query="insert into allocations (user_username, paid, others, due)values('$user_username', '$paid', '$others', '$due')";
	
	if (mysqli_query($conn,$query))
	{
		echo '<script type="text/javascript">alert("Thank you for your Stewardship!");</script>';
	}
}
?>