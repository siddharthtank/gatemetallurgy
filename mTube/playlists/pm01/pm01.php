<?php 
  include_once($_SERVER['DOCUMENT_ROOT'] . '/php/header.php');
  include_once($_SERVER['DOCUMENT_ROOT'] . '/php/mTube/banner.php');
  include_once($_SERVER['DOCUMENT_ROOT'] . '/php/mTube/revealplayer.php');
  include_once($_SERVER['DOCUMENT_ROOT'] . '/php/mTube/videocard.php');
  include_once($_SERVER['DOCUMENT_ROOT'] . '/php/mTube/moreinfo.php');
  include_once($_SERVER['DOCUMENT_ROOT'] . '/php/mTube/cards.php');
  include_once($_SERVER['DOCUMENT_ROOT'] . '/php/footer.php');
?>

<?php head(
  $title       = "GATE Metallurgy",
  $description = "GATE Metallurgy Playlist Section",
  $keywords    = "GATE,GATE Metallurgy, Metallurgy",
  $css         = "mtube.css"
); ?>


<?php banner(
  $img        = "iitkgp.jpg",
  $subject    = "Physical Metallurgy",
  $url        = "#",
  $title      = "Principles of Physical Metallurgy",
  $college    = "IIT Kharagpur",
  $prof       = "Prof. R.N. Ghosh",
  $dept       = "Metallurgical and Materials Engineering",
  $author     = "NPTEL"
); ?>

