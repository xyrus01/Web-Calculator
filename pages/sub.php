<!DOCTYPE html>
<html>
<head>
    <style>
        *{
            font-family: Alata;
        }

        @font-face {
            font-family: Alata;
            src: url(../Alata.ttf);
        }
        h1{
            font-size: 70px;
            font-weight: normal;
            line-height: 90%;
            letter-spacing: -3%;

            margin: 0px;
            padding: 0px;
        }
        h2{
            font-size: 28px;
            font-weight: normal;

            margin: 0px;
            padding: 0px;
        }
        p{
            font-size: 18px;

            margin: 0px;
            padding: 0px;
        }
        body{
            margin: 0px;
            background-color: #191919;
            display: flex; 
            flex-direction: column;
            gap: 30px;
            align-items: center;
        }
        a{
            text-decoration: none;
        }


        .margin{
            margin: 0px 100px;
        }

/* HEADER */
        #header{
            width: 100%;
            height: 70px;
            background-color: #191919;

            display: flex;
            align-items: center;
            justify-content: center;
        }
        #header_margin{
            width: 100%;
            margin: 0px 100px;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        #icon_container{
            gap: 10px;

            display: flex;
            align-items: center;
        }
        #icon{
            width: 30px;
            height: 35px;
            background-color: #E05153;
            border-radius: 10px;

            display: flex;
            align-items: center;
            justify-content: center;
        }
        #selection{
            display: flex;
            justify-content: space-between;
            gap: 80px;
        }
        #selection p{
            color: #DBDBDB;
        }

        /* HOVER */
        #selection p:hover{
            color: #E05153;
            transform: scale(1.1);
        }
        #icon_container:hover{
            transform: scale(1.1);
        }

        #form{
            position: relative;
            width: 45%;
            height: 520px;
        }
        #form_container{
            width: 100%;
            height: 100%;
            display: flex;
            border-radius: 10px;

            overflow: hidden;
        }
        #form_section{
            width: 50%;
            height: 100%;
            background-color: #DBDBDB;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        #form_section .container{
            width: 90%;
            height: 80%;
            
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            gap: 5px;
        }
        #headings{
            width: 100%;
            height: 30%;
        }

        /* INPUT AREA */
        #input_area{
            width: 100%;
            height: 40%;

            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #input_area form{
            width: 100%;
            height: 100%;
            gap: 20px;

            display: flex;
            flex-direction: column;
            justify-content: space-between;

            
        }
        .numfield{
            width: 100%;
            height: 50px;
            box-sizing: border-box;
            font-size: 18px;
            background-color: #191919;
            color: #DBDBDB;

            padding: 0px 10px;

            border-radius: 10px;
            border: 0px;
        }
        #compute{
            width: 70%;
            height: 50px;
            font-size: 18px;
            background-color: #E05153;
            color: #DBDBDB;

            border-radius: 10px;
            border: 0px;

            cursor: pointer;
        }
        #compute:hover{
            transform: scale(1.05);
        }


        #result{
            width: 100%;
            height: 30%;
            gap: 10px;

            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: left;
        }
        #result div{
            width: 100%;
            height: 50px;

            background-color: #191919;  
            border-radius: 10px;
            

            display: flex;
            justify-content: left;
            align-items: center;
        }
        #result div p{
            padding: 0px 10px;
            color: #DBDBDB;
        }

        #wallpaper{
            width: 50%;
            height: 100%;

            display: flex;
            align-items: center;
            justify-content: center;

            overflow: hidden;
        }
        #wallpaper img{
            width: auto;
            height: 100%;
        }
        #other_op{
            position: absolute;
            left: 74%;
            bottom: 14%;

            width: 13%;
            height: 8%;

            color: #DBDBDB;

            display: flex;
            flex-direction: column;

            gap: 10px;
        }
        #ops{
            height: 100%;
            width: 100%;

            display: flex;
            justify-content: space-between;
            align-items: center;

            gap: 7px;
        }
        .operator_container{
            height: 100%;
            width: 33%;
            border-radius: 10px;
            overflow: hidden;

            background-color: #E05153;

            display: flex;
            justify-content: center;
            align-items: center;
        }
        .operator_container img{
            height: 100%;
            width: 100%;
        }

        .operator_container:hover{
            transform: scale(1.1);
        }
    </style>
    <title>Web Calculator | Subtraction</title>
</head>
<body>
<!------------ section: HEADER -------------->
    <div id="header">
        <div id="header_margin">
            <a href="../homepage.html" id="icon_container">
                <div id="icon">
                    <p style="color: #191919; font-size:24px">=</p>
                </div>
                <p style="color: #DBDBDB;">Homepage</p>
            </a>

            <div id="selection">
                <a href="add.php">
                    <p>Add</p>
                </a>
                <a href="sub.php">
                    <p style="color: #E05153;">Subtract</p>
                </a>
                <a href="mul.php">
                    <p>Multiply</p>
                </a>
                <a href="div.php">
                    <p>Divide</p>
                </a>
            </div>
        </div>
    </div>

<!------------ section: FORM -------------->
    <div id="form">
        <div id="form_container">
            <div id="form_section">
                <div class="container">
                    <div id="headings">
                        <h2>Difference Calculator</h2>
                        <p text-align: justify;>Find the difference between two numbers.</p>
                    </div>

    <!------------ section: PHP PROCESS -------------->
                    <div id="input_area">
                        <form action="" method="POST">
                            <input class="numfield" type="text" name="num1" placeholder="First Number">
                            <input class="numfield" type="text" name="num2" placeholder="Second Number">
                            <input id="compute" type="submit" name="compute" value="Compute Difference">
                        </form>
                    </div>
    <!-- CODE HERE -->
                    <?php
                    $diff = 0;

                    if (isset($_POST['compute'])){
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                        $diff = $num1 - $num2;
                    }
                    
                    ?>

                    <div id="result">
                        <p>Result:</p>
                        <div>
                            <p>
                                <?php
                                    echo $diff
                                ?>
                            </p>
                        </div>
                    </div>
                </div>  
            </div>

            <div id="wallpaper">
                <img src="../images/galaxy.png" alt="">
            </div>
        </div>
        </div>
            <div id="other_op">
                <p>Other Operators</p>
                <div id="ops">
                    <a href="add.php" class="operator_container">
                        <img src="../images/operators/add_white.svg">
                    </a>
                    <a href="mul.php" class="operator_container">
                        <img src="../images/operators/multiply_white.svg">
                    </a>
                    <a href="div.php" class="operator_container">
                        <img src="../images/operators/divide_white.svg">
                    </a>
                </div>
        </div>
    </div>  
</body>
</html>