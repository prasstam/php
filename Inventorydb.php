<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Asset Inventory</title>
  <center><h3>Asset Inventory Database</h3></center>
</head>
<body>
    <h2> Asset Details Submitted Succesfully</h2>
  
<?php
$conn = mysqli_connect("localhost","root","","inventorydb");
if ($conn === false) {
  die("ERROR: Could not connect. " . mysqli_connect_error());
  // code...
}
  $assetsr = $_REQUEST["Asset_Sr.No."];
  $asset = $_REQUEST["Asset_Type"];
  $detail = $_REQUEST["Asset_Detail"];
  $location = $_REQUEST["Asset_Location"];
  $status = $_REQUEST["Asset_Status"];
  $srnumber = $_REQUEST["Asset_Serial_Number"];
  $tag = $_REQUEST["Asset_TAG"];
  $wstatus = $_REQUEST["Asset_Working_Status"];

  $sql = "INSERT INTO assettable(Asset_Sr. No, Asset_Type, Asset_Detail, Asset_Location, Asset_Status, Asset_Serial_Number, Asset_TAG, Asset_Working_Status) VALUES('$assetsr', '$asset','$detail','$location','$status','$srnumber', '$tag', '$wstatus')";

  if (mysqli_query($conn, $sql)) {
    echo"<h3>Below Asset Details Captured Succefully</h3>";

    header("Location: list.php");
    
  } else {
      echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
  }

     mysqli_close($conn);

?>
</center>




</body>
</html>