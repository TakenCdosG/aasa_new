<?php if(isset($info["environment"])): ?>
	<?php echo $info["environment"]; ?>
<?php endif; ?>

<?php if(isset($info["renewal_period"])): ?>
	<h4> Renewal Period.</h4>
	<?php echo $info["renewal_period"]; ?>
<?php endif; ?>

<?php if(isset($info["current_available_reminder_date_and_amount"])): ?>
	<br/>
	<h4> Current Available Reminder Date And Amount.</h4>
	<?php echo $info["current_available_reminder_date_and_amount"]; ?>
<?php endif; ?>

<?php if(isset($info["user_membership_renewal_table"])): ?>
	<br/>
	<h4> User Membership & Renewal Table.</h4>
	<?php echo $info["user_membership_renewal_table"]; ?>
<?php endif; ?>