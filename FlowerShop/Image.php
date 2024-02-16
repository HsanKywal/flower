<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style type="text/css">
        .container{
            width: 100%;
            height: 100px;
        }
        .photologo{
            width: 100px;
            height: 100px;
            margin-left: 100px;
        }
        .logo{
            width: 40%;
            height: 100px;
            float: left;
        }
        .options{
            width: 60%;
            height: 100px;
            float: left;
        }
        ul {
        margin: 0;
        padding: 0;
        display: flex;
        position: absolute;
        top: 6%;
        left: 79.25%;
        transform: translate(-50%, -50%);
        }
        ul li {
        list-style: none;
        margin: 0 15px;
        position: relative; /* Added */
        }
        ul li a {
        position: relative; 
        display: block;
        width: 60px;
        height: 60px;
        padding: 7px;
        text-align: center;
        line-height: 63px;
        background: white;
        border-radius: 50%;
        font-size: 30px;
        color: #666;
        transition: .5s;
        text-decoration: none; /* Added */
        }
        ul li a i { /* Added */
          pointer-events: none; /* Ensure icon doesn't capture hover */
        }
        ul li a::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: paleturquoise;
        transition: .5s;
        transform: scale(.9);
        z-index: -1;
        }
        ul li a:hover::before {
        transform: scale(1.1);
        box-shadow: 0 0 15px pink;
        }
        ul li a:hover {
        color: pink;
        box-shadow: 0 0 5px pink;
        text-shadow: 0 0 5px pink;
        }
        label {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s ease;
            font-size: 12px;
            color: pink;
            pointer-events: none; /* Ensure label doesn't capture hover */
        }
        ul li:hover label {
            opacity: 1;
        }
        .labelforicon {
        text-decoration: none;
        font-size: 15px;
        color: black; /* Change label color to black */
        opacity: 0; /* Initially set opacity to 0 */
        transition: opacity 0.3s ease; /* Add transition effect */
        }
        ul li:hover .labelforicon {
            opacity: 1; /* Change opacity to 1 on hover */
        }
        body{
            background: rgba(218,218,218,1)
        }
        a{
            color: #111
        }
        .photo{
        position: absolute;
        transform: translate(-50%, -50%);
        display: block;
        }
        .photo img{
        width: 200px;
        height: 280px;
        object-fit: cover;
        box-shadow: 10px 15px 25px 0 rgba(0,0,0,.2);
        display: block;
        transition: all .5s cubic-bezier(0.645, 0.045, 0.355, 1);
        margin-top: -10px;
        }

        .photo:hover img{
        box-shadow: 1px 1px 10px 0 rgba(0,0,0,.1);
        }

        .photo .glow-wrap{
        overflow: hidden;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        margin-top: -10px;
        }

        .photo .glow{
        display: block;
        position:absolute;
        width: 40%;
        height: 200%;
        background: rgba(255,255,255,.2);
        top: 0;
        filter: blur(5px);
        transform: rotate(45deg) translate(-450%, 0);
        transition: all .5s cubic-bezier(0.645, 0.045, 0.355, 1);
        }

        .photo:hover .glow{
        transform: rotate(45deg) translate(450%, 0);
        transition: all 1s cubic-bezier(0.645, 0.045, 0.355, 1);
        }

        .photo:hover img,
        .photo:hover .glow-wrap{
        margin-top: 0;
        }

        h1{
        position: absolute;
        z-index: 1;
        transform: translate(-25%, -65%);
        font-family: 'Montserrat', sans-serif;
        margin: 0;
        line-height: 1.2;
        }
        .navspace{
            width: 200px;
            height: 200px;
            float: left;
            margin-left: 170px;
            margin-top: 220px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            clear: both;
            margin-top: 70%;
        }
        .infoforprice{
            float: left;
            margin-top: 70%;
            margin-left: -50%;
        }
        .price{
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="logo">
                <a href="index.php"><img src="Image/d1.png" class="photologo"></a>
        </nav>
        <nav class="options">
            <ul>
                <li>
                    <a href="index.php">
                        <i class="fas fa-home"></i>
                        <label class="labelforicon" for="Home">Home</label>
                    </a>
                </li>
                <li>
                    <a href="Image.php">
                        <i class="fas fa-seedling"></i>
                        <label class="labelforicon" for="Image">Image</label>
                    </a>
                </li>
                <li>
                    <a href="about.php">
                        <i class="fas fa-users"></i>
                        <label class="labelforicon" for="About Us">About Us</label>
                    </a>   
                </li>
                <li>
                    <a href="contact.php">
                        <i class="fab fa-weixin"></i>
                        <label class="labelforicon" for="Contact">Contact</label>
                    </a> 
                </li>
                <li>
                    <a href="login.php">
                        <i class="fas fa-fingerprint"></i>
                        <label class="labelforicon" for="Login">Login</label>
                    </a> 
                </li>
            </ul>
        </nav>
    </div>
    <div class="container2">
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Rose</h1>
                <img src="Image/1.jpg" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                        
                    </div>
        </a> 
        <nav class="infoforprice">
            <p class="price">
                <b>Price:</b> $4.99 - $99.99
                <br>
                <b>Colours:</b> Red, White, Peach, Yellow, and Pink
            </p>
        </nav>
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Sunflower</h1>
                <img src="Image/2.webp" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a> 
        <nav class="infoforprice">
            <p class="price">
                <b>Price:</b> $23.99 - $78.99
                <br>
                <b>Colours:</b> Only avaliable above color
            </p>
        </nav>
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Daisy</h1>
                <img src="Image/3.png" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a> 
        <nav class="infoforprice">
            <p class="price">
                <b>Price:</b> $199.99 - $287.99
                <br>
                <b>Colours:</b>  Red, White, Peach, and Pink
            </p>
        </nav>
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Aster</h1>
                <img src="Image/12.jpg" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a>
        <nav class="infoforprice">
            <p class="price">
                <b>Price:</b> $31.99 - $120.00
                <br>
                <b>Colours:</b> White, Purple, Blue, and Pink
            </p>
        </nav> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Orchid</h1>
                <img src="Image/5.jpg" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a>
        <nav class="infoforprice">
            <p class="price">
                <b>Price:</b> $29.99 - $445.00
                <br>
                <b>Colours:</b> Pink, White, Red, Green, Orange, Blue, Yellow, and Purple
            </p>
        </nav> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Baby Breath</h1>
                <img src="Image/8.jpg" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a>
        <nav class="infoforprice">
            <p class="price">
                <b>Price:</b> $54.99 - $199.99
                <br>
                <b>Colours:</b> White
            </p>
        </nav> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Lily</h1>
                <img src="Image/7.jpg" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a>
        <nav class="infoforprice">
            <p class="price">
                <b>Price:</b> $34.99 - $219.99
                <br>
                <b>Colours:</b> White, Pink and Red
            </p>
        </nav> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Forget Me Not</h1>
                <img src="Image/11.jpg" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a>
        <nav class="infoforprice">
            <p class="price">
                <b>Price:</b> $9.99 - $199.99
                <br>
                <b>Colours:</b> Sky-Blue, Pink, Purple and white
            </p>
        </nav> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Iris</h1>
                <img src="Image/9.jpg" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a>
        <nav class="infoforprice">
            <p class="price">
                <b>Price:</b> $19.99 - $299.99
                <br>
                <b>Colours:</b> Purple, Blue, Red, Peach, Yellow, Orange, Rose, Black and White
            </p>
        </nav> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Sakura</h1>
                <img src="Image/10.webp" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a>
        <nav class="infoforprice">
            <p class="price">
                <b>Price:</b> $199.99 - $499.99
                <br>
                <b>Colours:</b> Pale Pink
            </p>
        </nav> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Lavender</h1>
                <img src="Image/6.jpg" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a>
        <nav class="infoforprice">
            <p class="price">
                <b>Price:</b> $39.99 - $289.99
                <br>
                <b>Colours:</b> White, Pink, Blue-violet and Purples
            </p>
        </nav> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Cotton Flower</h1>
                <img src="Image/4.jpg" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a>
        <nav class="infoforprice">
            <p class="price">
                <b>Price:</b> $14.99 - $199.99
                <br>
                <b>Colours:</b> White and Pink
            </p>
        </nav> 
        </nav>     
    </div>
    <footer>
        <p>&copy; 2024 Your Flower Shop. All rights reserved.</p>
        <p>Contact us at: contact@flowershop.com</p>
        <p>123 Main Street, City, Country</p>
    </footer>
</body>
</html>
