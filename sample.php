
 <Script>

 	/*-----AJAX-JQUERY---------------------------*/
 var b = 0;
        var x = "#bbbl";
        var z = x + 1;
        //  console.log(z);
        $(z)

        $(document).ready(function() {
            var name = $("#name").val(); //$namr[$i]; //
            var price = $("#price").val();
            var gender = $("#gender").val();
            var quentity = $("#quentity").val();
            var weight = $("#weight").val();
            var color = $("#color").val();
            var description = $("#description").val();
            var code = $("#code").val();
            var mainimage = $("#mainimage").val();
            var material = $("#material").val();

            $("#bbb").click(function() {

                alert(name);
                $.agax({
                    type: "GET",
                    url: './ProductAdd/ProductAdd.php',
                    data: {
                        "name": name,
                        "price": price,
                        "gender": gender,
                        "description": description,
                        "code": code,
                        "material": material,
                        "weight": weight,
                        "color": color,
                        "mainimage": mainimage,
                        "quentity": quentity
                    },
                    dataType: 'json',
                    success: function(data) {
                        alert(data.name);
                    }
                });
            });
        });

/*-----Jquery click event -------------*/
         $(document).ready(function() {
            for (b = 0; b < 10; b++) {
                $(z).click(function() {

                    console.log(b);
                    alert("name");
                    b++;
                });

            }
        });

/*-----------php using js methos call and variable pass as a parameeter----------*/
          <?php

            $v = 0;
            for ($v = 0; $v <= 2; $v++) {
                echo $v;

                echo '
                <button type="button" onclick="fun(' . $v . ')">
                    Click
                    <?php echo $v ?>
                </button>
                     ';
                echo 5;
            }
            ?>

            <script type="text/javascript">
    function fun(f) {
        var b = 0;
        var x = "#bbbl";
        var z = x + f;
        console.log(z);

    }
</script>
