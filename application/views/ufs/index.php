<div class="container">
  <div class="row">
    <div class="col-md-12 mt-4">
      <h3>Channel <?= $channelName; ?></h3>
      <hr>
      
      <!-- Card -->
      <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="<?= $youtubeProfilePic; ?>" class="card-img" alt="...">
            <p class="card-text mr-3"><div class="g-ytsubscribe mr-5" data-channelid="UCOO6NvLCJxdDi36SWF1dVXA" data-layout="full" data-count="default"></div> </p>
            <p class="card-text float-right"><small class="text-muted font-weight-bold">Joined <?= date("d M Y" ,strtotime($publishedAt)); ?></small></p>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?= $channelName; ?></h5>
              <p class="card-text"> <?= $description; ?></p>
            </div>
          </div>
        </div>
      </div>

    </div>

    

  </div>
  
  <!-- Video -->
  <div class="row mb-5 mt-3">
    <div class="col-md-12">
      <h3>Kumpulan Video <?=  $channelName; ?></h3>
      <hr>
    </div>
    
    <!-- Video Card -->
    <?php foreach($video as $v): ?>
    <div class="col-md-4 mt-5">
      <div class="card">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $v['id']['videoId'] ?>?rel=0" allowfullscreen></iframe>
        </div>
        <div class="card-body">
          <h4><?= $v['snippet']['title']; ?></h4>
          <p class="card-text"><?= $v['snippet']['description']; ?></p>
          <h6>Di Publish pada <?= date("d M Y",strtotime($v['snippet']['publishedAt'])); ?></h6>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    <!-- Video Card Close -->
  
  </div>
</div>

<div class="container">
    <div class="row">
      <div class="col-md-4 mx-auto">
      </div>
    </div>
</div>

<!-- footer -->
<div class="card text-white text-center">
  <div class="card-header bg-dark border-0">
    &copy; Copyright Cinta Ulama 2019
  </div>
</div>