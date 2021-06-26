<!DOCTYPE html>
<html lang="en">
<head>
    <title>DecoGina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>



<body>

<header>
    <section class="container">
        <div class="row">
            <div class="left col-xl-8 col-lg-8 col-md-6 col-6">
                <img src="images/Logo.png" class="float-left" width="71" height="71" title="logo image"
                     alt="logo image">
                <nav class="top-menu float-left">
                    <ul>


                        <li><a href="#">HOME</a></li>
                        <li><a href="#">SHOP</a></li>
                        <li><a href="#">MAGAZINE</a></li>
                    </ul>
                </nav>
            </div>
            <div class="right ol-xl-4 col-lg-4 col-md-6 col-6 text-right">
                <a href="#" class="buy d-inline-block mr-3" title="Go To Shopping Cart"></a>
                <span class="fa fa-navicon"></span>

                <?php

                if(isset($_COOKIE["user"])){?>

                <a href="<?php echo"user/index.php"?>" class="login d-inline-block" title="login"> <?php echo $_COOKIE["user"]; }

                else{?>
                    <a href="<?php echo"login-1/login.php"?>" class="login d-inline-block" title="login">

                    <?php
                        echo 'LOGIN';
                    }
                    ?>

                    </a>
            </div>
        </div>
        <nav class="top-menu mobile-menu">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">SHOP</a></li>
                <li><a href="#">MAGAZINE</a></li>
            </ul>
        </nav>
    </section>
    <span class="clearfix"></span>
    <section class="container mt-3 search">
        <div class="row">
            <div class="search-box col-lg-9 col-md-7 col-12 position-relative">
                <form>
                    <input type="text" class="d-block w-100 border-0" placeholder="living room"/>
                    <div class="position-absolute title d-block">Powered by <span
                            class="font-weight-bold">Algolia</span>
                        <span class="logo-box d-inline-block"></span></div>
                    <button type="submit" class="border-0 position-absolute"></button>
                </form>
            </div>
            <div class="right-box col-lg-3 col-md-5 col-12">
                <form>
                    <select class="d-block w-100 border-0">
                        <option value="0">Best Match</option>
                        <option value="1">Best Match</option>
                        <option value="2">Best Match</option>
                    </select>
                </form>
            </div>
        </div>
    </section>