<!-- ---------------------------- Video Player ----------------------------- -->
<section class="first-section" id="first-section">
    <div class="container" id="video-player">
        <div class="video-player">
            <div class="video-section">
                <div class="video">
                    <!-- iframe -->
                </div>
                <div class="video-title">
                    <h3 id="title"></h3>
                </div>
            </div>
            <div class="playlist-section">
                <div class="playlist-title">
                    <h3 class="title">Principles of Physical Metallurgy</h3>
                </div>
                <div class="playlist"> 
                    <?php 
                      videocard("1","9Sf278j1GTU","Introduction","NPTEL");
                      videocard("2","_NCv3z5hYhE","Atomic Bond and Crystal Structure","NPTEL");
                      videocard("3","cJNnM7j2XLo","Atomic Bond and Crystal Structure (Contd...1)","NPTEL");
                      videocard("4","BpcOWItPVW8","Atomic Bond and Crystal Structure (Contd...2)","NPTEL");
                      videocard("5","t2sUNHnWhGk","Experimental Tools & Techniques","NPTEL");
                      videocard("6","NYR1lTXUFfM","Experimental Tools & Techniques (Contd.)","NPTEL");
                      videocard("7","eHW2gnv9TSE","Solidification of Pure Metal","NPTEL");
                      videocard("8","MdQDS7BwrtA","Plastic Deformation of Pure Metal","NPTEL");
                      videocard("9","4QpHNBFKWP0","Plastic Deformation of Pure Metal (Contd.)","NPTEL");
                      videocard("10","fIja4FMkRc0","Crystal Defects in Metals","NPTEL");
                      videocard("11","jiX7qYKAefE","Crystal Defects in Metals (Contd...1)","NPTEL");
                      videocard("12","aHWHusCOaGE","Crystal Defects in Metals (Contd...2)","NPTEL");
                      videocard("13","vFUULDemAXw","Crystal Defects in Metals (Contd...3)","NPTEL");
                      videocard("14","oEyNTVXJmkA","Crystal Defects in Metals (Contd...4)","NPTEL");
                      videocard("15","iK4DC-__DAs","Diffusion in Solids","NPTEL");
                      videocard("16","4thB3dJ3H4M","Diffusion in Solids (Contd.)","NPTEL");
                      videocard("17","6XEfEHTJ8XU","Numerical Examples in Diffusion","NPTEL");
                      videocard("18","_lj-4wsHDPU","Solidification of Binary Alloys","NPTEL");
                      videocard("19","5-MNqdse6iw","Solidification of Binary Alloys (Contd...1)","NPTEL");
                      videocard("20","1lmPhxEYfyc","Solidification of Binary Alloys (Contd...2)","NPTEL");
                      videocard("21","BD0RqFbcvrM","Solidification of Binary Alloys (Contd...3)","NPTEL");
                      videocard("22","f0YXp18Y-AI","Solidification of Binary Alloys (Contd...4)","NPTEL");
                      videocard("23","5vaYfd0fekI","Iron-Carbon Phase Diagram","NPTEL");
                      videocard("24","njJEg60K9y0","Iron-Carbon Phase Diagram (Contd.)","NPTEL");
                      videocard("25","UoICczNYZAY","Ternary Phase Diagram","NPTEL");
                      videocard("26","NIYRpdp2ZEA","Common Binary Alloys","NPTEL");
                      videocard("27","5l6taZ2rLp8","Metal Working : Deformation Processing","NPTEL");
                      videocard("28","cclNwsDAkGM","Metal Working : Deformation Processing (Contd.)","NPTEL");
                      videocard("29","B-7AfClDpMk","Precipitation for Solid Solution","NPTEL");
                      videocard("30","EtbJCAtX0Ps","Precipitation for Solid Solution (Contd.)","NPTEL");
                      videocard("31","MoiJSjwjbxs","Heat Treatment of Steel","NPTEL");
                      videocard("32","W2iKKFPiZYc","Heat Treatment of Steel (Contd...1)","NPTEL");
                      videocard("33","RjZw8KxBmXI","Heat Treatment of Steel (Contd...2)","NPTEL");
                      videocard("34","E6X_X7ke7pk","Heat Treatment of Steel (Contd...3)","NPTEL");
                      videocard("35","7knkzB4xpMo","Heat Treatment of Steel (Contd...4)","NPTEL");
                      videocard("36","6b4h8d8otr0","Heat Treatment of Steel (Contd...5)","NPTEL");
                      videocard("37","rUOQ25-RcVY","Surface Hardening","NPTEL");
                      videocard("38","ktE4B1ZRvmU","Structural Steel","NPTEL");
                      videocard("39","CZDgjaRgEjY","Structural Steel (Contd.)","NPTEL");
                      videocard("40","taB2vT_GkwY","Ultra High Strength Steel","NPTEL");
                      videocard("41","-XmuCgDzGwI","Preferred Orientation: Application","NPTEL");
                      videocard("42","rFKtP_6w4B0","Metal Joining","NPTEL");                       
                    ?>
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
                    <div class="icons"><img data-src="/icons/checklist.png"></div>
                    <div>
                      <span>Prerequisites :</span>
                      <p>
                        Elementary knowledge of Metallurgical Thermodynamics, X-Ray diffraction & crystallography 
                        will be helpful but not essential.
                      </p>
                    </div>
                </div>
                <div class="element">
                    <div class="icons"><img data-src="/icons/outline.png"></div>
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
                    <div class="icons"><img data-src="/icons/folder.png"></div>
                    <div>
                      <span>Course Contents :</span>

                      <button class="collapsible">Atomic Bonding & Crystal Structure:</button>
                      <div class="content">
                          <p>Metallic bond, unit cell, atomic packing, interstitial sites, Miller indices, crystal orientation, stereographic projection.</p>
                      </div>
                      <button class="collapsible">Experimental tools & techniques:</button>
                      <div class="content">
                          <p>Metallography (Optical TEM, SEM), X Ray Diffraction, Mechanical Properties, Thermal analysis.</p>
                      </div>
                      <button class="collapsible">Solidification of pure metal:</button>
                      <div class="content">
                          <p>Phase rule, Concept of Free Energy, Entropy, Surface Energy (grain boundary) & under cooling, Nucleation & Growth, homogeneous & heterogeneous nucleation, directional solidification.</p>
                      </div>
                      <button class="collapsible">Plastic deformation of pure metal:</button>
                      <div class="content">
                          <p>Mechanisms (slip & twin), critical resolved shear stress, single crystal tensile test (fcc), theoretical strength of ideal crystal.</p>
                      </div>
                      <button class="collapsible">Crystal defects in metals:</button>
                      <div class="content">
                          <p>Vacancy, interstitial, substitutional, free energy of mixing, dislocation (elementary concepts only), edge / screw dislocation, partial dislocation, stacking fault, dislocation lock, dislocation pile up, Hall Petch relation, grain boundary structure.</p>
                      </div>
                      <button class="collapsible">Diffusion:</button>
                      <div class="content">
                          <p>partial dislocation, stacking fault, dislocation lock, dislocation pile up, Hall Petch relation, grain boundary structure.</p>
                      </div>
                      <button class="collapsible">Solidification of binary alloys:</button>
                      <div class="content">
                          <p>Limits of solubility, isomorphous system, lever rule, constitutional super cooling, effect of non equilibrium cooling, eutectic, peritectic, eutectoid & peritectoid system, complex phase diagram, ternary diagram, composition triangle, ternary eutectic, 
                            vertical & horizontal sections, structure of cast metal, segregation & porosity, iron-carbon diagram, steel & cast iron.</p>
                      </div>
                      <button class="collapsible">Binary phase diagrams of common commercial alloys:</button>
                      <div class="content">
                          <p>Cu-Ni, Au-Cu, Ni-Cr, Al-Si, Al-Zn, Al-Ag, Pb-Sn, Cu-Zn, Cu-Sn, Cu-Al, Ti-Al, Ti-V: interpretation of microstructure & properties.</p>
                      </div>
                      <button class="collapsible">Cold working & Annealing:</button>
                      <div class="content">
                          <p>Recovery, recrystallization & grain growth, phenomenological& mechanistic approaches.</p>
                      </div>
                      <button class="collapsible">Precipitation from super-saturated terminal solid solution:</button>
                      <div class="content">
                          <p>Thermodynamics & kinetics of precipitation, precipitation hardening.</p>
                      </div>
                      <button class="collapsible">Heat treatment of steel:</button>
                      <div class="content">
                          <p>T-T-T diagram, Pearlitic, Martensitic & Bainitic transformation, effect of alloy elements on phase diagram & TTT diagram, CCT diagram, Annealing, normalizing, hardening & tempering, hardenability.</p>
                      </div>
                      <button class="collapsible">Application of physical metallurgy:</button>
                      <div class="content">
                          <p>Strengthening mechanism, strength vs. toughness (ductility), thermo mechanical processing, micro alloyed steel, ultra high strength steel, superalloy, control of texture.</p>
                      </div>
                    </div>
                </div>
                <div class="element">
                    <div class="icons"><img data-src="/icons/reference.png"></div>
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
            <?php  moreinfo(
              $weeks    = "8",
              $hours    = "6 - 8",
              $videos   = "42",
              $college  = "IIT Kharagpur",
              $subject  = "Physical Metallurgy",
              $url      = "https://nptel.ac.in"
            ); ?> 
            <!-- ------------------------------ More-Info ------------------------------ -->  
        </div>
    </section>
