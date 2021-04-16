<!DOCTYPE html><html lang="en"><head><?php include 'etc/head.php' ?></head>
  <body>
    <div class="d-flex" id="wrapper">
      <?php include 'etc/sidebar.php' ?>
      <div id="page-content-wrapper">
        <?php include 'etc/nav.php'; ?>
        <div class="container-fluid">
          
        <?php require_once('config.php');?>
        <?php
        if (isset($_POST['nama']) && isset($_POST['emel']) && isset($_POST['nama2']) && isset($_POST['emel2']) && isset($_POST['nama3']) && isset($_POST['emel3'])){
          $nama =$_POST['nama'];
          $nama2 =$_POST['nama2'];
          $nama3 =$_POST['nama3'];
          $emel = $_POST['emel'];
          $emel2 = $_POST['emel2'];
          $emel3 = $_POST['emel3'];
          $sqlmulti= "INSERT INTO users (nama,emel) VALUES('$nama','$emel');";
          $sqlmulti.= "INSERT INTO users (nama,emel) VALUES('$nama2','$emel2');";
          $sqlmulti.= "INSERT INTO users (nama,emel) VALUES('$nama3','$emel3');";
        }else{
          $sqlmulti="";
          for ($i=0; $i < 3 ; $i++) {
            $sqlmulti.= "INSERT INTO users (nama,emel) VALUES('".generateRandomName()."','".generateRandomEmail()."');";
          }
        }
        $sqlmulti .= "SELECT * FROM (SELECT * FROM users ORDER BY id DESC LIMIT 5) sub ORDER BY id ASC  ";

        if($conn->multi_query($sqlmulti)){
          do {
            if ($result = $conn->store_result()) {
               while ($row = $result->fetch_row()) {
              $last_date=$row[3];
               }
            }
         } while ($conn->next_result());
          console_log("Tambahan berjaya");
        }else{
            echo "Gagal :".$sqlmulti." ".mysqli_connect_error();
        }
        echo "<table class='mt-4' id='jadual'><tr style='background:tomato;'><th>ID</th><th>Nama</th><th>Emel</th><th>Dibuat Pada</th><th>Dikemaskini Pada</th></tr>";
        if ($result->num_rows>0){
            foreach ($result as $row) {
              if ($row["created_at"] == $last_date) {
                echo "<tr style='color:blue;'>";
              }else
                echo "<tr>";
              echo "<td>".$row["id"]."</td><td>".$row["nama"]."</td><td>".$row["emel"]."</td><td>".$row["created_at"]."</td><td>".$row["updated_at"]."</td></tr>";
       
            }
        }else{
            echo "<tr><td>Data tiada</td></tr>";
        }
        echo "</table>";
        ?>
        <br/>
        <div class="container">
            <FORM action="https://legoom.biz.my/praktisphpmysql/index-insert-ganda.php" method="get">
              <div class="form-group">
                <INPUT TYPE="submit" id="frm1_submit" VALUE="Kemaskini contoh row terakhir"> atau
              </div>
            </FORM>
          
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  onSubmit="return Register('insert-ganda')">
            <div class="form-group row">
              <label for="nama" class="col-2">Nama</label>
              <input type="text" class="form-control col-8" id="nama" name="nama" placeholder="Masukkan nama">
            </div>
            <div class="form-group row">
              <label for="emel" class="col-2">Emel</label>
              <input type="email" class="form-control col-8" id="emel" name="emel" aria-describedby="emailHelp" placeholder="Masukan emel">
            </div>
            <div class="form-group row">
              <label for="nama2" class="col-2">Nama 2</label>
              <input type="text" class="form-control col-8" id="nama2" name="nama2" placeholder="Masukkan nama">
            </div>
            <div class="form-group row">
              <label for="emel2" class="col-2">Emel 2</label>
              <input type="email" class="form-control col-8" id="emel2" name="emel2" aria-describedby="emailHelp" placeholder="Masukan emel">
            </div>
            <div class="form-group row">
              <label for="nama3" class="col-2">Nama 3</label>
              <input type="text" class="form-control col-8" id="nama3" name="nama3" placeholder="Masukkan nama">
            </div>
            <div class="form-group row">
              <label for="emel3" class="col-2">Emel 4</label>
              <input type="email" class="form-control col-8" id="emel3" name="emel3" aria-describedby="emailHelp" placeholder="Masukan emel">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

        <pre style="background:lightgreen; width:50%; margin-top:50px; margin-left:70px;"><blockquote>
        &lt;?php require_once('config.php');?&gt;
        &lt;?php
        if (isset($_POST['nama']) && isset($_POST['emel']) && isset($_POST['nama2']) && isset($_POST['emel2']) && isset($_POST['nama3']) && isset($_POST['emel3'])){
          $nama =$_POST['nama'];
          $nama2 =$_POST['nama2'];
          $nama3 =$_POST['nama3'];
          $emel = $_POST['emel'];
          $emel2 = $_POST['emel2'];
          $emel3 = $_POST['emel3'];
          $sqlmulti= "INSERT INTO users (nama,emel) VALUES('$nama','$emel');";
          $sqlmulti.= "INSERT INTO users (nama,emel) VALUES('$nama2','$emel2');";
          $sqlmulti.= "INSERT INTO users (nama,emel) VALUES('$nama3','$emel3');";
        }else{
          $sqlmulti="";
          for ($i=0; $i &lt; 3 ; $i++) {
            $sqlmulti.= "INSERT INTO users (nama,emel) VALUES('".generateRandomName()."','".generateRandomEmail()."');";
          }
        }
        $sqlmulti .= "SELECT * FROM (SELECT * FROM users ORDER BY id DESC LIMIT 5) sub ORDER BY id ASC  ";

        if($conn-&gt;multi_query($sqlmulti)){
          do {
            if ($result = $conn-&gt;store_result()) {
               while ($row = $result-&gt;fetch_row()) {
              $last_date=$row[3];
               }
            }
         } while ($conn-&gt;next_result());
          console_log("Tambahan berjaya");
        }else{
            echo "Gagal :".$sqlmulti." ".mysqli_connect_error();
        }
        echo "&lt;table class='mt-4' id='jadual'&gt;&lt;tr style='background:tomato;'&gt;&lt;th&gt;ID&lt;/th&gt;&lt;th&gt;Nama&lt;/th&gt;&lt;th&gt;Emel&lt;/th&gt;&lt;th&gt;Dibuat Pada&lt;/th&gt;&lt;th&gt;Dikemaskini Pada&lt;/th&gt;&lt;/tr&gt;";
        if ($result-&gt;num_rows&gt;0){
            foreach ($result as $row) {
              if ($row["created_at"] == $last_date) {
                echo "&lt;tr style='color:blue;'&gt;";
              }else
                echo "&lt;tr&gt;";
              echo "&lt;td&gt;".$row["id"]."&lt;/td&gt;&lt;td&gt;".$row["nama"]."&lt;/td&gt;&lt;td&gt;".$row["emel"]."&lt;/td&gt;&lt;td&gt;".$row["created_at"]."&lt;/td&gt;&lt;td&gt;".$row["updated_at"]."&lt;/td&gt;&lt;/tr&gt;";
       
            }
        }else{
            echo "&lt;tr&gt;&lt;td&gt;Data tiada&lt;/td&gt;&lt;/tr&gt;";
        }
        echo "&lt;/table&gt;";
        ?&gt;
        &lt;br/&gt;
        &lt;div class="container"&gt;
            &lt;FORM&gt;
              &lt;div class="form-group"&gt;
                &lt;INPUT TYPE="button" onClick="history.go(0)" VALUE="Masukkan contoh"&gt; atau
              &lt;/div&gt;
            &lt;/FORM&gt;
          
          &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?&gt;" method="post"  onSubmit="return Register('insert-ganda')"&gt;
            &lt;div class="form-group row"&gt;
              &lt;label for="nama" class="col-2"&gt;Nama&lt;/label&gt;
              &lt;input type="text" class="form-control col-8" id="nama" name="nama" placeholder="Masukkan nama"&gt;
            &lt;/div&gt;
            &lt;div class="form-group row"&gt;
              &lt;label for="emel" class="col-2"&gt;Emel&lt;/label&gt;
              &lt;input type="email" class="form-control col-8" id="emel" name="emel" aria-describedby="emailHelp" placeholder="Masukan emel"&gt;
            &lt;/div&gt;
            &lt;div class="form-group row"&gt;
              &lt;label for="nama2" class="col-2"&gt;Nama 2&lt;/label&gt;
              &lt;input type="text" class="form-control col-8" id="nama2" name="nama2" placeholder="Masukkan nama"&gt;
            &lt;/div&gt;
            &lt;div class="form-group row"&gt;
              &lt;label for="emel2" class="col-2"&gt;Emel 2&lt;/label&gt;
              &lt;input type="email" class="form-control col-8" id="emel2" name="emel2" aria-describedby="emailHelp" placeholder="Masukan emel"&gt;
            &lt;/div&gt;
            &lt;div class="form-group row"&gt;
              &lt;label for="nama3" class="col-2"&gt;Nama 3&lt;/label&gt;
              &lt;input type="text" class="form-control col-8" id="nama3" name="nama3" placeholder="Masukkan nama"&gt;
            &lt;/div&gt;
            &lt;div class="form-group row"&gt;
              &lt;label for="emel3" class="col-2"&gt;Emel 4&lt;/label&gt;
              &lt;input type="email" class="form-control col-8" id="emel3" name="emel3" aria-describedby="emailHelp" placeholder="Masukan emel"&gt;
            &lt;/div&gt;
            &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
          &lt;/form&gt;
        &lt;/div&gt;</blockquote>
        </pre>
        </div>

      </div>
    </div><?php include 'etc/script.php' ?>
  </body>
</html>
