<head>
  <title>Read CSV files</title>
  <style>
    table, td {
      border-width: 1px;
      border-style: solid;
      padding: 5px;
    }
  </style>
</head>
<body>
<?php
  $fp = fopen('ToS.csv', 'r');
  echo $fp;

?>
</body>
