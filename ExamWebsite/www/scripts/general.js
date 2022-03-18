var modalHtml = "";





$(window).on('pageshow', function(){
    $(".allContent").fadeOut(0,function(){
        $(this).fadeIn(400);
    });

    $("#page-load").fadeOut(0);

    //Page redirect function
    //If a button is clicked and has the data attribute 'redir-loc:', use JQuery to fade out the page
    $('[data-redir-loc]').on('click', function(){
        var targetUrl = $(this).attr("data-redir-loc");

        $(".allContent").fadeOut(400,function(){
            window.location.href = targetUrl;
        });
    });

    console.log("A");





});


//Async stuff
$(function(){
    $(".item-box").on("click", function(){

        
        $("#page-load").fadeIn(100);
        $.ajax(
            {
                type: "POST",
                url: "ajaxBuildTask.php",
                data: {"taskId": $(this).attr("data-task-id")},

                success: function(result){ 
                    $("#page-load").fadeOut(100);
                    console.log(result);
                    modalHtml = result;
                },

                failure: function(){
                    $("#page-load").fadeOut(100)
                }
            })
            
              .then(function(){
                $("#modal-space").html(modalHtml);
                let taskModal = $("#taskModal");
                taskModal.modal("show");
            });

    
    });

});


