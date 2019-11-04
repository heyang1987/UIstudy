<?php
    session_start();
    $sessionId = session_id();
    include_once "db.php";
    $mysqli = OpenCon();
    $mysqli->query("UPDATE uistudy SET code2 = $_POST[code2] WHERE (sessionid = '$sessionId')");
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Done! You can close this tab now!</h2>
</body>
</html>