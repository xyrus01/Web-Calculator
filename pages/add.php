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
                    
                </div>
                <p style="color: #E05153;">Homepage</p>
            </a>

            <div id="selection">
                <a href="add.php">
                    <p>Add</p>
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

    <div id="form">
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
                        <input id="compute" type="submit" value="Compute Sum">
                    </form>
                </div>

                <div id="sum">
                    <p>Result:</p>
                    <div>
                        
                    </div>
                </div>
            </div>  
        </div>
        <div id="wallpaper">
            <img src="../images/galaxy.png" alt="">
        </div>
    </div>  
</body>
</html>