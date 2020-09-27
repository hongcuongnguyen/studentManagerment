<!DOCTYPE html>
<html lang="vi">
<head>
    <title>CSS Website Layout</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

/* Style the header */
        .header {
            background-color: #f1f1f1;
            padding: 5px;
            text-align: center;
        }

/* Style the top navigation bar */
        .topnav {
            overflow: hidden;
            background-color: #333;
        }

/* Style the topnav links */
        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

/* Change color on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
<?php
session_start();
$id = $_SESSION['userID'];
$position = $_SESSION['position']
?>
<div class="header">
    <h1>Student Management</h1>
</div>

<div class="topnav">
    <a href="studentView.php">Trang chủ</a>
    <a href="editStudent.php?id=<?php echo $id ?>&position=Student">Sửa thông tin</a>
    <a href="viewAllUsers.php?position=Student">Xem danh sách người dùng</a>
    <a href="listQuestions.php?position=Student">Xem danh sách bài tập</a>
    <a href="viewChallenge.php">Xem Challenge</a>
    <a href="listMessageReceive.php?id=<?php echo $id ?>&position=<?php echo $position ?>">Hộp thư đến</a>
    <a href="listMessageSend.php?id=<?php echo $id ?>&position=<?php echo $position ?>">Hộp thư đi</a>
    <a href="login.php">Đăng xuất</a>
</div>

</body>
</html>
