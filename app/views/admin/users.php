<a href="/admin/users/add">Add new user</a>
<?php if($this->all_users): ?>
<table>
    <tr>
        <th>Login</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php foreach($this->all_users as $user): ?>
    <tr>
        <td><?= $user['login'] ?></td>
        <td><?= $user['email'] ?></td>
        <td>
            <a href="/admin/users/delete/<?= $user['id'] ?>">Delete user</a>
        </td>
    </tr>
   <?php endforeach; ?>
</table>
<?php endif;