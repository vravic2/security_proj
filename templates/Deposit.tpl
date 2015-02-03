{include file="header.tpl" title=foo}
 <form name="deposit" id="deposit" class="form-signin" role="form" action="depositCall.php" method="post">
<fieldset>
<legend>Deposit:</legend>
<align="center" Amount:<br>
<input type="text" id="Amount" name="Amount" value="">
<br>
Balance:<br>
<input type="text" disabled id="customerbalance" name="firstname" value={$balance}>
<br><br>
<input type="submit" id="depositButton" value="Submit"></fieldset>
</form>
{include file="footer.tpl" title=foo}
