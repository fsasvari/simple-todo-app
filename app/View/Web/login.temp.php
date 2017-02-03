<?php

$metaTitle = $lang->get('page.login.meta_title');
$canonical = $lang->get('routes.login');

?>
<?php include 'include/_header.php'; ?>

<form method='post' action='<?php echo $canonical; ?>'>
	<h1><?php echo $lang->get('page.login.heading'); ?></h1>

	<div class='form-group'>
		<label for='email' class='label'>E-mail address:</label>
		<div class='input-group'>
			<input type='text' name='email' id='email' value='<?php echo (isset($post_data['email']) ? $post_data['email'] : ''); ?>' placeholder='E-mail adress' maxlength='80' class='form-input'>
			<span class='input-group-addon'><i class='fa fa-envelope'></i></span>
		</div>
	</div>

	<div class='form-group'>
		<label for='password' class='label'>Password:</label>
		<div class='input-group'>
			<input type='text' name='password' id='password' value='' placeholder='Password' maxlength='30' class='form-input'>
			<span class='input-group-addon'><i class='fa fa-lock'></i></span>
		</div>
	</div>

	<div class='form-group'>
		<button type='submit' class='btn btn-primary'>
			<?php echo $lang->get('form.login.btn'); ?>
		</button>
		</div>
	</div>
</form>

<?php include 'include/_footer.php';