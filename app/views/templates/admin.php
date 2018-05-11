<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
    <h1>Админка</h1>
    <div>
        <p>Hello <?= $_SESSION['login']; ?></p>
    </div>
    <p><a href="/auth/signout">Выйти</a></p>
    <div>
        <h2>Меню</h2>
        <ul>
            <li><a href="/admin">Home</a></li>
            <li><a href="/admin/orders">Orders</a></li>
            <li><a href="/admin/concerts">Concerts</a></li>
            <li><a href="/admin/users">Users</a></li>
        </ul>
    </div>
    <section>
        <?php 
        if($this->content_view) {
            include_once $this->content_view; 
        }
        ?>
    </section>
</body>
</html>