<link rel="stylesheet" href=navbar.css>


<?php
$current_page = basename($_SERVER['PHP_SELF']); 
?>


<nav>
  <ul>
    <li><a href="index.php" class="<?php if($current_page == 'index.php'){echo 'active';} ?>">Home</a></li>
    <li><a href="skills.php" class="<?php if($current_page == 'skills.php'){echo 'active';} ?>">Skills</a></li>
    <li><a href="certificates.php" class="<?php if($current_page == 'certificates.php'){echo 'active';} ?>">Certificates</a></li>
    <li><a href="contactMe.php" class="<?php if($current_page == 'contactMe.php'){echo 'active';} ?>">Contact Me</a></li>
  </ul>
</nav>
