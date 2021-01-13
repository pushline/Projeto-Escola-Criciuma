<header>
    <div style="padding: 10px 0;">
        <a href="dashboard.php" style="margin: auto;display: block;position: absolute;margin-top: 0;">
            <img src="" alt="">
        </a>

       

        <p style="text-align: end;">Bem-vindo
         <strong>
        <?php echo $_SESSION['username'];  // puxando o nome de usuário 
        
        ?>
        </strong>
        <a href="../../index.php?logout='1'" style="color: red;padding-left: 10px;">
        Sair


        
        </a>

       
        </p>
    </div>
</header>
