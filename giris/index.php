<?php
$username=$_POST['username'];
$password=$_POST['password'];

 if($username=='b231210372@sakarya.edu.tr'||$password=='b231210372')
    {    
        
        header('Location: https://webproje.vercel.app/giris/dogru.html');
 
    }
    
    else
    header('Location: https://webproje.vercel.app/giris/index.html');


?>