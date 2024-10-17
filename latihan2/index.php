<!DOCTYPE html>
<html>
<head>
    <title>From Fadhil Muhammad</title>
    <style>
        body {
            background-image: url('../img/bring.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            position: absolute;
            top: 100px; 
            left: 50%;
            transform: translateX(-50%);
            margin: 0;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin-top: 60px;
        }
    </style>
</head>
<body>
    <h1>Data Fadhil Muhammad</h1>
    <form action="prosestugas4.php" method="post">
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Alamat:</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin:</td>
                <td>
                    <input type="radio" name="jk" required value="laki-laki">Laki-laki
                    <input type="radio" name="jk" required value="perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Band Favorit:</td>
                <td>
                    <input type="checkbox" name="BMTH">Bring Me The Horizon
                    <input type="checkbox" name="Sevenfold">Avenged Sevenfold
                    <input type="checkbox" name="LP">Linkin Park
                </td>
            </tr>
            <tr>
                <td>Kota Asal:</td>
                <td>
                    <select name="Asal" id="Asal">
                        <option value="Bogor">Bogor</option>
                        <option value="Jakarta">Jakarta</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pesan & Kesan:</td>
                <td><textarea name="pesan" id="pesan" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Simpan Data">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>