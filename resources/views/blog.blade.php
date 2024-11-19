<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
    <body>
        <a href="/">welcome</a>
        <a href="/about">about</a>
        <a href="/blog">blog</a>
        <a href="/contact">contact</a>
        <?php foreach($contacts as $contact){?>
            <h1>{{$contact["nama"]}}</h1>
            <p>{{$contact["pesan"]}}</p>
        <?php }?>
    </body>
</html>