<?php 
session_Start();
?>
<h1>hello
  <?php echo $_SESSION['email'];?>
</h1>
<?php
session_Start();
if(session_destroy()){
  header("location:loginht.php")
}
?>