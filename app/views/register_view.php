<!--TODO create style-->
<div class="form-wrapper">
    <div class="frm" >
        <h2>Create an account</h2>
        <form method="post" action="/auth/adduser" role="form" class="form-horizontal">
            <div class="form-group">
                <label for="login" class="control-label col-sm-2">Login</label>	
                <div class="col-sm-10">
                    <input type="text" placeholder="Enter login" name="login" class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <label for="pass" class="control-label col-sm-2">Password</label>	
                <div class="col-sm-10">
                    <input type="password" placeholder="Enter password" name="pass" class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <label for="confPass" class="control-label col-sm-2">Confirm</label>	
                <div class="col-sm-10">
                    <input type="password" placeholder="Confirm password" name="confPass" class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label col-sm-2">Email</label>	
                <div class="col-sm-10">
                    <input type="email" placeholder="Enter e-mail adress" name="email" class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button class="btn btn-success btn_auth">Sign up</button>
                </div>
            </div>
        </form>
    </div>    
</div>