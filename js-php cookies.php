 /*--------------php for loop html -----------*/

<?php  for($x=0; $x<10; $X++ )
 {
?>
<a type="button" onclick="fun('<?php echo $name[$i]; ?>','<?php echo $price[$i]; ?>', '<?php echo $color[$i]; ?>' ,'<?php echo $weight[$i]; ?>' ,'<?php echo $code[$i]; ?>' ,'<?php echo $material[$i]; ?>' ,'<?php echo $description[$i]; ?>' ,'<?php echo $gender[$i] ?>'  ,'<?php echo $mainimage[$i]; ?>' ,'<?php echo $quentity[$i]; ?>'
                            );" >
                                ADD TO CART
</a>

<?php
}
?>


<script type="text/javascript">
    function fun(name, price, color, weight, code, material, description, gender, mainimage, quentity) {
        // var n = document.getElementById("name").value;
        //  console.log(name + price + color + weight + code + material + description + gender + mainimage + quentity);
        setCookie("name", name, 1);
        setCookie("price", price, 1);
        setCookie("color", color, 1);
        setCookie("weight", weight, 1);
        setCookie("code", code, 1);
        setCookie("material", material, 1);
        setCookie("description", description, 1);
        setCookie("gender", gender, 1);
        setCookie("mainimage", mainimage, 1);
        setCookie("quentity", quentity, 1);
        // data to be sent to the POST request
    }

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + ";path=/";
        //  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
</script>

/*----------------read js cookies variables using php     --------------------*/ 
             <h4 class="title"><a href="#"><?php echo $_COOKIE["name"]; ?></a></h4>

              <h4 class="price">$ <?php echo $_COOKIE["price"]; ?></h4>

              <p class="available">Available: <?php echo $_COOKIE["quentity"]; ?> <span class="text-muted">In Stock</span></p>

