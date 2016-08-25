<?php
/*
* $bios
*/
?>

<div class="board-members-bios-container">
	<?php foreach ($bios as $key => $bio): ?>
		<?php $members = $bio['category_bios']; ?>
		<?php if(count($members)>0): ?>
		<label for="edit-submitted-vice-president"><?php echo $bio['category_label']; ?></label>
		<div class="accordion-members">
			<?php foreach ($members as $k => $member): ?>
				<h3 class="panel-title">
			         <a href="#accordion<?php echo $bio['category_tid']; ?>" data-parent="#accordion<?php echo $bio['category_tid']; ?>" data-toggle="collapse" class="accordion-toggle" aria-expanded="true">
			           <?php echo $member->title; ?>
			         </a>
		      	</h3>
		      	<div class="panel-body">
		         <?php echo $member->body['und'][0]['value']; ?>
		     	</div>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>
	<?php endforeach;?>
</div>