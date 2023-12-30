<?php
    include('connect.php');
?>


<html>
    <head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


        <style>
        form{
           
            background-color:blue;
            border-radius: 10px;
                    margin-top:300px;
                    margin-bottom:px;
                    margin-left:670px;
                    margin-right:580px;
        }
        input{
            border-color:solid white;
            border-radius: 5px;
            font-size: 20;
        }
        botton{
            margin-top:0px;
                    margin-bottom:px;
                    margin-left:100px;
                    margin-right:px;

        }
    </style>
        <title>Form</title>
    </head>
    <center>
    <body>
        <form method="POST"action="">
         <h1>Login</h1><br><br>
            <input type="text" placeholder="Name"  name="name" required><br><br>
            <input type="text" placeholder="Password" name="password" required><br><br>
            <input type="submit" value="Submit" name="submit" class='btn btn-success'>
            <a href="singup.php">
            <botton class='btn btn-danger'>Singup</botton>
            </a>
        </form>
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        
        <?php
        if(isset($_POST['submit']))
{
    $user_exitr_query='SELECT * FROM data 
    WHERE name = "'.$_POST['name'].'" and
     password ="'.$_POST['password'].'"';
     echo $user_exitr_query;
    $result= mysqli_query($conn,$user_exitr_query);
    if (mysqli_num_rows($result) == 1)
    {   
        header('Location: Dukan.php');
    }
    else{
       echo "your data will not match please try again";
   }


}
?>