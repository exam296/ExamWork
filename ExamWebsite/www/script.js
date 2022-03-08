$(window).on('pageshow', function(){
    //fade in page.

    console.log("A");
    
    $(".allContent").fadeOut(0,function(){
        $(".allContent").fadeIn(100);
    });



    //Page redirect function
    //If a button is clicked and has the data attribute 'redir-loc:', use JQuery to fade out the page
    $('[data-redir-loc]').on('click', function(){
        var targetUrl = $(this).attr("data-redir-loc");
        $(".allContent").fadeOut(100,function(){
            window.location.href = targetUrl;
        });
        
    });


});