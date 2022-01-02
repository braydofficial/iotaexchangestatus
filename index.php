<?php
    $host = "localhost";
    $database = "db";
    $username = "user";
    $password = "pass";

    // Exchanges in DB:
    // Binance      1
    // Bitfinex     2
    // Bitvavo      3
    // bitpanda     4
    // Upbit        5
    // Indodax      6
    // KuCoin       7

    // Status in DB:
    // 0            down
    // 1            up

    // !-- MySQL Database table needs to be cleared every 24 hours trough a cron job or similar --!

    $voteMessage = "";

    $userIP = $_SERVER['REMOTE_ADDR'];

    // create connection
    $conn = mysqli_connect($host, $username, $password, $database);

    // check connection
    if($conn->connect_error) {
        die("Connection to database failed.");
    }

    // Check POST methods to track votes
    if(isset($_POST['binancedown'])) {
        $sql = "SELECT * FROM votes WHERE IP = INET_ATON('$userIP') AND Exchange = 1";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count == 0) {
            $sql = "INSERT INTO `votes` (`ID`, `IP`, `Exchange`, `Status`) VALUES (NULL, INET_ATON('$userIP'), '1', '0')";
            if($conn->query($sql) === TRUE) {
                $voteMessage = "You voted for Binance withdrawals being suspended!";
            } else {
                $voteMessage = "There was an issue with the database.";
            }
        } else {
            $voteMessage = "You already voted in the last 24 hours!";
        }
    } elseif (isset($_POST['binanceup'])) {
        $sql = "SELECT * FROM votes WHERE IP = INET_ATON('$userIP') AND Exchange = 1";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count == 0) {
            $sql = "INSERT INTO `votes` (`ID`, `IP`, `Exchange`, `Status`) VALUES (NULL, INET_ATON('$userIP'), '1', '1')";
            if($conn->query($sql) === TRUE) {
                $voteMessage = "You voted for Binance withdrawals being possible!";
            } else {
                $voteMessage = "There was an issue with the database.";
            }
        } else {
            $voteMessage = "You already voted in the last 24 hours!";
        }
    } elseif(isset($_POST['bitfinexup'])) {
        $sql = "SELECT * FROM votes WHERE IP = INET_ATON('$userIP') AND Exchange = 2";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count == 0) {
            $sql = "INSERT INTO `votes` (`ID`, `IP`, `Exchange`, `Status`) VALUES (NULL, INET_ATON('$userIP'), '2', '1')";
            if($conn->query($sql) === TRUE) {
                $voteMessage = "You voted for Bitfinex withdrawals being possible!";
            } else {
                $voteMessage = "There was an issue with the database.";
            }
        } else {
            $voteMessage = "You already voted in the last 24 hours!";
        }
    } elseif(isset($_POST['bitfinexdown'])) {
        $sql = "SELECT * FROM votes WHERE IP = INET_ATON('$userIP') AND Exchange = 2";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count == 0) {
            $sql = "INSERT INTO `votes` (`ID`, `IP`, `Exchange`, `Status`) VALUES (NULL, INET_ATON('$userIP'), '2', '0')";
            if($conn->query($sql) === TRUE) {
                $voteMessage = "You voted for Bitfinex withdrawals being suspended!";
            } else {
                $voteMessage = "There was an issue with the database.";
            }
        } else {
            $voteMessage = "You already voted in the last 24 hours!";
        }
    } elseif(isset($_POST['bitvavoup'])) {
        $sql = "SELECT * FROM votes WHERE IP = INET_ATON('$userIP') AND Exchange = 3";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count == 0) {
            $sql = "INSERT INTO `votes` (`ID`, `IP`, `Exchange`, `Status`) VALUES (NULL, INET_ATON('$userIP'), '3', '1')";
            if($conn->query($sql) === TRUE) {
                $voteMessage = "You voted for Bitvavo withdrawals being possible!";
            } else {
                $voteMessage = "There was an issue with the database.";
            }
        } else {
            $voteMessage = "You already voted in the last 24 hours!";
        }
    } elseif(isset($_POST['bitvavodown'])) {
        $sql = "SELECT * FROM votes WHERE IP = INET_ATON('$userIP') AND Exchange = 3";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count == 0) {
            $sql = "INSERT INTO `votes` (`ID`, `IP`, `Exchange`, `Status`) VALUES (NULL, INET_ATON('$userIP'), '3', '0')";
            if($conn->query($sql) === TRUE) {
                $voteMessage = "You voted for Bitvavo withdrawals being suspended!";
            } else {
                $voteMessage = "There was an issue with the database.";
            }
        } else {
            $voteMessage = "You already voted in the last 24 hours!";
        }
    } elseif(isset($_POST['bitpandaup'])) {
        $sql = "SELECT * FROM votes WHERE IP = INET_ATON('$userIP') AND Exchange = 4";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count == 0) {
            $sql = "INSERT INTO `votes` (`ID`, `IP`, `Exchange`, `Status`) VALUES (NULL, INET_ATON('$userIP'), '4', '1')";
            if($conn->query($sql) === TRUE) {
                $voteMessage = "You voted for bitpanda withdrawals being possible!";
            } else {
                $voteMessage = "There was an issue with the database.";
            }
        } else {
            $voteMessage = "You already voted in the last 24 hours!";
        }
    } elseif(isset($_POST['bitpandadown'])) {
        $sql = "SELECT * FROM votes WHERE IP = INET_ATON('$userIP') AND Exchange = 4";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count == 0) {
            $sql = "INSERT INTO `votes` (`ID`, `IP`, `Exchange`, `Status`) VALUES (NULL, INET_ATON('$userIP'), '4', '0')";
            if($conn->query($sql) === TRUE) {
                $voteMessage = "You voted for bitpanda withdrawals being suspended!";
            } else {
                $voteMessage = "There was an issue with the database.";
            }
        } else {
            $voteMessage = "You already voted in the last 24 hours!";
        }
    } elseif(isset($_POST['upbitup'])) {
        $sql = "SELECT * FROM votes WHERE IP = INET_ATON('$userIP') AND Exchange = 5";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count == 0) {
            $sql = "INSERT INTO `votes` (`ID`, `IP`, `Exchange`, `Status`) VALUES (NULL, INET_ATON('$userIP'), '5', '1')";
            if($conn->query($sql) === TRUE) {
                $voteMessage = "You voted for Upbit withdrawals being possible!";
            } else {
                $voteMessage = "There was an issue with the database.";
            }
        } else {
            $voteMessage = "You already voted in the last 24 hours!";
        }
    } elseif(isset($_POST['upbitdown'])) {
        $sql = "SELECT * FROM votes WHERE IP = INET_ATON('$userIP') AND Exchange = 5";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count == 0) {
            $sql = "INSERT INTO `votes` (`ID`, `IP`, `Exchange`, `Status`) VALUES (NULL, INET_ATON('$userIP'), '5', '0')";
            if($conn->query($sql) === TRUE) {
                $voteMessage = "You voted for Upbit withdrawals being suspended!";
            } else {
                $voteMessage = "There was an issue with the database.";
            }
        } else {
            $voteMessage = "You already voted in the last 24 hours!";
        }
    } elseif(isset($_POST['indodaxup'])) {
        $sql = "SELECT * FROM votes WHERE IP = INET_ATON('$userIP') AND Exchange = 6";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count == 0) {
            $sql = "INSERT INTO `votes` (`ID`, `IP`, `Exchange`, `Status`) VALUES (NULL, INET_ATON('$userIP'), '6', '1')";
            if($conn->query($sql) === TRUE) {
                $voteMessage = "You voted for Indodax withdrawals being possible!";
            } else {
                $voteMessage = "There was an issue with the database.";
            }
        } else {
            $voteMessage = "You already voted in the last 24 hours!";
        }
    } elseif(isset($_POST['indodaxdown'])) {
        $sql = "SELECT * FROM votes WHERE IP = INET_ATON('$userIP') AND Exchange = 6";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count == 0) {
            $sql = "INSERT INTO `votes` (`ID`, `IP`, `Exchange`, `Status`) VALUES (NULL, INET_ATON('$userIP'), '6', '0')";
            if($conn->query($sql) === TRUE) {
                $voteMessage = "You voted for Indodax withdrawals being suspended!";
            } else {
                $voteMessage = "There was an issue with the database.";
            }
        } else {
            $voteMessage = "You already voted in the last 24 hours!";
        }
    } elseif(isset($_POST['kucoinup'])) {
        $sql = "SELECT * FROM votes WHERE IP = INET_ATON('$userIP') AND Exchange = 7";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count == 0) {
            $sql = "INSERT INTO `votes` (`ID`, `IP`, `Exchange`, `Status`) VALUES (NULL, INET_ATON('$userIP'), '7', '1')";
            if($conn->query($sql) === TRUE) {
                $voteMessage = "You voted for KuCoin withdrawals being possible!";
            } else {
                $voteMessage = "There was an issue with the database.";
            }
        } else {
            $voteMessage = "You already voted in the last 24 hours!";
        }
    } elseif(isset($_POST['kucoindown'])) {
        $sql = "SELECT * FROM votes WHERE IP = INET_ATON('$userIP') AND Exchange = 7";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count == 0) {
            $sql = "INSERT INTO `votes` (`ID`, `IP`, `Exchange`, `Status`) VALUES (NULL, INET_ATON('$userIP'), '7', '0')";
            if($conn->query($sql) === TRUE) {
                $voteMessage = "You voted for KuCoin withdrawals being suspended!";
            } else {
                $voteMessage = "There was an issue with the database.";
            }
        } else {
            $voteMessage = "You already voted in the last 24 hours!";
        }
    }

    function get_percentage($total, $number) {
        if ( $total > 0 ) {
            return round(($number * 100) / $total, 2);
        } else {
            return 0;
        }
    }
