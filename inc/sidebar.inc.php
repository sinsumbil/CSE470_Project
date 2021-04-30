<?php 
if(User::loggedIn()){

	if($userStatus == 1){
	?> 
	<div class='sidebar'>
		<div class='sidebar-area'> 
			<div class='row' style='margin-bottom: 20px;'> 
				<div class='col-md-6'> 
					<div class='user-profile'> 
						<img src='images/3678412 - doctor medical care medical help stethoscope.png' class='img-responsive' style='max-height: 80px;' /> 
					</div>
				</div> 
				<div class='col-md-6'> 
					<div class='user-names'> 
						<?php echo "$userFirstName";  ?>
					</div>
					
					<div class='user-role'> 
						<?php echo "$userRole";  ?>
					</div>
				</div> 
			</div> 
			<ul class='sidebar-menu'>
				<li><a href='../Controller/index.php'><img class='sidebar-menu-icon' src='images/ic_account_balance_wallet_white_24dp.png'  /> Dashboard</a></li>
				<li><a href='../View/profile.php?token=<?php echo $userToken; ?>'><img class='sidebar-menu-icon' src='images/ic_account_box_white_24dp.png'  /> Profile</a></li>
				<li><a href='../View/patients.php'><img class='sidebar-menu-icon' src='images/ic_assignment_ind_white_24dp.png'  /> Patients Book</a></li>
				<li><a href='../Model/add-doctors.php'><img class='sidebar-menu-icon' src='images/ic_group_add_white.png'  /> Add Doctors</a></li>
				<li><a href='../Model/doctors-record.php'><img class='sidebar-menu-icon' src='images/ic_group_add_white.png'  /> Doctors' Records</a></li>
				<li><a href='../View/appointments.php'><img class='sidebar-menu-icon' src='images/ic_alarm_white_24dp.png'  /> Appointment</a></li>
				<!--<li><a href='enquiry.php'><img class='sidebar-menu-icon' src='images/ic_help_outline_white_24dp.png'  /> Enquiry</a></li>-->
				<li><a href='../Model/add-outbreak.php'><img class='sidebar-menu-icon' src='images/ic_group_work_white_24dp.png'  /> Add Emergency</a></li>
				<li><a href='../View/outbreaks.php'><img class='sidebar-menu-icon' src='images/ic_group_work_white_24dp.png'  /> Emergency</a></li>
				<li><a href='../View/hiv.php'><img class='sidebar-menu-icon' src='images/ic_error_outline_white_24dp.png'  /> Report</a></li>
				<li><a href='../View/reports.php'><img class='sidebar-menu-icon' src='images/ic_receipt_white_24dp.png'  /> All Reports</a></li>
			</ul> 
		</div> 
	</div>
	<?php 
	// END OF THE ADMIN
	} else {
	?> 

	<div class='sidebar'>
		<div class='sidebar-area'> 
			<div class='row' style='margin-bottom: 20px;'> 
				<div class='col-md-6'> 
					<div class='user-profile'> 
						<img src='images/3678412 - doctor medical care medical help stethoscope.png' class='img-responsive' style='max-height: 80px;' /> 
					</div>
				</div> 
				<div class='col-md-6'> 
					<div class='user-names'> 
						<?php echo "$userFirstName";  ?>
					</div>
					
					<div class='user-role'> 
						<?php echo "$userRole";  ?>
					</div>
				</div> 
			</div> 
			<ul class='sidebar-menu'>
				<li><a href='../Controller/index.php'><img class='sidebar-menu-icon' src='images/ic_account_balance_wallet_white_24dp.png'  /> Dashboard</a></li>
				<li><a href='../View/profile.php?token=<?php echo $userToken; ?>'><img class='sidebar-menu-icon' src='images/ic_account_box_white_24dp.png'  /> Profile</a></li>
				<li><a href='../View/patients.php'><img class='sidebar-menu-icon' src='images/ic_assignment_ind_white_24dp.png'  /> Patients Book</a></li>
				<li><a href='../Model/new-patient.php'><img class='sidebar-menu-icon' src='images/ic_group_add_white.png'  /> Add Patient</a></li>
				<li><a href='../View/appointments.php'><img class='sidebar-menu-icon' src='images/ic_alarm_white_24dp.png'  /> Appointment</a></li>
				<!--<li><a href='enquiry.php'><img class='sidebar-menu-icon' src='images/ic_help_outline_white_24dp.png'  /> Enquiry</a></li>-->
				<li><a href='../View/outbreaks.php'><img class='sidebar-menu-icon' src='images/ic_group_work_white_24dp.png'  /> Emergency</a></li>
				<li><a href='../View/hiv.php'><img class='sidebar-menu-icon' src='images/ic_error_outline_white_24dp.png'  /> Report</a></li>
				<li><a href='../View/reports.php'><img class='sidebar-menu-icon' src='images/ic_receipt_white_24dp.png'  /> All Reports</a></li>
			</ul> 
		</div> 
	</div>

<?php
}

} else if(Patient::isPatientIn() ) {
?> 

<div class='sidebar'>
		<div class='sidebar-area'> 
			<div class='row' style='margin-bottom: 20px;'> 
				<div class='col-md-6'> 
					<div class='user-profile'> 
						<img src='images/3678443 - ambulance fast fast hospital.png' class='img-responsive' style='max-height: 80px;' /> 
					</div>
				</div> 
				<div class='col-md-6'> 
					<div class='user-names'> 
						<?php echo Patient::getP($_SESSION['patient'], "name");  ?>
					</div>
					
					<div class='user-role'> 
						<?php echo "Patient";  ?>
					</div>
				</div> 
			</div> 
			<ul class='sidebar-menu'>
				<li><a href='../View/patient-data.php'><img class='sidebar-menu-icon' src='images/ic_account_balance_wallet_white_24dp.png'  /> Your Data</a></li>
				<li><a href='../Model/book-appointments.php'><img class='sidebar-menu-icon' src='images/ic_alarm_white_24dp.png'  /> Book an Appointment</a></li>
				<li><a href='../View/p-sent-appointments.php'><img class='sidebar-menu-icon' src='images/ic_alarm_white_24dp.png'  />Sent Appointments</a></li>
				<li><a href='../View/p-reply-appointments.php'><img class='sidebar-menu-icon' src='images/ic_alarm_white_24dp.png'  />Replies</a></li>
				<li><a href='../Controller/logout.php'><img class='sidebar-menu-icon' src='images/ic_group_work_white_24dp.png'  /> Logout</a></li>
			</ul>
		</div> 
	</div>

<?php
}