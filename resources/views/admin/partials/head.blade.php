<head>
    <meta charset="UTF-8">
    <title>BRUYENYARD - Admin Panel</title>
    <meta name="author" content="{{ setting()->author_name }}">
    <meta name="canonical" content="{{ Request::url() }}">
    <link rel="shortcut icon" href="{{ asset(setting()->site_favicon) }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/backend/') }}/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/') }}/vendor/font-awesome/css/all.min.css" />
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend/') }}/css/theme.css" />
    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend/') }}/css/skins/default.css" />
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend/') }}/css/custom.css">
    <!-- Head Libs -->
    <script src="{{ asset('assets/backend/') }}/vendor/modernizr/modernizr.js"></script>
    @yield('styles')
</head>
