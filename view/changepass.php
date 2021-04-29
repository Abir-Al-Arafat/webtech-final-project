<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='./images/favicon.png'>
    <title>Change Password</title>
</head>
<body background="../images/assets/background.jpg">
    <?php include('./header.php'); ?>
    <div width='100px'>
        <form action='../controller/changepasschk.php' method="POST" onsubmit="return validateForm()">
            <fieldset>
                <legend>
                    <b>Change Password</b>
                </legend>
                <table align="center">
                    <tr>
                        <td align="right">Old Password:</td>
                        <td><input type='password' name='op' id="op" onkeyup="checkPass()" onblur="checkPass()"/></td>
                        <td align="right"><span align="right" id="opErr"></span></td>
                    </tr>
                    <tr>
                        <td align="right">New Password:</td>
                        <td><input type='password' name='np' id="np" onkeyup="checkPassNP()" onblur="checkPassNP()"/></td>
                        <td align="right"><span align="right" id="npErr"></span></td>
                    </tr>
                    <tr>
                        <td align="right">Confirm New Password:</td>
                        <td><input type='password' name='cnp' id="cnp" onkeyup="checkPassCNP()" onblur="checkPassCNP()"/></td>
                        <td align="right"><span align="right" id="cnpErr"></span></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='submit' value="Confirm"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <?php include('./footer.php'); ?>
    <?php include('../resources/edit.js'); ?>
</body>
</html>