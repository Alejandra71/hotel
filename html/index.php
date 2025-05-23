<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="images/logo.png">
	<link rel="stylesheet" href="fonts/stylesheet.css">
	<link rel="stylesheet" href="css/swiper-bundle.min.css">
	<link rel="stylesheet" href="css/magnific-popup.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Construction</title>
</head>

<body>

	<div class="modal-form mfp-hide mfp-with-anim" id="modal-form">

		<!-- Modal de Login -->
	
	<!-- Modal de Login -->
<div class="modal-form mfp-hide mfp-with-anim" id="modal-login">
	<div class="modal-form-head" style="display: flex; align-items: center; justify-content: space-between; position: relative; padding: 10px 20px;">
	  
	  <!-- Logo a la izquierda -->
	  <div class="modal-form-logo">
		<img src="images/logo.png" alt="Construction" width="60" height="60">
	  </div>
  
	  <!-- Título Login centrado -->
	  <div style="position: absolute; left: 50%; transform: translateX(-50%); font-size: 32px; font-weight: bold;">
		Ingresar
	  </div>
	</div>
  
	<div class="modal-form-body">
	<form action="auth.php" method="POST">
      <input type="email" name="email" placeholder="Correo*" required>
      <input type="password" name="password" placeholder="Contraseña*" required>
      <button class="form-button" type="submit" name="login">Ingresar</button>
      <p style="text-align:center; margin-top: 10px;">
        No tienes cuenta?
        <a href="#modal-register" data-effect="mfp-zoom-in" style="color: #2908e4;">Registrar</a>
      </p>
    </form>
	</div>
  </div>
  
	<!-- Modal de Registro -->
