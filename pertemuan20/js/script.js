//untuk menghilangkan tombol cari
$('#tombol-cari').hide();

//ini adalah ketika document sudah ready, atau index kita sudah ready, maka ini bisa dieksekusi
//ini memungkinkan untuk kita menaruh script diatas header
$(document).ready(function () {
    //event ketika keyword ditulis
    $('#keyword').on('keyup', function () {
        //memunculkan elemen loader
        $('.loader').show();

        //breakdown code: 1. jquery cari elemen container, dan load(ubah) isinya dengan data ajax/sepatu.php?keyword= + value yang ada di elemen keyword.

        // $('#container').load('ajax/sepatu.php?keyword=' + $('#keyword').val());
        //fungsi load hanya bisa get, tidak bisa post

        //ini sama seperti load
        //ini yaitu, ambil data dan tambahkan keyword.val, lalu setelah itu lakukan function ini, yaitu gantikan container menjadi html(data), lalu hilangkan loadernya
        $.get('ajax/sepatu.php?keyword=' + $('#keyword').val(), function (data) {
            $('#container').html(data);

            $('.loader').hide();
        });
    });
});
