<!DOCTYPE html>
<html>

<head>
    <title>Berita HMIF</title>
    <style>
        .layout {
            width: 1100px;
            margin: auto;
            text-align: left;
            padding: 2px;
        }
        
        .runningtext {
            width: 100%;
            height: 30px;
            padding-top: 7px;
            margin: 5px 0 10px 0;
            background-color: #125C13;
            color: white;
            position: relative;
            font-weight: bold;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        
        .sidebar {
            padding: 5px;
            width: 27%;
            position: relative;
            float: right;
        }
        
        .widged {
            width: 100%;
            background: #ffff;
            border-top: 0px solid #dfdfdf;
            border-bottom: 2px solid #dfdfdf;
            border-right: 2px solid #dfdfdf;
            border-left: -2px solid #dfdfdf;
            font-size: 100%;
            margin: 5px 5px 5px 0px;
        }
        
        .judulwidged {
            background: #125C13;
            padding: 5px 10px 5px 10px;
            margin: 0px 0px 0px 0px;
            text-align: center;
            color: white;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: bold;
            font-size: 15px;
            margin-bottom: 5px;
        }
        
        .widged ul {
            margin: 0px;
            padding: 0px;
            list-style-type: none;
        }
        
        .widged li {
            padding: 0px;
            background-position: left;
            background-repeat: no-repeat;
            color: #3333;
        }
        
        .widged li a {
            color: black;
            border-bottom: 1px;
            text-decoration: none;
            display: block;
            margin-bottom: 5px;
            padding: 4px 5px 3px 10px;
        }
        
        .isi {
            padding: 5px;
            width: 70%;
            height: auto;
            background-color: #125C13;
            position: relative;
            margin-top: 5px;
        }
        
        .isiposting {
            background-color: white;
            width: 98%;
            height: 350px;
            text-align: justify;
            margin-bottom: 5px;
            padding: 8px;
        }
        
        .gambardepan {
            float: left;
            height: 200px;
            width: 200px;
            margin-right: 5px;
            margin-top: 3px;
            padding: 1px;
        }
        
        .isiposting h2 {
            font-size: 20px;
            text-align: justify;
            font-weight: bold;
            margin-top: 4px;
            margin-bottom: 3px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        
        .isiposting h3 {
            font-size: 15px;
            text-align: justify;
            font-weight: bold;
            margin-top: 4px;
            margin-bottom: 3px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        
        .wrapper {
            width: 1100px;
            margin: auto;
            position: relative;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        
        .logo {
            float: left;
            margin: auto;
        }
        
        .menu {
            float: left;
        }
        
        nav {
            width: 100%;
            margin: auto;
            display: flex;
            line-height: 80px;
            top: 0;
            background: #125C13;
            font-style: italic;
            z-index: 1;
        }
        
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        
        nav ul li {
            float: left;
        }
        
        nav ul li a {
            color: #ffff;
            font-weight: bold;
            text-align: center;
            padding: 0px 16px 0px 16px;
            text-decoration: none;
        }
        
        nav ul li a:hover {
            text-decoration: underline;
        }
        
        .footer {
            width: 100%;
            height: 400px;
            background-color: #125C13;
        }
        
        .footercontent {
            width: 350px;
            height: 300px;
            float: left;
            margin-top: 50px;
            margin-left: 230px;
        }
        
        h5 {
            margin-top: 20px;
            padding: 45px;
            font-size: 35px;
            margin-bottom: 5px;
            color: #EAE509;
        }
        
        .footertext p {
            color: #ffff;
            font-size: 12px;
        }
        
        .sosmed .button {
            display: inline-block;
            height: 50px;
            width: 50px;
            float: left;
            margin: 0 5px;
            overflow: hidden;
            background: #fff;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-out;
        }
        
        .sosmed .button .icon {
            display: inline-block;
            height: 50px;
            width: 50px;
            text-align: center;
            border-radius: 50px;
            box-sizing: border-box;
            line-height: 50px;
            transition: all 0.3s ease-out;
        }
        
        .sosmed .button:nth-child(1):hover .icon {
            background: #2ecc71;
        }
        
        .sosmed .button:nth-child(2):hover .icon {
            background: #3498db;
        }
        
        .sosmed .button:nth-child(3):hover .icon {
            background: #f1c40f;
        }
        
        .sosmed .button:nth-child(4):hover .icon {
            background: #e67e22;
        }
        
        .sosmed .button .icon {
            font-size: 25px;
            line-height: 50px;
            transition: all 0.3s ease-out;
        }
        
        .sosmed .button:hover .icon {
            color: #fff;
        }
        
        .sosmed .button span {
            font-size: 20px;
            font-weight: 500;
            line-height: 50px;
            margin-left: 10px;
            transition: all 0.3s ease-out;
        }
        
        .sosmed .button:nth-child(1)span {
            background: #2ecc71;
        }
        
        .sosmed .button:nth-child(2)span {
            background: #3498db;
        }
        
        .sosmed .button:nth-child(3)span {
            background: #f1c40f;
        }
        
        .sosmed .button:nth-child(4)span {
            background: #e67e22;
        }
    </style>
</head>

<body>
    <nav>
        <div class="wrapper">
            <img class="logo" src="https://km.itera.ac.id/wp-content/uploads/elementor/thumbs/Logo-HMIF-pi6qxmsxj1kimiixaslxhtxk6ehdkm7lxn1loddl8w.png" width="85px" height="85px">
            <div class="menu">
                <ul>
                    <li><a href="index.html">BERANDA</a></li>
                    <li><a href="home.html">HOME</a></li>
                    <li><a href="galeri.html">GALERI</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="layout">
        <div class="runningtext">
            <marquee behavior="scroll" scrollamount="5" onmouserover="this.stop();" onmouseout="this.start();" direction="right">
                WELCOME TO PORTAL BERITA HMIF
            </marquee>
        </div>
        <div class="sidebar">
            <div class="widged">
                <img src="https://lh3.googleusercontent.com/hPOX38qh30xftFwl0dU2-eqsqmyeNyOWV4v0oZ2bUyj4AvhfuB0EGyH0ifF0OMM99ks=w300" class="gambariklan">
            </div>
            <div class="widged">
                <h1 class="judulwidged">Daftar Postingan Teratas</h1>
                <ul>
                    <li><a href="">Sejarah Bahasa Python</a></li>
                    <li><a href="">Mengenal Artificial Intelligence</a></li>
                    <li><a href="">Apa itu Rekayasa Perangkat Lunak ?</a></li>
                </ul>
            </div>
        </div>
        <div class="isi">
            <div class="isiposting">
                <img src="https://lh3.googleusercontent.com/hPOX38qh30xftFwl0dU2-eqsqmyeNyOWV4v0oZ2bUyj4AvhfuB0EGyH0ifF0OMM99ks=w300" class="gambardepan ">
                <h2>Sejarah Bahasa Python</h2>
                <h3>Awal Mula Bahasa Pemrograman Python</h3>
                Python adalah bahasa pemrograman tujuan umum yang ditafsirkan, tingkat tinggi. Dibuat oleh Guido van Rossum dan pertama kali dirilis pada tahun 1991, filosofi desain Python menekankan keterbacaan kode dengan penggunaan spasi putih yang signifikan. Konstruksi
                bahasanya dan pendekatan berorientasi objek bertujuan untuk membantu pemrogram menulis kode yang jelas dan logis untuk proyek skala kecil dan besar. Python diketik secara dinamis dan pengumpulan sampah. Ini mendukung beberapa paradigma
                pemrograman, termasuk pemrograman terstruktur (terutama, prosedural), berorientasi objek, dan fungsional. Python sering dideskripsikan sebagai bahasa "termasuk baterai" karena perpustakaan standarnya yang komprehensif. Python dibuat pada
                akhir 1980-an sebagai penerus bahasa ABC. Python 2.0, dirilis pada tahun 2000, memperkenalkan fitur-fitur seperti pemahaman daftar dan sistem pengumpulan sampah dengan penghitungan referensi. Python 3.0, dirilis pada tahun 2008, adalah
                revisi utama dari bahasa yang tidak sepenuhnya kompatibel dengan versi sebelumnya, dan banyak kode Python 2 yang tidak berjalan tanpa modifikasi pada Python 3
                <br>
            </div>
            <div class="isiposting ">
                <img src="https://lh3.googleusercontent.com/hPOX38qh30xftFwl0dU2-eqsqmyeNyOWV4v0oZ2bUyj4AvhfuB0EGyH0ifF0OMM99ks=w300 " class="gambardepan">
                <h2>Mengenal Artificial Intelligence</h2>
                <h3>Apa itu Artificial Intelligence ?</h3>
                Artificial Intelligence (AI) adalah bidang ilmu komputer yang dikhususkan untuk memecahkan masalah kognitif yang umumnya terkait dengan kecerdasan manusia, seperti pembelajaran, pemecahan masalah, dan pengenalan pola. Kecerdasan Buatan, sering disingkat
                sebagai "AI", mungkin berkonotasi dengan robotika atau adegan futuristik, Kecerdasan Buatan (AI) mengungguli robot fiksi ilmiah, ke dalam non-fiksi ilmu komputer canggih modern. Profesor Pedro Domingos, seorang peneliti terkemuka di bidang
                ini, menggambarkan "lima suku" machine learning, yang terdiri dari simbolis, yang berasal dari logika dan filsafat; koneksionis, yang berasal dari ilmu saraf; evolusioner, berkaitan dengan biologi evolusioner; Bayesian, berhubungan dengan
                statistik dan probabilitas; dan analogis yang berasal dari psikologi. Baru-baru ini, kemajuan dalam efisiensi komputasi statistik telah membuat Bayesian berhasil memajukan bidang di sejumlah area, yang disebut "machine learning". Demikian
                pula, kemajuan dalam komputasi jaringan telah menyebabkan koneksionis memperluas ke subbidang yang disebut "deep learning". Machine learning (ML) dan deep learning (DL) merupakan bidang ilmu komputer yang berasal dari disiplin Kecerdasan
                Buatan
                <br>
            </div>
            <div class="isiposting">
                <img src="https://lh3.googleusercontent.com/hPOX38qh30xftFwl0dU2-eqsqmyeNyOWV4v0oZ2bUyj4AvhfuB0EGyH0ifF0OMM99ks=w300" class="gambardepan ">
                <h2>Rekayasa Perangkat Lunak</h2>
                <h3>Apa itu Rekayasa Perangkat Lunak ?</h3>
                Rekayasa Perangkat Lunak atau biasa disingkat dengan RPL adalah salah satu bidang profesi dan juga mata pelajaran yang mempelajari tentang pengembangan perangkat-perangkat lunak termasuk dalam hal pembuatannya, pemeliharaan hingga manajemen organisasi
                dan manajemen kualitasnya. Bisa dikatakan RPL ini merupakan sebuah perubahan yang terjadi pada perangkat lunak guna melakukan pengembangan, pemeliharaan, dan pembangunan kembali dengan menerapkan prinsip rekayasa sehingga memperoleh perangkat
                lunak yang bisa bekerja secara lebih efisien dan efektif pada user nantinya. Perangkat lunak sendiri merupakan sekumpulan data yang tersimpan dan terprogram oleh sistem komputer, istilah ini cukup umum dengan sebutan software. Merupakan
                elemen dari komputer, software menjadi elemen yang tidak tampak secara fisik. Ia berisi instruksi-instruksi yang diprogram dan bisa berada di perangkat keras manapun, software pada mulanya adalah sebuah kode mesin atau machine code yang
                dibuat oleh seorang ilmuwan. Berisi angka-angka biner yang dapat dikenali oleh komputer, terkhusus prosesor. Software bekerja dengan membuat instruksi tertentu dalam melakukan perhitungan, logika, input-output, dan aritmatika pada prosesor.
                <br>
            </div>
        </div>

    </div>
    <div class="footer">
        <div class="footercontent">
            <img src="img/denah.jpg" alt="">
        </div>
        <div class="footertext">
            <h5>HMIF</h5>
            <p>Institut Teknologi Sumatera</p>
            <p>Jl. Terusan Ryacudu, Way Huwi, Kec. Jati Agung, Kab. Lampung Selatan, Lampung 35365</p>
            <p>Email: kabinetadikacita@gmail.com</p>
            <p>Departemen Keprofesian</p>
        </div>
        <div class="sosmed">
            <div class="button">
                <div class="icon">
                    <i class="fab fa-instagram"></i>
                </div>
                <span>Instagram</span>
            </div>
            <div class="button">
                <div class="icon">
                    <i class="fab fa-youtube"></i>
                </div>
                <span>Youtube</span>
            </div>
            <div class="button">
                <div class="icon">
                    <i class="fab fa-tiktok"></i>
                </div>
                <span>Tiktok</span>
            </div>
            <div class="button">
                <div class="icon">
                    <i class="fab fa-line"></i>
                </div>
                <span>Line</span>
            </div>
        </div>
    </div>
</body>

</html>