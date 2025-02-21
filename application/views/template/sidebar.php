<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Template sidebar</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .sidebar {
      position: fixed;
      top: 0;
      left: -300px;
      width: 300px;
      height: 100%;
      background-color: #2c3e50;
      color: white;
      transition: 0.3s;
      z-index: 1000;
    }
    .sidebar.open {
      left: 0;
    }
    .sidebar ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .sidebar ul li {
      padding: 15px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    .sidebar ul li a {
      color: white;
      text-decoration: none;
      display: flex;
      align-items: center;
    }
    .sidebar ul li a .icon {
      font-size: 20px;
      margin-right: 10px;
    }
    .marker {
      position: fixed;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      background-color: #2980b9;
      color: white;
      padding: 10px 5px;
      cursor: pointer;
      z-index: 1100;
      transition: 0.3s;
    }
    .marker:hover {
      background-color: #3498db;
    }
  </style>
</head>
<body>

<div class="sidebar" id="sidebar">

  <ul>
    <li><a href="#"><span class="icon fas fa-home"></span><span class="text">Home</span></a></li>
    <li><a href="#"><span class="icon fas fa-user"></span><span class="text">Profile</span></a></li>
    <li><a href="#"><span class="icon fas fa-cog"></span><span class="text">Settings</span></a></li>
    <li><a href="#"><span class="icon fas fa-sign-out-alt"></span><span class="text">Logout</span></a></li>
  </ul>
</div>

<div class="marker" onclick="togglesidebar()">
<i class="fa-solid fa-arrow-right"></i>
</div>

<script>
  function togglesidebar() {
    const sidebar = document.getElementById('sidebar');
    if (sidebar.classList.contains('open')) {
      sidebar.classList.remove('open');
    } else {
      sidebar.classList.add('open');
    }
  }
</script>

</body>
</html>
