$(document).ready(function() {
    // Do anything
    $('.SignUp').click(function (e) { 
        e.preventDefault();
        let username = $(".username").val();
        let password = $(".password").val();
        let confirmpass = $(".Confirmpassword").val();
        //Validation
        if(username==""){
            $(".usernameErr").addClass("usernameErr_Show");
        }else{
            $(".usernameErr").removeClass("usernameErr_Show");
        }
        if(password==""){
            $(".passErr").addClass("passErr_Show");
        }else{
            $(".passErr").removeClass("passErr_Show");
        }
        if(confirmpass==""){
            $(".confirmpassErr").text("Enter Your Confirm Password!");
            $(".confirmpassErr").addClass("confirmpassErr_Show");
        }else{
            $(".confirmpassErr").removeClass("confirmpassErr_Show");
            //Validate Pass and Confirm Pass
            if(confirmpass==password){
                let data = {
                    user:username,
                    pass:password,
                }
                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: "function/insert.php",
                    data: {data:data},
                    success: function(msg){
                        alert('wow'+msg);
                    },
                 });
            }else{
                $(".confirmpassErr").text("Password Didn't Match!");
                $(".confirmpassErr").addClass("confirmpassErr_Show");
            }
        }
    });
});