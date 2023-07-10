<?php 
        $firstname=$_POST['first_name'];
        $lastname=$_POST['last_name'];
        $dateofbirth=$_POST['date_of_birth'];
        $gender=$_POST['gender'];
        $mobileno=$_POST['mobile_number'];
        $email=$_POST['E-mail'];
        $username=$_POST['username'];
        $password=$_POST['password'];

        $conn = mysqli_connect('localhost','root','','library');
        if($conn->connect_error){
            die('Conntion Failed : '.$conn->connect_error);
        } else {
            $stmt = $conn->prepare("INSERT INTO registration_info(first_name, last_name, date_of_birth, gender, mobile_no, E-mail, username, password) 
            VALUES (?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssss",$firstname,$lastname,$dateofbirth,$gender,$mobileno,$email,$username,$password);
            $stmt->execute();
            echo "registration successfull...";
            $stmt->close();
            $conn->close();

        }
        $query=

                mysqli_query($con,$query)
    
     
    ?>
    