<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>

        </style>
    </head>
    <body>
        <form method="POST" action="/user/1/edit">
            <input hidden="hidden" name="id" value="1" />
            <input hidden="hidden" name="firstname" value="Kevin" />
            <input hidden="hidden" name="lastname" value="tatouering" />
            <input type="submit" value="Submit">

        </form>
    </body>
</html>
