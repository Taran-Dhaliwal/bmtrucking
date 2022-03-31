<?php

namespace WP_Rplg_Google_Reviews\Includes;

class Feed_Deserializer {

    public function __construct(\WP_Query $wp_query) {
        $this->wp_query = $wp_query;
    }

    public function get_feed($post_id, $args = array()) {
        $default_args = array(
            'post_type'      => Post_Types::FEED_POST_TYPE,
            'p'              => $post_id,
            'posts_per_page' => 1,
            'no_found_rows'  => true,
        );

        $args = wp_parse_args($args, $default_args);
        $this->wp_query->query($args);

        if (!$this->wp_query->have_posts()) {
            return false;
        }

        return $this->wp_query->posts[0];
    }

    public function get_feed_count($args = array()) {
        $default_args = array(
            'post_type'      => Post_Types::FEED_POST_TYPE,
            'posts_per_page' => -1,
            'no_found_rows'  => true,
        );

        $args = wp_parse_args($args, $default_args);
        $this->wp_query->query($args);

        if (!$this->wp_query->have_posts()) {
            return 0;
        }

        return count($this->wp_query->posts);
    }

}
