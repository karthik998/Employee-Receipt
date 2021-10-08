<?php
$emp_id = $_POST['ecode'];
$emp_name = $_POST['ename'];
$rate = $_POST['rh'];
$hour = $_POST['hd'];
$days = $_POST['nd'];
$Gross_Salary = ($rate*$hour*$days);
$tax = ($Gross_Salary*0.1);
$health_insurance = ($Gross_Salary*0.05);
$EDF = 1800;
$total_deduction = ($tax+$health_insurance+$EDF);
$net_salary = ($Gross_Salary-$total_deduction);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $emp_name ?>'s Salary Receipt</title>
</head>
<style>
    body {
        background-image: url(receipt.jpg);

    }

    label{
    	color: black;
    }

    .footer {
        color: black;
        position: fixed;
        text-align: center;
        bottom: 0px;
        width: 100%;
        margin-bottom: 5%;
    }

</style>

<body text="white">
    <h2 ALIGN="CENTER"><?php echo $emp_name ?>'s Salary Receipt</h2>
    <div align="center">
        
        <fieldset>
                <table align="center" cellpadding="10" border="1px" style="border: solid">
                    <tr>
                        <td>
                            <label><b>Employee Name:</b></label>
                            <?php echo $emp_name ?>
                        </td>
                        <td>
                            <label><b>Employee Code: </b></label>
                            <?php echo $emp_id ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <label><b>Tax@10 percent: </b></label>
                            <?php echo $tax ?>
                        </td>
                        <td>
                            <label><b>Gross Salary: </b></label>
                            <?php echo $Gross_Salary ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label><b>Health Insurance@5%:</b></label>
                            <?php echo $health_insurance ?>
                        </td>
                        <td>
                            <label><b>Deduction: </b></label>
                            <?php echo $total_deduction ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label><b>EDF in Rs: </b></label>
                            <?php echo $EDF ?>
                        </td>
                        <td>
                            <label><b>Net Salary: </b></label>
                            <?php echo $net_salary ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">
                            <label><b>Total Deduction: </b></label>
                            <?php echo $total_deduction ?>
                        </td>
                    </tr>

                </table>
            </fieldset>
    </div>

    <div class="footer"><b>Designed By Kothamasu Karthik</b></div>
    <br>
</body>
</html>