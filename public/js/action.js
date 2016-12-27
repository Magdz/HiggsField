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
$("#textUpdate").on("click", function(){
    $("#photoUpdateDiv").removeClass("tabSelected");
    $("#textUpdateDiv").addClass("tabSelected");
    $("#status-photo").removeClass("show");
    $("#status-photo").addClass("hide");
    $("#status-txt").addClass("show");
});
$("#photoUpdate").on("click", function(){
    $("#textUpdateDiv").removeClass("tabSelected");
    $("#photoUpdateDiv").addClass("tabSelected");
    $("#status-txt").removeClass("show");
    $("#status-txt").addClass("hide");
    $("#status-photo").addClass("show");
});