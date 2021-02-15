<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/jk2/style.min.css">
	<title>Объект 1</title>
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

.about {
  padding: 105px 120px 100px;
}

.about__title {
  font-weight: bold;
  font-size: 59px;
  line-height: 72px;
  letter-spacing: 0.1rem;
}

.about__address {
  padding-top: 43px;
  font-weight: 500;
  font-size: 33px;
  line-height: 40px;
  letter-spacing: 0.1rem;
}

.about__qr {
  width: 193px;
  padding-top: 30px;
}

.about__right {
  padding-left: 80px;
}

.about__right .about__address {
  padding-top: 10px;
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
  height: 800px;
  background: url("/pdf/images/obj-map.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center right;
}

.img__jk-one {
  width: 100%;
  height: 800px;
  background: url("/pdf/images/jk2.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top center;
}

.img__jk-two {
  width: 100%;
  height: 967px;
  background: url("/pdf/images/jk3.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: bottom center;
}

.img__jk-space {
  width: 100%;
  height: 70px;
}

.type {
  padding: 50px 120px 66px;
  font-weight: 350;
  font-size: 21px;
  line-height: 27px;
  letter-spacing: 0.1rem;
}

.type__title {
  width: 200px;
  padding: 9px 27px;
  margin-right: 30px;
  border: 1px solid #E6E6E6;
}

.type__space {
  width: 30px;
}

.info {
  padding-bottom: 200px;
}

.info--barkli {
  padding-bottom: 0;
  padding-left: 36px;
}

.info__td {
  width: 50%;
}

.info__left {
  padding: 0 100px;
  font-weight: 400;
  font-size: 25px;
  line-height: 52px;
  letter-spacing: 0.1rem;
}

.info__left-title {
  font-weight: 300;
}

.info__left td {
  width: 375px;
}

.text {
  padding: 100px;
  font-weight: 300;
  font-size: 30px;
  line-height: 50px;
  text-align: justify;
  letter-spacing: 0.1rem;
}

.text--barkli {
  padding-bottom: 412px;
  padding-left: 136px;
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
					<table class="text">
						<tr>
							<td>Sed ornare risus sit amet neque convallis, non elementum odio venenatis. Donec felis elit, sodales et viverra nec, efficitur ac orci. In suscipit justo ac sapien dapibus, vitae iaculis purus accumsan. Sed nec purus mi. Ut elit metus, iaculis id accumsan ac, blandit at tortor. Suspendisse potenti. Nulla vel diam ac turpis egestas malesuada sed a erat. mi. Ut elit metus, iaculis id accumsan ac, blandit at tortor. Suspendisse potenti. Nulla vel diam ac turpis egestas malesuada sed a erat.</td>
						</tr>
					</table>
					<table class="img" cellpadding="0" cellspacing="0" width="1900" align="center">
						<tbody>
							<tr>
								<td class="img__jk-one"></td>
							</tr>
							<tr>
								<td class="img__jk-space"></td>
							</tr>
							<tr>
								<td class="img__jk-two"></td>
							</tr>
							<tr>
								<td class="img__jk-space"></td>
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