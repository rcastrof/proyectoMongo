const search = document.getElementById("search");
const categoria = document.getElementById("selectCategoria")

$("#selectCategoria").change(function() {
    var id = $(this).children(":selected").attr("id");
    console.log(id)
  });

$('#search').on('keyup', function() {
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

        success: function(data) {
            $('#Content').html(data);
        }
    });
})
