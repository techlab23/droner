<template>
  
  <div class="container">
    <div class="row">
      
        <div class="col-md-2">
          
          <div class="panel panel-default">
            
              <div class="panel-heading">Dashboard</div>

              <div class="panel-body">
                 Left Hand Panel
              </div>
              
          </div>
            
        </div><!-- end .col-md-2 -->
        
        <div class="col-md-8">
          
            <div class="panel panel-default">
              
                <div class="panel-heading">Dashboard</div>
                
                <div class="panel-body">
                   Good to see you here <strong>{{ user.name }}</strong>!
                </div>
                
            </div>
            
            <div class="panel panel-default">
                
                <DroneList></DroneList>
                  
            </div><!-- end .col-md-8 -->
            
        </div><!-- end .col-md-8 -->
        
        
        <div class="col-md-2">
          
          <div class="panel panel-default">
            
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   Right Hand Panel
                </div>
                
            </div>
            
         </div><!-- end .panel-default -->
        
    </div><!-- end .row -->
</div><!-- end .container -->

</template>
<script>
  import DroneList from './DroneList.vue';
  export default {
    props:['user'],
    components: { 
      DroneList
    }
  }
</script>
<style>
  
</style>