<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/obj5/style.min.css">
	<title>Объект 5</title>
	<style>
		*::before {-webkit-box-sizing:inherit;box-sizing:inherit}
		*::after {-webkit-box-sizing:inherit;box-sizing:inherit}
		.cover__top::after {content:"";position:absolute;left:0;right:0;bottom:0;height:1px;background:#fff}
		@font-face {
		  font-family: 'Stem';
		  src: url("fonts/stem/Stem-Light.eot?#iefix") format("embedded-opentype"), url("fonts/stem/Stem-Light.woff2") format("woff2"), url("fonts/stem/Stem-Light.woff") format("woff"), url("fonts/stem/Stem-Light.ttf") format("truetype"), url("fonts/stem/Stem-Light.svg") format("svg");
		  font-weight: 300;
		  font-style: normal;
		  font-display: swap;
		}

		@font-face {
		  font-family: 'Stem';
		  src: url("fonts/stem/Stem-SemiLight.eot?#iefix") format("embedded-opentype"), url("fonts/stem/Stem-SemiLight.woff2") format("woff2"), url("fonts/stem/Stem-SemiLight.woff") format("woff"), url("fonts/stem/Stem-SemiLight.ttf") format("truetype"), url("fonts/stem/Stem-SemiLight.svg") format("svg");
		  font-weight: 350;
		  font-style: normal;
		  font-display: swap;
		}

		@font-face {
		  font-family: 'Stem';
		  src: url("fonts/stem/Stem-Regular.eot?#iefix") format("embedded-opentype"), url("fonts/stem/Stem-Regular.woff2") format("woff2"), url("fonts/stem/Stem-Regular.woff") format("woff"), url("fonts/stem/Stem-Regular.ttf") format("truetype"), url("fonts/stem/Stem-Regular.svg") format("svg");
		  font-weight: 400;
		  font-style: normal;
		  font-display: swap;
		}

		@font-face {
		  font-family: 'Stem';
		  src: url("fonts/stem/Stem-Medium.eot?#iefix") format("embedded-opentype"), url("fonts/stem/Stem-Medium.woff2") format("woff2"), url("fonts/stem/Stem-Medium.woff") format("woff"), url("fonts/stem/Stem-Medium.ttf") format("truetype"), url("fonts/stem/Stem-Medium.svg") format("svg");
		  font-weight: 500;
		  font-style: normal;
		  font-display: swap;
		}

		@font-face {
		  font-family: 'Stem';
		  src: url("fonts/stem/Stem-Bold.eot?#iefix") format("embedded-opentype"), url("fonts/stem/Stem-Bold.woff2") format("woff2"), url("fonts/stem/Stem-Bold.woff") format("woff"), url("fonts/stem/Stem-Bold.ttf") format("truetype"), url("fonts/stem/Stem-Bold.svg") format("svg");
		  font-weight: 700;
		  font-style: normal;
		  font-display: swap;
		}

		img {
		  display: block;
		  max-width: 100%;
		  height: auto;
		}
		body {
		  font-family: 'Stem', sans-serif;
		  margin: 0;
		  letter-spacing: 0.1rem;
		}

		a {
			text-decoration: none;
			color: inherit;
		}		

		.header {
  width: 100%;
  padding: 50px 100px;
  border-bottom: 1px solid #DFDFDF;
}

.header__logo {
  width: 50%;
}

.header__logo-pent {
  font-weight: 700;
  font-size: 62px;
  line-height: 80px;
}

.header__logo-moscow {
  margin-left: 10px;
  font-weight: 350;
  font-size: 49px;
  line-height: 64px;
  color: #AFAFAF;
}

.header__tel {
  width: 50%;
  font-weight: 300;
  font-size: 42px;
  line-height: 54px;
}

.title {
  padding: 80px 100px;
}

.title h1 {
  font-weight: 500;
  font-size: 43px;
  line-height: 40px;
  letter-spacing: 0.1rem;
}

.img {
  padding: 0 100px;
}

.img__td {
  width: 100%;
  height: 967px;
  background: url("/pdf/images/obj1.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.img--plan {
  padding-bottom: 400px;
}

.img__plan {
  width: 100%;
  height: 1362px;
  background: url("/pdf/images/plan.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.img--pent {
  padding-top: 118px;
  padding-bottom: 242px;
}

.img__pent-one {
  width: 100%;
  height: 967px;
  margin-bottom: 70px;
  background: url("/pdf/images/obj2.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.img__pent-two {
  width: 100%;
  height: 967px;
  background: url("/pdf/images/obj3.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.img__pent-space {
  width: 100%;
  height: 70px;
}

.img__barkli {
  width: 100%;
  height: 967px;
  background: url("/pdf/images/obj4.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center right;
}

.img__map {
  width: 100%;
  height: 967px;
  background: url("/pdf/images/obj-map.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center right;
}

.man {
  padding: 200px 100px;
}

.man__img {
  width: 524px;
  height: 765px;
}

.man__info {
  padding-left: 110px;
}

.man__name {
  text-transform: uppercase;
  font-weight: 700;
  font-size: 40px;
  line-height: 52px;
  letter-spacing: 0.1rem;
}

.man__name-two {
  font-size: 30px;
  line-height: 50px;
  letter-spacing: 0.1rem;
}

.man__text {
  padding-top: 30px;
  font-weight: 300;
  font-size: 30px;
  line-height: 50px;
  letter-spacing: 0.1rem;
}

.man__text--thanks {
  font-weight: 500;
}

.man .man__tel {
  padding-top: 70px;
  font-weight: 300;
  font-size: 54px;
  line-height: 70px;
  text-transform: uppercase;
}

.man__about {
  padding-top: 16px;
  font-weight: 350;
  font-size: 22px;
  line-height: 34px;
  letter-spacing: 0.1rem;
}

.man__about a {
  text-decoration: underline;
  font-weight: 700;
}

.footer {
  padding: 60px 100px;
  border-top: 1px solid #DFDFDF;
}

.footer__slogan {
  width: 50%;
  font-weight: 300;
  font-size: 31px;
  line-height: 40px;
  text-transform: uppercase;
  color: #7E7E7E;
}

.footer__logo {
  width: 50%;
}
	

	</style>
</head>
<body> 
	
	<table class="wrapper" cellpadding="0" cellspacing="0" width="1900" align="center">
		<tbody>
			<tr>
				<td>
					<table class="header" cellpadding="0" cellspacing="0" width="1900" align="center">
						<tbody>
							<tr>
								<td class="header__logo"  align="left" cellpadding="0" cellspacing="0"><span class="header__logo-pent">PENTHOUSE</span> <span class="header__logo-moscow">.moscow</span></td>
								<td class="header__tel" cellpadding="0" cellspacing="0" align="right">+7 495 120-11-00</td>
							</tr>
						</tbody>
					</table>
					<table class="title">
						<tbody>
							<tr><td><h1>Москва, ул. Новый Арбат, 46</h1></td></tr>
						</tbody>
					</table>
					<table class="img" cellpadding="0" cellspacing="0" width="1900" align="center">
						<tbody>
							<tr>
								<td class="img__map"></td>
							</tr>
						</tbody>
					</table>
					<table class="man" cellpadding="0" cellspacing="0" width="1900" align="center">
						<tbody>
							<tr>
								<td class="man__img"><img src="/pdf/images/man.jpg" alt="Григорий Ашихмин" width="524" height="765"></td>
								<td class="man__info">
									<table>
										<tbody>
											<tr><td class="man__name">АШИХМИН</td></tr>
											<tr><td class="man__name-two">Григорий</td></tr>
											<tr><td class="man__text">Если у вас возникли вопросы по любым объектам,
											представленным на нашем сайте, предлагаем оставить
											заявку, чтобы менеджеры компании могли оперативно
											вам перезвонить и дать наиболее полную информацию
											по всем интересующим вас объектам.
											</td></tr>
											<tr><td class="man__text man__text--thanks">Спасибо за обращение в нашу компанию!</td></tr>
											<tr><td class="man__tel"><a href="tel:+74951201100">+7 495 120 11 00</a></td></tr>
											<tr><td class="man__about">E-mail: <a href="mailto:ga@aandp.ru">ga@aandp.ru</a></td></tr>
											<tr><td class="man__about">Элитная недвижимость: <a href="aandp.ru">aandp.ru</a></td></tr>
											<tr><td class="man__about">Пентхаусы Москвы: <a href="penthouse.moscow">penthouse.moscow</a></td></tr>
										</tbody>
									</table>
								</td>		
							</tr>
						</tbody>
					</table>
					<table class="footer" cellpadding="0" cellspacing="0" width="1900" align="center">
						<tbody>
							<tr>
								<td class="footer__slogan" cellpadding="0" cellspacing="0" align="left">Быть особенным - быть собой.</td>
								<td class="footer__logo" cellpadding="0" cellspacing="0" align="right"><img src="/pdf/images/logo.svg" width="444"></td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>		
	</table>

</body>
</html>