<div class="modal-form mfp-hide mfp-with-anim" id="modal-register">
	<div class="modal-form-head" style="display: flex; align-items: center; justify-content: space-between; position: relative; padding: 10px 20px;">
	  
	  <!-- Logo a la izquierda -->
	  <div class="modal-form-logo">
		<img src="images/logo.png" alt="Construction" width="60" height="60">
	  </div>
  
	  <!-- Título Register centrado -->
	  <div style="position: absolute; left: 50%; transform: translateX(-50%); font-size: 32px; font-weight: bold;">
		Registrar
	  </div>
  
	</div>
  
	<div class="modal-form-body">
	<form action="auth.php" method="POST">
      <input type="text" name="nombre" placeholder="Nombre*" required>
      <input type="email" name="email" placeholder="Correo*" required>
      <input type="password" name="password" placeholder="Contraseña*" required>
      <input type="password" name="confirmar" placeholder="Confirmar contraseña*" required>
      <button class="form-button" type="submit" name="register">Registrar</button>
      <p style="text-align:center; margin-top: 10px;">
        Ya tienes cuenta?
        <a href="#modal-login" data-effect="mfp-zoom-in" style="color: #2908e4;">Ingresar</a>
      </p>
    </form>
	</div>
  </div>
  
	


		<div class="modal-form-head">
			<div class="modal-form-logo">
				<img src="images/logo.png" alt="Construction">
			</div>
			<div class="modal-form-close">
				<img src="images/close.svg" alt="Close">
			</div>
		</div>

		<div class="modal-form-body">
			<div class="modal-form-title">Request a call</div>
			<form>
				<input type="text" placeholder="Your name*" required>
				<input type="text" placeholder="Your phone*" required>
				<button class="form-button">Enviar</button>
			</form>
		</div>

	</div>

	<div class="go-up">
		<a href="#">
			<img src="images/arrow-up.svg" alt="Go up">
		</a>
	</div>
	
	<header class="site-header">

		<div class="header-top">
			<div class="container">
				<div class="header-row">

					<!-- Header top mobile START -->
					<div class="header-mobile-logo">
						<a href="#">
							<img src="images/logo.png" alt="Construction">
						</a>
					</div>

					<div class="hamburger">
						<span></span>
						<span></span>
					</div>
					<!-- Header top mobile END -->

					<div class="header-desc">The Ocean view resort</div>
					<div class="header-right">
						<div class="header-info">
							<img src="images/location.svg" alt="ул. Гагарина 5Б г. Сочи">
							<span>Greenbe street 5B, Latvia</span>
						</div>
						<a href="tel:79504575654" class="header-info">
							<img src="images/phone.svg" alt="+7 950 457 5654">
							<span>+7 950 457 5654</span>
						</a>

						<div class="header-social">
							<a href="#">
								<img src="images/social-twitter.svg" alt="Twitter">
							</a>
							<a href="#">
								<img src="images/social-vk.svg" alt="Вконтакте">
							</a>
							<a href="#">
								<img src="images/social-facebook.svg" alt="Facebook">
							</a>
							<a href="#">
								<img src="images/social-telegram.svg" alt="Telegram">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="header-bottom">
			<div class="container">
				<div class="header-bottom-row">
					<div class="header-logo">
						<a href="#">
							<img src="images/logo.png" alt="Construction">
						</a>
					</div>

					<nav class="header-nav">
						<ul>
							<li><a class="anchor-link" href="#s-about">Acerca de nosotros</a></li>
							<li><a class="anchor-link" href="#s-services">Nuestros servicios</a></li>
							<li><a class="anchor-link" href="#s-gallery">Galeria</a></li>
							<li><a class="anchor-link" href="#s-testimonials">Nuestros hoteles</a></li>
							<li><a href="#modal-login" class="anchor-link" data-effect="mfp-zoom-in">Ingresar</a></li>
							<li><a href="#modal-register" class="anchor-link" data-effect="mfp-zoom-in">Registrar</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>


		<!-- Header mobile START -->
		<div class="header-mobile-wrap">
			<nav class="header-mobile-nav">
				<ul>
					<li><a class="anchor-link" href="#s-about">Acerca de nosotros</a></li>
					<li><a class="anchor-link" href="#s-services">Nuestros servicios</a></li>
					<li><a class="anchor-link" href="#s-gallery">Galeria</a></li>
					<li><a class="anchor-link" href="#s-testimonials">Nuestros hoteles</a></li>
					<li><a href="#modal-login" class="anchor-link" data-effect="mfp-zoom-in">Ingresar</a></li>
					<li><a href="#modal-register" class="anchor-link" data-effect="mfp-zoom-in">Registrar</a></li>
				</ul>
			</nav>

			<div class="header-mobile-info">
				<img src="images/location.svg" alt="ул. Гагарина 5Б г. Сочи">
				<span>Greenbe street 5B, Latvia</span>
			</div>
			<a href="tel:79504575654" class="header-mobile-info">
				<img src="images/phone.svg" alt="+7 950 457 5654">
				<span>+7 950 457 5654</span>
			</a>

			<div class="header-mobile-social">
				<a href="#">
					<img src="images/social-twitter.svg" alt="Twitter">
				</a>
				<a href="#">
					<img src="images/social-vk.svg" alt="Вконтакте">
				</a>
				<a href="#">
					<img src="images/social-facebook.svg" alt="Facebook">
				</a>
				<a href="#">
					<img src="images/social-telegram.svg" alt="Telegram">
				</a>
			</div>
		</div>
		<!-- Header mobile END -->

	</header>


	<section class="s-banner">
		
		<div class="swiper banner-swiper">
			
			<div class="swiper-wrapper">
				<div class="swiper-slide" style="background-image: url(images/banner-bg-1.jpg)">
					<div class="banner-content">
						<div class="banner-subtitle wow fadeIn" data-wow-delay="0.1s">The Ocean View Resort</div>
						<h2 class="banner-title wow fadeIn" data-wow-delay="0.2s"><strong>Estilo turístico/escapada</strong> "El lugar perfecto para tu próxima aventura"</h2>
						<a href="#modal-login" class="banner-btn def-btn anchor-link wow fadeIn" data-wow-delay="0.3s">Hacer Reservar</a>
					</div>
				</div>
				<div class="swiper-slide" style="background-image: url(images/banner-bg-2.jpg)">
					<div class="banner-content">
						<div class="banner-subtitle wow fadeIn">The Ocean View Resort</div>
						<h2 class="banner-title"><strong>Estilo acogedor/familiar</strong> "Cada detalle pensado para tu descanso"</h2>
						<a href="#modal-login" class="banner-btn def-btn anchor-link">Hacer Reservar</a>
					</div>
				</div>
				<div class="swiper-slide" style="background-image: url(images/banner-bg-3.jpg)">
					<div class="banner-content">
						<div class="banner-subtitle">The Ocean View Resort</div>
						<h2 class="banner-title"><strong>Estilo elegante/lujoso</strong> "Una experiencia cinco estrellas te espera"</h2>
						<a href="#modal-login" class="banner-btn def-btn anchor-link">Hacer Reservar</a>
					</div>
				</div>
			</div>

			<div class="swiper-pagination wow fadeInUp" data-wow-delay="0.5s"></div>
			
			<div class="container">
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		
		</div>

	</section>

	<section class="s-about" id="s-about">
		<div class="container">

			<div class="about-row">
				<div class="about-left">
					<h2 class="def-title wow fadeInLeft" data-wow-delay="0.2s">Acerca de nosotros</h2>
					<div class="def-desc wow fadeInLeft" data-wow-delay="0.3s">
						<strong>The ocean view resort</strong> En nuestro hotel, nos esforzamos por ofrecer no solo una excelente experiencia de alojamiento, sino también un servicio eficiente y confiable desde el primer contacto. Por eso, hemos desarrollado un Módulo de Reservas de Habitaciones, pensado especialmente para mejorar la gestión interna y brindar mayor comodidad a nuestros huéspedes.
					</div>
				</div>
	
				<div class="about-right">
					<img src="images/about-bg.jpg" alt="О нас" class="wow fadeIn" data-wow-delay="0.5s">
				</div>
			</div>

		</div>
	</section>


	<section class="s-numbers">
		<div class="container">
			<div class="numbers-row num-scroll">

				<div class="numbers-left">
					<h2 class="def-title color-white wow fadeInLeft" data-wow-delay="0.2s">Nuestros servicios <br> en numeros</h2>
					<div class="def-desc wow fadeInLeft" data-wow-delay="0.3s">
						Desde la implementación del Módulo de Reservas de Habitaciones, hemos optimizado significativamente nuestros procesos internos y mejorado la experiencia de nuestros huéspedes. Algunos de los beneficios más destacados en cifras:
					</div>
				</div>

				<div class="numbers-right">
					<div class="numbers-item">
						<div class="numbers-num num-js" data-count="100%">0</div>
						<div class="numbers-desc">
							Disponibilidad de habitaciones <br>
							en tiempo real.
						</div>
					</div>
					<div class="numbers-item">
						<div class="numbers-num num-js" data-count="80%">0</div>
						<div class="numbers-desc">
							Reducción en el tiempo dedicado a la gestión manual de reservas.
						</div>
					</div>
					<div class="numbers-item">
						<div class="numbers-num num-js" data-count="0">0</div>
						<div class="numbers-desc">
							Dobles reservas,<br>
							gracias a la validación automática<br>
							al momento de registrar nuevas solicitudes.
						</div>
					</div>
					<div class="numbers-item">
						<div class="numbers-num num-js" data-count="100">0</div>
						<div class="numbers-desc">
							Mayor eficiencia operativa, <br>
							permitiendo al personal centrarse <br>
							en la atención al cliente.
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="s-services" id="s-services">
		<div class="container">
			<h2 class="center-title wow fadeIn" data-wow-delay="0.1s">Nuestros servicios</h2>

			<div class="services-row">

				<div class="services-item wow fadeIn" data-wow-delay="0.1s">
					<div class="services-thumb">
						<img src="images/service-1.jpg" alt="Construction of houses">
					</div>
					<div class="services-body">
						<h4 class="services-title">Reserva Rápida y Segura</h4>
						<div class="services-desc">
							Con nuestra plataforma de reservas en línea, puedes verificar la disponibilidad de habitaciones en tiempo real, hacer tu reserva de manera sencilla y segura desde cualquier lugar y en cualquier momento. Gracias a nuestro sistema, nunca más tendrás que preocuparte por dobles reservas.
						</div>
					</div>
				</div>

				<div class="services-item wow fadeIn" data-wow-delay="0.2s">
					<div class="services-thumb">
						<img src="images/service-2.jpg" alt="Ремонт по дому">
					</div>
					<div class="services-body">
						<h4 class="services-title">Gestión Personalizada de Habitaciones</h4>
						<div class="services-desc">
							Desde habitaciones estándar hasta suites de lujo, ofrecemos una variedad de opciones para satisfacer las necesidades de cada huésped. Nuestro sistema permite al personal del hotel gestionar las habitaciones de forma eficiente, asegurando que siempre estén listas para tu llegada.
						</div>
					</div>
				</div>

				<div class="services-item wow fadeIn" data-wow-delay="0.3s">
					<div class="services-thumb">
						<img src="images/service-3.jpg" alt="Building design">
					</div>
					<div class="services-body">
						<h4 class="services-title">Check-In y Check-Out Eficiente</h4>
						<div class="services-desc">
							Nuestro sistema digitalizado acelera el proceso de registro y salida, garantizando una experiencia ágil y sin esperas. Ya no tendrás que hacer largas filas; tu entrada y salida del hotel será rápida y sencilla.
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="s-gallery" id="s-gallery">
		<div class="container">
			<h2 class="center-title wow fadeIn" data-wow-delay="0.1s">Galeria</h2>

			<div class="gallery-wrap">
				<a href="images/gallery-1.jpg" class="gallery-item wow fadeIn" data-effect="mfp-zoom-in" data-wow-delay="0.2s">
					<span class="gallery-border"></span>
					<img src="images/gallery-1.jpg" alt="Image 1">
				</a>
				<a href="images/gallery-2.jpg" class="gallery-item wow fadeIn" data-effect="mfp-zoom-in" data-wow-delay="0.3s">
					<span class="gallery-border"></span>
					<img src="images/gallery-2.jpg" alt="Image 2">
				</a>
				<a href="images/gallery-3.jpg" class="gallery-item wow fadeIn" data-effect="mfp-zoom-in" data-wow-delay="0.4s"> 
					<span class="gallery-border"></span>
					<img src="images/gallery-3.jpg" alt="Image 3">
				</a>
				<a href="images/gallery-4.jpg" class="gallery-item wow fadeIn" data-effect="mfp-zoom-in" data-wow-delay="0.5s">
					<span class="gallery-border"></span>
					<img src="images/gallery-4.jpg" alt="Image 4">
				</a>
				<a href="images/gallery-5.jpg" class="gallery-item wow fadeIn" data-effect="mfp-zoom-in" data-wow-delay="0.6s">
					<span class="gallery-border"></span>
					<img src="images/gallery-5.jpg" alt="Image 5">
				</a>
				<a href="images/gallery-6.jpg" class="gallery-item wow fadeIn" data-effect="mfp-zoom-in" data-wow-delay="0.7s">
					<span class="gallery-border"></span>
					<img src="images/gallery-6.jpg" alt="Image 6">
				</a>

				<a href="images/gallery-7.jpg" class="gallery-item" data-effect="mfp-zoom-in">
					<span class="gallery-border"></span>
					<img src="images/gallery-7.jpg" alt="Image 7">
				</a>
				<a href="images/gallery-8.jpg" class="gallery-item" data-effect="mfp-zoom-in">
					<span class="gallery-border"></span>
					<img src="images/gallery-8.jpg" alt="Image 8">
				</a>
				<a href="images/gallery-9.jpg" class="gallery-item" data-effect="mfp-zoom-in"> 
					<span class="gallery-border"></span>
					<img src="images/gallery-9.jpg" alt="Image 9">
				</a>
				<a href="images/gallery-10.jpg" class="gallery-item" data-effect="mfp-zoom-in">
					<span class="gallery-border"></span>
					<img src="images/gallery-10.jpg" alt="Image 10">
				</a>
				<a href="images/gallery-11.jpg" class="gallery-item" data-effect="mfp-zoom-in">
					<span class="gallery-border"></span>
					<img src="images/gallery-11.jpg" alt="Image 11">
				</a>
				<a href="images/gallery-12.jpg" class="gallery-item" data-effect="mfp-zoom-in">
					<span class="gallery-border"></span>
					<img src="images/gallery-12.jpg" alt="Image 12">
				</a>
			</div>

			<div class="gallery-btn">
				<a href="#" class="def-btn wow fadeInUp" data-wow-delay="0.2s">Mostrar más</a>
			</div>
			
		</div>
	</section>

	<section class="s-why" id="s-why">
		<div class="container">
			<div class="why-row">

				<div class="why-left">
					<h2 class="def-title wow fadeInLeft" data-wow-delay="0.1s">Porque nosotros?</h2>
					<div class="def-desc wow fadeInLeft" data-wow-delay="0.2s">
						Elegir nuestro hotel es optar por una experiencia de alojamiento de calidad,respaldada por tecnología de punta y un equipo comprometido con la excelencia.
					</div>
	
					<div class="why-features">
	
						<div class="why-features-item">
							<div class="why-features-icon wow fadeInLeft" data-wow-delay="0.3s">
								<img src="images/check-mark.svg" alt="Check mark">
							</div>
	
							<div class="why-features-right">
								<div class="why-features-title wow fadeInRight" data-wow-delay="0.4s">Tecnología Avanzada para tu Comodidad</div>
								<div class="why-features-desc wow fadeInRight" data-wow-delay="0.5s">
									Olvídate de las preocupaciones por dobles reservas y disfruta de un proceso de check-in y check-out ágil y sin complicaciones.
								</div>
							</div>
						</div>
	
						<div class="why-features-item">
							<div class="why-features-icon wow fadeInLeft" data-wow-delay="0.3s">
								<img src="images/check-mark.svg" alt="Check mark">
							</div>
	
							<div class="why-features-right">
								<div class="why-features-title wow fadeInRight" data-wow-delay="0.4s">Compromiso con la Calidad y la Atención Personalizada</div>
								<div class="why-features-desc wow fadeInRight" data-wow-delay="0.5s">
									Nos preocupamos por cada detalle para que tu estancia sea perfecta.
								</div>
							</div>
						</div>

						<div class="why-features-item">
							<div class="why-features-icon wow fadeInLeft" data-wow-delay="0.3s">
								<img src="images/check-mark.svg" alt="Check mark">
							</div>
	
							<div class="why-features-right">
								<div class="why-features-title wow fadeInRight" data-wow-delay="0.4s">Ubicación Estratégica y Confort</div>
								<div class="why-features-desc wow fadeInRight" data-wow-delay="0.5s">
									Ya sea para negocios o placer, te ofrecemos la mejor ubicación para tu comodidad.
								</div>
							</div>
						</div>
	
					</div>
				</div>

				<div class="why-right">
					<img src="images/why-bg.jpg" alt="Почему мы?" class="wow fadeIn" data-wow-delay="0.6s">
				</div>
				
			</div>
		</div>
	</section>


	<section class="s-reviews" id="s-testimonials" style="background-image: url('images/reviews-bg.png');">
		<div class="container">
			<h2 class="center-title color-white wow fadeIn" data-wow-delay="0.1s">Nuestros hoteles</h2>
			
			<div class="swiper reviews-swiper">
				
				<div class="swiper-wrapper">

					<div class="swiper-slide">
						<div class="reviews-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="reviews-thumb">
								<img src="images/client-1.jpg" alt="Konstantin Kuzmin">
							</div>

							<div class="reviews-body">
								<div class="reviews-name">La Cumbre</div>
								<div class="reviews-profi">Nepal, Imalaya</div>
								<div class="reviews-comment">
									Hotel La Cumbre es un refugio exclusivo donde el confort se encuentra con la majestuosidad de la naturaleza. Ubicado en un entorno privilegiado, ofrece una experiencia única de descanso, con vistas panorámicas, atención personalizada y detalles que elevan cada momento.
								</div>
								<div class="reviews-social">
									<a href="#"><img src="images/social-vk-gray.svg" alt="Вконтакте"></a>
									<a href="#"><img src="images/social-facebook-gray.svg" alt="Facebook"></a>
									<a href="#"><img src="images/social-telegram-gray.svg" alt="Telegram"></a>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="reviews-item wow fadeInUp" data-wow-delay="0.3s">
							<div class="reviews-thumb">
								<img src="images/client-2.jpg" alt="Rakesh Juggernaut">
							</div>
							
							<div class="reviews-body">
								<div class="reviews-name">L’Essenza</div>
								<div class="reviews-profi">La toscana, Italia</div>
								<div class="reviews-comment">
									L’Essenza no es solo un hotel: es una experiencia que ofrece un entorno donde el diseño, la calma y la excelencia se fusionan en perfecta armonía.
								</div>
								<div class="reviews-social">
									<a href="#"><img src="images/social-vk-gray.svg" alt="Вконтакте"></a>
									<a href="#"><img src="images/social-facebook-gray.svg" alt="Facebook"></a>
									<a href="#"><img src="images/social-telegram-gray.svg" alt="Telegram"></a>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="reviews-item wow fadeInUp" data-wow-delay="0.4s">
							<div class="reviews-thumb">
								<img src="images/client-3.jpg" alt="Zabava Lukia">
							</div>
							
							<div class="reviews-body">
								<div class="reviews-name">Abrazos del Sur</div>
								<div class="reviews-profi">Patagonia, Argentina</div>
								<div class="reviews-comment">
									En Abrazos del Sur, cada huésped es recibido como parte de la familia. Nuestro hotel fue creado con el alma del sur: cálido, generoso y lleno de detalles que invitan a quedarse un poco más. Rodeado de paisajes tranquilos y con el aroma del hogar en cada rincón.
								</div>
								<div class="reviews-social">
									<a href="#"><img src="images/social-vk-gray.svg" alt="Вконтакте"></a>
									<a href="#"><img src="images/social-facebook-gray.svg" alt="Facebook"></a>
									<a href="#"><img src="images/social-telegram-gray.svg" alt="Telegram"></a>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="reviews-item">
							<div class="reviews-thumb">
								<img src="images/client-4.jpg" alt="Kira Dorova">
							</div>
							
							<div class="reviews-body">
								<div class="reviews-name">La Belle Pause </div>
								<div class="reviews-profi">Valle del Loira,Francia</div>
								<div class="reviews-comment">
									Nuestro hotel está pensado para quienes valoran la calidez de un ambiente familiar, el trato cercano y esos pequeños detalles que hacen sentir como en casa.
								</div>
								<div class="reviews-social">
									<a href="#"><img src="images/social-vk-gray.svg" alt="Вконтакте"></a>
									<a href="#"><img src="images/social-facebook-gray.svg" alt="Facebook"></a>
									<a href="#"><img src="images/social-telegram-gray.svg" alt="Telegram"></a>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="reviews-item">
							<div class="reviews-thumb">
								<img src="images/client-5.jpg" alt="Alex Pakovsky">
							</div>
							
							<div class="reviews-body">
								<div class="reviews-name">Rincón Silvestre</div>
								<div class="reviews-profi">selva Amazonas, Peru</div>
								<div class="reviews-comment">
									Ubicado en un entorno idóneo para quienes buscan escapar del ritmo acelerado de la vida cotidiana, nuestro hotel te ofrece un refugio lleno de paz, rodeado de paisajes que invitan a la reflexión y al descanso. Aquí, cada rincón está inspirado en la belleza natural que nos rodea, brindándote una experiencia única de desconexión y serenidad.
								</div>
								<div class="reviews-social">
									<a href="#"><img src="images/social-vk-gray.svg" alt="Вконтакте"></a>
									<a href="#"><img src="images/social-facebook-gray.svg" alt="Facebook"></a>
									<a href="#"><img src="images/social-telegram-gray.svg" alt="Telegram"></a>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="reviews-item">
							<div class="reviews-thumb">
								<img src="images/client-6.jpg" alt="Dina Cvetova">
							</div>
							
							<div class="reviews-body">
								<div class="reviews-name">Pausa Nómada</div>
								<div class="reviews-profi">Continente Africa</div>
								<div class="reviews-comment">
									Existe un lugar donde el tiempo se detiene. Pausa Nómada es más que un hotel: es un respiro para el alma viajera. Pensado para exploradores, soñadores y amantes de los caminos largos, aquí cada detalle invita a desconectar del ritmo acelerado y reconectar con lo esencial.
								</div>
								<div class="reviews-social">
									<a href="#"><img src="images/social-vk-gray.svg" alt="Вконтакте"></a>
									<a href="#"><img src="images/social-facebook-gray.svg" alt="Facebook"></a>
									<a href="#"><img src="images/social-telegram-gray.svg" alt="Telegram"></a>
								</div>
							</div>
						</div>
					</div>

				</div>
			
				<div class="swiper-pagination"></div>
			
			</div>

		</div>
	</section>


	<div class="s-partners" id="s-partners">
		<div class="partners-row">
			<div class="partners-item"><img src="images/partner-1.svg" alt="partner"></div>
			<div class="partners-item"><img src="images/partner-2.svg" alt="partner"></div>
			<div class="partners-item"><img src="images/partner-3.svg" alt="partner"></div>
			<div class="partners-item"><img src="images/partner-4.svg" alt="partner"></div>
			<div class="partners-item"><img src="images/partner-5.svg" alt="partner"></div>
			<div class="partners-item"><img src="images/partner-1.svg" alt="partner"></div>
			<div class="partners-item"><img src="images/partner-2.svg" alt="partner"></div>
			<div class="partners-item"><img src="images/partner-3.svg" alt="partner"></div>
			<div class="partners-item"><img src="images/partner-4.svg" alt="partner"></div>
			<div class="partners-item"><img src="images/partner-5.svg" alt="partner"></div>
		</div>
	</div>


	<footer class="site-footer">
		<div class="container">

			<div class="footer-row">

				<div class="footer-left">
					<div class="footer-logo">
						<a href="#">
							<img src="images/logo.png" alt="Construction"style="width: 120px; height: auto;">
						</a>
					</div>
					<div class="footer-desc">
						<strong>The ocean view resort</strong> "Vistas que enamoran, momentos que perduran."
					</div>
				</div>

				<div class="footer-right">
					<nav class="footer-nav">
						<h5 class="footer-title">Nuestros servicios</h5>
						<ul>
							<li><a href="#">Alojamiento</a></li>
							<li><a href="#">Restaurante y Bar</a></li>
							<li><a href="#">Bienestar y Relax</a></li>
							<li><a href="#">Servicio al Huesped</a></li>
							<li><a href="#">Negocios y Eventos</a></li>
							<li><a href="#">Reservas y Promociones</a></li>
						</ul>
					</nav>

					<div class="footer-nav">
						<h5 class="footer-title">Horario</h5>
						<ul>
							<li>Lunes: 8:30 am - 9:00 pm</li>
							<li>Martes: 8:00 am - 9:00 pm</li>
							<li>Miercoles: 8:00 am - 9:00 pm</li>
							<li>Jueves: 8:30 am - 9:00 pm</li>
							<li>Viernes: 10:00 am - 4:00 pm</li>
							<li>Sabado: 9:00 am - 12:30 pm</li>
							<li>Domingo: Closed</li>
						</ul>
					</div>

					<div class="footer-nav">
						<h5 class="footer-title">Contactos</h5>
						<div class="footer-info-item">
							<div class="footer-info-icon"><img src="images/location-gray.svg" alt="Location"></div>
							<div class="footer-info-text">Centro Comercial </div>
						</div>
						<a href="tel:79504575654" class="footer-info-item">
							<div class="footer-info-icon"><img src="images/phone-gray.svg" alt="Phone"></div>
							<div class="footer-info-text">+7 950 457 5654</div>
						</a>

						<div class="footer-social">
							<a href="#">
								<img src="images/social-twitter-gray.svg" alt="Twitter">
							</a>
							<a href="#">
								<img src="images/social-vk-gray.svg" alt="Вконтакте">
							</a>
							<a href="#">
								<img src="images/social-facebook-gray.svg" alt="Facebook">
							</a>
							<a href="#">
								<img src="images/social-telegram-gray.svg" alt="Telegram">
							</a>
						</div>
					</div>
				</div>

			</div>
			
			<div class="footer-copyright">
				<div class="copyright-text">Copyright © 2023 The ocean view resort. All rights reserved</div>
			</div>

		</div>
	</footer>


	<script src="js/jquery-3.7.0.min.js"></script>
	<script src="js/swiper-bundle.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/script.js"></script>
	<script>
	$(document).ready(function() {
		// Inicializar Magnific Popup para los modales de login y register
		$('a[href="#modal-login"], a[href="#modal-register"]').magnificPopup({
		  type: 'inline',
		  fixedContentPos: false,
		  removalDelay: 300,
		  mainClass: 'mfp-zoom-in'
		});
	  });
	  </script>
</body>

</html>