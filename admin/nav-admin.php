<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/nav-admin.css">

    <?php include "../fuction/importlink.php" ?>
 
    
</head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <!-- <i class='bx bxl-c-plus-plus icon'></i>
      <img src="./img/logovilla.png" alt="" width="40px" height="40px"> -->
        <div class="logo_name">villa de panta</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <!-- <li>
        <a href="./board.php">
        <i class='bx bxs-chalkboard' ></i>
          <span class="links_name">แก้ไขหน้าประชาสัมพันธ์</span>
        </a>
         <span class="tooltip">แก้ไขหน้าประชาสัมพันธ์</span>
      </li> -->
      <li>
       <a href="./booking.php">
       <i class='bx bxs-book-content'></i> 
         <span class="links_name">การจอง</span>
       </a>
       <span class="tooltip">การจอง</span>
     </li>
      <li>
       <a href="./check-in.php">
       <i class='bx bxs-arrow-to-right'></i> 
         <span class="links_name">Check In</span>
       </a>
       <span class="tooltip">Check In</span>
     </li>
     <li>
       <a href="./check-out.php">
       <i class='bx bxs-arrow-from-right' ></i> 
         <span class="links_name">Check Out</span>
       </a>
       <span class="tooltip">Check Out</span>
     </li>
      <li>
       <a href="./categories-add.php">
       <i class='bx bxs-bed'></i> 
         <span class="links_name">จัดการประเภทห้องพัก</span>
       </a>
       <span class="tooltip">จัดการประเภทห้องพัก</span>
     </li>
      <li>
       <a href="./manage.php">
       <i class='bx bxs-bed' ></i> 
         <span class="links_name">จัดการห้องพัก</span>
       </a>
       <span class="tooltip">จัดการห้องพัก</span>
     </li>
     <li>
       <a href="./service.php">
       <i class='bx bxs-file-plus'></i>
         <span class="links_name">บริการเสริม</span>
       </a>
       <span class="tooltip">บริการเสริม</span>
     </li>
     <li>
       <a href="./check-pay.php">
       <i class='bx bx-wallet'></i>
         <span class="links_name">ตรวจสอบการชำระเงิน</span>
       </a>
       <span class="tooltip">ตรวจสอบการชำระเงิน</span>
     </li>
     <li>
       <a href="./promotion.php">
       <i class='bx bxs-purchase-tag'></i>
         <span class="links_name">Promotion</span>
       </a>
       <span class="tooltip">Promotion</span>
     </li>
     <li>
       <a href="./calender.php">
       <i class='bx bxs-calendar' ></i>
         <span class="links_name">ปฎิทินการจอง</span>
       </a>
       <span class="tooltip">ปฎิทินการจอง</span>
     </li>
     <li>
       <a href="./dashbord.php">
       <i class='bx bxs-dashboard' ></i>
         <span class="links_name">Dashboard</span>
       </a>
       <span class="tooltip">Dashboard</span>
     </li>
     <li>
       <a href="./accounting.php">
       <i class='bx bx-user' ></i>
         <span class="links_name">บัญชีผู้ใช้</span>
       </a>
       <span class="tooltip">บัญชีผู้ใช้</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <!--<img src="profile.jpg" alt="profileImg">-->
           <div class="name_job">
             <div class="name">villa de panta</div>
             <div class="job">Admin</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <!-- <section class="home-section">
      <div class="text">Dashboard</div>
  </section> -->
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>
