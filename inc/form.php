<?php 

$FirstName =  $_POST['FirstName'];
$LastName =  $_POST['LastName'];
$Email =  $_POST['Email'];




if (isset($_POST['submit'])) {

    $FirstName = mysqli_real_escape_string($conn, $_POST['FirstName']);
    $LastName =  mysqli_real_escape_string($conn, $_POST['LastName']);
    $Email    =  mysqli_real_escape_string($conn, $_POST['Email']);




    $sql = "INSERT INTO users(FirstName, LastName, Email) 
            VALUES ('$FirstName','$LastName', '$Email')";

            if(empty($FirstName)){
               
                echo 'يرجى ادخال الاسم الاول';
            }elseif(empty($LastName)){
               
                echo 'يرجى ادخال الاسم الاخير';
            }if(empty($Email)){
              
                echo 'يرجى اخال البريد الالكتروني';
            }elseif(filter_var($Email, FILTER_VALIDATE_EMAIL)){
              
                echo 'البريد الالكتروني غير صحيح';
            }else{
                if(mysqli_query($conn, $sql)){
                    header('Location:' . $_SERVER['PHP_SELF']);
                }else{
                    echo 'Error ' . mysqli_error($conn);
                }
            }

    mysqli_query($conn, $sql);
        
}
