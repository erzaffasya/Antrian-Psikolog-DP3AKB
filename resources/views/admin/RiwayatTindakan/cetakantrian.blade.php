<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            text-align: center;
            margin-bottom: 0;
            margin-top: 0;
        }

        hr {
            margin: 0.4rem 0;
        }

        @page {
            size: 150mm;
            /* Adjust the width based on the paper roll width */
            margin: 0;
        }

        body {
            margin: 10mm;
            /* Add any necessary margins */
        }
    </style>
</head>

<body>
    <div id="pdf-content">
        <p>ANTRIAN PUSPAGA</p>
        <h4>{{ $Antrian->created_at->format('d M Y') }}</h4>
        <hr>
        <h2>{{ $Antrian->nomor }}</h2>
        <hr>
        <h3>NOMOR URUT</h3>
        <h1><b>{{ $Antrian->urut }}</b></h1>

    </div>
</body>

</html>
