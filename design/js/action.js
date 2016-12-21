$("#signup-li").on("click", function(){
    $("#signin-li").removeClass("selected");
    $(this).addClass("selected");
    $("#signinContainer").removeClass("show");
    $("#signinContainer").addClass("hide");
    $("#signupContainer").addClass("show");
});
$("#signin-li").on("click", function(){
    $("#signup-li").removeClass("selected");
    $(this).addClass("selected");
    $("#signupContainer").removeClass("show");
    $("#signupContainer").addClass("hide");
    $("#signinContainer").addClass("show");
});