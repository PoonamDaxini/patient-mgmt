<!DOCTYPE html>
<html>
    <script type="text/javascript" src="<?php echo HTTP_HOST; ?>/JS/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo HTTP_HOST; ?>/JS/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var space = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
            $('#patientquery').validate({
                rules:{
                    query:"required",
                },
                messages:{
                    query:{
                        required:space+"please enter Query"
                    }
                }
            });
        });
    </script>
    <body>
        <form method="post" id="patientquery">
            Select Doctor :
            <?php 
                $objUser     = new userClass();
                $objDatabase = new mysqlDatabaseClass();
                $doctorList = $objUser->getDoctorsList($objDatabase);
            ?>
            <select name="doctor">
                <option>Select Doctor</option>
                <?php
                foreach($doctorList as $doctor){
                    echo '<option value='.$doctor['id'].'>'.ucfirst($doctor['username']).'</option>';
                }
                ?>
            </select>
            <br/>
            Query :
            <textarea name="query" id="query"></textarea>
            <br/>

            <input type="button" id="querySubmit" value="Submit"/>
        </form>
    </body>
</html>