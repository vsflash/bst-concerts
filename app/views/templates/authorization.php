<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Authorization</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
        <link href="../../../css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="auth_body">
        <div class="admin_panel_top">
            <span style="font-size: x-large; margin: 10px">Admin Panel</span>
        </div>
        <section>
            <?php include 'app/views/' . $this->content_view; ?>
        </section>
    </body>
</html>
