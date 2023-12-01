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
        <h1>{{ $Antrian->nomor }}</h1>
        <hr>
        <h2>NOMOR ANTRIAN</h2>
        <h2>{{ $Antrian->urut }}</h2>

    </div>
</body>

</html>
