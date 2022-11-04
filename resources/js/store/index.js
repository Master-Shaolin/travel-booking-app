import { createStore } from "vuex"
import activityModule from './Activity/module'

const store = createStore({
  modules: {
    activityModule
  }
})

export default store