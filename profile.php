<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            padding: 10px;
            background-color: rgb(255, 255, 255);
        }

        header {
            /* background-color: gray; */
            position: fixed;
            top: 0;
            height: 80px;
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            gap: 200px;
            padding: 0 25px;
            /* border-bottom: 1px solid rgba(0, 0, 0, 0.158); */
        }

        .logo {
            /* background-color: azure; */
            text-transform: capitalize;
        }

        #img1 {
            /* background-image: url(stdy\ img.jpeg); */
            height: 50px;
            width: 50px;
        }

        .logo h2 {
            /* font-size: 40px; */
            transition: all ease .5s;
            cursor: pointer;
            color: black;
            font-weight: 500;
        }

        .logo h2:hover {
            scale: .9;
            color: rgba(0, 0, 0, 0.61);
        }

        .logo h2 #dot {
            color: rgb(211, 60, 60);
            font-weight: 600;
        }

        .item1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 60px;
            padding: 5px;
            height: 100%;
        }

        .item1 a {
            text-decoration: none;
            color: rgba(0, 0, 0, 0.733);
            /* background-color: aqua; */
        }

        .item1 a h3 {
            text-transform: capitalize;
            font-size: 18px;
            transition: all ease .2s;

        }

        .item1 a h3 span {
            font-size: 20px;
            color: rgb(211, 60, 60);
            font-weight: 600;
        }

        .item1 a>h3:hover {
            border-bottom: 2px solid rgb(211, 60, 60);
            scale: 1.1;
            color: rgb(211, 60, 60);
            font-weight: 500;
        }

        .cont {
            /* display: flex;
         align-items: center; */
            margin-top: 10px;
            padding: 8px 15px;
            border: 1px solid rgb(211, 60, 60);
            border-radius: 10px;
            outline: none;
            text-decoration: none;
            /* margin-left: 30px; */
            /* background-color: wheat; */
        }

        .cont h3 {
            text-decoration: none;
            text-transform: capitalize;
            color: black;
        }

        .cont h3 #dot {
            color: rgb(211, 60, 60);
            font-weight: 600;
        }

        .cont a {
            text-decoration: none;
            color: black;
        }

        .cont:hover {
            transition: all .5s;
            background-color: rgb(211, 60, 60);
            cursor: pointer;
        }

        .cont:hover>a>h3 {
            color: rgb(255, 255, 255);
            /* background-color: rgb(211, 60, 60); */
            text-decoration: none;
            transition: all .5s;
        }

        .cont:hover>a>h3>#dot {
            color: rgb(255, 255, 255);
            /* background-color: rgb(211, 60, 60); */
            text-decoration: none;
            transition: all .5s;
        }
    </style>
</head>

<body>
    <?php 
          session_Start();
    ?>
    <header>
        <div class="logo"><?php if (!empty($_SESSION['image'])) {?>
    <p>Profile Image: <img src='images/<?php echo $_SESSION['image'];?>' alt='Profile Image' style="height: 200px;"></p>
<?php } else {?>
    <!-- <p>No image uploaded</p> -->
<?php }?>
            <h2><span id="dot">
                    <?php echo $_SESSION['fname']  ?>
                    <?php echo $_SESSION['lname']  ?>
                </span></h2>
        </div>
        <div class="item1">
            <a href="#">
                <h3><span id="dot">d</span>ashbord</h3>
            </a>
            <a href="#">
                <h3><span id="dot">c</span>ourse</h3>
            </a>
            <a href="#">
                <h3><span id="dot">s</span>ubscription</h3>
            </a>
            <div class="cont">
                <a href="#" target="_blank">
                    <h3><span id="dot">h</span>elp</h3>
                </a>
            </div>
    </header>
 
</body>

</html>