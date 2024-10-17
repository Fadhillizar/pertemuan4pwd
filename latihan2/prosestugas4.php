<?php
        // Cek apakah form telah disubmit
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Ambil data dari form
            $nama = $_POST['nama'] ?? '';
            $alamat = $_POST['alamat'] ?? '';
            $password = $_POST['password'] ?? '';
            $jk = $_POST['jk'] ?? '';
            $Asal = $_POST['Asal'] ?? '';
            $pesan = $_POST['pesan'] ?? '';

            // Validasi data
            if (empty($nama)) {
                echo "<p>Nama tidak boleh kosong.</p>";
            } elseif (empty($alamat)) {
                echo "<p>Alamat tidak boleh kosong.</p>";
            } else {
                echo "<h2>DATA BERHASIL DIISI:</h2>";
                echo "<p><strong>Nama:</strong> " . htmlspecialchars($nama) . "</p>";
                echo "<p><strong>Alamat:</strong> " . htmlspecialchars($alamat) . "</p>";
                echo "<p><strong>Jenis Kelamin:</strong> " . htmlspecialchars($jk) . "</p>";
                echo "<p><strong>Kota Asal:</strong> " . htmlspecialchars($Asal) . "</p>";
                echo "<p><strong>Pesan & Kesan:</strong> " . htmlspecialchars($pesan) . "</p>";

                // Menampilkan band yang favorit
                echo "<p><strong>Band Favorit:</strong> ";
                $bands = [];
                $videos = [];
                if (isset($_POST['BMTH'])) {
                    $bands[] = 'Bring Me The Horizon';
                    $videos[] = '<iframe width="560" height="315" src="https://www.youtube.com/embed/-k9qDxyxS3s?si=mAA8DAyrmJN7mF5y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
                }
                if (isset($_POST['Sevenfold'])) {
                    $bands[] = 'Avenged Sevenfold';
                    $videos[] = '<iframe width="560" height="315" src="https://www.youtube.com/embed/3FZlG8Jztxk?si=vUA1snO_gS4KoOPu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
                }
                if (isset($_POST['LP'])) {
                    $bands[] = 'Linkin Park';
                    $videos[] = '<iframe width="560" height="315" src="https://www.youtube.com/embed/0xyxtzD54rM?si=vBw2sFMToP_yyIgy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
                    }
                }
                echo implode(', ', $bands) . "</p>";
            }// Menampilkan nama band dan link video
            echo implode(', ', $bands) . "</p>";

            if (!empty($videos)) {
                echo "<p><strong>Video:</strong></p>";
                foreach ($videos as $video) {
                    echo $video . "<br>";
                }
            } else {
            echo "<p>Form tidak valid atau belum disubmit.</p>";
        }
        ?>
        <a href="tugasp4.php">kembali ke form</a>