<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="list">
        <h1>To Do </h1>

        <ul class="items">
            
            <li>
                <span class="item ">ciao</span>
                <a href="#" class="done-button">Mark as done</a>
            </li>
            
        </ul>
        

        <form action="add.php" method="post" class="item-add">
            <input type="text" name="name" placeholder="Type  a new item here." class="input" autocomplete="off" required>
            <input type="submit" value="Add" class="submit">
        </form>
    </div>
</body>
</html>