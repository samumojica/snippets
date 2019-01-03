//Insert CTA
add_action('ampforwp_post_before_design_elements', 'insert_cta_ampe', 1);

function insert_cta_ampe($amp_template) {

    global $post;
    $parent = wp_get_post_parent_id($post->ID);
    $grandpa = wp_get_post_parent_id($parent);

    if ($parent == '22889' || $grandpa == '45') {
        if ($parent != '36928') {
            ?>
            <p class="b54g87" align="center"> <a class="btn btn-primary btn-nclz-up" rel="nofollow" href="link" target="_self">CTA Here</a></p>
            <?php
        }
    }
}
