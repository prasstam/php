<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>

<?php

$conn = mysqli_connect("localhost","root","","inventorydb");
if ($conn === false) {
  die("ERROR: Could not connect. " . mysqli_connect_error());
  // code...
}

$query = "SELECT * FROM assettable";
$result = mysqli_query($conn, $query);
?>

<button><a href="inventory.php">Form Submit</a></button><br><br><br>
<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>Asset Sr. No</th>
    <th>Asset Type</th>
    <th>Asset Detail</th>
    <th>Asset Location</th>
    <th>Asset Status</th>
    <th>Asset Serial Number</th>
    <th>Asset TAG1</th>
    <th>Asset Working Status</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['Asset_SrNo']; ?> </td>
   <td><?php echo $data['Asset_Type']; ?> </td>
   <td><?php echo $data['Asset_Detail']; ?> </td>
   <td><?php echo $data['Asset_Location']; ?> </td>
   <td><?php echo $data['Asset_Status']; ?> </td>
   <td><?php echo $data['Asset_Serial_Number']; ?> </td>
   <td><?php echo $data['Asset_TAG']; ?> </td>
   <td><?php echo $data['Asset_Working_Status']; ?> </td>
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>

 <?php } ?>
 </table>


</body>
</html>