
<!DOCTYPE html>
<html>
  <body>
<?php 
    require "nav.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="controller/findUser.php">
      <h1>SEARCH FOR USERS</h1>
      <input type="text" name="user_name" />
      <input type="submit" name="findUser" value="Search"/>
    </form>

<?php
//header("location:../searchUser.php");
?>
 
  </body>
</html>