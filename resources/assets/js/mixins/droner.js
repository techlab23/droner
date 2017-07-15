export default {
  data() {
    return {
      user: null 
    }
  },
  created: function () {
    this.user = Droner.AppData ? Droner.AppData.user : null
  },
}
