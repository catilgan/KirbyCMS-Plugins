<?php

$iframeAttr = array(
    'src' => '',
    'srcdoc' => '',
    'name' => '',
    'width' => '100%',
    'height' => '100px',
    'align' => 'left',
    'allowfullscreen' => 'true',
    'frameborder' => 'false',
    'longdesc' => '',
    'marginheight' => '0',
    'marginwidth' => '0',
    'scrolling' => 'true',
    'sandbox' => '',
    'seamless' => 'true',
);

kirbytext::$tags['iframe'] = array(
    'attr' => array_keys($iframeAttr),
    'html' => function ($tag) use ($iframeAttr) {
        $values = [];
        foreach ($iframeAttr as $attr => $value) {
            $values[$attr] = $tag->attr($attr, $value);
        }
        $values['src'] = $tag->attr('iframe', $values['src']);

        return '<iframe ' . attr($values) . '></iframe>';
    }
);