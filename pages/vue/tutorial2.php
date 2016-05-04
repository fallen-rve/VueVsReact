<?php 
    // Set page information
    $this->title('Tutorial 2');
    $this->description ('Tutorial 2 for Vue.js!');
    $this->footer_link( "pages/vue/tutorial2.js" );
    echo '<h1><a href="http://vegibit.com/vue-js-tutorial/#filtering" target="_blank">Learning Tutorial 2!</a></h1>';
?>
<div id="myvueinstance" class="container lesson-wrap">
    
    <div class="row">UI element</div>
    <input type="text" v-model="textinput" class="form-control">
 
    <p> </p>
 
    <div class="row">Vue Instance data object</div>
    {{ $data | json }}
    
</div>

<div id="myvueinstance2" class="container lesson-wrap">
    
    <div class="row">UI List Element</div>
 
    <ul class="nav nav-pills">
        <li v-for="library in libraries" class="active"><a href="#">{{ library }}</a></li>
    </ul>
 
    <p> </p>
 
    <input class="form-control" type="text" placeholder="Type the library name here, then click the button below." v-model="newlibrary">
    <button class="btn btn-info" v-on:click="addLibrary">Click to add library</button>
    <button class="btn btn-danger" v-on:click="deleteLibraries">Click to delete all libraries</button>
 
    <p> </p>
 
    <div class="row">Vue Instance data object</div>
    {{ $data | json }}
    
</div>