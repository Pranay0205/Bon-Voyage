<!DOCTYPE html>

<?php
// session_start();
// $yes=$_GET['yes'];
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="resources/css/Booking.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css" />
    <link rel="styelsheet" type="text/css" href="vendors/css/Animate.css" />
    <title>Booking Page</title>
  </head>
  <body>
    <div class="slideInDown">
      <h2 class="title">Book</h2>
    </div>

    <section class="booking-section">
      <div class="main-container">
        <button type="button" name="add-btn" class="add-btn" onclick="counts()">Add Members</button>
        <button type="button" name="rmv-btn" class="rmv-btn">Remove Members</button>

        <form action="Booking.php" method="POST">
          <div id="members-container">
            <div id="members">
              <p>Name:<br /><input type="text" name="mem-0" placeholder="Name" required /></p>
            </div>
            <div id="Gender">
              <p class="p-test">Gender:<br /></p>

              <div class="custom-select" style="width:200px;">
                <select name="gen-0">
                  <option>Select</option>
                  <option value="m">Male</option>
                  <option value="f">Female</option>
                  <option value="o">Other</option>
                </select>
              </div>
            </div>
            <div id="Age">
              <p>Age:<br /><input type="Number" name="age-0" placeholder="Age" min="0" max="150" required /></p>
            </div>
          </div>
          <button type="submit" value="submit" name="submit" class="sub-btn">Book</button>
        </form>
      </div>
      <div class="price-details">
        <form>
          <div>Booking Details</div>
          <!-- <div>Number of Members:</div> -->
          <div><span>Package Name:</span></div>
          <div><span>Package Amount:</span></div>
          <div>Total Amount</div>
        </form>
      </div>
    </section>
  </body>
  <script src="resources/JS/Booking.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</html>

<!-- DYNAMIC VARIABLE IN PHP -->
<!-- ${"file".$i} = file($filelist[$i]); -->
