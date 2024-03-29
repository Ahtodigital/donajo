<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Pizzaria nos Ingleses - Dom Luiggi a melhor Pizzaria nos Ingleses! Pizzaria Delivery.</title>
	<link rel="canonical" href="https://www.pizzariadomluiggi.com">
	<link rel="stylesheet" type="text/css" href="ahto.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
	crossorigin="anonymous"></script>
	<script src="js/ahto.js"></script>
</head>
<body>

	<img src="img/arrow-down.svg" class="hide l-show arrow-left move">
	<img src="img/arrow-up.svg" class="hide l-show arrow-right move">

	<header id="mainHeader">
		<nav id="mainMenu" style="display: none;">
			<ul>
				<li class="active">
					<a href="index">
						Home
					</a>
				</li>
				<li>
					<a href="cardapio">
						Cardápio
					</a>
				</li>
				<li>
					<a href="promocoes">
						Promoções
					</a>
				</li>
				<li>
					<a href="entrega">
						Entrega
					</a>
				</li>
				<li>
					<a href="contato">
						Contato
					</a>
				</li>
			</ul>
		</nav>
		<div class="logo">
			<a href="index">
				<h3>Dom Luiggi</h3>
			</a>
		</div>
		<div class="nothing"></div>
		<div class="menu">
			<button id="menuButton" class="menu btn-i corner-b fixed-b" onclick="$('#mainMenu').toggle();">
				<i class="material-icons">
					menu
				</i>
			</button>
		</div>
	</header>

	<a href="http://deliveryapp.neemo.com.br/delivery/588/menu" target="_black">
		<div class="btn bg-brand1 move fixed-c corner-c">Pedir online</div>
	</a>

	<section class="fullscreen bg-pizza">
		<div class="grid" style="background-color: rgba(0,0,0,0.5); align-content: center;">
			<div class="wrap magic-padding-x center-y">
				<div class="um">
					<h1 style="color: #fff;">Pizzaria Dom Luiggi. A Melhor Pizzaria nos Ingleses!</h1>
					<p class="txt-white">Entrega ~ 45min</p>
					<a href="cardapio">
						<button class="btn corner-a">
							Ver Cardápio
						</button>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section id="promo" class="bg-brand1 round-c">
		<div class="grid">
			<div class="wrap magic-padding-x magic-padding-y">
				<div class="um txt-white">
					<h1>Peça uma pizza<br>e concorra a outra!
					</h1>
					<p>
						Todos os dias, ao pedir uma pizza,<br>você pode ganhar outra na hora!<br>
					</p>
					<div>
						<button class="btn corner-a">
							Pedir Online
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section style="background-color: #F5F1ED; padding: 3rem 0;">
		<div id="cardapio" class="cardapio_wrap" style="margin-bottom: 1.5rem;">
		<ul id="pizzas-tradicionais">
			<li class="cardapio-item">
				<div class="item-info">
					<h4 class="item-title">Mignon com Rúcula</h4>
					<p class="item-description">Lorem ipsum dolor sit amet, consectetur.</p>
					<p class="item-price">Grande R$ 50</p>
				</div>
				<img src="img/sertaneja.jpg" class="item-img">
			</li>

			<li class="cardapio-item">
				<div class="item-info">
					<h4 class="item-title">Frango com Catupiry</h4>
					<p class="item-description">Lorem ipsum dolor sit amet, consectetur.</p>
					<p class="item-price">Grande R$ 50</p>
				</div>
				<img src="img/cordoba.jpg" class="item-img">
			</li>

			<li class="cardapio-item">
				<div class="item-info">
					<h4 class="item-title">Frango com Catupiry</h4>
					<p class="item-description">Lorem ipsum dolor sit amet, consectetur.</p>
					<p class="item-price">Grande R$ 50</p>
				</div>
				<img src="img/mignon-catupiry.jpg" class="item-img">
			</li>
		</ul>
	</div>
	<div class="wrap magic-padding-x">
		<a href="cardapio">
			<button class="btn corner-a bg-brand1">
				Ver Cardápio Completo
			</button>
		</a>
	</div>
</section>

<section id="contato" class="grid bg-brand1 round-a txt-white">
	<div class="wrap magic-padding-x magic-padding-y">
		<div class="um">
			<p>
				Peça agora
			</p>
			<h1>
				3282-0048<br>
				98470-7656 <span>Oi</span><br>
				99645-2581 <span>Tim</span>
			</h1>
			<p>
				Aberto Das 18h às 23h30
				*fechado nas Terças-feiras
			</p>
		</div>
	</div>
</section>

<footer class="grid um">
</footer>

</body>
</html>
