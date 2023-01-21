<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Five Menu</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php
    $quantity = '';
    $item_name = '';
    $price = '';
    $discount_amount = '';
    $discounted_amout = '';
    $total_quantity = '';
    $total_discount_amount = '';
    $total_discounted_amount = '';
    $cash= '';
    $change = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $cash = $_POST['cash'];
    $item_name = $_POST['item_name'];
    $total_quantity = $quantity;
    $total_discount_amount = ($quantity*$price)* .25;
    $total_discounted_amount = ($quantity*$price)- $total_discount_amount;
    $change = ($cash - $total_discounted_amount);

}
    ?>
    <div class="main">
        <div class="section-title">
        <h2> Team Five Menu</h2>  
        </div>
        <div class="menus">
            <div class="menu-column">
            <h4> breakfast </h4>
            <div class="single-menu">
                <img src="assets/img/1.jpg" alt="">
                <div class="menu-content">
                    <h5> NY Classic <span> 659</span></h5>
                    <p>Mozzarella cheddar, minced<br>garlic,oregano, beef pepperoni.
                    <b>Small 8” : 42dhs<br>
                    Regular 10” : 49dhs<br>
                    Medium 12” : 60dhs<br>
                    Large 14″ : 72dhs</b></p>
                </div>
            </div>
            <div class="single-menu">
                <img src="assets/img/2.jpg" alt="">
                <div class="menu-content">
                    <h5> Hawaiian <span> 659</span></h5>
                    <p>Mozzarella cheddar, pineapple, smoked-turkey, smoked-beef.
                    <b>Small 8” : 41dhs<br>
                    Regular 10” : 45dhs<br>
                    Medium 12” : 57dhs<br>
                    Large 14″ : 68dhs</b></p>
                </div>
            </div>
            <div class="single-menu">
                <img src="assets/img/3.jpg" alt="">
                <div class="menu-content">
                    <h5>Garden Special <span> 999 </span></h5>
                    <p>Fresh tomatoes, black olives, mushrooms, onions, red & green bell peppers, cheddar, mozzarella.
                    <br><b>Small 8” : 37dhs
                    Regular 10” : 42dhs
                    Medium 12” : 53dhs
                    Large 14″ : 65dhs</b></p>
                </div>
            </div>
            <div class="single-menu">
                <img src="assets/img/4.jpg" alt="">
                <div class="menu-content">
                    <h5>Anchovy Lovers<span>999</span></h5>
                    <p>Black olives, anchovies, capers, roasted garlic, button mushrooms and onions.
                    <br><b>Small 8” : 41dhs
                    Regular 10” : 52dhs
                    Medium 12” : 64dhs
                    Large 14″ : 75dhs</b>

</p>
                </div>
            </div>
        </div>
        <div class="menu-column">
            <h4> lunch </h4>
            <div class="single-menu">
                <img src="assets/img/5.jpg" alt="">
                <div class="menu-content">
                    <h5>Manhattan Meatlovers<span>899</span></h5>
                    <p>Smoked-turkey, beef pepperoni, Italian sausage, ground beef, salami, smoked- beef, minced garlic and oregano.
                    <br><b>Small 8” : 42dhs
                    Regular 10” : 49dhs
                    Medium 12” : 60dhs
                    Large 14″ : 72dhs</b></p>
                </div>
            </div>
            <div class="single-menu">
                <img src="assets/img/6.jpg" alt="">
                <div class="menu-content">
                    <h5>Tribeca Mushroom<span>1199</span></h5>
                    <p>Mozzarella, cheddar, combination of assorted mushrooms and oregano.
                    <br><b>Small 8” : 40dhs
                    Regular 10” : 48dhs
                    Medium 12” : 59dhs
                    Large 14″ : 71dhs</b>

</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="assets/img/7.jpg" alt="">
                <div class="menu-content">
                    <h5>Chicken Masala <span>1359 </span></h5>
                    <p>Spiced chicken masala, jalapeño peppers, roasted garlic, onion and green bell peppers.
                    <br><b>Small 8” : 40dhs
                    Regular 10” : 48dhs
                    Medium 12” : 59dhs
                    Large 14″ : 71dhs</b></p>
                </div>
            </div>
            <div class="single-menu">
                <img src="assets/img/8.jpg" alt="">
                <div class="menu-content">
                    <h5>Four Seasons<span>1359</span></h5>
                    <p>NY Classic, #4 Cheese, Anchovy Lovers and Roasted Garlic & Shrimp.
                       <br><b>Regular 10” : 57dhs
                        Medium 12” : 68dhs
                        Large 14” : 80dhs</b></p>
                </div>
            </div>
        </div>
        <div class="menu-column">
            <h4> Dinner </h4>
            <div class="single-menu">
                <img src="assets/img/9.jpg" alt="">
                <div class="menu-content">
                    <h5>New York’s Finest<span>969</span></h5>
                    <p>Italian sausage, turkey, beef pepperoni, beef bacon, ground beef, black olives, mushrooms, onions, red & green bell peppers.
                     <br><b> Small 8” : 46dhs
                        Regular 10” : 57dhs
                        Medium 12” : 68dhs
                        Large 14” : 80dhs</b></p>
                </div>
            </div>
            <div class="single-menu">
                <img src="assets/img/10.jpg" alt="">
                <div class="menu-content">
                    <h5>Tandoori Chicken<span>859</span></h5>
                    <p>Marinated chicken tandoori, green bell pepper, onion, fresh tomatoes, jalapeño peppers and roasted garlic.
                        <br><b>Small 8” : 40dhs
                        Regular 10” : 48dhs
                        Medium 12” : 59dhs
                        Large 14″ : 71dhs</b>
                            </p>
                </div>
            </div>
            <div class="single-menu">
                <img src="assets/img/11.jpg" alt="">
                <div class="menu-content">
                    <h5>Chicken Salsa<span>789</span></h5>
                    <p>Tender Strips of chicken with southwestern salsa.
                       <br><b>Small 8” : 40dhs
                        Regular 10” : 48dhs
                        Medium 12” : 59dhs
                        Large 14″ : 71dhs</b>

