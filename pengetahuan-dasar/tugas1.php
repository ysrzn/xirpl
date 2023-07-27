<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <table>
    <tr>
      <th>BERANDA</th>
      <th>TUTORIAL</th>
      <th>NYEKRIP</th>
      <th>TENTANG</th>
    </tr>
    <tr>
      <td></td>
      <td>PHP</td>
    </tr>
    <tr>
      <td></td>
      <td>CSS</td>
    </tr>
    <tr>
      <td></td>
      <td>HTML</td>
    </tr>
  </table>

  <style>
table {
  border-collapse: collapse;
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
}
td, th{
  font-size: 9px;
  padding: 9px;
}
tr, td, th{
  padding:20px 30px;
}
tr:first-child th:nth-child(2){
  background-color:slateblue;
  color: white;
}

th{
  background-color:#8e8e8e;
  color:white;
}

tr:nth-child(even) td:nth-child(2){
  background-color:#8e8e8e;
  color:white;
}
tr:nth-child(odd) td:nth-child(2){
  background-color:slateblue;
  color:white;
}
  </style>
</body>
</html>
