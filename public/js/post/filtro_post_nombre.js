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
                console.log(data);
                var post = data.post;
                var html = '';
                if (post.length > 0)
                {
                    for (let i = 0; i < post.length; i++) {
                        html += '<tr>\
                                \
                                <td>'+post[i]['name']+'</td>\
                                <td>'+post[i]['foto']+'</td>\
                                <td>'+post[i]['categoria']+'</td>\
                                <td>'+i+'</td>\
                                </tr>';
                    }
                }
                else
                {
                    html += 'no hay post'
                }
                $('.alldata').hide();
                $('#Content').html(html);
            }

        });
    });
});
