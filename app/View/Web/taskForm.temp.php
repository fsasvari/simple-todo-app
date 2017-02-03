<?php

$metaTitle = $lang->get('page.todo_task.meta_title');
$canonical = $lang->get('routes.login');

?>
<?php include 'include/_header.php'; ?>

<form method='post' action='<?php echo $canonical; ?>'>
	<h1><?php echo $lang->get('page.todo_task.heading'); ?></h1>

	<div class='form-group'>
		<label for='name' class='label'><?php echo $lang->get('form.todo_task.name'); ?>:</label>
		<div class='input-group'>
			<input type='text' name='name' id='name' value='<?php echo (isset($post_data['name']) ? $post_data['name'] : ''); ?>' placeholder='<?php echo $lang->get('form.todo_task.name'); ?>' maxlength='80' class='form-control'>
			<span class='input-group-addon'><i class='fa fa-envelope'></i></span>
		</div>
	</div>

	<div class='form-group'>
		<label for='priority' class='label'><?php echo $lang->get('form.todo_task.priority'); ?>:</label>
		<div class='input-group'>
			<select name='priority' id='priority' class='form-control'>

			</select>
			<span class='input-group-addon'><i class='fa fa-tag'></i></span>
		</div>
	</div>

	<div class='form-group'>
		<label for='deadline_at' class='label'><?php echo $lang->get('form.todo_task.deadline_at'); ?>:</label>
		<div class='input-group'>
			<input type='text' name='deadline_at' id='deadline_at' value='<?php echo (isset($post_data['deadline_at']) ? $post_data['deadline_at'] : ''); ?>' placeholder='<?php echo $lang->get('form.todo_task.deadline_at'); ?>' maxlength='80' class='form-control'>
			<span class='input-group-addon'><i class='fa fa-calendar'></i></span>
		</div>
	</div>

	<div class='form-group'>
		<button type='submit' class='btn btn-primary'>
			<?php echo $lang->get('form.todo_task.btn_add'); ?>
		</button>
		</div>
	</div>
</form>

<?php include 'include/_footer.php';