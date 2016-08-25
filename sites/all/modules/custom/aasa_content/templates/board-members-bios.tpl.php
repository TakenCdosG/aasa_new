<?php
/*
* $bios
*/
?>

<?php foreach ($bios as $key => $bio): ?>
<div class="board-members-bios-container">
	<label for="edit-submitted-vice-president"><?php echo $bio['category_label']; ?></label>
	<?php $members = $bio['category_bios']; ?>
	<?php foreach ($members as $k => $member): ?>
		<div class="panel panel-default">
	       <div class="panel-heading">
	          <h4 class="panel-title">
	             <a href="#accordion1_1" data-parent="#accordion<?php echo $bio['category_tid']; ?>" data-toggle="collapse" class="accordion-toggle" aria-expanded="true">
	               <?php echo $member->title; ?>
	             </a>
	          </h4>
	       </div>
	       <div class="panel-collapse collapse in" id="accordion<?php echo $bio['category_tid']; ?>_<?php echo $member->nid; ?>" aria-expanded="true">
	          <div class="panel-body">
	             <?php echo $member->body['und'][0]['value']; ?>
	          </div>
	       </div>
	    </div>
	<?php endforeach; ?>
</div>
<?php endforeach;?>