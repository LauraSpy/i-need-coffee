// document.addEventListener('DOMContentLoaded', function() {
//     var music = document.getElementById('background-music');
//     var toggleButton = document.getElementById('toggle-music');
    
//     if (music && toggleButton) {
//         toggleButton.addEventListener('click', function() {
//             if (music.paused) {
//                 music.play().catch(function(error) {
//                     console.log('Erreur de lecture:', error);
//                 });
//             } else {
//                 music.pause();
//             }
//         });
//     }
// });

document.addEventListener('DOMContentLoaded', function() {
    var music = document.getElementById('background-music');
    var toggleButton = document.getElementById('toggle-music');
    var playIcon = toggleButton.querySelector('.play-icon');
    var pauseIcon = toggleButton.querySelector('.pause-icon');
    
    if (music && toggleButton) {
      toggleButton.addEventListener('click', function() {
        if (music.paused) {
          music.play().then(function() {
            playIcon.style.display = 'none';
            pauseIcon.style.display = 'inline-block';
          }).catch(function(error) {
            console.log('Erreur de lecture:', error);
          });
        } else {
          music.pause();
          playIcon.style.display = 'inline-block';
          pauseIcon.style.display = 'none';
        }
      });
    }
  });