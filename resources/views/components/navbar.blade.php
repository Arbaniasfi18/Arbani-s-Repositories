<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="center-nav-item">
            <a class="navbar-brand" href="/">IT FEST 2022</a>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    @if ($path == 'competitions')
                        <a class="nav-link active" href="/competitions">Competition</a>
                    @else
                        <a class="nav-link" href="/competitions">Competition</a>
                    @endif
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    @if ($path == 'grand-event')

                        <a class="nav-link active" href="/grand-event">Grand Event</a>
                    @else

                        <a class="nav-link" href="/grand-event">Grand Event</a>
                    @endif
                </li>
            </ul>
        </div>
        <form class="d-flex">
            <a class="btn btn-outline-success" href="/sign-in">Sign In</a>
        </form>
    </div>
</nav>
