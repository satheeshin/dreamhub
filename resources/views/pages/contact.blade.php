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
                        Contact Us
                    </h1>
                    <p>
                        Send us a message and our team will be in touch very soon.
                    </p>
                </header>
            </div>
        </section>
        <!-- Content Row -->
        <section class="content-row">
            <div class="container">
                <div class="column-row align-center">
                    <div class="column-50">
                        <form class="form-full-width" method="get" action="contact.html">
                            <div class="form-row">
                                <select name="type">
                                    <option value="general" selected>General Inquiries</option>
                                    <option value="abuse">Abuse or DMCA Report</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="column-row">
                                    <div class="column-50">
                                        <label for="form-name">Full Name</label>
                                        <input id="form-name" type="text" name="name">
                                    </div>
                                    <div class="column-50">
                                        <label for="form-email">Email Address</label>
                                        <input id="form-email" type="text" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <label for="form-subject">Subject</label>
                                <input id="form-subject" type="text" name="subject">
                            </div>
                            <div class="form-row">
                                <label for="form-message">Message</label>
                                <textarea id="form-message" name="message" cols="10" rows="10"></textarea>
                            </div>
                            <div class="form-row">
                                <input id="form-newsletter" type="checkbox" name="newsletter" checked>
                                <label for="form-newsletter">Subscribe to our monthly newsletter</label>
                            </div>
                            <div class="form-row">
                                <button class="button-secondary"><i class="fas fa-envelope icon-left"></i>Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content Row -->
        <section class="content-row content-row-gray">
            <div class="container">
                <div class="column-row align-center text-align-center">
                    <div class="column-33">
                        <i class="fas fa-life-ring icon-feature"></i>
                        <h3>
                            Customer Support
                        </h3>
                        <p>
                            Please submit a ticket through our client portal to contact us if you are already a customer.
                        </p>
                        <p>
                            <a href="#customer-support">Open a Ticket<i class="fas fa-angle-right icon-right"></i></a>
                        </p>
                    </div>
                    <div class="column-33">
                        <i class="fas fa-comments icon-feature"></i>
                        <h3>
                            IRC Community
                        </h3>
                        <p>
                            Chat with our IRC community to learn more about cloud hosting, management and networking.
                        </p>
                        <p>
                            <a href="#irc-community">Connect to IRC<i class="fas fa-angle-right icon-right"></i></a>
                        </p>
                    </div>
                    <div class="column-33">
                        <i class="fas fa-exclamation-triangle icon-feature"></i>
                        <h3>
                            Bounty Program
                        </h3>
                        <p>
                            We are dedicated to keep our platform secure and offer a bounty for every reported security issue.
                        </p>
                        <p>
                            <a href="#bounty-program">Report a Bug<i class="fas fa-angle-right icon-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content Row -->
        <section class="content-row content-row-color">
            <div class="container">
                <header class="content-header">
                    <h2>
                        Interested in visiting us?
                    </h2>
                    <p>
                        Please schedule an appointment with our sales team if you're interested in visiting one of our branches, datacenters or meeting with our team of technicians in person.<br><br>
                        <a class="button button-secondary" href="about.html">
                            <i class="fas fa-globe icon-left"></i>Global Branches
                        </a>
                    </p>
                </header>
            </div>
        </section>
    </section>

@endsection