<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<center>
<body>
     <h1><strong>Register</strong></h1>
    <hr>
    <div id="nav">
        <ul>
            <li><a href="home.html">Home</a></li>
        <li><a href="about.php">Aboutus</a></li>
        </ul> 
    </div>
   
<form name="reg" action="reg.php" method="post" >
 <table  align="center">
<tr>
  <td>
	<label for="name">NAME </label>
	</td>
    	<td width="10"><strong>:</strong></td>
	<td>
	 <input type="text" name="name" maxlength="50" size="30"  placeholder="Enter in Block letters" required>
	 </td>
	</tr>
    <tr>
     </tr>
     <td>   
	<label for="mn">MOBILE NUMBER </label>
	</td>
        	<td width="10"><strong>:</strong></td>
	<td>
	 <input type="text"name="mn" maxlength="10" size="20">
	 </td>
	</tr>
    <tr>
  <td>
	<label for="city">CITY </label>
	</td>
        	<td width="10"><strong>:</strong></td>
	<td>
	 <input type="text" name="city" maxlength="30" width="30" placeholder="USE BLOCK LETTER ONLY" required>
	 </td>
	</tr>
	<tr>
        <td>
            <label for="email">Email</label>
        </td>
        	<td width="10"><strong>:</strong></td>
        <td>
            <input name="email" maxlength="50" width="30" placeholder="Valid ID" required>
        </td>
    </tr>	
    <tr>
  <td>
	<label for="password">Password</label>
	</td>
        	<td width="10"><strong>:</strong></td>
	<td>
	 <input type="password" name="password" maxlength="30" width="30" placeholder="USE BLOCK LETTER ONLY" required>
	 </td>
	</tr>
         <tr>
            <td colspan="3" height="30">
                <div align="center">
         <button type="submit"  name="Submit">Signup</button>
                </div>
            </td>
        </tr>          
    </table>
    </form>
  </center>
  </body>
</html>
