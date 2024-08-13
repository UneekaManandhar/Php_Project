<!DOCTYPE html>
<html>
    <head>
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
    /* align-items: center; */
    justify-content: unset;
    flex-direction: row;
    /* flex-wrap: wrap; */
    /* height: 45vh; */
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
        height: 15vh;
    width: 21vh;
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
    .card-div{
        display: flex;
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
    .total-div{
        display: flex;
    justify-content: center;
    font-size: 25px;
    font-weight: bold;
    }
</style>
         <title>Add to cart</title>
    </head>

    <body>
        <div class="topic">List Of Product</div>
    <div id="myDiv" class="card-div"></div>
    <div id ="total" class="total-div">total:<span id="totalPrice"></span></div>
    <div id ="total" class="total-div">payment through esewa id : 9843063845</div>
 
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script>
        var myValue = localStorage.getItem('addToCartData');
        
        var cartValue = JSON.parse(myValue);
        // var cartValue = [{item:'apple',price:'100'},{item:'orange',price:'200'}];
        var myDiv = document.getElementById("myDiv");
        var totalPrice = 0;
        cartValue.forEach(function(item) {
  var contentCard = document.createElement("div");
  contentCard.setAttribute("class", "content-card");
totalPrice = totalPrice+item.price;
  var image = document.createElement("img");
  image.setAttribute("src", item.img);
  image.setAttribute("alt", item.item);
  image.setAttribute("class", "item-image");

  var userInteraction = document.createElement("div");
  userInteraction.setAttribute("class", "user-interaction");

  var namePrice = document.createElement("div");
  namePrice.setAttribute("class", "name-price");

  var h5 = document.createElement("h5");
  h5.innerHTML = item.item;
  h5.setAttribute("class", "item-name");

  var span = document.createElement("span");
  span.innerHTML = "PRICE: Rs " + item.price;
  span.setAttribute("class", "item-price");

  namePrice.appendChild(h5);
  namePrice.appendChild(span);

  userInteraction.appendChild(namePrice);

  contentCard.appendChild(image);
  contentCard.appendChild(userInteraction);

  myDiv.appendChild(contentCard);
  
});
var totalPriceDiv = document.getElementById("totalPrice");

  totalPriceDiv.innerHTML=totalPrice;

        
     </script>
       
 


    


    </body>

</html>