<!DOCTYPE html><html lang="en"><head><?php include 'etc/head.php' ?></head>
  <body>
    <div class="d-flex" id="wrapper">
      <?php include 'etc/sidebar.php' ?>
      <div id="page-content-wrapper">
        <?php include 'etc/nav.php'; ?>
        <div class="container-fluid">
          
        <?php require_once('config.php');?>
        <?php
        if ( isset($_POST['id'])){
          $id =$_POST['id'];
          $sqlquery= "DELETE FROM users WHERE ID ='$id';";
          $last_id = $id;
          
          if($conn->query($sqlquery) === TRUE){
            console_log("Data berjaya dipadam");
          }else{
            echo "Gagal :".$sqlquery." ".mysqli_connect_error();
          }
        }
        $sql = "SELECT * FROM (SELECT * FROM users ORDER BY id DESC LIMIT 5) sub ORDER BY id ASC  ";
        $result = $conn->query($sql);

        echo "<table class='mt-4' id='jadual'><tr style='background:tomato;'><th>ID</th><th>Nama</th><th>Emel</th><th>Dibuat Pada</th><th>Dikemaskini Pada</th></tr>";
        if ($result->num_rows>0){
            //print data
            $n=0;
            while ($row=$result->fetch_assoc()) {
              $rowselect[$n]=$row["id"];$n++;
              echo "<tr><td>".$row["id"]."</td><td>".$row["nama"]."</td><td>".$row["emel"]."</td><td>".$row["created_at"]."</td><td>".$row["updated_at"]."</td></tr>";
            }
        }else{
            echo "<tr><td>Data tiada</td></tr>";
        }
        echo "</table>";
        ?>
        <br/>
        <div class="container">
          
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="formsubmit" method="post" >
            <div class="form-group row">
              <label for="id" class="col-2">ID</label>
              <select name="id" id="id" form="formsubmit">
                <?php foreach ($rowselect as $choice) {
                  echo "<option value='$choice'>Padamkan ID nombor $choice </option>";
                } ?>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

        <pre style="background:lightgreen; width:50%; margin-top:50px; margin-left:70px;"><blockquote>
        &lt;?php require_once('config.php');?&gt;
        &lt;?php
        if ( isset($_POST['id'])){
          $id =$_POST['id'];
          $sqlquery= "DELETE FROM users WHERE ID ='$id';";
          $last_id = $id;
          
          if($conn-&gt;query($sqlquery) === TRUE){
            console_log("Data berjaya dipadam");
          }else{
            echo "Gagal :".$sqlquery." ".mysqli_connect_error();
          }
        }
        $sql = "SELECT * FROM (SELECT * FROM users ORDER BY id DESC LIMIT 5) sub ORDER BY id ASC  ";
        $result = $conn-&gt;query($sql);

        echo "&lt;table class='mt-4' id='jadual'&gt;&lt;tr style='background:tomato;'&gt;&lt;th&gt;ID&lt;/th&gt;&lt;th&gt;Nama&lt;/th&gt;&lt;th&gt;Emel&lt;/th&gt;&lt;th&gt;Dibuat Pada&lt;/th&gt;&lt;th&gt;Dikemaskini Pada&lt;/th&gt;&lt;/tr&gt;";
        if ($result-&gt;num_rows&gt;0){
            //print data
            $n=0;
            while ($row=$result-&gt;fetch_assoc()) {
              $rowselect[$n]=$row["id"];$n++;
              echo "&lt;tr&gt;&lt;td&gt;".$row["id"]."&lt;/td&gt;&lt;td&gt;".$row["nama"]."&lt;/td&gt;&lt;td&gt;".$row["emel"]."&lt;/td&gt;&lt;td&gt;".$row["created_at"]."&lt;/td&gt;&lt;td&gt;".$row["updated_at"]."&lt;/td&gt;&lt;/tr&gt;";
            }
        }else{
            echo "&lt;tr&gt;&lt;td&gt;Data tiada&lt;/td&gt;&lt;/tr&gt;";
        }
        echo "&lt;/table&gt;";
        ?&gt;
        &lt;br/&gt;
        &lt;div class="container"&gt;
          
          &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?&gt;" id="formsubmit" method="post" &gt;
            &lt;div class="form-group row"&gt;
              &lt;label for="id" class="col-2"&gt;ID&lt;/label&gt;
              &lt;select name="id" id="id" form="formsubmit"&gt;
                &lt;?php foreach ($rowselect as $choice) {
                  echo "&lt;option value='$choice'&gt;Padamkan ID nombor $choice &lt;/option&gt;";
                } ?&gt;
              &lt;/select&gt;
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
