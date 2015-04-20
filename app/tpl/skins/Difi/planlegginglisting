 <?php
error_reporting(E_ALL);

if(!isset($_GET['username']) || empty($_GET['username'])) {
    header('Location: /me');
    die();
}

$username = mysql_real_escape_string($_GET['username']);
$uquery = mysql_query("SELECT * FROM users WHERE username = '" . $username . "'");

if(mysql_num_rows($uquery) != 1) {
    header('Location: /me');
    die();
}

$udata = mysql_fetch_assoc($uquery);

?>
<div class="content" style="margin-top:7px;">
            <img src="http://prosjektdatabasen.com/images/circle-new.png"/ alt="" >
            <h2 style="color:#2e7297; margin-top:9px; font-size:16px;">Planleggingsfasen</h2><br />
             
        <table>
    <tr>
    <th>Filnavn</th>
    <th>Filtype</th>
    <th>Filstørrelse (KB)</th>
    <th> Last ned</th>

   
    </tr>


<?php
     $userid = mysql_real_escape_string($_GET['id']);
 $sql=("SELECT * FROM tbl_uploads WHERE fase = 4 AND user_id = " . $udata['id']);
 $result_set=mysql_query($sql);
 while($row=mysql_fetch_array($result_set))
 {
  ?>

        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td>
          <a href="http://prosjektdatabasen.com/uploads/<?php echo $row['file'] ?>" target="_blank" download="http://prosjektdatabasen.com/uploads/<?php echo $row['file'] ?>"> <img src="http://prosjektdatabasen.com/images/download.png"  style=" margin-left: 6px;"></a>


        </td>
        
  </tr>




        </tr>
        <?php
 }
 ?>
</table>
  </div></div>