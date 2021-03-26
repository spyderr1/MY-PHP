<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </head>
  <body>
    <form   name="f1" method="post">
      <h1 style="text-align:center">Form Validation</h1>

                <div class="bg-danger">
              <div class="row">
                <div class="col-md-6">

        <label for="name">NAME</label><br>
          <input type="text" name="name" id=n1 />
            <span id="name" style="color:black"></span><br>
          </div>
  <div class="col-md-6">
      <label for="number">NUMBER</label><br>
          <input type="number" name="number" id=n2 />
            <span id="number" style="color:black"></span><br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">

        <label for="email">EMAIL</label><br>
          <input type="email" name="email" id=n3>
            <span id="email" style="color:black"></span><br>
          </div>
        <div class="col-md-6">
        <label for="address">ADDRESS</label><br>
          <input type="address" name="address" id=n4 />
            <span id="address" style="color:black"></span><br>
    </div>
     </div>

     <div class="row">
       <div class="col-md-6">

          <p>SELECT GENDER</p>
          <input id="male" type="checkbox" name="gender"  value="m">MALE
        <input id="female" type="checkbox" name="gender"  value="f">FEMALE

        <p id="alert4" style="color:black"></p>
          </div>
          <div class="col-md-6">

             <p>Select image to upload:</p>
       <input type="file" name="file">
               <span id="file" style="color:black"></p>

     </div>
   </div>
   <div class="row">
     <div class="col-md-4">
     </div>
      <div class="col-md-6">
        <input class="text-center" type="submit" value="submit" padding-right >
      </div>
    </div>







    </form>
