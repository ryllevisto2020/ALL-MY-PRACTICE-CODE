<?php
$aw='awdawd';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="js/retrieve.js"></script>
        <script src="js/loginSignUp.js"></script>
        <script>
            $(document).ready(function () {
                
                
                $(document).on('click','.delete[data-opt="delete"]',function(){
                    var t = $(this).attr('data-id');
                    console.log(t);
                })
                $(".submit").click(function (e) { 
                    e.preventDefault();
                    var file = $('.fileup');
                    var pass = $('.pass').val();
                    var formData = new FormData();
                    //console.log(file[0].files)
                    formData.append('fileup',file[0].files[0]);
                    formData.append('name',file[0].files[0]);
                    console.log(pass);
                    $.ajax({
                        type: "POST",
                        url: "file.php",
                        data: {pass:pass},
                        Headers:{"Content-type":"Application/json"},
                        success: function (response) {
                            
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
    <?php
    $awd='awd';
    for ($i=0; $i < 5; $i++) { 
    ?>
        <h1><?php echo $aw?></h1>
    <?php
    }
    ?>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <input type="text" name="pword" class="uname">
        <input type="password" name="pword" class="pword">
        <input type="button" value="Sign Up" class="SignInButton" data-id="hello">
        <input type="button" value="Log In" class="SignInButton" data-id="hello">
        <script src="" async defer></script>
        <form>
            <input type="file" name="fileup" id="fileup" class="fileup">
            <input type="text" name="pass" id="pass" class="pass">
            <input type="button" value="submit" name="submit" id="submit" class="submit">
        </form>
        <table >
            <thead>
                <tr>
                    <th>
                        username
                    </th>
                    <th>
                        password
                    </th>
                </tr>
            </thead>
            <tbody class="retrieve">
                <tr>
                    <td>
                        awd
                    </td>
                </tr>

            </tbody>
        </table>
    </body>
</html>