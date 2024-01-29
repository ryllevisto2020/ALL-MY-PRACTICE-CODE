<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
        //<![CDATA[
            $(document).ready(function() {
                let a = $('.awd');

                function load(){
                    a.load('testBody');
                };

                $(".SignUp").click(function(e){
                    e.preventDefault();
                    let  username = $(".username").val();
                    let password = $(".password").val();
                    let action = $(this).val();
                    let data = {
                        username:username,
                        password:password
                    }
                    $.ajax({
                        type: "GET",
                        url: "http://127.0.0.1:8000/testBody/create",
                        data: {data,signUpAction:action},
                        dataType: "JSON",
                        headers:{"Content-type":"Application/json",
                        "Access-Control-Allow-Origin":"*","Access-Control-Allow-Methods":"GET, POST, PUT,OPTIONS,DELETE","Access-Control-Allow-Headers":"Content-Type,X-Auth-Token,Origin,Authorization"},
                        success: function (response) {
                            
                        }
                    });
                })
            });
            //]]>
        </script>
	<title></title>
</head>
<body>
	<input type="text" name="username" id="" class="username">
            <input type="password" name="password" id="" class="password">
            <input type="button" value="Sign Up" class="SignUp">
</body>
</html>