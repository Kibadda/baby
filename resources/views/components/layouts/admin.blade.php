<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite(['resources/sass/app.scss'])
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Admin {{ $title ?? 'Page Title' }}</title>
    </head>
    <body id="admin">
        <nav>
            <ul>
                @foreach(['wishlist'] as $name)
                    <li class="{{ Str::contains(Route::currentRouteName(), 'admin.' . $name) ? 'active' : '' }}">
                        <a href='{{ route("admin.$name.index") }}'>{{ _(Str::ucfirst($name)) }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
