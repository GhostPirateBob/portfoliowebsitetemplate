<?php
class F6_TOPBAR_MENU_WALKER extends Walker
{

    private $idx = 1;

    var $db_fields = array(
        'parent' => 'menu_item_parent',
        'id'     => 'db_id'
    );

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {

        $is_current_class = '';
        $is_current_heading_open = '';
        $is_current_heading_close = '';
        if(array_search('current-menu-item', $item->classes) != 0)
        {
            $is_current_class = ' class="active"';
            $is_current_heading_open = "<h1>";
            $is_current_heading_close = "</h1>";
        }

        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<li id=\"nav-menu-item-$item->ID\" class=\"align-self-middle\">\n";
        $attributes = !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $attributes .= ' accesskey="' . $this->idx . '"';
        $attributes .= $is_current_class;

        $item_output = sprintf(
            '%1$s<a%2$s>' . $is_current_heading_open . '%3$s%4$s%5$s'  . $is_current_heading_close . '</a>%6$s' ,
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters('the_title', $item->title, $item->ID),
            $args->link_after,
            $args->after
        );;

        $output .= $item_output;
        $this->idx++;
    }
}
