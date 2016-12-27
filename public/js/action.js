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
$("#optional-li").on("click", function(){
    $("#required-li").removeClass("selected");
    $(this).addClass("selected");
    $("#required").removeClass("show");
    $("#required").addClass("hide");
    $("#optional").addClass("show");
});
$("#required-li").on("click", function(){
    $("#optional-li").removeClass("selected");
    $(this).addClass("selected");
    $("#optional").removeClass("show");
    $("#optional").addClass("hide");
    $("#required").addClass("show");
});