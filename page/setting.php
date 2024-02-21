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
    <link rel="icon" type="image/png" href="../img/Logos.png"/>
    <title>Camera city</title>
</head>

<body>
    <?php include '../component/navbar.php'; ?>

    <main>

        <h2 class="page-heading">การตั้งค่า</h2>

        <!--  เริ่มใส่เนื้อหาตั้งแต่บรรทัดนี้  -->
        <div class="wrapper">
            <div class="row">
                <div class="heading">เทคนิคการตั้งค่ากล้อง</div>
            </div>
        </div>
        <div class="maintenance-detail">

            <h3>1. ISO ปรับเป็นค่าแรก</h3>
            ก่อนที่จะถ่ายภาพ ควรดูสภาพแวดล้อมรอบข้างว่าแสงตอนนี้มีลักษณะอย่างไร แสงเข้ม แดดแรง หรือแสงอ่อนตอนเช้า เย็น
            ให้ตั้งค่าตามลักษณะของแสงก่อน เช่น
            <br>
            • แดดแรงจัด แสงจ้า : ISO 100-200
            <br>
            • พลบค่ำ แสงทึม : ISO 400-800
            <br>
            • แสงไฟในตัวอาคาร : ISO 800-1600 (บางสถานที่แสงอาจแตกต่างกัน อาจปรับเหลือแค่ 200-400 ได้)
            <br>
            • แสงน้อย ตอนค่ำ ตอนกลางคืน : ISO 800-1600
            <br>
            <div class="main-image">
                <img class="image" src="../img/setting_02.jpg">
                <img class="image" src="../img/setting_03.jpg">
                
            </div>
            <br>
            <h3>2. ความเร็วชัตเตอร์</h3>
            ทั้งความเร็วชัตเตอร์ และรูรับแสง ทั้งคู่ต่างทำหน้าที่ควบคุม และกำหนดปริมาณแสงที่เข้ามาในกล้อง
            แต่ทั้งคู่ก็มีจุดมุ่งหมายในการทำงานที่ต่างกัน
            ความเร็วชัตเตอร์จะเกี่ยวข้องกับการจับการเคลื่อนที่ของวัตถุต้นแบบ และ รูรับแสงจะช่วยทำให้ภาพมีมิติตื้นลึก
            ดังนั้นต้องมีเป้าหมายว่า อยากได้ภาพแบบไหนไว้ในใจ
            แล้วจึงค่อย ๆ ปรับสองค่านี้ ตามลักษณะที่วางแผนไว้ เช่นอยากจะได้ภาพ portrait หน้าชัดหลังเบลอ คมชัด
            หรือถ่ายทิวทัศน์ เพื่อให้เห็นรายละเอียดชัดทั้งภาพ หรือ
            น้ำตกที่ตกลงมาเป็นเส้นสาย ก็ปรับค่าตามความเหมาะสมได้ ซึ่งเราจะมาดูต่อไปว่า แล้วตั้งค่าสองค่านี้อย่างไร
            <br>
            <div class="main-image">
                <img class="image" src="../img/setting_06.jpg">
                <img class="image" src="../img/setting_05.jpg">
                
            </div>
            <br>
            <h3>3. ความเร็วชัตเตอร์ : ช้า = ไฟเป็นเส้น เร็ว = หยุดการเคลื่อนไหว</h3>
            หลัก ๆ แล้วความเร็วชัตเตอร์ ก็คือการจับการเคลื่อนที่ คือ ถ้าต้องการเป็นทิศทางการเคลื่อนที่ เช่น
            น้ำตกเป็นเส้น แสงไฟเป็นเส้น ฟ้าเป็นเส้น ก็ให้ใช้ความเร็ซชัตเตอร์ที่ช้า
            แต่ถ้าอยากจะหยุดการเคลื่อนไหวของวัตถุ เช่น ถ่ายภาพกระโดดน้ำกระเซ็นเป็นหยด นักเทนนิสที่กำลังหวดลูก
            หรือจังหวะการกระโดดของสัตว์เลี้ยง ก็ตั้งค่าความเร็วชัตเตอร์ให้เร็ว เพื่อหยุดการเคลื่อนไหว
            <br>
            <div class="main-image">
                <img class="image" src="../img/setting_04.jpg">
                <img class="image" src="../img/setting_07.jpg">
                
            </div>
            <br>
            <h3>4. รูรับแสง</h3>
            นึกถึงภาพที่ทุกอย่างอยู่ในระนาบเดียวกัน ทั้งตัวเเบบเเละพื้นหลัง เเต่ค่า f
            จะทำให้มีบางจุดที่จะดูเหมือนอยู่ด้านหน้า เเละชัดกว่าจุดอื่น
            เเละส่วนอื่นจะถูกลดความสำคัญให้เบลอไปที่เค้าเรียกว่า ระยะชัดลึกชัดตื้น (depth of field)
            โดยถ้า f-ตัวเลขที่มีค่ามาก ภาพก็จะมีโฟกัสหลายจุดมากขึ้น ภาพชัดกว้างขึ้น เเละคมขึ้น จนชัดทั้งภาพ
            เช่นการถ่ายภาพทิวทัศน์ การถ่ายภาพบุคคลเเบบหมู่ในทางตรงกันข้าม f-ตัวเลขที่มีค่าน้อย
            จุดโฟกัสก็จะมีบริเวณที่น้อยลง ระยะที่อยู่ห่างออกจากจุดโฟกัส
            ก็จะเบลอออกไป
            ใช้กับภาพที่ต้องการให้พื้นหลังเบลอเช่นการถ่ายภาพบุคคลที่ตัวเเบบมีเพียงคนเดียวเเต่ก็ขึ้นอยู่กับการดีไซน์ภาพว่าต้องการอยากให้ภาพออกมาแบบไหน
            <br>
            <div class="main-image">
                <img class="image" src="../img/setting_08.jpg">
                <img class="image" src="../img/setting_09.jpg">
                
            </div>
            <br>
            <h3>5. ฝึกมองภาพ ฝึกมองเฟรม</h3>
            ฝึกการมองภาพโดยให้มีสัดส่วน มีการจัดวางองค์ประกอบ การวางจุดสมดุล หรือการใช้สัดส่วนการจัดองค์ประกอบต่าง ๆ
            รวมทั้ง การมองเพื่อสร้างกรอบให้ภาพ อาจจะขยับ เคลื่อนที่รอบๆตัวเเบบ เพื่อลองหามุม หรือจุดที่สร้างกรอบภาพ
            หรือให้องค์ประกอบที่มีบังบางส่วนที่ไม่เข้ากันออกได้เช่นกัน
            <br>
            การตีกรอบให้ภาพ จะช่วยให้ความสนใจถูกจำกัดในบริเวณที่กำหนดไว้ ดังนั้นจะช่วยได้มากเลยนะ ถ้าต้องการให้ความสนใจ
            มุ่งไปยังจุดโฟกัส ก็จะทำให้ตัวเเบบโดดเด่นเเละทำให้ภาพดูน่าสนใจขึ้นได้
            <br>
            <div class="main-image">
                <img class="image" src="../img/setting_10.jpg">
                <img class="image" src="../img/setting_11.jpg">
                
            </div>
            <br>
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