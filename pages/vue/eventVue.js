var viewmodel = new Vue({
    el: '#events',
 
    data: {
        sortparam: '',
        fitlerkey: '',
        order: 1,
        event: {eventID: '', eventName: '', eventDetails: '', eventDate: '', eventTime: '', eventLocation: ''},
        events: []
    },

    // Anything within the ready function will run when the application loads
    ready: function() {
        // When the application loads, we want to call the method that initializes
        // some data
        this.fetchEvents();
    },
 
    // Methods we want to use in our application are registered here
    methods: {
        sortvia: function (sortparam, order) {
            this.order = this.order * -1;
            this.sortparam = sortparam;
        },

        // We dedicate a method to retrieving and setting some data
        fetchEvents: function() {
            var events = [
                {
                    eventID: 1,
                    eventName: 'Mozzie\'s Derpday Bash',
                    eventDetails: 'Party for my dog',
                    eventDate: '06/10/2016',
                    eventTime: '06:30',
                    eventLocation: 'My House'
                },
                {
                    eventID: 2,
                    eventName: 'Jake\'s Birthday',
                    eventDetails: 'Party for Jake',
                    eventDate: '05/14/2016',
                    eventTime: '06:30',
                    eventLocation: 'My House'
                },
                {
                    eventID: 3,
                    eventName: 'Anniversary',
                    eventDetails: 'Four years',
                    eventDate: '05/18/2016',
                    eventTime: '06:30',
                    eventLocation: 'My House'
                }
            ];

            // $set is a convenience method provided by Vue that is similar to pushing
            // data onto an array
            this.$set('events', events);
        },

        // Adds an event to the existing events array
        addEvent: function() {
            if(this.event.eventName) {
                this.events.push(this.event);
                this.event = {eventID: '', eventName: '', eventDetails: '', eventDate: '', eventTime: '', eventLocation: ''};
            }
        },

        // Removes an event from the existing events array
        deleteEvent: function(event) {
            if(confirm("Are you sure you want to delete this event?")) {
                // $remove is a Vue convenience method similar to splice
                this.events.$remove(event);
            }
        }
    }
});

var nav = new Vue({  
    el: '#fake-nav',
    methods: {
        open: function(which, e) {  
            e.preventDefault();
            console.log(modal.active);
            if (modal.active !== null) {
                $('#form-'+modal.active).removeClass('active');
                $('#'+modal.active+'-form').removeClass('active');
            }

            $('#login-modal').addClass('active');
            $('#form-'+which).addClass('active');
            $('#'+which+'-form').addClass('active');
            modal.active = which;
        }
    }
});

var modal_submit_register = 'Register';  
var modal_submit_password = 'Reset Password';  
var modal_submit_login    = 'Login';

var modal = new Vue({  
    el: '#login-modal',
    data: {
        // Submit button text
        registerSubmit: modal_submit_register,
        passwordSubmit: modal_submit_password,
        loginSubmit: modal_submit_login,

        // Modal text fields
        registerName:     '',
        registerEmail:    '',
        registerPassword: '',
        loginUser:        '',
        loginPassword:    '',
        passwordEmail:    '',

        // Modal error messages
        registerError: '',
        loginError:    '',
        passwordError: '',
        active: null,
        lock: false
    },
    methods: {
        close: function(e) {
            e.preventDefault();
            if(e.target === this.$el){
                $('#login-modal').removeClass('active');
            }
        },
        flip: function(which, e) {
            e.preventDefault();
            if (which !== this.active) {
                $('#form-' + this.active).removeClass('active');
                $('#form-' + which).addClass('active');
                $('#'+which+'-form').addClass('active');
                $('#'+this.active+'-form').removeClass('active');

                // Remove error messages
                this.$set('registerError', '');  
                this.$set('passwordError', '');  
                this.$set('loginError', ''); 

                this.active = which;
            }
        },
        submit: function(which, e) {
            e.preventDefault();
            if (this.lock === true) return;  
            // If we get this far, now we lock it!
            this.lock = true; 
            
            $('#'+which+'Submit').addClass('disabled');
            var data = {
                form: which
            };

            switch(which) {
                case 'register':
                    data.name = this.registerName;
                    data.email = this.registerEmail;
                    data.password = this.registerPassword;
                    this.$set('registerSubmit', 'Registering...');
                    break;
                case 'login':
                    data.user = this.loginUser;
                    data.password = this.loginPassword;
                    this.$set('loginSubmit', 'Logging In...');
                    break;
                case 'password':
                    data.email = this.passwordEmail;
                    this.$set('passwordSubmit', 'Resetting Password...')
                    break;
            }

            // TODO: submit our `data` variable
        }
    }
});

new Vue({
    el: '#app',

    methods: {
        showModal: function() {
            alert("It's working!");
        }
    }
});