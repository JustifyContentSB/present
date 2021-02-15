<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/jk3/style.min.css">
	<title>Объект 3</title>
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

.penthouse {
  padding: 100px;
  padding-bottom: 500px;
}

.penthouse__title {
	padding-bottom: 100px;
}

.penthouse__title h1 {
  text-transform: uppercase;
  font-weight: 700;
  font-size: 54px;
  line-height: 60px;
  letter-spacing: 0.1rem;
}

.penthouse__img {
  min-width: 840px;
}

.penthouse__space {
	width: 50px;
	height: 50px;
}

.penthouse__info {
	width: 1000px;
  padding: 45px 60px 45px 60px;
  border: 1px solid #B5B5B5;
}

.penthouse__info-title {
  font-weight: 500;
  font-size: 31px;
  line-height: 40px;
  letter-spacing: 0.1rem;
}

.penthouse__info-type {
  padding-top: 14px;
  font-weight: 500;
  font-size: 23px;
  line-height: 31px;
  letter-spacing: 0.1rem;
}

.penthouse__info-type span {
  color: #8D8D8D;
  font-weight: 400;
}

.penthouse__info-text {
  padding-top: 39px;
  font-weight: 350;
  font-size: 22px;
  line-height: 29px;
  text-align: justify;
  letter-spacing: 0.1rem;
}

.penthouse__info-metre {
  padding-top: 33px;
  font-weight: 350;
  font-size: 23.89px;
  line-height: 31px;
  letter-spacing: 0.1rem;
}

.penthouse__info-price {
  padding: 13px 0 18px;
  font-weight: 700;
  font-size: 50px;
  line-height: 61px;
  letter-spacing: 0.1rem;
}

.penthouse__info-size {
  font-weight: 350;
  font-size: 25px;
  line-height: 23px;
  letter-spacing: 0.1rem;
  color: #8D8D8D;
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

					<table class="penthouse" cellpadding="0" cellspacing="0" width="1900" align="center">
						<tbody>
							<tr>
								<td class="penthouse__title"><h1>ПЕНТХАУСЫ В ЭТОМ ЖК</h1></td>
							</tr>
							<tr>
								<td>
									<table class="penthouse__item" cellpadding="0" cellspacing="0" width="1900" align="center">
									<tbody>
										<tr>
											<td class="penthouse__img"><img src="/pdf/images/jk4.jpg" alt="жк"></td>
											<td class="penthouse__info">
												<table cellpadding="0" cellspacing="0" width="780" align="center">
													<tbody>
														<tr><td class="penthouse__info-title">Двухуровневый пентхаус с открытой террасой в ЖК White</td></tr>
														<tr><td class="penthouse__info-type">2 <span>спальни</span> <span>Отделка</span> Whitebox</td></tr>
														<tr><td class="penthouse__info-text">Пентхаус на последнем этаже известного дома купца Филатова — элитный жилой дом, известный москвичам как «Дом с рюмкой», находится в начале улицы Остоженка.
														В квартире высокие потолки — 3,4 метра, удобная планировка: светлая гостиная с тремя окнами и видом на Кремль.</td></tr>
														<tr><td class="penthouse__info-metre">655 м<sup>2</sup> + терраса 30 м<sup>2</sup></td></tr>
														<tr><td class="penthouse__info-price">122 000 000 &#8381;</td></tr>
														<tr><td class="penthouse__info-size">328 000 р./м<sup>2</sup></td></tr>
													</tbody>      
												</table>
											</td>
										</tr>
										<tr><td class="penthouse__space"></td></tr>
										<tr>
											<td class="penthouse__img"><img src="/pdf/images/jk5.jpg" alt="жк"></td>
											<td class="penthouse__info">
												<table cellpadding="0" cellspacing="0" width="780" align="center">
													<tbody>
														<tr><td class="penthouse__info-title">Двухуровневый пентхаус с открытой террасой в ЖК White</td></tr>
														<tr><td class="penthouse__info-type">2 <span>спальни</span> <span>Отделка</span> Whitebox</td></tr>
														<tr><td class="penthouse__info-text">Пентхаус на последнем этаже известного дома купца Филатова — элитный жилой дом, известный москвичам как «Дом с рюмкой», находится в начале улицы Остоженка.
														В квартире высокие потолки — 3,4 метра, удобная планировка: светлая гостиная с тремя окнами и видом на Кремль.</td></tr>
														<tr><td class="penthouse__info-metre">655 м<sup>2</sup> + терраса 30 м<sup>2</sup></td></tr>
														<tr><td class="penthouse__info-price">122 000 000 &#8381;</td></tr>
														<tr><td class="penthouse__info-size">328 000 р./м<sup>2</sup></td></tr>
													</tbody>      
												</table>
											</td>
										</tr>
										<tr><td class="penthouse__space"></td></tr>
										<tr>
											<td class="penthouse__img"><img src="/pdf/images/jk6.jpg" alt="жк"></td>
											<td class="penthouse__info">
												<table cellpadding="0" cellspacing="0" width="780" align="center">
													<tbody>
														<tr><td class="penthouse__info-title">Двухуровневый пентхаус с открытой террасой в ЖК White</td></tr>
														<tr><td class="penthouse__info-type">2 <span>спальни</span> <span>Отделка</span> Whitebox</td></tr>
														<tr><td class="penthouse__info-text">Пентхаус на последнем этаже известного дома купца Филатова — элитный жилой дом, известный москвичам как «Дом с рюмкой», находится в начале улицы Остоженка.
														В квартире высокие потолки — 3,4 метра, удобная планировка: светлая гостиная с тремя окнами и видом на Кремль.</td></tr>
														<tr><td class="penthouse__info-metre">655 м<sup>2</sup> + терраса 30 м<sup>2</sup></td></tr>
														<tr><td class="penthouse__info-price">122 000 000 &#8381;</td></tr>
														<tr><td class="penthouse__info-size">328 000 р./м<sup>2</sup></td></tr>
													</tbody>      
												</table>
											</td>
										</tr>
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