let mutations = {
  CREATE_ACTIVITY(state, activity) {
    state.activities.unshift(activity)
  },
  FETCH_FEATURED_ACTIVITIES(state, activities) {
    return state.activities.featured = activities
  },
  FETCH_ACTIVITIES(state, activities) {
    return state.activities = activities
  },
  DELETE_ACTIVITY(state, activity) {
    let index = state.activities.findIndex(item => item.id === activity.id)
    state.activities.splice(index, 1)
  }
}
export default mutations