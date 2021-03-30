<!DOCTYPE html>
<html>

<head>
    <title>PDF Data Outlet</title>
</head>

<style type="text/css">
    #outtable{
      padding: 10px;
      border:1px solid #e3e3e3;
      width:600px;
      border-radius: 5px;
    }
 
    .short{
      width: 50px;
    }
 
    .normal{
      width: 150px;
    }
 
    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    }
 
    thead th{
      text-align: left;
      padding-bottom: 10px;
      padding-top: 10px;
      text-align: center;
      background: #F6F5FA;
    }
 
    tbody td{
      border-top: 1px solid #e3e3e3;
      padding-top: 10px;
      padding-bottom: 10px;
      padding-left: 3px;
    }
 
    tbody tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tbody tr:hover{
      background: #EAE9F5;
    }
</style>

<body>
    <div id="outtable">
        <h1 style="text-align: center;">Data Transaksi</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Nama Outlet</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($outlet as $outlet) { ?>
                <tr>
                    <td width="100"><?php echo $outlet->nama_outlet ?></td>
                    <td width="150"><?php echo $outlet->alamat ?></td>
                    <td width="85"><?php echo $outlet->telp ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>