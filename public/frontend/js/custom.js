$(document).ready(function() {

    $('.addToCartBtn').click(function(e) {
        e.preventDefault();

        var id_produk = $(this).closest('.product_data').find('.id_produk').val();
        var jumlah_produk = $(this).closest('.product_data').find('.qty-input').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                'id_produk': id_produk,
                'jumlah_produk': jumlah_produk,
            },
            success: function(response) {
                alert(response.status);
            }
        });

    });

    $('.increment-btn').click(function(e) {
        e.preventDefault();

        var inc_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 50)
        {
            value++;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });

    $('.decrement-btn').click(function (e) {
        e.preventDefault();

        var dec_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1)
        {
            value--;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.delete-cart-item').click(function (e) {
        e.preventDefault();



        var id_produk = $(this).closest('.product_data').find('.id_produk').val();
        $.ajax({
            type: "POST",
            url: "delete-cart-item",
            data: {
                'id_produk':id_produk,
            },
            success: function (response) {
                alert(response.status);
                window.location.reload();
            }
        });
    });

    $('.changeQuantity').click(function (e) {
        e.preventDefault();

        var id_prod = $(this).closest('.product_data').find('.id_produk').val();
        var jumlah = $(this).closest('.product_data').find('.qty-input').val();
        data = {
            'id_produk' :id_prod,
            'jumlah_produk' :jumlah,
        }

        $.ajax({
            type: "POST",
            url: "update-cart",
            data: data,
            success: function (response) {
                window.location.reload();
            }
        });
    });
});
