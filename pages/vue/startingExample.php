<?php 
    // Set page information
    $this->title('Hello World');
    $this->description ('Hello World test for Vue.js!');
    $this->footer_link( "pages/vue/startingExamples.js" );
    echo '<h1>Starting Examples!</h1>';
?>
<!-- this is our View -->
<div id="example-1" class="lesson-wrap">
    Hello {{ name }}!
</div>

<div id="example-2" class="lesson-wrap">
    <p v-if="greeting">Hello!</p>
</div>