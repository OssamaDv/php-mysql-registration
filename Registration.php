<?PHP
require_once('config.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>user Registration | PHP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
  <div>
   <?php
    if(isset($_POST['create']))
    {
        
        $firstname           =$_POST['firstname'];
        $lastname            =$_POST['lastname'];
        $address             =$_POST['address'];
        $phonenumber         =$_POST['phonenumber'];
        $numberofchildren    =$_POST['numberofchildren'];

        $sql         ="INSERT INTO parents (firstname,lastname,address,phonenumber,numberofchildren) VALUES(?,?,?,?,?)";
        $stmtinsert  =$db->prepare($sql);
        $result      =$stmtinsert->execute([$firstname,$lastname,$address,$phonenumber,$numberofchildren]);
        if($result)
        {
          echo 'successfully saved.';
        }  
        else
        {
            echo 'there were errors while saving the data';
        }
    }
   ?>
  </div>
     <div>
      <form action="Registration.php" method="post">
        <div class="container">
          <div class="row">
           <div class="col-sm-3">
              <h1>Registration of parents</h1>
              <p>fill the forms with correct values.</p>
              <hr class="mb-3">
              <label><b>First name</b></label>
              <input class="form-control" type="text" name="firstname" required>

              <label><b>Last name</b></label>
              <input class="form-control" type="text" name="lastname" required>

              <label><b>Address</b></label>
              <input class="form-control" type="text" name="address" required>

              <label><b>Phone number</b></label>
              <input class="form-control" type="text" name="phonenumber" required>

              <label><b>Numberofchildren</b></label>
              <input class="form-control" type="text" name="numberofchildren" required>
              <hr class="mb-3">
              <input class="btn btn-primary" type="submit" name="create" value="Sign up">
            </div> 
          </div>  
         </div>   
      </form>
    </div>
</body>

</html>