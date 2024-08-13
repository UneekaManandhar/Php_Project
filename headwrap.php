<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        *{
            padding:0;
            margin:0;
            font-family:monospace;
            box-sizing:border-box;
        }
        .header{
            background-color:#9933CC;
            display:grid;
            grid-template-columns:repeat(3,1fr);
            padding:0px 25px;
            height:70px;
            align-items:center;
            /* text-align:center; */
        }
        .logo img{
            height:70px;
        }
        .search input{
            height:35px;
            width:100%;
            border:none;
            outline:none;
            border-radius:10px;
            padding:10px;
        }
        .icons{
            text-align: right;
        }
        .icons .fa{
            color:white;
            text-decoration:none ;
            font-size: 22px;
            padding: 0px 10px;
            transition: 0.6s;
        }
        .fa:hover{
            color:black;
        }
        .links{
            background-color:#9933CC;
            /* display:none; */
            height:0;
            transition:0.6s;

        }
        .links a{
            color:white;
            text-decoration: none;
            display:block;
            padding:15px;
            font-size: 18px;
        }
        .showmylinks{
            /* display:block; */
            height:50vh;
        }
        /* .background-image{
                background-image:url('./blue-white-seamless-repeat-pattern-background-scrunchies-scrunchy-hair-tie-elements-pastel-background-trendy-girly-design-199244370.jpg');
                background-size:cover;
                background-repeat:no-repeat;
                filter: blur(4px);
                -webkit-filter: blur(1px);
                background-attachment: fixed;
                height:100vh;
            } */
        .content-cards{
            
            display:flex;
            align-items:center;
            justify-content: center;
            flex-direction: row;
            flex-wrap:wrap;
            height:auto;
            width:29ww;
            margin:10px;
            border: 2px;
    
        }
        .content-card{
            display:flex;
            align-items:center;
            justify-content: center;
            flex-direction: row;
            flex-wrap:wrap;
            height:45vh;
            width:20vw;
            margin:10px;
            border: 1px lavender;
        }
        .content-card:hover{
            /* position:absolute;
            height:46vh;
            width:21vh; */
            transform:scale(1.2);
            transition:0.6s;
            
        }
        .content-card img{
            height:33vh;
            width:30vh;
            /* width:auto; */
        }
        .user-interaction{
            width:100%;
            display:flex;
            align-items:center;
            justify-content: center;
        }
        @media only screen and (max-width:600px){
            .header{
                grid-template-columns: auto auto;
                padding:10px 8px;
                height:auto;
            }
            .search{
                grid-column:2;
                grid-row:2;
                grid-column:1/span 2;
                padding-top:2px;
            }
            .icons .fa{
                padding:5px;
            }
            .logo img{
                width:70px;
                height:auto;
            }
        }
    </style>
<body>
    
   <div class="header">
        <div class="logo">  
                <a href="#"><img src="./handmadebyyunee.jpg"></a>
        </div>
        <div class="search">
            <form>
                <input type="text" placeholder="Search Here">
            </form>
        </div>
        <div class="icons">
            <a href="#" class="fa fa-heart"></a>
            <a href="#" class="fa fa-shopping-cart"></a>
            <a href="./login-system/form.php" class="fa fa-user-circle-o"></a>
            <a href="#" class="fa fa-list-ul" onclick="showProduct()"></a>
        </div>
    </div>
    <!-- <div class="links" id="productLinks">
        <a href="#">Scrunchies</a>
        <a href="#">Headband</a>
        <a href="#">Bag</a>
        <a href="#">Bangles</a>
        <a href="#">Earings</a>
        <a href="#">Headwrap</a>
    </div> -->
    <!-- <div class="background-image"></div> -->
    <div class="content-cards">
        <!-- <div class="content-card">
            <img src="./CYMERA_20201025_171711.jpg" alt="1">
            <div class="user-interaction">
                <div class="name-price">
                    <h5>BANGLE</h5>
                    <span>PRICE:Rs 350</span>
                </div>
            </div> -->
            
        <div class="content-card">
            <img src="./CYMERA_20201207_174129.jpg" alt="2">
            <div class="user-interaction">
                <div class="name-price">
                    <h5>Headwrap</h5>
                    <span>PRICE:Rs 350</span>
                </div>
            </div>
        </div>
        
        
    <script>
        function showProduct(){
            console.log("showProduct has been triggered");
            document.getElementById("productLinks").classList.toggle("showmylinks");
        }
    </script>
</body>
</html>
</body>
</html>