<?php

if ($_SESSION['username'] != NULL) {
?>
    <form action="">
        <h5>Hai <?php echo $_SESSION['username']; ?></h5>
        <button type="button" > </button>
    </form>
<?php
}
?>