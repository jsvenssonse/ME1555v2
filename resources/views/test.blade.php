<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>

        </style>
    </head>
    <body>

        <form action="api/post/create" method="POST">
            <input hidden="hidden" name="user_id" value="8" />
            <input hidden="hidden" name="tags" value="ut" />
            <input hidden="hidden" name="title" value="jens job blog" />
            <input hidden="hidden" name="content" value="jag har jobbat mycket med anuglasr" />
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
