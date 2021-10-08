<!DOCTYPE html>
<html>
<head>
	<title>Purchase Second Wear</title>
</head>
<body bgcolor="purple">
<form action="outputquiz.php" method="POST">
<table bgcolor="orange" width="500" border="3" cellpadding="4">
    <td colspan="4" align="center">Purchase Second Wear</td>
    <tr>
        <td>Name</td>
        <td><input type="text" name="nm" maxlength="80"></td>
    </tr>
    <tr>	

        <td>Select item</td>
        <td><select name="si">
                <option value="Select">Select</option>
                <option value="111">111</option>
                <option value="222">222</option>
                <option value="333">333</option>

    </select>
	</td>
	</tr>
	<tr>
	   <td>Total</td>
	   <td><input type="text" name="tl" maxlength="100"></td>
			     <br>
	</tr>
	<tr>
	<td colspan="5" align="center" width="90" height="90"><input type="submit" value="Continue"><input type="reset" value="Cancel"></td>
	</tr>
</table>
</form>
</body>
</html>