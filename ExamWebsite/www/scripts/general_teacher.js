var modalHtml = "";
const DEBUG_ENABLED = true;




$(window).on('pageshow', function(){
    $(".allContent").fadeOut(0,function(){
        $(this).fadeIn(400);
    });

    $("#page-load").fadeOut(0);

    //Page redirect function
    //If a button is clicked and has the data attribute 'redir-loc:', use JQuery to fade out the page
    $('[data-redir-loc]').on('click', function(){
        redirectPage($(this).attr("data-redir-loc"));
    });
});


function redirectPage(url){
    var targetUrl = url;

    $(".allContent").fadeOut(400,function(){
        window.location.href = targetUrl;
    });
}


//Async stuff
$(function(){
    $(".group-item-box").on("click", function(){
        var teachingGroupId = $(this).attr("data-teachingGroup-id");
        let teachingGroupModal = $("#teachingGroupModal[data-teachingGroup-id='"+teachingGroupId+"']");
        teachingGroupModal.modal("show");



        
    });


});


