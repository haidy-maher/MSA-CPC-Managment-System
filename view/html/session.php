<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/tables.css">
  
     <!-- Font awesome -->
     <script src="https://kit.fontawesome.com/6b11d4a153.js" crossorigin="anonymous"></script>
     <!-- Font -->
     <!-- FONT 1 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grandiflora+One&family=Rethink+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Silkscreen&display=swap" rel="stylesheet">
</head>
<body>

<?php include "components/dashboardNav.php" ?>


<!-- Main -->
<div class="main">
<div class="header">
  <div class="title"><h3>Sessions</h3></div>
  <div class="button">
    <p><a href="createSession.php">CREATE <span><i class="fa-solid fa-plus"></i></span></a></p>
  </div>
</div>
<div class="content">

<table>
  <thead id="header" >
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Topic Name</th>
      <th scope="col">Date</th>
      <th scope="col">Attendance NO.</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-label="Account">1</td>
      <td data-label="Due Date">Data Types</td>
      <td data-label="Amount">11/11/2023</td>
      <td data-label="Amount">35</td>
      <td data-label="Period"><a href="editSession.php"><i class="fa-solid fa-pen-to-square edit-icon"></i></td>
      <td data-label="Period"><a href="deleteSession.php"><i class="fa-solid fa-trash-can delete-icon"></i></td>
    </tr>

    <tr>
      <td data-label="Account">1</td>
      <td data-label="Due Date">Data Types</td>
      <td data-label="Amount">11/11/2023</td>
      <td data-label="Amount">35</td>
      <td data-label="Period"><a href="editSession.php"><i class="fa-solid fa-pen-to-square edit-icon"></i></td>
      <td data-label="Period"><a href="deleteSession.php"><i class="fa-solid fa-trash-can delete-icon"></i></td>
    </tr>

    <tr>
      <td data-label="Account">1</td>
      <td data-label="Due Date">Data Types</td>
      <td data-label="Amount">11/11/2023</td>
      <td data-label="Amount">35</td>
      <td data-label="Period"><a href="editSession.php"><i class="fa-solid fa-pen-to-square edit-icon"></i></td>
      <td data-label="Period"><a href="deleteSession.php"><i class="fa-solid fa-trash-can delete-icon"></i></td>
    </tr>

  </tbody>
</table>

</div>

</div>

</body>
</html>