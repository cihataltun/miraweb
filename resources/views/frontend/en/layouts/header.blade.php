<header>
	<!-- NAVBAR START -->

	<nav class="navbar fixed-top">
		<div class="container-fluid">
			<!-- SIDEBAR SECTION -->
			<aside class="sidebar">
				<div class="nav-menu nav-sidebar">
					<div class="sidebar-options"><a href="#" class="burger js-menu-toggle navbar-text"
							data-toggle="collapse" data-target="#main-navbar">
							<i class="fa-regular fa-circle-xmark"></i>
							<p class="navbar-text ">MENU</p>
						</a>
						<a href=""><img class="sidebar-logo" src="{{ asset('assets/frontend/images/header/miramare-logo.webp') }}"></a>
						<a class="nav-link " href="#">
							
						</a>	
					</div>
					<ul class="sidebar-list">
						<li class="sidebar-item"><a href="#">
								<p class="sidebar-links ">HOTELS</p>
							</a></li>
						<li class="sidebar-item"><a href="#">
								<p class="sidebar-links ">CONTACTS</p>
							</a></li>
						<li class="sidebar-item"><a href="#">
								<p class="sidebar-links ">OFFERS</p>
								</a>
						</li>
					</ul>
					<div class="sidebar-contact">
						<div class="socials-row" id="socialsSidebar">
							<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
							<a href="#"><i class="fa-brands fa-instagram"></i></a>
							<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
							<a href="#"><i class="fa-brands fa-youtube"></i></a>
							<a href="#"> <img src="{{ asset('assets/frontend/images/header/booking-header-grey.png') }}"></a>
	
						</div>
						<a class="sidebar-whatsapp" href="#"><i class="fa-brands fa-whatsapp"></i>
							<p class="sidebar-text whatsapp-text">WhatsApp</p>
						</a>
						<a class="sidebar-phone" href="#"><i class="fa-solid fa-phone"></i>
							<p class="sidebar-text phone-text">+90 (242) 756 11 43</p>
						</a>

						<button id="contact-form-btn" class="sidebar-contact-form sidebar-contact-form-mobile" >
							<p  class="contact-btn-txt ">Let Us Call You</p>
						</button>
						
						<div class="reservation-section-mobile " id="info-sidebar">
							<a class="mobile-call-center hover-fx" href="#">
								<i class="fa-solid fa-question"></i>				</a>
							<a class="mobile-call hover-fx" href="#">
								<i class="fa-solid fa-phone"></i>	</a>
								<a class="booking-sidebar " href="#">
											
									<p class="book-btn-txt" id="contact-mobile-txt ">Book Now</p>
								</a>
							</div>
					</div>
			</aside>
			<!-- The Modal -->
			<div id="myModal" class="modal">

				<!-- Modal content -->
				<div class="modal-content">
				<span class="close">&times;</span>
				 <!--Contact Form Start-->
				 <div class="contact-form">
			
						<p class="form-title ">Contact Us
						</p>
						
				
					<form class="" method="post" id="contactForm" name="contactForm">
					
							<div class="form-group">
								<p class="form-element-title ">Name</p>
								<input type="text" class="form-control" name="name" id="name" >
							</div>
							<div class="form-group">
								<p class="form-element-title ">Surname</p>
								<input type="text" class="form-control" name="surname" id="surname" >
							</div>
					
					
							<div class="form-group">
								<p class="form-element-title ">Email</p>
								<input type="text" class="form-control" name="email" id="email" >
							</div>
							<div class="form-group">
								<p class="form-element-title ">Phone Number</p>
								<input type="text" class="form-control" name="number" id="number"
									>
						
						</div>
				
							<div class="form-group">
								<p class="form-element-title ">Message</p>
								<textarea class="form-control" name="message" id="message" cols="30" rows="7"
									></textarea>
							</div>
				
					
							<div class="submit-wrapper">
								<button type="submit" value="Send"
									class="form-submit-btn">
									<p class="form-submit-text ">Send</p>
							</button>
								<span class="submitting"></span>
							</div>
					
					</form>
					<div id="form-message-warning mt-4"></div>
					<div id="form-message-success ">
					</div>
				</div>
				<!--Contact Form End-->
				</div>
			
			</div>
			<!-- SIDEBAR SECTION END -->

			<div class="navbar-threefold" id="navbarSupportedContent">

				<ul class="navbar-nav ">
					<div class="navbar-left">
						<li class="nav-item toggler">
							<a href="#" class="burger js-menu-toggle-sidebar navbar-text" data-toggle="collapse"
								data-target="#main-navbar">
								<i class="fa-solid fa-bars"></i>
								<p class="navbar-text menu-text ">MENU</p>
							</a>



						</li>
						<li class="nav-item nav-brand nav-logo-mobile">
							<a href="#">
							<img class="miramare-logo" src="{{ asset('assets/frontend/images/header/miramare-logo.webp') }}">

							</a>
						</li>
						<li class="nav-item nav-lang">
							<a class="nav-link" href="#">
								<select id="parseSelection" class="navbar-text">
									<option class="navbar-text" value="English" selected="selected">EN</option>
									<option class="navbar-text" value="Turkish" >TR</option>
									<option class="navbar-text" value="German">GR</option>
									<option class="navbar-text" value="Russian">RU</option>
								  </select>
							</a>
						</li>

						<li class="nav-item nav-call-centre">
							<a class="nav-link " href="#">
								<div class="call-centre-nav"> <i class="fa-thin fa-circle-question"></i>
									<p class="navbar-text ">CALL CENTRE</p>
								</div>
							</a>
						</li>
					</div>
					<div class="navbar-center">
						<li class="nav-item nav-brand">
							<a href="{{ route('homepage') }}">
							<img class="miramare-logo" src="{{ asset('assets/frontend/images/header/miramare-logo.webp') }}">

							</a>
						</li>
					</div>
					<div class="navbar-right">
						<li class="nav-item phone-item">
							<a class="nav-link nav-phone" aria-current="page" href="#">
								<svg width="25" height="25" viewBox="0 0 25 25" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M24.4661 18.4686V22.0816C24.4674 22.417 24.3986 22.749 24.2639 23.0563C24.1293 23.3636 23.9318 23.6395 23.6842 23.8662C23.4366 24.093 23.1442 24.2656 22.8258 24.3731C22.5075 24.4805 22.1701 24.5204 21.8354 24.4902C18.1222 24.0875 14.5553 22.8212 11.4215 20.793C8.50586 18.9439 6.03391 16.4769 4.1812 13.567C2.14183 10.4252 0.872687 6.84809 0.476591 3.12554C0.446436 2.79251 0.486094 2.45685 0.59304 2.13995C0.699985 1.82305 0.871876 1.53185 1.09777 1.28488C1.32366 1.03791 1.5986 0.84059 1.90509 0.70548C2.21158 0.57037 2.5429 0.500432 2.87795 0.500117H6.49809C7.08372 0.494364 7.65146 0.701333 8.09549 1.08245C8.53953 1.46356 8.82956 1.99281 8.91152 2.57155C9.06432 3.72778 9.34768 4.86305 9.75622 5.9557C9.91857 6.38675 9.95371 6.85522 9.85747 7.3056C9.76123 7.75597 9.53764 8.16938 9.2132 8.49682L7.68067 10.0263C9.39849 13.0414 11.8999 15.5378 14.921 17.2522L16.4535 15.7228C16.7816 15.399 17.1958 15.1758 17.6471 15.0798C18.0983 14.9837 18.5677 15.0188 18.9996 15.1808C20.0945 15.5885 21.232 15.8713 22.3905 16.0238C22.9767 16.1064 23.512 16.401 23.8947 16.8518C24.2774 17.3026 24.4807 17.878 24.4661 18.4686Z"
										fill="#F5F5F5" />
								</svg>
								<p class=" phone-text navbar-text">+90 (242) 756 11 43</p>
							</a>
						</li>
						<li class="nav-item booking-item">
							<a class="booking-nav " href="#">
								
								<p class="book-btn-txt ">Book Now</p>
							</a>
						</li>
					</div>

					
				</ul>

			</div>
		</div>
	</nav>
	<!-- NAVBAR END -->
</header>