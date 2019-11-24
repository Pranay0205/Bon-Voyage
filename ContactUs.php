<?php


if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['message']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

}

if(!empty($name)&&!empty($email)&&!empty($message))
{

    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="tourism";
    $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if(mysqli_connect_error())
              {
                      die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
              }

              else
              {

                $SELECT="SELECT email FROM userinfo WHERE email= ? limit 1" ;
                      $INSERT="INSERT INTO `reviews` (`Name`, `Email`, `Message`) VALUES (?,?,?)" ;
                      $stmt=$conn->prepare($SELECT);
                      $stmt->bind_param('s',$email);
                      $stmt->execute();
                      $stmt->bind_result($email);
                      $stmt->store_result();
                      $rnum=$stmt->num_rows;

                      if($rnum==0)
                      {
                        header("location:http://www.localhost/Bon-Voyage/sorrycontact.html");
                        die();


                      }

                      else
                      {


                        $stmt->close();
                        $stmt=$conn->prepare($INSERT);
                        $stmt->bind_param('sss',$name,$email,$message);
                        $stmt->execute();

                          header("location:http://www.localhost/Bon-Voyage/thankyou.html");
                              
                      }
                    }


          $stmt->close();
          $conn->close();




}

else{
    echo "All fields are required";
die();
}






















?>