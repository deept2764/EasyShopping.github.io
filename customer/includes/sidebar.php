<div class="panel panel-default sidebar-menu">
	<div class="panel-heading"><!--panel heading start-->
		<center>
			<img src="customer_images/deep.png" class="img-responsive">
		</center>
		<br>
		<h3 align="center" class="panel-title">Name:Deep</h3>
		</div><!--panel heading end-->
	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked">
		<li class=" <?php if (isset($_GET['my_order'])) {
				echo "active";
			} ?> > ">
				<a href="my_account.php?my_order"><i class="fa fa-list"></i>My Order</a>
			</li>

			<li class=" <?php if (isset($_GET['pay_offline'])) {
				echo "active";
			} ?> > ">
				<a href="my_account.php?pay_offline"><i class="fa fa-bolt"></i>Pay Offline</a>
			</li>
			
			<li class=" <?php if (isset($_GET['edit_act'])) {
				echo "active";
			} ?> > ">
				<a href="my_account.php?edit_act"><i class="fa fa-pencil"></i>Edit Account</a>
			</li>
			<li class=" <?php if (isset($_GET['change_pass'])) {
				echo "active";
			} ?> > ">
				<a href="my_account.php?change_pass"><i class="fa fa-user"></i>Change Password</a>
			</li>
			<li class=" <?php if (isset($_GET['delete_ac'])) {
				echo "active";
			} ?> > ">
				<a href="my_account.php?delete_ac"><i class="fa fa-trace-o"></i>Delete Account</a>
			</li>
			<li class=" <?php if (isset($_GET['logout'])) {
				echo "active";
			} ?> > ">
				<a href="my_account.php?logout"><i class="fa fa-sign-out"></i>Logout</a>
			</li>
		</ul>
		
	</div>
</div>