const search = document.getElementById("search");

$('#search').on('keyup', function () {
    $value = $(this).val();
    if ($value) {
        $('.alldata').hide();
        $('.searchdata').show();
    } else {
        $('.alldata').show();
        $('.searchdata').hide();
    }

    $.ajax({
        type: 'get',
        url: 'search',
        data: {
            'search': $value
        },

        success: function (data) {
            $('#Content').html(data);
        }
    });
})
//// filtro por select
$(document).ready(function(){
    $("#selectCategoria").on('change',function(){
        var selectCategoria = $(this).val();
        $.ajax({
            url:'selectCategoria',
            type:"GET",
            data:{
                'selectCategoria':selectCategoria
            },
            success:function(data){
                $('.alldata').hide();
                $('#Content').html(data);
            }

        });
    });
});
