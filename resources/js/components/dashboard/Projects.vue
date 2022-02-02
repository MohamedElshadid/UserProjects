<template class="text-center">
  <v-data-table
    :headers="headers"
    :items="data"
    class="elevation-1"
  >
      <template v-slot:item.status="{ item }">
      <v-chip
        :color="getColor(item.status)"
        dark
      >
        
      </v-chip>
    </template>
  </v-data-table>

</template>

<script>
  export default {
      props :['data'],
    data () {
      return {
        headers: [
            { text: 'مكان المشروع', value: 'location', sortable: false,},
            { text: 'عدد المهام', value: 'num_tasks', sortable: false,},
            { text: 'حالة المشروع', value: 'status' , sortable: false,},
            { text: 'تاريخ التحديث', value: 'date'},
            { text: 'أسم المشروع', value: 'project_name' , sortable: false,},
            {
                text: 'ID',
                align: 'start',
                value: 'id',
            },
        ],
      }
    },
    created(){
    },
        methods: {
      getColor (status) {
        if (status == 0) return 'red'
        else if (status == 1) return 'orange'
        else return 'green'
      },
    },
  }
</script>
<style scoped>
.theme--dark.v-chip:not(.v-chip--active){
    width: 70px;
    height: 8px;
    border-radius:20px ;
}
.theme--light.v-data-table {
    margin-top: 48px;
}
</style>