?>

<html>
    <head>
        <title>IOTA exchange status</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <div class="header">
            <h1>IOTA Exchange Status</h1>
            <p>This simple website tracks if exhanges allow withdrawals of IOTA based on user votes. - Most exchanges don't allow me to check if withdrawals are enabled via their API, so this is the only solution I figured out.</p>

            <span class="voteMessage" style="color: #FFBF00">
            INFO: 
                <?php
                    echo $voteMessage;
                ?>
            </span>

        </div>
            <div class=content>
            <section id="binance">
                <h2><a href="https://www.binance.com">Binance</a></h2>
                <form method="post">
                    <input type="submit" name="binanceup" value="Withdrawal possible" style="background-color: #52B788">
                    <input type="submit" name="binancedown" value="Withdrawal suspended" style="background-color: #E63946">
                </form>
                <p>
                    <?php 
                        $sql = "SELECT * FROM votes WHERE Exchange = 1 AND Status = 0";
                        $result = mysqli_query($conn, $sql);
                        $downCount = mysqli_num_rows($result);
                        echo $downCount;
                    ?> votes for suspended withdrawals in the last 24 hours.<br>
                    <?php
                        $sql = "SELECT * FROM votes WHERE Exchange = 1 AND Status = 1";
                        $result = mysqli_query($conn, $sql);
                        $upCount = mysqli_num_rows($result);
                        echo $upCount;
                    ?> votes for possible withdrawals in the last 24 hours.<br>
                    <?php
                    // Check how many percent of users voted for suspended withdrawals
                        $total = $downCount + $upCount;
                        $percentage = get_percentage($total, $downCount);
                        echo "<br>Therefore, $percentage% voted for suspended withdrawals in the last 24 hours.<br>";
                        if($percentage >= 20) {
                            echo '<br><span style="color: #FFBF00; font-weight:500;">It is likely that withdrawals are suspended at the moment, because more than 20% voted for suspended withdrawals!</span>';
                        }
                    ?>
                </p>
            </section>
            
            <section id="bitfinex">
                <h2><a href="https://www.bitfinex.com/">Bitfinex</a></h2>
                <form method="post">
                    <input type="submit" name="bitfinexup" value="Withdrawal possible" style="background-color: #52B788">
                    <input type="submit" name="bitfinexdown" value="Withdrawal suspended" style="background-color: #E63946">
                </form>
                <p>
                    <?php 
                        $sql = "SELECT * FROM votes WHERE Exchange = 2 AND Status = 0";
                        $result = mysqli_query($conn, $sql);
                        $downCount = mysqli_num_rows($result);
                        echo $downCount;
                    ?> votes for suspended withdrawals in the last 24 hours.<br>
                    <?php
                        $sql = "SELECT * FROM votes WHERE Exchange = 2 AND Status = 1";
                        $result = mysqli_query($conn, $sql);
                        $upCount = mysqli_num_rows($result);
                        echo $upCount;
                    ?> votes for possible withdrawals in the last 24 hours.<br>
                    <?php
                    // Check how many percent of users voted for suspended withdrawals
                        $total = $downCount + $upCount;
                        $percentage = get_percentage($total, $downCount);
                        echo "<br>Therefore, $percentage% voted for suspended withdrawals in the last 24 hours.<br>";
                        if($percentage >= 20) {
                            echo '<br><span style="color: #FFBF00; font-weight:500;">It is likely that withdrawals are suspended at the moment, because more than 20% voted for suspended withdrawals!</span>';
                        }
                    ?>
                </p>
            </section>

            <section id="bitvavo">
                <h2><a href="https://bitvavo.com">Bitvavo</a></h2>
                <form method="post">
                    <input type="submit" name="bitvavoup" value="Withdrawal possible" style="background-color: #52B788">
                    <input type="submit" name="bitvavodown" value="Withdrawal suspended" style="background-color: #E63946">
                </form>
                <p>
                    <?php 
                        $sql = "SELECT * FROM votes WHERE Exchange = 3 AND Status = 0";
                        $result = mysqli_query($conn, $sql);
                        $downCount = mysqli_num_rows($result);
                        echo $downCount;
                    ?> votes for suspended withdrawals in the last 24 hours.<br>
                    <?php
                        $sql = "SELECT * FROM votes WHERE Exchange = 3 AND Status = 1";
                        $result = mysqli_query($conn, $sql);
                        $upCount = mysqli_num_rows($result);
                        echo $upCount;
                    ?> votes for possible withdrawals in the last 24 hours.<br>
                    <?php
                    // Check how many percent of users voted for suspended withdrawals
                        $total = $downCount + $upCount;
                        $percentage = get_percentage($total, $downCount);
                        echo "<br>Therefore, $percentage% voted for suspended withdrawals in the last 24 hours.<br>";
                        if($percentage >= 20) {
                            echo '<br><span style="color: #FFBF00; font-weight:500;">It is likely that withdrawals are suspended at the moment, because more than 20% voted for suspended withdrawals!</span>';
                        }
                    ?>
                </p>
            </section>

            <section id="bitpanda">
                <h2><a href="https://www.bitpanda.com">bitpanda</a></h2>
                <form method="post">
                    <input type="submit" name="bitpandaup" value="Withdrawal possible" style="background-color: #52B788">
                    <input type="submit" name="bitpandadown" value="Withdrawal suspended" style="background-color: #E63946">
                </form>
                <p>
                    <?php 
                        $sql = "SELECT * FROM votes WHERE Exchange = 4 AND Status = 0";
                        $result = mysqli_query($conn, $sql);
                        $downCount = mysqli_num_rows($result);
                        echo $downCount;
                    ?> votes for suspended withdrawals in the last 24 hours.<br>
                    <?php
                        $sql = "SELECT * FROM votes WHERE Exchange = 4 AND Status = 1";
                        $result = mysqli_query($conn, $sql);
                        $upCount = mysqli_num_rows($result);
                        echo $upCount;
                    ?> votes for possible withdrawals in the last 24 hours.<br>
                    <?php
                    // Check how many percent of users voted for suspended withdrawals
                        $total = $downCount + $upCount;
                        $percentage = get_percentage($total, $downCount);
                        echo "<br>Therefore, $percentage% voted for suspended withdrawals in the last 24 hours.<br>";
                        if($percentage >= 20) {
                            echo '<br><span style="color: #FFBF00; font-weight:500;">It is likely that withdrawals are suspended at the moment, because more than 20% voted for suspended withdrawals!</span>';
                        }
                    ?>
                </p>
            </section>

            <section id="upbit">
                <h2><a href="https://upbit.com">Upbit</a></h2>
                <form method="post">
                    <input type="submit" name="upbitup" value="Withdrawal possible" style="background-color: #52B788">
                    <input type="submit" name="upbitdown" value="Withdrawal suspended" style="background-color: #E63946">
                </form>
                <p>
                    <?php 
                        $sql = "SELECT * FROM votes WHERE Exchange = 5 AND Status = 0";
                        $result = mysqli_query($conn, $sql);
                        $downCount = mysqli_num_rows($result);
                        echo $downCount;
                    ?> votes for suspended withdrawals in the last 24 hours.<br>
                    <?php
                        $sql = "SELECT * FROM votes WHERE Exchange = 5 AND Status = 1";
                        $result = mysqli_query($conn, $sql);
                        $upCount = mysqli_num_rows($result);
                        echo $upCount;
                    ?> votes for possible withdrawals in the last 24 hours.<br>
                    <?php
                    // Check how many percent of users voted for suspended withdrawals
                        $total = $downCount + $upCount;
                        $percentage = get_percentage($total, $downCount);
                        echo "<br>Therefore, $percentage% voted for suspended withdrawals in the last 24 hours.<br>";
                        if($percentage >= 20) {
                            echo '<br><span style="color: #FFBF00; font-weight:500;">It is likely that withdrawals are suspended at the moment, because more than 20% voted for suspended withdrawals!</span>';
                        }
                    ?>
                </p>
            </section>

            <section id="indodax">
                <h2><a href="https://indodax.com/">Indodax</a></h2>
                <form method="post">
                    <input type="submit" name="indodaxup" value="Withdrawal possible" style="background-color: #52B788">
                    <input type="submit" name="indodaxdown" value="Withdrawal suspended" style="background-color: #E63946">
                </form>
                <p>
                    <?php 
                        $sql = "SELECT * FROM votes WHERE Exchange = 6 AND Status = 0";
                        $result = mysqli_query($conn, $sql);
                        $downCount = mysqli_num_rows($result);
                        echo $downCount;
                    ?> votes for suspended withdrawals in the last 24 hours.<br>
                    <?php
                        $sql = "SELECT * FROM votes WHERE Exchange = 6 AND Status = 1";
                        $result = mysqli_query($conn, $sql);
                        $upCount = mysqli_num_rows($result);
                        echo $upCount;
                    ?> votes for possible withdrawals in the last 24 hours.<br>
                    <?php
                    // Check how many percent of users voted for suspended withdrawals
                        $total = $downCount + $upCount;
                        $percentage = get_percentage($total, $downCount);
                        echo "<br>Therefore, $percentage% voted for suspended withdrawals in the last 24 hours.<br>";
                        if($percentage >= 20) {
                            echo '<br><span style="color: #FFBF00; font-weight:500;">It is likely that withdrawals are suspended at the moment, because more than 20% voted for suspended withdrawals!</span>';
                        }
                    ?>
                </p>
            </section>

            <section id="kucoin">
                <h2><a href="https://www.kucoin.com/">KuCoin</a></h2>
                <form method="post">
                    <input type="submit" name="kucoinup" value="Withdrawal possible" style="background-color: #52B788">
                    <input type="submit" name="kucoindown" value="Withdrawal suspended" style="background-color: #E63946">
                </form>
                <p>
                    <?php 
                        $sql = "SELECT * FROM votes WHERE Exchange = 7 AND Status = 0";
                        $result = mysqli_query($conn, $sql);
                        $downCount = mysqli_num_rows($result);
                        echo $downCount;
                    ?> votes for suspended withdrawals in the last 24 hours.<br>
                    <?php
                        $sql = "SELECT * FROM votes WHERE Exchange = 7 AND Status = 1";
                        $result = mysqli_query($conn, $sql);
                        $upCount = mysqli_num_rows($result);
                        echo $upCount;
                    ?> votes for possible withdrawals in the last 24 hours.<br>
                    <?php
                    // Check how many percent of users voted for suspended withdrawals
                        $total = $downCount + $upCount;
                        $percentage = get_percentage($total, $downCount);
                        echo "<br>Therefore, $percentage% voted for suspended withdrawals in the last 24 hours.<br>";
                        if($percentage >= 20) {
                            echo '<br><span style="color: #FFBF00; font-weight:500;">It is likely that withdrawals are suspended at the moment, because more than 20% voted for suspended withdrawals!</span>';
                        }
                    ?>
                </p>
            </section>
        </div>
        <div class="footer">
            <a href="https://www.buymeacoffee.com/thisdudeisvegan" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" alt="Buy Me A Coffee" style="height: 60px !important;width: 217px !important;" ></a>
            <p>
                <b>IOTA Donation address:</b><br>
                iota1qqm9k3003sszpq4d5n0yc89pk6dvpm3wvc7lexlzr2nwwrpaxaxdg7f85k6<br><br>
                Developed by <a href="https://github.com/braydofficial">thisdudeisvegan</a><br>
            </p>
        </div>
    </body>
</html>
