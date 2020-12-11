<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
    <title>ACME SA</title>
    <style>
        body{background-color: #e9e9e9;}
        .container{min-height: calc(100vh - 6.5em - 3em)}
        .th-checkbox{width: 1em;}
        .checkbox{border-radius: 5px}
        .title{font-size: 2em; color: #6a6a6a; font-weight: bold; letter-spacing: 0.03em; line-height: 1em;}
        .header{background-color: #ffffff; height: 4.5em; padding: 1em; margin-bottom: 2em}
        .col-p1{width: 68%;}.col-p2{width: 25%;}.col-p3{width: 15%;}
        .bck-tab{background-color: #ffffff; border-radius: 7px; height: 100%;}
        .in{padding: 1em}
        div.table-responsive > table.table-bordered{border-radius: 5px}
        .frm-delete > form > button.btn{padding: 0 !important;}
        .btn-add{color: #ffffff; border-color: #5ac517; background: linear-gradient(to bottom, #5ac517 1%, #379608 100%); font-size: 1.1rem; font-weight: bold;}
        .btn-add:hover{color: #ffffff; border-color: #5ac517; background: linear-gradient(to bottom, #5ac517 1%,#379608 100%); font-size: 1.1rem; font-weight: bold;}
        .btn-check{color: #ffffff; border-color: #146ecf; background: linear-gradient(to bottom, #146ecf 1%, #0a478d 100%); font-size: 1.1rem; font-weight: bold;}
        .btn-check:hover{color: #ffffff; border-color: #146ecf; background: linear-gradient(to bottom, #146ecf 1%, #0a478d 100%); font-size: 1.1rem; font-weight: bold;}
        .btn-edit{color: #ffffff; border-color: #c89c15; background: linear-gradient(to bottom, #c89c15 1%, #92710c 100%); font-size: 1.1rem; font-weight: bold;}
        .btn-edit:hover{color: #ffffff; border-color: #c89c15; background: linear-gradient(to bottom, #c89c15 1%, #92710c 100%); font-size: 1.1rem; font-weight: bold;}
        .footer{background-color: #ffffff; width: 100%; height: 3em; padding: .8em;}
        .card{width: 100%; height: 430px; border-radius: 8px; box-shadow: 0 2px 2px rgba(0,0,0,0.2); overflow: hidden; text-align: center; transition: all 0.4s; cursor: pointer;}
        .card a img{height: 100%; width: 100%; transition: all 1s;}
        /*.card:hover{transform: translateY(-15px); box-shadow: 0 12px 16px rgba(0,0,0,0.2)}*/
        .card a .text{position: absolute; top: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); transition: all .5s; opacity: 0; visibility: hidden; text-align: center;}
        .card:hover > a .text{opacity: 1; visibility: visible; padding-top: 7em; transition: all 1s;}
        .card:hover > a img{transform: scale(1.3); transition: all 1s;}
        .card a{color: #ffffff; font-size: 1.5em; text-decoration: none; font-style: italic; height: 100%; }
    </style>
</head>
<body>

@include('layouts.index.components.navbar')

@yield('content')

@include('layouts.index.components.footer')

</body>
</html>
