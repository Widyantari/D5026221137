function tambah()
{
    var bill = document.getElementById("bill");
    var bill2 = document.getElementById("bill2");
    var hasil = document.getElementById("hasil");

    hasil.innerHTML = parseInt(bill.value) + parseInt (bill2.value) ; 
}

function kali()
{
    var bill = document.getElementById("bill");
    var bill2 = document.getElementById("bill2");
    var hasil = document.getElementById("hasil");

    hasil.innerHTML = bill.value * bill2.value ; 
}