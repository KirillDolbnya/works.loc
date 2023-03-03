<?php

require_once ('init.php');

?>



<form action="" method="post">
    <div>
        <label for="email">email</label><br>
        <input type="text" name="email">
    </div>
    <div>
        <label for="password">password</label><br>
        <input type="text" name="password">
    </div>

    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <div style="margin-top: 10px">
        <button type="submit">register</button>
    </div>
</form>