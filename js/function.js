  $(document).ready(function() {

            //
            function loadProducts() {
                $.ajax({
                    url: "./products.php",
                    type: "GET",
                    dataType: 'html',
                    success: function(returnedData) {
                        //console.log("cart checkout response: ", returnedData);
                        $("#productslist").html(returnedData);

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.statusText, textStatus);
                    }
                });
            }

            loadProducts();


            $('#productslist').on('click', 'input[data-sku-add]', function() {
                //console.log(this.getAttribute("data-sku-add"));

                // get the sku
                var sku = this.getAttribute("data-sku-add");
                var qty = $("input[data-sku-qty='" + sku + "']").val();
                var price = $("td[data-sku-price='" + sku + "']").text();
                var desc = $("td[data-sku-desc='" + sku + "']").text();
                var subtotal = parseFloat(Math.round((qty * price) * 100) / 100).toFixed(2);
                console.log(desc, "quantity", qty, "price", price);

                var shoppingCartList = $("#shoppingCart");


                var item = "<li data-item-sku='" + sku + "' data-item-qty='" + qty + "'>"
                    + desc + " " + qty + " x $" + price + " = " + subtotal
                    + " <input type='button' data-remove-button='remove' value='X'/></li>";
                shoppingCartList.append(item);

            });

            // remove items from the car
            $("#shoppingCart").on("click", "input", function() {
                // https://api.jquery.com/closest/
                this.closest("li").remove();

            });


            // start the cart
            $("#startCart").click(function() {
                console.log("Start cart.");
                $.ajax({
                    url: "./shoppingcart.php",
                    type: "POST",
                    dataType: 'json',
                    data: {action: "startcart"},
                    success: function(returnedData) {
                        console.log("cart start response: ", returnedData);

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.statusText, textStatus);
                    }
                });
            });

            // cancel the cart
            $("#cancelCart").click(function() {

                console.log("End cart.");
                $.ajax({
                    url: "./shoppingcart.php",
                    type: "POST",
                    dataType: 'json',
                    data: {action: "cancelcart"},
                    success: function(returnedData) {
                        console.log("cart cancel response: ", returnedData);

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.statusText, textStatus);
                    }
                });
                var shoppingCartList = $("#shoppingCart").html("");
            });

            // cancel the cart
            $("#checkoutcart").click(function() {

                // retrieve all of the items from the cart:
                var items = $("#shoppingCart li");
                var itemArray = [];
                $.each(items, function(key, value) {

                    var item = {sku: value.getAttribute("data-item-sku"),
                        qty: value.getAttribute("data-item-qty")};
                    itemArray.push(item);
                });
                var itemsAsJSON = JSON.stringify(itemArray);
                console.log("itemsAsJSON", itemsAsJSON);


                console.log("Check out cart with the following items", itemArray);
                $.ajax({
                    url: "./shoppingcart.php",
                    type: "POST",
                    dataType: 'json',
                    data: {action: "checkoutcart", items: itemsAsJSON},
                    success: function(returnedData) {
                        console.log("cart check out response: ", returnedData);

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.statusText, textStatus);
                    }
                });
                var shoppingCartList = $("#shoppingCart").html("");
            });




        });