<template>
  <v-card
    :loading="loading"
    class="mx-auto my-12"
    max-width="374"
  >
    <template slot="progress">
      <v-progress-linear
        color="deep-purple"
        height="10"
        indeterminate
      ></v-progress-linear>
    </template>

    <div class="profile">
      <h4 class="name">{{data.name}} مرحبا</h4>
      <img class="img_profile" :src="data.avatar" />
      <div style="width:80%;margin:50px auto">
        <v-row>
          <v-col cols="6" style="color:white">
            {{data.target_task}}%
          </v-col>
          <v-col cols="6" class="text-center" style="color:white">
            نسبة اﻷنجاز
          </v-col>

        </v-row>
          <v-progress-linear :value="data.target_task" 
            height="10" color="#91ff96"
            >
          </v-progress-linear>
      </div>
      
    </div>
      <div class="box">
        <v-row no-gutters style="text-align: center;">
          <v-col cols="3">
            <v-icon
              large
              color="blue-grey darken-4"
              class="icon"
              style="text-center"
            >
              mdi-arrow-left
            </v-icon>
          </v-col>
          <v-col cols="6">
            <h6>اجمالي المهام</h6>
            <h6 style="text-align:center">{{data.tasks}}</h6>
            
          </v-col>
          <v-col cols="3">
            <v-icon
              large
              color="blue-grey darken-4"
              class="icon"
            >
              mdi-resistor
            </v-icon>
          </v-col>
          <v-progress-linear :value="data.tasks" 
              height="7" color="#928e8e"
              >
          </v-progress-linear>
       </v-row>
    </div>
    <div class="box">
        <v-row no-gutters style="text-align: center;">
          <v-col cols="3">
            <v-icon
              large
              color="blue-grey darken-4"
              class="icon"
              style="text-center"
            >
              mdi-arrow-left
            </v-icon>
          </v-col>
          <v-col cols="6">
            <h6>تسجيل الدخول</h6>
            <h6 style="text-align:center">{{data.count_login}}</h6>
            
          </v-col>
          <v-col cols="3">
            <v-icon
              large
              color="blue-grey darken-4"
              class="icon"
            >
              mdi-clock
            </v-icon>
          </v-col>
       </v-row>
    </div>
  </v-card>
</template>

<script>
  export default {
    props :['data'],
    data: () => ({
      loading: false,
      selection: 1,
    }),

    methods: {
      reserve () {
        this.loading = true

        setTimeout(() => (this.loading = false), 2000)
      },
    },
  }
</script>

<style scoped>
.profile{
  margin: 15px;
  height: 270px;
  background: #1d0438;
  border-radius: 20px;
}
.name{
  color: aliceblue;
  padding: 10px;
  text-align: end;
}
.img_profile{
  margin: 0 auto;
  display: block;
  height: 90px;
  width: 90px;
}
.box{
  margin: 15px;
 background:whitesmoke;
 height: 100px;
 padding: 10px;
 border: 1px solid #ccc;
}
.v-progress-linear{
  border-radius: 20px;
  margin-top: 10px;
}
</style>