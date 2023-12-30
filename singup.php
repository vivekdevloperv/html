<?php
    include('connect.php');
?>
<html>
    <head>
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
    </style>
        <title>Form</title>
    </head>
    <center>
    <body>
        <form method="POST" >
         <h1>Singup</h1><br><br>
            <input type="text" placeholder="Name" name="name" required><br><br>
            <input type="text" placeholder="Phone No" name="phone" required><br><br>
            <input type="text" placeholder="Email" name="email" required><br><br>
            <input type="text" placeholder="Password" name="password" required><br><br>
            <input type="submit" value="Submit" name="submit"><br><br>
        </form>
    </body>
</html>  
<?php
    if (isset($_POST['submit']))
        {

            $sql='INSERT INTO data(name,phone,email,password)
            VALUES("'.$_POST['name'].'", "'.$_POST['phone'].'", "'.$_POST['email'].'","'.$_POST['password'].'" )';
            $res=mysqli_query($conn,$sql);
                if($res)
                {
                        echo 'DATA INSERTED';
                }
                else
                {
                    echo 'COULD NOT INSERT';
                }
        }             
?>         