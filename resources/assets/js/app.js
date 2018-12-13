
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});



const app1 = new Vue({
    el: '#vue-table-tasks',
    data: {
        items: [],
        newItem : {'name':''}
    },
    mounted : function(){
        this.getListItems();
    },
    methods : {
        getListItems: function()
        {
            axios.get('getListTasks').then(response => { this.items = response.data; });
        },
        clearFilter: function()
        {
            $('#clear-filter').hide();
            this.getListItems();
            this.clearFields();
        },
        clearFields: function()
        {
            $('#roles_id').val('empty');
            $('#performer_id').val('empty');
            $('#director_id').val('empty');
            $('#name').val('');
            $('#status_id').val('empty');
            $('#deadline').val('');
        }
    }
});

const app2 = new Vue({
    el: '#vue-modal-filter',
    data: {
        itemsRoles: [],
        itemsPerformers: [],
        itemsDirectors: [],
        itemsStatus: []
    },
    mounted : function(){
        this.fullFilter();
    },
    methods : {
        fullFilter: function()
        {
            axios.get('getListRoles').then(response => { this.itemsRoles = response.data; });
            axios.get('getListPerformers').then(response => { this.itemsPerformers = response.data; });
            axios.get('getListDirectors').then(response => { this.itemsDirectors = response.data; });
            axios.get('getListStatus').then(response => { this.itemsStatus = response.data; });
        },

        searchFilter: function()
        {
            var roles_id = $('#roles_id').val();
            var performer_id = $('#performer_id').val();
            var director_id = $('#director_id').val();
            var name = $('#name').val();
            var status_id = $('#status_id').val();
            var deadline = $('#deadline').val();

            if(roles_id == 'empty' && performer_id == 'empty' && director_id == 'empty' && status_id == 'empty' && name.length == 0  && deadline.length == 0) {
                alert('Заполните поля фильтра!');
                return;
            }

            axios.post('getFilterListTasks', {
                roles_id: roles_id,
                performer_id: performer_id,
                director_id: director_id,
                name: name,
                status_id: status_id,
                deadline: deadline
            }).then(response => { app1.items = response.data; });

            $('#clear-filter').show();
            $('#myModal').modal('hide');
        },

        clearFilter: function()
        {
            $('#clear-filter').hide();
            app1.getListItems();
            app1.clearFields();
        }
    }
});
