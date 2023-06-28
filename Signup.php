<!DOCTYPE html>
<html lang ="en">
    <head>
        <title>SIGNUP</title>
        <link rel="stylesheet" href="style.css"> 
    </head>
    <body>
        <div class="container">
            <div class="nav-bar">
                <H1><B>SIGNUP</B></H1>
             <ul>
             <li><a href= "Home.html"> HOME </a></li>
             <li><a href="Recipe.html"> RECIPES</a> </li>
              <li> <a href="Aboutus.html"> ABOUTUS </a></li>
            </div>
        
<Form action ="submit.php" method="post">
<h1>signin</h1>
<label>NAME</label>
<input type="text" name ="name" required> <br><br>
<label>PASSWORD</label>
<input type="password" name ="password" required><br><br>
<label>EMAIL</label>
<input type="email" name ="email"><br><br>
<label>CONTACT</label>
<input type="text" name ="contact"><br><br>
<label>NATIONALITY</label>
<select  name ="nation">
    <option>UGANDA</option>
    <option>KENYA</option>
    <option>RWANDA</option>
    <option>CONGO</option>
    <option>TANZANIA</option>
  </select><BR><BR>
    <label>GENDER</label>
    <input type="text"name ="gender">
     <br><br>
    <input type="checkbox"required>I Accept all TERMS AND CONDITIONS.<BR><BR>
<button>SUBMIT</button>
<input type="RESET"CANCEL><BR><BR>

</FORM>

    </body>
</html>