<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <title>GATE Metallurgy</title>
    <meta name="description" content="GATE Metallurgy on stop shop">
    <meta name="author" content="Siddharth Tank">
    <meta name="keywords" content="GATE, Metallurgy, gate_metallurgy, MT, GATE MT, GATE Metallurgy">
    <link rel="shortcut icon" href="../../../icons/favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/mtube.css">
</head>
<body>
<!-- ------------------------------- Header -------------------------------- -->
<?php 
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/assets/php/header.php";
  include_once($path);
?>
<!-- ------------------------------- Header -------------------------------- -->

<!-- ------------------------------- Banner -------------------------------- -->
<section class="banner" style=" background:linear-gradient(0deg, var(--overlay), var(--overlay)), url(../../../images/iitkgp.jpg); background-size: cover; background-position: center;">
  <div class="container">
    <div class="course-info">
        <div class="path">
          <a href="#">Playlists&ensp;/&ensp;</a>
          <a href="#">Physical Metallurgy&ensp;/</a>
        </div>
        <div class="title">
            <div class="infographics">
                <h1 id="h1">Principles of Physical Metallurgy</h1>
                <!-- <p>A basic understanding of the underlying principles that determine the evolution of microstructures in metals and alloys.</p>   -->
                <p>IIT Kharagpur</p>
                <span><img data-src="../../../icons/man.png"> Prof. R. N. Ghosh</span>
                <span><img data-src="../../../icons/university.png">Metallurgical and Materials Engineering</span>
                <span><img data-src="../../../icons/verified.png" >NPTEL</span>
                <a href="#first-section"><button id="start-course" onclick="revealPlayer()">START COURSE</button>Free</a>
            </div>
        </div>
    </div>
  </div>
</section>
<!-- ------------------------------- Banner -------------------------------- -->


