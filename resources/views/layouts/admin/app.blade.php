<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
    <title>Document</title>
    <style>
        body{background-color: #e9e9e9;}
        .container{min-height: calc(100vh - 6.5em - 3em)}
        .th-checkbox{width: 1em;}
        .checkbox{border-radius: 5px}
        .title-header{background-color: #ffffff; height: 4.5em; padding: 1em; margin-bottom: 2em}
        .col-p1{width: 68%;}.col-p2{width: 25%;}.col-p3{width: 15%;}
        .bck-tab{background-color: #ffffff; border-radius: 7px}
        div.table-responsive > table.table-bordered{border-radius: 5px}
        .frm-delete > form > button.btn{padding: 0 !important;}
        .btn-add{color: #ffffff; border-color: #5ac517; background: linear-gradient(to bottom, #5ac517 1%, #379608 100%); font-size: 1.1rem; font-weight: bold;}
        .btn-add:hover{color: #ffffff; border-color: #5ac517; background: linear-gradient(to bottom, #5ac517 1%,#379608 100%); font-size: 1.1rem; font-weight: bold;}
        .btn-check{color: #ffffff; border-color: #146ecf; background: linear-gradient(to bottom, #146ecf 1%, #0a478d 100%); font-size: 1.1rem; font-weight: bold;}
        .btn-check:hover{color: #ffffff; border-color: #146ecf; background: linear-gradient(to bottom, #146ecf 1%, #0a478d 100%); font-size: 1.1rem; font-weight: bold;}
        .btn-edit{color: #ffffff; border-color: #c89c15; background: linear-gradient(to bottom, #c89c15 1%, #92710c 100%); font-size: 1.1rem; font-weight: bold;}
        .btn-edit:hover{color: #ffffff; border-color: #c89c15; background: linear-gradient(to bottom, #c89c15 1%, #92710c 100%); font-size: 1.1rem; font-weight: bold;}
        .footer{background-color: #ffffff; width: 100%; height: 3em; padding: .8em;}
    </style>
</head>
<body>

@include('layouts.admin.components.navbar')

@yield('content')

@include('layouts.admin.components.footer')
</body>
</html>