</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="assets/img/12.jpg" alt="">
                <div class="menu-content">
                    <h5>Roasted Garlic & Shrimp<span>799</span></h5>
                    <p>Shrimp, onions, roasted garlic in butter sauce with oregano.
                     <br><b>Small 8” : 43dhs
                        Regular 10” : 50dhs
                        Medium 12” : 61dhs
                        Large 14″ : 73dhs</b>

</p>
                </div>
            </div>
        </div>
    </div>
        <form name="index.php" method = "POST">
            <label><b>Order Details: </b></label><br>
            <label class="word">Name of an Item: </label>
            <input type="text" name = "item_name" value = "<?php echo $item_name?>" required><br>
            <label class="word">Quantity: </label>
            <input type="number" name = "quantity" value = "<?php echo $quantity?>" required><br>
            <label class="word">Price: </label>
            <input type="number" name = "price" value = "<?php echo $price?>"required><br>
            <label class="word">Discount Amount: </label>
            <input type="number" name = "price" value = "<?php echo $total_discount_amount?>" disabled><br>
            <label class="word">Discounted Amount:</label>
            <input type="number" name = "price" value = "<?php echo $total_discounted_amount?>"disabled><br>
            <label class="word">Total Quantity: </label>
            <input type="number" name = "price" value = "<?php echo $quantity?>"disabled><br>
            <label class="word">Total Discounted Given: </label>
            <input type="number" name = "price" value = "<?php echo $total_discount_amount?>"disabled><br>
            <label class="word">Total Discounted: </label>
            <input type="number" name = "price" value = "<?php echo $total_discounted_amount?>"disabled><br>
            <label><b>Amount: </b></label><br>
            <label class="word">Cash Given </label>
            <input type="number" name = "cash" value = "<?php echo $cash?>"required><br>
            <label class="word">Change: </label>
            <input type="number" name = "price" value = "<?php echo $change?>" disabled><br>
            <div class="button">
                    <input type="submit" value="CALCULATE:">
                  </div>
                  <div class="button">
                    <input type="submit" value="CHANGE:">
                  </div>
                  <div class="button">
                    <input type="submit" value="NEW:">
                  </div>

        </form>

        <div class="mydiv">
        <br> 
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <form action="" name="clc">
              
                <!--<input type="text" name="display" style="width: 290px; height: 70px; background-color: #4c555c;color: white;"><br>-->
                <input class="btn" type="button" value="0" onclick="clc.display.value += '0'">
                <input class="btn" type="button" value="1" onclick="clc.display.value += '1'">
                <input class="btn" type="button" value="2" onclick="clc.display.value += '2'">
                <input class="btn" type="button" value="+" onclick="clc.display.value += '+'" style=" background-color: #cc5c11;"><br>
                <input class="btn" type="button" value="3" onclick="clc.display.value += '3'">
                <input class="btn" type="button" value="4" onclick="clc.display.value += '4'">
                <input class="btn" type="button" value="5" onclick="clc.display.value += '5'">
                <input class="btn" type="button" value="-" onclick="clc.display.value += '-'" style="background-color: #ba55d3;"><br>
                <input class="btn" type="button" value="6" onclick="clc.display.value += '6'">
                <input class="btn" type="button" value="7" onclick="clc.display.value += '7'">
                <input class="btn" type="button" value="8" onclick="clc.display.value += '8'">
                <input class="btn" type="button" value="*" onclick="clc.display.value += '*'" style="background-color: #7db1b2;"><br>
                <input class="btn" type="button" value="9" onclick="clc.display.value += '9'">
                <input class="btn" type="button" value="C" onclick="clc.display.value =''" style="background-color:#cc0000;">
                <input class="btn" type="button" value="." onclick="clc.display.value = '.'">
                <input class="btn" type="button" value="&#247;" onclick="clc.display.value += '/'" style="background-color: #1f80c9;">\
                <input class="btn" type="button" value="ENTER" onclick="clc.display.value =eval(clc.display.value)" style="background-color: #4c555c; width: 270px; height: 70px;"> <br>
            </form>
            </div>
            
</div> 

</body>
</html>


