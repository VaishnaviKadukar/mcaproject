<html>
    <head><title> Announcement</title></head>
    <body>
        <table border=1px cellspacing=10 cellpadding=10 >
         <tr>
          <th style="background-color:rgb(197, 192, 192);">Announcements</th>  
          <th style="background-color:rgb(197, 192, 192);">Operations</th>
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
       
        <td> <button style='background-color:orange'><a href= 'delete.php?rn=$result[id]' style='text-decoration:none;color:white;'>Delete</a></button></td>
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