<!-- ---------------------------- Video Player ----------------------------- -->
<section class="first-section" id="first-section">
    <div class="container" id="video-player">
        <div class="video-player">
            <div class="video-section">
                <div class="video">
                    <!-- iframe -->
                </div>
                <div class="video-title">
                    <h3 id="title">Lec-01 Introduction</h3>
                </div>
            </div>
            <div class="playlist-section">
                <div class="playlist-title">
                    <h3 class="title">Principles of Physical Metallurgy</h3>
                </div>
                <div class="playlist"> 
                    <!-- Change href, index, img, title, author-->
                    <!-- <div class="video-card"><a href="url" target="link" onclick="document.getElementById('title').innerHTML = 'Title of Video'"><div class="something"><div class="index">i</div><div class="video-img"><img src="thumbnail-source" alt=""></div><div class="remainder"><p>Video-card Title</p><span>Author-Name</span></div></div></a></div> -->
                      <div class="video-card"><a href="https://www.youtube.com/embed/9Sf278j1GTU?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-01 Introduction'"><div class="something"><div class="index">1</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/9Sf278j1GTU/default.jpg" alt=""></div><div class="remainder"><p>Lec-01 Introduction</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/_NCv3z5hYhE?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-02 Atomic Bond and Crystal Structure'"><div class="something"><div class="index">2</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/_NCv3z5hYhE/default.jpg" alt=""></div><div class="remainder"><p>Lec-02 Atomic Bond and Crystal Structure</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/cJNnM7j2XLo?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-03 Atomic Bond and Crystal Structure'"><div class="something"><div class="index">3</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/cJNnM7j2XLo/default.jpg" alt=""></div><div class="remainder"><p>Lec-03 Atomic Bond and Crystal Structure</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/BpcOWItPVW8?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-04 Atomic Bond and Crystal Structure'"><div class="something"><div class="index">4</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/BpcOWItPVW8/default.jpg" alt=""></div><div class="remainder"><p>Lec-04 Atomic Bond and Crystal Structure</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/t2sUNHnWhGk?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-05 Experimental Tools & Techniques'"><div class="something"><div class="index">5</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/t2sUNHnWhGk/default.jpg" alt=""></div><div class="remainder"><p>Lec-05 Experimental Tools & Techniques</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/NYR1lTXUFfM?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-06 Experimental Tools & Techniques'"><div class="something"><div class="index">6</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/NYR1lTXUFfM/default.jpg" alt=""></div><div class="remainder"><p>Lec-06 Experimental Tools & Techniques</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/eHW2gnv9TSE?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-07 Solidification of Pure Metal'"><div class="something"><div class="index">7</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/eHW2gnv9TSE/default.jpg" alt=""></div><div class="remainder"><p>Lec-07 Solidification of Pure Metal</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/MdQDS7BwrtA?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-08 Plastic Deformation of Pure Metal'"><div class="something"><div class="index">8</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/MdQDS7BwrtA/default.jpg" alt=""></div><div class="remainder"><p>Lec-08 Plastic Deformation of Pure Metal</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/4QpHNBFKWP0?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-09 Plastic Deformation of Pure Metal'"><div class="something"><div class="index">9</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/4QpHNBFKWP0/default.jpg" alt=""></div><div class="remainder"><p>Lec-09 Plastic Deformation of Pure Metal</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/fIja4FMkRc0?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-10 Crystal Defects in Metals'"><div class="something"><div class="index">10</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/fIja4FMkRc0/default.jpg" alt=""></div><div class="remainder"><p>Lec-10 Crystal Defects in Metals</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/jiX7qYKAefE?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-11 Crystal Defects in Metals'"><div class="something"><div class="index">11</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/jiX7qYKAefE/default.jpg" alt=""></div><div class="remainder"><p>Lec-11 Crystal Defects in Metals</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/aHWHusCOaGE?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-12 Crystal Defects in Metals'"><div class="something"><div class="index">12</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/aHWHusCOaGE/default.jpg" alt=""></div><div class="remainder"><p>Lec-12 Crystal Defects in Metals</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/vFUULDemAXw?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-13 Crystal Defects in Metals'"><div class="something"><div class="index">13</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/vFUULDemAXw/default.jpg" alt=""></div><div class="remainder"><p>Lec-13 Crystal Defects in Metals</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/oEyNTVXJmkA?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-14 Crystal Defects in Metals'"><div class="something"><div class="index">14</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/oEyNTVXJmkA/default.jpg" alt=""></div><div class="remainder"><p>Lec-14 Crystal Defects in Metals</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/iK4DC-__DAs?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-15 Diffusion in Solids'"><div class="something"><div class="index">15</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/iK4DC-__DAs/default.jpg" alt=""></div><div class="remainder"><p>Lec-15 Diffusion in Solids</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/4thB3dJ3pM?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-16 Diffusion in Solids'"><div class="something"><div class="index">16</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/4thB3dJ3H4M/default.jpg" alt=""></div><div class="remainder"><p>Lec-16 Diffusion in Solids</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/6XEfEHTJ8XU?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-17 Numerical Examples in Diffusion'"><div class="something"><div class="index">17</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/6XEfEHTJ8XU/default.jpg" alt=""></div><div class="remainder"><p>Lec-17 Numerical Examples in Diffusion</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/_lj-4wsHDPU?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-18 Solidification of Binary Alloys'"><div class="something"><div class="index">18</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/_lj-4wsHDPU/default.jpg" alt=""></div><div class="remainder"><p>Lec-18 Solidification of Binary Alloys</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/5-MNqdse6iw?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-19 Solidification of Binary Alloys'"><div class="something"><div class="index">19</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/5-MNqdse6iw/default.jpg" alt=""></div><div class="remainder"><p>Lec-19 Solidification of Binary Alloys</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/1lmPhxEYfyc?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-20 Solidification of Binary Alloys'"><div class="something"><div class="index">20</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/1lmPhxEYfyc/default.jpg" alt=""></div><div class="remainder"><p>Lec-20 Solidification of Binary Alloys</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/BD0RqFbcvrM?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-21 Solidification of Binary Alloys'"><div class="something"><div class="index">21</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/BD0RqFbcvrM/default.jpg" alt=""></div><div class="remainder"><p>Lec-21 Solidification of Binary Alloys</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/f0YXp18Y-AI?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-22 Solidification of Binary Alloys'"><div class="something"><div class="index">22</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/f0YXp18Y-AI/default.jpg" alt=""></div><div class="remainder"><p>Lec-22 Solidification of Binary Alloys</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/5vaYfd0fekI?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-23 Iron-Carbon Phase Diagram'"><div class="something"><div class="index">23</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/5vaYfd0fekI/default.jpg" alt=""></div><div class="remainder"><p>Lec-23 Iron-Carbon Phase Diagram</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/njJEg60K9y0?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-24 Iron-Carbon Phase Diagram'"><div class="something"><div class="index">24</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/njJEg60K9y0/default.jpg" alt=""></div><div class="remainder"><p>Lec-24 Iron-Carbon Phase Diagram</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/UoICczNYZAY?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-25 Ternary Phase Diagram'"><div class="something"><div class="index">25</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/UoICczNYZAY/default.jpg" alt=""></div><div class="remainder"><p>Lec-25 Ternary Phase Diagram</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/NIYRpdp2ZEA?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-26 Common Binary Alloys'"><div class="something"><div class="index">26</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/NIYRpdp2ZEA/default.jpg" alt=""></div><div class="remainder"><p>Lec-26 Common Binary Alloys</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/5l6taZ2rLp8?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-27 Metal Working : Deformation Processing'"><div class="something"><div class="index">27</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/5l6taZ2rLp8/default.jpg" alt=""></div><div class="remainder"><p>Lec-27 Metal Working : Deformation Processing</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/cclNwsDAkGM?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-28 Metal Working : Deformation Processing'"><div class="something"><div class="index">28</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/cclNwsDAkGM/default.jpg" alt=""></div><div class="remainder"><p>Lec-28 Metal Working : Deformation Processing</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/B-7AfClDpMk?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-29 Precipitation for Solid Solution'"><div class="something"><div class="index">29</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/B-7AfClDpMk/default.jpg" alt=""></div><div class="remainder"><p>Lec-29 Precipitation for Solid Solution</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/EtbJCAtX0Ps?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-30 Precipitation for Solid Solution'"><div class="something"><div class="index">30</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/EtbJCAtX0Ps/default.jpg" alt=""></div><div class="remainder"><p>Lec-30 Precipitation for Solid Solution</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/MoiJSjwjbxs?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-31 Heat Treatment of Steel'"><div class="something"><div class="index">31</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/MoiJSjwjbxs/default.jpg" alt=""></div><div class="remainder"><p>Lec-31 Heat Treatment of Steel</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/W2iKKFPiZYc?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-32 Heat Treatment of Steel'"><div class="something"><div class="index">32</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/W2iKKFPiZYc/default.jpg" alt=""></div><div class="remainder"><p>Lec-32 Heat Treatment of Steel</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/RjZw8KxBmXI?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-33 Heat Treatment of Steel'"><div class="something"><div class="index">33</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/RjZw8KxBmXI/default.jpg" alt=""></div><div class="remainder"><p>Lec-33 Heat Treatment of Steel</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/E6X_X7ke7pk?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-34 Heat Treatment of Steel'"><div class="something"><div class="index">34</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/E6X_X7ke7pk/default.jpg" alt=""></div><div class="remainder"><p>Lec-34 Heat Treatment of Steel</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/7knkzB4xpMo?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-35 Heat Treatment of Steel'"><div class="something"><div class="index">35</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/7knkzB4xpMo/default.jpg" alt=""></div><div class="remainder"><p>Lec-35 Heat Treatment of Steel</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/6b4h8d8otr0?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-36 Heat Treatment of Steel'"><div class="something"><div class="index">36</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/6b4h8d8otr0/default.jpg" alt=""></div><div class="remainder"><p>Lec-36 Heat Treatment of Steel</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/rUOQ25-RcVY?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-37 Surface Hardening'"><div class="something"><div class="index">37</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/rUOQ25-RcVY/default.jpg" alt=""></div><div class="remainder"><p>Lec-37 Surface Hardening</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/ktE4B1ZRvmU?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-38 Structural Steel'"><div class="something"><div class="index">38</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/ktE4B1ZRvmU/default.jpg" alt=""></div><div class="remainder"><p>Lec-38 Structural Steel</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/CZDgjaRgEjY?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-39 Structural Steel'"><div class="something"><div class="index">39</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/CZDgjaRgEjY/default.jpg" alt=""></div><div class="remainder"><p>Lec-39 Structural Steel</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/taB2vT_GkwY?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-40 Ultra High Strength Steel'"><div class="something"><div class="index">40</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/taB2vT_GkwY/default.jpg" alt=""></div><div class="remainder"><p>Lec-40 Ultra High Strength Steel</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/-XmuCgDzGwI?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-41 Preferred Orientation: Application'"><div class="something"><div class="index">41</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/-XmuCgDzGwI/default.jpg" alt=""></div><div class="remainder"><p>Lec-41 Preferred Orientation: Application</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div>
                      <div class="video-card"><a href="https://www.youtube.com/embed/rFKtP_6w4B0?autoplay=1" target="link" onclick="document.getElementById('title').innerHTML = 'Lec-42 Metal Joining'"><div class="something"><div class="index">42</div><div class="video-img"><img data-src="https://i.ytimg.com/vi/rFKtP_6w4B0/default.jpg" alt=""></div><div class="remainder"><p>Lec-42 Metal Joining</p><span>IIT Kharagpur | NPTEL</span></div></div></a></div> 
                  </div>
            </div>
        </div>
    </div>
  </section>
