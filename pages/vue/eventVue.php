<?php 
    // Set page information
    $this->title('Events');
    $this->description ('Eventd for Vue.js!');
    $this->footer_link( "pages/vue/eventVue.js" );
    echo '<h1><a href="https://scotch.io/tutorials/build-an-app-with-vue-js-a-lightweight-alternative-to-angularjs" target="_blank">Learning Event with Vue.js!</a></h1>';
?>

<div id="events" class="container">

    <div class="lesson-wrap">

        <div class="heading">
            <h3>Add an Event</h3>
        </div>
        <div class="body">
            <div class="form-group">
                <input class="form-control" placeholder="Event Name" v-model="event.eventName">
            </div>
            <div class="form-group">
                <input type="date" class="form-control" placeholder="Date" v-model="event.eventDate">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Time" v-model="event.eventTime">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Location" v-model="event.eventLocation">
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Event Details" v-model="event.eventDetails"></textarea>
            </div>
            <button class="goodButton" v-on:click="addEvent">Submit</button>
        </div>
        
    </div>
 
    <input type="text" class="form-control" v-model="filterkey">
 
    <table class="table table-hover">
        <thead>
        <tr>
            <th><a href="#" v-on:click="sortvia('eventID')">Event ID</a></th>
            <th><a href="#" v-on:click="sortvia('eventName')">Event Name</a></th>
            <th><a href="#" v-on:click="sortvia('eventName')">Event Date</a></th>
            <th><a href="#" v-on:click="sortvia('eventName')">Event Time</a></th>
            <th><a href="#" v-on:click="sortvia('eventName')">Event Location</a></th>
            <th><a href="#" v-on:click="sortvia('eventDetails')">Event Details</a></th>
        </tr>
        </thead>
 
        <tbody>
        <tr v-for="event in events | filterBy filterkey | orderBy sortparam order">
            <td>{{ $index }}</td>
            <td>{{ event.eventName }}</td>
            <td>{{ event.eventDate }}</td>
            <td>{{ event.eventTime }}</td>
            <td>{{ event.eventLocation }}</td>
            <td>{{ event.eventDetails }}</td>
            <td><button class="badButton" v-on:click="deleteEvent(event)">Delete</button></td>
        </tr>
        </tbody>
    </table>
</div>

<div id="fake-nav">
    <a href="#register" v-on:click="open('register', $event)">Register</a>
    <a href="#login" v-on:click="open('login', $event)">Login</a>
</div>

<div class="user-modal-container" id="login-modal" v-on:click="close">
    <div class="user-modal">
        <ul class="form-switcher">
            <li v-on:click="flip('register', $event)"><a href="" id="register-form">Register</a></li>
            <li v-on:click="flip('login', $event)"><a href="" id="login-form">Login</a></li>
        </ul>
        <div class="form-register" id="form-register">
            <div class="error-message" v-text="registerError"></div>
            <input type="text" name="name" placeholder="Name" v-model="registerName" v-on="keyup: submit('register', $event) | key 'enter'">
            <input type="email" name="email" placeholder="Email" v-model="registerEmail" v-on="keyup: submit('register', $event) | key 'enter'">
            <input type="password" name="password" placeholder="Password" v-model="registerPassword" v-on="keyup: submit('register', $event) | key 'enter'">
            <input type="submit" v-on:click="submit('register', $event)" v-model="registerSubmit" id="registerSubmit">
            <div class="links">
                <a href="" v-on:click="flip('login', $event)">Already have an account?</a>
            </div>
        </div>
        <div class="form-login" id="form-login">
            <div class="error-message" v-text="loginError"></div>
            <input type="text" name="user" placeholder="Email or Username" v-model="loginUser" v-on="keyup: submit('login', $event) | key 'enter'">
            <input type="password" name="password" placeholder="Password" v-model="loginPassword" v-on="keyup: submit('login', $event) | key 'enter'">
            <input type="submit" v-on:click="submit('login', $event)" v-model="loginSubmit"  id="loginSubmit">
            <div class="links">
                <a href="" v-on:click="flip('password', $event)">Forgot your password?</a>
            </div>
        </div>
        <div class="form-password" id="form-password">
            <div class="error-message" v-text="passwordError"></div>
            <input type="text" name="email" placeholder="Email" v-model="passwordEmail" v-on="keyup: submit('password', $event) | key 'enter'">
            <input type="submit" v-on:click="submit('password', $event)" v-model="passwordSubmit" id="passwordSubmit">
        </div>
    </div> 
</div>