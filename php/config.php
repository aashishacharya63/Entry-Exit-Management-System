 <?php
$conn = mysqli_connect('localhost','root','', 'db_entryexitsystem');
 if (isset($_POST['submit']))
 {
       $userid=$_POST['userid'];
       $pswd=$_POST['pswd'];
        $oname=$_POST['oname'];
        $address=$_POST['address'];
        $contact=$_POST['contact'];
      // $image=$_FILES['image'];

        $query ="insert into tb_login (userId,password) values ('$userid','$pswd')";
        $account= "insert into tb_register (name_orgn,address,contact) values ('$oname','$address','$contact')";
                
        
       // $run = mysqli_query($conn,$query) or die(mysqli_error());
      if(mysqli_query($conn,$query))
       {
         if (mysqli_query($conn,$account))
          {
                echo"added successfully";      
         }
           else{
             echo"failed";
            }
            header('location:/EEMSv2/index.php');
        }
        
}
?>

