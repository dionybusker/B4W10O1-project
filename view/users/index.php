<div class="container">
    <h1>Welkom op bij de users</h1>
    <p>Je bent nu in users/index</p>
</div>
<?php   
   echo "<table class=table>";
   echo "<thead>";
   echo  "<tr>";
   echo     "<th>";
   echo     "<th>Full Name</th>";
   echo     "<th>Age</th>";
   echo     "<th>Email</th>";
   echo     "<th>Phone</th>";

   echo   "</tr>";
   echo "</thead>";
   echo "<tbody>";
   foreach($users as $result){
   echo   "<tr>";
   echo     "<th scope='row'>1</th>";
   echo     "<td>" . $result['full_name'] . "</td>"; 
   echo     "<td>" . $result['age'] . "</td>"; 
   echo     "<td>" . $result['email'] . "</td>"; 
   echo     "<td>" . $result['phone'] . "</td>"; 
   echo   "</tr>";
   echo "</tbody>";
    echo "</table>";
}
?>