
// document.addEventListener('DOMContentLoaded', function() {
//     var music = document.getElementById('background-music');
//     var toggleButton = document.getElementById('toggle-music');
//     var playIcon = toggleButton.querySelector('.play-icon');
//     var pauseIcon = toggleButton.querySelector('.pause-icon');
    
//     if (music && toggleButton) {
//       toggleButton.addEventListener('click', function() {
//         if (music.paused) {
//           music.play().then(function() {
//             playIcon.style.display = 'none';
//             pauseIcon.style.display = 'inline-block';
//           }).catch(function(error) {
//             console.log('Erreur de lecture:', error);
//           });
//         } else {
//           music.pause();
//           playIcon.style.display = 'inline-block';
//           pauseIcon.style.display = 'none';
//         }
//       });
//     }
//   });

document.addEventListener('DOMContentLoaded', function() {
    var music = document.getElementById('background-music');
    var toggleButton = document.getElementById('toggle-music');
    var playIcon = toggleButton.querySelector('.play-icon');
    var pauseIcon = toggleButton.querySelector('.pause-icon');
    
    function attemptPlay() {
        music.play().then(function() {
            playIcon.style.display = 'none';
            pauseIcon.style.display = 'inline-block';
        }).catch(function(error) {
            console.log('Erreur de lecture:', error);
        });
    }

    // Tenter de lancer la musique après la première interaction
    document.body.addEventListener('click', function onFirstClick() {
        attemptPlay();
        document.body.removeEventListener('click', onFirstClick);
    }, { once: true });

    if (toggleButton) {
        toggleButton.addEventListener('click', function() {
            if (music.paused) {
                attemptPlay();
            } else {
                music.pause();
                playIcon.style.display = 'inline-block';
                pauseIcon.style.display = 'none';
            }
        });
    }
});