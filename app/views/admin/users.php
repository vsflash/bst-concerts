<div class="container-fluid">
    <div class="row justify-content-end">
	<div class="col-2">
	    <a class="btn btn-success m-2" href="/admin/users/add">Add new user</a>
	</div>
    </div>

    <?php if ($this->all_users): ?>
        <table class="table">
    	<thead class="thead-dark">
    	    <tr>
    		<th>Login</th>
    		<th>Email</th>
    		<th>Actions</th>
    	    </tr>
    	</thead>
	    <?php foreach ($this->all_users as $user): ?>
		<tr>
		    <td><?= $user['login'] ?></td>
		    <td><?= $user['email'] ?></td>
		    <td>
			<a href="/admin/users/delete/<?= $user['id'] ?>">Delete user</a>
		    </td>
		</tr>
	    <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>