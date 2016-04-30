<?php 
    // Set page information
    $this->title('Hello World');
    $this->description ('Hello World test for Vue.js!');
    $this->footer_link( "pages/vue/helloWorld.js" );
    echo '<h1>Hello world test!</h1>';
?>
<div id="helloWorld">
    <h3>Message through js file</h3>
    {{ message }}
</div>
<div id="twoWayBinding">
    <h3>Two Way Binding</h3>
    <p>{{ message }}</p>
    <input v-model="message">
</div>
<div id="todos">
    <h3>ToDo Lists</h3>
    <ul>
        <li v-for="todo in todos">
            {{ todo.text }}
        </li>
    </ul>
</div>
<div id="reverseMessage">
    <h3>Reverse Paragraph</h3>
    <p>{{ message }}</p>
    <button v-on:click="reverseMessage">Reverse Message</button>
</div>
<div id="addToDos">
    <h3>Adding ToDos</h3>
    <input v-model="newTodo" v-on:keyup.enter="addTodo">
    <ul>
        <li v-for="todo in todos">
            <span>{{ todo.text }}</span>
        <button v-on:click="removeTodo($index)">X</button>
        </li>
  </ul>
</div>