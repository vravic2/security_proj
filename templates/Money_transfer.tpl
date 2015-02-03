{include file="header.tpl" title=foo}

<form action="transferCall.php" role="form" method="post">
<fieldset>
<legend>Money Transfer:</legend>
Sender Account No:<br>
<input type="text" name="account_number" value="">
<br>

Amount:<br>
<input type="text" id="amount" name="amount" value="">
<br>
Balance:<br>
<input type="text" name="balance" disabled="true" value={$balance} >
<br><br>
<input type="submit" id="transferbutton" value="Submit"></fieldset>
</form>
{include file="footer.tpl" title=foo}