</header>
<div class="main mt-5">
    <section class="container filter">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="filter-box">
                    <span class="title d-block pb-3">Filter By</span>
                    <span class="fa fa-chevron-down float-right"></span>
                    <span class="clearfix"></span>
                </div>
                <ul class="filter-content">
                    <li class="ft">
                        <span class="text d-block float-left">Collection</span>
                        <span class="fa fa-chevron-down float-right"></span>
                        <span class="clearfix"></span>
                        <div class="show-box">
                            <ul>
                                <li><a href="#">collection</a></li>
                                <li><a href="#">collection</a></li>
                                <li><a href="#">collection</a></li>
                            </ul>

                        </div>
                    </li>
                    <li class="ft">
                        <span class="text d-block float-left">Color</span>
                        <span class="fa fa-chevron-down float-right"></span>
                        <span class="clearfix"></span>
                        <div class="show-box">
                            <ul>
                                <li><a href="#">collection</a></li>
                                <li><a href="#">collection</a></li>
                                <li><a href="#">collection</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="ft">
                        <span class="text d-block float-left">Category</span>
                        <span class="fa fa-chevron-down float-right"></span>
                        <span class="clearfix"></span>
                        <div class="show-box">
                            <ul>
                                <li><a href="#">collection</a></li>
                                <li><a href="#">collection</a></li>
                                <li><a href="#">collection</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="range position-relative">
                        <span>Price Range</span>
                            <div class="range">
                                <div class="sliderValue">
                                    <span>100</span>
                                </div>
                                <div class="field">
                                    <div class="value left">
                                        0$
                                    </div>
                                    <input type="range" min="0" max="999" value="100" steps="1">
                                    <div class="value right">
                                        1000
                                    </div>
                                </div>
                            </div>
                            <span class="fa fa-circle-o left position-absolute"></span>
                            <span class="fa fa-circle-o right position-absolute"></span>
                    </li>
                </ul>

            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 product">
                <img src="images/deco1.jpg" class="post-img" alt="coombes" title="coombes image">
                <div class="name">
                    <a href="#" class="d-block"><h2 class="float-left">Coombes</h2></a>
                    <span class="price float-right">29$</span>
                </div>
                <span class="clearfix"></span>
                <a href="#" class="d-block"><span class="d-block category">LOUNGE</span></a>
                <div class="ft-box">
                    <div class="rating float-left">
                        <form>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5"/>
                                <label for="star5" title="text"></label>
                                <input type="radio" id="star4" name="rate" value="4"/>
                                <label for="star4" title="text"></label>
                                <input type="radio" id="star3" name="rate" value="3"/>
                                <label for="star3" title="text"></label>
                                <input type="radio" id="star2" name="rate" value="2"/>
                                <label for="star2" title="text"></label>
                                <input type="radio" id="star1" name="rate" value="1"/>
                                <label for="star1" title="text"></label>
                            </div>
                        </form>
                        <span class="clearfix"></span>
                    </div>
                    <a href="#" class="d-block float-right" title="add to cart"><span
                            class="buy fa fa-cart-plus"></span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 product">
                <img src="images/deco2.jpg" class="post-img" alt="coombes" title="coombes image">
                <div class="name">
                    <a href="#" class="d-block"><h2 class="float-left">Keeve set</h2></a>
                    <span class="price float-right">29$</span>
                </div>
                <span class="clearfix"></span>
                <a href="#" class="d-block"><span class="d-block category">SOFA</span></a>
                <div class="ft-box">
                    <div class="rating float-left">
                        <form>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5"/>
                                <label for="star5" title="text"></label>
                                <input type="radio" id="star4" name="rate" value="4"/>
                                <label for="star4" title="text"></label>
                                <input type="radio" id="star3" name="rate" value="3"/>
                                <label for="star3" title="text"></label>
                                <input type="radio" id="star2" name="rate" value="2"/>
                                <label for="star2" title="text"></label>
                                <input type="radio" id="star1" name="rate" value="1"/>
                                <label for="star1" title="text"></label>
                            </div>
                        </form>
                        <span class="clearfix"></span>
                    </div>
                    <a href="#" class="d-block float-right" title="add to cart"><span
                            class="buy fa fa-cart-plus"></span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 product">
                <img src="images/deco3.jpeg" class="post-img" alt="coombes" title="coombes image">
                <div class="name">
                    <a href="#" class="d-block"><h2 class="float-left">Kappu</h2></a>
                    <span class="price float-right">1400$</span>
                </div>
                <span class="clearfix"></span>
                <a href="#" class="d-block"><span class="d-block category">BED</span></a>
                <div class="ft-box">
                    <div class="rating float-left">
                        <form>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5"/>
                                <label for="star5" title="text"></label>
                                <input type="radio" id="star4" name="rate" value="4"/>
                                <label for="star4" title="text"></label>
                                <input type="radio" id="star3" name="rate" value="3"/>
                                <label for="star3" title="text"></label>
                                <input type="radio" id="star2" name="rate" value="2"/>
                                <label for="star2" title="text"></label>
                                <input type="radio" id="star1" name="rate" value="1"/>
                                <label for="star1" title="text"></label>
                            </div>
                        </form>
                        <span class="clearfix"></span>
                    </div>
                    <a href="#" class="d-block float-right" title="add to cart"><span
                            class="buy fa fa-cart-plus"></span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 product">
                <img src="images/deco4.jpg" class="post-img" alt="coombes" title="coombes image">
                <div class="name">
                    <a href="#" class="d-block"><h2 class="float-left">Momo</h2></a>
                    <span class="price float-right">29$</span>
                </div>
                <span class="clearfix"></span>
                <a href="#" class="d-block"><span class="d-block category">CHELVES</span></a>
                <div class="ft-box">
                    <div class="rating float-left">
                        <form>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5"/>
                                <label for="star5" title="text"></label>
                                <input type="radio" id="star4" name="rate" value="4"/>
                                <label for="star4" title="text"></label>
                                <input type="radio" id="star3" name="rate" value="3"/>
                                <label for="star3" title="text"></label>
                                <input type="radio" id="star2" name="rate" value="2"/>
                                <label for="star2" title="text"></label>
                                <input type="radio" id="star1" name="rate" value="1"/>
                                <label for="star1" title="text"></label>
                            </div>
                        </form>
                        <span class="clearfix"></span>
                    </div>
                    <a href="#" class="d-block float-right" title="add to cart"><span
                            class="buy fa fa-cart-plus"></span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 product">
                <img src="images/deco5.jpeg" class="post-img" alt="coombes" title="coombes image">
                <div class="name">
                    <a href="#" class="d-block"><h2 class="float-left">Blanko</h2></a>
                    <span class="price float-right">29$</span>
                </div>
                <span class="clearfix"></span>
                <a href="#" class="d-block"><span class="d-block category">CONSOLE</span></a>
                <div class="ft-box">
                    <div class="rating float-left">
                        <form>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5"/>
                                <label for="star5" title="text"></label>
                                <input type="radio" id="star4" name="rate" value="4"/>
                                <label for="star4" title="text"></label>
                                <input type="radio" id="star3" name="rate" value="3"/>
                                <label for="star3" title="text"></label>
                                <input type="radio" id="star2" name="rate" value="2"/>
                                <label for="star2" title="text"></label>
                                <input type="radio" id="star1" name="rate" value="1"/>
                                <label for="star1" title="text"></label>
                            </div>
                        </form>
                        <span class="clearfix"></span>
                    </div>
                    <a href="#" class="d-block float-right" title="add to cart"><span
                            class="buy fa fa-cart-plus"></span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 product">
                <img src="images/deco6.jpeg" class="post-img" alt="coombes" title="coombes image">
                <div class="name">
                    <a href="#" class="d-block"><h2 class="float-left">Penemillè</h2></a>
                    <span class="price float-right">29$</span>
                </div>
                <span class="clearfix"></span>
                <a href="#" class="d-block"><span class="d-block category">TABLE & CHAIRS</span></a>
                <div class="ft-box">
                    <div class="rating float-left">
                        <form>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5"/>
                                <label for="star5" title="text"></label>
                                <input type="radio" id="star4" name="rate" value="4"/>
                                <label for="star4" title="text"></label>
                                <input type="radio" id="star3" name="rate" value="3"/>
                                <label for="star3" title="text"></label>
                                <input type="radio" id="star2" name="rate" value="2"/>
                                <label for="star2" title="text"></label>
                                <input type="radio" id="star1" name="rate" value="1"/>
                                <label for="star1" title="text"></label>
                            </div>
                        </form>
                        <span class="clearfix"></span>
                    </div>
                    <a href="#" class="d-block float-right" title="add to cart"><span
                            class="buy fa fa-cart-plus"></span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 product">
                <img src="images/deco7.jpg" class="post-img" alt="coombes" title="coombes image">
                <div class="name">
                    <a href="#" class="d-block"><h2 class="float-left">Nillè</h2></a>
                    <span class="price float-right">29$</span>
                </div>
                <span class="clearfix"></span>
                <a href="#" class="d-block"><span class="d-block category">SIDE TABLE</span></a>
                <div class="ft-box">
                    <div class="rating float-left">
                        <form>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5"/>
                                <label for="star5" title="text"></label>
                                <input type="radio" id="star4" name="rate" value="4"/>
                                <label for="star4" title="text"></label>
                                <input type="radio" id="star3" name="rate" value="3"/>
                                <label for="star3" title="text"></label>
                                <input type="radio" id="star2" name="rate" value="2"/>
                                <label for="star2" title="text"></label>
                                <input type="radio" id="star1" name="rate" value="1"/>
                                <label for="star1" title="text"></label>
                            </div>
                        </form>
                        <span class="clearfix"></span>
                    </div>
                    <a href="#" class="d-block float-right" title="add to cart"><span
                            class="buy fa fa-cart-plus"></span></a>
                </div>
            </div>
           <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12 product">
                <img src="images/5dd011ff79d75701fc035672.jpeg" class="post-img" alt="coombes" title="coombes image">
                <div class="name">
                    <a href="#" class="d-block"><h2 class="float-left">Coombes</h2></a>
                    <span class="price float-right">29$</span>
                </div>
                <span class="clearfix"></span>
                <a href="#" class="d-block"><span class="d-block category">LOUNGE</span></a>
                <div class="ft-box">
                    <div class="rating float-left">
                        <form>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5"/>
                                <label for="star5" title="text"></label>
                                <input type="radio" id="star4" name="rate" value="4"/>
                                <label for="star4" title="text"></label>
                                <input type="radio" id="star3" name="rate" value="3"/>
                                <label for="star3" title="text"></label>
                                <input type="radio" id="star2" name="rate" value="2"/>
                                <label for="star2" title="text"></label>
                                <input type="radio" id="star1" name="rate" value="1"/>
                                <label for="star1" title="text"></label>
                            </div>
                        </form>
                        <span class="clearfix"></span>
                    </div>
                    <a href="#" class="d-block float-right" title="add to cart"><span
                            class="buy fa fa-cart-plus"></span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 product">
                <img src="images/5dd011ff79d75701fc035672.jpeg" class="post-img" alt="coombes" title="coombes image">
                <div class="name">
                    <a href="#" class="d-block"><h2 class="float-left">Coombes</h2></a>
                    <span class="price float-right">29$</span>
                </div>
                <span class="clearfix"></span>
                <a href="#" class="d-block"><span class="d-block category">LOUNGE</span></a>
                <div class="ft-box">
                    <div class="rating float-left">
                        <form>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5"/>
                                <label for="star5" title="text"></label>
                                <input type="radio" id="star4" name="rate" value="4"/>
                                <label for="star4" title="text"></label>
                                <input type="radio" id="star3" name="rate" value="3"/>
                                <label for="star3" title="text"></label>
                                <input type="radio" id="star2" name="rate" value="2"/>
                                <label for="star2" title="text"></label>
                                <input type="radio" id="star1" name="rate" value="1"/>
                                <label for="star1" title="text"></label>
                            </div>
                        </form>
                        <span class="clearfix"></span>
                    </div>
                    <a href="#" class="d-block float-right" title="add to cart"><span
                            class="buy fa fa-cart-plus"></span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 product">
                <img src="images/5dd011ff79d75701fc035672.jpeg" class="post-img" alt="coombes" title="coombes image">
                <div class="name">
                    <a href="#" class="d-block"><h2 class="float-left">Coombes</h2></a>
                    <span class="price float-right">29$</span>
                </div>
                <span class="clearfix"></span>
                <a href="#" class="d-block"><span class="d-block category">LOUNGE</span></a>
                <div class="ft-box">
                    <div class="rating float-left">
                        <form>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5"/>
                                <label for="star5" title="text"></label>
                                <input type="radio" id="star4" name="rate" value="4"/>
                                <label for="star4" title="text"></label>
                                <input type="radio" id="star3" name="rate" value="3"/>
                                <label for="star3" title="text"></label>
                                <input type="radio" id="star2" name="rate" value="2"/>
                                <label for="star2" title="text"></label>
                                <input type="radio" id="star1" name="rate" value="1"/>
                                <label for="star1" title="text"></label>
                            </div>
                        </form>
                        <span class="clearfix"></span>
                    </div>
                    <a href="#" class="d-block float-right" title="add to cart"><span
                            class="buy fa fa-cart-plus"></span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12 product">
                <img src="images/5dd011ff79d75701fc035672.jpeg" class="post-img" alt="coombes" title="coombes image">
                <div class="name">
                    <a href="#" class="d-block"> <h2 class="float-left">Coombes</h2></a>
                    <span class="price float-right">29$</span>
                </div>
                <span class="clearfix"></span>
                <a href="#" class="d-block"><span class="d-block category">LOUNGE</span></a>
                <div class="ft-box">
                    <div class="rating float-left">
                        <form>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="text"></label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="text"></label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="text"></label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text"></label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text"></label>
                            </div>
                        </form>
                        <span class="clearfix"></span>
                    </div>
                    <a href="#" class="d-block float-right" title="add to cart"><span class="buy fa fa-cart-plus"></span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12 product">
                <img src="images/5dd011ff79d75701fc035672.jpeg" class="post-img" alt="coombes" title="coombes image">
                <div class="name">
                    <a href="#" class="d-block"> <h2 class="float-left">Coombes</h2></a>
                    <span class="price float-right">29$</span>
                </div>
                <span class="clearfix"></span>
                <a href="#" class="d-block"><span class="d-block category">LOUNGE</span></a>
                <div class="ft-box">
                    <div class="rating float-left">
                        <form>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="text"></label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="text"></label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="text"></label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text"></label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text"></label>
                            </div>
                        </form>
                        <span class="clearfix"></span>
                    </div>
                    <a href="#" class="d-block float-right" title="add to cart"><span class="buy fa fa-cart-plus"></span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12 product">
                <img src="images/5dd011ff79d75701fc035672.jpeg" class="post-img" alt="coombes" title="coombes image">
                <div class="name">
                    <a href="#" class="d-block"> <h2 class="float-left">Coombes</h2></a>
                    <span class="price float-right">29$</span>
                </div>
                <span class="clearfix"></span>
                <a href="#" class="d-block"><span class="d-block category">LOUNGE</span></a>
                <div class="ft-box">
                    <div class="rating float-left">
                        <form>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="text"></label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="text"></label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="text"></label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text"></label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text"></label>
                            </div>
                        </form>
                        <span class="clearfix"></span>
                    </div>
                    <a href="#" class="d-block float-right" title="add to cart"><span class="buy fa fa-cart-plus"></span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12 product">
                <img src="images/5dd011ff79d75701fc035672.jpeg" class="post-img" alt="coombes" title="coombes image">
                <div class="name">
                    <a href="#" class="d-block"> <h2 class="float-left">Coombes</h2></a>
                    <span class="price float-right">29$</span>
                </div>
                <span class="clearfix"></span>
                <a href="#" class="d-block"><span class="d-block category">LOUNGE</span></a>
                <div class="ft-box">
                    <div class="rating float-left">
                        <form>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="text"></label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="text"></label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="text"></label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text"></label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text"></label>
                            </div>
                        </form>
                        <span class="clearfix"></span>
                    </div>
                    <a href="#" class="d-block float-right" title="add to cart"><span class="buy fa fa-cart-plus"></span></a>
                </div>
            </div>-->
        </div>
    </section>
    <section class="container paging">
        <ul>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">8</a></li>
            <li><a href="#">9</a></li>
            <li><a href="#">10</a></li>
            <li class="next"><a href="#" class="fa fa-chevron-right"></a></li>
        </ul>
        <span class="clearfix"></span>
    </section>
</div>
<footer></footer>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script>
    // const slideValue = document.querySelector("span");
    // const inputSlider = document.querySelector("input");
    // inputSlider.oninput = (() = > {
    //     let value = inputSlider.value;
    // slideValue.textContent = value;
    // slideValue.style.left = (value / 2) + "%";
    // slideValue.classList.add("show");
    // })
    // ;
    // inputSlider.onblur = (() = > {
    //     slideValue.classList.remove("show");
    // })
    // ;
</script>
</body>
</html>