<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Asset Inventory</title>
	<center><h3>Input your Asset Inventory</h3></center>
</head>
<body>
		<form action="inventorydb.php" method="post">
		Asset Serial No:-<input type="text" name="Asset_Sr.No" placeholder="Asset Serial Number" required><br>
		Asset Full Type:-<input type="text" name="Asset_Type" placeholder="Asset Full Type" required><br>
		Asset Full Detail:-<input type="text" name="Asset_Detail" placeholder="Asset Full Detail" required><br>
		Asset Location:-<input type="text" name="Asset_Location" placeholder="Asset City Name" required><br>
		Asset Status:-<input type="text" name="Asset_Status" placeholder="Asset Present Status" required><br>
		Asset Serial Number:-<input type="number" name="Asset_Serial_Number" placeholder="Asset Serial Number" required><br>
		Asset TAG:-<input type="text" name="Asset_TAG" placeholder="Asset TAG Details" required><br>
		Asset Working Status:-<input type="text" name="Asset_Working_Status" placeholder="Asset Working Status" required><br><br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>