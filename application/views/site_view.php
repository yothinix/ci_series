<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>untitled</title>
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen" title="no title" charset="utf-8">
</head>
<body>
    <div id="container">
        <h1>Super Pagination with CodeIgniter</h1>

        <?php echo $this->table->generate($records) ?>
        <?php echo $this->pagination->create_links(); ?>
    </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" charset="utf-8">
    $('tr:odd').css('background', '#e3e3e3');
</script>

</body>
</html>
