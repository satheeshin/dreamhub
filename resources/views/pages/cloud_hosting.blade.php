@extends('layouts.site')

@section('title', 'Cloud Hosting')

@section('content')
<!-- Content -->
<section id="content">
	<!-- Content Row -->
	<section class="content-row content-row-color content-row-clouds">
		<div class="container">
			<header class="content-header content-header-small content-header-uppercase">
				<h1>
					Cloud Hosting
				</h1>
				<p>
					Fully managed enterprise hosting with failover support and load balancing.
				</p>
			</header>
		</div>
	</section>
	<!-- Content Row -->
	<section class="content-row">
		<div class="container">
			<div class="tab-group tab-group-switch-style">
				<div class="tab-item" data-title="Monthly">
					<div class="column-row align-center-bottom">
						<div class="column-33">
							<div class="product-box">
								<div class="product-header">
									<h4>
										Cloud Starter
									</h4>
									<p>
										Medium traffic personal sites
									</p>
								</div>
								<div class="product-price">
									₹ 99<span class="term">/ month</span>
								</div>
								<div class="product-features">
									<ul>
										<li>
											<strong>1</strong> Hosted Domains
										</li>
										<li>
											<strong>5 GB</strong> SSD Disk Space
										</li>
										<li>
											<strong>100 GB</strong> Premium Bandwidth
										</li>
									</ul>
									<ul>
										<li>
											FREE SSL Certificates 
										</li>
										<li>
											99.95% Uptime SLA
										</li>
										<li>
											1000 Mbit Uplink
										</li>
									</ul>
								</div>
								<div class="product-order">
									<a class="button button-secondary" href="{{ cpurl('cart.php?a=add&pid=1') }}">
										<i class="fas fa-shopping-cart icon-left"></i>Order Now
									</a>
								</div>
							</div>
						</div>
						<div class="column-33">
							<div class="product-box product-box-popular">
								<div class="product-popular">
									Most Popular
								</div>
								<div class="product-header">
									<h4>
										Cloud Business
									</h4>
									<p>
										High traffic corporate sites
									</p>
								</div>
								<div class="product-price">
									₹ 179<span class="term">/ month</span>
								</div>
								<div class="product-features">
									<ul>
										<li>
											<strong>5</strong> Hosted Domains
										</li>
										<li>
											<strong>25 GB</strong> SSD Disk Space
										</li>
										<li>
											<strong>250 GB</strong> Premium Bandwidth
										</li>
									</ul>
									<ul>
										<li>
											FREE SSL Certificates
										</li>
										<li>
											99.95% Uptime SLA
										</li>
										<li>
											1000 Mbit Uplink
										</li>
									</ul>
								</div>
								<div class="product-order">
								<a class="button button-secondary" href="{{ cpurl('cart.php?a=add&pid=2') }}">
										<i class="fas fa-shopping-cart icon-left"></i>Order Now
									</a>
								</div>
							</div>
						</div>
						<div class="column-33">
							<div class="product-box">
								<div class="product-header">
									<h4>
										Cloud Enterprise
									</h4>
									<p>
										Enterprise content management
									</p>
								</div>
								<div class="product-price">
									₹ 259<span class="term">/ month</span>
								</div>
								<div class="product-features">
									<ul>
										<li>
											<strong>10</strong> Hosted Domains
										</li>
										<li>
											<strong>100 GB</strong> SSD Disk Space
										</li>
										<li>
											<strong>500 GB</strong> Premium Bandwidth
										</li>
									</ul>
									<ul>
										<li>
											FREE SSL Certificates
										</li>
										<li>
											99.95% Uptime SLA
										</li>
										<li>
											1000 Mbit Uplink
										</li>
									</ul>
								</div>
								<div class="product-order">
								<a class="button button-secondary" href="{{ cpurl('cart.php?a=add&pid=3') }}">
										<i class="fas fa-shopping-cart icon-left"></i>Order Now
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-item" data-title="Yearly">
					<div class="column-row align-center-bottom">
						<div class="column-33">
							<div class="product-box">
								<div class="product-header">
									<h4>
										Cloud Starter
									</h4>
									<p>
										Medium traffic personal sites
									</p>
								</div>
								<div class="product-price">
									₹ 1188<span class="term">/ year</span>
								</div>
								<div class="product-features">
									<ul>
										<li>
											<strong>1</strong> Hosted Domains
										</li>
										<li>
											<strong>5 GB</strong> SSD Disk Space
										</li>
										<li>
											<strong>100 GB</strong> Premium Bandwidth
										</li>
									</ul>
									<ul>
										<li>
											FREE SSL Certificates
										</li>
										<li>
											99.95% Uptime SLA
										</li>
										<li>
											1000 Mbit Uplink
										</li>
									</ul>
								</div>
								<div class="product-order">
								<a class="button button-secondary" href="{{ cpurl('cart.php?a=add&pid=1') }}">
										<i class="fas fa-shopping-cart icon-left"></i>Order Now
									</a>
								</div>
							</div>
						</div>
						<div class="column-33">
							<div class="product-box product-box-popular">
								<div class="product-popular">
									Most Popular
								</div>
								<div class="product-header">
									<h4>
										Cloud Business
									</h4>
									<p>
										High traffic corporate sites
									</p>
								</div>
								<div class="product-price">
									₹ 2148<span class="term">/ year</span>
								</div>
								<div class="product-features">
									<ul>
										<li>
											<strong>5</strong> Hosted Domains
										</li>
										<li>
											<strong>25 GB</strong> SSD Disk Space
										</li>
										<li>
											<strong>250 GB</strong> Premium Bandwidth
										</li>
									</ul>
									<ul>
										<li>
											FREE SSL Certificates
										</li>
										<li>
											99.95% Uptime SLA
										</li>
										<li>
											1000 Mbit Uplink
										</li>
									</ul>
								</div>
								<div class="product-order">
								<a class="button button-secondary" href="{{ cpurl('cart.php?a=add&pid=2') }}">
										<i class="fas fa-shopping-cart icon-left"></i>Order Now
									</a>
								</div>
							</div>
						</div>
						<div class="column-33">
							<div class="product-box">
								<div class="product-header">
									<h4>
										Cloud Enterprise
									</h4>
									<p>
										Enterprise content management
									</p>
								</div>
								<div class="product-price">
									₹ 3108<span class="term">/ year</span>
								</div>
								<div class="product-features">
									<ul>
										<li>
											<strong>10</strong> Hosted Domains
										</li>
										<li>
											<strong>100 GB</strong> SSD Disk Space
										</li>
										<li>
											<strong>500 GB</strong> Premium Bandwidth
										</li>
									</ul>
									<ul>
										<li>
											FREE SSL Certificates
										</li>
										<li>
											99.95% Uptime SLA
										</li>
										<li>
											1000 Mbit Uplink
										</li>
									</ul>
								</div>
								<div class="product-order">
								<a class="button button-secondary" href="{{ cpurl('cart.php?a=add&pid=3') }}">
										<i class="fas fa-shopping-cart icon-left"></i>Order Now
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Content Row -->
	<section class="content-row content-row-gray">
		<div class="container">
			<div class="column-row">
				<div class="column-50">
					<h3>
						<i class="fas fa-plus-circle icon-feature-inline"></i>Available Addons
					</h3>
					<p>
						Each cloud hosting product comes with the possibility to extend its resources without the need to change to a higher plan. Dedicated IP addresses are currently limited to 3, the maximum amount of storage available per product and server is 500 GB. Please note that resources cannot be extended indefinitely due to hardware or company policy restrictions.
					</p>
					<p>
						<small class="text-color-gray">Additional bandwidth cannot be purchased after you have exceeded your monthly quota included in your plan. Any overages will be charged at $0.25 per GB.</small>
					</p>
				</div>
				<div class="column-50">
					<table>
						<caption>
							Cloud Hosting Addons
						</caption>
						<tbody>
							<tr>
								<td>10 Hosted Domains</td>
								<td>₹ 199<small>/ month</small></td>
							</tr>
							<tr>
								<td>25 GB SSD Disk Space</td>
								<td>₹ 99<small>/ month</small></td>
							</tr>
							<tr>
								<td>200 GB Premium Bandwidth</td>
								<td>₹ 179<small>/ month</small></td>
							</tr>
							<tr>
								<td>1 Dedicated IP Address</td>
								<td>₹ 100<small>/ month</small></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!-- Content Row -->
	<section class="content-row">
		<div class="container">
			<header class="content-header">
				<h2>
					Cloud Hosting Features
				</h2>
				<p>
					Don't know which cloud hosting plan to choose? Our extended feature comparison should help you decide which product you require for your application environment.
				</p>
			</header>
			<table class="table-layout-product-comparison">
				<thead>
					<tr>
						<th></th>
						<th>Cloud Starter</th>
						<th>Cloud Business</th>
						<th>Cloud Enterprise</th>
					</tr>
				</thead>
				<tbody>
					<tr class="product-header">
						<td></td>
						<td>
							<h4>
								Cloud Starter
							</h4>
							<p>
								Medium traffic personal sites
							</p>
							<p class="product-price">
								₹ 99<span class="term">/ month</span>
							</p>
						</td>
						<td>
							<h4>
								Cloud Business
							</h4>
							<p>
								High traffic corporate sites
							</p>
							<p class="product-price">
								₹ 179<span class="term">/ month</span>
							</p>
						</td>
						<td>
							<h4>
								Cloud Enterprise
							</h4>
							<p>
								Enterprise content management
							</p>
							<p class="product-price">
								₹ 259<span class="term">/ month</span>
							</p>
						</td>
					</tr>
					<tr>
						<td>Hosted Domains</td>
						<td>1</td>
						<td>5</td>
						<td>10</td>
					</tr>
					<tr>
						<td>SSD Disk Space</td>
						<td>5 GB</td>
						<td>25 GB</td>
						<td>100 GB</td>
					</tr>
					<tr>
						<td>Premium Bandwidth</td>
						<td>100 GB</td>
						<td>250 GB</td>
						<td>500 GB</td>
					</tr>
					<tr class="product-order">
						<td></td>
						<td>
						<a class="button button-secondary" href="{{ cpurl('cart.php?a=add&pid=1') }}">
								<i class="fas fa-shopping-cart icon-left"></i>Order Now
							</a>
						</td>
						<td>
						<a class="button button-secondary" href="{{ cpurl('cart.php?a=add&pid=2') }}">
								<i class="fas fa-shopping-cart icon-left"></i>Order Now
							</a>
						</td>
						<td>
						<a class="button button-secondary" href="{{ cpurl('cart.php?a=add&pid=3') }}">
								<i class="fas fa-shopping-cart icon-left"></i>Order Now
							</a>
						</td>
					</tr>
					<tr class="product-feature-group">
						<td>Package Features</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Network Uplink</td>
						<td>1000 Mbit</td>
						<td>1000 Mbit</td>
						<td>1000 Mbit</td>
					</tr>
					<tr>
						<td>Uptime Guarantee</td>
						<td>99.95%</td>
						<td>99.95%</td>
						<td>99.95%</td>
					</tr>
					<tr>
						<td>Domains Allowed</td>
						<td>1</td>
						<td>5</td>
						<td>10</td>
					</tr>
					<tr>
						<td>SSH Access</td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
					</tr>
					<tr>
						<td>Custom Nameservers</td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
					</tr>
					<tr class="product-feature-group">
						<td>Email Features</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Mailboxes</td>
						<td>10</td>
						<td>25</td>
						<td>50</td>
					</tr>
					<tr>
						<td>Hourly Limit</td>
						<td>200</td>
						<td>600</td>
						<td>1200</td>
					</tr>
					<tr>
						<td>Spam Filter</td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
					</tr>
					<tr>
						<td>Webmail</td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
					</tr>
					<tr class="product-feature-group">
						<td>Server Features</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>CentOS 7.4</td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
					</tr>
					<tr>
						<td>Apache 2.4</td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
					</tr>
					<tr>
						<td>Node 9.5</td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
					</tr>
					<tr>
						<td>PHP 7.2</td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
					</tr>
					<tr>
						<td>HAProxy</td>
						<td><i class="fas fa-times text-color-light"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
					</tr>
					<tr>
						<td>Root Access</td>
						<td><i class="fas fa-times text-color-light"></i></td>
						<td><i class="fas fa-times text-color-light"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
					</tr>
					<tr class="product-feature-group">
						<td>Support Features</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Instant Setup</td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
					</tr>
					<tr>
						<td>Ticket Support</td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
					</tr>
					<tr>
						<td>Live Support</td>
						<td><i class="fas fa-times text-color-light"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
					</tr>
					<tr>
						<td>Remote Hands</td>
						<td><i class="fas fa-times text-color-light"></i></td>
						<td><i class="fas fa-times text-color-light"></i></td>
						<td><i class="fas fa-check text-color-primary"></i></td>
					</tr>
					<tr class="product-feature-group">
						<td>Pricing Options</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Monthly</td>
						<td>₹ 99</td>
						<td>₹ 179</td>
						<td>₹ 259</td>
					</tr>
					<tr>
						<td>Quarterly</td>
						<td>₹ 396</td>
						<td>₹ 716</td>
						<td>₹ 1036</td>
					</tr>
					<tr>
						<td>Yearly</td>
						<td>₹ 1188</td>
						<td>₹ 2148</td>
						<td>₹ 3108</td>
					</tr>
				</tbody>
			</table>
			<div class="column-row align-center">
				<div class="column-50 text-align-center">
					<p>
						<small class="text-color-gray">Additional IP addresses are available at $3.50 per month each as long as a valid justification is provided. Any bandwidth overages will be charged at $0.25 per GB.</small>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Content Row -->
	<section class="content-row content-row-gray">
		<div class="container">
			<header class="content-header">
				<h2>
					What Our Customers Say
				</h2>
				<p>
					We've helped hundreds of clients with custom server solutions, enabling them to operate much more efficient and secure than they ever did before.
				</p>
			</header>
			<div class="column-row align-center-bottom">
				<div class="column-33">
					<div class="testimonial">
						<p class="testimonial-content">
							My customers didn't experience a single minute of downtime since I moved my services over to DreamHost.
						</p>
						<p class="testimonial-author">
							<a href="#twitter"><i class="fab fa-twitter icon-left"></i>Peter Miller</a><br>
							<small>Chemical Industries</small>
						</p>
					</div>
				</div>
				<div class="column-33">
					<div class="testimonial">
						<p class="testimonial-content">
							DreamHost helped me with a professional custom server solution when my business was so rapidly growing my old system couldn't handle the load anymore.
						</p>
						<p class="testimonial-author">
							<a href="#twitter"><i class="fab fa-twitter icon-left"></i>John Smith</a><br>
							<small>HQ Streaming Company</small>
						</p>
					</div>
				</div>
				<div class="column-33">
					<div class="testimonial">
						<p class="testimonial-content">
							By switching to DreamHost's Anycast DNS system we were able to decrease the worldwide app latency immensely.
						</p>
						<p class="testimonial-author">
							<a href="#twitter"><i class="fab fa-twitter icon-left"></i>Mary Fonda</a><br>
							<small>SAAS Billing Solutions</small>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Content Row -->
	<section class="content-row content-row-color">
		<div class="container">
			<header class="content-header">
				<h2>
					Looking for a custom solution?
				</h2>
				<p>
					Our technicians can provide you with the best custom made solutions on the market, no matter whether you're a small business or large enterprise.<br><br>
					<a class="button button-secondary" href="{{ cpurl('contact.php') }}">
						<i class="fas fa-envelope icon-left"></i>Get in touch
					</a>
				</p>
			</header>
		</div>
	</section>
</section>
@endsection
