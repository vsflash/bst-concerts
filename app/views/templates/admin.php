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
            <li><a href="/admin/orders">Orders</a></li>
            <li><a href="/admin/concerts">Concerts</a></li>
            <li><a href="/admin/users">Users</a></li>
        </ul>
    </div>
    <section>
        <?php include_once $content_template_file; ?>
    </section>
</body>
</html>