<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--  ลิงค์มันตือการดึงข้อมูลจากภายนอกมาใช้ -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <!-- ดึงลิงค์ css มาใช้ -->
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/payment.css">
    <link rel="icon" type="image/png" href="../img/Logos.png"/>
    <title>Camera city</title>
</head>

<body>
<!-- ดึงcomponentมาใช้ -->
    <?php include '../component/navbar.php'; ?>
<!-- เนื้อหาในเว็บ -->
    <main>
        <h2 class="page-heading">คำนวณงวดการผ่อน</h2>
        <div id="calculate-payment">
            <form action="" method="post">
                <label for="loanAmount"><b>เงินกู้ (บาท): </b></label>
                <input type="text" id="loanAmount" name="loanAmount" required placeholder="กรุณาใส่จำนวนเงินกู้"><br>

                <label for="numOfInstallments"><b>จำนวนงวดที่ผ่อน: </b></label>
                <select id="numOfInstallments" name="numOfInstallments" required>
                    <option value="" disabled selected hidden>กรุณาเลือกจำนวนงวด</option>

                    <?php
                    $installmentOptions = [3, 6, 12, 24]; //ตรงนี้ใช้array//

                    foreach ($installmentOptions as $option) {
                        echo "<option value=\"$option\">$option งวด</option>"; //loop ในการสร้าง drop down list//
                    }
                    ?>

                </select>
                <br>

                <label for="interestRate"><b>อัตราดอกเบี้ย (%): </b></label>
                <input type="text" id="interestRate" name="interestRate" required
                    placeholder="กรุณาใส่อัตราดอกเบี้ย"><br>

                <button type="submit">คำนวณ</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve input values
                $loanAmount = isset($_POST['loanAmount']) ? floatval($_POST['loanAmount']) : 0;
                $numOfInstallments = isset($_POST['numOfInstallments']) ? intval($_POST['numOfInstallments']) : 0;
                $interestRate = isset($_POST['interestRate']) ? floatval($_POST['interestRate']) : 0;

                // Perform calculation
                $interest = ($loanAmount * $interestRate) / 100;
                $totalAmount = $loanAmount + $interest;
                $monthlyPayment = $totalAmount / $numOfInstallments;

                // Display result
                echo "<div id='result'>งวดละ: " . number_format($monthlyPayment, 2) . " บาท</div>";
            }
            ?>
        </div>
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