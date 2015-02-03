{include file="header.tpl" title=foo}
<form role="form" action="withdrawCall.php" method="post">
<fieldset>
<legend>Withdraw:</legend>
Amount:<br>
<input type="text" id="amount" name="amount" value="">
<br>
Balance:<br>
<input type="text" name="firstname" value={$balance} disabled="true">
<br><br>
<input type="submit" id="withdrawbutton" value="Submit"></fieldset>
</form>
{include file="footer.tpl" title=foo}