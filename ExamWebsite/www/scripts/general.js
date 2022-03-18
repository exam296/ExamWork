var modalHtml = "";

var ajaxRequestTask = function(userTaskIndex){
    $.ajax({url: "ajaxBuildTask.php", success: function(result){modalHtml = result;}});
    return modalHtml;
}



$(window).on('pageshow', function(){
    $(".allContent").fadeOut(0,function(){
        $(this).fadeIn(400);
    });



    //Page redirect function
    //If a button is clicked and has the data attribute 'redir-loc:', use JQuery to fade out the page
    $('[data-redir-loc]').on('click', function(){
        var targetUrl = $(this).attr("data-redir-loc");

        $(".allContent").fadeOut(400,function(){
            window.location.href = targetUrl;
        });
    });

    console.log("A");

    $(".item-box").on("click", function(){

        let modal = ajaxRequestTask();
        
        $("#modal-space").html(modal);
        let taskModal = $("#taskModal");
        console.log(modal);
        taskModal.modal("show");
    
    });



});