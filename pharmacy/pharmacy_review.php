<?php
    include 'startsession.php';
    include 'redirect_index_if_not_loggedin.php';
?>
<!DOCTYPE html>
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pharmacy Profile | Pharmacy</title>
    <link rel="stylesheet" href="css/stylespharmacyreview.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="main-box">
    <?php include 'selleroptions.php'?>
        <div id="seller-profile">
            <div class="greet">
                <h2>Reviews Page</h2>
            </div>
            <div id="stats">
                    <div class="values">
                        <h3>User Rating</h3>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <p class="content">4.1 average based on 254 reviews.</p>
                        <div class="row">
                            <div class="side">
                              <div>5 star</div>
                            </div>
                            <div class="middle">
                              <div class="bar-container">
                                <div class="bar-5"></div>
                              </div>
                            </div>
                            <div class="side right">
                              <div>150</div>
                            </div>
                            <div class="side">
                              <div>4 star</div>
                            </div>
                            <div class="middle">
                              <div class="bar-container">
                                <div class="bar-4"></div>
                              </div>
                            </div>
                            <div class="side right">
                              <div>63</div>
                            </div>
                            <div class="side">
                              <div>3 star</div>
                            </div>
                            <div class="middle">
                              <div class="bar-container">
                                <div class="bar-3"></div>
                              </div>
                            </div>
                            <div class="side right">
                              <div>15</div>
                            </div>
                            <div class="side">
                              <div>2 star</div>
                            </div>
                            <div class="middle">
                              <div class="bar-container">
                                <div class="bar-2"></div>
                              </div>
                            </div>
                            <div class="side right">
                              <div>6</div>
                            </div>
                            <div class="side">
                              <div>1 star</div>
                            </div>
                            <div class="middle">
                              <div class="bar-container">
                                <div class="bar-1"></div>
                              </div>
                            </div>
                            <div class="side right">
                              <div>20</div>
                            </div>
                      </div>           
                  </div>
            </div>

            <h2 class="interlude">Site Reviews</h2> 
            <div id="table-border">
                <div class="review">
                    <h3 class="name">Frank Anthony</h3>
                    <div>
                        <span class="rating">                        
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span></span>
                        <span class="date">Two weeks ago</span>
                    </div>
                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed euismod nisi porta lorem.</p>
                    <hr>
                </div>
                <div class="review">
                    <h3 class="name">Frank Anthony</h3>
                    <div>
                        <span class="rating">                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span></span>
                        <span class="date">Two weeks ago</span>
                    </div>
                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed euismod nisi porta lorem.</p>
                    <hr>
                </div>
                <div class="review">
                    <h3 class="name">Frank Anthony</h3>
                    <div>
                        <span class="rating">                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span></span>
                        <span class="date">Two weeks ago</span>
                    </div>
                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed euismod nisi porta lorem.</p>
                    <hr>
                </div>
                <div class="review">
                    <h3 class="name">Frank Anthony</h3>
                    <div>
                        <span class="rating">                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span></span>
                        <span class="date">Two weeks ago</span>
                    </div>
                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed euismod nisi porta lorem.</p>
                    <hr>
                </div>
            </div>            
        </div>
        <!--<div id="seller-performance"></div>-->
    </div>
</body>   
