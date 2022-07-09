<?php include("inc_header.php")?>
        <?php
$sukses= "";

        ?>
        <h1>INFORMATION</h1>
        <p>
            <a href="pageinput.php">
            <input type="button" class="btn btn-primary" value="Input Data"/>
            </a>
        </p>
        <?php
        if($sukses){
          ?>  
            <div class="alert alert-primary" role="alert">
                <?php echo $sukses?>          
            </div>
            <?php
        }
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-1">#</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Kelas</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql1  = "SELECT * from tabelmhs";
                $q1  = mysqli_query($koneksi, $sql1);
                $nomor = 1;
                while($r1 = mysqli_fetch_array($q1)){
                    ?>
                     <tr>
                    <td><?php echo $nomor++?></td>
                    <td><?php echo $r1['nim']?></td>
                    <td><?php echo $r1['nama']?></td>
                    <td><?php echo $r1['jurusan']?></td>
                    <td><?php echo $r1['alamat']?></td>
                    <td><?php echo $r1['jeniskelamin']?></td>
                    <td><?php echo $r1['agama']?></td>
                    <td><?php echo $r1['kelas']?></td>
                    <td>
                        <a href="pageinput.php?id=<?php echo $r1['id']?>">
                        <span class="badge bg-warning text-dark">Edit</span>
                        </a>
                        <a href="index.php?op=delete&id=<?php echo $r1['id']?>" onclick="return confirm('Yakin Hapus?')">
                        <span class="badge bg-danger">Delete</span>
                        </a>
                    </td>
                </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php include("inc_footer.php")?>