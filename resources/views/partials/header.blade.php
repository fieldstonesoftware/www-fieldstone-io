<header class="site-header sticky-top py-2 px-5" style="height: 75px;">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top px-5" style="height: 75px;">
        {{--Logo--}}
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ url('img/logo.min.svg') }}" alt="Fieldstone Logo" height="45"/>
        </a>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="btn btn-link" href="https://pro.fieldstone.io/login">Login</a>
                <a class="btn btn-lg btn-primary ml-5" href="https://pro.fieldstone.io/register">Join Now!</a>
            </li>
        </ul>
    </nav>
</header>