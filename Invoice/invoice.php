<?php
/*
include('Login_v3/session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: login_v3.php"); // Redirecting To Home Page 
}
*/
$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"user") or die("Cannot connect to the database");

//$query = mysqli_query($connect_db,"select * from person");
$query = mysqli_query($connect_db,"select * from si_prod where FK_SIID = '".$_GET['FK_SIID']."' ");
$row = mysqli_fetch_array($query);
$query1 = mysqli_query($connect_db,"SELECT SUM(UnitPrice) FROM si_prod WHERE FK_SIID = '".$_GET['FK_SIID']."' ");
$row1 = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <link rel="stylesheet" type="text/css" href="css/invoice.css">
    <script type="text/javascript" src="print.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css">
</head>
<body>

    <div id="invoice-POS">
        
        <center id="top">
          <div class="logo"></div>
          <div class="info"> 
            <h2>SoftGate</h2>
          </div><!--End Info-->
        </center><!--End InvoiceTop-->
        
        <div id="mid">
          <div class="info">
            <h2>Contact Info</h2>
            <p> 
                Address : High Street 81</br>
                Email   : Samensis@gmail.com</br>
                Phone   : 9876543210</br>
            </p>
            <h2>Customer Details</h2>
            <p>
                CustID  : <?=$row['CustID']?><br>
            </p>
            <p>
                Service Invoice ID : <?=$row['FK_SIID']?><br>
            </p>
          </div>
        </div><!--End Invoice Mid-->
        
        <div id="bot">

            <div id="table">
                <table border="1">
                    <tr class="tabletitle">
                        <th class="" ><h4>Prod_ID</h4></th>
                        <!--<th class="" > <h4> Qty </h4></th>-->
                        <th class="" ><h4>Price</h4></th>
                        <th class="" ><h4>SGST</h4></th>
                        <th class="" ><h4>CGST</h4></th>
                        <!--<td class=" " > <h2> TaxSGST </h2></td>
                        <td class=" " > <h2> TaxCGST </h2></td>
                        <td class=" " > <h2> TaxIGST </h2></td>-->
                        <!--<th class="" > <h4> IGST </h4></th>-->
                        <!--<td class=" " > <h4> SMID </h4></td>-->
                    </tr>
                    <tr class="tabletitle">
                        <th class="" ><h4>IGST</h4></th>
                        <th class="" ><h4>%</h4></th>
                        <th class="" ><h4>Discount</h4></th>
                        <th class="" ><h4>Amount</h4></th>
                    </tr>

                    <?php

                    if(mysqli_num_rows($query)>0){                       
                    while($row= mysqli_fetch_array($query)){ ?>

                    <tr>
                        <td><?=$row['FK_ProdID']?></td>
                        <!--<td><?=$row['InvQty']?></td>-->
                        <td><?=$row['UnitPrice']?> * <?=$row['InvQty']?></td>
                        <td><?=$row['TaxSGST']?></td>
                        <td><?=$row['TaxCGST']?></td>
                        <!--<td><?=$row['TaxIGST']?></td>-->
                        
                        <!--<td><?=$row['SMID']?></td>-->
                    </tr>
                    <tr>
                        <td><?=$row['TaxIGST']?></td>
                        <td><?=$row['TaxPar']?></td>
                        <td><?=$row['Discount']?></td>
                        <td><?=$row['Amount']?></td>
                    </tr>

                    <?php        
        
                        }//While Loop Ends
                            
                    }//If block
                    else{
                        
                        echo "no record";
                    }

                    ?>


                    <tr class="tabletitle">
                        <td></td>
                        <td class="Rate"><h4>Tax</h4></td>
                        <td class="payment"><h4>$419.25</h4></td>
                    </tr>

                    <tr class="tabletitle">
                        <td></td>
                        <td class="Rate"><h4>Total</h4></td>
                        <td class="payment"><h4>$3,644.25</h4></td>
                    </tr>

                </table>
            </div><!--End Table-->

            <div id="legalcopy">
                <p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this oice within that time. There will be a 5% interest charge per month on late invoices. 
                </p>
            </div>
            
        </div><!--End InvoiceBot-->
        <div>
            <button type="button" onclick="printJS('invoice-POS', 'html')">
                Print Form
            </button>
        </div>
    </div><!--End Invoice-->

</body>
</html>