<template>
    <!-- <v-toolbar dense> -->
      <!-- <v-app-bar-nav-icon></v-app-bar-nav-icon> -->

      <!-- <v-toolbar-title>Bitfumes</v-toolbar-title>

      <v-spacer></v-spacer> -->
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div>
              <h6>{{data.name}}</h6>
              <span >{{data.email}}</span> &nbsp; <img class="img_profile" :src="data.avatar" />
            </div>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control mr-sm-2 search" type="search" placeholder="Search" aria-label="Search">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <router-link v-for="item in items"
                :key="item.title"
                  :to="item.to">
                  <v-btn text>{{item.title}}</v-btn>
                </router-link>
                </li>
                <li class="nav-item">
                  <v-btn text @click="logout()">Logout</v-btn>
                </li>
              </ul>
              
            </div>
          </nav>
    <!-- </v-toolbar> -->
</template>

<script>
export default {
  props :['data'],
  data(){
    return {
      items:[
        {title : 'Forum' , to:'/home',show:true},
      ]
    }
  },
  created(){
  },
  methods:{
    logout(){
          axios.post("/logout", {
          }).then((response) => {
              window.location.replace("/login")
          }).catch((error) => {
        }) 
    }
  }
}
</script>

<style scoped>
  @media (min-width: 992px) {
      .search {
        position: relative;
        left: 20%;
         width: 30% !important;
      }
      
  }
    @media (max-width: 991px) {
      .search {
         width: 50% !important;
      }
      
  }
  .img_profile{
    width: 40px;
  }

</style>