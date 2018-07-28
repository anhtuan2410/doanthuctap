<?php
@session_start();
?>
<a href="quantri.html"><img id="logo" src="https://cdn2.f-cdn.com/contestentries/37489/6986542/5231b1227f6c0_thumb900.jpg" width="200" height="100" alt="logo T3H" /></a> 
<!-- Sidebar Profile links -->
<div id="profile-links"> Chào, <a href="nguoidung.php" title="Edit your profile">
<?php echo $_SESSION["fullname"] ?>
</a><br />
  <br />
  <a href="#" title="View the Site">View the Site</a> |
  <a href="quantri.php?func=exit" title="Đăng xuất">Đăng xuất</a> </div>
