<?php get_header() ?>

<header>
    <nav class="main-nav">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list menu-toggle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
        </svg>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container' => false,
            'menu_class' => 'nav-menu'
        ));
        ?>
    </nav>
</header>

<div class="book_body">
    <div class="book_header">
        <img src="<?php echo esc_url(get_field('book__image_id')); ?>" alt="img cat cyber for first book">
        <h1 class="book_title">
            <?php echo wp_kses_post(get_the_title()); ?>
        </h1>
    </div>

    <h3 class="book_synopsis_title">Synopsis of the book</h3>
    <div class="book_synopsis">
        <?php echo wp_kses_post(get_field('book_synopsis')); ?>
    </div>

    <section id="book_extrait">
        <div class="book_container">
            <?php
            if (have_rows('book_chapter')) :
                $chapter_count = 0;
                while (have_rows('book_chapter')) : the_row();
                    $chapter_count++;
            ?>
                    <div class="book_box" data-chapter="<?php echo $chapter_count; ?>" style="background: center / cover no-repeat url('<?php echo esc_url(get_sub_field('book__chapter_bgimg')); ?>');">
                        <div class="book_content">
                            <span class="book_chapter_number"><?php echo esc_html(get_sub_field('book__chapter_number')); ?></span>
                            <div class="book_chapter_title">
                                <?php echo wp_kses_post(get_sub_field('book__chapter_title')); ?>
                            </div>
                            <span class="book_chapter_date"><?php echo esc_html(get_sub_field('book__chapter_date')); ?></span>
                            <div class="book_chapter_text">
                                <?php echo wp_kses_post(get_sub_field('book__chapter_text')); ?>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
        <button id="prevChapter" class="chapter-nav">Previous</button>
        <button id="nextChapter" class="chapter-nav">Next</button>
    </section>
</div>

<?php get_footer() ?>