<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link type="text/css" href="CSS/main.css" rel="stylesheet" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
            crossorigin="anonymous"
        />
        <script src="JS/jquery-3.5.1.min.js"></script>
        <script src="JS/multislider.min.js"></script>
        <title>Demo</title>
    </head>

    <body>
        <!--Navbar-->
        <nav>
            <!--Navbar has two part the top one and the bottom one-->
            <!--Here is top one and in this part I put logo, my account part, and the shopping cart-->
            <div class="navbar-top">
                <div>
                    <button id="menuButton"><i class="fas fa-bars"></i></button>
                    <!--Logo-->
                    <a href="index.html">
                        <h2 class="logo">Kyekx Stores</h2>
                    </a>
                </div>
                <div>
                    <!--My account part-->
                    <div class="account">
                        <a href="http://localhost/JS-Shopping-Cart-main/index.php">
                            <button class="account-btn">
                                <i class="fas fa-user-alt"></i>
                            </button>
                            <span class="account-text">My account</span>
                        </a>
                        <!--When we click the btnShowAccountInfo this section will be displayed-->
                    </div>
                    <!--Shopping cart-->
                    <div class="shopping-cart">
                        <div class="sum-prices">
                            <!--Shopping cart logo-->
                            <i
                                class="fas fa-shopping-cart shoppingCartButton"
                            ></i>
                            <!--The total prices of products in the shopping cart -->
                            <h6 id="sum-prices"></h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navbar bottom part -->
            <!-- Here I put the links to the other pages or nav links -->
            <div class="navbar" id="navbar">
                <div class="links">
                    <ul>
                        <li class="nav-links">
                            <a href="laptop.html" class="link">Laptops</a>
                        </li>
                        <li class="nav-links">
                            <a href="phone.html" class="link">Mobile Phones</a>
                        </li>
                        <li class="nav-links">
                            <a href="gaming.html" class="link">Gaming</a>
                        </li>
                        
                        <li class="nav-links">
                            <a href="#" class="link">Sound</a>
                        </li>
                        <li class="nav-links">
                            <a href="#" class="link">About</a>
                        </li>
                    </ul>
                </div>
                <!-- The searchbar which will be in the right side of the links -->
                <div class="searchbar">
                    <form action="#">
                        <input type="search" placeholder="Search for Items" />
                        <i class="fa fa-search" id="search-icon"></i>
                    </form>
                </div>
            </div>
            <div class="producstOnCart hide">
                <div class="overlay"></div>
                <div class="top">
                    <button id="closeButton">
                        <i class="fas fa-times-circle"></i>
                    </button>
                    <h3>Cart</h3>
                </div>
                <ul id="buyItems">
                    <h4 class="empty">Your shopping cart is empty</h4>
                    <!-- <li class="buyItem">
						<img src="Images/producs-images/Mobiles/galaxynote10.png">
						<div>
							<h5>Products Name</h5>
							<h6>$199</h6>
							<div>
								<button>-</button>
								<span class="countOfProduct">1</span>
								<button>+</button>
							</div>
						</div>
					</li> -->
                </ul>
                <button class="btn checkout hidden">Check out</button>
            </div>
        </nav>
        <header id="hearderSlide">
            <div class="MS-content">
                <a href="detail_page.html" class="item">
                    <img src="https://www.androidcentral.com/sites/androidcentral.com/files/styles/large_wm_brw/public/article_images/2020/10/xps-13-2in1-7390-1.jpg" />
                </a>
                <a href="#" class="item">
                    <img src="https://cdn.pocket-lint.com/r/s/1200x/assets/images/158447-phones-review-apple-iphone-13-pro-max-review-image4-chbmbqtoy3.jpg" />
                </a>
                <a href="detail_page.html" class="item">
                    <img src="https://www.teknofilo.com/wp-content/uploads/2020/11/PS5-Teknofilo.jpg" />
                </a>
                <a href="detail_page.html" class="item">
                    <img src="https://img10.joybuy.com/N0/s560x560_jfs/t1/19593/21/11346/126356/5c90a642E71642abe/799141761735f3b4.jpg.dpg" />
                </a>
                <a href="detail_page.html" class="item">
                    <img src="https://s01.sgp1.cdn.digitaloceanspaces.com/article/108886-pmzafajcmf-1545729854.jpg" />
                </a>
            </div>
            <div class="MS-controls">
                <button class="MS-right">
                    <i class="fas fa-chevron-right fa-3x"></i>
                </button>
                <button class="MS-left">
                    <i class="fas fa-chevron-left fa-3x"></i>
                </button>
            </div>
        </header>
        <main>
            <section class="main-section">
                <div class="product-container">
                    <h3>Student laptops</h3>
                    <div class="products">
                        <div class="product">
                            <div class="product-under">
                                <figure class="product-image">
                                    <img
                                        src="https://images.pcliquidations.com/images/isaac/93/93630t550.jpg"
                                        alt="popular laptops and computers"
                                    />
                                    <div class="product-over">
                                        <button
                                            class="btn btn-small addToCart"
                                            data-product-id="1"
                                        >
                                            <i class="fas fa-cart-plus"></i>Add
                                            to cart
                                        </button>
                                        <a
                                            href="detail_page.html"
                                            class="btn btn-small"
                                            >More Info</a
                                        >
                                    </div>
                                </figure>
                                <div class="product-summary">
                                    <h4 class="productName">HP Elitebook 820 G1 Laptop</h4>
                                    <span class="stars"></span>
                                    <p>
                                       Intel core i3, 4 GB RAM, 500 GB Storage
                                       
                                    </p>
                                    <h6 class="price">
                                        Ksh<span class="priceValue"> 25,000</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product-under">
                                <figure class="product-image">
                                    <img
                                        src="https://zurimall.co.ke/wp-content/uploads/2021/08/Artboard-1-1-13.jpg"
                                        alt="popular labtops and computers"
                                    />
                                    <div class="product-over">
                                        <button
                                            class="btn btn-small addToCart"
                                            data-product-id="2"
                                        >
                                            <i class="fas fa-cart-plus"></i>Add
                                            to cart
                                        </button>
                                        <a
                                            href="detail_page.html"
                                            class="btn btn-small"
                                            >More Info</a
                                        >
                                    </div>
                                </figure>
                                <div class="product-summary">
                                    <h4 class="productName">HP Elitebook 820</h4>
                                    <span class="stars"></span>
                                    <p>
                                        Intel core i7, 8 GB RAM 500 GB Storage
                                    </p>
                                    <h6 class="price">
                                        Ksh<span class="priceValue"> 34,999</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product-under">
                                <figure class="product-image">
                                    <img
                                        src="https://resetsystems.in/wp-content/uploads/2019/08/Ban-Laptop-Dell-Latitude-E7450-Xach-Tay-Gia-Re-Cho-Sinh-Vien-Cau-Hinh-Core-i5-i7-Ram-4Gb-8Gb-16Gb-O-Cung-HDD-SSD-128Gb-256Gb-320Gb-500Gb-1000Gb-Card-Man-Hinh-VGA-intel-hd-g-e1592583024774.png"
                                        alt="popular labtops and computers"
                                    />
                                    <div class="product-over">
                                        <button
                                            class="btn btn-small addToCart"
                                            data-product-id="3"
                                        >
                                            <i class="fas fa-cart-plus"></i>Add
                                            to cart
                                        </button>
                                        <a
                                            href="detail_page.html"
                                            class="btn btn-small"
                                            >More Info</a
                                        >
                                    </div>
                                </figure>
                                <div class="product-summary">
                                    <h4 class="productName">Dell Latitude E7450</h4>
                                    <span class="stars"></span>
                                    <p>
                                         Intel core i5, 8 GB RAM 500 GB Storage
                                    </p>
                                    <h6 class="price">
                                        Ksh<span class="priceValue"> 31,999</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product-under">
                                <figure class="product-image">
                                    <img
                                        src="https://latalata.ng/image/cache/catalog/Product%20images/Kaybec/laptop/--7400-700x700.jpg"
                                        alt="popular labtops and computers"
                                    />
                                    <div class="product-over">
                                        <button
                                            class="btn btn-small addToCart"
                                            data-product-id="4"
                                        >
                                            <i class="fas fa-cart-plus"></i>Add
                                            to cart
                                        </button>
                                        <a
                                            href="detail_page.html"
                                            class="btn btn-small"
                                            >More Info</a
                                        >
                                    </div>
                                </figure>
                                <div class="product-summary">
                                    <h4 class="productName">Dell latitude 7400</h4>
                                    <span class="stars"></span>
                                    <p>
                                        Intel core i7,8th Generation, 8 GB RAM 256 SSD
                                    </p>
                                    <h6 class="price">
                                        Ksh<span class="priceValue"> 75,000</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main-section">
                <div class="pop-mobiles">
                    <div class="pop-mobiles-1">
                        <figure>
                            <img
                                src="https://bgr.com/wp-content/uploads/2021/04/iphone-13-design-schematic-3d-leak-1.jpg?quality=70&strip=all&w=834"
                            />
                        </figure>
                        <div>
                            <h2>IPhone 13 Pro Max</h2>
                            <p>
                            Processor Apple A15 Bionic, 128 GB Storage
        
                            </p>
                            <h4>Ksh 182,000</h4>
                            <a href="detail_page.html" class="btn"
                                >Buy now<i class="fas fa-angle-right"></i
                            ></a>
                        </div>
                    </div>
                    <h3>Hot Deals</h3>
                    <div class="pop-mobiles-2">
                        <ul class="products">
                            <li class="product">
                                <div class="product-under">
                                    <figure class="product-image">
                                        <img
                                            src="https://stewancomputers.co.ke/wp-content/uploads/2021/10/Oppo-A54.jpg"
                                            
                                            alt="popular mobiles"
                                        />
                                        <div class="product-over">
                                            <button
                                                class="btn btn-small addToCart"
                                                data-product-id="5"
                                            >
                                                <i class="fas fa-cart-plus"></i
                                                >Add to cart
                                            </button>
                                            <a
                                                href="detail_page.html"
                                                class="btn btn-small"
                                                >More Info</a
                                            >
                                        </div>
                                    </figure>
                                    <div class="product-summary">
                                        <h4 class="productName">Oppo A54</h4>
                                        <p> 6.5-inch, 128 GB ROM + 4 GB RAM, 5000mAh Battery</p>
                                        <span class="stars"></span>
                                        <h4 class="price">
                                            Ksh<span class="priceValue"
                                                >25,000</span
                                            >
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-under">
                                    <figure class="product-image">
                                        <img
                                            src="https://www.humtechke.com/wp-content/uploads/2021/04/Oppo-Reno-5F-Screen-Replacement-600x595.jpg"
                                            alt="popular mobiles"
                                        />
                                        <div class="product-over">
                                            <button
                                                class="btn btn-small addToCart"
                                                data-product-id="6"
                                            >
                                                <i class="fas fa-cart-plus"></i
                                                >Add to cart
                                            </button>
                                            <a
                                                href="detail_page.html"
                                                class="btn btn-small"
                                                >More Info</a
                                            >
                                        </div>
                                    </figure>
                                    <div class="product-summary">
                                        <h4 class="productName">Oppo Reno 5F</h4>
                                        <p>8 GB RAM 128 GB ROM</p>
                                        <span class="stars"></span>
                                        <h4 class="price">
                                            Ksh<span class="priceValue">29,500</span>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-under">
                                    <figure class="product-image">
                                        <img
                                            src="https://fdn2.gsmarena.com/vv/bigpic/tecno-camon-18-p.jpg"
                                            alt="popular mobiles"
                                        />
                                        <div class="product-over">
                                            <button
                                                class="btn btn-small addToCart"
                                                data-product-id="7"
                                            >
                                                <i class="fas fa-cart-plus"></i
                                                >Add to cart
                                            </button>
                                            <a
                                                href="detail_page.html"
                                                class="btn btn-small"
                                                >More Info</a
                                            >
                                        </div>
                                    </figure>
                                    <div class="product-summary">
                                        <h4 class="productName">Tecno camon 18</h4>
                                        <p> 6.6-inch,64 GB + 4 GB RAM,5000 mAh Battery</p>
                                        <span class="stars"></span>
                                        <h4 class="price">
                                            Ksh<span class="priceValue">37,000</span>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-under">
                                    <figure class="product-image">
                                        <img
                                            src="https://gadgetsleo.com/wp-content/uploads/2020/08/Samsung-Galaxy-A12-Black-2.jpg.webp"
                                            alt="popular mobiles"
                                        />
                                        <div class="product-over">
                                            <button
                                                class="btn btn-small addToCart"
                                                data-product-id="8"
                                            >
                                                <i class="fas fa-cart-plus"></i
                                                >Add to cart
                                            </button>
                                            <a
                                                href="detail_page.html"
                                                class="btn btn-small"
                                                >More Info</a
                                            >
                                        </div>
                                    </figure>
                                    <div class="product-summary">
                                        <h4 class="productName">Samsung A12</h4>
                                        <p> 6.5-inch,64 GB+4 GB RAM,5000 mAh Battery</p>
                                        <span class="stars"></span>
                                        <h4 class="price">
                                            Ksh<span class="priceValue">16,999</span>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-under">
                                    <figure class="product-image">
                                        <img
                                            src="https://gadgetsleo.com/wp-content/uploads/2021/03/Samsung-Galaxy-A52-8GB-RAM-Awesome-Violet.jpg.webp"
                                            alt="popular mobiles"
                                        />
                                        <div class="product-over">
                                            <button
                                                class="btn btn-small addToCart"
                                                data-product-id="9"
                                            >
                                                <i class="fas fa-cart-plus"></i
                                                >Add to cart
                                            </button>
                                            <a
                                                href="detail_page.html"
                                                class="btn btn-small"
                                                >More Info</a
                                            >
                                        </div>
                                    </figure>
                                    <div class="product-summary">
                                        <h4 class="productName">Samsung A52</h4>
                                        <p> 6.5-inch,8 GB RAM 64 GB ROM, 5000mAh Battery</p>
                                        <span class="stars"></span>
                                        <h4 class="price">
                                            Ksh<span class="priceValue">44,999</span>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-under">
                                    <figure class="product-image">
                                        <img
                                            src="https://fdn2.gsmarena.com/vv/bigpic/infinix-note-11-pro.jpg"
                                            alt="popular mobiles"
                                        />
                                        <div class="product-over">
                                            <button
                                                class="btn btn-small addToCart"
                                                data-product-id="10"
                                            >
                                                <i class="fas fa-cart-plus"></i
                                                >Add to cart
                                            </button>
                                            <a
                                                href="detail_page.html"
                                                class="btn btn-small"
                                                >More Info</a
                                            >
                                        </div>
                                    </figure>
                                    <div class="product-summary">
                                        <h4 class="productName">Infinix Hot 11 Pro</h4>
                                        <p> 6.95-inch, 8GB RAM,64 GB Storage, 5000mAh Battery</p>
                                        <span class="stars"></span>
                                        <h4 class="price">
                                            Ksh<span class="priceValue">27,000</span>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>
        <p><a href="logout.php">Logout</a></p>
        <footer>
            <div class="footer-second">
                <div class="footer-column-1">
                    <h3>News</h3>
                    <a href="#"></a>
                    <a href="#">Latest news</a>
                    <a href="#">Upcoming Events</a>
                </div>
                <div class="footer-column-2">
                    <h3>Customer service</h3>
                    <a href="#">Contact</a>
                    <a href="#">Track your order</a>
                    <a href="#">terms of purchase</a>
                    <a href="#">common questions</a>
                </div>
                <div class="footer-column-3">
                    <h3>About us</h3>
                    <a href="#">Who we are</a>
                    <a href="#">Our Services</a>
                    <a href="#">Events</a>
                    <a href="#">Data protection</a>
                </div>
            </div>
            <ul class="footer-last">
                <li>
                    <p><i class="fab fa-cc-mastercard"></i></p>
                </li>
                <li>
                    <p><i class="fab fa-cc-paypal"></i></p>
                </li>
                <li>
                    <p><i class="fab fa-cc-visa"></i></p>
                </li>
                <li>
                    <p><i class="fab fa-cc-amex"></i></p>
                </li>
            </ul>
        </footer>
        <script src="JS/script.js"></script>
        <script src="shopping-cart.js"></script>
    </body>
</html>
