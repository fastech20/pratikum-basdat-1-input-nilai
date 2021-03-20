 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tabel Nilai Mahasiswa</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 </head>

 <body>
     <div class="container">
         <h1 align="center">Tabel Nilai Mahasiswa</h1>
         <form action="hapus.php" method="POST" >
         <table class="table table-striped">
             <thead>
                 <tr>
                     <th scope="col">No</th>
                     <th scope="col">Nama Lengkap</th>
                     <th scope="col">Mata Kuliah</th>
                     <th scope="col">Nilai UTS</th>
                     <th scope="col">Nilai UAS</th>
                     <th scope="col">Nilai Tugas</th>
                 </tr>
             </thead>
             <tbody>
                 <?php
                    $no = 1;
                    //membuka file
                    $data = "nilai.txt";
                    $bukafile = fopen($data, "r");
                    if (!$bukafile) {
                        print("File $data gagal dibuka!");
                        exit;
                    }

                    //membaca file
                    while (!feof($bukafile)) {
                        $data = fgets($bukafile);
                        $row = explode(" ", $data);
                    ?>
                     <tr>
                         <td><?php echo $no++; ?></td>
                         <td><?php echo $row[0]; ?></td>
                         <td><?php echo $row[1]; ?></td>
                         <td><?php echo $row[2]; ?></td>
                         <td><?php echo $row[3]; ?></td>
                         <td><?php echo $row[4]; ?></td>
                         <td> 
                        <input name="no" value="<?php echo $no; ?>" type="hidden">
                        <button type="submit" class="btn btn-danger"> hapus </button></td>
                     </tr>
                 <?php
                    }
                    //menutup file
                    fclose($bukafile);
                    ?>
             </tbody>
         </table>
         </form>
         <a href="input_nilai.php" class="btn btn-success">Tambah Data</a>
     </div>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>

 </html>