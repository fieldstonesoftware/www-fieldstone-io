<header class="site-header sticky-top py-2 px-5" style="height: 75px;">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top px-3 px-md-5" style="height: 75px;">
        {{--Logo--}}
        <a class="navbar-brand d-inline-block" style="height:100%; width:18em;" href="{{ url('/') }}">
            <img class="img-fluid my-auto" src="{{ url('img/logo.min.svg') }}" alt="Fieldstone Logo" />
        </a>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="btn btn-link" href="https://pro.fieldstone.io/login">Login</a>
                <a class="btn btn-lg btn-primary ml-3 ml-md-5" href="https://pro.fieldstone.io/register">Free Trial!</a>
            </li>
        </ul>
    </nav>
</header>