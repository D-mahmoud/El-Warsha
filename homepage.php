<!DOCTYPE html>
<html>
   <head>
      <title>Elwarsha</title>
      <link rel="stylesheet" type="text/css" href="elwarsha.css">
   </head>
   <body>
      <header id="main-header">
      <div class="container">
         <img src="pp.jpg" width="250" height="200" class="center">
      </div>
      <div>
         <nav id="navbar2">
            <div class="container">
         </nav>
         </div> 
      </div>
      <div class="container" >
         <section id="main">
            <h1>Delegates Applications</h1>
            <form class="my-form">
            <form method="post" action="homepage.php">
               <div class="form-group">
                  <label>Name: </label>
                  <input type="text" name="name">
               </div>
               <div>
                  <label>Email: </label>
                  <input type="text" name="email">
               </div>
               <div>
                  <label>Phone Number: </label>
                  <input type="text" name="phonenumber">
               </div>
               <div>
                  <label>ID: </label>
                  <input type="text" name="ID">
               </div>
               <div>
                  <label>Faculty: </label>
                  <input type="text" name="faculty">
                  <?php require_once "getmajor.php"; ?>
                  </select>
               </div>
               <div>
                  <label>Time Of Interview: </label>
                  <select  name="daytimeid" id="daytimeid ">
                     <option> value ="0">Please Enter Time</option>
                     <?php require_once "gettime.php"; ?>
                  </select>
               </div>
               <div>
                  <label>Workshop </label>
                  <select  name="workshop" id="workshop ">
                     <option> value ="0">Please Choose Workshop</option>
                     <?php require_once "getworkshop.php"; ?>
                  </select>
               </div>
               <input class="button" type="submit" value="Submit"name="">
            </form>
         </section>
      </div>
      <div>
      <nav id="navbar2">
         <div class="container">
      </nav>
      </div>
      <hr>
      <footer id="main-footer">
         <p>Copyright &copy;2018 ElWarsha</p>
      </footer>
   </body>
</html>
