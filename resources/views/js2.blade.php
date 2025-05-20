<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function formValidation() {
        var nrp = document.getElementById("nrp").value;
        var nama = document.getElementById("nama").value;

        if (nrp.length != 10 || isNaN(nrp)) {
            Swal.fire({
                title: "Isi NRP dengan benar!",
                text: "NRP harus 10 digit dan hanya angka",
                icon: "error"
            });
            return false;
        }
        if (nama.length < 1 || /\d/.test(nama)) {
            Swal.fire({
                title: "Isi Nama dengan benar!",
                text: "Nama tidak boleh kosong dan harus huruf!",
                icon: "error"
            });
            return false;
        }
        return true;
    }
    document.getElementById("frmpendaftaran").onsubmit = function() {
        return formValidation();
    };
  
</script>
</head>
<body>
<div class="container">
    <h3>Form Pendaftaran ISE!</h3>
    <form id="frmpendaftaran" action="https://google.co.id" method="get" onsubmit="return formValidation()">
    NRP : <input type="text" id="nrp" name="nrp" class="form-control" placeholder="Silahkan isi NRP Anda , 10 digit , harus angka , gak boleh kosong" >
    <br>
    Nama : <input type="text" id="nama" name="nama" class="form-control" placeholder="Silahkan isi Nama Anda , min. 1 digit , gak boleh kosong">
    <br>
    <input type="submit" class="btn-primary"value="Daftar">
    </form>
    
</div>
</body>
</html>