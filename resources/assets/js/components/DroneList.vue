<template>
    <div class='row'>
        <div class="col-xs-8 col-xs-offset-2">
            <h1>My Drones</h1>
            <h4>Add Drone</h4>
            <form action="#" @submit.prevent="createDrone()">
                <div class="input-group">
                    <input v-model="drone.body" type="text" name="body" class="form-control" autofocus>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Add Drone</button>
                    </span>
                </div>
            </form>
            <h4>All Drones</h4>
            <ul class="list-group">
                <li v-if='list.length === 0'>There are no drones added to your dashboard.</li>
                <li class="list-group-item" v-for="(drone, index) in list">
                     {{ drone.body }}
                     <button @click="deleteDrone(drone.id)" class="btn btn-danger btn-xs pull-right">Delete</button>
                </li>
            </ul>
        </div>
    </div>
</template>


<script>
    import axios from 'axios'; 
    export default {
        data() {
            return {
                list: [],
                drone: {
                    id: '',
                    body: ''
                }
            };
        },
        
        created() {
            this.fetchDroneList();
        },
        
        methods: {
            fetchDroneList() {
                axios.get('api/drones').then((res) => {
                    this.list = res.data;
                });
            },
 
            createDrone() {
                axios.post('api/drones', this.drone)
                    .then((res) => {
                        this.drone.body = '';
                        this.edit = false;
                        this.fetchDroneList();
                    })
                    .catch((err) => console.error(err));
            },
 
            deleteDrone(id) {
                axios.delete('api/drones/' + id)
                    .then((res) => {
                        this.fetchDroneList()
                    })
                    .catch((err) => console.error(err));
            },
        }
    }
</script>
<style>
  
</style>