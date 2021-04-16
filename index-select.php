<!DOCTYPE html><html lang="en"><head><?php include 'etc/head.php' ?></head>
  <body>
    <div class="d-flex" id="wrapper">
      <?php include 'etc/sidebar.php' ?>
      <div id="page-content-wrapper">
        <?php include 'etc/nav.php'; ?>
        <div class="container-fluid">
          
        <?php require_once('config.php');?>
        <?php
        $sql = "SELECT * FROM users LIMIT 5  ";
        $result = $conn->query($sql);

        echo "<table class='mt-4' id='jadual'><tr style='background:tomato;'><th>ID</th><th>Nama</th><th>Emel</th><th>Dibuat Pada</th><th>Dikemaskini Pada</th></tr>";
        if ($result->num_rows>0){
            
            //print data
            while ($row=$result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["nama"]."</td><td>".$row["emel"]."</td><td>".$row["created_at"]."</td><td>".$row["updated_at"]."</td></tr>";
            }
        }else{
            echo "<tr><td>Data tiada</td></tr>";
        }
        echo "</table>";
        ?>
        <pre style="background:lightgreen; width:50%; margin-top:50px; margin-left:70px;"><blockquote>
        &lt;?php require_once('config.php');?&gt;
        &lt;?php
        $sql = "SELECT * FROM users LIMIT 5  ";
        $result = $conn-&gt;query($sql);

        echo "&lt;table class='mt-4' id='jadual'&gt;&lt;tr style='background:tomato;'&gt;&lt;th&gt;ID&lt;/th&gt;&lt;th&gt;Nama&lt;/th&gt;&lt;th&gt;Emel&lt;/th&gt;&lt;th&gt;Dibuat Pada&lt;/th&gt;&lt;th&gt;Dikemaskini Pada&lt;/th&gt;&lt;/tr&gt;";
        if ($result-&gt;num_rows&gt;0){
            
            //print data
            while ($row=$result-&gt;fetch_assoc()) {
                echo "&lt;tr&gt;&lt;td&gt;".$row["id"]."&lt;/td&gt;&lt;td&gt;".$row["nama"]."&lt;/td&gt;&lt;td&gt;".$row["emel"]."&lt;/td&gt;&lt;td&gt;".$row["created_at"]."&lt;/td&gt;&lt;td&gt;".$row["updated_at"]."&lt;/td&gt;&lt;/tr&gt;";
            }
        }else{
            echo "&lt;tr&gt;&lt;td&gt;Data tiada&lt;/td&gt;&lt;/tr&gt;";
        }
        echo "&lt;/table&gt;";
        ?&gt;</blockquote>
        </pre>
        </div>

      </div>
    </div><?php include 'etc/script.php' ?>
  </body>
</html>
