<?php include 'header.php'; ?>

<!-- Code -->
<div id="container">
  <!-- Menu -->
  <?php include 'menu.php'; ?>
  <!--End Menu -->

  <div id="header">
    <center><h3 class="kotak">Portofolio</h3></center>
  </div>
  <div class="tepi"></div>
  <nav id="bulet">
    <img class="gambar" src="img/my.jpg">
    <h3 id="text">ROHMAN NUR HAQIQI</h3>
    <p class="text">"Mimpi itu merupakan tujuan dari hidup itu sendiri, tanpa mimpi kita tidak<br/> akan tau arah tujuan kita.
    Tetap semangat dan terus lah mencoba, <br/>jangan pantang menyerah dan raih lah mimpi-mu setinggi langit."</p>
    <h2 class="about">About Us</h2>
      <p class="about">My name is Rohman Nur Haqiqi<br/>
      I'm school in Univercity Technology Yogyakarta<br/> I'm like traveling, but not everdays. <br/> I very newbie in programming, fotografer, and video editing.</p>
      <div class="KotakAbout">
        <label class="KotakAbout"><a href="profil.php">Selengkapnya</a></label>
      </div>
  </nav>
  <div id="row">
  <h2 class="skill">Skill</h2>
    <img class="gambar-skill" src="img/skil/img1.png">
    <img class="gambar-skill" src="img/skil/img2.png">
    <img class="gambar-skill" src="img/skil/img3.png">
    <img class="gambar-skill" src="img/skil/img4.png">
    <div class="KotakAbout1">
        <label class="KotakAbout1"><a href="skill.php">Selengkapnya</a></label>
      </div>
  </div>
  <div id="contact-us">
    <h3 class="contact-us">Contact Us</h3>
      <div class="iform">
        <input type="text" class="finput sedang" placeholder="Nama Lengkap">
      </div>
      <div class="iform">
        <input type="text" class="finput sedang" placeholder="Nomor Hp">
      </div>
      <div class="iform">
        <input type="email" class="finput sedang" placeholder="Email">
      </div>
      <div class="iform">
        <textarea class="ftextarea sedang" placeholder="Alamat"></textarea>
      </div>
      <div class="iform">
        <input type="button" class="btn medium" value="Kirim"></input>
      </div>
    </div>
    <?php include 'sosial.php'; ?>
  </div>

<?php include 'footer.php'; ?>

</body>
</html>
