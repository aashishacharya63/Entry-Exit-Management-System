<?php
$conn = mysqli_connect('localhost','root','', 'db_entryexitsystem');
 if (isset($_POST['submit']))
 {
       $fname=$_POST['fname'];
       $lname=$_POST['lname'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        

      // $image=$_FILES['image'];

        $query ="insert into tb_contact(fname,lname,email,message) values ('$fname','$lname','$email','$message')";
        
                
        
       // $run = mysqli_query($conn,$query) or die(mysqli_error());
      
         if (mysqli_query($conn,$query))
          {
                echo"added successfully";      
         }
           else{
             echo"failed";
            }
            header('location:/EEMSv2/contact.php');
 }

?>