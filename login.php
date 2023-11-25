<?php
 
 $host="localhost";
 $user="root";
 $password="";
 $db="bank";

$conn = mysqli_connect($host,$user,$password,$db);
mysqli_select_db($conn , $db);

 if(isset($_POST['full-name'])){
    
    $uname=$_POST['full-name'];
    $password=$_POST['email'];
    
    $mysqli="select * from login where user_id='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($conn,$mysqli );
    
    if(mysqli_num_rows($result)==1){
        header("location:home.php");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
 ?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8"> <!--charset covers all chars and symbols , meta used to display content on browsers-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <!-- https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css -->
  </head>
<body>
  <form  method ="post">
   <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
      <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
        <h1 class="title-font font-medium text-3xl text-gray-1900">Bank Management System </h1>
      </div>
      <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
        <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Login</h2>
        <div class="relative mb-4">
          <label for="full-name" class="leading-7 text-sm text-gray-600">User id</label>
          <input type="text" id="full-name" name="full-name" placeholder="Enter your User Id" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600">Password</label>
          <input type="password" id="email" name="email" placeholder="Enter your Password" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Login
       
        </button>



        
      </div>
    </div>
  </section>
</form>
</body>
</html>

