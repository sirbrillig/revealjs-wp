(function ( Reveal ) {
	"use strict";
  // Full list of configuration options available here:
  // https://github.com/hakimel/reveal.js#configuration
  Reveal.initialize({
//    width: '100%',
//    height: '100%',
//    minScale: 1,
    controls: true,
    progress: true,
    history: true,
    center: true,
//    timeRemaining: 4,

    theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
    transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none

    // Optional libraries used to extend on reveal.js
    dependencies: [] });
}( Reveal ));
