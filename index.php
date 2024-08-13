<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- responsive -->
<meta name="viewport" content="width=device-width,initial-scale =1.0">

<style>
    * {
        padding: 0;
        margin: 0;
        font-family: monospace;
        box-sizing: border-box;
    }

    .header {
        background-color: #9933CC;
        display: flex;
        justify-content: space-between;
        grid-template-columns: repeat(3, 1fr);
        padding: 0px 25px;
        height: 70px;
        align-items: center;
        /* text-align:center; */
    }

    .logo img {
        height: 70px;
    }

    /* .search input{
            height:35px;
            width:100%;
            border:none;
            outline:none;
            border-radius:10px;
            padding:10px;
        } */
    .icons {
        text-align: right;
    }

    .icons .fa {
        color: white;
        text-decoration: none;
        font-size: 22px;
        padding: 0px 10px;
        transition: 0.6s;
    }

    .fa:hover {
        color: black;
    }

    .links {
        background-color: #9933CC;
        /* display:none; */
        height: 0;
        transition: 0.6s;

    }

    .links a {
        color: white;
        text-decoration: none;
        display: block;
        padding: 15px;
        font-size: 18px;
    }

    .showmylinks {
        /* display:block; */
        height: 50vh;
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
    .content-cards {

        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        flex-wrap: wrap;
        height: auto;
        width: 29ww;
        margin: 10px;
        border: 2px;

    }

    .content-card {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        flex-wrap: wrap;
        height: 45vh;
        width: 20vw;
        margin: 10px;
        border: 1px lavender;
    }

    .content-card:hover {
        /* position:absolute;
            height:46vh;
            width:21vh; */
        transform: scale(1.2);
        transition: 0.6s;

    }

    .content-card img {
        height: 33vh;
        width: 30vh;
        /* width:auto; */
    }

    .user-interaction {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .topic{
        display: flex;
    justify-content: center;
    font-size: 25px;
    font-weight: bold;
    }
.add-to-cart-text{

    font-size: 15px;
    font-weight: bold;
    cursor: pointer;
}
    @media only screen and (max-width:600px) {
        .header {
            grid-template-columns: auto auto;
            padding: 10px 8px;
            height: auto;
        }

        /* .search{
                grid-column:2;
                grid-row:2;
                grid-column:1/span 2;
                padding-top:2px;
            } */
        .icons .fa {
            padding: 5px;
        }

        .logo img {
            width: 70px;
            height: auto;
        }
    }
</style>

<body>
    <!-- navbar -->

    <div class="header">
        <div class="logo">
            <a href="#"><img src="handmadebyyunee.jpg"></a>
        </div>
        
        <!-- <div class="search">
            <form>
                <input type="text" placeholder="Search Here">
            </form>
        </div> -->
        <div class="icons">
            <a href="addToCart.php" class="fa fa-shopping-cart"></a>
            <a href="form.php" class="fa fa-user-circle-o"></a>
            <a href="formcontact.php" class="fa fa-comments-o"></a>
            <a href="#" class="fa fa-list-ul" onclick="showProduct()"></a>
        </div>
    </div>
  
        <!-- <div class="topic">New Arrivals</div> -->
    <?php
  

    $product = array(
        array("item" => "Sky Blue Headband", "price" => 125,"img"=> "./CYMERA_20201005_221814.jpg"),
        array("item" => "green woolen Headwrap", "price" => 300,"img"=>"./CYMERA_20201207_174129.jpg"),
        array("item" => "green Scrunchie", "price" => 40,"img"=>"./IMG_20200816_124410_630.jpg") ,
        array("item" => "blue Scrunchie", "price" => 100,"img"=>"./IMG_20220930_083542.jpg"),
        array("item" => "net Scrunchie", "price" => 50,"img"=>"./IMG_20200913_142733.jpg"),
        array("item" => "florish Scrunchie", "price" => 50,"img"=>"./IMG_20200913_145537.jpg"),
        array("item" => "black tiger Scrunchie", "price" => 50,"img"=>"./IMG_20200915_174731.jpg"),
        array("item" => "newari theme Scrunchie", "price" => 50,"img"=>"./IMG_20200909_171841.jpg"),
        array("item" => "velvet Scrunchie", "price" => 100,"img"=>"./IMG_20200918_182023.jpg"),
        array("item" => "white cotton Scrunchie", "price" => 50,"img"=>"./IMG_20200901_082727.jpg"),
        array("item" => "Disney Scrunchie", "price" => 200,"img"=>"./IMG_20200901_082921.jpg"),
        array("item" => "pink Bangle", "price" => 60,"img"=>"./CYMERA_20201025_171711.jpg")
    );
    ?>
    <div class="links" id="productLinks"> 
        <a href="scrunchie.php">Scrunchies</a>
        <a href="headband.php">Headband</a>
        <a href="bag.php">Bag</a>
        <a href="bangles.php">Bangles</a>
        <a href="headwrap.php">Headwrap</a>
    </div>
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

        <?php foreach ($product as $p): ?>

            <div class="content-card">
            
                <img src=<?php echo $p['img'] ?> alt="2">
                <div class="user-interaction">
                    <div class="name-price">
                        <h5>
                            <?php echo $p['item']; ?>
                        </h5>
                        <span>PRICE:Rs
                            <?php echo $p['price']; ?>
                        </span>
                        <div class ="add-to-cart-text"onclick="addToCart('<?php echo htmlentities(json_encode($p)); ?>')">Add to cart</div>
                    </div>
                    
                </div>
            </div>
        <?php endforeach; ?>

        
        
      
       
     
      
       
        <div id="display">
            <?php
            $input = "0";

            function showInput($input)
            {
                echo $input;
            }
            ;

            // while (){
            showInput($input);
            // };
            ?>
        </div>

        <script src="js/productCart.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            function showProduct() {
                console.log("showProduct has been triggered");
                document.getElementById("productLinks").classList.toggle("showmylinks");
            }

            function addToCart(p) {

                var data = JSON.parse(p);
                var previousAddToCartData;


                if (localStorage.getItem('addToCartData')) {
                    previousAddToCartData = localStorage.getItem("addToCartData");

                    // Parse JSON string back into an array of objects
                    let storedArray = JSON.parse(previousAddToCartData);
                   let isPreviousStored= storedArray.filter(item=> item.item === data.item)
                   if(isPreviousStored.length === 0){

                       let newData = [...storedArray, data]
                       localStorage.setItem('addToCartData', JSON.stringify(newData))
                   }


                } else {
                    data = JSON.stringify([data]);
                    localStorage.setItem('addToCartData', data)
                }

                var myValue = localStorage.getItem('addToCartData');
        var cartValue = JSON.parse(myValue)

        console.log("cartValue=>",myValue);
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ecommerce%20website/addToCart.php',
                    data: { cartValue: cartValue },
                    success: function(response) {
                        console.log(response);
                    }
                });


            }
        </script>
</body>

</html>