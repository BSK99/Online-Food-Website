<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
session_unset();

session_destroy();
header('Location:entrance.html');
?>

</body>
</html>