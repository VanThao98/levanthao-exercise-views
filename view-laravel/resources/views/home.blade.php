<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicode-Hoạc lập trình web bài bản</title>
</head>
<body>
    <header>
        <h1>HEADER - UNICODE</h1>
       <!-- cách này dùng compact , nếu dùng cách 1 thì nên nhớ đổi tên biến lại cho đúng -->
        <h2> <?php //echo $title; ?></h2>
    </header>
    <main>
        <h1>Nội dung - UNICODE</h1>
        <!-- cách này dùng compact , nếu dùng cách 1 thì nên nhớ đổi tên biến lại cho đúng -->
       <!-- <h2><?php //echo $content;?></h2> -->

       <!-- Cách này DÙNG BLADE -->
        <h2> {{$content}}</h2>
    </main>
    <footer>
        <h1>FOOTER - UNIOCDE</h1>
    </footer>
</body>
</html>