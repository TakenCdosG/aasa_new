<?php
/*
* $bios
*/
?>
<h1 class="title_blue_one">2016 Executive Committee Nomination Bios</h1>
<div class="board-members-bios-container">
	<?php foreach ($bios as $key => $bio): ?>
		<?php $members = $bio['category_bios']; ?>
		<?php if(count($members)>0): ?>
		<label for="edit-submitted-vice-president"><?php echo $bio['category_label']; ?></label>
		<div class="accordion-members">
			<?php $item = 0; ?>
			<?php foreach ($members as $k => $member): ?>
			<?php $machine_name = preg_replace('@[^a-z0-9-]+@','-', strtolower($member->title)); ?>
				<h3 class="panel-title">
			         <a id="<?php echo $machine_name; ?>" href="#accordion<?php echo $bio['category_tid']; ?>" data-parent="#accordion<?php echo $bio['category_tid']; ?>" data-toggle="collapse" class="accordion-toggle <?php echo 'item_'.$key.'_'.$item ; ?>" aria-expanded="true">
			           <?php echo $member->title; ?>
			         </a>
		      	</h3>
		      	<div class="panel-body">
		         <span class="node aller"><?php echo $member->body['und'][0]['value']; ?></span>
		     	</div>
		     <?php $item = $item+1; ?>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>
	<?php endforeach;?>
</div>