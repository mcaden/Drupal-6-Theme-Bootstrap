/* =============================================================
 * Intended to backfill the need for bootstrap-collapse which
 * won't work with Drupal 6.x
 * ============================================================ */

(function(){
  "use strict"
  $(function () {
    $('.navbar-toggle').bind('click', '[data-toggle=collapse]', function ( e ) {
      var $this = $(this), 
        target = $this.attr('data-target');
      e.preventDefault();
      console.log(target);
      $(target).slideToggle();
    })
  })
})();