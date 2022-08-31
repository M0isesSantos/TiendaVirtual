<nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name"><a href="<?= base_url(); ?>/dashboard"></a>CodingLab</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="<?= base_url(); ?>/dashboard">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>                
                <li><a href="<?= base_url(); ?>/usuarios">
                    <i class='bx bx-user'></i>
                    <span class="link-name">Usuarios</span>
                </a></li>
                <ul>
                <li><a href="<?= base_url(); ?>/roles">
                    <i class='bx bx-user-pin'></i>
                    <span class="link-name">roles</span>
                </a></li>
                <li><a href="<?= base_url(); ?>/permisos">
                    <i class='bx bx-spreadsheet'></i>
                    <span class="link-name">permisos</span>
                </a></li>
                </ul>
                <li><a href="<?= base_url(); ?>/clientes">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Clientes</span>
                </a></li>
                <li><a href="<?= base_url(); ?>/productos">
                    <i class='bx bx-gift'></i>
                    <span class="link-name">Productos</span>
                </a></li>
                <li><a href="<?= base_url(); ?>/pedidos">
                    <i class='bx bx-shopping-bag'></i>
                    <span class="link-name">Reporte</span>
                </a></li>

                <li><a href="<?= base_url(); ?>/pedidos">
                    <i class='bx bx-shopping-bag'></i>
                    <span class="link-name">Informe</span>
                </a></li>
                


                <!--lo 
                <li><a href="#">
                    <i class="uil uil-share"></i>
                    
                </a></li>
-->
                <li><a href="<?= base_url(); ?>/opciones">
                    <i class='bx bx-cog'></i>
                <span class="link-name">Setting</span>
              
                
                </a></li>

               

            </ul>
            
            
            <div class="admin-user tooltip-element" data-tooltip="1">
        <div class="admin-profile hide">
        <img src="<?= media(); ?>/imagenes/perfil4.jpg" alt="">
          <div class="admin-info">
            <h5>John Doe</h5>
            <h5>Admin</h5>
          </div>
        </div>
        <a href="<?= base_url(); ?>/logou" class="log-out">
          <i class='bx bx-log-out'></i>
        </a>
      </div>
     </div>
    </nav>