<!-- ---------------------------- Video Player ----------------------------- -->

<!-- ----------------------------- Course Description ----------------------------- -->
    <section class="second-section">
        <div class="container">
            <div class="description">
                <div class="element">
                    <div class="icons"><img data-src="../../../icons/checklist.png"></div>
                    <div>
                      <span>Prerequisites :</span>
                      <p>
                        Elementary knowledge of Metallurgical Thermodynamics, X-Ray diffraction & crystallography 
                        will be helpful but not essential.
                      </p>
                    </div>
                </div>
                <div class="element">
                    <div class="icons"><img data-src="../../../icons/outline.png"></div>
                    <div>
                      <span>Course Outline :</span>
                      <p>
                        The aim of this course is to provide a basic understanding of the underlying
                        principles that determine the evolution of microstructures in metals and alloys
                        during their processing and its relation with its properties & performance in
                        service. Attempts will be made to introduce the concept of thermodynamics &
                        kinetics of phase transformation, micro-structural engineering, alloy design,
                        processing (casing, forming & heat treatment) techniques, and structure property
                        relationship.
                        <br>
                        <br>
                        The course would also include a brief introduction to the tools & techniques of
                        examination of microstructure & evaluation of its properties. This would also
                        include a brief outline of crystal structure & crystal defects. In short an attempt
                        will be made to take the students from the fundamentals to the frontiers of
                        physical metallurgy. Although the main focus in this courses will be on metals
                        and alloys students of allied discipline may find this course to be useful.
                      </p>
                    </div>
                </div>
                <div class="element">
                    <div class="icons"><img data-src="../../../icons/folder.png"></div>
                    <div>
                      <span>Course Contents :</span>
                      <ul>
                        <li>Atomic bonding & crystal structure,</li>
                        <li>Experimental tools & techniques,</li>
                        <li>Solidification & plastic deformation of pure metal,</li>
                        <li>Crystal defects, Diffusion,</li>
                        <li>Solidification of binary alloys,</li>
                        <li>Three phase equilibrium (Eutectic, Peritectic system),</li>
                        <li>Phase diagrams of common binary alloys,</li>
                        <li>Iron carbon (cementite) diagram,</li>
                        <li>Cold working & annealing,</li>
                        <li>Precipitation hardening,</li>
                        <li>Pearlitic, Bainitic & Martensitic transformation,</li>
                        <li>Heat treatment of steel,</li>
                        <li>TTT diagram,</li>
                        <li>Effect of alloying elements,</li>
                        <li>Hardenability,</li>
                        <li>Application of physical metallurgy.</li>
                      </ul>
                    </div>
                </div>
                <div class="element">
                    <div class="icons"><img data-src="../../../icons/reference.png"></div>
                    <div>
                      <span>References :</span>
                      <ol>
                        <li>Physical Metallurgy Principles - Robert E Reed-Hill and Reza Abbaschian</li>
                        <li>Phase Transformation in Metals & Alloys - D A Porter & K Easterling</li>
                        <li>Fundamentals of Physical Metallurgy - John D Verhoeven</li>
                        <li>Physical Metallurgy - Peter Haasen</li>
                        <li>Structure and Properties of Alloys - R M Brick, R B Gordon, A. Phillips</li>
                        <li>Physical Foundations of Materials Science - G. Gottstein</li>
                      </ol>
                    </div>
                </div>
            </div>
          
            <!-- ------------------------------ More-Info ------------------------------ -->
            <div class="more-info">
                <div class="info-img">
                  <img data-src="../thumbnails/pm01.png" alt="">
                </div>
                <div class="info-1">
                    <div class="info">
                        <div class="left">
                            <span><img data-src="../../../icons/clock.png">Course Duration</span>
                        </div>
                        <div class="right">
                            <span>8 Weeks</span>
                        </div>
                    </div>
                  <hr>
                    <div class="info">
                        <div class="left">
                            <span><img data-src="../../../icons/dial.png">Effort</span>
                        </div>
                        <div class="right">
                            <span>6 - 8 hours per week</span>
                        </div>
                    </div>
                  <hr>
                    <div class="info">
                        <div class="left">
                            <span><img data-src="../../../icons/hashtag.png">Total Videos</span>
                        </div>
                        <div class="right">
                            <span>42 videos</span>
                        </div>
                    </div>
                  <hr>
                    <div class="info">
                        <div class="left">
                            <span><img data-src="../../../icons/tag.png">Price</span>
                        </div>
                        <div class="right">
                            <span>Free</span>
                        </div>
                    </div>
                  <hr>
                    <div class="info">
                        <div class="left">
                            <span><img data-src="../../../icons/university.png">Institution</span>
                        </div>
                        <div class="right">
                            <span>IIT Kharagpur</span>
                        </div>
                    </div>
                  <hr>
                    <div class="info">
                        <div class="left">
                            <span><img data-src="../../../icons/subject.png">Subject</span>
                        </div>
                        <div class="right">
                            <span>Physical Metallurgy</span>
                        </div>
                    </div>
                  <hr>
                    <div class="info">
                        <div class="left">
                            <span><img data-src="../../../icons/chat.png">Language</span>
                        </div>
                        <div class="right">
                            <span>English</span>
                        </div>
                    </div>
                  <hr>
                    <div class="info">
                        <div class="left">
                            <span><img data-src="../../../icons/website.png">Website</span>
                        </div>
                        <div class="right">
                            <span><a href="https://nptel.ac.in" target="_blank">https://nptel.ac.in</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ------------------------------ More-Info ------------------------------ -->  
        </div>
    </section>
