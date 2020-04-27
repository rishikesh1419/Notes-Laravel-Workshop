<nav class="navbar navbar-expand-md navbar-dark bg-dark" style="margin-bottom: 15px;">
    <div class="container">
    <a class="navbar-brand" href="/">{{config('app.name', "Notes App")}}</a>
    <button class="navbar-toggler" type="button"></button>


    <div>
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/notes">View Notes</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/notes/create">New Note</a>
            </li>

        </ul>
    </div>
</div>
</nav>