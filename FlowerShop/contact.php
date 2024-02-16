<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style type="text/css">
        body{
            background: rgba(218,218,218,1)
        }
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
        .container2{
            background-color: black;
            width: 100%;
            height: 800px;
            margin-top: 20px;
            background-image: url(Image/c1.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .headforcontact{
            color: white;
            text-align: center;
            font-size: 60px;
            font-family: cursive;
        }
        .headc{
            width: 100%;
            float: left;
            margin-top: 20px;
        }
        .headforc2{
            color: white;
            float: left;
            width: 20%;
            height: 250px;
            margin-top: 100px;
            margin-left: 195px;
            border: 1px solid white;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }
        .support{
            text-align: center;
            font-size: 40px;
            margin-top: 20px;           
        }
        .suppheadin{
            text-align: center;
            margin-top: 13px;
            font-size: 22px;
        }
        .fortextsupp{
            text-align: center;
            font-size: 22px;
        }
        .navtest a:hover{
            box-shadow: rgb(85, 91, 255) 0px 0px 0px 3px,
            rgb(31, 193, 27) 0px 0px 0px 6px,
            rgb(255, 217, 19) 0px 0px 0px 9px,
            rgb(255, 156, 85) 0px 0px 0px 12px,
            rgb(255, 85, 85) 0px 0px 0px 15px;
            color: black;
            background-color: white;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            clear: both;
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
        <nav class="headc">
            <h1 class="headforcontact">
                CONTACT US
            </h1>
        </nav>
        <a href="#" class="navtext">
            <nav class="headforc2">
                <nav class="support">
                    <i class="fas fa-comment-alt"></i>
                </nav>
                <nav class="textsupport">
                    <h1 class="suppheadin">
                        Customer Support
                    </h1>
                    <p class="fortextsupp">
                        We are avaliable to contact (9:00AM-8:00PM)
                    </p>
                </nav>
            </nav>
        </a>
        <a href="#" class="navtext">
            <nav class="headforc2">
                <nav class="support">
                    <i class="far fa-envelope-open"></i>
                </nav>
                <nav class="textsupport">
                    <h1 class="suppheadin">
                        Media Contact
                    </h1>
                    <p class="fortextsupp">
                        Looking for latest and beautiful flower news or get in-touch?
                        We can Help
                    </p>              
                </nav>
            </nav>
        </a>
        <a href="#" class="navtext">
            <nav class="headforc2">
                <nav class="support">
                    <i class="fas fa-hotel"></i>
                </nav>
                <nav class="textsupport">
                    <h1 class="suppheadin">
                        Visiting for special gift
                    </h1>
                    <p class="fortextsupp">
                        For the appointment contact contact@flowershop.com
                    </p>
                </nav>
            </nav>
        </a>
    </div>
    <footer>
        <p>&copy; 2024 Your Flower Shop. All rights reserved.</p>
        <p>Contact us at: contact@flowershop.com</p>
        <p>123 Main Street, City, Country</p>
    </footer>
</body>
</html>