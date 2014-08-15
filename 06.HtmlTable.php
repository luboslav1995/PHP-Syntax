<?php
$name = "Pesho";
$phoneNumber = "0882-321-423";
$age = 19;
$neighborhood = "Hadji Dimitar";
?>
<!DOCTYPY html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Homework</title>
    </head>
    <body>
    <style>
        td {
            border: 1px solid black;

            }
        #firstTd {
            background: orange;
            font-weight: bold;
            text-align: left;

        }
        #secondTd {
            text-align: right;

        }

    </style>
    <table>
        <tr><td id="firstTd">Name</td><td id="secondTd"><?php echo $name ?></td></tr>
        <tr><td id="firstTd">Phone Number</td><td id="secondTd"><?php echo $phoneNumber ?></td></tr>
        <tr><td id="firstTd">Age</td><td id="secondTd"><?php echo $age ?></td></tr>
        <tr><td id="firstTd">Adress</td><td id="secondTd"><?php echo $neighborhood ?></td></tr>
    </table>
    </body>
    </html>

