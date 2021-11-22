<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo "Your name is " . $_SESSION['name'];
echo "<br/>";
echo "Your color is " . $_SESSION['color'];
?>
</body>
</html>