<template>
    <div>
        <toolbar :data = data v-if="data"></toolbar>
        <router-view></router-view>
        <appfooter></appfooter>
    </div>
</template>

<script>
import toolbar from './Toolbar';
import appfooter from './AppFooter'
export default {
components:{toolbar,appfooter},
  data(){
    return {
      data     : null,
    }
  },
  created(){
        axios.get(`/profile`)
        .then(res => {
          this.data     = res.data.user
        })
        .catch(error => console.log(error))
  }
}
</script>

<style>

</style>