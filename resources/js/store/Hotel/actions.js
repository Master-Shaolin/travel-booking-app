let actions = {
  createPost({commit, dispatch}, post) {
    axios.post('/api/posts', post)
			.then(res => {
				commit('CREATE_POST', res.data)
				dispatch("fetchPosts")
			}).catch(err => {
			console.log(err)
    })
  },
  fetchPosts({commit}) {
    axios.get('/api/posts')
			.then(res => {
				commit('FETCH_POSTS', res.data)
			}).catch(err => {
			console.log(err)
    })
  },
  deletePost({commit, dispatch}, post) {
    axios.delete(`/api/posts/${post.id}`)
			.then(res => {
			if (res.data === 'ok')
				commit('DELETE_POST', post)
				dispatch("fetchPosts")
			}).catch(err => {
			console.log(err)
    })
  }
}

export default actions