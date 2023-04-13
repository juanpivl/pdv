import { createStore } from 'vuex'

const store = createStore({
  state: {
    productos: []
  },
  mutations: {
    setProductos(state, productos) {
      state.productos = productos
    }
  },
  actions: {
    async fetchProductos({ commit }) {
      //demo
      const response = await fetch('http://localhost/pdv/public/config/')
     //const response = await fetch('https://databases.000webhost.com/db_structure.php?server=1&db=id20594048_productos')
      const data = await response.json()
      commit('setProductos', data)
    }
  },
  getters: {
    productos: (state) => state.productos
  }
})

export default store
