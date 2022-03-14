$(window).on('pageshow', function(){

    //fade in page.
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

    //Login page buttons
    function onCheckboxChange(e, delay){
        if($(e)[0].checked){
            //If signing up
            $("#loginFullNameBox, #loginAgeBox").attr("class",boxClasses).fadeIn(delay);
            $("#loginIsTeacher").attr("class", checkClasses).fadeIn(delay);
            //Change Header and button Text
            $("#loginPageHeader, #loginSignUpButton").fadeOut(delay/2,function(){
                $(this).text("Sign Up");
                $(this).attr("value", "Sign Up");
                $(this).fadeIn(delay);
            });
        

        }
        else{
            //If loggin in
            $("#loginFullNameBox, #loginAgeBox, #loginIsTeacher").fadeOut(delay,function(){$(this).removeClass()});
            
            //Change Header and button Text
            $("#loginPageHeader, #loginSignUpButton").fadeOut(delay/2,function(){
                $(this).text("Login");
                $(this).attr("value", "Login");
                $(this).fadeIn(delay);
            });
        }
    }
    //https://stackoverflow.com/questions/9870512/how-to-obtain-the-query-string-from-the-current-url-with-javascript
    let params = (new URL(document.location)).searchParams;

    if(params.get("sign")==="1"){
        $("#loginIsSigningUpCheckbox").prop("checked", true);
        onCheckboxChange($("#loginIsSigningUpCheckbox"), 0);
    }else{    
        onCheckboxChange($("#loginIsSigningUpCheckbox"), 0);
    }



    
    var boxClasses = $("#loginFullNameBox").attr("class");
    var checkClasses = $("#loginIsTeacher").attr("class");
    $("#loginIsSigningUpCheckbox").change(function(){
        onCheckboxChange(this, 400);
    });
    
});