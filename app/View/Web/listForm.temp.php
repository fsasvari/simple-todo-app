<?php

$metaTitle = $lang->get('page.todo_list.meta_title');
$canonical = $lang->get('routes.login');

?>
<?php include 'include/_header.php'; ?>

<form method='post' action='<?php echo $canonical; ?>'>
	<h1><?php echo $lang->get('page.todo_list.heading'); ?></h1>

	<div class='form-group'>
		<label for='name' class='label'><?php echo $lang->get('form.todo_list.name'); ?>:</label>
		<div class='input-group'>
			<input type='text' name='name' id='name' value='<?php echo (isset($post_data['name']) ? $post_data['name'] : ''); ?>' placeholder='<?php echo $lang->get('form.todo_list.name'); ?>' maxlength='80' class='form-control'>
			<span class='input-group-addon'><i class='fa fa-envelope'></i></span>
		</div>
	</div>

	<div class='form-group'>
		<button type='submit' class='btn btn-primary'>
			<?php echo $lang->get('form.todo_list.btn_add'); ?>
		</button>
		</div>
	</div>
</form>

<?php include 'include/_footer.php';