<!-- ----------------------------- Course Description ----------------------------- -->


<!-- ------------------------------- cards ------------------------------- -->
<section class="third-section">
  <div class="container">
      <h1>Recommended Playlists</h1>
      <ul class="cards">
        <li class="cards_item">
          <a href="../pm02/pm02.html">
            <div class="card">
              <div class="card_image"><img data-src="../thumbnails/pm02.png"></div>
              <div class="card_content">
                <span><img data-src="../../../icons/university.png">IIT Delhi</span>
                <h3>Introduction to Material Science & Engineering</h3>
                <div class="bottom">
                    <span>147 videos</span>
                    <span>NPTEL<img data-src="../../../icons/verified.png"></span>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="cards_item">
          <a href="../pm03/pm03.html">
            <div class="card">
              <div class="card_image"><img data-src="../thumbnails/pm03.png"></div>
              <div class="card_content">
                <span><img data-src="../../../icons/university.png">IIT Roorkee</span>
                <h3>Material Science & Engineering</h3>
                <div class="bottom">
                    <span>40 videos</span>
                    <span>NPTEL<img data-src="../../../icons/verified.png"></span>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="cards_item">
          <a href="../pm04/pm04.html">
            <div class="card">
              <div class="card_image"><img data-src="../thumbnails/pm04.png"></div>
              <div class="card_content">
                <span><img data-src="../../../icons/university.png">IIT Kanpur</span>
                <h3>Phase Diagrams in Materials Science and Engineering</h3>
                <div class="bottom">
                    <span>61 videos</span>
                    <span>NPTEL<img data-src="../../../icons/verified.png"></span>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="cards_item">
          <a href="../pm05/pm05.html">
            <div class="card">
              <div class="card_image"><img data-src="../thumbnails/pm05.png"></div>
              <div class="card_content">
                <span><img data-src="../../../icons/university.png">IIT Madras</span>
                <h3>Fundamentals of Optical and Scanning Electron Microscopes</h3>
                <div class="bottom">
                    <span>22 videos</span>
                    <span>NPTEL<img data-src="../../../icons/verified.png"></span>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="cards_item">
          <a href="../pm06/pm06.html">
            <div class="card">
              <div class="card_image"><img data-src="../thumbnails/pm06.png"></div>
              <div class="card_content">
                <span><img data-src="../../../icons/university.png">IIT Kanpur</span>
                <h3>Structure of Materials</h3>
                <div class="bottom">
                    <span>45 videos</span>
                    <span>NPTEL<img data-src="../../../icons/verified.png"></span>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="cards_item">
          <a href="../pm07/pm07.html">
            <div class="card">
              <div class="card_image"><img data-src="../thumbnails/pm07.png"></div>
              <div class="card_content">
                <span><img data-src="../../../icons/university.png">IIT Madras</span>
                <h3>Fundamentals of X-Ray Diffraction and Transmission Electron Microscopes</h3>
                <div class="bottom">
                    <span>54 videos</span>
                    <span>NPTEL<img data-src="../../../icons/verified.png"></span>
                </div>
              </div>
            </div>
          </a>
        </li>

        <li class="cards_item">
          <a href="../em01/em01.html">
            <div class="card">
              <div class="card_image"><img data-src="../thumbnails/em01.png"></div>
              <div class="card_content">
                <span><img data-src="../../../icons/university.png">IISc Bangalore</span>
                <h3>Iron Making</h3>
                <div class="bottom">
                    <span>54 videos</span>
                    <span>NPTEL<img data-src="../../../icons/verified.png"></span>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="cards_item">
          <a href="../em02/em02.html">
            <div class="card">
              <div class="card_image"><img data-src="../thumbnails/em02.png"></div>
              <div class="card_content">
                <span><img data-src="../../../icons/university.png">IIT Kanpur</span>
                <h3>Steel Making</h3>
                <div class="bottom">
                    <span>42 videos</span>
                    <span>NPTEL<img data-src="../../../icons/verified.png"></span>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="cards_item">
          <a href="../em03/em03.html">
            <div class="card">
              <div class="card_image"><img data-src="../thumbnails/em03.png"></div>
              <div class="card_content">
                <span><img data-src="../../../icons/university.png">IIT Kharagpur</span>
                <h3>Non-Ferrous Extractive Metallurgy</h3>
                <div class="bottom">
                    <span>43 videos</span>
                    <span>NPTEL<img data-src="../../../icons/verified.png"></span>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="cards_item">
          <a href="../mm01/mm01.html">
            <div class="card">
              <div class="card_image"><img data-src="../thumbnails/mm01.png"></div>
              <div class="card_content">
                <span><img data-src="../../../icons/university.png">IIT Kanpur</span>
                <h3>Defects in Crystalline Solids (Part-I)</h3>
                <div class="bottom">
                    <span>40 videos</span>
                    <span>NPTEL<img data-src="../../../icons/verified.png"></span>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="cards_item">
          <a href="../mm02/mm02.html">
            <div class="card">
              <div class="card_image"><img data-src="../thumbnails/mm02.png"></div>
              <div class="card_content">
                <span><img data-src="../../../icons/university.png">IIT Kanpur</span>
                <h3>Defects in Crystalline Solids (Part-II)</h3>
                <div class="bottom">
                    <span>17 videos</span>
                    <span>NPTEL<img data-src="../../../icons/verified.png"></span>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="cards_item">
          <a href="../mm03/mm03.html">
            <div class="card">
              <div class="card_image"><img data-src="../thumbnails/mm03.png"></div>
              <div class="card_content">
                <span><img data-src="../../../icons/university.png">IIT Bhubneshwar</span>
                <h3>Creep Deformation in Materials</h3>
                <div class="bottom">
                    <span>24 videos</span>
                    <span>NPTEL<img data-src="../../../icons/verified.png"></span>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="cards_item">
          <a href="../mm04/mm04.html">
            <div class="card">
              <div class="card_image"><img data-src="../thumbnails/mm04.png"></div>
              <div class="card_content">
                <span><img data-src="../../../icons/university.png">IIT Guwahati</span>
                <h3>Introduction to Crystal Elasticity and Plasticity</h3>
                <div class="bottom">
                    <span>17 videos</span>
                    <span>NPTEL<img data-src="../../../icons/verified.png"></span>
                </div>
              </div>
            </div>
          </a>
        </li>
      </ul>
    </div>
