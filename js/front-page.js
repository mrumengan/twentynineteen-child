jQuery(document).ready(function($) {
  function pathPrepare ($el) {
    var lineLength = $el[0].getTotalLength();
    $el.css("stroke-dasharray", lineLength);
    $el.css("stroke-dashoffset", lineLength);
    console.log($el, lineLength);
  }

  var $rope1 = $('path.cls-1');

  // prepare SVG
  pathPrepare($rope1);

  // init controller
  var controller = new ScrollMagic.Controller();

  // build tween
  var tween = new TimelineMax()
    .add(TweenMax.to($rope1, 0.9, {strokeDashoffset: 0, ease:Linear.easeNone})) // draw word for 0.9
    .add(TweenMax.to("path", 1, {stroke: "#fff", ease:Linear.easeNone}), 0);			// change color during the whole thing

  // build scene
  var scene = new ScrollMagic.Scene({triggerElement: "#lets-get-acquainted .acquainted", duration: 300, tweenChanges: true})
          .setTween(tween)
          // .addIndicators()
          .addTo(controller);
});
