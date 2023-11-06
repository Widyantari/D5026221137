<html>

<head>
    <title>Contoh Javascript</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validateForm()
        {
            console.log("Ini baris 14");
            //return false ;   //dimanapun ketemu return, akan exit function.
            //perintah dibawahnya tidak dijalankan
            console.log("Ini baris 16");
            return true ;   //dalam 1 function, bisa ada lebih dari 1 return
            console.log("Ini baris 18");
        }

        function validate() {
            var bill = document.getElementById("bill"); //isiannya lupa tidak diisi
            var bill2 = document.getElementById("bill2");
            var nrp = document.getElementById('nrp');
            var email = document.getElementById('email');
            var message = document.getElementById('message');

            if (bill.value == "") {
                alert("Bilangan 1 harus diisi");
                bill.focus();
                return false;

            }  if (bill2.value == "") {
                alert("Bilangan 2 harus diisi");
                bill2.focus();
                return false;

            }  if (nrp.value == "") {
                alert("nrp harus diisi");
            }  if (isNaN(nrp.value)) {
                alert("NRP harus angka");
                return false;
            }  if (nrp.value.length !=10 ) {
                alert("NRP harus 10 digit");
                return false;
            } if (email.value.length !=5) {
                alert("email harus 5 digit");
                return false;
            } else{
                return true;
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <form action="https://www.detik.com" method="get" onsubmit="return validate();">
            <div class="form-group">
                <label for="bill">Bilangan 1:</label>
                <input type="number" id="bill" class="form-control">
            </div>
            <div class="form-group">
                <label for="bill">Bilangan 2:</label>
                <input type="number" id="bill2" class="form-control">
            </div>
            <div class="form-group">
                <label for="nrp">NRP:</label>
                <input type="text" id="nrp" class="form-control">
            </div>
            <input type="submit" value="KIRIM" class="btn btn-primary">
        </form>
    </div>
</body>

</html>
