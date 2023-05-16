Vue.use(Vuex);

const store = new Vuex.Store({
  state: {
    formData: []
  },
  mutations: {
    setFormData(state, formData) {
      state.formData = formData;
    },
    addFormData(state, formData) {
      state.formData.push(formData);
    }
  },
  actions: {
    saveFormData({ commit, state }, formData) {
      const updatedData = [...state.formData, formData];
      localStorage.setItem('formData', JSON.stringify(updatedData));
      commit('addFormData', formData);
    },
    loadFormData({ commit }) {
      const storedData = localStorage.getItem('formData');
      if (storedData) {
        const formData = JSON.parse(storedData);
        commit('setFormData', formData);
      }
    }
  },
  getters: {
    formData(state) {
      return state.formData;
    }
  }
});
export default store;
