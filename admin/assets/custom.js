<<<<<<< HEAD
$(document).ready(function() {
    $(document).on("click", '.closePop', function () {
        $(".customCont").fadeOut(500);
    })

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

    $(document).on("click", ".iconBtn", function() {
        $(this).parent().remove();

        sales_cart_count();
    })

    $(document).on("keyup change", "input[name='quan_input']",function () {
        var val = $(this).val();
        var price = $(this).prev(".price").val();
        var elem = $(this).parent().parent().children(".col").children(".partCost");
      

        sales_item_price(elem, parseInt(price), parseInt(val));
    })

    $(document).on("click", ".add_to_cartProduct", function() {
        var target = $(this).attr("id");

        var option = {
            url: 'lib.php',
            type: 'post',
            data: {id: target,func: 'addToCart'},
            dataType: 'json',
            success: function(response) {
                $(".cart_sale").append('<div class="row mb-4"><div class="col">'+response["bname"]+'<br>GH&#8373; <span class="partCost">'+response["price"]+'</span></div><div class="col"><input type="hidden" class="price" value="'+response["price"]+'"><input id="'+response["id"]+'" name="quan_input" type="number" class="form-control quan_input" value="1"></div><i style="margin: 5px;" class="fa fa-times fa-2x iconBtn"></i></div>');

                sales_cart_count();
            }
        }

        $.ajax(option);
    })

    $(document).on("click", ".reportPopUp", function() {
        var targets = {};
        var grandCost = $(".grandCost").html();
        var form_report = $('.quan_input');
        var ind = 0;

        form_report.each(function() {
            var ids = $(this).attr("id");
            var value = $(this).val();
            
            targets[ind] = [ids, value];

            ind++;

        })

        if(parseInt(grandCost) > 0) {

            var info = {
                func: 'reportPopUp',
                target: targets,
                grandCost: grandCost
            }

            var option = {
                url: 'lib.php',
                type: 'post',
                data: info,
                success: function (response) {
                    $('.return').html(response);
                    $('.customCont').fadeIn(600);
                }
            }

            $.ajax(option);

        }
    })

    $(document).on("click", ".submitreport", function() {
        var targets = [];
        var index;

        $(".report").each(function() {
            var targets2 = {};

            var id = $(this).children("div").children("input[name='id']").val();
            var quantity = $(this).children("div").children("input[name='quantity']").val();
            var gt = $(this).children("div").children("input[name='gt']").val();
            var cname = $(this).children("div").children("input[name='cname']").val();
            var pa = $(this).children("div").children("input[name='pa']").val();

            targets2 = {
                id: id,
                quantity: quantity,
                gt: gt,
                cname: cname,
                pa: pa
            }

            targets.push(targets2)

        })

        var info = {
            target: targets,
            func: 'submitReport'
        }

        var option = {
            url: 'lib.php',
            type: 'post',
            data: info,
            dataType: 'json',
            success: function(response) {
                if(response.includes('success') && (!response.includes('error') || !response.includes('invalid') || !response.includes('empty'))) {
                    Swal.fire({
                        type: 'success',
                        text: 'Added Sale Successfully',
                        
                    }).then(function() {
                        location.reload();
                    });

                    $(".customCont").fadeOut(500);


                } else if(response.includes('out')) {
                    Swal.fire({
                        type: 'warning',
                        text: 'Can\'t add to report because a product is out of stock\nPlease remove it!!',
                    })

                } else if(response.includes('error')) {
                    Swal.fire({
                        type: 'error',
                        text: 'Opps, Couldn\'t add sale'
                    })

                } else if(response.includes('empty')) {
                    Swal.fire({
                        type: 'warning',
                        text: 'Please fill all neccessary input fields',
                    })

                } else {
                    Swal.fire({
                        type: 'error',
                        text: 'Unexpected Error',
                    })
                }
            }
        }

        $.ajax(option)
    })

=======
$(document).ready(function() {
    $(document).on("click", '.closePop', function () {
        $(".customCont").fadeOut(500);
    })

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

    $(document).on("click", ".iconBtn", function() {
        $(this).parent().remove();

        sales_cart_count();
    })

    $(document).on("keyup change", "input[name='quan_input']",function () {
        var val = $(this).val();
        var price = $(this).prev(".price").val();
        var elem = $(this).parent().parent().children(".col").children(".partCost");
      

        sales_item_price(elem, parseInt(price), parseInt(val));
    })

    $(document).on("click", ".add_to_cartProduct", function() {
        var target = $(this).attr("id");

        var option = {
            url: 'lib.php',
            type: 'post',
            data: {id: target,func: 'addToCart'},
            dataType: 'json',
            success: function(response) {
                $(".cart_sale").append('<div class="row mb-4"><div class="col">'+response["bname"]+'<br>GH&#8373; <span class="partCost">'+response["price"]+'</span></div><div class="col"><input type="hidden" class="price" value="'+response["price"]+'"><input id="'+response["id"]+'" name="quan_input" type="number" class="form-control quan_input" value="1"></div><i style="margin: 5px;" class="fa fa-times fa-2x iconBtn"></i></div>');

                sales_cart_count();
            }
        }

        $.ajax(option);
    })

    $(document).on("click", ".reportPopUp", function() {
        var targets = {};
        var grandCost = $(".grandCost").html();
        var form_report = $('.quan_input');
        var ind = 0;

        form_report.each(function() {
            var ids = $(this).attr("id");
            var value = $(this).val();
            
            targets[ind] = [ids, value];

            ind++;

        })

        if(parseInt(grandCost) > 0) {

            var info = {
                func: 'reportPopUp',
                target: targets,
                grandCost: grandCost
            }

            var option = {
                url: 'lib.php',
                type: 'post',
                data: info,
                success: function (response) {
                    $('.return').html(response);
                    $('.customCont').fadeIn(600);
                }
            }

            $.ajax(option);

        }
    })

    $(document).on("click", ".submitreport", function() {
        var targets = [];
        var index;

        $(".report").each(function() {
            var targets2 = {};

            var id = $(this).children("div").children("input[name='id']").val();
            var quantity = $(this).children("div").children("input[name='quantity']").val();
            var gt = $(this).children("div").children("input[name='gt']").val();
            var cname = $(this).children("div").children("input[name='cname']").val();
            var pa = $(this).children("div").children("input[name='pa']").val();

            targets2 = {
                id: id,
                quantity: quantity,
                gt: gt,
                cname: cname,
                pa: pa
            }

            targets.push(targets2)

        })

        var info = {
            target: targets,
            func: 'submitReport'
        }

        var option = {
            url: 'lib.php',
            type: 'post',
            data: info,
            dataType: 'json',
            success: function(response) {
                if(response.includes('success') && (!response.includes('error') || !response.includes('invalid') || !response.includes('empty'))) {
                    Swal.fire({
                        type: 'success',
                        text: 'Added Sale Successfully',
                        
                    }).then(function() {
                        location.reload();
                    });

                    $(".customCont").fadeOut(500);


                } else if(response.includes('error')) {
                    Swal.fire({
                        type: 'error',
                        text: 'Opps, Couldn\'t add sale'
                    })

                } else if(response.includes('empty')) {
                    Swal.fire({
                        type: 'warning',
                        text: 'Please fill all neccessary input fields',
                    })

                } else if(response.includes('out')) {
                    Swal.fire({
                        type: 'warning',
                        text: 'Can\'t add to stock because a product is out of stock\nPlease remove it!!',
                    })

                } else {
                    Swal.fire({
                        type: 'error',
                        text: 'Unexpected Error',
                    })
                }
            }
        }

        $.ajax(option)
    })

>>>>>>> 33ddff94d3c0de2c1fad294fef8802e46f6b0b72
})