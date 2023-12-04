<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <div class="list">
            <h1>To Do</h1>

            <ul class="items">

                <li v-for="task in tasks">
                    <span>{{ task.text }}</span>
                </li>

            </ul>


            <form action="server.php" method="post" class="item-add">

                <input type="text" name="task" placeholder="Type  a new item here." class="input" v-model="taskText">
                <input type="submit" value="submit" class="submit" value="Submit">

            </form>
        </div>
    </div>
    <script src=" https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="script.js"></script>
</body>

</html>