<!-- ----------------------------- Course Description ----------------------------- -->

<section class="third-section">
  <div class="container">
    <h1>Recommended Playlists</h1>
    <ul class="cards">
      <?php 
        card($course="pm01",$title="Principles of Physical Metallurgy",$videos="42",$college="IIT Kharagpur",$author="NPTEL"); 
        card($course="pm02",$title="Introduction to Material Science & Engineering",$videos="147",$college="IIT Delhi",$author="NPTEL"); 
        card($course="pm03",$title="Material Science & Engineering",$videos="40",$college="IIT Roorkee",$author="NPTEL"); 
        card($course="pm04",$title="Phase Diagrams in Material Science & Engineering",$videos="61",$college="IIT Kanpur",$author="NPTEL"); 
        card($course="pm05",$title="Fundamentals of Optical & Scanning Electron Microscopes",$videos="22",$college="IIT Madras",$author="NPTEL"); 
        card($course="pm06",$title="Structure of Materials",$videos="45",$college="IIT Kanpur",$author="NPTEL"); 
        card($course="pm07",$title="Fundamentals of X-Ray Diffraction & Transmission Electron Microscopes",$videos="54",$college="IIT Madras",$author="NPTEL"); 
      ?> 
    </ul>
  </div>
</section>

<!-- ------------------------------- Scripts ------------------------------- -->
<?php revealplayer(
  $url    = "9Sf278j1GTU",
  $title  = "Introduction",
); ?>

<?php  include_once($_SERVER['DOCUMENT_ROOT'] . '/php/scripts.php'); ?>
<!-- ------------------------------- Scripts ------------------------------- -->

<?php footer(); ?>