
        <!--- MAIN MENU --->
        <div id="main-menu">
          <div class="box-header" id="hamburger">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <span class="box-title">Main Menu</span>
          </div>

          <!--- MENU TABS --->
          <nav class="nav" role="navigation">
            <ul class="nav__list">

              <!-- HOME -->
              <li>
                <input id="home" type="checkbox" hidden onclick="window.location.href = 'index.php';"/>
                <label for="home"> Home</label>
              </li>

              <!-- WIFI -->
              <li>
                <input id="wifi" type="checkbox" hidden />
                <label for="wifi"><span class="fa fa-angle-right"></span> Connect to the WiFi</label>
                <ul class="group-list">
                  <li><a href="index.php?cat=wifi&page=iphone">iPhone / iPad</a></li>
                  <li><a href="index.php?cat=wifi&page=android">Android</a></li>
                  <li><a href="index.php?cat=wifi&page=mac">Mac</a></li>
                  <li><a href="index.php?cat=wifi&page=windows">Windows</a></li>
                </ul>
              </li>

              <!-- BYOD -->
              <li>
                <input id="byod-info" type="checkbox" hidden />
                <label for="byod-info"><span class="fa fa-angle-right"></span> BYOD Info</label>
                <ul class="group-list">
                  <li><a href="index.php?cat=byod-info&page=software">Free Software</a></li>
                  <li><a href="index.php?cat=byod-info&page=buy">What to Buy</a></li>
                  <li><a href="index.php?cat=byod-info&page=policy">Policy</a></li>
                </ul>
              </li>

              <!-- SUBJECT INFO -->
              <li>
                <input id="subject-info" type="checkbox" hidden />
                <label for="subject-info"><span class="fa fa-angle-right"></span> Subject Information</label>
                <ul class="group-list">
                  <li>
                    <input id="subject-info-stg4" type="checkbox" hidden />
                    <label for="subject-info-stg4"><span class="fa fa-angle-right"></span> Stage 4</label>
                    <ul class="sub-group-list">
                      <li><a href="index.php?cat=subject-info-stg4&page=english">English</a></li>
                      <li><a href="index.php?cat=subject-info-stg4">Mathematics</a></li>
                      <li><a href="#">Science</a></li>
                      <li><a href="#">Indonesian</a></li>
                      <li><a href="#">Geography</a></li>
                      <li><a href="#">History</a></li>
                      <li><a href="#">Technology</a></li>
                      <li><a href="#">Music</a></li>
                      <li><a href="#">Sport</a></li>
                    </ul>
                  </li>

                  <!-- STAGE 5 -->
                  <li>
                    <input id="subject-info-stg5" type="checkbox" hidden />
                    <label for="subject-info-stg5"><span class="fa fa-angle-right"></span> Stage 5</label>
                    <ul class="sub-group-list">
                      <li><a href="#">English</a></li>
                      <li><a href="#">Mathematics</a></li>
                      <li><a href="#">Science</a></li>
                      <li><a href="#">Indonesian</a></li>
                      <li><a href="#">Geography</a></li>
                      <li><a href="#">History</a></li>
                      <li><a href="#">Technology</a></li>
                      <li><a href="#">Music</a></li>
                      <li><a href="#">Sport</a></li>
                    </ul>
                  </li>

                  <!-- STAGE 6 -->
                  <li>
                    <input id="subject-info-stg6" type="checkbox" hidden />
                    <label for="subject-info-stg6"><span class="fa fa-angle-right"></span> Stage 6</label>
                    <ul class="sub-group-list">
                      <li><a href="#">English</a></li>
                      <li><a href="#">Mathematics</a></li>
                      <li><a href="#">Science</a></li>
                      <li><a href="#">Indonesian</a></li>
                      <li><a href="#">Geography</a></li>
                      <li><a href="#">History</a></li>
                      <li><a href="#">Technology</a></li>
                      <li><a href="#">Music</a></li>
                      <li><a href="#">Sport</a></li>
                    </ul>
                  </li>
                </ul>
              </li>

              <!-- REWARDS SYSTEM -->
              <li>
                <input id="rewards-system" type="checkbox" hidden />
                <label for="rewards-system"><span class="fa fa-angle-right"></span> Rewards System</label>
                <ul class="group-list">
                  <li>
                    <li><a href="#">Thumbs Up</a></li>
                    <li><a href="#">Merit Awards</a></li>
                    <li><a href="#">RAP</a></li>
                    <li><a href="#">Excursions</a></li>
                    <li><a href="#">Special Awards</a></li>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
