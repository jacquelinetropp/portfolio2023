<?php get_header() ?>

<section class="hero">

</section>

<section class="projects" id="projects">
    <?php get_template_part('template-parts/projects') ?>
</section>

<section class="skill" id="skills">
    <h2 class="headers">Skills</h2>
    <?php get_template_part('template-parts/skills') ?>
</section>

<section class="contact">
    <div class="contact__div">
        <h2 class="headers">Let's Work Together</h2>
        <?php echo do_shortcode("[contact-form-7 id='aaedfc4' title='Contact form 1']"); ?>
    </div>
</section>

<?php get_footer() ?>