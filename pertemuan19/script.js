//mengambil elemen2 yang dibutuhkan
//ini mengambil element yang punya id keyword
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

//menambahkan function ketika kolom pencarian di tulis
//keyup ketika kita selesai menekan tombol dikeyboard
keyword.addEventListener('keyup', function () {
    //membuat object ajax
    var xhr = new XMLHttpRequest();

    //cek apakah ajax siap menerima request
    xhr.onreadystatechange = function () {
        //4 berarti sumber sudah ready
        //status kalo 200 berarti sudah ok
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log('ajax ok');
        }
    };

    //eksekusi ajax
    //parameter1 yaitu request metodnya apa
    //parameter2 yaitu  sumbernya dari mana
    //parameter3 yaitu true untuk asyn
    xhr.open('GET', 'ajax/coba.txt', true);

    //menjalankan ajax
    xhr.send();

    //ini akan mengambil value dari keyword,
    //dimana ini akan mengambil value dari apapun ketikan kita
    keyword.value;
});
