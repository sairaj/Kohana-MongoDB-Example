<h1>Welcome User</h1>
<p>Please Login</p>
<form method="post" action="<?= URL::site('index.php/user/login'); ?>">
Username: <input type="text" id="txtUsername" name="txtUsername"/>
Password: <input type="text" id="txtPassword" name="txtPassword"/>
<input type="submit" value="Login"/>

<br />
<br />
<a href="<?php echo url::base();?>/user/register">Click to register</a>
<br />
<br />
<a href="<?php echo url::base();?>/content/">Try to access content</a>

</form>