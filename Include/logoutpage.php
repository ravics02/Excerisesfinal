<?php
//This is the logout page code

//check the session
@session_start();

//kill all session
@session_destroy();

?>

<script>

    window.history.back();

</script>
