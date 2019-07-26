<?php
session_start();
?>
<html>
<head>

</head>
<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
swal("Data Submitted Successfully!")
.then((value) => {
  if(value="true"){
  window.location.href="feedback.html";
  }
});
</script>
<?php

echo$_SESSION['$Message'];
echo$_SESSION['$Query'];
echo$_SESSION['$Rating'];
echo"jhg";
?>
</body>
</html>