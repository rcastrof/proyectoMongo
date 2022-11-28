console.log('ola')

const search = document.getElementById("search");

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
            console.log(data);
            $('#Content').html(data);
        }
    });
})
