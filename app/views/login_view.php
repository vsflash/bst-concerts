<!--TODO create style-->
<div class="frm" style="width: 400px; margin: 20px">
    <h2>Sign in to your account</h2>
    <form method="post" action="/auth/signin" role="form" class="form-horizontal">
        <div class="form-group">
            <label for="login" class="control-label col-sm-2">Login</label>	
            <div class="col-sm-10">
                <input type="text" name="login" placeholder="login" class="form-control"/>
            </div>
        </div>
            <div class="form-group">
                <label for="pass" class="control-label col-sm-2">Password</label>	
                <div class="col-sm-10">
                    <input type="password" name="pass" placeholder="password" class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" value="Sign in" class="btn btn-success">
                </div>
            </div>
    </form>
</div>
<a href="/auth/register"><button class="btn btn-primary">Registration</button></a>

<!--    <h2>Sign in to your account</h2>
    <form method="post" action="/auth/signin">
      <input type="text" name="login" placeholder="login"/>
      <input type="password" name="pass" placeholder="password"/>
      <input type="submit" value="Sign in">
    </form>
  <div><a href="/auth/register">Registration</a></div>-->