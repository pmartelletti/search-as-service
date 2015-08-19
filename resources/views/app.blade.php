<!DOCTYPE html>
<html>
<head>
    <title>SIESC Search Service</title>

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" media="screen" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <style>
        body {
            font-family: Open Sans;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            display: table;
            background-color: #2f6b91;
            color: white;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
            margin-bottom: 40px;
            font-weight: 100;
            font-family: 'Lato';

        }

        .quote {
            font-size: 24px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">QuickSiesc.</div>
    </div>
    @yield('content')
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
@yield('javascripts')
</body>
</html>