<h1>Register User</h1>
<form method="post" action="<?= URL::site('index.php/user/register'); ?>">
Username: <input type="text" id="txtUsername" name="txtUsername"/>
Password: <input type="text" id="txtPassword" name="txtPassword"/>
<input type="submit" value="Register"/>
</form>