<!DOCTYPE html>
<html>
    <head>
        <title>Ameya Cars demo</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
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
                font-size: 24px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">This is a view for Cars Data {{$name}}</div>
                <button type="button" id="posttest" class="btn btn-warning btn-xs"></button>
            </div>
        </div>
    </body>
</html>

<script>
    $('#posttest').click(function() {
        alert('Clicked');
    });
</script>