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
            <h1 style="margin: 10px"><a href="/admin/" style="text-decoration: none; color: #666666; font-size: x-large">Admin Panel</a></h1>
        </div>
        <section>
            <?php include 'app/views/' . $this->content_view; ?>
        </section>
    </body>
</html>
