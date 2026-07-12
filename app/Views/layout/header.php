<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'Sistem Informasi Posyandu'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="<?= base_url('public/assets/css/style.css'); ?>" rel="stylesheet">
    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}
        :root{--primary:#4F46E5;--primary2:#6366F1;--sidebar:#111827;--background:#F5F7FB;--white:#FFFFFF;--text:#374151;--shadow:0 10px 25px rgba(0,0,0,.08);}
        body{background:var(--background);color:var(--text);overflow-x:hidden;}
        .wrapper{display:flex;width:100%;}
        .main-content{margin-left:260px;width:100%;min-height:100vh;transition:.3s;}
        .sidebar{
    width:260px;
    height:100vh;
    background:var(--sidebar);
    position:fixed;
    left:0;
    top:0;
    color:white;
    display:flex;
    flex-direction:column;
    transition:.3s;
    z-index:999;
    overflow-y:auto;
}
        .sidebar.collapsed{width:90px;}
        .sidebar.collapsed .logo-text,.sidebar.collapsed span,.sidebar.collapsed .menu-title,.sidebar.collapsed .user-info{display:none;}
        .sidebar.collapsed .logout{justify-content:center;}
        .sidebar.collapsed + .main-content{margin-left:90px;}
        .sidebar-header{display:flex;align-items:center;padding:25px;border-bottom:1px solid rgba(255,255,255,.08);}
        .logo{width:55px;height:55px;border-radius:15px;overflow:hidden;background:white;}
        .logo img{width:100%;}
        .logo-text{margin-left:15px;}
        .logo-text h5{margin:0;font-weight:600;}
        .logo-text small{color:#d1d5db;}
        .sidebar-menu{list-style:none;padding:20px;overflow-y:auto;}
        .menu-title{color:#9CA3AF;font-size:12px;text-transform:uppercase;margin-top:20px;margin-bottom:10px;}
        .sidebar-menu li{margin-bottom:8px;}
        .sidebar-menu li a{text-decoration:none;color:white;display:flex;align-items:center;padding:13px 18px;border-radius:12px;transition:.3s;}
        .sidebar-menu li a i{font-size:20px;margin-right:15px;}
        .sidebar-menu li a:hover{background:#374151;}
        .sidebar-menu li a.active{background:linear-gradient(45deg,var(--primary),var(--primary2));}
        .sidebar-footer{padding:20px;}
        .user-info{display:flex;align-items:center;margin-bottom:20px;}
        .avatar{width:45px;height:45px;border-radius:50%;object-fit:cover;}
        .user-info div{margin-left:12px;}
        .logout{display:flex;align-items:center;justify-content:center;text-decoration:none;background:#EF4444;color:white;padding:12px;border-radius:12px;transition:.3s;}
        .logout:hover{background:#DC2626;color:white;}
        .navbar-custom{background:white;height:80px;display:flex;justify-content:space-between;align-items:center;padding:0 30px;box-shadow:var(--shadow);}
        .left-navbar{display:flex;align-items:center;}
        .btn-menu{border:none;background:none;font-size:28px;margin-right:20px;cursor:pointer;}
        .page-title h4{margin:0;font-weight:600;}
        .page-title small{color:gray;}
        .right-navbar{display:flex;align-items:center;}
        .notification{position:relative;border:none;background:#F3F4F6;width:50px;height:50px;border-radius:15px;margin-right:20px;cursor:pointer;}
        .badge-notif{position:absolute;top:5px;right:8px;background:red;color:white;width:18px;height:18px;border-radius:50%;font-size:10px;display:flex;align-items:center;justify-content:center;}
        .profile{display:flex;align-items:center;}
        .profile img{width:50px;height:50px;border-radius:50%;object-fit:cover;}
        .profile-info{margin-left:12px;}
        .profile-info h6{margin:0;}
        .profile-info small{color:gray;}
        .stat-card{border:none;border-radius:20px;color:white;padding:25px;overflow:hidden;position:relative;transition:.3s;box-shadow:0 10px 25px rgba(0,0,0,.08);}
        .stat-card:hover{transform:translateY(-5px);}
        .stat-card h2{font-weight:700;margin-top:10px;font-size:38px;}
        .stat-card i{position:absolute;right:25px;bottom:20px;font-size:60px;opacity:.25;}
        .bg-green{background:linear-gradient(45deg,#22C55E,#16A34A);}
        .bg-blue{background:linear-gradient(45deg,#38BDF8,#0EA5E9);}
        .bg-purple{background:linear-gradient(45deg,#A855F7,#7C3AED);}
        .bg-orange{background:linear-gradient(45deg,#F59E0B,#EA580C);}
        .dashboard-card{background:white;border-radius:20px;padding:25px;margin-top:30px;box-shadow:0 10px 20px rgba(0,0,0,.05);}
        .content{padding:30px;}
        .footer{background:white;padding:20px 30px;margin-top:30px;border-top:1px solid #E5E7EB;}
    </style>
</head>
<body>
