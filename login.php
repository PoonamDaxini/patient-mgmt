<!DOCTYPE html>
<html>
    <script type="text/javascript" src="<?php echo JS_DIR;?>jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_DIR;?>jquery.validate.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var space = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
            $("#loginform").validate({
                rules: {
                    username: {// compound rule
                        required: true,
                        email: true
                    },
                    password:{
                        required:true
                    }
                },
                messages:{
                    username:{
                        required:space+"Please enter email id",
                        username:space+"Please enter valid email id"
                    },
                    password:{
                        required:space+"Please enter password"
                    }
                }

            });
        });
    </script>

    <body>
        <?php if(isset ($_REQUEST['er'])){
                echo $_REQUEST['er'];
                }?>
        <a href="user/registerUser.php">Sign up</a>
        <form method="post" id="loginform" >
            <table>
                <tr>
                    <td>
                        <b>Email Id :</b>
                    </td>
                    <td>
                        <input type="text" id="username" name="username" value="<?php echo $_COOKIE['usr']?$_COOKIE['usr']:''?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b> Password :</b>
                    </td>
                    <td>
                        <input type="password" id="password" name="password" value="<?php echo $_COOKIE['hash']?base64_decode($_COOKIE['hash']):''?>"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" >
                        <input type="checkbox" name="autologin" value="1">Remember Me
                        <input type="submit" name="login" value="Login"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>