
<style>
table .c {color: red}
.a .c {color: green}
</style>

<table id="t">
	<tr>
		<td class="c">Текст</td>
	</tr>
</table>

<h3>Привет</h3>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

$(document).ready(function(){
	$('#t').addClass('a');
        /*$('.c').css('color', 'green');*/
});

/*var text = document.getElementsByTagName("td");
console.log(text);*/





/*document.querySelector("td.c").style.color = "green";*/



</script>





<?php

    $str = 'Sum summus mus';

    function isPalindrom($str){
        $str_one = str_replace( " ", "", strtolower( $str ) );
        $str_two = iconv("windows-1251", "utf-8", strrev(iconv("utf-8", "windows-1251", $str_one)));
        if ( $str_one == $str_two ) return true; else return false;
    }

    function Palindrom($text){

        if ( !isPalindrom( $text ) ) {
            
            $words = explode( " ", $text );
            $max = "";
            
            for ($i = 0; $i < count($words); $i++) 
            if ( isPalindrom( $words[$i] ) && strlen( $words[$i] ) > strlen( $max ) ) $max = $words[$i];
            
            if ( $max ) return $max; else return $text[0];
            
        } else return $text;
    }

    echo Palindrom($text);

?>

<?php 

$text = 'Sum summus mus';




