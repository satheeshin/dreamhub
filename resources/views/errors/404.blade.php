@extends('layouts.site')

@section('title', 'Page Not Found')


@section('content')

<!-- Content -->
<section id="content">
    <!-- Content Row -->
    <section class="content-row content-row-color content-row-clouds content-row-half-height">
        <div class="container">
            <div class="column-row align-center">
                <div class="column-33 text-align-center">
                    <i class="fas fa-exclamation-circle icon-feature-large text-color-light"></i>
                </div>
                <div class="column-50">
                    <header class="content-header content-header-large content-header-align-left">
                        <h3>
                            Page not found
                        </h3>
                        <p>
                            We're very sorry but the page you were looking for could not be found.<br><br>
                            <a class="button button-secondary" href="home.html">Return Home<i class="fas fa-chevron-right icon-right"></i></a>
                        </p>
                    </header>
                </div>
            </div>
        </div>
    </section>
</section>
    
@endsection