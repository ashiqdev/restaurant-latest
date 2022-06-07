<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Blog";
	
    require_once("../../inc/header.php"); 
  ?>
  </head>
  <body style="background: #eee;">
    <div class="main_contant" class="general-style">
      <!--=========================-->
      <!--=        Navbar         =-->
      <!--=========================-->
      <?php
    $page="blog"; 
    require_once("../../inc/navbar.php"); 
    ?>

      <!--==========================-->
      <!--=         Banner         =-->
      <!--==========================-->
      <section class="page-banner">
        <div class="container">
          <div class="page-title-wrapper">
            <h1 class="page-title">Blog</h1>

            <ul class="bradcurmed">
              <li><a href="/blog/">Hem</a></li>
              <li>Blog</li>
            </ul>
          </div>
          <!-- /.page-title-wrapper -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.page-banner -->

      <!--==========================-->
      <!--=         BLOG LIST         =-->
      <!--==========================-->
      <div class="container mt-5">
        <div class="row nordic-blog-container">
            <!-- 1st -->
          <!-- <div class="col-12 blog-item mb-5">
            <article class="blog-card">
              <div class="blog-card__background">
                <div class="card__background--wrapper">
                  <div
                    class="card__background--main"
                    style="
                      background-image: url('http://demo.yolotheme.com/html/motor/images/demo/demo_131.jpg');
                    "
                  >
                    <div class="card__background--layer"></div>
                  </div>
                </div>
              </div>

              <div class="blog-card__head">
                <span class="date__box">
                  <span class="date__day">11</span>
                  <span class="date__month">JAN</span>
                </span>
              </div>

              <div class="blog-card__info">
                <h5>HARVICK GETS WHAT HE NEEDS, JOHNSON AMONG THOSE</h5>
                <div>
                  <p href="#" class="icon-link mr-3"
                    >
                    <i class="material-icons" data-icon="edit_note"></i>
                    <span>Admin</span>
                    </p>

                </div>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Doloremque vero libero voluptatibus earum? Alias dignissimos
                  quo cum, nulla esse facere atque, blanditiis doloribus at sunt
                  quas, repellendus vel? Et, hic!
                </p>
                <button href="#" class="blog-btn blog-btn--with-icon"
                  >READ MORE
                  </button>
              </div>
            </article>
          </div> -->

          <!-- 2nd -->
          <!-- <div class="col-12 blog-item mb-5">
            <article class="blog-card">
              <div class="blog-card__background">
                <div class="card__background--wrapper">
                  <div
                    class="card__background--main"
                    style="
                      background-image: url('http://demo.yolotheme.com/html/motor/images/demo/demo_131.jpg');
                    "
                  >
                    <div class="card__background--layer"></div>
                  </div>
                </div>
              </div>

              <div class="blog-card__head">
                <span class="date__box">
                  <span class="date__day">11</span>
                  <span class="date__month">JAN</span>
                </span>
              </div>

              <div class="blog-card__info">
                <h5>HARVICK GETS WHAT HE NEEDS, JOHNSON AMONG THOSE</h5>
                <div>
                    <p href="#" class="icon-link mr-3"
                      >
                      <i class="material-icons" data-icon="edit_note"></i>
                      <span>Admin</span>
                      </p>
  
                  </div>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Doloremque vero libero voluptatibus earum? Alias dignissimos
                  quo cum, nulla esse facere atque, blanditiis doloribus at sunt
                  quas, repellendus vel? Et, hic!
                </p>
                <button href="#" class="blog-btn blog-btn--with-icon"
                  >READ MORE
                </button>
              </div>
            </article>
          </div> -->

          <!-- 3rd -->
          <!-- <div class="col-12 blog-item mb-5">
            <article class="blog-card">
              <div class="blog-card__background">
                <div class="card__background--wrapper">
                  <div
                    class="card__background--main"
                    style="
                      background-image: url('http://demo.yolotheme.com/html/motor/images/demo/demo_131.jpg');
                    "
                  >
                    <div class="card__background--layer"></div>
                  </div>
                </div>
              </div>

              <div class="blog-card__head">
                <span class="date__box">
                  <span class="date__day">11</span>
                  <span class="date__month">JAN</span>
                </span>
              </div>

              <div class="blog-card__info">
                <h5>HARVICK GETS WHAT HE NEEDS, JOHNSON AMONG THOSE</h5>
                <div>
                    <p href="#" class="icon-link mr-3"
                      >
                      <i class="material-icons" data-icon="edit_note"></i>
                      <span>Admin</span>
                      </p>
  
                  </div>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Doloremque vero libero voluptatibus earum? Alias dignissimos
                  quo cum, nulla esse facere atque, blanditiis doloribus at sunt
                  quas, repellendus vel? Et, hic!
                </p>
                <button href="#" class="blog-btn blog-btn--with-icon"
                  >READ MORE
                </button>
              </div>
            </article>
          </div> -->
        </div>
      </div>

      <?php require_once("../../inc/footer.php"); ?>
    </div>
  </body>
</html>
