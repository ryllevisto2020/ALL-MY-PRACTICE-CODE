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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!--<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.esm.js"></script>-->
        <script>
            $(document).ready(function(){
                $.ajax({
                    url:"toast.php",
                    method:"GET",
                    headers:{"Content-type":"Application/json"},
                    success:function(res){
                        
  console.log(a);
                        for (let index = 0; index < res.length; index++) {
                            var a = '<div class="toast-container position-static">'+
  '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">'+
    '<div class="toast-header">'+
      '<img src="..." class="rounded me-2" alt="...">'+
      '<strong class="me-auto">Bootstrap</strong>'+
      '<small class="text-body-secondary">just now</small>'+
      '<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>'+
    '</div>'+
    '<div class="toast-body">'+
      ''+res[index]+''+
    '</div>'+
  '</div>'
                            $(".test").append($(a));
                            $(".toast").toast({delay:5000});
                        $(".toast").toast("show");
                        }
                        
                       
                    }
                })
            })
        </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="test">

        </div>

        
        <script src="" async defer></script>
    </body>
</html>