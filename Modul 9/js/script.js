//ambil elemen html
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombolCari');
var container = document.getElementById('container');

//event dlm field keyword
keyword.addEventListener('keyup', function(){
    //membuat objek ajax
    var xhr = new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        }
    }
    // buat ajax
    xhr.open('GET', 'ajax/mahasiswa.php?keyword='+keyword.value, true);
    xhr.send();
});