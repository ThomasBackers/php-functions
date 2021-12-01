<?php
    function acronym ($input) {
        $splitted_input = explode(' ', $input);
        $result = '';
        foreach ($splitted_input as $element) {
            $result = $result.ucfirst($element[0]);
        }
        return $result;
    }
    echo acronym('in code we trust');
?>
<br><br>
<?php
    function feedback ($message, $css_class) {
        return '<div class="'.$css_class.'">'.ucfirst($css_class).': '.ucfirst($message).'.</div>';
    }
    echo feedback('incorrect email address', 'error');
?>
