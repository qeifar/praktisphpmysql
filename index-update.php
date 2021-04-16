<!DOCTYPE html><html lang="en"><head><?php include 'etc/head.php' ?></head>
  <body>
    <div class="d-flex" id="wrapper">
      <?php include 'etc/sidebar.php' ?>
      <div id="page-content-wrapper">
        <?php include 'etc/nav.php'; ?>
        <div class="container-fluid">
          
        <?php require_once('config.php');?>
        <?php
        if (isset($_POST['nama']) && isset($_POST['emel'])  && isset($_POST['id'])){
          $id =$_POST['id'];
          $nama =$_POST['nama'];
          $emel = $_POST['emel'];
          $sqlquery= "UPDATE users SET nama = '$nama', emel = '$emel' WHERE ID ='$id';";
          $last_id = $id;
        }else{
          $sqlmax = "select MAX(id) as id from users;";
          $trial = $conn->query($sqlmax);
          foreach ($trial as $last) {
            $lastid= $last['id'];
          }
          $sqlquery= "UPDATE users SET nama = '".generateRandomName()."', emel = '".generateRandomEmail()."' WHERE ID = $lastid;";
          $last_id=$lastid;
        }
        
        if($conn->query($sqlquery) === TRUE){
          // $last_id= $conn->insert_id;
          console_log("Tambahan berjaya");
        }else{
            echo "Gagal :".$sqlquery." ".mysqli_connect_error();
        }
        $sql = "SELECT * FROM (SELECT * FROM users ORDER BY id DESC LIMIT 5) sub ORDER BY id ASC  ";
        $result = $conn->query($sql);

        echo "<table class='mt-4' id='jadual'><tr style='background:tomato;'><th>ID</th><th>Nama</th><th>Emel</th><th>Dibuat Pada</th><th>Dikemaskini Pada</th></tr>";
        if ($result->num_rows>0){
            //print data
            $n=0;
            while ($row=$result->fetch_assoc()) {
              $rowselect[$n]=$row["id"];$n++;
              if ($row["id"] == $last_id) {
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
            <FORM action="https://legoom.biz.my/praktisphpmysql/index-update.php" method="get">
              <div class="form-group">
                <INPUT TYPE="submit" id="frm1_submit" VALUE="Kemaskini contoh row terakhir"> atau
              </div>
            </FORM>
          
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="formsubmit" method="post" onSubmit="return Register('update')">
            <div class="form-group row">
              <label for="id" class="col-2">ID</label>
              <select name="id" id="id" form="formsubmit">
                <?php foreach ($rowselect as $choice) {
                  echo "<option value='$choice'>Kemaskini ID nombor $choice </option>";
                } ?>
              </select>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-2">Nama</label>
              <input type="text" class="form-control col-8" id="nama" name="nama" placeholder="Masukkan nama">
            </div>
            <div class="form-group row">
              <label for="emel" class="col-2">Emel</label>
              <input type="email" class="form-control col-8" id="emel" name="emel" aria-describedby="emailHelp" placeholder="Masukan emel">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

        <pre style="background:lightgreen; width:50%; margin-top:50px; margin-left:70px;"><blockquote>
        &lt;?php require_once('config.php');?&gt;
        &lt;?php
        if (isset($_POST['nama']) && isset($_POST['emel'])){
          $nama =$_POST['nama'];
          $emel = $_POST['emel'];
          $sqlquery= "INSERT INTO users (nama,emel) VALUES('$nama','$emel');";
        }else{
          $sqlquery= "INSERT INTO users (nama,emel) VALUES('".generateRandomName()."','".generateRandomEmail()."');";
        }
        if($conn-&gt;query($sqlquery) === TRUE){
          $last_id= $conn-&gt;insert_id;
          console_log("Tambahan berjaya");
        }else{
            echo "Gagal :".$sqlquery." ".mysqli_connect_error();
        }
        $sql = "SELECT * FROM (SELECT * FROM users ORDER BY id DESC LIMIT 5) sub ORDER BY id ASC  ";
        $result = $conn-&gt;query($sql);

        echo "&lt;table class='mt-4' id='jadual'&gt;&lt;tr style='background:tomato;'&gt;&lt;th&gt;ID&lt;/th&gt;&lt;th&gt;Nama&lt;/th&gt;&lt;th&gt;Emel&lt;/th&gt;&lt;th&gt;Dibuat Pada&lt;/th&gt;&lt;/tr&gt;";
        if ($result-&gt;num_rows&gt;0){
            
            //print data
            while ($row=$result-&gt;fetch_assoc()) {
              if ($row["id"] == $last_id) {
                echo "&lt;tr style='color:blue;'&gt;";
              }else 
                echo "&lt;tr&gt;";
              echo "&lt;td&gt;".$row["id"]."&lt;/td&gt;&lt;td&gt;".$row["nama"]."&lt;/td&gt;&lt;td&gt;".$row["emel"]."&lt;/td&gt;&lt;td&gt;".$row["created_at"]."&lt;/td&gt;&lt;/tr&gt;";
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
                &lt;INPUT TYPE="button" onClick="history.go(0)" VALUE="Kemaskini contoh row terakhir"&gt; atau
              &lt;/div&gt;
            &lt;/FORM&gt;
          
          &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?&gt;" method="post" onSubmit="return Register()"&gt;
            &lt;div class="form-group row"&gt;
              &lt;label for="nama" class="col-2"&gt;Nama&lt;/label&gt;
              &lt;input type="text" class="form-control col-8" id="nama" name="nama" placeholder="Masukkan nama"&gt;
            &lt;/div&gt;
            &lt;div class="form-group row"&gt;
              &lt;label for="emel" class="col-2"&gt;Emel&lt;/label&gt;
              &lt;input type="email" class="form-control col-8" id="emel" name="emel" aria-describedby="emailHelp" placeholder="Masukan emel"&gt;
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
