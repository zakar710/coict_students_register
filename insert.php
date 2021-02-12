<?php

include("connect.php");

if(isset($_POST['Submit'])) {

$fname = mysqli_real_escape_string($conn,$_POST['fname']);

$password =mysqli_real_escape_string($conn,$_POST['password']);

$birthmonth =mysqli_real_escape_string($conn,$_POST['birthmonth']);

$birthyear =mysqli_real_escape_string($conn,$_POST['birthyear']);

$gender = mysqli_real_escape_string($conn,$_POST['gender']);

$country = mysqli_real_escape_string($conn,$_POST['country']);


$sql = "INSERT INTO students SET Fullname='$fname',

password='$password', birthmonth='$birthmonth', birthyear='$birthyear', gender='$gender', country='$country'";

$query = mysqli_query($conn,$sql) or die("Cannot query the

database.<br>" . mysqli_error($conn));


             echo "<script>";

                echo"window.alert('Database Updated.!')";
 
                   echo "</script>";

                         header("refresh:0.000000000001,url=students.php");



}
// arrays for the combo boxes
$genders = array('NotSelected','Male','Female');
$BirthMonths = array('NotSelected','January','February','March','April','May');
$countries = array('NotSelected','Uganda','Tanzania','Kenya','Burundi');

 

?>


<!DOCTYPE html>
<html>
<head>
  <title>
    Coict Students registration
  </title>
</head>
 <body>
   <div align="center">
  
<h1>Coict Student Registration</h1>
      <form name="address" method="post" action="insert.php" onsubmit=" return checkpasswordmatch();  checkforcombo();">
        <hr>
            <table>
              <tbody>
                <tr>
                   <td>
                    <label>Fullname</label>
                    <input type="text" name="fullname" width="30"  
                    pattern="[a-zA-Z0-9]+ [a-zA-Z0-9]+ [a-zA-Z0-9]+"
                   required>
                 </td> 
                </tr>

                <tr> 

                   <td> 
                    <label>password</label>
                       <input type="password" id="password" name="password" width="15" pattern=".{8,}">
                   </td> 

                   <td> 
                    <label>conf password</label>
                       <input type="password" id="confpassword" name="confpassword" pattern=".{8,}" width="15">
                    </td>

                </tr>
                <tr> 

                   <td> 
                    <label>BirthMonth</label>
                    <select  id="comboBirthmonth"  name="birthmonth">
                      <?php foreach ($BirthMonths as $key => $birthmonth) { ?>
                      <option><?php echo $birthmonth; ?></option>
                    <?php } ?>
                    </select>
                   
                   </td> 

                   <td> 
                    <label>BirthYear</label>
                       <input type="number" name="birthyear" max="2005" min="1995" width="6">
                    </td>

                </tr>
                <tr> 

                   <td> 
                    <label>Gender</label>
                    <select id="comboGender"  name="gender">
                      <?php foreach ($genders as $key => $gender) { ?>
                      <option><?php echo $gender; ?></option>
                    <?php } ?>
                    </select>
                   </td> 

                   <td> 
                    <label>Country</label>
                     <select id="comboCountry"  name="country">
                      <?php foreach ($countries as $key => $country) { ?>
                      <option><?php echo $country; ?></option>
                    <?php } ?>
                    </select>
                    </td>

                </tr>

                <tr>
                  <td><button type="Submit">Save info</button></td>
                  <td><button type="reset">Reset</button></td>
                  <td><button type="button">Exit</button>
                  </td>
                </tr>


              </tbody>
            </table>

      </form>
     
     
   </div>
 </body>
  <script>
  

    function checkforcombo() {
    
    var comboBirthmonth = document.getElementById('comboBirthmonth');
    var invalidBirthmonth = comboBirthmonth.value == "NotSelected";

     var comboGender = document.getElementById('comboGender');
    var invalidGender = comboGender.value == "NotSelected";

     var comboCountry = document.getElementById('comboCountry');
    var invalidCountry = comboCountry.value == "NotSelected";
 
    if (invalidBirthmonth) {
        alert('Please check your entries,something is wrong.');
        combo.className = 'error';
    }
    

      if (invalidGender) {
        alert('Please check your entries,something is wrong.');
        combo.className = 'error';
    }
  
      if (invalidCountry) {
        alert('Please check your entries,something is wrong.');
        combo.className = 'error';
    }
    
    return !invalid;
}
//     function checkpasswordmatch() {
    
//     var password = document.getElementById('password');

//      var confpassword = document.getElementById('confpassword');
  
// alert(+password+confpassword+);
//     if (password === confpassword) {
//         return true;
//     }
//     else{
//       alert("Passwords don't match");
//          return false;
//     }

// fileInput is an HTMLInputElement: <input type="file" id="myfileinput" multiple>
var fileInput = document.getElementById("myfileinput");

// files is a FileList object (similar to NodeList)
var files = fileInput.files;

// object for allowed media types
var accept = {
  binary : ["image/png", "image/jpeg"],
  text   : ["text/plain", "text/css", "application/xml", "text/html"]
};

var file;

for (var i = 0; i < files.length; i++){
  file = files[i];

  // if file type could be detected
  if (file !== null) {
    if (accept.binary.indexOf(file.type) > -1) {
      // file is a binary, which we accept
      var data = file.getAsBinary();
    } else if (accept.text.indexOf(file.type) > -1) {
      // file is of type text, which we accept
      var data = file.getAsText();
      // modify data with string methods
    }
  }
}

    
// }
</script>
</html>

<?php


?>
