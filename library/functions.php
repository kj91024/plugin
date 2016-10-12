<?php
function allStyles(){
	echo "<link rel='stylesheet' href='".DIR.'css/bootstrap.min.css'."' type='text/css' media='all'/>
	<link rel='stylesheet' href='".DIR.'css/font-awesome.min.css'."' type='text/css' media='all'/>
	<link rel='stylesheet' href='".DIR.'css/bootstrap-theme.min.css'."' type='text/css' media='all'/>
	<link rel='stylesheet' href='".DIR.'css/styles-backend.css'."' type='text/css' media='all'/>
	<link rel='stylesheet' href='".DIR.'css/styles-frontend.css'."' type='text/css' media='all'/>
	<script src='".DIR.'js/jquery-3.1.0.min.js'."'></script>
	<script src='".DIR.'js/jquery-ui.min.js'."'></script>
	<script src='".DIR.'js/jquery.cookie.js'."'></script>
	<script src='".DIR.'js/design.js'."'></script>
	<script src='".DIR.'js/connecting.js'."'></script>
	<script src='".DIR.'js/checking.js'."'></script>
	<script src='".DIR.'js/tabs.js'."'></script>";
}
function adminPage(){
	echo '
	<div id="kd">
		<div id="kd-header">

			<nav>
				<ul>
					<li class="title"><i class="fa fa-cog"></i>KD - Negocio</li>
					<li class="li active">Panel Inicial</li>
					<li class="li">Configuraciones</li>
				</ul>
			</nav>

		</div>
		<div id="kd-content">
			<div id="kd-panel-left" class="active">
				<div class="sidebar active">
					<div id="kd-map">
						<h3>Estadísticas</h3>
						<div class="header-map">
							<button></button> 
							<select>
								<option>Septiembre</option>
								<option>Agosto</option>
								<option>Julio</option>
								<option>Junio</option>
							</select>
						</div>
						<div class="map">
							<ul>
								<li style="margin-top: 10% !important;"><span>10</span><b></b></li><li style="margin-top: 20% !important;"><span>7</span><b></b></li><li style="margin-top: 10% !important;"><span>10</span><b></b></li><li style="margin-top: 3.4% !important;"><span>11</span><b></b></li><li style="margin-top: 20.5% !important;"><span>3</span><b></b></li><li style="margin-top: 0% !important;"><span>12</span><b></b></li>
							</ul>
						</div>
						<div class="footer-map">
							<ul>
								<li>Sep 19</li><li>Sep 20</li><li>Sep 21</li><li>Sep 22</li><li>Sep 23</li><li>Sep 24</li><li>Sep 25</li><li>Sep 26</li><li>Sep 27</li><li>Sep 28</li><li>Sep 29</li><li>Sep 30</li>
							</ul>
						</div>
					</div>
					<div id="kd-sidebar-left">
						<h3>Casas</h3>
						<ul>
							<li>
								<div class="kd-price">$15.200</div>
								<div class="kd-number">10</div>
								<a href="#"><div class="kd-title">Casa muy Bonita</div></a>
							</li>
							<li>
									<div class="kd-price">$15.200</div>
									<div class="kd-number">10</div>
									<a href="#"><div class="kd-title">Todo el piso es tuyo</div></a>
							</li>
							<li>
									<div class="kd-price">$15.200</div>
									<div class="kd-number">10</div>
									<a href="#"><div class="kd-title">Todo el piso es tuyo</div></a>
							</li>
							<li>
									<div class="kd-price">$15.200</div>
									<div class="kd-number">10</div>
									<a href="#"><div class="kd-title">Todo el piso es tuyo</div></a>
							</li>
							<li>
									<div class="kd-price">$15.200</div>
									<div class="kd-number">10</div>
									<a href="#"><div class="kd-title">Todo el piso es tuyo</div></a>
							</li>
							<li>
									<div class="kd-price">$15.200</div>
									<div class="kd-number">10</div>
									<a href="#"><div class="kd-title">Todo el piso es tuyo</div></a>
							</li>
							<li>
									<div class="kd-price">$15.200</div>
									<div class="kd-number">10</div>
									<a href="#"><div class="kd-title">Todo el piso es tuyo</div></a>
							</li>
							<li>
									<div class="kd-price">$15.200</div>
									<div class="kd-number">10</div>
									<a href="#"><div class="kd-title">Todo el piso es tuyo</div></a>
							</li>
						</ul>
					</div>
					<div class="vert"></div>
					<div id="kd-sidebar-right">
						<h3>Departamentos</h3>
						<ul>
							<li>
									<div class="kd-price">$15.200</div>
									<div class="kd-number">10</div>
									<a href="#"><div class="kd-title">Todo el piso es tuyo</div></a>
							</li>
							<li>
									<div class="kd-price">$15.200</div>
									<div class="kd-number">10</div>
									<a href="#"><div class="kd-title">Todo el piso es tuyo</div></a>
							</li>
							<li>
									<div class="kd-price">$15.200</div>
									<div class="kd-number">10</div>
									<a href="#"><div class="kd-title">Todo el piso es tuyo</div></a>
							</li>
							<li>
									<div class="kd-price">$15.200</div>
									<div class="kd-number">10</div>
									<a href="#"><div class="kd-title">Todo el piso es tuyo</div></a>
							</li>
							<li>
									<div class="kd-price">$15.200</div>
									<div class="kd-number">10</div>
									<a href="#"><div class="kd-title">Todo el piso es tuyo</div></a>
							</li>
							<li>
									<div class="kd-price">$15.200</div>
									<div class="kd-number">10</div>
									<a href="#"><div class="kd-title">Todo el piso es tuyo</div></a>
							</li>
							<li>
									<div class="kd-price">$15.200</div>
									<div class="kd-number">10</div>
									<a href="#"><div class="kd-title">Todo el piso es tuyo</div></a>
							</li>
							<li>
									<div class="kd-price">$15.200</div>
									<div class="kd-number">10</div>
									<a href="#"><div class="kd-title">Todo el piso es tuyo</div></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="sidebar">
					<form id="kd-settings">
						<h3 class="set-title"><span>Color del Panel Exterior</span><div></div></h3>
						<p>Solo hay dos colores que puedes escoger, estos colores se asignarán al panel exterior con el que interactuan todos los usuarios. Es importante ver que color es el más conveniente para tu página.</p>
						<ul>
							<li><input type="radio" name="color"><span>Default</span><div class="color5"></div></li>
							<li><input type="radio" name="color"><span>#000000</span><div class="color9"></div></li>
						</ul>
						<h3 class="set-title"><span>Colores</span><div></div></h3>
						<p>Colorea todas las secciones del plugin, verificar que color da mucho mejor a la aplicacion es esencial.</p>
						<ul>
							<li><input type="radio" name="color"><span>Default</span><div class="color7"></div></li>
							<li><input type="radio" name="color"><span>#b73737</span><div class="color1"></div></li>
							<li><input type="radio" name="color"><span>#fe9925</span><div class="color2"></div></li>
							<li><input type="radio" name="color"><span>#a337b7</span><div class="color3"></div></li>
							<li><input type="radio" name="color"><span>#37abb7</span><div class="color4"></div></li>
							<li><input type="radio" name="color"><span>#37b75e</span><div class="color5"></div></li>
							<li><input type="radio" name="color"><span>#ffec04</span><div class="color6"></div></li>
							<li><input type="radio" name="color"><span>#6f6f6f</span><div class="color8"></div></li>
							<li><input type="radio" name="color"><span>#000000</span><div class="color9"></div></li>
						</ul>
						<label><input type="text" placeholder=""></label>
						<button class="submit">Actualizar</button>
					</form>
				</div>
			</div>
			<div id="kd-panel-right">
				<h2>Usuarios Conectados</h2>
				<ul>';
				for ($i=0; $i < 10; $i++) {
					echo '<li>
						<div class="kd-thumbnail"><img src="'.DIR.'images/avatar/a120_'.rand(0,9).'.jpg'.'"></div>
						<div class="name">Admin</div>
						<div class="time">hace 5 minutos</div>
					</li>';
				}
				echo '</ul>
			</div>
		</div>
	</div>';
}
function containerPage(){
	print_r($_COOKIE);
	if($_COOKIE["name"] and $_COOKIE["avatar"]){
		echo '<div id="kd-move">
			  	<div class="header">
			  		<nav>
			  			<div id="kd-user">
			  				<div class="kd-thumbnail"><img src="'.$_COOKIE["avatar"].'"></div>
			  				<div class="kd-name">'.$_COOKIE["name"].'</div>
			  			</div>
			  			<div class="kd-user-button"><button><i class="fa fa-power-off"></i></button></div>
			  			<ul>
			  				<li class="active" data-id="kd-welcome"><i class="fa fa-home"></i></li>
			  				<li data-id="kd-mycar"><i class="fa fa-shopping-cart"></i>Mi carrito</li>
			  				<li data-id="kd-favorite"><i class="fa fa-heart"></i>Favoritos</li>
			  				<li data-id="kd-forum">Forum</li>
			  			</ul>
			  			<form class="kd-search">
			  				<button><i class="fa fa-search"></i></button>
			  				<label><input type="text" placeholder="Buscar Aqui adentro"></label>
			  			</form>
			  			<button class="pull up"><i class="fa fa-sort-up"></i></button>
			  		</nav>
			  	</div>
			  	<div class="content">
			  		
			  		<!--<div class="user-right">
			  				<ul>
			  					<li><img src="http://localhost/wordpress/wp-content/plugins/kd-business-car/images/avatar/a120_'.rand(0,9).'.jpg"></li>
			  				</ul>
			  			</div>
			  			<div class="sidebar">
			  				<h2>¡Bienvenido(a) @kj91024!</h2>
			  				explicar cada uno de los botones para que entiendad para que sirve :]
			  			</div>
			  		</div>-->
			  		
			  		<div id="kd-welcome" class="sidebar active">
			  			<div class="news">
			  				<h3>Mira estas Promociones</h3>
			  				<ul>
			  					<li>
			  						<a href="#">
			  						<b>Revajas del 50%</b>
			  						<p>Estas rebajas se aplican a solo departamentos</p>
			  						</a>
			  					</li>
			  					<li>
			  						<a href="#">
			  						<b>Revajas del 50%</b>
			  						<p>Estas rebajas se aplican a solo departamentos</p>
			  						</a>
			  					</li>
			  					<li>
			  						<a href="#">
			  						<b>Revajas del 50%</b>
			  						<p>Estas rebajas se aplican a solo departamentos</p>
			  						</a>
			  					</li>
			  				</ul>
			  			</div>	
			  		</div>
		  			<div id="kd-mycar" class="sidebar">
		  				<div class="icon"><i class="fa fa-shopping-cart"></i></div>
		  				<!--<button class="kd-slider-left"><i class="fa fa-chevron-left"></i></button>
		  				<button class="kd-slider-right"><i class="fa fa-chevron-right"></i></button>
		  				<div class="kd-slider">
			  				<div class="kd-entrys">
			  					<a href="#">
			  						<div class="kd-entry">
		  								<div class="kd-entry-thumbnail">
			  								<img src="http://www.construyehogar.com/wp-content/uploads/2015/06/Dise%C3%B1o-de-casa-moderna-de-dos-plantas.jpg"><button><i class="fa fa-close"></i></button>
			  							</div>
			  							<div class="kd-entry-title">
			  								<b>$120.000</b>
			  								<span>Departamentos totalmente Remodelado</span>
			  							</div>		
			  						</div>
			  					</a>
			  					<a href="#">
			  						<div class="kd-entry">
		  								<div class="kd-entry-thumbnail">
			  								<img src="http://www.construyehogar.com/wp-content/uploads/2015/06/Dise%C3%B1o-de-casa-moderna-de-dos-plantas.jpg"><button><i class="fa fa-close"></i></button>
			  							</div>
			  							<div class="kd-entry-title">
			  								<b>$120.000</b>
			  								<span>Departamentos totalmente Remodelado</span>
			  							</div>		
			  						</div>
			  					</a>
			  					<a href="#">
			  						<div class="kd-entry">
		  								<div class="kd-entry-thumbnail">
			  								<img src="http://www.construyehogar.com/wp-content/uploads/2015/06/Dise%C3%B1o-de-casa-moderna-de-dos-plantas.jpg"><button><i class="fa fa-close"></i></button>
			  							</div>
			  							<div class="kd-entry-title">
			  								<b>$120.000</b>
			  								<span>Departamentos totalmente Remodelado</span>
			  							</div>		
			  						</div>
			  					</a>
			  				</div>
			  			</div>-->
		  				<div class="empty">No tienes ningun articulo en tu carrito de compras</div>
		  			</div>
			  		<div id="kd-favorite" class="sidebar">
		  				<div class="icon"><i class="fa fa-heart"></i></div>
		  				<!--<button class="kd-slider-left"><i class="fa fa-chevron-left"></i></button>
		  				<button class="kd-slider-right"><i class="fa fa-chevron-right"></i></button>
		  				<div class="kd-slider">
			  				<div class="kd-entrys">
			  					<a href="#">
			  						<div class="kd-entry">
		  								<div class="kd-entry-thumbnail">
			  								<img src="http://www.construyehogar.com/wp-content/uploads/2015/06/Dise%C3%B1o-de-casa-moderna-de-dos-plantas.jpg"><button><i class="fa fa-close"></i></button>
			  							</div>
			  							<div class="kd-entry-title">
			  								<b>$120.000</b>
			  								<span>Departamentos totalmente Remodelado</span>
			  							</div>		
			  						</div>
			  					</a>
			  					<a href="#">
			  						<div class="kd-entry">
		  								<div class="kd-entry-thumbnail">
			  								<img src="http://www.construyehogar.com/wp-content/uploads/2015/06/Dise%C3%B1o-de-casa-moderna-de-dos-plantas.jpg"><button><i class="fa fa-close"></i></button>
			  							</div>
			  							<div class="kd-entry-title">
			  								<b>$120.000</b>
			  								<span>Departamentos totalmente Remodelado</span>
			  							</div>		
			  						</div>
			  					</a>
			  					<a href="#">
			  						<div class="kd-entry">
		  								<div class="kd-entry-thumbnail">
			  								<img src="http://www.construyehogar.com/wp-content/uploads/2015/06/Dise%C3%B1o-de-casa-moderna-de-dos-plantas.jpg"><button><i class="fa fa-close"></i></button>
			  							</div>
			  							<div class="kd-entry-title">
			  								<b>$120.000</b>
			  								<span>Departamentos totalmente Remodelado</span>
			  							</div>		
			  						</div>
			  					</a>
			  				</div>
			  			</div>-->
		  				<div class="empty">No tienes ningun articulo favoritos</i></div>
			  		</div>
			  		<div id="kd-forum" class="sidebar"></div>
			  		<div id="kd-background">
			  			<div id="load"></div>
			  		</div>
			  	</div>
			  </div>';
	}else{
		echo '<div id="kd-move">
			  	<div class="header">
			  		<nav>
			  			<ul>
			  				<li class="active" data-id="kd-welcome"><i class="fa fa-home"></i></li>
			  				<li data-id="kd-login">Iniciar Sesion</li>
			  				<li data-id="kd-register">Registrarse</li>
			  			</ul>
			  			<form class="kd-search">
			  				<button><i class="fa fa-search"></i></button>
			  				<label><input type="text" placeholder="Buscar Aqui adentro"></label>
			  			</form>
			  			<button class="pull up"><i class="fa fa-sort-up"></i></button>
			  		</nav>
			  	</div>
			  	<div class="content">
			  		<div id="kd-welcome" class="sidebar active">
			  			<h2>¡Bienvenido(a)!, Esta seccion podras almacenar las casas que quieres comprar en un futuro. Muchas personas estan usando esta plataforma no te quedes.</h2>
			  		</div>
			  		<div id="kd-login" class="sidebar">
		  				<form class="login">
		  					<label><input name="code" type="text" placeholder="Pon tu código generado, porfavor"></label>
			  				<div class="n-button">
			  					<button>Iniciar Sesion</button>
			  					<button class="other" data-id="kd-register">No tengo un código de Sesion</button>
			  				</div>
			  			</form>
		  			</div>
		  			<div id="kd-register" class="sidebar">
		  				<form class="register">
		  					<select name="ask">
		  						<option value="1">¿Como se llama tu profesor favorito?</option>
		  						<option value="2">¿Como se llama tu primera mascota?</option>
		  						<option value="3">¿Como se llama tu esposo/a?</option>
		  						<option value="4">¿Como se llama tu hermano/a?</option>
		  					</select>
		  					<label class="email"><input type="text" name="email" placeholder="Escribe tu email"></label>
		  					<label><input type="text" name="rpta" placeholder="Escribe tu respuesta"></label>
		  					<div class="n-button">
			  					<button>Generar código de Sesion</button>
			  					<button class="other" data-id="kd-login">Ya tengo un código de Sesion</button>
			  				</div>
			  			</form>
		  			</div>
			  		<div id="kd-background">
			  			<div id="load"></div>
			  		</div>
			  	</div>
			  </div>';
	}		  
}
?>
