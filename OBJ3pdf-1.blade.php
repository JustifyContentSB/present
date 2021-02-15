<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/obj3/style.min.css">
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

.img {
  padding: 0 100px;
}

.img__td {
  width: 100%;
  height: 967px;
  background: url("../../images/obj1.jpg");
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
  background: url("../../images/plan.jpg");
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
					<table class="img img--pent" cellpadding="0" cellspacing="0" width="1900" align="center">
						<tbody>
							<tr>
								<td class="img__pent-one"></td>
							</tr>
							<tr>
								<td class="img__pent-space"></td>
							</tr>
							<tr>
								<td class="img__pent-two"></td>
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