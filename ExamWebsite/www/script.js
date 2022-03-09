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
    function onCheckboxChange(e){
        if($(e)[0].checked){
            //If signing up
            $("#loginFullNameBox").attr("class",boxClasses);
            $("#loginFullNameBox").fadeIn(400);
            $("#loginAgeBox").attr("class",boxClasses);
            $("#loginAgeBox").fadeIn(400);
            
            //Change Header and button Text
            $("#loginPageHeader, #loginSignUpButton").fadeOut(200,function(){
                $(this).text("Sign Up");
                $(this).attr("value", "Sign Up");
                $(this).fadeIn(400);
            });
        

        }
        else{
            //If loggin in
            $("#loginFullNameBox").fadeOut(400,function(){$(this).removeClass()});
            $("#loginAgeBox").fadeOut(400,function(){$(this).removeClass()});

            //Change Header and button Text
            $("#loginPageHeader, #loginSignUpButton").fadeOut(200,function(){
                $(this).text("Login");
                $(this).attr("value", "Login");
                $(this).fadeIn(400);
            });
        }
    }
    //https://stackoverflow.com/questions/9870512/how-to-obtain-the-query-string-from-the-current-url-with-javascript
    let params = (new URL(document.location)).searchParams;

    if(params.get("sign")==="1"){
        $("#loginIsSigningUpCheckbox").prop("checked", true);
        onCheckboxChange($("#loginIsSigningUpCheckbox"));
    }else{    
        onCheckboxChange($("#loginIsSigningUpCheckbox"));
    }



    
    var boxClasses = $("#loginFullNameBox").attr("class");
    $("#loginIsSigningUpCheckbox").change(function(){
        onCheckboxChange(this);
    });
    
});