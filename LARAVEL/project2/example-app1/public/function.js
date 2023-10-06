$(document).ready(function() {
    function load(){
        $('.test').load('/');
    }
    $('.SignUp').click(function () {
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
                let token = $(".token").val();
                let data = {
                    user:username,
                    pass:password,
                }
                $.ajax({
                    headers:{"Content-type":"application/x-www-form-urlencoded; charset=UTF-8","Authorization":"Bearer "+token+"",'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: "post",
                    dataType: "json",
                    url: "insert",
                    data: {data:data},
                    success: function(res){
                        alert('awd');
                        load();
                    },
                 });
            }else{
                $(".confirmpassErr").text("Password Didn't Match!");
                $(".confirmpassErr").addClass("confirmpassErr_Show");
            }
        }
    });

});
