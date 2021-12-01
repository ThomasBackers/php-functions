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
    function feedback ($message, $css_class='info') {
        return '<div class="'.$css_class.'">'.ucfirst($css_class).': '.ucfirst($message).'.</div>';
    }
    echo feedback('incorrect email address', 'error');
?>

<br><br>

<?php
    function random_word_generator () {
        $len_1 = array_rand(
            range(1, 5)
        );
        $len_2 = array_rand(
            range(7, 15)
        );
        $chars = array_merge(range('a', 'z'), range('A', 'Z'));
        shuffle($chars);
        $word_1 = substr(implode($chars), 0, $len_1);
        $word_2 = substr(implode($chars), 0, $len_2);
        return array($word_1, $word_2);
    }
    $words_array = random_word_generator();
    echo $words_array[0].' '.$words_array[1];
?>
