<html>
<head></head>
<body>

<?php
$conn = mysqli_connect("localhost","root","","crud") or die("connection failed");
$sql = "SELECT * FROM school";
$result = mysqli_query($conn,$sql) or die("query unsuccessful");
?>

<table align="center" border="1 px" width="600px" height="100px">
    <th>ID</th>
    <th>Name</th>
    <th>Class</th>


<?php if(mysqli_num_rows($result)>0){
?>

<?php
    while($row = mysqli_fetch_assoc($result)){
?>
   
        <tr>
        <td align=Center><?php echo $row['sid'];?></td>
        <td align=Center><?php echo $row['sname'];?></td>
        <td align=Center><?php echo $row['sclass'];?></td>
        </tr>
       

<?php
    } //while loop ends here
?>


<?php
    } //if ends here
else
    echo "no record found";
    mysqli_close($conn);
?>

</table>
</body>
</html>
