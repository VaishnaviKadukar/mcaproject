<html>
    <head>
   
        <title> Announcements</title>
</head>
    <body>
        <table border=1px cellspacing=10 cellpadding=10>
        
         <tr>
         <!-- <th>Sr.no</th>   -->
          <th style="background-color:rgb(197, 192, 192);">Announcements</th>  
</tr>


<?php
include("connection.php"); 
error_reporting(0);
$query="SELECT * FROM table1";
$data= mysqli_query($conn,$query);
$total=mysqli_num_rows($data);


if($total !=0)
{
     while($result=mysqli_fetch_assoc($data)){
     echo "
        <tr>
       
        <td>". $result['para1'] ."</td>
        </tr>

     ";
     }
}

else{
    echo "no records found";
}
?>

</table>
</body>
</html>