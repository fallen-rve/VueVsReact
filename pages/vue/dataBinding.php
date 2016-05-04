<?php 
    // Set page information
    $this->title('Data Binding');
    $this->description ('Data Binding test for Vue.js!');
    $this->footer_link( "pages/vue/dataBinding.js" );
    echo '<h1>Data Binding!</h1>';
?>

<!-- The most basic form of data binding is text interpolation using the “Mustache” syntax (double curly braces): -->
<span>Message: {{ msg }}</span>

<!-- You can also perform one-time interpolations that do not update on data change: -->
<span>This will never change: {{* msg }}</span>


<!-- The double mustaches interprets the data as plain text, not HTML. In order to output real HTML, you will need to use triple mustaches: -->
<div>{{{ raw_html }}}</div>


<!-- Mustaches can also be used inside HTML attributes: -->
<div id="item-{{ id }}"></div>