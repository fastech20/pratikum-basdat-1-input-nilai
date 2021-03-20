<?php
//cek button    
if ($_POST['Submit']     == "Submit") {
    $nama                 = $_POST['nama'];
    $matkul               = $_POST['matkul'];
    $nilai_uts            = $_POST['nilai_uts'];
    $nilai_uas            = $_POST['nilai_uas'];
    $nilai_tugas          = $_POST['nilai_tugas'];

    //validasi data data kosong
    if (empty($_POST['nama']) || empty($_POST['matkul']) || empty($_POST['nilai_uts']) || empty($_POST['nilai_uas']) || empty($_POST['nilai_tugas'])) { 
?>
    <script language="JavaScript">
       alert('Data Harap Dilengkapi!');
       document.location = 'input_nilai.php';
    </script>
    <?php
    } else {
        //Membuka file
        $data = "nilai.txt";
        $bukafile = fopen($data, "a");
        if (!$bukafile) {
            print("File $data gagal dibuka!");
            exit;
    ?>
        <script language="JavaScript">
            alert('Tambah Data Nilai Gagal');
            document.location = 'input_nilai.php';
        </script>
    <?php
    }
    //menulis file
    $data_baru = $nama . ' ' . $matkul . ' ' . $nilai_uts . ' ' . $nilai_uas . ' ' . $nilai_tugas;
    fwrite($bukafile, PHP_EOL . $data_baru);

    //menutup file
    fclose($bukafile);
    ?>
    <script language="JavaScript">
        alert('Tambah Data Nilai Berhasil');
        document.location = 'output.php';
    </script>
<?php
    }
}
?>