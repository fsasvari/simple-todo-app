<!DOCTYPE html>
<html lang='<?php echo $lang->get('config.lang'); ?>'>
<head>
<meta charset='utf-8'>
<title><?php echo $metaTitle; ?></title>
<base href='<?php echo $config->get('app.root'); ?>'>
<link rel='canonical' href='<?php echo $config->get('app.root') . $canonical; ?>'>
<link href='<?php echo $config->get('app.root'); ?>favicon.ico' rel='icon'>
<link href='<?php echo $config->get('app.root'); ?>favicon.ico' rel='shortcut icon'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<?php echo (isset($meta_include_header) ? $meta_include_header : ''); ?>
</head>
<body>