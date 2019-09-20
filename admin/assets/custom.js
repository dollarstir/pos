$(document).ready(function() {

    function sales_cart_count() {

        var num_sales_price = document.getElementsByClassName("partCost");
        var prev = 0;

        num_sales_price.innerHTML = 0;

        for (const key in num_sales_price) {
            var count = num_sales_price[key].innerHTML;
            count = parseInt(count);

            if(Number.isInteger(count)) {
                count = prev + count;
                prev = count;
            } 
            
        }

        document.getElementsByClassName("grandCost")[0].innerHTML = prev;
    }

    function sales_item_price(elem, price, val) {
        var count = val * price;
        if(count < 0) {
            count = 0;
        }
        elem.html(count);

        sales_cart_count();
    }

    $(document).on("keyup change", "input[name='quan_input']",function () {
        var val = $(this).val();
        var price = $(this).prev(".price").val();
        var elem = $(this).parent().parent().children(".col").children(".partCost");
      

        sales_item_price(elem, parseInt(price), parseInt(val));
    })

    $(document).on("click", ".add_to_cartProduct", function(e) {
        var target = $(this).attr("id");
        var option = {
            url: 'lib.php',
            type: post,
            data: {id: target,func: 'addToCart'},
            dataType: 'json',
            success: function(response) {
                $(".cart_sale").append('<div class="row mb-4"><div class="col">'+response["bname"]+'<br>GH&#8373; <span class="partCost">'+response["price"]+'</span></div><div class="col"><input type="hidden" class="price" value="'+response["price"]+'"><input id="'+response["id"]+'" name="quan_input" type="number" class="form-control" value="1"></div><i style="margin: 5px;" class="fa fa-times fa-2x iconBtn"></i></div>');
            }
        }
    })

})