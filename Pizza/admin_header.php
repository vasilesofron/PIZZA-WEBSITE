<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="header">

   <section class="flex">
      <a href="admin_page.php" class="logo">Panou<span>Administrativ</span></a>

      <nav class="navbar">
         <a href="admin_page.php">Acasa</a>
         <a href="admin_products.php">Pizza</a>
         <a href="admin_orders.php">Comenzi</a>
         <a href="admin_accounts.php">Administrator</a>
         <a href="users_accounts.php">Utilizator</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `admin` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="admin_profile_update.php" class="btn">Actualizeaza profil</a>
         <a href="logout.php" class="delete-btn">Deconectare</a>
         <div class="flex-btn">
            <a href="admin_login.php" class="option-btn">Autentificare</a>
            <a href="admin_register.php" class="option-btn">Inregistrare</a>
         </div>
      </div>
   </section>

</header>