<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'เว็บไซต์ ผู้ใหญ่บ้าน')</title>
</head>
<body>
    <a href="/">หน้าแรก</a> | <a href="/about">about</a> | <a href="/contact">contact</a>
    <hr>
    @yield('content')

</body>
</html>
