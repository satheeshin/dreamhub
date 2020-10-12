@extends('layouts.site')

@section('title', 'Custom Cloud Servers')

@section('content')
<!-- Content -->
<section id="content">
    <!-- Content Row -->
    <section class="content-row content-row-color content-row-clouds">
        <div class="container">
            <header class="content-header content-header-small content-header-uppercase">
                <h1>
                    Custom Cloud
                </h1>
                <p>
                    Create your ideal enterprise cloud server configuration.
                </p>
            </header>
        </div>
    </section>
    <!-- Content Row -->
    <section class="content-row">
        <div class="container">
            <div class="tab-group tab-group-switch-style">
                <div class="tab-item" data-title="Hourly">
                    <div class="product-configurator hide-segments" data-currency="$%" data-sync="custom-cloud">
                        <form method="get" action="products-custom-cloud.html">
                            <div class="column-row">
                                <div class="column-50">
                                    <div class="configurator-row">
                                        <input type="hidden" name="cpu" value="4" data-step="1" data-min="2" data-max="24" data-price="0.012" data-title="x CPU Core" data-title-plural="x CPU Cores" data-description="Intel&reg; Processor">
                                    </div>
                                </div>
                                <div class="column-50">
                                    <div class="configurator-row">
                                        <input type="hidden" name="memory" value="12" data-step="1" data-min="4" data-max="64" data-price="0.009" data-title=" GB Memory" data-description="ECC Technology">
                                    </div>
                                </div>
                            </div>
                            <div class="column-row">
                                <div class="column-50">
                                    <div class="configurator-row">
                                        <input type="hidden" name="disk" value="200" data-step="50" data-min="100" data-max="1500" data-price="0.006" data-title=" GB Storage" data-description="RAID 10 SSD">
                                    </div>
                                </div>
                                <div class="column-50">
                                    <div class="configurator-row">
                                        <input type="hidden" name="bandwidth" value="4" data-step="1" data-min="2" data-max="30" data-price="0.009" data-title=" TB Bandwidth" data-description="10 Gbit Uplink">
                                    </div>
                                </div>
                            </div>
                            <div class="column-row">
                                <div class="column-50">
                                    <div class="configurator-row">
                                        <input type="hidden" name="ip" value="1" data-step="1" data-min="1" data-max="10" data-price="0.003" data-title=" IP Address" data-title-plural=" IP Addresses" data-description="DDoS Protected">
                                    </div>
                                </div>
                                <div class="column-50">
                                    <div class="configurator-order">
                                        <div class="configurator-total">
                                            <span class="value"></span>
                                            <span class="label">Hourly</span>
                                        </div>
                                        <button class="button-secondary">
                                            <i class="fas fa-shopping-cart icon-left"></i>Order Now
                                        </button>
                                        <input type="hidden" name="rate" value="hourly">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-item active" data-title="Monthly">
                    <div class="product-configurator hide-segments" data-currency="$%" data-sync="custom-cloud">
                        <form method="get" action="products-custom-cloud.html">
                            <div class="column-row">
                                <div class="column-50">
                                    <div class="configurator-row">
                                        <input type="hidden" name="cpu" value="4" data-step="1" data-min="2" data-max="24" data-price="8" data-title="x CPU Core" data-title-plural="x CPU Cores" data-description="Intel&reg; Processor">
                                    </div>
                                </div>
                                <div class="column-50">
                                    <div class="configurator-row">
                                        <input type="hidden" name="memory" value="12" data-step="1" data-min="4" data-max="64" data-price="6" data-title=" GB Memory" data-description="ECC Technology">
                                    </div>
                                </div>
                            </div>
                            <div class="column-row">
                                <div class="column-50">
                                    <div class="configurator-row">
                                        <input type="hidden" name="disk" value="200" data-step="50" data-min="100" data-max="1500" data-price="4" data-title=" GB Storage" data-description="RAID 10 SSD">
                                    </div>
                                </div>
                                <div class="column-50">
                                    <div class="configurator-row">
                                        <input type="hidden" name="bandwidth" value="4" data-step="1" data-min="2" data-max="30" data-price="6" data-title=" TB Bandwidth" data-description="10 Gbit Uplink">
                                    </div>
                                </div>
                            </div>
                            <div class="column-row">
                                <div class="column-50">
                                    <div class="configurator-row">
                                        <input type="hidden" name="ip" value="1" data-step="1" data-min="1" data-max="10" data-price="2" data-title=" IP Address" data-title-plural=" IP Addresses" data-description="DDoS Protected">
                                    </div>
                                </div>
                                <div class="column-50">
                                    <div class="configurator-order">
                                        <div class="configurator-total">
                                            <span class="value"></span>
                                            <span class="label">Monthly</span>
                                        </div>
                                        <button class="button-secondary">
                                            <i class="fas fa-shopping-cart icon-left"></i>Order Now
                                        </button>
                                        <input type="hidden" name="rate" value="monthly">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="column-row align-center">
                <div class="column-50 text-align-center">
                    <p>
                        <small class="text-color-gray">
                            Your cloud server is billed by the hour automatically but you will never pay more than the monthly rate even when exceeding 672 hours of operation time per month.
                        </small>
                    </p>
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
                        <i class="fas fa-question-circle icon-feature-inline"></i>Resource Pricing
                    </h3>
                    <p>
                        Each cloud server comes with the possibility to extend its resources manually and dynamically based on the current system load. Dedicated IP addresses are limited to 10 but can be increased on request, the maximum amount of storage available per server is 1500 GB. Please note that cloud server resources cannot be extended indefinitely due to hardware or company policy restrictions.
                    </p>
                    <p>
                        <small class="text-color-gray">Additional bandwidth cannot be purchased after you have exceeded your monthly quota included in your plan. Any overages will be charged at $0.05 per GB.</small>
                    </p>
                    <p>
                        <a href="contact.html">Contact our sales department for custom rates<i class="fas fa-angle-right icon-right"></i></a>
                    </p>
                </div>
                <div class="column-50">
                    <table>
                        <caption>
                            Cloud Server Resources
                        </caption>
                        <tbody>
                            <tr>
                                <td>1x CPU Core</td>
                                <td>$0.012 <small>/ hour</small></td>
                                <td>$8 <small>/ month</small></td>
                            </tr>
                            <tr>
                                <td>1 GB Memory</td>
                                <td>$0.009 <small>/ hour</small></td>
                                <td>$6 <small>/ month</small></td>
                            </tr>
                            <tr>
                                <td>50 GB Storage</td>
                                <td>$0.006 <small>/ hour</small></td>
                                <td>$4 <small>/ month</small></td>
                            </tr>
                            <tr>
                                <td>1 TB Bandwidth</td>
                                <td>$0.009 <small>/ hour</small></td>
                                <td>$6 <small>/ month</small></td>
                            </tr>
                            <tr>
                                <td>1 IPv4 Address</td>
                                <td>$0.003 <small>/ hour</small></td>
                                <td>$2 <small>/ month</small></td>
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
            <div class="column-row">
                <div class="column-33">
                    <h3>
                        <i class="fas fa-rocket icon-feature-inline"></i>High Performance
                    </h3>
                    <p>
                        We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.
                    </p>
                    <p>
                        <a href="network.html">Anycast Network<i class="fas fa-angle-right icon-right"></i></a>
                    </p>
                </div>
                <div class="column-33">
                    <h3>
                        <i class="fas fa-cloud icon-feature-inline"></i>Fully Redundant
                    </h3>
                    <p>
                        Our cloud platform offers a 99.99% SLA uptime guarantee with full hardware and network redundancy to keep your services online.
                    </p>
                    <p>
                        <a href="network.html">Cloud Platform<i class="fas fa-angle-right icon-right"></i></a>
                    </p>
                </div>
                <div class="column-33">
                    <h3>
                        <i class="fas fa-shield-alt icon-feature-inline"></i>Secure Infrastructure
                    </h3>
                    <p>
                        All datacenters are Tier 4 certified and provide advanced fire and intrusion protection combined with enterprise networking hardware.
                    </p>
                    <p>
                        <a href="network.html">Global Datacenters<i class="fas fa-angle-right icon-right"></i></a>
                    </p>
                </div>
            </div>
            <div class="column-row">
                <div class="column-33">
                    <h3>
                        <i class="fas fa-sync-alt icon-feature-inline"></i>Instant Activation
                    </h3>
                    <p>
                        Your ordered product will be automatically and instantly activated as long as you are using a verified PayPal account for your purchase.
                    </p>
                    <p>
                        <a href="home.html">Cloud Products<i class="fas fa-angle-right icon-right"></i></a>
                    </p>
                </div>
                <div class="column-33">
                    <h3>
                        <i class="fas fa-life-ring icon-feature-inline"></i>Dedicated Support
                    </h3>
                    <p>
                        Our dedicated in-house support team is available 24/7 to answer all technical difficulties you may encounter with any of our products.
                    </p>
                    <p>
                        <a href="contact.html">Support Portal<i class="fas fa-angle-right icon-right"></i></a>
                    </p>
                </div>
                <div class="column-33">
                    <h3>
                        <i class="fas fa-cog icon-feature-inline"></i>Powerful Automation
                    </h3>
                    <p>
                        Our simple and intuitive developer API allows you to manage and extend existing products, as well as submitting new orders without interaction.
                    </p>
                    <p>
                        <a href="features.html">Developer Guide<i class="fas fa-angle-right icon-right"></i></a>
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
                            My customers didn't experience a single minute of downtime since I moved my services over to Cloudhub.
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
                            Cloudhub helped me with a professional custom server solution when my business was so rapidly growing my old system couldn't handle the load anymore.
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
                            By switching to Cloudhub's Anycast DNS system we were able to decrease the worldwide app latency immensely.
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
                    <a class="button button-secondary" href="contact.html">
                        <i class="fas fa-envelope icon-left"></i>Get in touch
                    </a>
                </p>
            </header>
        </div>
    </section>
</section>
@endsection