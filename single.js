document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.book_container');
    const chapters = document.querySelectorAll('.book_box');
    const prevBtn = document.getElementById('prevChapter');
    const nextBtn = document.getElementById('nextChapter');
    let currentChapter = 1;

    function updateChapterView() {
        chapters.forEach(chapter => {
            chapter.style.display = 'none';
        });
        const activeChapter = document.querySelector(`.book_box[data-chapter="${currentChapter}"]`);
        if (activeChapter) {
            activeChapter.style.display = 'flex';
        }
        prevBtn.style.display = currentChapter === 1 ? 'none' : 'block';
        nextBtn.style.display = currentChapter === chapters.length ? 'none' : 'block';
    }

    prevBtn.addEventListener('click', () => {
        if (currentChapter > 1) {
            currentChapter--;
            updateChapterView();
        }
    });

    nextBtn.addEventListener('click', () => {
        if (currentChapter < chapters.length) {
            currentChapter++;
            updateChapterView();
        }
    });

    updateChapterView();
});