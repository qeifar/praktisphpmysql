<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    function Register($paramsql) {
      if($paramsql=="insert-ganda"){
        return InsertGandaValidation();
      } 
      else{
        return InsertValidation();    
      } 
      
         
    }

    function InsertValidation() {              
      var nama = document.getElementById('nama').value;
      var emel = document.getElementById('emel').value;
      if (!nama) {
        alert("Nama wajib diisi");
        //   txtURLFocus();
        return false;
      }
      if (!emel) {
        alert("Emel wajib diisi");
        //   txtURLFocus();
        return false;
      }
      return true;
    }

    function InsertGandaValidation() {              
      var nama = document.getElementById('nama').value;
      var emel = document.getElementById('emel').value;
      var nama2 = document.getElementById('nama2').value;
      var emel2 = document.getElementById('emel2').value;
      var nama3 = document.getElementById('nama3').value;
      var emel3 = document.getElementById('emel3').value;
      if (!nama) {
        alert("Nama wajib diisik");return false;
      }
      if (!emel) {
        alert("Emel wajib diisi");return false;
      }
      if (!nama2) {
        alert("Nama 2 wajib diisik");return false;
      }
      if (!emel2) {
        alert("Emel 2 wajib diisi");return false;
      }
      if (!nama3) {
        alert("Nama 3 wajib diisik");return false;
      }
      if (!emel3) {
        alert("Emel 3 wajib diisi");return false;
      }
      return true;
    }
  </script>
  