
/**
* Progress plugin
* last edit: 24.03.16
*/

$(document).ready(function(){
  var $container  = $('body');
  var $status     = $('status');
  var $progress   = $status.find('.progress');
  var $info       = $status.find('info');

  var
  loadingProgress=0,
  totalNumImgs=$container.find('img').length,
  broken = false,
  count = 0;

  // Use ElasticProgress for progress bar
  $progress.ElasticProgress({
    align: "center",
    colorFg: "#24D689",
    colorBg: "#1F1F1F",
    width: Math.min($(window).width()/2 - 100, 600),
    barHeight: 10,
    labelHeight: 40,
    labelWobbliness: 0,
    bleedTop: 100,
    bleedRight: 100,
    buttonSize: 0,
    barStretch: 0,
    barInset: 0,
    barElasticOvershoot: 1,
    barElasticPeriod: 0.7,
    textFail: "Failed",
    textComplete: "Complete",
    arrowHangOnFail: false,
    onComplete: function(){
      checkImages();
    }
  });
  $progress.ElasticProgress("open");

  $container.imagesLoaded()
  .progress( onProgress )
  .done( onFinished )
  .fail( onFailed );

  // Triggered after each item is loaded
  function onProgress( imgLoad, image ) {
    // update progress element
    count++;
    loadingProgress = Math.floor(((count / totalNumImgs)*100))/100;
    $progress.ElasticProgress("setValue", loadingProgress);
    if ( !image.isLoaded ) {
      TweenMax.delayedCall(0.8, function() {
        $progress.ElasticProgress("fail");
        checkImages();
      });
    }
  }

  // Hide status when done
  function onFinished() {
    $status.fadeOut(300);
  }

  // If some images are broken
  function onFailed() {
    broken = true;
  }

  // Check images for broken ones
  function checkImages() {
    if (broken) {
      $progress.ElasticProgress("fail");
      $info.fadeIn(200);
    }
  }
});
