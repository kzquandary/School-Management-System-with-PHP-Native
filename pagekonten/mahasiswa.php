<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="js/plugins-init/datatables.init.js"></script>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
      <div class="row page-titles mx-0">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Mahasiswa</a></li>
			</ol>
    </div>
      <div class="row">
        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Mahasiswa</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="display table table-bordered table-striped" style="min-width: 100px;">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th onclick="sortTable(0)" style="width:20%"><a href="javascript:void()">Nama</a></th>
                                                <th onclick="sortTable(1)"><a href="javascript:void()">Email</a></th>
                                                <th onclick="sortTable(2)"><a href="javascript:void()">Gender</a></th>
                                                <th onclick="sortTable(2)"><a href="javascript:void()">Jurusan</a></th>
                                                <th onclick="sortTable(2)"><a href="javascript:void()">Kelas</a></th>
                                                <th onclick="sortTable(3)"><a href="javascript:void()">Tanggal Lahir</a></th>
                                                <th onclick="sortTable(4)"><a href="javascript:void()">Semester</a></th>
                                                <th onclick="sortTable(5)"><a href="javascript:void()">Wali</a></th>
                                                <th onclick="sortTable(6)"><a href="javascript:void()">Status</a></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $mahasiswa = "SELECT * FROM mahasiswa";
                                            $qmahasiswa = mysqli_query($con, $mahasiswa);
                                            foreach ($qmahasiswa as $data){
                                            ?>
                                            <tr>
                                                <td><img class="rounded-circle" width="50" src="<?= $data['profil']; ?>" alt=""></td>
                                                <td><a href="profil.php?id=<?= $data['nim']; ?>"><font color="blue"><?= $data['nama']; ?></a></font></td>
                                                <td><?= $data['email']; ?></td>
                                                <td><?= $data['gender']; ?></td>
                                                <td><?= $data['jurusan']; ?></td>
                                                <td><?= $data['kelas']; ?></td>
                                                <td><?= $data['birthdate']; ?></td>
                                                <td><?= $data['semester']; ?></td>
                                                <td><?= $data['wali']; ?></td>
                                                <td><?= $data['status']; ?></td>											
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                         <script>
                                        function sortTable(n) {
                                          var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
                                          table = document.getElementById("myTable");
                                          switching = true;
                                          dir = "asc"; 
                                          while (switching) {
                                            switching = false;
                                            rows = table.rows;
                                            for (i = 1; i < (rows.length - 1); i++) {
                                              shouldSwitch = false;
                                              x = rows[i].getElementsByTagName("TD")[n];
                                              y = rows[i + 1].getElementsByTagName("TD")[n];
                                              if (dir == "asc") {
                                                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                                                  shouldSwitch= true;
                                                  break;
                                                }
                                              } else if (dir == "desc") {
                                                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                                                  shouldSwitch = true;
                                                  break;
                                                }
                                              }
                                            }
                                            if (shouldSwitch) {
                                              rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                                              switching = true;
                                              switchcount ++;      
                                            } else {
                                              if (switchcount == 0 && dir == "asc") {
                                                dir = "desc";
                                                switching = true;
                                              }
                                            }
                                          }
                                        }
                         </script>
                   </div>
                </div>
            </div> 
        </div>
    </div>
</div>

