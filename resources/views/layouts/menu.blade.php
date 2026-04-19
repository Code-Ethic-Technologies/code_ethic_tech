	<nav id="navmenu" class="navmenu">
		<ul>
			<li>
				<a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">
					Home
				</a>
			</li>
			<li>
				<a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">
					About
				</a>
			</li>
			<li>
				<a href="{{ url('/services') }}" class="{{ Request::is('services') ? 'active' : '' }}">
					Services
				</a>
			</li>
			<!--<li>
				<a href="{{ url('/portfolio') }}" class="{{ Request::is('portfolio') ? 'active' : '' }}">
					Portfolio
				</a>
			</li>-->
			<li>
				<a href="{{ url('/pricing') }}" class="{{ Request::is('pricing') ? 'active' : '' }}">
					Pricing
				</a>
			</li>
			<li>
				<a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">
					Contact
				</a>
			</li>
		</ul>
		<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
	</nav>

      <!--<a class="btn-getstarted" href="about.html">Get Started</a>-->

    </div>
</header>