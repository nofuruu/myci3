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
      left: 0;
      width: 60px;
      height: 100%;
      background-color: #2c3e50;
      color: white;
      transition: 0.3s;
      z-index: 1000;
      overflow: hidden;
    }
    .sidebar.closed {
      width: 60px;
    }
    .sidebar ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .sidebar ul li {
      padding: 15px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      display: flex;
      align-items: center;
    }
    .sidebar ul li a {
      color: white;
      text-decoration: none;
      display: flex;
      align-items: center;
      width: 100%;
    }
    .sidebar ul li a .icon {
      font-size: 20px;
      margin-right: 10px;
    }
    .sidebar .text {
      display: none;
    }
    .marker {
      position: fixed;
      top: 50%;
      left: 60px;
      transform: translateY(-50%);
      background-color: #2980b9;
      color: white;
      padding: 10px 5px;
      cursor: pointer;
      z-index: 1100;
      transition: 0.3s;
    }
    .sidebar:not(.closed) .text {
      display: inline;
    }
    .sidebar:not(.closed) {
      width: 300px;
    }
    .sidebar:not(.closed) + .marker {
      left: 300px;
    }
  </style>
</head>
<body>

<div class="sidebar closed" id="sidebar">
  <ul>
    <li><a href="#"><span class="icon fas fa-home"></span><span class="text">Home</span></a></li>
    <li><a href="#"><span class="icon fas fa-user"></span><span class="text">Profile</span></a></li>
    <li><a href="#"><span class="icon fas fa-cog"></span><span class="text">Settings</span></a></li>
    <li><a href="#"><span class="icon fas fa-sign-out-alt"></span><span class="text">Logout</span></a></li>
  </ul>
</div>

<div class="marker" onclick="togglesidebar()">
  <i class="fa-solid fa-arrow-right" id="toggleIcon"></i>
</div>

<script>
  function togglesidebar() {
    const sidebar = document.getElementById('sidebar');
    const toggleIcon = document.getElementById('toggleIcon');
    sidebar.classList.toggle('closed');
    if (sidebar.classList.contains('closed')) {
      toggleIcon.classList.replace('fa-arrow-left', 'fa-arrow-right');
    } else {
      toggleIcon.classList.replace('fa-arrow-right', 'fa-arrow-left');
    }
  }
</script>

</body>
</html>
