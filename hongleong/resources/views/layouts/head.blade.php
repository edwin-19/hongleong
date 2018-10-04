<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Digi Chatbot CMS">
<meta name="author" content="Fusionex">
<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'DiGi Chatbot CMS') }}</title>

<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>

<!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="{{asset('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet" />

<!-- Custom styles for this template -->
<link href="{{asset('css/starter-template.css')}}" rel="stylesheet" />
<link href="{{asset('css/botchat.css')}}" rel="stylesheet" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
