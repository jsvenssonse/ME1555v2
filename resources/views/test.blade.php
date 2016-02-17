<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>

        </style>
    </head>
    <body>

        <form action="/post/edit" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input hidden="hidden" name="id" value="1" />
            <input hidden="hidden" name="title" value="Jespers avhandling" />
            <input hidden="hidden" name="content" value="Jag heter jesper och är cool" />
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
