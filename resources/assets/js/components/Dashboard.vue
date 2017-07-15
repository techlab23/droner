<template>
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   Good to see you here <strong>{{ user.name }} </strong>!
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
  export default {
    props:['user']
  }
</script>
<style>
  
</style>