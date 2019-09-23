$(document).ready(function() {

    $(document).on("click", ".outofstock", function() {
        Swal({
            type: 'warning',
            text: "A product is out of stock"
        })
    })

    $(document).on("click", '.closePop', function () {
        $(".customCont").fadeOut(500);
    })

    $(document).on("keyup change", "input[name='pa']", function () {
        var pa = $(this).val();
        var gtotal = $(".gtotal").html();

        bal = gtotal - pa;

        $("#balance").html(bal);
    })

    function sales_cart_count() {

        var num_sales_price = $(".partCost");
        var prev = 0;

        num_sales_price.innerHTML = 0;

        num_sales_price.each(function () {
            var count = $(this).html()

            count = parseFloat(prev) + parseFloat(count);
            prev = count;
        })

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
      

        sales_item_price(elem, price, val);
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

        form_report.each(function() {
            var ids = $(this).attr("id");
            var value = $(this).val();
            
            targets[ids] = value;
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
        var targets = {};
        var index;

        var customerID = $("select[name='cname']").val();
        var pa = $("input[name='pa']").val();
        var gt = $(".gtotal").html();

        targets['id'] = customerID;
        targets['pa'] = pa;
        targets['gt'] = gt;

        if(customerID <= 0) {
            Swal.fire({
                type: 'warning',
                text: 'Please select a customer!!',
            })

        } else {
            var product_details = $(".product_details");
            targets['stuff'] = [];

            product_details.each(function() {
                var product = $(this).attr('id');
                var quantity = $(this).children(".quantity").html();

                dict_pro = {
                    product: product,
                    quantity: quantity
                }

                targets['stuff'].push(dict_pro);
            })
        }

        var info = {
            target: targets,
            func: 'submitReport'
        }

        var option = {
            url: 'lib.php',
            type: 'post',
            data: info,
            dataType: 'json',
            success: function(responseGen) {
                response = responseGen[0];
                if(response.includes('success') && (!response.includes('error') || !response.includes('invalid') || !response.includes('empty'))) {
                    response2 = responseGen['return'];

                    Swal.fire({
                        type: 'success',
                        text: 'Added Sale Successfully',
                        
                    }).then(function() {
                        Swal.fire({
                            type: 'warning',
                            text: 'Do you want to print this report?',
                            showCancelButton: true,
                            confirmButtonColor: '#DD6B55',
                            confirmButtonText: 'Yes',
                            cancelButtonText: "No",
                              
                        }).then(function(isConfirm) {
                            if(isConfirm.value) {
                                window.location = 'invoice-print.php?target='+response2;
                            } else {
                                location.reload();
                            }
                            
                        })
                        
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

})