<div class="container-fluid">
    <h2 class="text-center">Add new user</h2>
    <div class="row justify-content-center">
	<form method="post" action="/admin/users/insert">
	    <div class="form-group">
		<label class="w-100">
		    <span>Login</span>
		    <input type="text" name="login" required class="form-control">
		</label>
	    </div>
	    <div class="form-group">
		<label class="w-100">
		    <span>Email</span>
		    <input type="email" name="email" required class="form-control">
		</label>
	    </div>
	    <div class="form-group">
		<label class="w-100">
		    <span>Password</span>
		    <input type="password" name="password" required class="form-control">
		</label>
	    </div>
	    <div class="form-group">
		<label class="w-100">
		    <span>Confirm password</span>
		    <input type="password" name="conf_password" required class="form-control">
		</label>
	    </div>
	    <div class="form-group">
		<input type="submit" name="send" value="Add" class="btn btn-success">
	    </div>
	</form>
    </div>
</div>