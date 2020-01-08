<?php
session_start();
unset($_SESSION["uname"]);
session_destroy();

echo'
<script>
window.location="login.php";
</script>
';

?>