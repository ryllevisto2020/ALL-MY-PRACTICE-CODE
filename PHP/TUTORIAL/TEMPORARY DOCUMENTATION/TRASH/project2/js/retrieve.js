$(document).ready(function() {
    // Do anything
    load();
    function load(){
        $.ajax({
            type: "GET",
            url: "retrieve.php",
            //data: "data",
            //dataType: "dataTpye",
            headers:{"Content-type":"Application/json"},
            success: function (response, textStatus, jqXHR) {
                //Do anything
                for (let index = 0; index < response.length; index++) {
                    $(".retrieve").append(
                        $('<tr>'+
                        '<td>'+response[index].uname+'</td>'+
                        '<td>'+response[index].pword+'</td>'+
                        '<td>'+
                        '<input type="button" value="submit" name="submit" id="submit" class="delete" data-opt="delete" data-id="'+response[index].id+'">'+
                        '</td>'+
                        '</tr>')
                    );
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.table(jqXHR)
            }
        });
    }
});