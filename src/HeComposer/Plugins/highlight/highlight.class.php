<?php


namespace hecomposer\highlight;

/**
 * Class highlight
 * @package hecomposer\highlight
 * @version highlight 11.0.1
 * @url https://highlightjs.org/
 */
class highlight
{
    public function getStylesInfo()
    {
        $styles = array(
            "obsidian" => array(
                "resource" => array(
                    "css" => array(
                        "obsidian.min.css"
                    ),
                ),
            ),
            "ir-black" => array(
                "resource" => array(
                    "css" => array(
                        "style/base16/ir-black.min.css"
                    ),
                ),
            ),
            "google-dark" => array(
                "resource" => array(
                    "css" => array(
                        "style/base16/google-dark.min.css"
                    ),
                ),
            ),
        );
    }

}
