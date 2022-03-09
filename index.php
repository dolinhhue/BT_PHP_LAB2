<! DOCTYPE html>
  <html lang="vi">

  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name=" author" content="nguyendinhanh" />
    <link href='https://fonts.googleapis.com/css?family=Fjalla One' rel='stylesheet'>
    <style>
      * {
        margin: 0;
        padding: 0;
      }

      body {
        background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-2210775-jpeg.jpg") center center no-repeat;
        background-size: cover;
        width: 100vw;
        height: 100vh;
        display: grid;
        align-items: center;
        justify-items: center;
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
      }
      p {
        font-size: 12pt;
        font-family: 'Fjalla One';
        color: #2A293E;
        background: #f8f4e5;
        padding: 10px 50px;
        border: 2px solid black;
        box-shadow: 15px 15px 1px #ffa580, 15px 15px 1px 2px black;
      }

      h2 {
        text-align: center;
        padding: 0px;
        padding-left: 25px;
        font-weight: lighter;
        text-transform: uppercase;
        color: #414141;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }
    </style>
    <title>OOP PHP </title>
  </head>

  <body>
    <div id="wrapper ">
      <?php // IDEA :
      require_once("userclass.php");
      //create new user
      $nguyenanh = new User('nguyen anh', 'dinhanh vnn@gmail.com');

      echo "<h2>User info</h2>";
      echo "<p>UserID: " . $nguyenanh->GetUserID() . "<br/>";
      echo "UserName: " . $nguyenanh->GetUserName() . "</p>" . "<br/>";
      //add more user
      $nguyenanhmore = new User("Nguyen Van A", "youremail@gmail.com");
      echo "<h2>More user</h2>";
      echo "<p>UserID: " . $nguyenanhmore->GetUserID() . "<br/>";
      echo "UserName: " . $nguyenanhmore->GetUserName() . "</p>" . "<br/>";
      //
      include("employeeclass.php");
      $person_a = new Person("Nguyen Van B", 1234);
      echo "<h2>More OPP PHP</h2>";
      echo "<p>Person Name: " . $person_a->GetName() . "<br/>";
      echo "Person ID: " . $person_a->GetNationID() . "</p>" . "<br/>";

      echo "<h2>Employee</h2>";
      $employee_a = new Employee("Nguyen Van C", 5678, "Security");
      echo "<p>Employee ID:" . $employee_a->GetEmployeeID() . "<br>";
      echo "Employee Name:" . $employee_a->GetName() . "<br>";
      echo "Employee Department:" . $employee_a->GetDepartment() . "</p>" . "<br>";
      echo "<h2>More Employee</h2>";
      $employee_b = new Employee("Nguyen Van D", 112233, "Offical");
      echo "<p>Employee ID:" . $employee_b->GetEmployeeID() . "<br>";
      echo "Employee Name:" . $employee_b->GetName() . "<br>";
      echo "Employee Department:" . $employee_b->GetDepartment() . "</p>" . "<br>";
      ?>
    </div>
    <footer>
      &#169; 2016 - Anh Nguyen - Faculty of Information Technology (HUTECH)
    </footer>
  </body>