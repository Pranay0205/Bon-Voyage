    <?php



  if(isset($_POST['username'])&&$_POST['password']&&$_POST['password']&&$_POST['gender']&&$_POST['email']&&$_POST['phoneCode']&&$_POST['phone'])
    {

    $username=$_POST['username'];

    $password=($_POST['password']);
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phoneCode=$_POST['phoneCode'];
    $phone=$_POST['phone'];

  }

 



    if(!empty($username) || !empty($password) || !empty($gender)|| !empty($email)|| !empty($phoneCode)|| !empty($phone))
      {
          $host="localhost";
            $dbUsername="root";
            $dbPassword="root123";
            $dbname="tourism";
            $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

            if(mysqli_connect_error())
              {
                      die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
              }

            else
            {
                      $SELECT="SELECT email FROM userinfo WHERE email= ? limit 1" ;
                      $INSERT="INSERT INTO `userinfo` (`username`, `password`, `gender`, `email`, `phoneCode`, `phone`) VALUES (?,?,?,?,?,?)" ;
                      $stmt=$conn->prepare($SELECT);
                      $stmt->bind_param('s',$email);
                      $stmt->execute();
                      $stmt->bind_result($email);
                      $stmt->store_result();
                      $rnum=$stmt->num_rows;

                      if($rnum==0)
                      {
                                $stmt->close();
                                $stmt=$conn->prepare($INSERT);
                                $stmt->bind_param('ssssii',$username,$password,$gender,$email,$phoneCode,$phone);
                                $stmt->execute();

                                  header("location:http://www.localhost/Joker/ok.html");


                      }

                      else
                      {
                              header("location:http://www.localhost/Joker/sorry.html");
                              die();
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
