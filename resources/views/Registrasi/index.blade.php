<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>
<body> 
    <form method="POST" action="/welcome">
    <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
    <h1> Buat Account Baru! </h1>
    <h3> Sign Up Form </h3>
        <label for="firstname"> First Name : </label>
        <p><input type="text" id="firstname" name="firstname" required></p>
        <label for="lastname"> Last Name : </label>
        <p><input type="text" id="lastname" name="lastname" required></p> 
        
        <p> Gender : <p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male"> Male </label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female"> Female </label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other"> Other </label>
            
        <p> Nationality : </p>
        <select>
            <option> Indonesian </option>
            <option> Malaysian </option>
            <option> Singapore </option>
            <option> Australian </option>
        </select>
   
        <p> Language Spoken : </p>
        <input type="checkbox"> Bahasa Indonesia <br>
        <input type="checkbox"> English <br>
        <input type="checkbox"> Other <br>

        <p> Bio : </p> 
        <textarea cols="30" rows="10"> </textarea>
        <br> <button type="submit">Sign Up</button>
    </form>  
</body>
</html>