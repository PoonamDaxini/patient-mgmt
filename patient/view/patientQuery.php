<?php
//require_once '../../../jq-conig.php';
// include the jqGrid Class
require_once JS_DIR."/jqGrid.php";
// include the driver class
require_once CLASS_DIR . 'patientClass.php';
$objdb = new mysqlDatabaseClass();
$objpt = new patientClass();
if (isset($_REQUEST['doctor'])) {

    $objpt->patientQuery($objdb,$_SESSION['uid'],$_REQUEST['doctor'], $_REQUEST['query']);
    echo "Wait for reply from Doctor";
}
?>
<!DOCTYPE html>
<html>
    <script type="text/javascript" src="<?php echo HTTP_HOST; ?>/JS/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#querySubmit").live("click",function(){

            })
        });
        function patientQueryForm(){
            $.ajax({
                type: "GET",
                data:"action=addForm",
                success: function(msg){
                    $("#queryForm").after(msg);
                }
            });
        }
    </script>
    <body>
        <a href="javascript:void(0);" onclick="patientQueryForm();">New Query</a>
        <div id="queryForm">
        </div>
        <?php
        $historyquery = $objpt->getPatientQuery($objdb, $_SESSION['uid']);
        var_dump($historyquery);
        if(isset ($historyquery) && count($historyquery) > 0){
        ?>
        <table border="1">
            <tr>
                <th>
                    Sr No.
                </th>
                <th>
                    Query 
                </th>
                <th>
                    Reply 
                </th>
            </tr>
            <?php
            $i= 0;
            foreach($historyquery as $patientquery){
                ?>
            <tr>
                <td>
                    <?php echo ++$i;?>
                </td>
                <td>
                    <?php echo $patientquery['query'];?>
                </td>
                <td>
                    <?php echo $patientquery['reply'] ? $patientquery['reply'] : "Doctor's reply pending";?>
                </td>

            </tr>
                <?php
            }
            ?>
        </table>
        <?php } ?>
    </body>
</html>