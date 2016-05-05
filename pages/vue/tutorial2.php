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

<div id="myvueinstance3" class="container lesson-wrap">
    <div class="row">UI List Element</div>
 
    <input type="text" class="form-control" v-model="filterkey">
 
    <table class="table table-hover">
        <thead>
        <tr>
            <th><a href="#" v-on:click.prevent="sortvia('id')">id</a></th>
            <th><a href="#" v-on:click.prevent="sortvia('framework')">framework</a></th>
        </tr>
        </thead>
 
        <tbody>
        <tr v-for="framework in frameworks | filterBy filterkey | orderBy sortparam order">
            <td>{{ framework.id }}</td>
            <td>{{ framework.framework }}</td>
        </tr>
        </tbody>
    </table>
</div>

<div id="myvueinstance4" class="container lesson-wrap">
 
    <h4>{{ string | upper }} </h4>
 
    <h4>{{ string | lower }}</h4>
 
</div>

<div id="anotherdiv" class="container lesson-wrap">
 
    <h4>{{ string | upper }} </h4>
 
    <h4>{{ string | lower }} </h4>
 
</div>

<div id="myvueinstance5" class="container">
    
    <alert></alert>
    
</div>

<div id="myvueinstance6" class="container lesson-wrap">
 
    <alert type="info" bold="Greetings." msg="This is some information."></alert>
    <alert type="warning" bold="Slow down." msg="You might crash."></alert>
    <alert type="danger" bold="Oh no!" msg="The program just crashed!"></alert>
    <alert type="success" bold="Rock Out" msg="with your Props out!"></alert>
 
</div>

<div id="myvueinstance7" class="container">
 
    <button v-twitter="'You gotta see how cool Vue.js is!'" class="btn btn-info">Share this on Twitter</button>
 
</div>