<template>
  <v-container  grid-list-xl>
    <v-layout row >
      <v-flex md8>
        <Charts></Charts>
        <Projects :data = projects v-if="projects"></Projects>
      </v-flex>
      <v-flex md4>
        <Dashboard :data = data v-if="data"></Dashboard>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
import Dashboard from '../dashboard/Dashboard'
import Projects from '../dashboard/Projects'
import Charts from '../dashboard/Charts'
export default {
  components:{Dashboard,Projects,Charts},
  data(){
    return {
      data     : null,
      projects : [],
    }
  },
  created(){
        axios.get(`/profile`)
        .then(res => {
          this.data     = res.data.user
          this.projects = res.data.projects
        })
        .catch(error => console.log(error))
  }
}
</script>

<style>
.v-card>.v-card__progress+:not(.v-btn):not(.v-chip):not(.v-avatar), .v-card>:first-child:not(.v-btn):not(.v-chip):not(.v-avatar) {
    border-top-left-radius: 20px !important;
    border-top-right-radius: 20px !important;
}
.v-sheet.v-card:not(.v-sheet--outlined){
  padding: 10px;
}
.container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1440px;
}
</style>