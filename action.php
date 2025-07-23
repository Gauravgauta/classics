<?php 
    if(isset($_POST['register']))
    {

        $email = $_POST['email'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $checkin_date = $_POST['checkin_date'];
        $checkout_date = $_POST['checkout_date'];
        $adults = $_POST['adults'];
        $children = $_POST['children'];
        $message = $_POST['message'];


        $con = mysqli_connect("localhost","sgtuniversityac_classichotelsind","Chandu@12345","sgtuniversityac_classichotel");

        $query = "insert into booking (email,name,phone,checkin_date,checkout_date,adults,children,message) values ('$email','$name','$phone','$checkin_date','$checkout_date','$adults','$children','$message')";

        $result = mysqli_query($con, $query);

        if($result==1)
        {       

        echo "Thank you for filling the Form, We will Reach Out to You soon !! ";
        
        }
        else {       

        echo "Insertion Failed";

             }
    }
?>