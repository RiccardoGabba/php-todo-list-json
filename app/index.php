<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="list">
        <h1>To Do</h1>

        <ul>
            <li>
                <span class="item">ciao</span>
                <a href="#" class="done-button">Mark as done</a>
            </li>
        </ul>

        <form action="add.php" method="post" class="item-add">
            <input type="text" class="input" name="name" placeholder="Type a new item here." autocomplete="off" required>
            <input type="submit" value="Add" class="submit">
        </form>
    </div>
</body>
</html>