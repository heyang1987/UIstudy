<?php
    session_start();
    $sessionId = session_id();
    include_once "db.php";
    $mysqli = OpenCon();

    $mysqli->query("UPDATE uistudy SET
        satis1 = $_POST[satis1],
        satis2 = $_POST[satis2],
        satis3 = $_POST[satis3],
        satis4 = $_POST[satis4],
        satis5 = $_POST[satis5],
        satis6 = $_POST[satis6],
        satis7 = $_POST[satis7],
        satis8 = $_POST[satis8],
        satis9 = $_POST[satis9],
        satis10 = $_POST[satis10],
        useful1 = $_POST[useful1],
        useful2 = $_POST[useful2],
        useful3 = $_POST[useful3],
        useful4 = $_POST[useful4],
        useful5 = $_POST[useful5],
        useful6 = $_POST[useful6],
        useful7 = $_POST[useful7],
        ease1 = $_POST[ease1],
        ease2 = $_POST[ease2],
        ease3 = $_POST[ease3],
        ease4 = $_POST[ease4],
        ease5 = $_POST[ease5],
        ease6 = $_POST[ease6],
        ease7 = $_POST[ease7],
        ease8 = $_POST[ease8],
        ease9 = $_POST[ease9],
        ease10 = $_POST[ease10],
        complex = $_POST[complex],
        mtch = $_POST[mtch],
        atten1 = $_POST[atten1],
        help1 = $_POST[help1],
        help2 = $_POST[help2],
        help3 = $_POST[help3],
        help4 = $_POST[help4],
        threat1 = $_POST[threat1],
        threat2 = $_POST[threat2],
        threat3 = $_POST[threat3],
        threat4 = $_POST[threat4],
        threat5 = $_POST[threat5],
        threat6 = $_POST[threat6],
        threat7 = $_POST[threat7],
        control1 = $_POST[control1],
        control2 = $_POST[control2],
        control3 = $_POST[control3],
        control4 = $_POST[control4],
        trust1 = $_POST[trust1],
        trust2 = $_POST[trust2],
        trust3 = $_POST[trust3],
        trust4 = $_POST[trust4],
        trust5 = $_POST[trust5],
        trust6 = $_POST[trust6],
        trust7 = $_POST[trust7],
        trust8 = $_POST[trust8],
        knowledge2 = $_POST[knowledge2],
        knowledge3 = $_POST[knowledge3],
        knowledge4 = $_POST[knowledge4],
        knowledge5 = $_POST[knowledge5],
        rational1 = $_POST[rational1],
        rational2 = $_POST[rational2],
        rational3 = $_POST[rational3],
        rational4 = $_POST[rational4],
        rational5 = $_POST[rational5],
        emotional1 = $_POST[emotional1],
        emotional2 = $_POST[emotional2],
        emotional3 = $_POST[emotional3],
        emotional4 = $_POST[emotional4],
        emotional5 = $_POST[emotional5],
        general1 = $_POST[general1],
        general2 = $_POST[general2],
        general3 = $_POST[general3],
        general4 = $_POST[general4],
        general5 = $_POST[general5],
        general6 = $_POST[general6],
        collect1 = $_POST[collect1],
        collect2 = $_POST[collect2],
        collect3 = $_POST[collect3],
        collect4 = $_POST[collect4],
        collect5 = $_POST[collect5],
        collect6 = $_POST[collect6],
        gender = $_POST[gender],
        age = $_POST[age],
        race = $_POST[race],
        edu = $_POST[edu],
        housing = $_POST[housing],
        income = $_POST[income]
    WHERE (sessionid = '$sessionId')");

?>

<html>
<body>
    <div id="end">
        <br/>
        <h1><b>Thank You! You have finished the study!</b></h1><br>
        
        <p>At the end of the study, enter your personal code below:</p>
        <form action="final.php" method="POST">
            <input name="code2" size="10" type="text" />
            <input type="submit" name="submit" value="Submit" />
        </form>
    </div>
</body>
</html>