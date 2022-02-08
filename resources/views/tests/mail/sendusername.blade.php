<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        
        #customers tr:hover {background-color: #ddd;}
        
        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #4CAF50;
          color: white;
        }
        </style>
</head>
<body>
    <center><h1 style="color: rgb(250, 90, 41)">Pemberitahuan Username dan password anda</h1></center>
<table id="customers">
    <tr>
      <th>No</th>
      <th>Username</th>
      <th>Password</th>
    </tr>
    <tr>
      <td>1</td>
      <td>{{$details['username']}}</td>
      <td>{{$details['password']}}</td>
    </tr>
  </table>
<center><a href="mocmembership.com">Kunjungi Link berikut</a></center>
</body>
</html>