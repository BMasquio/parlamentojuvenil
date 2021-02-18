// <script src="//cdn.jsdelivr.net/masonry/2.1.08/jquery.masonry.min.js"></script>
// <script src="//cdn.jsdelivr.net/jquery.lazyload/1.8.4/jquery.lazyload.js"></script>
//
// jQuery(document).ready(function () {
//     var $container = $('#masonry-container')
//     $container.imagesLoaded(function () {
//         $container.masonry({
//             itemSelector: '.item',
//             containerStyle: { position: 'relative' },
//             columnWidth: function (containerWidth) {
//                 return containerWidth / 12
//             },
//         })
//         $('.item img').addClass('not-loaded')
//         $('.item img.not-loaded').lazyload({
//             effect: 'fadeIn',
//             load: function () {
//                 // Disable trigger on this image
//                 $(this).removeClass('not-loaded')
//                 $container.masonry('reload')
//             },
//         })
//         $('.item img.not-loaded').trigger('scroll')
//     })
// })

require('./helpers')

require('./mask')
require('./vueAdmin')
require('./vueAdminElected')
require('./vueAdminContest')
require('./vueAdminContestVotes')
require('./vueCongressmen')
require('./vueSeeduc')
require('./vueUsers')
//require('./vueFilters')
require('./vueSubscribe')
require('./vueGallery')
require('./vueMap')
require('./vueSchools')
require('./vueVoteStatistics')
require('./vueTimeline')
