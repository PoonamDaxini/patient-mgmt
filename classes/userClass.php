<?php
require_once dirname(__FILE__).'/../config/config.php';
class userClass
{
    function patientRegister($objDatabase , $arrPatientDetails){
        
        $query  = "insert into user (username,email,alt_email,birth_date,marital_status,gender,phone_no,password,userType) values ('";
        $query .= $objDatabase->safe_string($arrPatientDetails['username'])."','";
        $query .= $objDatabase->safe_string($arrPatientDetails['email'])."','";
        $query .= $objDatabase->safe_string($arrPatientDetails['alt_email'])."','";
        $query .= $objDatabase->safe_string($arrPatientDetails['birth_date'])."','";
        $query .= $objDatabase->safe_string($arrPatientDetails['marital_status'])."','";
        $query .= $objDatabase->safe_string($arrPatientDetails['gender'])."','";
        $query .= $objDatabase->safe_string($arrPatientDetails['phone_no'])."','";
        $query .= $objDatabase->safe_string(md5($arrPatientDetails['password'].SALT))."','";
        $query .= "patient')";

//        echo $query;
        $result = $objDatabase->query($query);
    }

    function getUserData($objDatabase , $username){
        $query  = "select id,username ,password,conformation,userType from user where email = '";
        $query .= $objDatabase->safe_string($username) . "'";

//        echo $query;
        $objDatabase->query($query);
        $result = $objDatabase->getDbData();
        return $result;
    }

    function getDoctorsList($objDatabase){
        $query = "select id,username from user where userType = 'doctor'";

        $objDatabase->query($query);
        $result = $objDatabase->getDbData();
        return $result;
    }
}
?>