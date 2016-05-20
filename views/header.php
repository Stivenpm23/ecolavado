<div class="menu">
<header>
        <div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-list2"></span></a>
		</div>
    <nav>
        <ul>
           <li><a <?= ($view == "home" ? 'class="menu-active"': '' ) ?> href="<?= $base_path ?>">Home</a></li>
           <li><a <?= ($view == "que-es-ecolavado" ? 'class="menu-active"': '' ) ?> href="<?= $base_path ?>que-es-ecolavado">¿QUÉ ES ECOLAVADO?</a></li>
           <li><a <?= ($view == "tips-de-lavado" ? 'class="menu-active"': '' ) ?> href="<?= $base_path ?>tips-de-lavado">TIPS FAB PARA CUIDAR EL MEDIO AMBIENTE</a></li>
           <li><a <?= ($view == "saltate-el-remojo" ? 'class="menu-active"': '' ) ?> href="<?= $base_path ?>saltate-el-remojo">CON FAB SÁLTATE EL REMOJO </a></li>
           <li><a <?= ($view == "el-clic-del-ahorro" ? 'class="menu-active"': '' ) ?> href="<?= $base_path ?>el-clic-del-ahorro">CLIC DEL AHORRO</a></li>
           <li  class="ultimo"><a href="https://www.fab.com.co/detergentes/" target="_blank">DETERGENTES</a></li>
        </ul>
    </nav>
</header>
</div>