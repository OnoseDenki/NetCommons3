<div class="nc_add_block_outer">
	<select class="nc_add_block" name="add_block">
	<?php foreach ($add_modules as $module_id => $module): ?>
		<option value=""><?php echo(__('Select module')); ?></option>
		<option value="<?php echo($module_id); ?>"><?php echo(h($module['Module']['module_name'])); ?></option>
	<?php endforeach; ?>
	</select>
</div>