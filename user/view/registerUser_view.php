<!DOCTYPE html>
<html>
    <script type="text/javascript" src="/PatientManageMentSystem/JS/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/PatientManageMentSystem/JS/jquery-ui-1.8.17.custom.min.js"></script>
    <script type="text/javascript" src="/PatientManageMentSystem/JS/jquery.validate.min.js"></script>
    <LINK href="/PatientManageMentSystem/css/ui-lightness/jquery-ui-1.8.17.custom.css" rel="stylesheet" type="text/css">

    <script type="text/javascript">
        $(document).ready(function(){
            var space = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
            $('#register').validate({
                rules:{
                    username:"required",
                    email:{
                        required:true,
                        email:true
                    },
                    password:{
                        required:true

                    },
                    passconf:{
                        required:true,
                        equalTo:"#password"
                    },
                    altemail:{
                        email:true
                    }


                },
                messages:{
                    username:{
                        required:space+"please enter Username"
                    },
                    email:{
                        required:space+"please enter email id",
                        email:space+"please enter valid email id"
                    },
                    password:{
                        required:space+"please enter password"
                    },
                    passconf:{
                        required:space+"please fill confirm password field",
                        equalTo:space+"password does not match"
                    },
                    altemail:{
                        email:space+"Please enter valid email address"
                    }
                }
            });
            $('#birthdate').datepicker({
                yearRange: '1936:2012',
                dateFormat: 'mm/dd/yy',
                changeMonth:true,
                changeYear:true
            });
        });

    </script>

    <body>
        <a href="<?php echo HTTP_HOST?>">Back</a>
        <form method="post" name="register" id="register" >

            <table>
                <tr>
                    <td>
                        <b>Username:</b>
                    </td>
                    <td>
                        <input type="text" name="username" id="username" /><span class="error">*</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Date Of Birth:</b>
                    </td>
                    <td>
                        <input type="text" name="birthdate" id="birthdate" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Email Address:</b>
                    </td>
                    <td>
                        <input type="text" name="email" id="email"  /><span class="error">*</span>
                    </td>
                </tr>
                <tr><td><b>Alternate Email Address:</b>
                    </td>
                    <td>
                        <input type="text" name="altemail"  id="altemail" />
                    </td>
                </tr>
                <tr><td><b>Marital Status:</b>
                    </td>
                    <td>
                        <input type="radio" name="maritalstate" id="maritalstate" value="Unmarried" checked="checked"/>Unmarried
                        <input type="radio" name="maritalstate" id="maritalstate" value="Married"/>Married
                    </td>
                </tr>
                <tr><td><b>Gender:</b>
                    </td>
                    <td>
                        <input type="radio" name="gender" id="gender" value="Male" checked="checked"/>Male
                        <input type="radio" name="gender" id="gender" value="Female"/>Female
                    </td>
                </tr>
                <tr><td><b>Contact No:</b>
                    </td>
                    <td>
                        <input type="text" name="phone_no" id="phone_no" />
                    </td>
                </tr>
                <tr><td><b>Password:</b>
                    </td>
                    <td>
                        <input type="password" name="password" id="password" /><span class="error">*</span>
                    </td>
                </tr>
                <tr><td><b>Password Confirm:</b>
                    </td>
                    <td>
                        <input type="password" name="passconf" id="passconf"  /><span class="error">*</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" >

                        <span class="error">* marked fields are compulsary</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" >
                        <input type="submit" id="register" name="register" value="Register"/>
                    </td>
                </tr>
        </form>


    </body>
</html>