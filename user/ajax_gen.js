$(document).ready(function () {

    function resp(response) {

        $("#respo").html(response);
        $("#mess").fadeOut(15000);
        
    }



    $(".subm").submit(function (e) {
        e.preventDefault();
        
        var options = {
            url: 'gen.php',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(options);
 
    });



    $(".adprod").submit(function (e) {
        e.preventDefault();
        
        var optionsc = {
            url: 'process.php?dollar=addproduct',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(optionsc);
 
    });



    $(".adcat").submit(function (e) {
        e.preventDefault();
        
        var optionst = {
            url: 'process.php?dollar=adcategory',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(optionst);
 
    });




    $(".adpurch").submit(function (ev) {
        ev.preventDefault();
        
        var optionedio = {
            url: 'process.php?dollar=adpurches',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(optionedio);
 
    });


    $(".adssp").submit(function (ev) {
        ev.preventDefault();
        
        var optionesup = {
            url: 'process.php?dollar=adsupplier',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(optionesup);
 
    });


    $(".adcust").submit(function (ev) {
        ev.preventDefault();
        
        var optionecus = {
            url: 'process.php?dollar=adcustom',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(optionecus);
 
    });


    $(".updapp").submit(function (ev) {
        ev.preventDefault();
        
        var optionecus = {
            url: 'process.php?dollar=updap',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(optionecus);
 
    });

    $(".adduse").submit(function (ev) {
        ev.preventDefault();
        
        var optionecus = {
            url: 'process.php?dollar=adduser',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(optionecus);
 
    });



    $(".upprod").submit(function (ev) {
        ev.preventDefault();
        
        var optioneupdpro = {
            url: 'process.php?dollar=updpro',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(optioneupdpro);
 
    });

    $(".uppurch").submit(function (ev) {
        ev.preventDefault();
        
        var optioneupdpur = {
            url: 'process.php?dollar=updpurcha',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(optioneupdpur);
 
    });




    $(".updcat").submit(function (ev) {
        ev.preventDefault();
        
        var optioneupdcato = {
            url: 'process.php?dollar=updatcateg',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(optioneupdcato);
 
    });



    $(".updsu").submit(function (ev) {
        ev.preventDefault();
        
        var optioneupdst = {
            url: 'process.php?dollar=updatesup',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(optioneupdst);
 
    });





    $(".edicos").submit(function (ev) {
        ev.preventDefault();
        
        var optioneupdcus = {
            url: 'process.php?dollar=updatecu',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(optioneupdcus);
 
    });


    $(".adcurr").submit(function (ev) {
        ev.preventDefault();
        
        var optioneupcur = {
            url: 'process.php?dollar=updatecurren',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(optioneupcur);
 
    });
    
})
