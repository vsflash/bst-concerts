<form method="post" action="/admin/users/insert">
    <label>
        <span>Login</span>
        <input type="text" name="login" required>
    </label>
    <label>
        <span>Email</span>
        <input type="email" name="email" required>
    </label>
    <label>
        <span>Password</span>
        <input type="password" name="password" required>
    </label>
    <label>
        <span>Confirm password</span>
        <input type="password" name="conf_password" required>
    </label>
    <input type="submit" name="send" value="Add">
</form>