</section>
<!-- ------------------------------- cards ------------------------------- -->

<!-- ------------------------------- Footer -------------------------------- -->
<?php 
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/assets/php/footer.php";
  include_once($path);
?>
<!-- ------------------------------- Footer -------------------------------- -->

<!-- ------------------------------- Scripts ------------------------------- -->
<script>
  function myFunction(x) {
    if (x.matches) { 
        revealPlayer();
    }
  }

var x = window.matchMedia("(max-width: 992px)")
    myFunction(x)
    x.addListener(myFunction)
  
function revealPlayer() {
    var iframe = document.createElement('iframe');
    iframe.src = "https://www.youtube.com/embed/I9fQ9KDk_uU";
    iframe.id = "embed";
    iframe.name = "link";
    iframe.frameBorder = "0";
    iframe.allow = "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture";
    iframe.allowFullscreen = true;
    document.querySelector('.video-section .video').appendChild(iframe);

    document.querySelector('.video-section .video-title h3').textContent = "Video Title";
    }
</script>

<script src="../../../js/lazy-load.js"></script>

<script src="../../../js/dis-click.js"></script>

<script src="../../../js/dark-mode.js"></script>

<script src="../../../js/jquery.min.js"></script>

<script src="../../../js/reveal-player.js"></script>

<script src="../../../js/browser-alert.js"></script>
<!-- ------------------------------- Scripts ------------------------------- -->

</body>
</html>




