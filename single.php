<?php get_header() ?>

<div class="book-body">
    <div class="book-body__header">
        <div class="book-body__header_box">
            <img src="<?php echo esc_url(get_field('book__image_id')); ?>" alt="img cat cyber for first book">
            <h1 class="book-body__header_box_title">
                <?php echo wp_kses_post(get_the_title()); ?>
            </h1>
        </div>
        <div class="book-body__header_recipe">
            <img src="<?php echo esc_url(get_field('coffee__choose_img')); ?>">
            <div class="book-body__header_recipe_button">
                <a href="<?php echo esc_url(get_field('coffee__choose_recipe')); ?>" class="book-body__header_recipe_button_link" target="_blank">
                    <span class="book-body__header_recipe_button_line"></span>
                    <h2 class="book-body__header_recipe_button_title">
                        Find your Cat'fé recipe <br> to drink while reading
                    </h2>
                </a>
            </div>
        </div>
    </div>

    <h3 class="book-synopsis__title">Synopsis of the book</h3>
    <div class="book-synopsis">
        <?php echo wp_kses_post(get_field('book_synopsis')); ?>
    </div>

    <section class="book-extrait">
        <div class="book-extrait__container">
            <?php
            if (have_rows('book_chapter')) :
                $chapter_count = 0;
                while (have_rows('book_chapter')) : the_row();
                    $chapter_count++;
            ?>
                    <div class="book-extrait__container_box" data-chapter="<?php echo $chapter_count; ?>" style="background: center / cover no-repeat url('<?php echo esc_url(get_sub_field('book__chapter_bgimg')); ?>');">
                        <div class="book-extrait__container_box_content">
                            <span class="book-extrait__container_box_content_chapter_number"><?php echo esc_html(get_sub_field('book__chapter_number')); ?></span>
                            <div class="book-extrait__container_box_content_chapter_title">
                                <?php echo wp_kses_post(get_sub_field('book__chapter_title')); ?>
                            </div>
                            <span class="book-extrait__container_box_content_chapter_date"><?php echo esc_html(get_sub_field('book__chapter_date')); ?></span>
                            <div class="book-extrait__container_box_content_chapter_text">
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