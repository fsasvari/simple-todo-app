<?php

$metaTitle = $lang->get('page.register.meta_title');
$canonical = $lang->get('routes.register');

?>
<?php include 'include/_header.php'; ?>

<form method='post' action='<?php echo $canonical; ?>'>
	<h1><?php echo $lang->get('page.register.heading'); ?></h1>

	<div class='form-group'>
		<label for='email' class='label'><?php echo $lang->get('form.register.email'); ?>:</label>
		<div class='input-group'>
			<input type='text' name='email' id='email' value='<?php echo (isset($post_data['email']) ? $post_data['email'] : ''); ?>' placeholder='E-mail adress' maxlength='80' class='form-control'>
			<span class='input-group-addon'><i class='fa fa-envelope'></i></span>
		</div>
	</div>

	<div class='form-group'>
		<label for='password' class='label'><?php echo $lang->get('form.register.password'); ?>:</label>
		<div class='input-group'>
			<input type='text' name='password' id='password' value='' placeholder='<?php echo $lang->get('form.register.password_repeat'); ?>' maxlength='30' class='form-control'>
			<span class='input-group-addon'><i class='fa fa-lock'></i></span>
		</div>
	</div>

	<div class='form-group'>
		<label for='password_repeat' class='label'><?php echo $lang->get('form.register.password_repeat'); ?>:</label>
		<div class='input-group'>
			<input type='text' name='password_repeat' id='password_repeat' value='' placeholder='<?php echo $lang->get('form.register.password_repeat'); ?>' maxlength='30' class='form-control'>
			<span class='input-group-addon'><i class='fa fa-lock'></i></span>
		</div>
	</div>

	<div class='form-group'>
		<label for='firstname' class='label'><?php echo $lang->get('form.register.firstname'); ?>:</label>
		<div class='input-group'>
			<input type='text' name='firstname' id='firstname' value='' placeholder='<?php echo $lang->get('form.register.firstname'); ?>' maxlength='50' class='form-control'>
			<span class='input-group-addon'><i class='fa fa-user'></i></span>
		</div>
	</div>

	<div class='form-group'>
		<label for='lastname' class='label'><?php echo $lang->get('form.register.lastname'); ?>:</label>
		<div class='input-group'>
			<input type='text' name='lastname' id='lastname' value='' placeholder='<?php echo $lang->get('form.register.lastname'); ?>' maxlength='80' class='form-control'>
			<span class='input-group-addon'><i class='fa fa-users'></i></span>
		</div>
	</div>

	<div class='form-group'>
		<button type='submit' class='btn btn-primary'>
			<?php echo $lang->get('form.register.btn'); ?>
		</button>
		</div>
	</div>
</form>

<?php include 'include/_footer.php';