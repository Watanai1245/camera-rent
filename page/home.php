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
    <link rel="icon" type="image/png" href="../img/Logos.png" />
    <title>Camera city</title>
</head>

<body>
    <?php include '../component/navbar.php'; ?>

    <main>
        <!--  เริ่มใส่เนื้อหาตั้งแต่บรรทัดนี้  -->
        <header class="container header active" id="home">
            <div class="header-content">
                <div class="left-header">
                    <div class="images">
                        <img src="../img/rookie_1.png" alt="">
                    </div>
                </div>
                <div class="right-header">
                    <h1 class="name">
                        สวัสดี!! ยินดีต้อนรับเข้าสู่ <span>Camera city.</span>
                    </h1>
                    <p>
                        เนื้อหาในนี้จะประกอบไปด้วย เทคนิคดีๆสำหรับมือใหม่ในการเริ่มต้นถ่ายภาพ
                        การแนะนำกล้องต่างๆให้กับนักถ่ายรูป
                        มือใหม่ และ มือโปร เลนส์ต่างๆที่สามารถใช้งานได้แบบท่องเที่ยวทั่วไทยเลยย
                        สามารถรับชมเนื้อหาได้ตามหัวข้อด้านบนเลยครับ
                    </p>
                </div>
            </div>
        </header>

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