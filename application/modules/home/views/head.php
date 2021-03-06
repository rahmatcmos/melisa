<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content=" First Indonesian Massive Online Open Course. Be open minded and share.">
    <meta name="author" content="Taufik Sulaeman, Ridwan Fajar, Imam">
    <meta name="keywords" content="Film Ajar, Media Pembelajaran, Elearning, Video Ajar, MOOC, LMS">
    <link href="<?php echo base_url(); ?>asset/metro/css/modern.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/metro/css/modern-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/metro/css/site.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>asset/metro/js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>asset/css/images/logo-vabel.png"/>
    <title><?php echo $themes->header." ".$themes->caption ?></title>
    <!--js Plugin-->
    <?php $this->load->view('home/js'); ?>
    <!-- ini buat menyisipkan metadata js dan css secara dinamis dari controller manapun -->
    <?php echo isset($template['metadata']) ? $template['metadata'] : ''; ?>
</head>