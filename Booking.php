
<!DOCTYPE html>


<?php
session_set_cookie_params(0);
session_start();

if(isset($_POST['mem-0'])&&isset($_POST['mem-1'])&&isset($_POST['mem-2'])&&isset($_POST['mem-3'])&&isset($_POST['mem-4'])&&isset($_POST['mem-5']))
{
    $mem0=$_POST['mem-0'];
    $mem1=$_POST['mem-1'];
    $mem2=$_POST['mem-2'];
    $mem3=$_POST['mem-3'];
    $mem4=$_POST['mem-4'];
    $mem5=$_POST['mem-5'];

    $gen0=$_POST['gen-0'];                                              //6
    $gen1=$_POST['gen-1'];
    $gen2=$_POST['gen-2'];
    $gen3=$_POST['gen-3'];
    $gen4=$_POST['gen-4'];
    $gen5=$_POST['gen-5'];

    $age0=$_POST['age-0'];
    $age1=$_POST['age-1'];
    $age2=$_POST['age-2'];
    $age3=$_POST['age-3'];
    $age4=$_POST['age-4'];
    $age5=$_POST['age-5'];

    if(!empty($mem0) && !empty($mem1) &&!empty($mem2)&&!empty($mem3) &&!empty($mem4)&& !empty($mem5))
    {
        $host="localhost";
          $dbUsername="root";
          $dbPassword="";
          $dbname="tourism";
          $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
          $conn2=new mysqli($host,$dbUsername,$dbPassword,$dbname);
          $conn3=new mysqli($host,$dbUsername,$dbPassword,$dbname);
          $conn4=new mysqli($host,$dbUsername,$dbPassword,$dbname);
          $conn5=new mysqli($host,$dbUsername,$dbPassword,$dbname);
          $conn6=new mysqli($host,$dbUsername,$dbPassword,$dbname);

          if(mysqli_connect_error())
            {
                    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
            }

          else
          {
            $INSERT="INSERT INTO `mem1` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param('ssi',$mem0,$gen0,$age0);
            $stmt->execute();
    
            $INSERT2="INSERT INTO `mem2` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
                        $stmt2=$conn2->prepare($INSERT2);
                        $stmt2->bind_param('ssi',$mem1,$gen1,$age1);
                        $stmt2->execute();

                        
                       
                        $INSERT3="INSERT INTO `mem3` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
                        $stmt3=$conn3->prepare($INSERT3);
                        $stmt3->bind_param('ssi',$mem2,$gen2,$age2);
                        $stmt3->execute();
                       
    
                        $INSERT4="INSERT INTO `mem4` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
                        $stmt4=$conn4->prepare($INSERT4);
                        $stmt4->bind_param('ssi',$mem3,$gen3,$age3);
                        $stmt4->execute();
    
                        
                            $INSERT5="INSERT INTO `mem5` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
                            $stmt5=$conn5->prepare($INSERT5);
                            $stmt5->bind_param('ssi',$mem4,$gen4,$age4);
                            $stmt5->execute();
                           
            

                        $INSERT6="INSERT INTO `mem6` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
                        $stmt6=$conn6->prepare($INSERT6);
                        $stmt6->bind_param('ssi',$mem5,$gen5,$age5);
                        $stmt6->execute();
            
        $stmt->close();
        $conn->close();
      }

    }



    else
    {

        echo "All Fields Are Required";
        die();
    }


}




  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  else if(isset($_POST['mem-0'])&&isset($_POST['mem-1'])&&isset($_POST['mem-2'])&&isset($_POST['mem-3'])&&isset($_POST['mem-4']))
  {
  $mem0=$_POST['mem-0'];
  $mem1=$_POST['mem-1'];
  $mem2=$_POST['mem-2'];
  $mem3=$_POST['mem-3'];
  $mem4=$_POST['mem-4'];
  $gen0=$_POST['gen-0'];
  $gen1=$_POST['gen-1'];
  $gen2=$_POST['gen-2'];
  $gen3=$_POST['gen-3'];
  $gen4=$_POST['gen-4'];                              //5
  $age0=$_POST['age-0'];
  $age1=$_POST['age-1'];
  $age2=$_POST['age-2'];
  $age3=$_POST['age-3'];
  $age4=$_POST['age-4'];
  
  if(!empty($mem0) && !empty($mem1) &&!empty($mem2)&& !empty($mem3) &&!empty($mem4))
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
          $INSERT="INSERT INTO `mem1` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
          $stmt=$conn->prepare($INSERT);
          $stmt->bind_param('ssi',$mem0,$gen0,$age0);
          $stmt->execute();
  
          $INSERT="INSERT INTO `mem2` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
                      $stmt=$conn->prepare($INSERT);
                      $stmt->bind_param('ssi',$mem1,$gen1,$age1);
                      $stmt->execute();
  
                      $INSERT="INSERT INTO `mem3` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
                      $stmt=$conn->prepare($INSERT);
                      $stmt->bind_param('ssi',$mem2,$gen2,$age2);
                      $stmt->execute();
  
                      $INSERT="INSERT INTO `mem4` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
                      $stmt=$conn->prepare($INSERT);
                      $stmt->bind_param('ssi',$mem3,$gen3,$age3);
                      $stmt->execute();
  
                          $INSERT="INSERT INTO `mem5` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
                          $stmt=$conn->prepare($INSERT);
                          $stmt->bind_param('ssi',$mem4,$gen4,$age4);
                          $stmt->execute();
          
  
  
      $stmt->close();
      $conn->close();
    }
  
}
  }
  
   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  else if(isset($_POST['mem-0'])&&isset($_POST['mem-1'])&&isset($_POST['mem-2'])&&isset($_POST['mem-3']))
{
    $mem0=$_POST['mem-0'];
    $mem1=$_POST['mem-1'];
    $mem2=$_POST['mem-2'];
    $mem3=$_POST['mem-3'];
    $gen0=$_POST['gen-0'];
    $gen1=$_POST['gen-1'];
    $gen2=$_POST['gen-2'];
    $gen3=$_POST['gen-3'];
    $age0=$_POST['age-0'];
    $age1=$_POST['age-1'];                                              //4
    $age2=$_POST['age-2'];
    $age3=$_POST['age-3'];

    if(!empty($mem0) && !empty($mem1) &&!empty($mem2)&& !empty($mem3))
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
            $INSERT="INSERT INTO `mem1` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param('ssi',$mem0,$gen0,$age0);
            $stmt->execute();
           
            $INSERT="INSERT INTO `mem2` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
                        $stmt=$conn->prepare($INSERT);
                        $stmt->bind_param('ssi',$mem1,$gen1,$age1);
                        $stmt->execute();

                        $INSERT="INSERT INTO `mem3` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
                        $stmt=$conn->prepare($INSERT);
                        $stmt->bind_param('ssi',$mem2,$gen2,$age2);
                        $stmt->execute();

                        $INSERT="INSERT INTO `mem4` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
                        $stmt=$conn->prepare($INSERT);
                        $stmt->bind_param('ssi',$mem3,$gen3,$age3);
                        $stmt->execute();

                     


        $stmt->close();
        $conn->close();
      }

    }



    else
    {

        echo "All Fields Are Required";
        die();
    }




}

 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  else if(isset($_POST['mem-0'])&&isset($_POST['mem-1'])&&isset($_POST['mem-2']))
  {
      $mem0=$_POST['mem-0'];
      $mem1=$_POST['mem-1'];
      $mem2=$_POST['mem-2'];
      $gen0=$_POST['gen-0'];
      $gen1=$_POST['gen-1'];
      $gen2=$_POST['gen-2'];
      $age0=$_POST['age-0'];
      $age1=$_POST['age-1'];                                      //3
      $age2=$_POST['age-2'];
  
      if(!empty($mem0) || !empty($mem1) ||!empty($mem2))
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
              $INSERT="INSERT INTO `mem1` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
              $stmt=$conn->prepare($INSERT);
              $stmt->bind_param('ssi',$mem0,$gen0,$age0);
              $stmt->execute();
              
              $INSERT="INSERT INTO `mem2` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
                          $stmt=$conn->prepare($INSERT);
                          $stmt->bind_param('ssi',$mem1,$gen1,$age1);
                          $stmt->execute();
  
                          $INSERT="INSERT INTO `mem3` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
                          $stmt=$conn->prepare($INSERT);
                          $stmt->bind_param('ssi',$mem2,$gen2,$age2);
                          $stmt->execute();
  
  
          $stmt->close();
          $conn->close();
        }
  
      }
  
  
  
      else
      {
  
          echo "All Fields Are Required";
          die();
      }
  
  
  }

 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  else if(isset($_POST['mem-0'])&&isset($_POST['mem-1']))
  {
    $mem0=$_POST['mem-0'];
    $mem1=$_POST['mem-1'];
    $gen0=$_POST['gen-0'];
    $gen1=$_POST['gen-1'];
    $age0=$_POST['age-0'];
    $age1=$_POST['age-1'];

    if(!empty($mem0) || !empty($mem1) )
    {
        $host="localhost";
          $dbUsername="root";                               //2
          $dbPassword="";
          $dbname="tourism";
          $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

          if(mysqli_connect_error())
            {
                    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
            }

          else
          {
            $INSERT="INSERT INTO `mem1` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param('ssi',$mem0,$gen0,$age0);
            $stmt->execute();

            echo $mem0;

            $INSERT="INSERT INTO `mem2` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
                        $stmt=$conn->prepare($INSERT);
                        $stmt->bind_param('ssi',$mem1,$gen1,$age1);
                        $stmt->execute();
            


        $stmt->close();
        $conn->close();
      }

    }



    else
    {

        echo "All Fields Are Required";
        die();
    }



  }








////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
else if(isset($_POST['mem-0'])){

    $mem0=$_POST['mem-0'];
    $gen0=$_POST['gen-0'];
    $age0=$_POST['age-0'];

    if(!empty($mem0))
    {
        $host="localhost";                                                          //1
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
                    
                    $INSERT="INSERT INTO `mem1` (`Name`, `Gender`, `Age`) VALUES (?,?,?)" ;
                    $stmt=$conn->prepare($INSERT);
                    $stmt->bind_param('ssi',$mem0,$gen0,$age0);
                    $stmt->execute();
                    
                    


        $stmt->close();
        $conn->close();
                $yes=1;
        header("location:http://www.localhost/Bon-Voyage/Bookings.php?yes=1");
        
        
      }

    }



    else
    {
        else $yes=0;
        echo "All Fields Are Required";
        die();
    }

}

 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




  






?>