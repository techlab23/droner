<template>
  
  <div id="drone-list">
    <div class="panel-heading">
    	Drone List
    </div><!-- New Drone Form -->
    <div class="panel-body">
        
        <h4>New Drone</h4>
        <form action="#" @submit.prevent="edit ? updateDrone(drone.id) : createDrone()">
            <div class="input-group">
                <input v-model="drone.body" type="text" name="body" class="form-control" autofocus>
                <span class="input-group-btn">
                    <button v-show="!edit" type="submit" class="btn btn-primary">New Drone</button>
                    <button v-show="edit" type="submit" class="btn btn-primary">Edit Drone</button>
                </span>
            </div>
        </form>
        <h4>All Drones</h4>
        <ul class="list-group">
            <li class="list-group-item" v-for="drone in list">
                {{ drone.body }}
                <button @click="showDrone(drone.id)" class="btn btn-primary btn-xs">Edit</button>
                <button @click="deleteDrone(drone.id)" class="btn btn-danger btn-xs">Delete</button>
            </li>
        </ul>
        
    </div><!-- end .panel-default -->
  </div>
</template>
<script>
    import axios from 'axios'; 
    export default {
        data: function() {
            return {
                edit: false,
                list: [],
                drone: {
                    id: '',
                    body: ''
                }
            };
        },
        
        ready: function() {
            this.fetchDroneList();
        },
        
        methods: {
            fetchdroneList: function() {
                var self = this;
                axios.get('api/drones')
                    .then(function (response) {
                        self.list = response.data
                });
            },
 
            createDrone: function () {
                axios.post('api/drone/store', this.drone)
                this.drone.body = ''
                this.edit = false
                this.fetchdroneList()
            },
 
            updatedrone: function(id) {
                axios.patch('api/drone/' + id, this.drone)
                this.drone.body = ''
                this.edit = false
                this.fetchDroneList()
            },
 
            showdrone: function(id) {
                axios.get('api/drone/' + id)
                    .then(function(response) {
                        this.drone.id   = response.data.id
                        this.drone.body = response.data.body
                })
                this.edit = true
            },
 
            deletedrone: function (id) {
                axios.delete('api/drones/' + id)
                this.fetchDroneList()
            },
        }
    }
</script>
<style>
  
</style>