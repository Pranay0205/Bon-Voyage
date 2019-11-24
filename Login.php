<?php



session_start();

if(isset($_POST['email'])&&$_POST['password'])
{

$email=$_POST['email'];
$password=md5(md5($_POST['password']));


}


if(!empty($email) || !empty($password))
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
                      $SELECT="SELECT password FROM userinfo WHERE password= ? limit 1" ;
                      $SELECT2="SELECT email FROM userinfo WHERE email= ? limit 1";
                      $stmt=$conn->prepare($SELECT2);
                      $stmt->bind_param('s',$email);
                      $stmt->execute();
                      $stmt->bind_result($email);
                      $stmt->store_result();
                      $rnum=$stmt->num_rows;

                      if($rnum!=0)
                      {
                                $stmt->close();
                                $stmt=$conn->prepare($SELECT);
                                $stmt->bind_param('s',$password);
                                 $stmt->execute();
                              $stmt->bind_result($password);
                                 $stmt->store_result();
                                $rnum1=$stmt->num_rows;

                                if($rnum1!=0)
                                {
                                  $_SESSION['email']=$email;
                                  $_SESSION['password']=$password;
                                    header("location:Booking.html");
                                   

                                }

                                else 
                                {
                              
                                  echo('<script>alert("WRONG PASSWORD ! ");</script>');
                                  
                                }
            
                                  


                      }


                      else
                      {

                                echo("NO SUCH USER FOUND !");
                              
                      }


          $stmt->close();
          $conn->close();
        }

      }



      else
      {

          echo "All Fields Are Required";
          die();
      }






?>













