import actions from './actions'
import mutations from './mutations'
import getters from './getters'
import state from "./state";

const activityModule = {
  namespaced: true,
  state,
  mutations,
  getters,
  actions
}

export default activityModule