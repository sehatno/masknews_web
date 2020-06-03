<style type="text/css">
  
  /* Category Jumbotron */
  .category-span{
    font-size: 2rem;
  }
  .category-title{
    font-size: 1.7rem;
  }
  .category-desc{
    font-size: 1.2rem;
  }

  /* Posts */
  .entry2 a img{
    height: 250px !important;
  }

  @media (max-width: 768px) and (min-width: 361px){
    /* Category Jumbotron */
    .category{
      padding-left: 50px;
    }
    .category-span{
      font-size: 2rem;
    }
    .category-title{
      font-size: 1.7rem;
    }
    .category-desc{
      font-size: 1rem;
    }

    /* Posts */
    .entry2{
      width: 90%;
      margin: auto;
    }
    .entry2 a img{
      width: 100%;
      height: 300px !important;
    }
    .post-category{
      font-size: .7rem;
    }
    .entry2 h2{
      line-height: 150%;
    }
    .post-title{
      font-size: 1.5rem;
    }
    .post-article{
      font-size: 1.1rem;
    }
    .post-readmore{
      font-size: 1.1rem;
    }

  }

  @media (max-width: 360px){
    /* Category Jumbotron */
    .category-span{
      font-size: 1.5rem;
    }
    .category-title{
      font-size: 1.3rem;
    }
    .category-desc{
      font-size: .9rem;
    }

    /* Posts */
    .entry2 a img{
      height: 200px !important;
    }
    .post-category{
      font-size: .5rem;
    }
    .entry2 h2{
      line-height: 100%;
    }
    .post-title{
      font-size: 1.1rem;
    }
    .post-article{
      font-size: .9rem;
    }
    .post-readmore{
      font-size: .9rem;
    }

  }

</style>
       
    <div class="py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-9 category">

            <!-- swithcing category -->
            <span class="category-span">Category</span>
            <?php if(strtolower($blogs[0]['category']) == 'politic') : ?>
              <h3 class="category-title">Politic</h3>
              <p class="category-desc">Berbagai berita politik panas dari seluruh penjuru dunia. Baca dan tetap up to date.</p>
            <?php endif; ?>
            <?php if(strtolower($blogs[0]['category']) == 'tech') : ?>
              <h3 class="category-title">Tech</h3>
              <p class="category-desc">Berbagai berita teknologi terbaru, termodern, sebuah pencapaian dari seluruh penjuru dunia. Baca dan tetap up to date.</p>
            <?php endif; ?>
            <?php if(strtolower($blogs[0]['category']) == 'entertainment') : ?>
              <h3 class="category-title">Entertainment</h3>
              <p class="category-desc">Berbagai berita entertainment hangat yang menjadi perbincangan saat ini dari seluruh penjuru dunia. Baca dan tetap up to date.</p>
            <?php endif; ?>
            <?php if(strtolower($blogs[0]['category']) == 'travel') : ?>
              <h3 class="category-title">Travel</h3>
              <p class="category-desc">Berbagai berita travel perjalanan unik, indah, terbaru dari seluruh penjuru dunia. Baca dan tetap up to date.</p>
            <?php endif; ?>
            <?php if(strtolower($blogs[0]['category']) == 'sport') : ?>
              <h3 class="category-title">Sport</h3>
              <p class="category-desc">Berbagai berita olahraga terbaru, terpanas, berbagai liga dari seluruh penjuru dunia. Baca dan tetap up to date.</p>
            <?php endif; ?>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-white">
      <div class="container">
        <div class="row">
          <?php foreach($blogs as $blog) : ?>
            <div class="col-lg-4 mb-4">
              <div class="entry2">
                <a href="<?= base_url('blog/article/').$blog['id'] ?>"><img src="<?= base_url('uploads/').$blog['image'] ?>" alt="Image" class="img-fluid rounded" style="height:300px;"></a>
                <div class="excerpt">
                <!-- category bg color -->
                <?php if(strtoupper($blog['category']) == 'POLITIC') : ?>
                  <span class="post-category text-white bg-secondary mb-3"><?= $blog['category'] ?></span>
                <?php endif; ?>
                <?php if(strtoupper($blog['category']) == 'TECH') : ?>
                  <span class="post-category text-white bg-danger mb-3"><?= $blog['category'] ?></span>
                <?php endif; ?>
                <?php if(strtoupper($blog['category']) == 'ENTERTAINMENT') : ?>
                  <span class="post-category text-white bg-success mb-3"><?= $blog['category'] ?></span>
                <?php endif; ?>
                <?php if(strtoupper($blog['category']) == 'TRAVEL') : ?>
                  <span class="post-category text-white bg-primary mb-3"><?= $blog['category'] ?></span>
                <?php endif; ?>
                <?php if(strtoupper($blog['category']) == 'SPORT') : ?>
                  <span class="post-category text-white bg-warning mb-3"><?= $blog['category'] ?></span>
                <?php endif; ?>

                <h2><a class="post-title" href="<?= base_url('blog/article/').$blog['id'] ?>"><?= $blog['title'] ?></a></h2>
                <div class="post-meta align-items-center text-left clearfix">
                  <figure class="author-figure mb-0 mr-3 float-left"><img src="<?=base_url('assets/images/').$blog['writer'].'.jpg' ?>" alt="Image" class="img-fluid" style="height:100%;"></figure>
                  <span class="d-inline-block mt-1">By <a href="#"><?= $blog['writer'] ?></a></span>
                  <span>&nbsp;-&nbsp; <?= $blog['date'] ?></span>
                </div>
                
                  <p class="post-article"><?= substr($blog['article'],0,100).'...' ?></p>
                  <p><a class="post-readmore" href="<?= base_url('blog/article/').$blog['id'] ?>">Read More</a></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          
        </div>
        <div class="row text-center pt-5 border-top">
          <div class="col-md-12">
            
          </div>
      </div>
    </div>
  </div>