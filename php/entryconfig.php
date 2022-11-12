<?php
$conn = mysqli_connect('localhost','root','', 'db_entryexitsystem');
 if (isset($_POST['submit']))
 {
       $name=$_POST['name'];
       $address=$_POST['address'];
        $entrytime=$_POST['entrytime'];                  
        $contact=$_POST['contact'];
        $purposeofvisit=$_POST['purposeofvisit'];
        $date=$_POST['date'];

      // $image=$_FILES['image'];

        $query ="insert into tb_visitorsdata(name,address,entrytime,contact,purposeofvisit,date) values ('$name','$address','$entrytime','$contact','$purposeofvisit','$date')";
        $account ="insert into tb_visitorsalldata(name,address,entrytime,contact,purposeofvisit,date) values ('$name','$address','$entrytime','$contact','$purposeofvisit','$date')"; 
           
        
       
      if(mysqli_query($conn,$query))
      {
         if (mysqli_query($conn,$account))
        {
          //if (mysqli_query($conn,$status))
         // {
              
                echo"added successfully";      
         }
           else{
             echo"failed";
            }
         // }
            header('location:/EEMSv2/entry.php');
 }
}
?>