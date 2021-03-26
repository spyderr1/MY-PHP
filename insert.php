<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
 $name = $_POST['name'];
 $number = $_POST['number'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $gender = $_POST['gender'];
 $filename=$_FILES['file']['name'];
 move_uploaded_file($_FILES['file']['tmp_name'],'uploads/'.$filename);
 $filepath="uploads/".$filename;



 $conn = new mysqli('localhost','root','','pass');
 if($conn->connect_error){
   die('connection failed : '.$conn->connect_error);
 }else{
   $stmt = $conn->prepare("insert into registrationa(name, number, email, address, gender, file)
   value(?, ?, ?, ?, ?, ?)");
   $stmt->bind_param("sissss",$name,$number,$email,$address,$gender,$filepath);
   $stmt->execute();
   echo '<script> alert("your date is store") </script>';
   $stmt->close();
   $conn->close();
 }

  ?>

  <?php
   $conn = new mysqli('localhost','root','','pass');
  $result = mysqli_query($conn,"SELECT * FROM registrationa");

  ?>


  <!DOCTYPE html>
  <html>
  <head>
  <title> Retrive data</title>
  <style>
  table {
  border-collapse: collapse;
  width: 100%;
  }

  th, td {
  text-align: left;
  padding: 8px;
 background-color: tomato;


  }


  </style>
  </head>
  <body>
  <?php
  if (mysqli_num_rows($result) > 0) {
  ?>
  <table >

  <tr>
    <td><b>ID</b></td>
    <td><b>NAME</b></td>
    <td><b>NUMBER</b></td>
    <td><b>EMAIL</b></td>
    <td><b>ADDRESS</b></td>
    <td><b>GENDER</b></td>
    <td><b>IMAGE</b></td>
  </tr>
  <?php
  $i=0;
  while($row = mysqli_fetch_array($result)) {
  ?>
  <tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["number"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><img src="<?php echo $row["file"]; ?>" height="100" width="100"></td>

  </tr>
  <?php
  $i++;
  }
  ?>
  </table>
  <?php
  }
  else{
    echo "No result found";
  }
  ?>
  </body>
  </html>
