
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS REKWEB-Halaman 1</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>REGISTRATION FORM</h1>
    <div class="icon">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
        <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
        </svg>
    </div>

    <div class="form">
    <form action="halaman2.php" method="post">
    <input type="hidden" name="date2" >
        <ul>
            <li>
                <label for="nama1">FIRSTNAME</label>
                <input type="text" name="nama1" id="nama1" required>
            </li>
            <li>
                <label for="nama2">SURNAME</label>
                <input type="text" name="nama2" id="nama2"required>
            </li>
            <li>
                <label for="nama3">ADDRESS</label>
                <input type="text" name="alamat" id="nama3"required>
            </li>
            <li>
                <label for="nama4">POSTCODE</label>
                <input type="text" name="kdpos" id="nama4"required>
            </li>
            <li>
                <label for="nama5">DATE OF BIRTH</label>
                <input type="date" name="date" id="nama5"required>
            </li>
            <li>
                <label for="nama6">TELEPHONE(Day)</label>
                <input type="text" name="tlp1" id="nama6"required>
            </li>
            <li>
                <label for="nama7">TELEPHONE(evening)</label>
                <input type="text" name="tlp2" id="nama7"required>
            </li>
            <li>
                <label for="nama8">EMAIL ADDRESS</label>
                <input type="text" name="email" id="nama8"required>
            </li>
            <li>
                <button type="submit" name="proses" id="proses" class="btn btn-success">Proses</button>
            </li>
        </ul>
    
    </form>
    </div>
    <div class="bg"></div>
    <div class="motive">
        <h3>"Succesful people are people who are always creating new things and looking for ways to make improvements"</h3>
    </div>

    <div class="copy">
        <h1>Copyright&copy;<?= date('Y'); ?>-Developed By Nofrisdan Sitopu</h1>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    
</body>
</html>