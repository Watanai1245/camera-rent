<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/card.css">
    <link rel="icon" type="image/png" href="../img/Logos.png"/>
    <title>Camera city</title>
</head>

<body>
    <?php include '../component/navbar.php'; ?>

    <main>

        <h2 class="page-heading">รายละเอียดกล้อง</h2>

        <div class="wrapper">
            <div class="row">
                <div class="heading">มือใหม่</div>
            </div>
        </div>

        <?php
            include '../component/card.php';
            fetchDataAndCreateCards("../data/camera_a_data.json", "camera_a");
        ?>

    </main>

    <?php include '../component/footer.php'; ?>
    <script>
        function setTheme(theme) {
            document.body.classList.toggle("dark-theme", theme === "dark");
            if (theme === "dark") {
                icon.src = "../img/sun.png";
            } else {
                icon.src = "../img/moon.png";
            }
        }

        function toggleTheme() {
            var currentTheme = document.body.classList.contains("dark-theme") ? "dark" : "light";
            var newTheme = currentTheme === "dark" ? "light" : "dark";

            setTheme(newTheme);

            localStorage.setItem("theme", newTheme);
        }

        var icon = document.getElementById("icon");

        document.addEventListener("DOMContentLoaded", function () {
            var savedTheme = localStorage.getItem("theme");

            if (savedTheme) {
                setTheme(savedTheme);
            }

            icon.onclick = toggleTheme;
        });
    </script>
</body>

</html>