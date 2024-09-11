<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigasi</title>
    <style>
        /* Gaya untuk navigasi utama */
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        /* Gaya untuk sub-navigasi */
        .subnav {
            float: left;
            overflow: hidden;
        }
        .subnav .subnavbtn {
            cursor: pointer;
            font-size: 16px;    
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
        }
        .subnav-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            z-index: 1;
        }
        .subnav-content a {
            float: none;
            color: black;
            text-decoration: none;
            padding: 12px 16px;
            text-align: left;
        }
        .subnav-content a:hover {
            background-color: #ddd;
        }
        .subnav:hover .subnav-content {
            display: block;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="#home">Beranda</a>
    <div class="subnav">
        <button class="subnavbtn">Layanan &#9662;</button>
        <div class="subnav-content">
            <a href="#layanan1">Layanan 1</a>
            <a href="#layanan2">Layanan 2</a>
            <a href="#layanan3">Layanan 3</a>
        </div>
    </div> 
    <a href="#tentang">Tentang</a>
    <a href="#kontak">Kontak</a>
</div>

</body>
</html>
