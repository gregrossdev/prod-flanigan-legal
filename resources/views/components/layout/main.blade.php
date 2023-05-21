<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
    <meta
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
        name="viewport"
    />
    <title>Home | Flanigan Legal</title>

    <meta property="og:title" content="Home | Flanigan Legal"/>
    <meta property="og:locale" content="en_US"/>

    <link
        rel="canonical"
        href="https://thompson.tailwindmade.com/"
    />

    <meta
        property="og:url"
        content="https://thompson.tailwindmade.com/"
    />

    <meta
        name="description"
        content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    />

    <link rel="icon" type="image/png" href="/assets/img/favicon.png"/>
    {{--    Social --}}
    <meta property="og:site_name" content="Thompson Template"/>
    <meta property="og:image" content="https://thompson.tailwindmade.com/assets/img/social.jpg"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@tailwindmade"/>

    <link
        crossorigin="crossorigin"
        href="https://fonts.gstatic.com"
        rel="preconnect"
    />

    <link
        as="style"
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Poppins:wght@300;400;600;700&display=swap"
        rel="preload"
    />

    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Poppins:wght@300;400;600;700&display=swap"
        rel="stylesheet"
    />

    <link
        crossorigin="anonymous"
        href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
        integrity="sha256-imWjOiEEAcjWdL1+inhBu1dWYFyXuiO9vpJVEQd3y/c="
        rel="stylesheet"
    />


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body>

<div
    id="main"
    :class="{ 'overflow-hidden max-h-screen': mobileMenu }"
    class="relative overflow-x-hidden"
    x-data="{ mobileMenu: false }"
>
    <x-layout.nav/>

    <main>
        {{ $slot }}
    </main>

    <x-layout.footer/>

</div>

</body>
</html>
