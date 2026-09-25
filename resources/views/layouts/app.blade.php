<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        {{ $title ?? 'BOS Fresh' }}
    </title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .display-font {
            font-family: Georgia, 'Times New Roman', serif;
        }

        .logo img {
            height: 48px;
            width: auto;
            display: block;
        }

    </style>

</head>

<body class="bg-[#F7F3E8] text-[#173F2A]">

    @yield('content')

</body>

</html>