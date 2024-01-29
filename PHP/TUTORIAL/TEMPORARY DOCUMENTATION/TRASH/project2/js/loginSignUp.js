class creds{
    username;
    password;
}

$(document).ready(function() {
    // Do anything
    let creds_info = new creds();
    $(document).on("click", ".SignInButton[data-id=hello]", function () {
        // Do anything
        creds_info = {
            username:$(".uname").val(),
            password:$(".pword").val(),
        };
        if($(this).val()=="Sign Up"){
            $.ajax({
                type: "GET",
                url: "create.php",
                data: {creds_info,signUp:"signUp"},
                //dataType: "dataTpye",
                headers:{"Content-type":"Application/json"},
                success: function (response, textStatus, jqXHR) {
                    //Do anything
                    //alert(response.message);
                    if(response.code){
                        alert(response.message);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.table(jqXHR)
                }
            });
        }else{
            $.ajax({
                type: "GET",
                url: "create.php",
                data: {creds_info,signIn:"signIn"},
                //dataType: "dataTpye",
                headers:{"Content-type":"Application/json"},
                success: function (response, textStatus, jqXHR) {
                    //Do anything
                    alert(response.message);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.table(jqXHR)
                }
            });
        }
    });
});