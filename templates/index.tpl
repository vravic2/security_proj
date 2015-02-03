

{include file="header.tpl" title=foo}

      <form name="login" id="login" class="form-signin" role="form" action="index.php" method="post">
        <h2 class="form-signin-heading">Please sign in:</h2><br>
		<fieldset><br>
        Bank User-Id:&nbsp;<input id="user" name="user" type="text" maxlength="10"><br><br>
        Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="password"  name="password" maxlength="10" type="password"><br>
		
        <button id="loginButton"  name="loginButton" class="btn btn-lg btn-primary btn-block"  type="submit" >Sign in</button>		
		</fieldset>
     </form>
     {if $loginerr neq ''}
        <p style="color:red"> Login details are not valid!!</p>
     {/if}
</center>
{include file="footer.tpl" title=foo}

    </div> <!-- /container -->

