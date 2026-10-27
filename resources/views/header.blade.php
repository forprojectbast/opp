<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <style>
        .print-title {
            display: none;
        }

        @media print {
        @page {
            size: A4 portrait;
            margin: 12mm;
        }

        body {
            margin: 0;
        }

        .no-print,
        input,
        button,
        .btn,
        a,
        #users-table th:last-child,
        #users-table td:last-child:not([colspan]) {
            display: none !important;
        }

        .print-title {
            display: block;
            margin-bottom: 12px;
        }

        #users-table {
            width: 100% !important;
            margin: 0 auto;
            table-layout: fixed;
        }

        #users-table th,
        #users-table td {
            padding: 5px;
            font-size: 10px;
            overflow-wrap: anywhere;
        }
    }
    </style>
</head>
<body>
    
