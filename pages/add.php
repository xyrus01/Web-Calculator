<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Web Calculator | Addition</title>
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
                    <p style="color: #E05153;">Add</p>
                </a>
                <a href="sub.php">
                    <p>Subtract</p>
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
                        <h2>Addition Calculator</h2>
                        <p text-align: justify;>Combine two or more numbers into a sum</p>
                    </div>

    <!------------ section: PHP PROCESS -------------->
                    <div id="input_area">
                        <form action="" method="POST">
                            <input class="numfield" type="text" name="num1" placeholder="First Number">
                            <input class="numfield" type="text" name="num2" placeholder="Second Number">
                            <input id="compute" type="submit" name="compute" value="Compute Sum">
                        </form>
                    </div>
    <!-- CODE HERE -->
                    <?php
                    $sum = 0;

                    if (isset($_POST['compute'])){
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                        $sum = $num1 + $num2;
                    }
                    
                    ?>

                    <div id="result">
                        <p>Result:</p>
                        <div>
                            <p>
                                <?php
                                    echo $sum
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
                    <a href="sub.php" class="operator_container">
                        <img src="../images/operators/subtract_white.svg">
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