<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database App</title>

    {{-- CSS --}}
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
    
    <header>
        <nav class="navbar navbar-default">
        <div class="container">
            <a href="/" class="navbar-brand">My App</a>
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/users">Users</a></li>
            </ul>
        </div>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

</body>
</html>