<html>
<head>
    <title>Newsletter</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen" charset="utf-8">
</head>

<body>

<div id="newsletter_form">
    <h2>Signup for the Newsletter</h2>
    <?php echo form_open('email/send');?>
    <?php
    $name_data = array(
        'name' => 'name',
        'id' => 'name',
       'value' => set_value('name') 
    );
    ?>
    
    <p><label for="name">Name: </label><?php echo form_input($name_data);?></p>    

    <p><label for="name">Email Address: </label>
    <input type="text" name="email" id="email" value="<?php echo set_value('email');?>">
    </p>

    <p><?php echo form_submit('submit', 'Submit'); ?></p> 

<?php echo form_close(); ?>

<?php echo validation_errors('<p class="error">'); ?>

</div><!--end newsletter-form-->

</body>
</html>

